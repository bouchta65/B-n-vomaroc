<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .hero-section {
      background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/api/placeholder/1920/1080');
      background-size: cover;
      background-position: center;
    }
    .service-card:hover {
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transform: translateY(-5px);
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="bg-gray-50">
  <!-- Top Bar -->
  <div class="bg-green-600 text-white py-2">
    <div class="container mx-auto px-4 flex justify-between items-center text-xs sm:text-sm">
      <div class="flex items-center space-x-2 sm:space-x-4">
        <span><i class="fas fa-envelope mr-1 sm:mr-2"></i>contact@benevolat.org</span>
        <span><i class="fas fa-phone mr-1 sm:mr-2"></i>+33 1 23 45 67 89</span>
      </div>
      <div class="flex space-x-2 sm:space-x-4">
        <a href="#" class="hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="hover:text-gray-200"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-gray-200"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-gray-200"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
  

     <header class="bg-white navbar-shadow">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between h-16 items-center px-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <span class="font-medium text-gray-800">BénévoMaroc</span>
                    </div>
                </div>
                
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-600 hover:text-gray-900 py-2 text-sm">Accueil</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 py-2 text-sm">Opportunités</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 py-2 text-sm">FAQ</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 py-2 text-sm">A propos</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 py-2 text-sm">Contact</a>
                </nav>
                
                <div class="hidden md:block">
                    <button class="signup-button text-white rounded-md focus:outline-none hover:bg-blue-700 transition-colors">
                        S'inscrire
                    </button>
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="p-1 text-gray-500 focus:outline-none">
                        <svg id="menu-open-icon" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menu-close-icon" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <div id="mobile-menu" class="mobile-menu md:hidden border-t border-gray-200">
                <div class="px-4 py-2 space-y-1">
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Accueil</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Opportunités</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">FAQ</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">A propos</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Contact</a>
                </div>
                <div class="px-4 py-3">
                    <button class="w-full signup-button text-white rounded-md focus:outline-none hover:bg-blue-700 transition-colors">
                        S'inscrire
                    </button>
                </div>
            </div>
        </div>
    </header>
    
    <div class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto">
            <div class="md:hidden px-4 py-3">
                <h2 class="text-base font-medium text-gray-800">Opportunités</h2>
            </div>
            
            <div class="flex flex-col md:flex-row items-center justify-between px-4 py-2">
                <div class="w-full md:w-1/3 mb-4 md:mb-0 search-container">
                    <input type="text" placeholder="Rechercher une opportunité..." 
                           class="search-input w-full border rounded-md py-2 px-4 focus:outline-none focus:ring-1 focus:border-blue-500 focus:ring-blue-500">
                </div>
                
                <div class="flex space-x-6 overflow-x-auto w-full md:w-auto">
                    <a href="#" class="tab-link tab-active flex items-center py-3 text-sm" data-tab="benevoles">
                        <svg xmlns="http://www.w3.org/2000/svg" class="tab-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Bénévoles
                    </a>
                    <a href="#" class="tab-link tab-inactive flex items-center py-3 text-sm hover:text-gray-700" data-tab="associations">
                        <svg xmlns="http://www.w3.org/2000/svg" class="tab-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Associations
                    </a>
                    <a href="#" class="tab-link tab-inactive flex items-center py-3 text-sm hover:text-gray-700" data-tab="ensemble">
                        <svg xmlns="http://www.w3.org/2000/svg" class="tab-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Ensemble
                    </a>
                    <a href="#" class="tab-link tab-inactive flex items-center py-3 text-sm hover:text-gray-700" data-tab="formation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="tab-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Formation
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div >
        @yield('content') 
    </div>


    <script src="{{ asset('assets/js/navbar.js') }}"></script>  
</body>
</html>