<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - LIBRA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        alphatek: {
                            blue: '#1d4ed8',
                            dark: '#1e293b',
                            light: '#f8fafc'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-2xl">
            <div class="flex justify-center">
                <!-- Logo animé -->
                <div class="animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-alphatek-blue">
                        <path fill-rule="evenodd" d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-alphatek-dark">
                Rejoindre Libra
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 max-w-md mx-auto">
                Commencez votre voyage avec nous en créant votre compte personnel
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-2xl">
            <div class="bg-white py-8 px-6 shadow-xl rounded-xl sm:px-10 border border-gray-100">
                <!-- Barre de progression
                <div class="mb-8">
                    <div class="flex justify-between mb-2">
                        <span class="text-sm font-medium text-alphatek-blue">Étape 1 sur 2</span>
                        <span class="text-sm font-medium">25% complété</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-alphatek-blue h-2.5 rounded-full" style="width: 25%"></div>
                    </div>
                </div> -->

                <form class="space-y-6" action="/libra/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Section Informations Personnelles -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-medium text-alphatek-dark mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-alphatek-blue" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            Informations Personnelles
                        </h3>
                        
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                                    Nom
                                    <span class="text-red-500 ml-1">*</span>
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input id="last_name" name="last_name" type="text" required 
                                           class="block w-full rounded-md border-gray-300 pl-3 pr-10 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('last_name') border-red-500 @enderror"
                                           placeholder="Dupont">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                @error('last_name')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                                    Prénom
                                    <span class="text-red-500 ml-1">*</span>
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input id="first_name" name="first_name" type="text" required 
                                           class="block w-full rounded-md border-gray-300 pl-3 pr-10 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('first_name') border-red-500 @enderror"
                                           placeholder="Jean">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                @error('first_name')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                                Email professionnel
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="email" name="email" type="email" autocomplete="email" required 
                                       class="block w-full rounded-md border-gray-300 pl-3 pr-10 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('email') border-red-500 @enderror"
                                       placeholder="jean.dupont@entreprise.com">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-gray-500">Utilisez votre email professionnel</p>
                        </div>

                        <!-- Téléphone -->
                        <div class="mt-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                                Téléphone portable
                            </label>
                            <div class="mt-1">
                                <input id="phone" name="phone" type="tel" 
                                       class="block w-full rounded-md border-gray-300 pl-3 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('phone') border-red-500 @enderror">
                            </div>
                            @error('phone')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-gray-500">Pour les notifications importantes</p>
                        </div>

                        <!-- Rôle -->
                        <div class="mt-4">
                            <label for="role" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                                Rôle
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <select id="role" name="role" required class="block w-full rounded-md border-gray-300 pl-3 pr-10 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('role') border-red-500 @enderror">
                                <option value="etudiant">Étudiant</option>
                                <option value="enseignant">Enseignant</option>
                            </select>
                            @error('role')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Photo de profil -->
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Photo de profil
                            </label>
                            <div class="flex items-center">
                                <div class="relative group">
                                    <div id="profile-preview" class="h-16 w-16 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center">
                                        <svg class="h-10 w-10 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="bg-black bg-opacity-50 text-white text-xs p-1 rounded">Changer</span>
                                    </div>
                                </div>
                                <div class="ml-4 flex items-center">
                                    <label for="profile_photo" class="cursor-pointer">
                                        <span class="py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium leading-4 text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-alphatek-blue transition-colors">
                                            Choisir une photo
                                        </span>
                                        <input id="profile_photo" name="profile_photo" type="file" class="sr-only" accept="image/*">
                                    </label>
                                    <button type="button" id="remove-photo" class="ml-2 text-sm text-red-600 hover:text-red-800 hidden">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                            @error('profile_photo')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-gray-500">JPEG, PNG ou GIF (max. 5MB)</p>
                        </div>
                    </div>

                    <!-- Section Sécurité -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-medium text-alphatek-dark mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-alphatek-blue" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            Sécurité du compte
                        </h3>

                        <!-- Mot de passe -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                                Mot de passe
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="password" name="password" type="password" autocomplete="new-password" required 
                                       class="block w-full rounded-md border-gray-300 pl-3 pr-10 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('password') border-red-500 @enderror"
                                       placeholder="••••••••">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="button" id="toggle-password" class="text-gray-400 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            @error('password')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <div class="mt-2">
                                <div class="flex items-center space-x-2">
                                    <div id="password-strength" class="h-1 w-full bg-gray-200 rounded-full overflow-hidden">
                                        <div id="password-strength-bar" class="h-full bg-red-500 w-0"></div>
                                    </div>
                                    <span id="password-strength-text" class="text-xs text-gray-500">Faible</span>
                                </div>
                                <ul class="mt-1 text-xs text-gray-500 list-disc list-inside">
                                    <li>Minimum 8 caractères</li>
                                    <li>Au moins une majuscule</li>
                                    <li>Au moins un chiffre</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Confirmation mot de passe -->
                        <div class="mt-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                                Confirmer le mot de passe
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                                       class="block w-full rounded-md border-gray-300 pl-3 pr-10 py-2 focus:ring-alphatek-blue focus:border-alphatek-blue sm:text-sm @error('password_confirmation') border-red-500 @enderror"
                                       placeholder="••••••••">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="button" id="toggle-password-confirmation" class="text-gray-400 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            @error('password_confirmation')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                            <div id="password-match" class="hidden mt-1 text-sm text-green-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Les mots de passe correspondent
                            </div>
                        </div>
                    </div>

                    <!-- Bouton d'inscription -->
                    <div class="pt-4">
                        <button type="submit" id="submit-btn" 
                                class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-alphatek-blue hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-alphatek-blue transition-colors duration-300 transform hover:scale-[1.01]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                            </svg>
                           기술 Créer mon compte
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">
                                Inscription rapide
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="#" class="w-full inline-flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.477 0 10c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.342-3.369-1.342-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.933.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C17.14 18.163 20 14.418 20 10c0-5.523-4.477-10-10-10z" clip-rule="evenodd" />
                                </svg>
                                Google
                            </a>
                        </div>

                        <div>
                            <a href="#" class="w-full inline-flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path d="M11 1h2v2h-2v2h2v2h-2v2h2v2h-2v2h2v2h-2v2h2v2h-2v2H9v-2H7v2H5v-2H3v-2h2v-2H3v-2h2v-2H3v-2h2V9H3V7h2V5H3V3h2V1h2v2h2V1zM7 7h2v2H7V7zm0 4h2v2H7v-2zm0 4h2v2H7v-2zm4-8h2v2h-2V7zm0 4h2v2h-2v-2zm0 4h2v2h-2v-2z" />
                                </svg>
                                Microsoft
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-center text-sm text-gray-600">
                <p>
                    Déjà membre? 
                    <a href="#" class="font-medium text-alphatek-blue hover:text-blue-500 underline">Connectez-vous</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Gestion de la photo de profil
        const profilePhotoInput = document.getElementById('profile_photo');
        const profilePreview = document.getElementById('profile-preview');
        const removePhotoBtn = document.getElementById('remove-photo');

        profilePhotoInput.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                const file = e.target.files[0];
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    profilePreview.innerHTML = `<img src="${event.target.result}" class="h-full w-full object-cover">`;
                    removePhotoBtn.classList.remove('hidden');
                };
                
                reader.readAsDataURL(file);
            }
        });

        removePhotoBtn.addEventListener('click', function() {
            profilePhotoInput.value = '';
            profilePreview.innerHTML = `
                <svg class="h-10 w-10 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            `;
            removePhotoBtn.classList.add('hidden');
        });

        // Gestion de la visibilité du mot de passe
        const togglePassword = document.getElementById('toggle-password');
        const passwordInput = document.getElementById('password');
        const togglePasswordConfirmation = document.getElementById('toggle-password-confirmation');
        const passwordConfirmationInput = document.getElementById('password_confirmation');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('svg').setAttribute('fill', type === 'password' ? 'currentColor' : '#1d4ed8');
        });

        togglePasswordConfirmation.addEventListener('click', function() {
            const type = passwordConfirmationInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmationInput.setAttribute('type', type);
            this.querySelector('svg').setAttribute('fill', type === 'password' ? 'currentColor' : '#1d4ed8');
        });

        // Vérification de la force du mot de passe
        passwordInput.addEventListener('input', function() {
            const strengthBar = document.getElementById('password-strength-bar');
            const strengthText = document.getElementById('password-strength-text');
            const password = this.value;
            let strength = 0;
            
            // Longueur
            if (password.length >= 8) strength += 1;
            // Majuscule
            if (/[A-Z]/.test(password)) strength += 1;
            // Chiffre
            if (/[0-9]/.test(password)) strength += 1;
            // Caractère spécial
            if (/[^A-Za-z0-9]/.test(password)) strength += 1;
            
            // Mise à jour de l'interface
            if (password.length === 0) {
                strengthBar.style.width = '0%';
                strengthBar.className = 'h-full bg-gray-200 w-0';
                strengthText.textContent = '';
            } else {
                const width = (strength / 4) * 100;
                strengthBar.style.width = `${width}%`;
                
                if (strength <= 1) {
                    strengthBar.className = 'h-full bg-red-500';
                    strengthText.textContent = 'Faible';
                } else if (strength <= 2) {
                    strengthBar.className = 'h-full bg-yellow-500';
                    strengthText.textContent = 'Moyen';
                } else if (strength <= 3) {
                    strengthBar.className = 'h-full bg-blue-500';
                    strengthText.textContent = 'Fort';
                } else {
                    strengthBar.className = 'h-full bg-green-500';
                    strengthText.textContent = 'Très fort';
                }
            }
        });

        // Vérification de la correspondance des mots de passe
        passwordConfirmationInput.addEventListener('input', function() {
            const passwordMatch = document.getElementById('password-match');
            if (this.value === passwordInput.value && this.value.length > 0) {
                passwordMatch.classList.remove('hidden');
            } else {
                passwordMatch.classList.add('hidden');
            }
        });

        // Initialisation du sélecteur de téléphone
        const phoneInput = document.getElementById('phone');
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "fr",
            preferredCountries: ["fr", "be", "ch", "ca", "us"],
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        // Formatage du numéro de téléphone avant soumission
        document.querySelector('form').addEventListener('submit', function() {
            if (phoneInput.value.trim()) {
                phoneInput.value = iti.getNumber();
            }
        });

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').classList.add('animate-fade-in-up');
        });
    </script>
</body>
</html>