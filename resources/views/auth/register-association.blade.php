@extends('layout.website')

@section('title', 'Inscription Association - BénévoMaroc')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Header Section -->
    <div class="relative bg-[#C9559B] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Inscrire mon Association</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">
                    Rejoignez notre réseau et trouvez des bénévoles engagés pour votre cause
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gray-50 transform skew-y-2 -mb-10"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-2xl shadow-xl">
            <!-- Progress Steps -->
            <div class="border-b border-gray-200">
                <div class="max-w-5xl mx-auto">
                    <div class="flex justify-between p-8">
                        <div class="flex-1 flex items-center justify-center space-x-4">
                            <span class="w-10 h-10 rounded-full bg-[#00B3AD] text-white flex items-center justify-center text-lg font-semibold">1</span>
                            <span class="text-base font-medium">Informations de l'association</span>
                        </div>
                        <div class="flex-1 flex items-center justify-center space-x-4">
                            <span class="w-10 h-10 rounded-full bg-gray-100 text-gray-400 flex items-center justify-center text-lg font-semibold">2</span>
                            <span class="text-base text-gray-400">Documents légaux</span>
                        </div>
                        <div class="flex-1 flex items-center justify-center space-x-4">
                            <span class="w-10 h-10 rounded-full bg-gray-100 text-gray-400 flex items-center justify-center text-lg font-semibold">3</span>
                            <span class="text-base text-gray-400">Validation</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Content -->
            <div class="max-w-6xl mx-auto p-8">
                <form class="space-y-8">
                    <!-- Two Column Layout -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Left Column -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold text-gray-900">Informations de l'association</h3>
                            
                            <!-- Association Details -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Nom de l'association <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="association_name" required
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                       placeholder="Nom officiel de l'association">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Numéro d'enregistrement <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="registration_number" required
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                       placeholder="Numéro officiel d'enregistrement">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Date de création <span class="text-red-500">*</span>
                                </label>
                                <input type="date" name="creation_date" required
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent">
                            </div>

                            <!-- Mission -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Mission de l'association <span class="text-red-500">*</span>
                                </label>
                                <textarea name="mission" rows="4" required
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                          placeholder="Décrivez la mission et les objectifs de votre association"></textarea>
                            </div>

                            <!-- Domains -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Domaines d'intervention <span class="text-red-500">*</span>
                                </label>
                                <select multiple name="domains[]" required
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent">
                                    <option value="education">Éducation</option>
                                    <option value="health">Santé</option>
                                    <option value="environment">Environnement</option>
                                    <option value="culture">Culture</option>
                                    <option value="social">Action sociale</option>
                                    <option value="sport">Sport</option>
                                </select>
                                <p class="text-sm text-gray-500 mt-1">Maintenez Ctrl pour sélectionner plusieurs domaines</p>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold text-gray-900">Contact et Localisation</h3>

                            <!-- Contact Information -->
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Email de l'association <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" name="association_email" required
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                           placeholder="contact@association.org">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Téléphone <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" name="phone" required
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                           placeholder="+212 XXXXXXXXX">
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Ville <span class="text-red-500">*</span>
                                    </label>
                                    <select name="city" required
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent">
                                        <option value="">Sélectionnez une ville</option>
                                        <option value="casablanca">Casablanca</option>
                                        <option value="rabat">Rabat</option>
                                        <option value="marrakech">Marrakech</option>
                                        <option value="tanger">Tanger</option>
                                        <option value="fes">Fès</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Adresse complète <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="address" rows="3" required
                                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                              placeholder="Adresse détaillée de l'association"></textarea>
                                </div>
                            </div>

                            <!-- Logo Upload -->
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                                <div class="space-y-4">
                                    <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-building text-3xl text-gray-400"></i>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center px-4 py-2 bg-[#00B3AD] text-white rounded-lg cursor-pointer hover:bg-[#009B96] transition-colors">
                                            <i class="fas fa-upload mr-2"></i>
                                            <span>Ajouter le logo</span>
                                            <input type="file" class="hidden" accept="image/*">
                                        </label>
                                        <p class="text-xs text-gray-500 mt-2">Format JPG ou PNG, max 5MB</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Website and Social Media -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Site web
                                    </label>
                                    <input type="url" name="website"
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                           placeholder="https://www.votreassociation.org">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Facebook
                                        </label>
                                        <input type="text" name="facebook"
                                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                               placeholder="@votreassociation">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            LinkedIn
                                        </label>
                                        <input type="text" name="linkedin"
                                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#00B3AD] focus:border-transparent"
                                               placeholder="@votreassociation">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="border-t border-gray-200 pt-8">
                        <div class="space-y-4">
                            <label class="flex items-start space-x-3">
                                <input type="checkbox" required class="mt-1 rounded text-[#00B3AD] focus:ring-[#00B3AD]">
                                <span class="text-sm text-gray-600">
                                    Je certifie que toutes les informations fournies sont exactes et que je suis autorisé(e) 
                                    à représenter cette association. J'accepte les 
                                    <a href="{{url('guide-Juridique/Conditions-dutilisation')}}" class="text-[#00B3AD] hover:underline">conditions d'utilisation</a> et la 
                                    <a href="{{url('guide-Juridique/Politique-confidentialité')}}" class="text-[#00B3AD] hover:underline">politique de confidentialité</a>.
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="w-full bg-[#00B3AD] text-white py-4 rounded-lg hover:bg-[#009B96] 
                                       transition-colors duration-200 flex items-center justify-center space-x-2 text-lg">
                            <span>Continuer vers l'étape suivante</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Login Link -->
            <div class="border-t border-gray-200 p-8 bg-gray-50 rounded-b-2xl">
                <div class="max-w-6xl mx-auto flex justify-between items-center">
                    <p class="text-gray-600">
                        Déjà inscrit ? 
                        <a href="#" class="text-[#00B3AD] hover:underline font-medium">
                            Connectez-vous
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Help Section -->
    <div class="max-w-7xl mx-auto px-4 py-8 text-center">
        <p class="text-gray-600">
            Besoin d'aide ? 
            <a href="#" class="text-[#00B3AD] hover:underline">Contactez notre équipe</a>
        </p>
    </div>
</div>
@endsection