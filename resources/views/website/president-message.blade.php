@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> President's Message</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    Education is both a profound responsibility and an immense privilege. The students of today are the
                    leaders of tomorrow. At MKK School, we are dedicated to guiding young minds to become successful,
                    compassionate citizens by instilling virtues such as perseverance, tolerance, and integrity while
                    enhancing their mental and physical abilities. We believe in fostering independent thought and
                    creativity, allowing each child's unique talents to flourish. Respecting individuality is crucial, yet
                    we also recognize the importance of teamwork. Our commitment to nurturing these values requires complete
                    dedication from our school and staff. In this journey, we work closely with parents to complete the MKK
                    School family, ensuring a supportive and collaborative environment for all.
                </p>
                <div class="mt-4">
                    <h4 class="name inner-title">Mr. Sanjiv Kapur</h4>
                    <p class="designation"><b>President </b></p>
                </div>
            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/faclities/chem.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
