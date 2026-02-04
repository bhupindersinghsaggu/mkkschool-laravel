@extends('layouts.dashboard')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Add Teacher</h1>

<form method="POST"
      action="{{ route('teachers.store') }}"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow space-y-4 max-w-2xl">

    @csrf

    <!-- Teacher ID -->
    <input name="teacher_id"
           placeholder="Teacher ID"
           class="w-full border p-2"
           required>

    <!-- Teacher Name -->
    <input name="name"
           placeholder="Teacher Name"
           class="w-full border p-2"
           required>

    <!-- Gender -->
    <select name="gender" class="w-full border p-2" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>

    <!-- Qualification -->
    <input name="qualification"
           placeholder="Qualification (e.g. B.Ed, M.Sc)"
           class="w-full border p-2">

    <!-- Phone -->
    <input name="phone"
           placeholder="Phone No."
           class="w-full border p-2">

    <!-- Subject -->
    <input name="subject"
           placeholder="Subject"
           class="w-full border p-2">

    <!-- Class Taught -->
    <input name="class_taught"
           placeholder="Class Taught (e.g. I–V, VI–VIII)"
           class="w-full border p-2">

    <!-- Teacher Type -->
    <select name="type" class="w-full border p-2" required>
        <option value="">Select Teacher Type</option>
        <option value="PPRT">PPRT</option>
        <option value="PRT">PRT</option>
        <option value="TGT">TGT</option>
        <option value="PGT">PGT</option>
    </select>

    <!-- Email -->
    <input name="email"
           type="email"
           placeholder="Email"
           class="w-full border p-2">

    <!-- Date of Joining -->
    <input name="joining_date"
           type="date"
           class="w-full border p-2">

    <!-- Photo -->
    <input type="file"
           name="photo"
           class="w-full border p-2">

    <!-- Submit -->
    <button type="submit" class="btn btn-primary">
        Save Teacher
    </button>

</form>
@endsection
