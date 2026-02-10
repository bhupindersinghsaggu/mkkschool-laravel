@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Biology Lab</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">The Biology Lab at Dr. M.K.K. ARYA MODEL SCHOOL offers students
                    valuable practical exposure to the study of living organisms and essential life processes, helping them
                    connect theoretical knowledge with real-life biological applications. The lab is well-equipped with
                    modern microscopes, models, preserved specimens, slides, charts, and laboratory tools, all arranged in
                    accordance with CBSE and NCERT guidelines.
                </p>

                <p class="text-gray-700 leading-relaxed mb-4">Students actively participate in experiments and observations
                    related to cell structure, tissues, plant and animal physiology, genetics, and ecology, which enhances
                    their understanding of complex biological concepts. Under the careful supervision of experienced
                    faculty, learners are trained to handle laboratory equipment safely while following proper scientific
                    procedures. This hands-on approach encourages curiosity, observation, analytical thinking, and
                    scientific temperament, making Biology an engaging and concept-oriented subject. The Biology Lab plays a
                    vital role in nurturing students’ interest in life sciences and lays a strong foundation for higher
                    studies in medical and scientific fields.
                </p>

            </div>
            {{-- <div class="md:col-span-1">
                <img src="./assets/images/faclities/phy.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div> --}}
        </div>
    </section>
@endsection
