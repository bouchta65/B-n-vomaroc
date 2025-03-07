@extends('layout.website')

@section('title', 'Inscription Bénévole - BénévoMaroc')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Header Section -->
    <div class="relative bg-[#00B3AD] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Devenir Bénévole</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">
                    Rejoignez notre communauté et commencez votre parcours de bénévolat
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gray-50 transform skew-y-2 -mb-10"></div>
    </div>
    <br><br><br>
    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-lg">
            <!-- Form Steps -->
            <div class="border-b border-gray-200">
                <div class="flex justify-between p-6">
                    <div class="flex items-center space-x-4">
                        <span class="w-8 h-8 rounded-full bg-[#00B3AD] text-white flex items-center justify-center">1</span>
                        <span class="text-sm font-medium">Informations personnelles</span>
                    </div>
                    <div class="flex items-center space-x-4 text-gray-400">
                        <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">2</span>
                        <span class="text-sm">Préférences</span>
                    </div>
                </div>
            </div>

            <!-- Form Content -->
            <form action="" method="POST" class="p-6 space-y-6">
                @csrf
                
                <!-- Personal Information -->
                <div class="space-y-6">
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Prénom <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="firstname" required
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                   placeholder="Votre prénom">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Nom <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="lastname" required
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                   placeholder="Votre nom">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                               placeholder="votre@email.com">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Téléphone
                        </label>
                        <input type="tel" name="phone"
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                               placeholder="+212 XXXXXXXXX">
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Date de naissance <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="birthdate" required
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent">
                    </div>

                    <!-- City -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Ville <span class="text-red-500">*</span>
                        </label>
                        <select name="city" required
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent">
                            <option value="">Sélectionnez votre ville</option>
                            <option value="casablanca">Casablanca</option>
                            <option value="rabat">Rabat</option>
                            <option value="marrakech">Marrakech</option>
                            <option value="tanger">Tanger</option>
                            <option value="fes">Fès</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Mot de passe <span class="text-red-500">*</span>
                            </label>
                            <input type="password" name="password" required
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                   placeholder="••••••••">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Confirmer le mot de passe <span class="text-red-500">*</span>
                            </label>
                            <input type="password" name="password_confirmation" required
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                   placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <!-- Terms -->
                <div class="flex items-start space-x-3 pt-4">
                    <input type="checkbox" required
                           class="mt-1 rounded text-[#00B3AD] focus:ring-[#00B3AD]">
                    <label class="text-sm text-gray-600">
                        J'accepte les <a href="#" class="text-[#00B3AD] hover:underline">conditions d'utilisation</a>
                        et la <a href="#" class="text-[#00B3AD] hover:underline">politique de confidentialité</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-6">
                    <button type="submit"
                            class="w-full bg-[#00B3AD] text-white py-3 rounded-lg hover:bg-[#009B96] 
                                   transition-colors duration-200 flex items-center justify-center space-x-2">
                        <span>Créer mon compte bénévole</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <div class="p-6 bg-gray-50 rounded-b-2xl text-center">
                <p class="text-gray-600">
                    Déjà inscrit ? 
                    <a href="" class="text-[#00B3AD] hover:underline font-medium">
                        Connectez-vous
                    </a>
                </p>
            </div>
        </div>

        <!-- Help Section -->
        <div class="mt-8 text-center">
            <p class="text-gray-600">
                Besoin d'aide ? 
                <a href="#" class="text-[#00B3AD] hover:underline">Contactez-nous</a>
            </p>
        </div>
    </div>

    <!-- Current Time and User Info -->
    <div class="fixed bottom-4 right-4 bg-white/80 backdrop-blur-sm rounded-lg shadow-lg p-4">
        <div class="flex items-center space-x-4 text-sm text-gray-600">
            <div class="flex items-center">
                <i class="fas fa-clock text-[#00B3AD] mr-2"></i>
                <span>2025-03-05 10:12:08 UTC</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-user text-[#00B3AD] mr-2"></i>
                <span>@bouchta65</span>
            </div>
        </div>
    </div>
</div>
@endsection