<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Subject') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('nu-subject.update', $subject->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Subject Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" value="{{ $subject->name }}" />
                        </div>
                        <div class="mb-4">
                            <label for="code" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Subject Code</label>
                            <input type="text" name="code" id="code" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" value="{{ $subject->code }}" />
                        </div>
                        <div class="mb-4">
                            <label for="credit" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Credit</label>
                            <input type="text" name="credit" id="credit" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" value="{{ $subject->credit }}" />
                        </div>
                        <div class="mb-4">
                            <label for="semester" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Semester</label>
                            <input type="text" name="semester" id="semester" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-gray-200" value="{{ $subject->semester }}" />
                        </div>
                        <div class="mb-4">
                            <label for="program_id" class="block text sm font-medium text-gray-700 dark:text-gray-200">Program</label>
                            <select name="program_id" id="program_id" class="form-select mt-1 block w-full dark:bg-gray-700 dark:text-gray-200">
                                <option value="">Select Program</option>
                                @foreach($programs as $program)
                                    <option value="{{ $program->id }}" {{ $subject->program_id == $program->id ? 'selected' : '' }}>{{ $program->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
