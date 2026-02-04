<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index(Request $request) // ✅ FIX HERE
    {
        $query = Teacher::query();

        // 🔍 Search by name
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // 🎯 Filter by type (PPRT / PRT / TGT / PGT)
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $teachers = $query->latest()->paginate(10)->withQueryString();

        return view('admin.teachers.index', compact('teachers'));

        // ✅ Pagination (10 per page)
        $teachers = $query->latest()->paginate(3)->withQueryString();
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_id'   => 'required|unique:teachers,teacher_id',
            'name'         => 'required|string',
            'gender'       => 'required|in:Male,Female,Other',
            'type'         => 'required|in:PPRT,PRT,TGT,PGT',
            'joining_date' => 'nullable|date',
            'photo'        => 'nullable|image|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('teachers', 'public');
        }

        Teacher::create([
            'teacher_id'    => $request->teacher_id,
            'name'          => $request->name,
            'gender'        => $request->gender,
            'qualification' => $request->qualification,
            'phone'         => $request->phone,
            'subject'       => $request->subject,
            'class_taught'  => $request->class_taught,
            'type'          => $request->type,
            'email'         => $request->email,
            'joining_date'  => $request->joining_date,
            'photo'         => $photoPath,
        ]);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher added successfully');
    }

    public function destroy(Teacher $teacher)
    {
        if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {
            Storage::disk('public')->delete($teacher->photo);
        }

        $teacher->delete();

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher deleted successfully');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'teacher_id'   => 'required|unique:teachers,teacher_id,' . $teacher->id,
            'name'         => 'required|string',
            'gender'       => 'required|in:Male,Female,Other',
            'type'         => 'required|in:PPRT,PRT,TGT,PGT',
            'joining_date' => 'nullable|date',
            'photo'        => 'nullable|image|max:2048',
        ]);

        // Photo update
        if ($request->hasFile('photo')) {
            if ($teacher->photo && \Storage::disk('public')->exists($teacher->photo)) {
                \Storage::disk('public')->delete($teacher->photo);
            }
            $teacher->photo = $request->file('photo')->store('teachers', 'public');
        }

        $teacher->update([
            'teacher_id'    => $request->teacher_id,
            'name'          => $request->name,
            'gender'        => $request->gender,
            'qualification' => $request->qualification,
            'phone'         => $request->phone,
            'subject'       => $request->subject,
            'class_taught'  => $request->class_taught,
            'type'          => $request->type,
            'email'         => $request->email,
            'joining_date'  => $request->joining_date,
        ]);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher updated successfully');
    }
}
