@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl">Transport Facilities</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    Dr. M.K.K. ARYA MODEL SCHOOL provides safe, reliable, and well-organized transport facilities for
                    students to ensure a comfortable and secure journey to and from school. The school operates a fleet of
                    well-maintained buses covering various routes, making transportation convenient for students from nearby
                    areas.

                    All school buses are equipped with essential safety features and are driven by experienced, licensed
                    drivers, supported by trained attendants to ensure student safety at all times. Regular vehicle
                    maintenance, cleanliness, and adherence to traffic and safety regulations are strictly followed. The
                    transport system is designed to offer parents peace of mind while ensuring punctuality and convenience
                    for students.
                </p>
            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/transport.jpg" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
