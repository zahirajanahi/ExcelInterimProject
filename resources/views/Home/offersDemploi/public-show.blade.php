@extends('Home.home-layouts')

@section('title', 'Hr Services')

@section('content')
    


    <div class="container mx-auto px-4 py-8 mt-32 bg-gray-400/10 rounded-2xl">
        <div class="  overflow-hidden">
            <a href="{{ url('/offres-demploi') }}" class="font-semibold text-[#c01c2e] flex gap-4"> <i class="bi bi-arrow-left text-lg"></i> offres d'emploi</a>
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $jobOffer->title }}</h1>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Détails du poste</h2>
                        <div class="space-y-3">
                            <p><span class="font-semibold"> -  Secteur:</span> {{ $jobOffer->sector }}</p>
                            <p><span class="font-semibold"> 
                                <p><span class="font-semibold"> - Type de contrat:</span> {{ $jobOffer->contract_type }}</p>
                            <p><span class="font-semibold"> 
                                <p><span class="font-semibold"> - Lieu:</span> {{ $jobOffer->location }}</p>
                            <p><span class="font-semibold">
                                <p><span class="font-semibold"> -  Date de publication:</span> {{ $jobOffer->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
    
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Prérequis</h2>
                        <div class="space-y-3">
                            <p><span class="font-semibold">- Formation:</span> {{ $jobOffer->education }}</p>
                            <p><span class="font-semibold">- Expérience:</span> {{ $jobOffer->experience }}</p>
                        </div>
                    </div>
                </div>
    
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Description du poste</h2>
                    <div class="prose max-w-none text-gray-600">
                        {{ $jobOffer->description }}
                    </div>
                </div>

                <p class="text-blue-950  font-semibold mt-7">Intéresse pour ce poste ?</p>
    
                <button onclick="openApplicationModal()" 
                        class="bg-[#c01c2e] hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold mt-4">
                Envoyez votre CV
                </button>
            </div>
        </div>
    
     <!-- Application Modal -->
<div id="applicationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl p-8 transform transition-all scale-95">
        <h2 class="text-2xl font-bold mb-6">Postuler pour: {{ $jobOffer->title }}</h2>

        @auth
        <form action="{{ route('job-offers.apply', $jobOffer) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Grid with 3 inputs per row -->
            <div class="grid grid-cols-3 gap-6 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Prénom</label>
                    <input type="text" name="first_name" required value="{{ old('first_name', auth()->user()->name) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nom</label>
                    <input type="text" name="last_name" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" required value="{{ old('email', auth()->user()->email) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Téléphone</label>
                    <input type="tel" name="phone" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Ville</label>
                    <input type="text" name="city" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Adresse</label>
                    <input type="text" name="address" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">CV (PDF)</label>
                <input type="file" name="cv" accept=".pdf" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea name="message" rows="4" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500"></textarea>
            </div>

            <div class="flex justify-end space-x-4">
                <button type="button" onclick="closeApplicationModal()"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                    Annuler
                </button>
                <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                    Envoyer ma candidature
                </button>
            </div>
        </form>
        @else
        <div class="text-center py-8">
            <p class="text-gray-600 mb-4">Vous devez être connecté pour postuler à cette offre.</p>
            <a href="{{ route('login') }}" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold">
                Se connecter
            </a>
        </div>
        @endauth
    </div>
</div>



    </div>





    <script>
        function openApplicationModal() {
            @auth
                document.getElementById('applicationModal').classList.remove('hidden');
            @else
                window.location.href = "{{ route('register') }}";
            @endauth
        }
    
        function closeApplicationModal() {
            document.getElementById('applicationModal').classList.add('hidden');
        }
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