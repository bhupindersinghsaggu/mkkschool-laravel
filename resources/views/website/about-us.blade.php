@extends('layouts.app')

@section('title', 'about-us')

@section('content')

    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl font-bold text-blue-900 mb-4">Who We Are</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Our school is a forward-looking educational institution dedicated
                    to academic excellence, holistic development, and value-based learning.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    We focus on developing critical thinking, creativity, discipline,
                    and moral values while integrating modern teaching methodologies
                    and technology-driven education.
                </p>
            </div>
            <div>
                <img src="/images/about-school.jpg" alt="School Campus" class="rounded-lg shadow-lg w-full">
            </div>
        </div>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">

            <!-- Vision -->
            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-blue-900 mb-3">Our Vision</h3>
                <p class="text-gray-700 leading-relaxed">
                    To create a nurturing learning environment that empowers students
                    to become confident, responsible, and globally aware citizens.
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-blue-900 mb-3">Our Mission</h3>
                <ul class="text-gray-700 space-y-2 list-disc list-inside">
                    <li>Deliver quality education aligned with modern standards</li>
                    <li>Promote moral values, discipline, and life skills</li>
                    <li>Encourage creativity, innovation, and critical thinking</li>
                    <li>Prepare students for higher education and real-world challenges</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-theme">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-blue-900 mb-10">Why Choose Us</h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">

                <div class="p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="font-semibold mb-2">Qualified Faculty</h4>
                    <p class="text-gray-600 text-sm">
                        Experienced and dedicated teachers focused on student success.
                    </p>
                </div>

                <div class="p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="font-semibold mb-2">Modern Infrastructure</h4>
                    <p class="text-gray-600 text-sm">
                        Smart classrooms, labs, library, and activity spaces.
                    </p>
                </div>

                <div class="p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="font-semibold mb-2">Holistic Development</h4>
                    <p class="text-gray-600 text-sm">
                        Equal focus on academics, sports, arts, and values.
                    </p>
                </div>

                <div class="p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="font-semibold mb-2">Safe Environment</h4>
                    <p class="text-gray-600 text-sm">
                        Secure campus with disciplined and caring atmosphere.
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
