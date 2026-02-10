@extends('layouts.app')

@section('title', 'All Events')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> School Events</h1>
    </section>
    <section class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">

            @if ($events->count() === 0)
                <p class="text-center text-gray-500">
                    No events available at the moment.
                </p>
            @endif
            {{-- FILTER FORM --}}
            {{-- FILTER BAR --}}
            <form method="GET" class="mb-8 bg-white p-4 rounded shadow">
                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4">

                    {{-- Year Filter --}}
                    <select name="year" class="border rounded p-2">
                        <option value="">All Years</option>
                        @foreach ($years as $year)
                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Type Filter --}}
                    <select name="type" class="border rounded p-2">
                        <option value="">All Types</option>
                        @foreach ($types as $type)
                            <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Buttons --}}
                    <div class="flex gap-2">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Apply
                        </button>

                        <a href="{{ route('events.public') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                            Reset
                        </a>
                    </div>

                </div>
            </form>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($events as $event)
                    <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">

                        {{-- Event Image --}}
                        @if ($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                class="w-full h-48 object-cover">
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                                No Image
                            </div>
                        @endif

                        <div class="p-5">
                            {{-- Date --}}
                            <p class="text-sm text-gray-500 mb-1">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                            </p>

                            {{-- Title --}}
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                {{ $event->title }}
                            </h3>

                            {{-- Short Description --}}
                            <p class="text-sm text-gray-600 mb-4">
                                {{ Str::limit($event->description, 100) }}
                            </p>

                            {{-- Read More --}}
                            <a href="{{ route('events.show', $event) }}"
                                class="inline-block text-blue-600 font-medium hover:underline">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10">
                {{ $events->links() }}
            </div>
        </div>
    </section>

@endsection
