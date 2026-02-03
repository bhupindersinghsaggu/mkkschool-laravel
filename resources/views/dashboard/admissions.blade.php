@extends('layouts.dashboard')

@section('title', 'Admission Enquiries')

@section('content')

    @php
        $isAdmin = auth()->user()->role === 'admin';
    @endphp

    <div class="max-w-8xl mx-auto px-4 py-8">

        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold mb-6">View Inquiries</h1>
            <div>
                <a href="{{ route('news.index') }}" class="btn btn-outline">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
            </div>
        </div>


        {{-- Success Message --}}
        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded-lg overflow-x-auto">
            <table class="min-w-[900px] w-full border border-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4  border">Sr.</th>
                        <th class="px-4  border">Date</th>
                        <th class="px-4  border">Name</th>
                        <th class="px-4  border">Phone</th>
                        <th class="px-4  border">Class</th>

                        <!-- Hide on mobile -->
                        <th class="px-4  border hidden md:table-cell">Source</th>
                        <th class="px-4  border hidden md:table-cell">Message</th>

                        <th class="px-4  border">Status</th>

                        @if ($isAdmin)
                            <th class="px-4  border">Action</th>
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @forelse ($admissions as $admission)
                        <tr class="hover:bg-gray-50">

                            <td class="px-4  border">
                                {{ ($admissions->currentPage() - 1) * $admissions->perPage() + $loop->iteration }}
                            </td>

                            <td class="px-4  border whitespace-nowrap">
                                {{ $admission->created_at->format('d M Y') }}
                            </td>

                            <td class="px-4  border font-medium">
                                {{ $admission->name }}
                            </td>

                            <td class="px-4  border whitespace-nowrap">
                                {{ $admission->phone }}
                            </td>

                            <td class="px-4  border">
                                {{ $admission->class }}
                            </td>

                            <!-- Hidden on mobile -->
                            <td class="px-4  border hidden md:table-cell">
                                {{ $admission->source ?? '-' }}
                            </td>

                            <td class="px-4  border hidden md:table-cell">
                                {{ \Illuminate\Support\Str::limit($admission->message, 40) }}
                            </td>

                            <!-- Status -->
                            <td class="px-4  border">
                                <span
                                    class="px-3 py-1 rounded-full text-xs
                            {{ [
                                'new' => 'bg-yellow-100 text-yellow-800',
                                'contacted' => 'bg-blue-100 text-blue-800',
                                'admitted' => 'bg-green-100 text-green-800',
                            ][$admission->status] ?? 'bg-gray-100 text-gray-800' }}">
                                    {{ ucfirst($admission->status ?? 'new') }}
                                </span>
                            </td>

                            <!-- Actions -->
                            @if ($isAdmin)
                                <td class="px-4  border space-y-1">
                                    <form action="{{ route('admissions.status', $admission) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()"
                                            class="border rounded px-2 py-1 text-xs w-full">
                                            <option value="new" @selected($admission->status === 'new')>New</option>
                                            <option value="contacted" @selected($admission->status === 'contacted')>Contacted</option>
                                            <option value="admitted" @selected($admission->status === 'admitted')>Admitted</option>
                                        </select>
                                    </form>

                                    <form action="{{ route('admissions.destroy', $admission) }}" method="POST"
                                        onsubmit="return confirm('Delete this enquiry?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 text-xs hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            @endif

                        </tr>
                    @empty
                        <tr>
                            <td colspan="{{ $isAdmin ? 9 : 8 }}" class="text-center py-6 text-gray-500">
                                No enquiries found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


        {{-- Pagination --}}
        <div class="mt-6">
            {{ $admissions->links() }}
        </div>

    </div>

@endsection
