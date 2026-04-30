@extends('admin.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-12">
        <!-- Heading Section -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-white mb-2">Create New Section</h1>
            <p class="text-lg text-gray-400">Add new sections to your portfolio content and manage it efficiently.</p>
        </div>

        <!-- Form Section -->
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
            <form action="{{ route('admin.portfolio_content.store') }}" method="POST">
                @csrf

                <!-- Section Name -->
                <div class="mb-6">
                    <label for="section_name" class="block text-lg font-semibold text-white">Section Name</label>
                    <input
                        type="text"
                        name="section_name"
                        id="section_name"
                        required
                        class="w-full mt-2 px-4 py-3 bg-gray-700 text-white rounded-lg border border-gray-600 focus:border-indigo-500 focus:outline-none"
                    />
                </div>

                <!-- Content -->
                <div class="mb-6">
                    <label for="content" class="block text-lg font-semibold text-white">Content</label>
                    <textarea
                        name="content"
                        id="content"
                        rows="10"
                        required
                        class="w-full mt-2 px-4 py-3 bg-gray-700 text-white rounded-lg border border-gray-600 focus:border-indigo-500 focus:outline-none"
                    ></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button
                        type="submit"
                        class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-200"
                    >
                        Save Section
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection