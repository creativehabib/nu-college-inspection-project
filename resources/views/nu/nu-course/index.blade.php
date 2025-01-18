<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Course List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- error message--}}
                @if (session('success'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('nu-course.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Course</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Course Name
                                </th>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Course Code
                                </th>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-2 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-2 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($courses as $course)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 dark:text-gray-100">{{ ($courses->currentPage() - 1) * $courses->perPage() + $loop->iteration }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 dark:text-gray-100">{{ $course->name }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 dark:text-gray-100">{{ $course->code }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 dark:text-gray-100">{{ $course->program->name }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-center">
                                        <input type="checkbox"
                                               data-id="{{ $course->id }}"
                                               class="toggle-class"
                                            {{ $course->status ? 'checked' : '' }}>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 dark:text-gray-100">{{ $course->created_at->diffForHumans() }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-center text-sm font-medium">
                                        <a href="{{ route('nu-subject.edit', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('nu-subject.destroy', $course->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete </button>
                                         </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-center" colspan="6">No Course Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{--ajax checkbox data update--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Set up AJAX with CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Handle the toggle switch change
        $('.toggle-class').change(function () {
            const status = $(this).prop('checked') ? 1 : 0;
            const coursetId = $(this).data('id');

            $.ajax({
                type: 'POST',
                url: '{{ route('nu-course.update.status') }}',
                data: {
                    id: coursetId,
                    status: status
                },
                success: function (response) {
                    alert(response.success); // Show success message
                    location.reload(); // Reload the page to update the table
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Log the error response
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>
