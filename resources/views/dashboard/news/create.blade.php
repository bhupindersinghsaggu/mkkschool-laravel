@extends('layouts.dashboard')

@section('title', 'Add News')

@section('content')

    <div class=" mx-auto bg-white p-6 rounded shadow">

        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold mb-6">Add News</h1>
            <div>
                <a href="{{ route('news.index') }}" class="btn btn-outline">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
            </div>
        </div>

        <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf

            <label class="block mb-2 font-medium">Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded mb-4" required>

            <label class="block mb-2 font-medium">Description</label>
            <textarea name="description" rows="4" class="w-full border p-2 rounded mb-4"></textarea>

            <label class="block mb-2 font-medium">External Link (optional)</label>
            <input type="url" name="link" class="w-full border p-2 rounded mb-4">

            <label class="block mb-2 font-medium">PDF Upload (optional)</label>
            <input type="file" name="pdf" accept="application/pdf" class="mb-4">

            <button class="bg-blue-600 text-white px-6 py-2 rounded">
                Publish News
            </button>
        </form>
    </div>

@endsection
