<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users data & user role
        $users = User::with('roles')->latest()->paginate(5);

        return view('role-permissions.user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
