@extends('layouts.app')

@section('title', 'about-us')

@section('content')

    <section class="heading-section-color py-16">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl"> About us</h1>
    </section> 

    <section class="section-theme">
        <div class="max-w-6xl mx-auto px-4 space-y-10 text-sm">

            <!-- ================= A. GENERAL INFORMATION ================= -->
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="border px-3 py-2">S.NO.</th>
                            <th class="border px-3 py-2">INFORMATION</th>
                            <th class="border px-3 py-2">DETAILS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">1</td>
                            <td class="border px-3 py-2">NAME OF THE SCHOOL</td>
                            <td class="border px-3 py-2 font-semibold">Dr. M.K.K. ARYA MODEL SCHOOL</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2</td>
                            <td class="border px-3 py-2">AFFILIATION NO.</td>
                            <td class="border px-3 py-2">530027</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">3</td>
                            <td class="border px-3 py-2">SCHOOL CODE</td>
                            <td class="border px-3 py-2">40047</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">4</td>
                            <td class="border px-3 py-2">COMPLETE ADDRESS</td>
                            <td class="border px-3 py-2">MODEL TOWN, PANIPAT (HARYANA) - 132103</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">5</td>
                            <td class="border px-3 py-2">PRINCIPAL NAME</td>
                            <td class="border px-3 py-2">MADHUP PARASAR</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">6</td>
                            <td class="border px-3 py-2">SCHOOL E-MAIL ID</td>
                            <td class="border px-3 py-2">INFO@MKKSCHOOL.COM</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">7</td>
                            <td class="border px-3 py-2">CONTACT DETAILS</td>
                            <td class="border px-3 py-2">0180-4013047, 4004556</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================= B. DOCUMENTS ================= -->
            <h3 class="bg-blue-900 text-white px-3 py-2 font-semibold">B. DOCUMENTS AND INFORMATION</h3>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border px-3 py-2">S.NO.</th>
                            <th class="border px-3 py-2">DOCUMENT</th>
                            <th class="border px-3 py-2">DOWNLOAD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">1</td>
                            <td class="border px-3 py-2">AFFILIATION / UPGRADATION LETTER</td>
                            <td class="border px-3 py-2"><a href="{{ asset('assets/images/pdf/AFFILIATION.pdf') }}"
                                    target="_blank" class="text-blue-600 underline">Download</a></td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2</td>
                            <td class="border px-3 py-2">REGISTRATION / RENEWAL CERTIFICATE</td>
                            <td class="border px-3 py-2"><a
                                    href="{{ asset('assets/images/pdf/certificates-2024-25/REGISTRATIONRENEWALCERTIFICATE.pdf') }}"
                                    target="_blank" class="text-blue-600 underline">Download</a></td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">3</td>
                            <td class="border px-3 py-2">BUILDING SAFETY CERTIFICATE</td>
                            <td class="border px-3 py-2"><a
                                    href="{{ asset('assets/images/pdf/certificates-2024-25/Building_safety_certificate.pdf') }}"
                                    target="_blank" class="text-blue-600 underline">Download</a></td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">4</td>
                            <td class="border px-3 py-2">FIRE SAFETY CERTIFICATE</td>
                            <td class="border px-3 py-2"><a
                                    href="{{ asset('assets/images/pdf/certificates-2025-26/fire-safety-certificate.pdf') }}"
                                    target="_blank" class="text-blue-600 underline">Download</a></td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">5</td>
                            <td class="border px-3 py-2">DEO CERTIFICATE</td>
                            <td class="border px-3 py-2"><a
                                    href="{{ asset('assets/images/pdf/certificates-2025-26/DEOCertificate.pdf') }}"
                                    target="_blank" class="text-blue-600 underline">Download</a></td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">6</td>
                            <td class="border px-3 py-2">WATER, HEALTH & SANITATION CERTIFICATE</td>
                            <td class="border px-3 py-2"><a
                                    href="{{ asset('assets/images/pdf/certificates-2025-26/safe-drinking-sanitation2025.pdf') }}"
                                    target="_blank" class="text-blue-600 underline">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================= C. RESULTS ================= -->
            <h3 class="bg-blue-900 text-white px-3 py-2 font-semibold">C. RESULT AND ACADEMICS</h3>

            <h4 class="font-semibold mt-4">RESULT CLASS: XII</h4>
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border px-3 py-2">YEAR</th>
                            <th class="border px-3 py-2">REGISTERED</th>
                            <th class="border px-3 py-2">PASSED</th>
                            <th class="border px-3 py-2">PERCENTAGE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2022-23</td>
                            <td class="border px-3 py-2">220</td>
                            <td class="border px-3 py-2">217</td>
                            <td class="border px-3 py-2">98.64%</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2023-24</td>
                            <td class="border px-3 py-2">238</td>
                            <td class="border px-3 py-2">235</td>
                            <td class="border px-3 py-2">98.74%</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2024-25</td>
                            <td class="border px-3 py-2">255</td>
                            <td class="border px-3 py-2">253</td>
                            <td class="border px-3 py-2">99.22%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="font-semibold mt-6">RESULT CLASS: X</h4>
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border px-3 py-2">YEAR</th>
                            <th class="border px-3 py-2">REGISTERED</th>
                            <th class="border px-3 py-2">PASSED</th>
                            <th class="border px-3 py-2">PERCENTAGE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2022-23</td>
                            <td class="border px-3 py-2">296</td>
                            <td class="border px-3 py-2">296</td>
                            <td class="border px-3 py-2">100%</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2023-24</td>
                            <td class="border px-3 py-2">288</td>
                            <td class="border px-3 py-2">288</td>
                            <td class="border px-3 py-2">100%</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">2024-25</td>
                            <td class="border px-3 py-2">272</td>
                            <td class="border px-3 py-2">271</td>
                            <td class="border px-3 py-2">99.63%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================= D. STAFF ================= -->
            <h3 class="bg-blue-900 text-white px-3 py-2 font-semibold">D. STAFF (TEACHING)</h3>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <tbody>
                        <tr class="bg-gray-200 font-semibold">
                            <td class="border px-3 py-2">PRINCIPAL</td>
                            <td class="border px-3 py-2">01</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">PGT</td>
                            <td class="border px-3 py-2">17</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">TGT</td>
                            <td class="border px-3 py-2">43</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">PRT</td>
                            <td class="border px-3 py-2">23</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================= E. INFRASTRUCTURE ================= -->
            <h3 class="bg-blue-900 text-white px-3 py-2 font-semibold">E. SCHOOL INFRASTRUCTURE</h3>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <tbody>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">TOTAL CAMPUS AREA</td>
                            <td class="border px-3 py-2">13395 SQ. MTR</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">CLASSROOM SIZE</td>
                            <td class="border px-3 py-2">45 SQ. MTR</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">LABORATORIES</td>
                            <td class="border px-3 py-2">Library, Physics, Chemistry, Computer Lab</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">INTERNET FACILITY</td>
                            <td class="border px-3 py-2">YES</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">GIRLS TOILETS</td>
                            <td class="border px-3 py-2">31</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">BOYS TOILETS</td>
                            <td class="border px-3 py-2">56</td>
                        </tr>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">INSPECTION VIDEO</td>
                            <td class="border px-3 py-2"><a href="https://www.youtube.com/watch?v=nMxiJLbwmFw"
                                    target="_blank" class="text-blue-600 underline">YouTube Link</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================= F. FORM VI ================= -->
            <h3 class="bg-blue-900 text-white px-3 py-2 font-semibold">F. FORM VI</h3>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300">
                    <tbody>
                        <tr class="odd:bg-gray-50">
                            <td class="border px-3 py-2">
                                <a href="{{ asset('assets/images/pdf/certificates-2025-26/formvi.pdf') }}"
                                    class="text-blue-600 underline font-semibold">Download Form VI</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
