@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Computer Lab</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    The Computer Lab at Dr. M.K.K. ARYA MODEL SCHOOL is a well-equipped, modern learning space designed to
                    enhance students’ digital skills and technological awareness. It features high-performance computers
                    with updated educational and programming software, supporting activities such as coding, research,
                    presentations, and project work. The lab promotes interactive and collaborative learning while helping
                    students develop essential 21st-century skills, including creativity, problem-solving, and technological
                    fluency.
                </p>
                <p class="text-gray-700 leading-relaxed mb-4">
                    With internet access available under supervision, students can conduct research, access online learning
                    platforms, and expand their knowledge beyond textbooks. The computer lab also plays a significant role
                    in interdisciplinary learning, allowing students to use digital tools for projects, presentations, and
                    assignments across various subjects. Overall, the Computer Lab stands as an essential academic facility,
                    helping students develop creativity, problem-solving abilities, and technological fluency, while
                    equipping them with vital skills for the 21st century.
                </p>

            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/faclities/computer.webp" alt="School Campus"
                    class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
