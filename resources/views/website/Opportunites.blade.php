@extends('layout.website')
@section('title', 'Bénévolat - Plateforme de Bénévolat et dEngagement Communautaire')
@section('content')

<section class="min-h-screen bg-gray-50">
    <!-- Hero Section with Search -->
    <div class="bg-gradient-to-br from-[#4ECDC4]/10 to-white pt-6 pb-8 md:pt-8 md:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Enhanced Search Bar -->
            <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 text-center">
                    Trouvez votre mission de bénévolat idéale
                </h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-7 gap-4">
                    <!-- Search Input -->
                    <div class="relative lg:col-span-3 group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-[#4ECDC4] group-hover:text-[#3BAFA8] transition-colors duration-200" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" 
                            class="block w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#4ECDC4] focus:ring-2 focus:ring-[#4ECDC4]/20 transition-all duration-200" 
                            placeholder="Quelle mission vous intéresse ?"
                        >
                    </div>

                    <!-- Location Input -->
                    <div class="relative lg:col-span-2 group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-[#4ECDC4] group-hover:text-[#3BAFA8] transition-colors duration-200" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <input type="text" 
                            class="block w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#4ECDC4] focus:ring-2 focus:ring-[#4ECDC4]/20 transition-all duration-200" 
                            placeholder="Où ?"
                        >
                    </div>

                    <!-- Search Button -->
                    <button class="lg:col-span-2 flex justify-center items-center px-6 py-3.5 bg-[#4ECDC4] hover:bg-[#3BAFA8] text-white rounded-xl font-medium transition-all duration-200 transform hover:scale-[1.02] hover:shadow-lg group">
                        <span>Rechercher</span>
                        <svg class="ml-2 h-5 w-5 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

          
            </div>

            <!-- Main Content -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Filters Sidebar -->
                <div class="hidden md:block space-y-6">
                    <!-- Categories Filter -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Filtres</h3>
                        
                        <!-- Categories -->
                        <div class="space-y-3">
                            <label class="flex items-center p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <input type="checkbox" class="form-checkbox rounded text-orange-400 focus:ring-orange-400">
                                <span class="text-gray-700 ml-3">🌍 Social</span>
                            </label>
                            <label class="flex items-center p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <input type="checkbox" class="form-checkbox rounded text-orange-400 focus:ring-orange-400">
                                <span class="text-gray-700 ml-3">🌱 Environnement</span>
                            </label>
                            <label class="flex items-center p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <input type="checkbox" class="form-checkbox rounded text-orange-400 focus:ring-orange-400">
                                <span class="text-gray-700 ml-3">🏥 Santé</span>
                            </label>
                            <label class="flex items-center p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <input type="checkbox" class="form-checkbox rounded text-orange-400 focus:ring-orange-400">
                                <span class="text-gray-700 ml-3">🎓 Éducation</span>
                            </label>
                            <label class="flex items-center p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <input type="checkbox" class="form-checkbox rounded text-orange-400 focus:ring-orange-400">
                                <span class="text-gray-700 ml-3">🎭 Culture</span>
                            </label>
                           
                        </div>

                   
                    </div>
                </div>

                <!-- Opportunities Grid -->
                <div class="md:col-span-3">
                    <!-- Results Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-900">
                            44 opportunités trouvées
                        </h2>
                        <select class="border border-gray-200 rounded-lg px-4 py-2 bg-white focus:outline-none focus:border-[#4ECDC4] text-sm">
                            <option>Les plus récents</option>
                            <option>Les plus populaires</option>
                        </select>
                    </div>

                    <!-- Opportunities Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Single Opportunity Card -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden group hover:shadow-lg transition-all duration-300">
                            <div class="relative">
                                <img src="{{ asset('assets/images/evenement/event1.jpg') }}" alt="Social" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-[#4ECDC4] text-white text-xs px-3 py-1 rounded-full">
                                        Social
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    </svg>
                                    Marseille, France
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-3">
                                    Accompagnement de personnes âgées
                                </h3>
                                <div class="space-y-2 mb-4">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-500">Engagement:</span>
                                        <span class="font-medium">3h/semaine</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-500">Places:</span>
                                        <span class="font-medium">8/25</span>
                                    </div>
                                </div>
                                <a href="#" class="block text-center py-2 px-4 bg-[#4ECDC4] text-white rounded-lg hover:bg-[#3BAFA8] transition-colors duration-200">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                        <!-- Repeat for other opportunities -->
                    </div>

                    <!-- Enhanced Pagination -->
                    <div class="mt-8 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <button class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:border-[#4ECDC4] hover:text-[#4ECDC4]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <div class="flex items-center space-x-2">
                                <button class="px-4 py-2 rounded-lg bg-[#4ECDC4] text-white">1</button>
                                <button class="px-4 py-2 rounded-lg border border-gray-200 hover:border-[#4ECDC4] hover:text-[#4ECDC4]">2</button>
                                <button class="px-4 py-2 rounded-lg border border-gray-200 hover:border-[#4ECDC4] hover:text-[#4ECDC4]">3</button>
                                <span class="px-2">...</span>
                                <button class="px-4 py-2 rounded-lg border border-gray-200 hover:border-[#4ECDC4] hover:text-[#4ECDC4]">12</button>
                            </div>
                            <button class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:border-[#4ECDC4] hover:text-[#4ECDC4]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Add any necessary JavaScript for interactivity
document.addEventListener('DOMContentLoaded', function() {
    // Handle filter toggles
    const filterToggles = document.querySelectorAll('[data-filter-toggle]');
    filterToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const target = document.querySelector(this.dataset.filterToggle);
            target.classList.toggle('hidden');
        });
    });
});
</script>

@endsection