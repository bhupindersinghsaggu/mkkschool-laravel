@if (isset($videos) && $videos->count())
    <section class="py-12 bg-gray-50">
        <div class="section-theme px-4">

            <h2 class="text-3xl font-bold text-center mb-8">
                Video Gallery
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($videos as $video)
                    <div class="px-4 py-4">
                        <div class="bg-white shadow overflow-hidden px-4 py-4  border border-gray-200   hover:border-blue-400">
                            <iframe class="w-full h-56  rounded-lg"
                                src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0"
                                allowfullscreen>
                            </iframe>

                            @if ($video->title)
                                <div class="py-3 mt-3 font-semibold ">
                                    <span class="text-lg px-3 py-1 rounded-full bg-green-100 text-green-700">
                                        {{ $video->title }}</span>
                                </div>
                            @endif
                        </div>
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
