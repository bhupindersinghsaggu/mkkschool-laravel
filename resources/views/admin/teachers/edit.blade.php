@extends('layouts.dashboard')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Edit Teacher</h1>

<form method="POST"
      action="{{ route('teachers.update', $teacher) }}"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow space-y-4 max-w-2xl">
    @csrf
    @method('PUT')

    <input name="teacher_id"
           value="{{ old('teacher_id', $teacher->teacher_id) }}"
           class="w-full border p-2"
           required>

    <input name="name"
           value="{{ old('name', $teacher->name) }}"
           class="w-full border p-2"
           required>

    <select name="gender" class="w-full border p-2" required>
        @foreach(['Male','Female','Other'] as $g)
            <option value="{{ $g }}" {{ $teacher->gender == $g ? 'selected' : '' }}>
                {{ $g }}
            </option>
        @endforeach
    </select>

    <input name="qualification"
           value="{{ $teacher->qualification }}"
           class="w-full border p-2">

    <input name="phone"
           value="{{ $teacher->phone }}"
           class="w-full border p-2">

    <input name="subject"
           value="{{ $teacher->subject }}"
           class="w-full border p-2">

    <input name="class_taught"
           value="{{ $teacher->class_taught }}"
           class="w-full border p-2">

    <select name="type" class="w-full border p-2" required>
        @foreach(['PPRT','PRT','TGT','PGT'] as $t)
            <option value="{{ $t }}" {{ $teacher->type == $t ? 'selected' : '' }}>
                {{ $t }}
            </option>
        @endforeach
    </select>

    <input name="email"
           value="{{ $teacher->email }}"
           type="email"
           class="w-full border p-2">

    <input name="joining_date"
           type="date"
           value="{{ $teacher->joining_date }}"
           class="w-full border p-2">

    @if($teacher->photo)
        <img src="{{ asset('storage/'.$teacher->photo) }}"
             class="w-20 h-20 rounded object-cover">
    @endif

    <input type="file" name="photo" class="w-full border p-2">

    <button class="btn btn-primary">Update Teacher</button>
</form>
@endsection
