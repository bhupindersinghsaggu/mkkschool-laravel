<header class="bg-gradient-to-r from-pink-600 via-red-500 to-pink-400 text-white">
    <div class="max-w-7xl mx-auto px-4 py-3 flex flex-wrap justify-between text-sm">
        <div class="flex gap-4 flex-wrap">
            <span><i class="fa-solid fa-school"></i> School Code: 40047</span>
            <span><i class="fa-solid fa-school"></i> Affiliation No: 530027</span>
            <div class="hidden md:block">
                <span><i class="fas fa-file-alt"></i> <a href="cbsemandate.php" class="hover:underline">Mandatory
                        Disclosure</a></span>
                <span><i class="fa-solid fa-envelope"></i> <a href="https://mail.hostinger.com/v2/auth/login"
                        class="hover:underline">Webmail</a> </span>
            </div>
        </div>
        <div class="mt-3 md:block md:mt-0">
            <div class="flex gap-4">
                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> Apply For Job</a>
                <a href="http://www.curtina.in/MKK?url=http://www.curtina.in/_Web/FrmfindTC.aspx"><i
                        class="fa-solid fa-magnifying-glass"></i> Search TC </a>
            </div>
        </div>
    </div>
</header>
<nav class="p-3 flex items-center max-w-7xl mx-auto ">
    <a href="/" id="brand" class="flex gap-2 items-center flex-1">
        <img src="{{ asset('assets/images/logo.webp') }}" class="">
    </a>
    <div id="nav-menu" class="hidden lg:flex gap-12">
        <a href="" class="font-semi-bold hover:text-primary">Home</a>
        <div class="relative group">
            <button class="flex items-center gap-1 font-semi-bold hover:text-primary">
                About
                <i class="fa-solid fa-chevron-down text-sm"></i>
            </button>

            <!-- First Level Submenu -->
            <div
                class="absolute top-full left-0 mt-3 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <a href="{{ route('about-us') }}" class="block px-4 py-3 hover:bg-gray-100">
                    About School
                </a>
                <!-- Second Level -->
                <a href="{{ route('cbsemandate') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Mandatory Disclosure
                </a>
                <a href="{{ route('principal-message') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Principal's Message
                </a>
                <a href="{{ route('president-message') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Chairman Message
                </a>
            </div>
        </div>

        <div class="relative group">
            <button class="flex items-center gap-1 font-semi-bold hover:text-primary">
                Facilities
                <i class="fa-solid fa-chevron-down text-sm"></i>
            </button>

            <!-- First Level Submenu -->
            <div
                class="absolute top-full left-0 mt-3 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <a href="{{ route('library') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Library
                </a>
                <!-- Second Level -->
                <div class="relative group/sub">
                    <div class="flex justify-between items-center px-4 py-3 hover:bg-gray-100 cursor-pointer">
                        Labs
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                    <!-- Sub-Submenu -->
                    <div
                        class="absolute top-0 left-full ml-1 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-200">
                        <a href="{{ route('computerlab') }}" class="block px-4 py-3 hover:bg-gray-100">Computer Labs</a>
                        <a href="{{ route('chemistery') }}" class="block px-4 py-3 hover:bg-gray-100">Chemistery Lab</a>
                        <a href="{{ route('physics') }}" class="block px-4 py-3 hover:bg-gray-100">Physics Lab</a>
                        <a href="{{ route('biology') }}" class="block px-4 py-3 hover:bg-gray-100">Biology Lab</a>
                        <a href="{{ route('math') }}" class="block px-4 py-3 hover:bg-gray-100">Maths Lab</a>
                    </div>
                </div>

                <a href="{{ route('transport') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Transport Facilities
                </a>
                <a href="{{ route('dance-music') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Dance & Music
                </a>
            </div>
        </div>
        <div class="relative group">
            <button class="flex items-center gap-1 font-semi-bold hover:text-primary">
                Academic
                <i class="fa-solid fa-chevron-down text-sm"></i>
            </button>

            <!-- First Level Submenu -->
            <div
                class="absolute top-full left-0 mt-3 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <a href="{{ route('library') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Rules of Discipline
                </a>

                <a href="{{ route('transport-rules') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Transport Rules
                </a>
                <a href="{{ route('booklist') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Book List
                </a>
                <a href="{{ route('fee-structure') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Fee Structure
                </a>
                <a href="{{ route('fee-structure') }}" class="block px-4 py-3 hover:bg-gray-100">
                    Activity Calender
                </a>
            </div>
        </div>

        <a href="" class="font-semi-bold hover:text-primary">Academic</a>
        <a href="" class="font-semi-bold hover:text-primary">Student Corner</a>
    </div>
    <div class="hidden lg:flex flex-1 justify-end">
        <button class="flex gap-2 items-center border border-gray-400 px-6 py-2 rounded-lg hover:border-gray-400">
            <span> <a href="{{ route('login') }}"> ERP login <i class="fa-solid fa-right-to-bracket"></i></a>
            </span>
        </button>
    </div>
    <button class="p-2 lg:hidden" onclick="handleMenu()">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div id="nav-dialog" class="hidden fixed z-10 md:hidden bg-white inset-0 p-3">
        <div id="nav-bar" class="flex justify-between">
            <a href="/" id="brand" class="flex gap-2 items-center">
                <img src="{{ asset('assets/images/logo.webp') }}">
            </a>
            <button class="p-2 md:hidden" onclick="handleMenu()">
                <i class="fa-solid fa-xmark text-gray-300"></i>
            </button>
        </div>
        <div class="mt-6">
            <a href="#" class="font-semi-bold m-3 p-3 hover:bg-gray-300 block rounded-lg">Home</a>

            <div class="m-3">
                <!-- ABOUT -->
                <button onclick="toggleMenu('aboutMenu')"
                    class="w-full flex justify-between items-center p-3 font-semi-bold hover:bg-gray-300 rounded-lg">
                    About
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <!-- First Level Submenu -->
                <div id="aboutMenu" class="hidden ml-4 mt-2 space-y-1">

                    <a href="{{ route('about-us') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        About School
                    </a>

                    <a href="{{ route('cbsemandate') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        Mandatory Disclosure
                    </a>

                    <a href="{{ route('public.news') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        News
                    </a>

                    <a href="{{ route('teachers.public') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        Staff Details
                    </a>
                </div>
            </div>
            <div class="m-3">
                <!-- ABOUT -->
                <button onclick="toggleMenu('facilitiesMenu')"
                    class="w-full flex justify-between items-center p-3 font-semi-bold hover:bg-gray-300 rounded-lg">
                    Facilities
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <!-- First Level Submenu -->
                <div id="facilitiesMenu" class="hidden ml-4 mt-2 space-y-1">

                    <a href="{{ route('about-us') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        About School
                    </a>

                    <!-- SECOND LEVEL -->
                    <button onclick="toggleMenu('academicMenu')"
                        class="w-full flex justify-between items-center p-2 hover:bg-gray-100 rounded-lg">
                        Labs
                        <i class="fa-solid fa-chevron-down text-sm"></i>
                    </button>

                    <!-- Sub-Submenu -->
                    <div id="academicMenu" class="hidden ml-4 mt-1 space-y-1">
                        <a href="#" class="block p-2 hover:bg-gray-100 rounded-lg">Computer Labs</a>
                        <a href="#" class="block p-2 hover:bg-gray-100 rounded-lg">Chemistery Lab</a>
                        <a href="#" class="block p-2 hover:bg-gray-100 rounded-lg">Physics Lab</a>
                        <a href="#" class="block p-2 hover:bg-gray-100 rounded-lg">Biology Lab</a>
                        <a href="#" class="block p-2 hover:bg-gray-100 rounded-lg">Maths Lab</a>
                    </div>

                    <a href="{{ route('library') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        Library
                    </a>

                    <a href="{{ route('public.news') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        News
                    </a>

                    <a href="{{ route('teachers.public') }}" class="block p-2 hover:bg-gray-100 rounded-lg">
                        Staff Details
                    </a>
                </div>
            </div>
            <a href="#" class="font-semi-bold m-3 p-3 hover:bg-gray-100 block rounded-lg">Facilities</a>
            <a href="#" class="font-semi-bold m-3 p-3 hover:bg-gray-100 block rounded-lg">Student Corner</a>
        </div>
        <div class="h-[1px] bg-gray-100"></div>
        <button class=" mt-6 flex w-full md:flex gap-2 items-center  px-6 py-4 rounded-lg hover:bg-gray-50">
            <a href="{{ route('login') }}""
                class="inline-flex items-center gap-2 mt-8 bg-gradient-to-r from-indigo-600 via-blue-500 to-blue-400 hover:bg-pink-700 text-white px-6 py-3 rounded font-medium transition">
                ERP Login →
            </a>
        </button>
    </div>
</nav>

<script>
    function toggleMenu(id) {
        document.getElementById(id).classList.toggle('hidden');
    }
</script>
