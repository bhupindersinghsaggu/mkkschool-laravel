<section class="section-theme">
    <h2 class="text-center font-semibold leading-tight py-8">
        <span class="inline-block  text-3xl md:text-5xl relative ">    Events & Achievements
    </h2>
    <div class="grid md:grid-cols-4 gap-6">
        @foreach ($events as $event)
            <div
                class="border border-gray-200 hover:bg-gray-50 hover:border-gray-300/20 shadow-base-300/20 rounded-3xl p-2 shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $event->image) }}" class="h-80 w-full object-cover px-1 py-1 rounded-3xl">

                <div class="p-2">
                    <span
                        class="text-xs px-3 py-1 rounded-full
{{ $event->type === 'achievement' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">
                        {{ ucfirst($event->type) }}
                    </span>
                    <div class="flex justify-between items-center py-3">

                        <h3 class="font-semibold ">{{ $event->title }}</h3>
                        <p class="text-sm text-gray-500 ">
                            <i class="fas fa-calendar-alt text-blue-600"></i>
                            {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                        </p>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">
                        {{ Str::limit($event->description, 30) }}
                    </p>
                    @if ($event->button_link)
                        <a href="{{ route('events.show', $event) }}" target="_blank" class="btn btn-outline ">
                            View More
                        </a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>

<div class="bg-base-200 py-8 sm:py-16 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="bg-base-100 shadow-base-300/20 rounded-3xl p-8 shadow-lg sm:p-16 lg:p-24">
            <div
                class="flex justify-between gap-8 max-md:flex-col max-sm:items-center max-sm:text-center md:items-center">
                <div class="max-w-xs lg:max-w-lg">
                    <h2 class="text-base-content mb-4 text-3xl font-bold">Download our mobile app</h2>
                    <p class="text-base-content/80">
                        With a variety of unique blocks, you can effortlessly create a page without any coding. Build
                        your next
                        landing page with ease.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-6 max-md:w-full max-md:flex-col md:justify-end">
                    <a href="#"
                        class="bg-base-content text-base-100 flex w-fit items-center gap-4 rounded-xl px-6 py-3">
                        <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/cta/apple-icon.png"
                            alt="App Store" class="w-7" />
                        <div class="flex flex-col">
                            <p class="text-xs">Download on the</p>
                            <p class="font-medium">App Store</p>
                        </div>
                    </a>
                    <a href="#"
                        class="bg-base-content text-base-100 flex w-fit items-center gap-4 rounded-xl px-6 py-3">
                        <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/cta/google-play-icon.png"
                            alt="Google Play" class="w-8.5" />
                        <div class="flex flex-col">
                            <p class="text-xs">Download on the</p>
                            <p class="font-medium">Google Play</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
