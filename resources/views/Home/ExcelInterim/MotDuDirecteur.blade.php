@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    
              
      <!-- Background Image Section -->
      <div class="bg-fixed bg-cover bg-center h-[60vh]" style="background-image: url('{{ asset('storage/images/somno.webp') }}')">
        <div class="h-full w-full flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-zinc-200 text-4xl font-bold">Mot Du Directeur <br> 
              <span class="text-lg font-normal ms-10"> <a href="{{ url('/') }}" class="text-[#c01c2e] transition duration-500 font-bold">Home</a> // Mot Du Directeur</span>  
            </h1> 
        </div>
    </div>

    <!-- Section with Image on Right and Text on Left -->
    <section class="py-12 ">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <!-- Text Content -->
            <div>
                <h1 class="text-3xl font-bold mb-4 text-[#c01c2e]">Mot Du President</h1>
                <h2 class="text-xl font-semibold text-zinc-800">EXCEL INTERIM</h2>

                <p class="text-gray-800 leading-relaxed mb-4 pt-5 w-[100%]">
                    Our HR services are designed to help businesses streamline their processes and focus on what matters most. From recruitment to performance management, we provide comprehensive solutions tailored to your needs.
                </p>
                <p class="text-gray-800 leading-relaxed w-[100%]">
                    Opérateur reconnu dans l’univers des services de mise à disposition de personnel aux entreprises, EXCEL INTERIM affiche une stratégie de développement ambitieuse sur le long terme, et cherche à ancrer sa pérennité sur une culture d'entreprise forte, basée sur la qualité et la satisfaction de tous ses partenaires, internes et externes.

                    EXCEL INTERIM Met en œuvre un ensemble de compétences et de techniques de métiers en vue de mettre à la disposition de ses clients les qualifications adaptées aux missions souhaitées.
                    
                    Notre politique est de fournir des services de qualité avec meilleurs résultats, et de donner rentablement satisfaction à nos clients en s’adaptant à leurs besoins.
                    
                    Nous sommes engagés sur l’amélioration continue par le recueil, l’analyse et les enseignements à tirer de l’écoute clients, par le traitement prioritaire et rapide des non-conformités, et la proposition de nouveaux services.                </p>
            </div>

            <!-- Image Content -->
            <div>
                <img src="{{ asset('storage/images/double-exposure-businessman-top-building-background-ai-generated_666215-4811.jpg') }} " alt="HR Services" class="rounded-lg shadow-md h-[80vh]">
            </div>
        </div>
    </section>
    
          
              
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