@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Dance & Music</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    The Dance and Music Department at Dr. M.K.K. ARYA MODEL SCHOOL plays a vital role in nurturing students’
                    creative expression and cultural awareness. The school provides dedicated spaces for dance and music
                    activities, where students are encouraged to explore their talents and develop confidence through
                    performance-based learning.
                </p>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Students receive training in classical, folk, and contemporary dance forms, along with vocal and
                    instrumental music. Regular practice sessions, cultural programs, celebrations, and competitions help
                    students refine their skills while fostering discipline, teamwork, and stage confidence. Through dance
                    and music, the school promotes emotional well-being, creativity, and a deep appreciation for art and
                    culture, contributing to the holistic development of every learner.
                </p>

            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/faclities/dance.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
