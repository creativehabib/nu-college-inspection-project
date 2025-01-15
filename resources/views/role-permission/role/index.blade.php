<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h2 class="text-2xl font-semibold">Roles</h2>
                        <a href="{{ route('roles.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Role</a>
                    </div>
                    <table class="w-full border">
                        <thead>
                            <tr class="bg-gray-50 dark:bg-gray-700">
                                <th class="border">ID</th>
                                <th class="border">Name</th>
                                <th class="border">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="bg-gray-100 dark:bg-gray-800">
                                    <td class="border">{{ $role->id }}</td>
                                    <td class="border">{{ $role->name }}</td>
                                    <td class="border">
{{--                                        add or edit role permissions--}}
                                        <a href="{{ route('roles.assign-permission', $role->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Assign Permission</a>
                                        <a href="{{ route('roles.edit', $role->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            {{-- when you click the delete button, the form will be submitted--}}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this role?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
