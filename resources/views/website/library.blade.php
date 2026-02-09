@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> School Library</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    The school library at Dr. M.K.K. ARYA MODEL SCHOOL serves as a dynamic learning hub for students
                    and
                    staff, providing access to a rich and diverse collection of books, journals, and reference
                    resources
                    that support academic excellence and intellectual development. Thoughtfully designed to promote
                    a
                    culture of reading, the library offers, disciplined, and inspiring environment for study,
                    research, and self-learning.

                    With a collection of approximately 15,000 books, which continues to grow each year, the library
                    includes textbooks, reference books, fiction, general knowledge titles, literature, and
                    travel-related publications. To keep students well-informed and encourage regular reading
                    habits,
                    the library provides access to three English and two Hindi newspapers, along with around 30
                    weekly
                    and monthly magazines covering educational, cultural, and current affairs topics.

                    Regular activities such as reading sessions, book exhibitions, and library-based learning
                    programs
                    are organized to enhance student engagement and develop critical thinking skills. Acting as an
                    intellectual resource center, the library plays a vital role in nurturing curiosity, creativity,
                    and
                    lifelong learning, thereby supporting the overall academic and personal growth of students.
                </p>
            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/faclities/robo.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
