<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users data & user role
        $users = User::with('roles')->latest()->paginate(5);

        return view('role-permission.user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create user with role
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('role-permission.user.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles($request->roles);

        return redirect('/users')->with('status','User created successfully with roles');
    }

    // edit user
    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRoles = $user->roles->pluck('name','name')->all();
        return view('role-permission.user.edit', [
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }

    // update user
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if(!empty($request->password)){
            $data += [
                'password' => Hash::make($request->password),
            ];
        }

        $user->update($data);
        $user->syncRoles($request->roles);

        return redirect('/users')->with('succes','User Updated Successfully with roles');
    }

    // delete user
    public function destroy(User $user)
    {
        // Get the currently authenticated user's ID
        $currentUserId = auth()->user()->id;

        // Check if the ID to be deleted is the same as the current user's ID
        if ($currentUserId == $user->id) {
            return redirect()->back()->with('error', 'You cannot delete yourself.');
        }

        // Find the user to delete
        $user = User::find($user->id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Perform the delete operation
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    // assign role to user
    public function assignRole(User $user)
    {
        $roles = Role::all();
        // user has roles
        $userRoles = DB::table('model_has_roles')
            ->where('model_has_roles.model_id', $user->id)
            ->pluck('model_has_roles.role_id','model_has_roles.role_id')
            ->all();

        return view('role-permission.user.assign-role', compact('user', 'roles', 'userRoles'));
    }

}
