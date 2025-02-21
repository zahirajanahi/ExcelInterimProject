@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    



<div class="bg-fixed bg-cover bg-center h-[60vh]" style="background-image: url('{{ asset('storage/images/') }}')">
    <div class="h-full w-full flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="ms-4 border-s-4 border-red-800 ps-2 md:hidden block font-bold text-zinc-100">Trouver l'emploi de vos rêves à Excel <br> Interim </h1>
        <h1 class="text-4xl md:text-3xl font-bold text-white hidden md:block">
           <span class="ms-6 border-s-4 border-red-800 ps-2 "> @lang("messages.Trouvez")
            <span class="px-2 pb-1 mb-10"> @lang("messages.l'emploi") </span> 
            @lang("messages.de vos rêves") <span >@lang("messages.à Excel Interim")</span> </span><br>
             <span class="text-lg  font-light text-center ms-10">@lang("messages.Trouvez l'emploi qui vous correspond parmi des centaines d'offres. Postulez en quelques clics") <br> <span class="ms-48">@lang("messages.et donnez un nouvel élan à votre carrière")</span>  </span>
        </h1>
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