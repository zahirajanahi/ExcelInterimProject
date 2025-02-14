<nav id="navbar" class="bg-white shadow-md fixed top-0 left-0 w-full z-50 animate-fade-in-down transition-all py-2">
    <div class="container mx-auto flex justify-between items-center p-1">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-gray-800 text-2xl font-bold flex items-center space-x-1">
            <img src="{{ asset('storage/images/image-removebg-preview (9).png') }}" class="w-[4vw]" alt="">
             <span class="text-[#c01c2e] text-lg">Excel Interim</span>
        </a>

        <!-- Navigation Links -->
        <ul class="flex space-x-6 items-center">
            <li class="relative group z-50">
                <button class="dropdown-btn text-black font-semibold hover:text-[#c01c2e] hover:bg-zinc-300  transition duration-700 px-4 py-2 rounded-3xl">
                    Excel Interim 
                </button>
                <ul class="dropdown-menu absolute left-0 mt-4 w-[20vw] bg-white  shadow-lg rounded-md py-2 opacity-0 invisible transition-all ease-in-out duration-300 transform scale-95 group-hover:opacity-100 group-hover:visible group-hover:scale-100">
                    <li><a href="{{ url('/mdd') }}" class="block px-4 py-2 text-black hover:bg-gray-100">Mot du directeur</a></li>
                    <li><a href="{{ url('/qsn') }}" class="block px-4 py-2 text-black hover:bg-gray-100">Qui sommes-nous</a></li>
                    <li><a href="{{ url('/nosvaleur') }}" class="block px-4 py-2 text-black hover:bg-gray-100">Nos valeurs</a></li>
                </ul>
            </li>
            <li class="relative group">
                <button class="dropdown-btn text-gray-800 font-semibold hover:text-[#c01c2e] hover:bg-zinc-300 transition duration-700 px-4 py-2 rounded-3xl">
                    Nos services
                </button>
                <ul class="dropdown-menu absolute left-0 mt-4 w-[20vw] bg-white shadow-lg rounded-md py-2 opacity-0 invisible transition-all ease-in-out duration-300 transform scale-95 group-hover:opacity-100 group-hover:visible group-hover:scale-100">
                    <li><a href="{{ url('/travailT') }}" class="block px-4 py-2 text-black hover:bg-gray-100">Travail temporaire</a></li>
                    <li><a href="{{ url('/interim') }}" class="block px-4 py-2 text-black hover:bg-gray-100">Recrutement</a></li>
                    <li><a href="{{ url('/conseil') }}" class="block px-4 py-2 text-black hover:bg-gray-100">Conseil RH</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/offres-demploi') }}" class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">Offres d'emploi</a></li>
            <li><a href="{{ url('//candidature-spontane') }}" class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">Candidature</a></li>
            {{-- <li><a href="{{ url('/contact') }}" class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">@lang("messages.Contact")</a></li> --}}
            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4  rounded-md text-gray-800 font-semibold bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            @else
            <a href="{{ route('login') }}"  class=" bg-[#c01c2e] text-white px-5 py-2 rounded-xl" > Log in </a>
            @if (Route::has('register'))
             <a href="{{ route('register') }}" class=' text-[#c01c2e] font-semibold'> Register </a>
            @endif
        @endauth
        </ul>

        <!-- Language Toggle with Dropdown -->
        <div class="relative">
            <button class="dropdown-btn text-xl text-gray-800  font-bold px-4 py-2 flex items-center space-x-1">
                <span id="selected-lang"><i class="bi bi-translate"></i></span>
                <svg class="w-4 h-4 transition-transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul class="dropdown-menu absolute right-0 mt-2 w-[8vw] bg-white shadow-lg rounded-md py-2 opacity-0 invisible transition-all ease-in-out duration-300 transform scale-95">
                <li><a href="{{ url('locale/en') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-600">Anglais</a></li>
                <li><a href="{{ url('locale/fr') }}" class="block px-4 py-2 hover:bg-gray-100  text-gray-600">Français</a></li>
            </ul>
        </div>
    </div>
</nav>