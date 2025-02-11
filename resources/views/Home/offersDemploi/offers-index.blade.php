@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    


    <div class="flex flex-col items-center text-center py-16 px-4 mt-24">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
            Find your 
            <span class="border-b-4 border-red-800 px-2 pb-1">dream jobs</span> 
            in <span class="text-gray-800">New Castle</span>
        </h1>
        <p class="text-gray-600 text-lg mt-5 max-w-xl">
            When you're searching for a job, there are a few things you can do 
            to get the most out of your search.
        </p>
        
        <div class="mt-6 w-full max-w-2xl relative">
            <input type="text" placeholder="Job title or keyword" 
                class="w-full py-3 pl-12 pr-4 text-gray-800 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" 
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1011 3a7.5 7.5 0 005.65 12.65z"/>
            </svg>
        </div>
    </div>
    


       <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($jobOffers as $offer)
                <div class="relative bg-white/80 backdrop-blur-lg border border-gray-200 shadow-lg rounded-2xl overflow-hidden transition-transform transform hover:scale-105">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">{{ $offer->title }}</h2>
                        <p class="text-gray-700 text-sm font-medium uppercase tracking-wide">{{ $offer->sector }}</p>
                        <p class="text-gray-500 text-sm mb-4">{{ $offer->location }}</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xs text-gray-400">
                                Publié le {{ $offer->created_at->format('d/m/Y') }}
                            </span>
                            <a href="{{ route('job-offers.public.show', $offer) }}" 
                               class="bg-gradient-to-r from-red-700 to-red-800 hover:from-red-800 hover:to-red-900 text-white px-5 py-2 text-sm rounded-lg shadow-md transition-all">
                                Lire plus
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        

        <div class="mt-8">
            {{ $jobOffers->links() }}
        </div>
    </div>



 
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".dropdown-btn").forEach(button => {
            button.addEventListener("click", function (event) {
                event.stopPropagation(); 
                const dropdown = this.nextElementSibling;

                document.querySelectorAll(".dropdown-menu").forEach(menu => {
                    if (menu !== dropdown) {
                        menu.classList.add("opacity-0", "invisible", "scale-95");
                    }
                });

                dropdown.classList.toggle("opacity-0");
                dropdown.classList.toggle("invisible");
                dropdown.classList.toggle("scale-95");
            });
        });

        document.addEventListener("click", function () {
            document.querySelectorAll(".dropdown-menu").forEach(menu => {
                menu.classList.add("opacity-0", "invisible", "scale-95");
            });
        });
    });
</script>

@endsection