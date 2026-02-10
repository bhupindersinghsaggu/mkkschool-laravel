@extends('layouts.app')

@section('title', 'library')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> Fee Structure</h1>
    </section>
    <section class="section-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="md:col-span-6">
                <p class="text-gray-700 leading-relaxed mb-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 text-sm text-left">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2 font-semibold">Class</th>
                                <th class="border border-gray-300 px-4 py-2 font-semibold">Adm. Charges</th>
                                <th class="border border-gray-300 px-4 py-2 font-semibold">
                                    Tuition Fees (2024–25)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">Nursery</td>
                                <td class="border px-4 py-2">₹10,000</td>
                                <td class="border px-4 py-2">₹2,320</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">L.K.G</td>
                                <td class="border px-4 py-2">₹10,000</td>
                                <td class="border px-4 py-2">₹3,280</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">U.K.G</td>
                                <td class="border px-4 py-2">₹10,000</td>
                                <td class="border px-4 py-2">₹3,350</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">I – V</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹4,130</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">VI – VIII</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹4,430</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">IX &amp; X</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹4,500</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">XI (Commerce)</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹4,700</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">XI (Non-Medical)</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹5,000</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">XI (Medical)</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹5,190</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">XII (Commerce)</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹4,750</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">XII (Non-Medical)</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹5,050</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">XII (Medical)</td>
                                <td class="border px-4 py-2">₹14,000</td>
                                <td class="border px-4 py-2">₹5,200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="mt-4 mb-4"><i class="fa-regular fa-paper-plane text-gray-500 pr-2"></i> Registration fee : Rs. 500</h3>
                <h3 class="mt-4 mb-4"><i class="fa-regular fa-paper-plane text-gray-500 pr-2"></i> Transport Charges: Rs. 1550/-PM Rs. 1700/-PM</h3>
                <h3 class="mt-4 mb-4"><i class="fa-regular fa-paper-plane text-gray-500 pr-2"></i> Cycle parking Charges: Rs. 600/-Annually</h3>
                </p>
            </div>
            {{-- <div class="md:col-span-1">
                <img src="./assets/images/faclities/phy.webp" alt="School Campus" class=" shadow-lg max-w-md rounded-lg">
            </div> --}}
        </div>
    </section>
@endsection
