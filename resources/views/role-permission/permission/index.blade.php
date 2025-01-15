<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- show success message--}}
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div class="flex justify-between mb-4">
                        <h2 class="text-2xl font-semibold">Permissions</h2>
                        <a href="{{ route('permissions.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Permission</a>
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
                            @foreach ($permissions as $permission)
                                <tr class="bg-gray-100 dark:bg-gray-800">
                                    <td class="border">{{ $permission->id }}</td>
                                    <td class="border">{{ $permission->name }}</td>
                                    <td class="border">
                                        <a href="{{ route('permissions.edit', $permission->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
{{--                                            when you click the delete button, the form will be submitted--}}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this permission?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
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
