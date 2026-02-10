@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Physics Lab</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">The Physics Lab at Dr. M.K.K. ARYA MODEL SCHOOL is thoughtfully
                    designed to strengthen students’ understanding of fundamental physical principles through hands-on
                    experimentation and observation. Equipped in accordance with CBSE and NCERT guidelines, the lab provides
                    modern apparatus and instruments that allow students to explore key concepts related to motion, force,
                    energy, electricity, magnetism, sound, and optics.
                </p>

                <p class="text-gray-700 leading-relaxed mb-4">The laboratory offers a structured and safe environment where
                    students perform experiments under the supervision of trained faculty, ensuring accuracy as well as
                    adherence to safety norms. Through practical work, students learn to observe phenomena, record data,
                    analyze results, and draw scientific conclusions, thereby enhancing their analytical thinking and
                    problem-solving skills. The Physics Lab plays an essential role in bridging theoretical knowledge with
                    real-world applications, making the subject more engaging, interactive, and concept-driven.
                </p>

            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/faclities/phy.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
