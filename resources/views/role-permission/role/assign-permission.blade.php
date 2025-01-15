<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assign Permission') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold">Assign Permission to {{ $role->name }}</h2>
                    {{-- show success message--}}
                    <form action="{{ route('roles.assign-permission', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="permission" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Permission</label>
                            @foreach ($permissions as $permission)
                                <div class="mt-1">
                                    <div class="flex items-center">
                                        <input
                                            id="{{ $permission->id }}"
                                               type="checkbox"
                                               name="permission[]"
                                               value="{{ $permission->name }}"
                                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded cursor-pointer border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }}>
                                        <label for="{{ $permission->id }}" class="ml-2 text-sm cursor-pointer font-medium text-gray-900 dark:text-gray-300">{{ $permission->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                            @error('permission')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Assign Permission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
