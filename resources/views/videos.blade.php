@extends('layouts.app')

@section('content')
    <section class="py-12 bg-gray-50">
        <h1 class="text-3xl font-bold text-center mb-10">
            All Video Gallery
        </h1>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($videos as $video)
                <div class="bg-white rounded shadow overflow-hidden">
                    <iframe class="w-full h-56" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0"
                        allowfullscreen>
                    </iframe>

                    @if ($video->title)
                        <div class="btn btn-primary">
                            {{ $video->title }}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection
