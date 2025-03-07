
@extends('layout.website')
@section('title', 'Bénévolat - Plateforme de Bénévolat et dEngagement Communautaire')
@section('content')

    <!-- Hero Section -->
    <section class="hero-section h-screen flex items-center" style="background-color: #C93EA1;">
      <div class="container mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Ensemble, agissons pour un monde meilleur</h1>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Notre plateforme de bénévolat vous connecte avec des opportunités d'engagement qui correspondent à vos passions et compétences.</p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
          <a href="#" class="bg-[#4ECDC4] hover:bg-[#3BAFA8] text-white font-bold py-3 px-8 rounded-full transition duration-300">S'inscrire comme Bénévole</a>
          <a href="#" class="bg-transparent hover:bg-white hover:text-[#2D3436] text-white font-bold py-3 px-8 border-2 border-white rounded-full transition duration-300">Proposer une Mission</a>
        </div>
      </div>
    </section>
  
    <!-- Features Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <span class="text-[#C93EA1] font-medium">Comment Ça Marche</span>
          <h2 class="text-4xl font-bold mt-2 mb-4 text-[#2D3436]">Engagez-vous facilement</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Notre plateforme simplifie le processus pour trouver des opportunités de bénévolat qui correspondent à vos centres d'intérêt.</p>
        </div>
  
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Feature 1 -->
          <div class="service-card bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-16 h-16 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
              <i class="fas fa-user-plus"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-[#2D3436]">Créez votre profil</h3>
            <p class="text-gray-600">Inscrivez-vous et partagez vos compétences, disponibilités et centres d'intérêt.</p>
            <a href="#" class="inline-block mt-4 text-[#C93EA1] hover:underline">En savoir plus →</a>
          </div>
  
          <!-- Feature 2 -->
          <div class="service-card bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-16 h-16 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
              <i class="fas fa-search"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-[#2D3436]">Trouvez des missions</h3>
            <p class="text-gray-600">Parcourez les opportunités de bénévolat qui correspondent à vos critères.</p>
            <a href="#" class="inline-block mt-4 text-[#C93EA1] hover:underline">En savoir plus →</a>
          </div>
  
          <!-- Feature 3 -->
          <div class="service-card bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-16 h-16 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
              <i class="fas fa-hands-helping"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-[#2D3436]">Engagez-vous</h3>
            <p class="text-gray-600">Postulez aux missions et commencez votre parcours de bénévole.</p>
            <a href="#" class="inline-block mt-4 text-[#C93EA1] hover:underline">En savoir plus →</a>
          </div>
        </div>
      </div>
    </section>
  
    <!-- About Section -->
    <section class="py-16 bg-[#F8F9FA]">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div>
            <img src="{{ asset('assets/images/static/propos.png') }}" alt="À propos de Bénévolat" class="rounded-lg shadow-lg">
          </div>
          <div>
            <span class="text-[#C93EA1] font-medium">À Propos</span>
            <h2 class="text-4xl font-bold mt-2 mb-6 text-[#2D3436]">Connecter les bénévoles aux causes qui leur tiennent à cœur depuis 2025</h2>
            <p class="text-gray-600 mb-6">Notre plateforme met en relation des personnes motivées avec des associations et des projets qui ont besoin de soutien.</p>
            <p class="text-gray-600 mb-8">Nous croyons que chaque personne a des compétences précieuses à offrir et que le bénévolat enrichit autant celui qui donne que celui qui reçoit.</p>
            <div class="grid grid-cols-2 gap-4 mb-8">
              <div class="flex items-center">
                <div class="w-12 h-12 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-xl mr-4">
                  <i class="fas fa-users"></i>
                </div>
                <div>
                  <h4 class="font-bold text-[#2D3436]">Communauté</h4>
                  <p class="text-gray-600 text-sm">+10,000 bénévoles</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-xl mr-4">
                  <i class="fas fa-building"></i>
                </div>
                <div>
                  <h4 class="font-bold text-[#2D3436]">Associations</h4>
                  <p class="text-gray-600 text-sm">+500 partenaires</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-xl mr-4">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div>
                  <h4 class="font-bold text-[#2D3436]">Missions</h4>
                  <p class="text-gray-600 text-sm">+2000 disponibles</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 bg-[#C93EA1] text-white rounded-full flex items-center justify-center text-xl mr-4">
                  <i class="fas fa-globe"></i>
                </div>
                <div>
                  <h4 class="font-bold text-[#2D3436]">Impact</h4>
                  <p class="text-gray-600 text-sm">National & international</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Missions Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <span class="text-[#C93EA1] font-medium">Nos Missions</span>
          <h2 class="text-4xl font-bold mt-2 mb-4 text-[#2D3436]">Opportunités de bénévolat populaires</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Découvrez les missions qui nécessitent votre aide dès maintenant.</p>
        </div>
  
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Mission 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('assets/images/associations/opportunites/event3.jpg') }}" alt="Éducation" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="flex justify-between mb-2">
                <span class="bg-[#C93EA1] text-white text-xs px-2 py-1 rounded-full">Éducation</span>
                <span class="text-gray-500 text-sm">Paris, France</span>
              </div>
              <h3 class="text-xl font-bold mb-2 text-[#2D3436]">Soutien scolaire pour enfants</h3>
              <p class="text-gray-600 mb-4">Aidez des enfants défavorisés à réussir à l'école en leur offrant du soutien scolaire hebdomadaire.</p>
              <div class="mb-4">
                <div class="flex justify-between text-sm mb-1">
                  <span class="font-medium text-gray-700">Engagement requis:</span>
                  <span class="text-gray-600">2h/semaine</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="font-medium text-gray-700">Bénévoles recherchés:</span>
                  <span class="text-gray-600">15/20</span>
                </div>
              </div>
              <a href="#" class="bg-[#4ECDC4] hover:bg-[#3BAFA8] text-white text-center py-2 px-4 rounded-full block transition duration-300">Postuler</a>
            </div>
          </div>
  
          <!-- Mission 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('assets/images/associations/opportunites/event2.jpg') }}" alt="Environnement" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="flex justify-between mb-2">
                <span class="bg-[#C93EA1] text-white text-xs px-2 py-1 rounded-full">Environnement</span>
                <span class="text-gray-500 text-sm">Lyon, France</span>
              </div>
              <h3 class="text-xl font-bold mb-2 text-[#2D3436]">Nettoyage des berges du Rhône</h3>
              <p class="text-gray-600 mb-4">Participez à une journée de nettoyage des berges pour protéger la biodiversité locale.</p>
              <div class="mb-4">
                <div class="flex justify-between text-sm mb-1">
                  <span class="font-medium text-gray-700">Engagement requis:</span>
                  <span class="text-gray-600">1 journée</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="font-medium text-gray-700">Bénévoles recherchés:</span>
                  <span class="text-gray-600">45/50</span>
                </div>
              </div>
              <a href="#" class="bg-[#4ECDC4] hover:bg-[#3BAFA8] text-white text-center py-2 px-4 rounded-full block transition duration-300">Postuler</a>
            </div>
          </div>
  
          <!-- Mission 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('assets/images/associations/opportunites/event1.jpg') }}" alt="Social" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="flex justify-between mb-2">
                <span class="bg-[#C93EA1] text-white text-xs px-2 py-1 rounded-full">Social</span>
                <span class="text-gray-500 text-sm">Marseille, France</span>
              </div>
              <h3 class="text-xl font-bold mb-2 text-[#2D3436]">Accompagnement de personnes âgées</h3>
              <p class="text-gray-600 mb-4">Rendez visite à des personnes âgées isolées pour partager des moments de convivialité.</p>
              <div class="mb-4">
                <div class="flex justify-between text-sm mb-1">
                  <span class="font-medium text-gray-700">Engagement requis:</span>
                  <span class="text-gray-600">3h/semaine</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="font-medium text-gray-700">Bénévoles recherchés:</span>
                  <span class="text-gray-600">8/25</span>
                </div>
              </div>
              <a href="#" class="bg-[#4ECDC4] hover:bg-[#3BAFA8] text-white text-center py-2 px-4 rounded-full block transition duration-300">Postuler</a>
            </div>
          </div>
        </div>
  
        <div class="text-center mt-10">
          <a href="#" class="inline-flex items-center text-[#C93EA1] hover:underline font-medium">
            Voir toutes les missions <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>
  
    <!-- Counter Section -->
    <section class="py-16 bg-[#C93EA1] text-white">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
          <div>
            <div class="text-4xl font-bold mb-2">10,000+</div>
            <p class="text-xl">Bénévoles Actifs</p>
          </div>
          <div>
            <div class="text-4xl font-bold mb-2">2,500+</div>
            <p class="text-xl">Missions Réalisées</p>
          </div>
          <div>
            <div class="text-4xl font-bold mb-2">500+</div>
            <p class="text-xl">Associations Partenaires</p>
          </div>
          <div>
            <div class="text-4xl font-bold mb-2">25+</div>
            <p class="text-xl">Régions Couvertes</p>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Volunteer Section -->
    <section class="py-16 bg-[#F8F9FA]">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <span class="text-[#C93EA1] font-medium">Témoignages</span>
          <h2 class="text-4xl font-bold mt-2 mb-4 text-[#2D3436]">Nos bénévoles partagent leur expérience</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Découvrez comment le bénévolat a transformé leur vie et celle des autres.</p>
        </div>       

       <!-- Volunteer 1 -->
       <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
       <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
        <img src="/api/placeholder/400/400" alt="Bénévole" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-1 text-[#2D3436]">Sophie Dubois</h3>
          <p class="text-[#C93EA1] mb-4">Bénévole en Éducation</p>
          <p class="text-gray-600 mb-4">"Mon expérience de bénévolat m'a permis de donner un sens à ma vie et de développer de nouvelles compétences."</p>
          <div class="flex justify-center">
            <a href="#" class="text-[#C93EA1] hover:underline">Lire plus →</a>
          </div>
        </div>
      </div>

      <!-- Volunteer 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
        <img src="/api/placeholder/400/400" alt="Bénévole" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-1 text-[#2D3436]">Jean Dupont</h3>
          <p class="text-[#C93EA1] mb-4">Bénévole en Environnement</p>
          <p class="text-gray-600 mb-4">"Participer à des missions environnementales m'a permis de contribuer à la protection de notre planète tout en rencontrant des personnes inspirantes."</p>
          <div class="flex justify-center">
            <a href="#" class="text-[#C93EA1] hover:underline">Lire plus →</a>
          </div>
        </div>
      </div>

      <!-- Volunteer 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
        <img src="/api/placeholder/400/400" alt="Bénévole" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-1 text-[#2D3436]">Marie Leroy</h3>
          <p class="text-[#C93EA1] mb-4">Bénévole en Social</p>
          <p class="text-gray-600 mb-4">"Accompagner des personnes âgées m'a appris l'importance de l'écoute et de la solidarité. C'est une expérience enrichissante."</p>
          <div class="flex justify-center">
            <a href="#" class="text-[#C93EA1] hover:underline">Lire plus →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-[#4ECDC4] text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold mb-6">Prêt à faire la différence ?</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">Rejoignez notre communauté de bénévoles et commencez à changer des vies dès aujourd'hui.</p>
    <a href="#" class="bg-white hover:bg-[#F8F9FA] text-[#2D3436] font-bold py-3 px-8 rounded-full transition duration-300">S'inscrire Maintenant</a>
  </div>
</section>


@endsection

