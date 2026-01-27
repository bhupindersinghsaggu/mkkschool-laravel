@extends('layouts.dashboard')

@section('content')
    <div class="max-w-5xl  px-4 py-6">

        <h1 class="text-2xl font-bold mb-6">Events / Achievements</h1>


        <form method="POST" action="{{ route('achievements.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid md:grid-cols-2 gap-4">
                <input type="text" name="title" placeholder="Title" class="border p-2 rounded" required>

                <textarea name="description" placeholder="Description" class="border p-2 rounded"></textarea>

                <input type="url" name="button_link" placeholder="Button link" class="border p-2 rounded">

                <input type="date" name="achievement_date" class="border p-2 rounded">

                <input type="file" name="image" class="border p-2 rounded">
            </div>

            <button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded">Save</button>
             <button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded" href="{{ route('achievements.create') }}">
                Add Event
            </button>


        </form>

        
           
     
    @endsection
