@extends('layouts.dashboard')

@section('content')
<div class="max-w-6xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">Video Gallery</h1>

    {{-- Add Video --}}
    <form method="POST" action="{{ route('videos.store') }}" class="bg-white p-4 rounded shadow mb-6">
        @csrf

        <input type="text" name="title" placeholder="Video Title"
               class="border p-2 w-full mb-3">

        <input type="text" name="youtube_url" placeholder="YouTube URL"
               class="border p-2 w-full mb-3" required>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Add Video
        </button>
    </form>

    {{-- Video List --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($videos as $video)
            <div class="bg-white shadow rounded p-3">
                <iframe width="100%" height="180"
                    src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
                    frameborder="0" allowfullscreen></iframe>

                <p class="mt-2 font-semibold">{{ $video->title }}</p>

                <form method="POST"
                      action="{{ route('videos.destroy', $video) }}"
                      onsubmit="return confirm('Delete this video?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 mt-2">Delete</button>
                </form>
            </div>
        @endforeach
    </div>

</div>
@endsection
