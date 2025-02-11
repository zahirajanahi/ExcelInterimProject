@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    

    
       <!-- Background Image Section -->
     <div class="bg-fixed bg-cover bg-center bg-fixed h-[60vh]" style="background-image: url('{{ asset('storage/images/qsn.png') }}')">
        <div class="h-full w-full flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-white text-4xl font-bold">Nos Valeur <br> 
                <span class="text-lg font-normal ms-7"> <a href="{{ url('/') }}" class="hover:text-[#c01c2e] transition duration-500">Home</a> // Nos Valeur</span>  
              </h1> 
        </div>
    </div>

    <!-- Cards Section -->
    <div class="container mx-auto my-12 px-6">
        <h1></h1>
        <p class="text-gray-700 font-semibold mb-10 text-center text-lg border-s-4 ps-3 h-[10vh] pt-2 border-s-[#c01c2e]">Le RESPECT DE LA LEGISLATION, Le RESPECT DE LA PERSONNE, QUALITE DE SERVICE, L’ACCOMPAGNEMENT, LA REACTIVITE et la PROXIMITE sont nos valeurs communes. Elles nous permettent d’être un véritable partenaire de confiance pour nos clients.</p>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['id' => '01', 'title' => 'EXPERTISE', 'description' => 'Nous mettons à profit notre expertise pour offrir des solutions adaptées et performantes. Grâce à une maîtrise approfondie de nos métiers, nous garantissons un service de qualité et une approche rigoureuse dans toutes nos interventions.', 'image' => 'exp.webp'],
                ['id' => '02', 'title' => 'CONFORMITÉ SOCIALE', 'description' => 'Nous agissons en conformité avec les lois et les normes sociales afin de garantir un environnement de travail respectueux et équitable. Chaque action est menée dans une démarche éthique, assurant le bien-être des collaborateurs et la responsabilité sociétale', 'image' => 'AsouoSznYmZHtDK88ABlzeUU.webp'],
                ['id' => '03', 'title' => 'CONFIDENTIALITÉ', 'description' => 'Nous assurons la protection et la confidentialité des données en veillant à la sécurité des informations de nos clients, partenaires et collaborateurs. La transparence et la confiance sont au cœur de notre engagement.', 'image' => 'confe.webp'],
                ['id' => '04', 'title' => 'INNOVATION', 'description' => 'Nous encourageons l’innovation pour répondre aux défis de demain. En adoptant des approches créatives et en intégrant les nouvelles technologies, nous optimisons nos méthodes et développons des solutions performantes et adaptées aux besoins évolutifs.', 'image' => 'expertige.jpg'],
                ['id' => '05', 'title' => 'RESPECT', 'description' => 'Nous plaçons le respect au cœur de nos relations, en valorisant chaque individu et en favorisant un environnement bienveillant. L’écoute, l’équité et la reconnaissance des différences sont essentielles pour bâtir des collaborations solides.', 'image' => 'resp.jpg'],
                ['id' => '06', 'title' => 'ENGAGEMENT', 'description' => 'Nous sommes engagés à fournir un service de qualité...Nous nous engageons à fournir un service de qualité basé sur la rigueur et la responsabilité. Notre implication se traduit par une approche proactive et une volonté constante d’atteindre l’excellence dans nos missions.', 'image' => 'eng.jpg']
            ] as $value)
                <div class="w-full relative  sm:w-[48%] md:w-[30%] lg:w-[30%] xl:w-[30%] bg-white shadow-lg rounded-lg p-6 text-center">
                    <span class="bg-gray-800 text-white px-3 py-1 rounded-full text-sm font-bold">{{ $value['id'] }}</span>
                    <div class="relative overflow-hidden w-[24vw] h-[40vh]">
                        <img src="{{ asset('storage/images/' . $value['image']) }}" alt="{{ $value['title'] }}" class="h-[100%] w-[100%] object-cover hover:scale-110 duration-500  mt-4 rounded-lg"></div>
                    <h2 class="text-xl font-bold text-gray-800 mt-4">{{ $value['title'] }}</h2>
                    <p class="text-gray-600 mt-2">{{ $value['description'] }}</p>
                </div>

                
            @endforeach
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