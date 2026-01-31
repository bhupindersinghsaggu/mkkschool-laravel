@extends('website.layouts.app')

@section('content')
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-3xl font-bold text-center mb-10">
                Video Gallery
            </h1>

            @if ($videos->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($videos as $video)
                        <div class="bg-white rounded shadow overflow-hidden">
                            <iframe class="w-full h-56" src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
                                frameborder="0" allowfullscreen>
                            </iframe>

                            @if ($video->title)
                                <div class="p-3 text-center font-semibold">
                                    {{ $video->title }}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="mt-10">
                    {{ $videos->links() }}
                </div>
            @else
                <p class="text-center text-gray-500">
                    No videos available.
                </p>
            @endif
        </div>
    </section>
@endsection
