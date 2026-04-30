@extends('admin.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-12 mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-white">Manage Portfolio Content</h1>
            <a href="{{ route('admin.portfolio_content.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-200">
                Add New Section
            </a>
        </div>

        <!-- Table Section -->
        <div class="overflow-hidden shadow-xl rounded-lg bg-gray-800">
            <table class="min-w-full bg-slate-800 border-collapse border border-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-lg font-semibold text-gray-300">Section Name</th>
                        <th class="px-6 py-3 text-left text-lg font-semibold text-gray-300">Content</th>
                        <th class="px-6 py-3 text-center text-lg font-semibold text-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-200">
                    @foreach ($content as $item)
                        <tr class="border-t border-gray-700">
                            <td class="px-6 py-4">{{ $item->section_name }}</td>
                            <td class="px-6 py-4 truncate max-w-xs">{{ $item->content }}</td>
                            <td class="px-6 py-4 flex justify-center space-x-4">
                                <a href="{{ route('admin.portfolio_content.edit', $item->id) }}" class="text-indigo-500 hover:text-indigo-700 transition duration-200">Edit</a>
                                <form action="{{ route('admin.portfolio_content.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 transition duration-200">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
            {{ $content->links() }} <!-- This will show pagination links -->
        </div>
    </div>
@endsection