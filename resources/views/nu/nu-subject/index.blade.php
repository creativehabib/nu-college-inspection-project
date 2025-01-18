<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('NU Subject') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- Succes message--}}
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold">NU Subject</h2>
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('nu-subject.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add NU Subject</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">No</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Code</th>
                                <th class="px-6 py-2 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">Status</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Created At</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse( $subjects as $subject )
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ ($subjects->currentPage() - 1) * $subjects->perPage() + $loop->iteration }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ $subject->name }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ $subject->code }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap text-center">
                                        <input type="checkbox"
                                               data-id="{{ $subject->id }}"
                                               class="toggle-class"
                                            {{ $subject->status ? 'checked' : '' }}>
                                    </td>

                                    <td class="px-6 py-2 whitespace-nowrap">{{ $subject->created_at->diffForHumans() }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <a href="{{ route('nu-subject.edit', $subject->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('nu-subject.destroy', $subject->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-center" colspan="4">No Subject Found</td>
                                </tr>

                            @endforelse

                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $subjects->links() }}
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
            const subjectId = $(this).data('id');

            $.ajax({
                type: 'POST',
                url: '{{ route('nu-subject.update.status') }}',
                data: {
                    id: subjectId,
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

