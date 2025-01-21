<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold">Program List</h2>
                    <div class="flex justify-end">
                        <a href="{{ route('nu-program.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Program</a>
                    </div>
                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-700 mt-4">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">No</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Code</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-2 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Created At</th>
                                <th class="px-6 py-2 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($programs as $program)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ ($programs->currentPage() - 1) * $programs->perPage() + $loop->iteration }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ $program->name }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ $program->code }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ $program->type }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap text-center">
                                        <input type="checkbox"
                                               data-id="{{ $program->id }}"
                                               class="toggle-class"
                                            {{ $program->status ? 'checked' : '' }}>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">{{ $program->created_at->diffForHumans() }}</td>
                                    <td class="px-6 py-2 text-center whitespace-nowrap">
                                        <a href="{{ route('nu-program.edit', $program->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('nu-program.destroy', $program->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-center" colspan="7">No Program Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $programs->links() }}
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
            const programId = $(this).data('id');

            $.ajax({
                type: 'POST',
                url: '{{ route('nu-program.update.status') }}',
                data: {
                    id: programId,
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
