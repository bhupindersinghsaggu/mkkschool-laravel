@extends('layouts.dashboard')

@section('content')
  <div class="max-w-5xl px-4 py-6">

    <h1 class="text-2xl font-bold mb-6">Achievements</h1>

    @if($achievements->count() == 0)
        <p>No achievements added yet.</p>
    @else
        <table class="w-full border border-gray-300 bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-3 py-2 text-left">#</th>
                    <th class="border px-3 py-2 text-left">Title</th>
                    <th class="border px-3 py-2 text-left">Description</th>
                    <th class="border px-3 py-2 text-left">Image</th>
                    <th class="border px-3 py-2 text-left">Link</th>
                    <th class="border px-3 py-2 text-left">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($achievements as $index => $achievement)
                    <tr>
                        <td class="border px-3 py-2">
                            {{ $index + 1 }}
                        </td>

                        <td class="border px-3 py-2">
                            {{ $achievement->title }}
                        </td>

                        <td class="border px-3 py-2">
                            {{ $achievement->description ?? '-' }}
                        </td>

                        <td class="border px-3 py-2">
                            @if ($achievement->image)
                                <img src="{{ asset('storage/' . $achievement->image) }}"
                                     class="w-16 h-16 object-cover">
                            @else
                                -
                            @endif
                        </td>

                        <td class="border px-3 py-2">
                            @if ($achievement->button_link)
                                <a href="{{ $achievement->button_link }}"
                                   target="_blank"
                                   class="text-blue-600 underline">
                                    View
                                </a>
                            @else
                                -
                            @endif
                        </td>

                        <td class="border px-3 py-2">
                            <form method="POST"
                                  action="{{ route('achievements.destroy', $achievement) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Are you sure?')"
                                        class="text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
    @endif

</div>

@endsection
