@if (isset($videos) && $videos->count())
    <section class="py-12 bg-gray-50">
        <div class="section-theme px-4">
            <h2 class="text-center font-semibold leading-tight py-8">
                <span class="inline-block  text-3xl md:text-5xl relative "> Video Gallery
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($videos as $video)
                    <div
                        class="px-4 py-4 border border-gray-200 hover:border-gray-300/20 shadow-base-300/20 rounded-2xl p-2 shadow-lg">
                        <div class="overflow-hidden">
                            <iframe class="w-full h-80  rounded-lg"
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
                    class="btn btn-secondry">
                    View All Videos
                </a>
            </div>

        </div>
    </section>
@endif
