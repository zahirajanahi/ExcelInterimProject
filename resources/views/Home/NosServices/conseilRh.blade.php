@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    
    
    

    <div class="flex md:space-x-36 mt-32 items-center ">
        {{-- right side --}}
        <div class="ms-10 bg-zinc-400/10 py-6 rounded-2xl w-[20vw] h-[70vh] pt-14 md:block hidden">
            <nav class="ms-10">
                <h1 class="text-zinc-900 font-bold text-xl ">Nos Services</h1>
                <ul class="nav flex-column space-y-10 mt-10">
                    <li>
                        <a class="font-semibold px-10 py-3 rounded-xl border-zinc-400 border 
                                hover:bg-[#c01c2e] hover:text-white 
                                transform transition-all duration-500 ease-in-out 
                                hover:scale-105 hover:shadow-lg hover:translate-x-2" 
                            href="{{ url('/travailT') }}">
                            Travail Temporaire 
                        </a>
                    </li>
                    <li>
                        <a class="font-semibold px-14 py-3 rounded-xl border-zinc-400 border 
                                hover:bg-[#c01c2e] hover:text-white 
                                transform transition-all duration-500 ease-in-out 
                                hover:scale-105 hover:shadow-lg hover:translate-x-2" 
                            href="{{ url('/interim') }}">
                            Recrutement 
                        </a>
                    </li>
                    <li>
                        <a class="font-semibold px-16 py-3 rounded-xl border-zinc-400 border 
                    
                    transition-all duration-500 ease-in-out 
                    hover:scale-105 hover:shadow-lg hover:translate-x-2 
                     bg-[#c01c2e] text-white" 
                            href="{{ url('/conseil') }}">
                            Conseil RH 
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- left side --}}
        <div>
            <div class="bg-fixed bg-cover bg-center ms-5 md:ms-1 h-[40vh] md:w-[60vw] w-[88vw] object-cover rounded-2xl" style="background-image: url('{{ asset('storage/images/conseiilrh.jpg') }}')">
                <div class="h-full w-full md:ps-1 ps-10 flex items-center justify-center bg-black bg-opacity-40 rounded-2xl">
                    <h1 class="text-white text-4xl font-bold">CONSEIL RH</h1>
                </div>
            </div>
            <p class="md:w-[60vw] w-[80vw] ms-5 md:ms-2 text-gray-800 leading-relaxed pt-7">
                Excel Interim est un cabinet de conseil en organisation dont la vocation est d’accompagner les entreprises dans leur transformation.
                Notre expérience dans de nombreux contextes de transformation a permis de nous forger de solides convictions et d’affiner une méthodologie éprouvée que nous adaptons toujours à votre contexte.
                L’outillage que nous vous proposons est orienté “capital humain” pour développer des soft skills en équipe ou individuellement.
                Nous sommes une entreprise apprenante : nos consultants disposent d’un état d’esprit propice à la conduite du changement.
            </p>
        </div>
      </div>
    
       {{-- Conseil RH Section --}}
       <div class="mt-16 w-[60vw] mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">Conseil RH</h2>
        <div class="space-y-4">
            <div class="border border-gray-600 rounded-lg">
                <button class="w-full text-left p-4 font-semibold flex justify-between items-center" onclick="toggleFAQ('faq1')">
                    Quels sont les services de Conseil RH offerts ?
                    <span>+</span>
                </button>
                <div id="faq1" class="hidden p-4 border-t border-gray-600">
                    Nous offrons des services d’accompagnement stratégique, gestion du changement, et développement des compétences pour optimiser votre capital humain.
                </div>
            </div>
            <div class="border border-gray-600 rounded-lg">
                <button class="w-full text-left p-4 font-semibold flex justify-between items-center" onclick="toggleFAQ('faq2')">
                    Comment le Conseil RH peut-il aider mon entreprise ?
                    <span>+</span>
                </button>
                <div id="faq2" class="hidden p-4 border-t border-gray-600">
                    Nos experts vous accompagnent dans l’amélioration des processus RH, l’optimisation des performances et la gestion des talents.
                </div>
            </div>
            <div class="border border-gray-600 rounded-lg">
                <button class="w-full text-left p-4 font-semibold flex justify-between items-center" onclick="toggleFAQ('faq3')">
                    Offrez-vous des formations en management et leadership ?
                    <span>+</span>
                </button>
                <div id="faq3" class="hidden p-4 border-t border-gray-600">
                    Oui, nous proposons des formations en management, leadership et développement personnel adaptées aux besoins des entreprises.
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function toggleFAQ(id) {
            var faq = document.getElementById(id);
            if (faq.classList.contains('hidden')) {
                faq.classList.remove('hidden');
            } else {
                faq.classList.add('hidden');
            }
        }
    </script>
    
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


