@extends('layouts.app')
{{-- use your frontend layout: layouts.website / layouts.app / layouts.frontend --}}

@section('content')
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Page Heading -->
            <h1 class="text-3xl font-bold text-center mb-10">
                Our Teachers
            </h1>

            <!-- Teacher Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @forelse($teachers as $teacher)
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                        <!-- Photo -->
                        <div class="h-56 bg-gray-100 flex items-center justify-center">
                            @if ($teacher->photo)
                                <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}"
                                    class="h-full w-full object-cover">
                            @else
                                <img src="{{ asset('assets/images/default-teacher.png') }}"
                                    class="h-32 w-32 object-cover opacity-40">
                            @endif
                        </div>

                        <!-- Details -->
                        <div class="p-4 text-left space-y-2">
                            <h3 class="text-lg font-semibold">
                                {{ $teacher->name }}
                            </h3>
                            <span
                                class="inline-block mt-2 px-3 py-1 text-xs rounded-full
                            bg-blue-100 text-blue-700 font-semibold">
                                {{ $teacher->type }}
                            </span>
                            <p class="text-sm text-gray-600">
                                <strong> Qualification </strong>{{ $teacher->qualification }}
                            </p>

                            <p class="text-sm">
                                <strong>Subject:</strong>
                                {{ $teacher->subject ?? '-' }}
                            </p>

                            <p class="text-sm">
                                <strong>Class Taught:</strong>
                                {{ $teacher->class_taught ?? '-' }}
                            </p>


                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">
                        No teachers available.
                    </p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
