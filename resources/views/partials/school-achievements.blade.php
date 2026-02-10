<section class="section-theme">
    <h2 class="text-center font-semibold leading-tight py-8">
        <span class="inline-block  text-3xl md:text-5xl relative "> Events & Achievements
    </h2>
    <div class="grid md:grid-cols-3 gap-6">
        @foreach ($events as $event)
            <div
                class="border border-gray-200 hover:bg-gray-50 hover:border-gray-300/20 shadow-base-300/20 rounded-3xl p-2 shadow-lg overflow-hidden">

                <a href="{{ route('events.show', $event) }}" target="_blank">
                    <img src="{{ asset('storage/' . $event->image) }}"
                        class="h-80 w-full object-cover px-1 py-1 rounded-3xl">
                </a>
                <div class="p-2">
                    <span
                        class="text-xs px-3 py-1 rounded-full
{{ $event->type === 'achievement' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">
                        {{ ucfirst($event->type) }}
                    </span>
                    <div class="flex justify-between items-center py-3">
                        <a href="{{ route('events.show', $event) }}" target="_blank">
                            <h3 class="font-semibold ">{{ $event->title }}</h3>
                        </a>
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
    <div class="text-center mt-8">
        <a href="{{ route('events.public') }}" class="btn btn-secondry">
            View All
        </a>
    </div>
</section>
