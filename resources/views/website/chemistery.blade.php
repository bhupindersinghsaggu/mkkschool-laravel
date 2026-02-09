@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Chemistry Lab</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <p class="text-gray-700 leading-relaxed mb-4">
                    Chemistry is the study of matter—its composition, properties, and interactions. It plays a fundamental
                    role in science, closely linked to fields like Physics, Biology, and Geology. However, theoretical
                    knowledge alone is incomplete without practical application. At our school, the Chemistry lab is fully
                    equipped with modern scientific instruments that meet CBSE and NCERT standards. Safety is a top
                    priority, with strict precautions in place and first aid readily available to handle any incidents. The
                    lab is supervised by a highly experienced instructor who has been a part of the institution for several
                    years. Students get hands-on experience with salts, acids, and various chemical reactions, allowing them
                    to observe, analyze, and understand concepts more effectively. This practical approach enhances
                    learning, making Chemistry an exciting and interactive subject.
                </p>

            </div>
            <div class="md:col-span-1">
                <img src="./assets/images/faclities/chem.webp" alt="School Campus"
                    class=" shadow-lg max-w-md rounded-lg">
            </div>
        </div>
    </section>
@endsection
