@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    

   
   


    <div class="flex md:space-x-36 mt-32 items-center ">
        {{-- right side --}}
        <div class="ms-10 bg-zinc-400/10 py-6 rounded-2xl w-[20vw] h-[70vh] pt-14 md:block hidden">
            <nav class="ms-10">
                <h1 class="text-zinc-900 font-bold text-xl ">@lang("messages.Nos services")</h1>
                <ul class="nav flex-column space-y-10 mt-10">
                    <li>
                        <a class="font-semibold px-10 py-3 rounded-xl border-zinc-400 border 
                                hover:bg-[#c01c2e] hover:text-white 
                                transform transition-all duration-500 ease-in-out 
                                hover:scale-105 hover:shadow-lg hover:translate-x-2" 
                            href="{{ url('/travailT') }}">
                           @lang("messages.Travail temporaire")
                        </a>
                    </li>
                    <li>
                        <a class="font-semibold px-14 py-3 rounded-xl border-zinc-400 border 
                    
                    transition-all duration-500 ease-in-out 
                    hover:scale-105 hover:shadow-lg hover:translate-x-2 
                     bg-[#c01c2e] text-white" 
                            href="{{ url('/interim') }}">
                            @lang("messages.Recrutement") 
                        </a>
                    </li>
                    <li>
                        <a class="font-semibold px-16 py-3 rounded-xl border-zinc-400 border 
                    
                    transition-all duration-500 ease-in-out 
                    hover:scale-105 hover:shadow-lg hover:translate-x-2 
                     hover:bg-[#c01c2e] hover:text-white" 
                            href="{{ url('/conseil') }}">
                            conseil RH
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- left side --}}
        <div>
            <div class="bg-fixed bg-cover bg-center ms-5 md:ms-1 h-[40vh] md:w-[60vw] w-[88vw] object-cover rounded-2xl" style="background-image: url('{{ asset('storage/images/recrutement.avif') }}')">
                <div class="h-full w-full md:ps-1 ps-10 flex items-center justify-center bg-black bg-opacity-40 rounded-2xl">
                    <h1 class="text-white text-4xl font-bold">@lang("messages.Recrutement") </h1>
                </div>
            </div>
            <p class="md:w-[60vw] w-[80vw] ms-5 md:ms-2  text-gray-800 leading-relaxed pt-7">
             @lang("messages.Notre équipe passionnée et dévouée est là pour vous accompagner dans tous vos projets professionnels. Nous mettons l'accent sur la création de relations durables basées sur la confiance mutuelle et le respect. Chez Excel Interim, la flexibilité est au cœur de notre approche. Nous comprenons les défis auxquels font face les entreprises d'aujourd'hui et nous nous efforçons de fournir des solutions adaptées à vos besoins spécifiques. Notre objectif est de fournir des talents compétents et qualifiés qui s'intègrent parfaitement dans votre entreprise. La sécurité et le bien-être de nos collaborateurs sont également une priorité absolue. Nous sommes fiers de contribuer à votre développement professionnel et nous sommes convaincus que notre collaboration sera mutuellement bénéfique.")
            </p>
        </div>
      </div>
    
      {{-- section services --}}
    <section class="splide ms-5 mt-32 " id="secteurs-carousel">
        <h1 class="text-gray-800 border-l-4 border-[#c01c2e] ps-4 text-4xl font-bold ">@lang("messages.Nos Secteurs D'activité")</h1>
        <div class="splide__track mt-10">
            <ul class="splide__list">
                @php
                    $secteurs = [
                        ['name' => 'Industrie', 'image' => 'storage/images/industrie 4.jpg.webp'],
                        ['name' => 'Transport', 'image' => 'storage/images/quels-differents-types-logistique-1.jpg'],
                        ['name' => 'Aeronautique', 'image' => 'storage/images/aeronautique-Maroc-1.jpg'],
                        ['name' => 'Automobile', 'image' => 'storage/images/6960e14ab36e3c6adbef4ace0e291b0b20240913153347.jpeg'],
                        ['name' => 'Textile', 'image' => 'storage/images/647f8a6a1dc37_text.jpeg'],
                        ['name' => 'Pharmaceutique', 'image' => 'storage/images/pharmaSmall.jpg'],
                        ['name' => 'Agricole', 'image' => 'storage/images/istockphoto-1451085775-612x612.jpg'],
                    ];
                @endphp
    
                @foreach ($secteurs as $secteur)
                    <li class="splide__slide ">
                        <img src="{{ asset($secteur['image']) }}" alt="{{ $secteur['name'] }}" class="md:w-[23vw] w-[80vw] h-[45vh] object-cover rounded-xl" >
                        <h3 class="   border-blue-900 text-center font-medium ">{{ $secteur['name'] }}</h3>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    
    
    
    
    
  
    
    
    
    
    
    <style>
        @keyframes bounceIn {
           0% {
               transform: scale(0);
               opacity: 0;
           }
           60% {
               transform: scale(1.1);
               opacity: 1;
           }
           100% {
               transform: scale(1);
           }
       }
    
       .nav li a {
           animation: bounceIn 0.7s ease-out;
       }
       
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#secteurs-carousel', {
                type: 'loop',
                perPage: 4,
                autoplay: true,
                interval: 3000,
                pauseOnHover: false,
                arrows: false,
                pagination:false ,
                breakpoints: {
                    1024: { perPage: 2 },
                    768: { perPage: 1 },
                }
            }).mount();
        });
    </script>

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
