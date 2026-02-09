@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-6">CBSE Mandatory Disclosure (CMS)</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('cbse.update') }}" enctype="multipart/form-data" class="space-y-10">
        @csrf

        <!-- ================= GENERAL INFO ================= -->
        <section>
            <h2 class="font-semibold mb-3">A. General Information</h2>

            <div id="general_info_wrapper">
                @foreach ($data->general_info ?? [] as $i => $row)
                    <div class="grid grid-cols-12 gap-2 mb-2">
                        <input class="col-span-5 border p-2" name="general_info[{{ $i }}][label]"
                            value="{{ $row['label'] }}" placeholder="Label">

                        <input class="col-span-6 border p-2" name="general_info[{{ $i }}][value]"
                            value="{{ $row['value'] }}" placeholder="Value">

                        <button type="button" onclick="removeRow(this)" class="col-span-1 text-red-600">✕</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addRow('general_info_wrapper','general_info')"
                class="text-sm text-blue-600 mt-2">
                + Add Row
            </button>
        </section>

        <!-- ================= DOCUMENTS ================= -->
        <section>
            <h2 class="font-semibold mb-3">B. Documents (PDF Upload)</h2>

            <div id="documents_wrapper">
                @foreach ($data->documents ?? [] as $i => $row)
                    <div class="grid grid-cols-12 gap-2 mb-2">
                        <input class="col-span-5 border p-2" name="documents[{{ $i }}][label]"
                            value="{{ $row['label'] }}" placeholder="Document Name">

                        <input type="file" name="documents[{{ $i }}][file]" class="col-span-6 border p-2">

                        <button type="button" onclick="removeRow(this)" class="col-span-1 text-red-600">✕</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addFileRow('documents_wrapper','documents')" class="text-sm text-blue-600 mt-2">
                + Add Document
            </button>
        </section>

        <!-- ================= RESULTS XII ================= -->
        <section>
            <h2 class="font-semibold mb-3">C. Results – Class XII</h2>

            <div id="results_xii_wrapper">
                @foreach ($data->results_xii ?? [] as $i => $row)
                    <div class="grid grid-cols-12 gap-2 mb-2">
                        <input class="border p-2 col-span-3" name="results_xii[{{ $i }}][year]"
                            value="{{ $row['year'] }}" placeholder="Year">

                        <input class="border p-2 col-span-3" name="results_xii[{{ $i }}][registered]"
                            value="{{ $row['registered'] }}" placeholder="Registered">

                        <input class="border p-2 col-span-3" name="results_xii[{{ $i }}][passed]"
                            value="{{ $row['passed'] }}" placeholder="Passed">

                        <input class="border p-2 col-span-2" name="results_xii[{{ $i }}][percentage]"
                            value="{{ $row['percentage'] }}" placeholder="%">

                        <button type="button" onclick="removeRow(this)" class="col-span-1 text-red-600">✕</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addResultRow('results_xii_wrapper','results_xii')"
                class="text-sm text-blue-600 mt-2">
                + Add Result
            </button>
        </section>

        <!-- ================= PUBLISH ================= -->
        <section class="border-t pt-4">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_published" {{ $data->is_published ? 'checked' : '' }}>
                Publish this page
            </label>
        </section>

        <!-- ================= ACTIONS ================= -->
        <div class="flex gap-4">
            <button class="btn btn-primary">Save</button>

            <a href="{{ url('/preview/cbsemandate') }}" target="_blank" class="btn btn-secondary">
                Preview
            </a>
        </div>
    </form>
@endsection


    @push('scripts')
        <script>
            function removeRow(btn) {
                btn.parentElement.remove();
            }

        function addRow(wrapperId, name) {
            const wrapper = document.getElementById(wrapperId);
            const index = wrapper.children.length;

            wrapper.insertAdjacentHTML('beforeend', `
        <div class="grid grid-cols-12 gap-2 mb-2">
            <input class="col-span-5 border p-2"
                   name="${name}[${index}][label]"
                   placeholder="Label">
            <input class="col-span-6 border p-2"
                   name="${name}[${index}][value]"
                   placeholder="Value">
            <button type="button"
                    onclick="removeRow(this)"
                    class="col-span-1 text-red-600">✕</button>
        </div>
    `);
        }

        function addFileRow(wrapperId, name) {
            const wrapper = document.getElementById(wrapperId);
            const index = wrapper.children.length;

            wrapper.insertAdjacentHTML('beforeend', `
        <div class="grid grid-cols-12 gap-2 mb-2">
            <input class="col-span-5 border p-2"
                   name="${name}[${index}][label]"
                   placeholder="Document Name">
            <input type="file"
                   name="${name}[${index}][file]"
                   class="col-span-6 border p-2">
            <button type="button"
                    onclick="removeRow(this)"
                    class="col-span-1 text-red-600">✕</button>
        </div>
    `);
        }

        function addResultRow(wrapperId, name) {
            const wrapper = document.getElementById(wrapperId);
            const index = wrapper.children.length;

            wrapper.insertAdjacentHTML('beforeend', `
        <div class="grid grid-cols-12 gap-2 mb-2">
            <input class="border p-2 col-span-3"
                   name="${name}[${index}][year]" placeholder="Year">
            <input class="border p-2 col-span-3"
                   name="${name}[${index}][registered]" placeholder="Registered">
            <input class="border p-2 col-span-3"
                   name="${name}[${index}][passed]" placeholder="Passed">
            <input class="border p-2 col-span-2"
                   name="${name}[${index}][percentage]" placeholder="%">
            <button type="button"
                    onclick="removeRow(this)"
                    class="col-span-1 text-red-600">✕</button>
        </div>
    `);
        }
</script>
@endpush

