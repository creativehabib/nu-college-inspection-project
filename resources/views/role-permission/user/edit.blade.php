<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" value="{{ $user->name }}" />
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                                <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" value="{{ $user->email }}" />
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                                <input type="password" name="password" id="password" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" />
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" />
                            </div>
                            <div class="mb-4">
                                <label for="roles" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Roles</label>
                                <select name="roles[]" id="roles" class="form-multiselect block w-full dark:bg-gray-700 dark:text-gray-200">
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role }}" {{ $user->roles->contains($role) ? 'selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update User</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
