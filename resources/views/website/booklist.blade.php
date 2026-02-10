@extends('layouts.app')

@section('title', 'Book-list')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Book List</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-6">
                <p class="text-gray-700 leading-relaxed mb-4">
                <h3 class="mt-4 mb-4"><i class="fa-regular fa-paper-plane text-gray-500 pr-2"></i> <a href="./assets/images/booklist/JR-BOOK-LIST.pdf"> Download Jr Wing Book List</a>
                </h3>
                <h3 class="mt-4 mb-4"><i class="fa-regular fa-paper-plane text-gray-500 pr-2"></i> <a href="./assets/images/booklist/SR-BOOK-LIST.pdf"> Download Sr Wing Book List
                </h3>   
                </p>
            </div>
            {{-- <div class="md:col-span-1">
                <img src="./assets/images/faclities/phy.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div> --}}
        </div>
    </section>
@endsection
