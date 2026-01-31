@if (isset($videos) && $videos->count())
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">

            <h2 class="text-3xl font-bold text-center mb-8">
                Video Gallery
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($videos as $video)
                    <div class="bg-white rounded shadow overflow-hidden">
                        <iframe class="w-full h-56" src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
                            frameborder="0" allowfullscreen>
                        </iframe>

                        @if ($video->title)
                            <div class="p-3 font-semibold text-center">
                                {{ $video->title }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ url('/videos') }}"
                    class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    View All Videos
                </a>
            </div>

        </div>
    </section>
@endif
