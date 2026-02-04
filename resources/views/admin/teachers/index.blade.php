@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Teachers</h1>

    <!-- 🔍 Search + Filter -->
    <form method="GET" class="flex flex-wrap gap-3 mb-4">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name"
            class="border p-2 rounded">

        <select name="type" class="border p-2 rounded">
            <option value="">All Types</option>
            @foreach (['PPRT', 'PRT', 'TGT', 'PGT'] as $t)
                <option value="{{ $t }}" {{ request('type') == $t ? 'selected' : '' }}>
                    {{ $t }}
                </option>
            @endforeach
        </select>

        <button class="btn btn-primary">Filter</button>

        <a href="{{ route('teachers.create') }}" class="btn btn-primary ml-auto">
            + Add Teacher
        </a>
    </form>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2 border">Photo</th>
                    <th class="p-2 border">Teacher ID</th>
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Gender</th>
                    <th class="p-2 border">Subject</th>
                    <th class="p-2 border">Class</th>
                    <th class="p-2 border">Type</th>
                    <th class="p-2 border">Phone</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Joining</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($teachers as $teacher)
                    <tr class="hover:bg-gray-50">
                        <!-- Photo -->
                        <td class="p-2 border text-center">
                            @if ($teacher->photo)
                                <img src="{{ asset('storage/' . $teacher->photo) }}"
                                    class="w-10 h-10 rounded-full object-cover mx-auto">
                            @else
                                <span class="text-gray-400">—</span>
                            @endif
                        </td>

                        <td class="p-2 border">{{ $teacher->teacher_id }}</td>
                        <td class="p-2 border font-medium">{{ $teacher->name }}</td>
                        <td class="p-2 border">{{ $teacher->gender }}</td>
                        <td class="p-2 border">{{ $teacher->subject }}</td>
                        <td class="p-2 border">{{ $teacher->class_taught }}</td>
                        <td class="p-2 border font-semibold">{{ $teacher->type }}</td>
                        <td class="p-2 border">{{ $teacher->phone }}</td>
                        <td class="p-2 border">{{ $teacher->email }}</td>
                        <td class="p-2 border">
                            {{ $teacher->joining_date ? \Carbon\Carbon::parse($teacher->joining_date)->format('d M Y') : '-' }}
                        </td>

                        <!-- Actions -->
                        <td class="p-2 border text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('teachers.edit', $teacher) }}" class="text-blue-600 hover:underline">
                                    Edit
                                </a>

                                <form method="POST" action="{{ route('teachers.destroy', $teacher) }}"
                                    onsubmit="return confirm('Delete this teacher?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="p-4 text-center text-gray-500">
                            No teachers found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">
            {{ $teachers->links() }}
        </div>
    </div>
@endsection
