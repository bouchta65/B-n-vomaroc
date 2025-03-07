<!DOCTYPE html>
<html lang="en">
@extends('layout.dashboard.header')
@section('title', 'GeoQuestions Maroc - Plateforme Communautaire')

<body class="bg-gray-900 text-gray-800 flex h-screen">
    
    <div class="w-60 bg-white shadow-lg">
        
    </div>
            @extends('layout.dashboard.navbar')

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 overflow-auto">
        <div class="p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">Tableau de Bord</h1>
                    <p class="text-gray-500">Vue d'ensemble des activités</p>
                </div>
                <div class="flex items-center">
                    <button class="p-2 mr-4 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Admin" class="w-10 h-10 rounded-full border-2 border-white">
                        <span class="ml-2">Admin</span>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Total Bénévoles -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500 mb-1">Total Bénévoles</p>
                            <h2 class="text-3xl font-bold">2,547</h2>
                            <p class="text-green-500 text-sm">+15.3% ce mois</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-users text-blue-500"></i>
                        </div>
                    </div>
                </div>

                <!-- Associations Actives -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500 mb-1">Associations Actives</p>
                            <h2 class="text-3xl font-bold">384</h2>
                            <p class="text-green-500 text-sm">+8.2% ce mois</p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <i class="fas fa-building text-purple-500"></i>
                        </div>
                    </div>
                </div>

                <!-- Missions Complétées -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500 mb-1">Missions Complétées</p>
                            <h2 class="text-3xl font-bold">1,283</h2>
                            <p class="text-green-500 text-sm">+12.4% ce mois</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>
                    </div>
                </div>

                <!-- Heures de Bénévolat -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500 mb-1">Heures de Bénévolat</p>
                            <h2 class="text-3xl font-bold">15,832</h2>
                            <p class="text-green-500 text-sm">+18.7% ce mois</p>
                        </div>
                        <div class="bg-orange-100 p-3 rounded-full">
                            <i class="fas fa-clock text-orange-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Missions par Région -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-6">Répartition des Missions par Région</h3>
                    <div class="h-64 bg-gray-50 flex items-center justify-center">
                        <!-- Chart placeholder -->
                        <p class="text-gray-400">Graphique: Répartition des Missions par Région</p>
                    </div>
                </div>

                <!-- Évolution des Inscriptions -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-6">Évolution des Inscriptions</h3>
                    <div class="h-64 bg-gray-50 flex items-center justify-center">
                        <!-- Chart placeholder -->
                        <p class="text-gray-400">Graphique: Évolution des Inscriptions</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Metrics -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Domaines d'Intervention -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-6">Domaines d'Intervention</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span>Aide Humanitaire</span>
                            <span class="font-bold">42%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Éducation</span>
                            <span class="font-bold">28%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Santé</span>
                            <span class="font-bold">18%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Environnement</span>
                            <span class="font-bold">12%</span>
                        </div>
                    </div>
                </div>

                <!-- Statut des Missions -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-6">Statut des Missions</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span>En Cours</span>
                            <span class="font-bold">45</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>En Attente</span>
                            <span class="font-bold">23</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Terminées</span>
                            <span class="font-bold">128</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Annulées</span>
                            <span class="font-bold">8</span>
                        </div>
                    </div>
                </div>

                <!-- Profil des Bénévoles -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-6">Profil des Bénévoles</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span>18-25 ans</span>
                            <span class="font-bold">45%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>26-35 ans</span>
                            <span class="font-bold">32%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>36-50 ans</span>
                            <span class="font-bold">18%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>50+ ans</span>
                            <span class="font-bold">5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




