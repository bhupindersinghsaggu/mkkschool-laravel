<section class="overflow-x-hidden bg-blue-900 px-4 py-12">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="flex justify-center">
            <h2 class="sm:text-4xl text-[28px] leading-tight font-bold text-white py-8">Talk To Our Counsellor</h2>
        </div>
        <div class="grid md:grid-cols-12 grid-cols-1 md:gap-4 gap-0 ">
            <div class="row-start-1 col-start-1 row-end-2 md:col-end-7 col-end-12 aos-init aos-animate"
                data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                <div class="w-fit  rounded-3xl">
                    <img src="./assets/images/admission.webp" alt="Counsellor"
                        class="rounded-lg  border border-white p-4">
                </div>
            </div>
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"
                class="relative before:content-[''] before:absolute before:bg-[url('/images/contact/form-line.png')] before:bg-no-repeat before:w-[13rem] before:h-24 before:top-5% before:bg-contain before:left-[35%] before:z-1 before:translate-x-full lg:before:inline-block before:hidden after:content-[''] after:absolute after:bg-[url('/images/contact/from-round-line.png')] after:bg-no-repeat after:w-[6.3125rem] after:h-[6.3125rem] after:bg-contain after:top-1/2 after:-left-[25%] after:z-1 after:translate-x-1/2 after:translate-y-1/2 md:after:inline-block after:hidden md:row-start-1 row-start-2 md:col-start-8 col-start-1 row-end-2 col-end-13 aos-init aos-animate">
                <div
                    class="lg:mt-0 mt-8  bg-white dark:bg-darkmode max-w-[50rem] m-auto pt-[2.1875rem] pb-8 px-[2.375rem] rounded-md relative z-10">
                    <h2 class="sm:text-3xl text-lg font-bold text-midnight_text mb-3 dark:text-white">Apply for
                        Admission
                    </h2>
                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admission.store') }}" class="grid grid-cols-1 gap-6">
                        @csrf

                        <div class="flex gap-4">
                            <input type="text" name="name" placeholder="Name"
                                class="text-midnight_text w-full text-base transition-[0.5s] bg-transparent dark:border-dark_border dark:text-white px-[0.9375rem] py-[0.830rem] border border-border border-solid focus:border-primary dark:focus:border-primary placeholder:text-grey rounded-lg focus-visible:outline-0" />

                            <input type="tel" name="phone" placeholder="Phone*"
                                class="text-midnight_text w-full text-base transition-[0.5s] bg-transparent dark:border-dark_border dark:text-white px-[0.9375rem] py-[0.830rem] border border-border border-solid focus:border-primary dark:focus:border-primary placeholder:text-grey rounded-lg focus-visible:outline-0" />
                        </div>
                        <select name="class"
                            class="text-midnight_text w-full text-base transition-[0.5s] bg-transparent dark:border-dark_border dark:text-white px-[0.9375rem] py-[0.830rem] border border-border border-solid focus:border-primary dark:focus:border-primary placeholder:text-grey rounded-lg focus-visible:outline-0 text-black">
                            <option class="text-black">Select Class</option>
                            <option class="text-black">Pre-Nursery</option>
                            <option class="text-black">Nursery</option>
                            <option class="text-black">Class I</option>
                            <option class="text-black">Class II</option>
                            <option class="text-black">Class III</option>
                            <option class="text-black">Class IV</option>
                            <option class="text-black">Class V</option>
                            <option class="text-black">Class VII</option>
                            <option class="text-black">Class VII</option>
                            <option class="text-black">Class VIII</option>
                            <option class="text-black">Class IX</option>
                            <option class="text-black">Class X</option>
                            <option class="text-black">Class XI</option>
                            <option class="text-black">Class XII</option>
                        </select>

                        <select name="source"
                            class="text-midnight_text w-full text-base transition-[0.5s] bg-transparent dark:border-dark_border dark:text-white px-[0.9375rem] py-[0.830rem] border border-border border-solid focus:border-primary dark:focus:border-primary placeholder:text-grey rounded-lg focus-visible:outline-0">
                            <option class="text-black">Source of Information</option>
                            <option class="text-black">Google</option>
                            <option class="text-black">Social Media</option>
                            <option class="text-black">Website</option>
                            <option class="text-black">Hoarding</option>
                            <option class="text-black">Word of Mouth</option>
                        </select>

                        <textarea name="message" rows="2"
                            class="text-midnight_text w-full text-base transition-[0.5s] bg-transparent dark:border-dark_border dark:text-white px-[0.9375rem] py-[0.830rem] border border-border border-solid focus:border-primary dark:focus:border-primary placeholder:text-grey rounded-lg focus-visible:outline-0"
                            placeholder="Message"></textarea>
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
                        </div>

                        @error('g-recaptcha-response')
                            <p class="text-red-200 text-sm mt-2">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="w-full btn btn-primary ">
                            Send Message
                        </button>
                        {{-- <button type="submit" class="border border-white px-8 py-3 rounded font-semibold w-fit">
                        Send Message
                    </button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
