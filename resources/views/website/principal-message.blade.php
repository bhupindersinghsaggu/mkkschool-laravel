@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Principal's Message</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    Every child is like a seed that has the potential to grow if it is nourished with love and care under
                    the right guidance. In the current challenging times, it is essential that children should not only
                    excel in academics but should also develop courtesy, discipline, smart personality, social sensitivity,
                    and be imbibed with the traditional values of the culture of our country. Childhood is the best time to
                    lay the foundation of the core values essential for the overall development of the future citizen of
                    tomorrow. MKK School is a friendly school where each and every student is understood, valued, and
                    attended to. Our students are provided with the state of the art facilities like well-equipped science
                    laboratories, computer laboratory, and audio visual room classrooms. Equal attention is given to the
                    development of the children both academically and in extra curricular activities like different sports,
                    yoga, cultural activities, etc.
                </p>
                <div class="mt-4">
                    <h4 class="name inner-title">Mr. Manoj Sarin</h4>
                    <p class="designation"><b>Principal </b></p>
                </div>
            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/principal.png" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
