@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    



    <!-- Background Image Section -->
    <div class="bg-fixed bg-cover bg-center h-[60vh]" style="background-image: url('{{ asset('storage/images/nv.jpg') }}')">
        <div class="h-full w-full flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-zinc-200 text-4xl font-bold">Qui somme nous ?<br> 
                <span class="text-lg font-normal ms-10"> <a href="{{ url('/') }}" class="text-[#c01c2e] transition duration-500 font-bold">Home</a> // Qui somme nous ?</span>  
              </h1> 
        </div>
    </div>

    <!-- Section with Image on Right and Text on Left -->
    <section class="py-12 ">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <!-- Text Content -->
            <div>
                <h1 class="text-3xl font-bold mb-4 text-[#c01c2e]">Qui sommes nous ?                </h1>

                <p class="text-gray-800 leading-relaxed mb-1 pt-5 w-[100%]">
                    Spécialisée dans le travail temporaire, EXCEL INTERIM met en œuvre un ensemble de compétences et de techniques de métiers en vue de mettre à la disposition de ses clients les qualifications adaptées aux missions souhaitées.
                <p class="text-gray-800 leading-relaxed  w-[100%]">Notre politique est de fournir des services de qualité avec meilleurs résultats, et de donner rentablement satisfaction à nos clients en s’adaptant à leurs besoins.  </p>
                <p class="text-gray-800 leading-relaxed  w-[100%] pt-5">Notre stratégie d’entreprise est totalement tournée vers la qualité : </p>
                <div class="pt-2">
                    <div class="flex space-x-1 ms-10  text-gray-800 "><i class="bi bi-check2-circle font-bold text-bl"></i> <p>Les processus mis en œuvre pour les différentes missions d’intérim, sont efficaces.</p></div>
                    <div class="flex space-x-1 ms-10 text-gray-800 "><i class="bi bi-check2-circle"></i> <p> La réponse complète aux besoins de nos clients est notre préoccupation, permettant de les fidéliser et de développer le marché.</p></div>
                    <div class="flex space-x-1 text-gray-800 pt-4 "><p>Notre politique est communiquée : </p></div>
                    <div class="flex space-x-1  text-gray-800 pt-2 ms-10"><i class="bi bi-check2-circle"></i> <p>Les processus mis en œuvre pour les différentes missions d’intérim, sont efficaces.</p></div>
                    <div class="flex space-x-1  text-gray-800  ms-10"><i class="bi bi-check2-circle"></i> <p>Les personnels sont formés,</p></div>
                    <div class="flex space-x-1  text-gray-800 ms-10"><i class="bi bi-check2-circle"></i> <p> Notre comité exécutif pilote la Qualité,</p></div>
                    <div class="flex space-x-1  text-gray-800 ms-10"><i class="bi bi-check2-circle"></i> <p>Notre environnement de travail et nos outils sont efficaces,</p></div>

                </div>
            </p>
            </div>

            <!-- Image Content -->
            <div>
                <img src="{{ asset('storage/images/pixelcut-export (5).jpeg') }} " alt="HR Services" class="rounded-lg shadow-md h-[85vh] object-cover">
            </div>
        </div>
    </section>

    <div class="relative w-full h-[39vh] bg-fixed bg-cover bg-center" style="background-image: url('{{ asset('storage/images/nv.jpg') }}');"> 
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">
            <button id="openModal" class="mt-10 w-16 h-16 flex justify-center items-center bg-[#c01c2e] rounded-full shadow-lg transition transform hover:scale-110 duration-500">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 5v14l11-7z"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <div>
        <img src="{{ asset('storage/images/qoutes.png') }}"  class="mx-auto pt-12">
    </div>
    <!-- Modal -->
    <div id="videoModal" class="fixed inset-0 hidden bg-black/80 flex justify-center items-center">
        <div class="relative bg-white p-6 rounded-lg shadow-lg w-[80vw] max-w-2xl">
            <button id="closeModal" class="absolute top-2 right-2 text-xl font-bold text-gray-700">&times;</button>
            <video controls class="w-full h-auto rounded-lg">
                <source src="{{ asset('storage/videos/sample-video.mp4') }}" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const openModal = document.getElementById("openModal");
        const closeModal = document.getElementById("closeModal");
        const videoModal = document.getElementById("videoModal");

        openModal.addEventListener("click", function () {
            videoModal.classList.remove("hidden");
        });

        closeModal.addEventListener("click", function () {
            videoModal.classList.add("hidden");
        });

        window.addEventListener("click", function (e) {
            if (e.target === videoModal) {
                videoModal.classList.add("hidden");
            }
        });
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
