<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NorTech - Transformer l'Enseignement Technique au Niger</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1d4ed8;
            --secondary: #2563eb;
            --accent: #f59e0b;
        }
        body { 
            font-family: 'Inter', sans-serif;
            color: #1f2937;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .gradient-text {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .section-title {
            position: relative;
            display: inline-block;
        }
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            border-radius: 2px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm fixed w-full z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold">
                    <span class="gradient-text">NorTech</span>
                </div>
                <div class="hidden lg:flex space-x-10">
                    <a href="#home" class="text-gray-600 hover:text-blue-700 font-medium transition">Accueil</a>
                    <a href="#solutions" class="text-gray-600 hover:text-blue-700 font-medium transition">Solutions</a>
                    <a href="#vision" class="text-gray-600 hover:text-blue-700 font-medium transition">Vision</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-700 font-medium transition">Contact</a>
                </div>
                <a href="#contact" class="hidden lg:block bg-gradient-to-r from-blue-600 to-blue-800 text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition">
                    Nous contacter
                </a>
                <button class="lg:hidden focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="container mx-auto px-6 py-4 flex flex-col space-y-4">
                <a href="#home" class="text-gray-600 hover:text-blue-700 font-medium py-2">Accueil</a>
                <a href="#solutions" class="text-gray-600 hover:text-blue-700 font-medium py-2">Solutions</a>
                <a href="#vision" class="text-gray-600 hover:text-blue-700 font-medium py-2">Vision</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-700 font-medium py-2">Contact</a>
                <a href="#contact" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white px-6 py-2 rounded-full font-medium text-center hover:opacity-90 transition">
                    Nous contacter
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-16 lg:mb-0 lg:pr-12">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Transformer l'<span class="gradient-text">Éducation Technique</span> au Niger
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        NorTech révolutionne l'enseignement avec des solutions numériques innovantes adaptées au contexte local : IA, réalité virtuelle et plateformes interactives.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#solutions" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition shadow-lg">
                            Découvrir nos solutions
                        </a>
                        <a href="#contact" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-full font-semibold hover:bg-blue-50 transition">
                            Nous rejoindre
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                             alt="Étudiants en technologie" 
                             class="rounded-xl shadow-2xl w-full">
                    </div>
                    <div class="absolute -bottom-8 -right-8 bg-blue-100 w-32 h-32 rounded-xl z-0 animate-float"></div>
                    <div class="absolute -top-8 -left-8 bg-yellow-100 w-24 h-24 rounded-xl z-0 animate-float animation-delay-2000"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Logos -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <p class="text-center text-gray-500 mb-8">Ils nous font confiance</p>
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-70">
                <div class="text-3xl font-bold text-gray-700">Ministère Éducation</div>
                <div class="text-3xl font-bold text-gray-700">UNESCO</div>
                <div class="text-3xl font-bold text-gray-700">Lycée Technique</div>
                <div class="text-3xl font-bold text-gray-700">CFA Niger</div>
                <div class="text-3xl font-bold text-gray-700">GIZ</div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl md:text-4xl font-bold mb-4">Nos Solutions Innovantes</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Des technologies de pointe adaptées aux besoins spécifiques de l'enseignement technique nigérien
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Solution 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 border border-gray-100">
                    <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-robot text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Chatbot Intelligent</h3>
                    <p class="text-gray-600 mb-6">
                        Assistant virtuel alimenté par l'IA pour guider les étudiants dans leur orientation professionnelle.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                            <span>Analyse des compétences</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                            <span>Suggestions de filières</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                            <span>Disponible 24/7</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Solution 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 border border-gray-100 transform hover:-translate-y-2">
                    <div class="bg-indigo-100 text-indigo-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-book-open text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Bibliothèque Numérique</h3>
                    <p class="text-gray-600 mb-6">
                        Plateforme interactive avec ressources pédagogiques accessibles en ligne et hors-ligne.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check text-indigo-600 mt-1 mr-2"></i>
                            <span>10 000+ ressources</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-indigo-600 mt-1 mr-2"></i>
                            <span>Mode hors-ligne</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-indigo-600 mt-1 mr-2"></i>
                            <span>Forums collaboratifs</span>
                        </li>
                    </ul>
                    <a href="#" class="text-indigo-600 font-medium inline-flex items-center">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Solution 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 border border-gray-100">
                    <div class="bg-purple-100 text-purple-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-vr-cardboard text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Atelier Virtuel VR</h3>
                    <p class="text-gray-600 mb-6">
                        Simulations immersives pour des travaux pratiques sécurisés et économiques.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check text-purple-600 mt-1 mr-2"></i>
                            <span>50+ simulations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-purple-600 mt-1 mr-2"></i>
                            <span>Économie de matériel</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-purple-600 mt-1 mr-2"></i>
                            <span>Apprentissage immersif</span>
                        </li>
                    </ul>
                    <a href="#" class="text-purple-600 font-medium inline-flex items-center">
                        En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-blue-700 to-blue-900 text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl md:text-5xl font-bold mb-2">15+</div>
                    <div class="text-blue-200">Établissements</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl md:text-5xl font-bold mb-2">5K+</div>
                    <div class="text-blue-200">Étudiants</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-blue-200">Disponibilité</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl md:text-5xl font-bold mb-2">100%</div>
                    <div class="text-blue-200">Local</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section id="vision" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold mb-8">Notre Vision</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Moderniser l'enseignement technique au Niger grâce à des technologies inclusives, en favorisant une éducation pratique et une insertion professionnelle compétitive.
                    </p>
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Mission</h4>
                                <p class="text-gray-600">Adapter les technologies aux réalités locales pour une éducation accessible à tous.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="bg-yellow-100 text-yellow-600 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Vision</h4>
                                <p class="text-gray-600">Former la prochaine génération de techniciens innovants pour le Niger.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="bg-green-100 text-green-600 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Valeurs</h4>
                                <p class="text-gray-600">Innovation, Inclusion, Excellence et Adaptabilité.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gray-100 rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" 
                             alt="Vision NorTech" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl md:text-4xl font-bold mb-4">Témoignages</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Ce que disent nos partenaires et bénéficiaires
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "NorTech a transformé notre façon d'enseigner. Les étudiants sont plus engagés et les résultats ont considérablement augmenté."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Dr. Amina Bello" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold">Dr. Amina Bello</div>
                            <div class="text-sm text-gray-500">Directrice, Lycée Technique Niamey</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "La bibliothèque numérique a permis à nos étudiants d'accéder à des ressources qu'on ne pouvait même pas imaginer auparavant."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Prof. Issa Diallo" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold">Prof. Issa Diallo</div>
                            <div class="text-sm text-gray-500">Enseignant, Zinder</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Grâce aux ateliers VR, nous pouvons maintenant faire des TP complexes en toute sécurité et sans limite de matériel."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Fatouma Idriss" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold">Fatouma Idriss</div>
                            <div class="text-sm text-gray-500">Étudiante, Maradi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 bg-gradient-to-br from-blue-700 to-blue-900 text-white p-12">
                        <h2 class="text-3xl font-bold mb-6">Contactez-nous</h2>
                        <p class="mb-8 opacity-90">
                            Prêt à transformer l'éducation technique avec nous ? Contactez-nous pour plus d'informations.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-blue-600 bg-opacity-30 p-3 rounded-lg mr-4">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Adresse</h4>
                                    <p>Rue de l'Innovation, Niamey, Niger</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-blue-600 bg-opacity-30 p-3 rounded-lg mr-4">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Email</h4>
                                    <p>contact@nortech.ng</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-blue-600 bg-opacity-30 p-3 rounded-lg mr-4">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Téléphone</h4>
                                    <p>+227 80 123 456</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-12">
                            <h4 class="font-semibold mb-4">Suivez-nous</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-blue-600 bg-opacity-30 w-10 h-10 rounded-full flex items-center justify-center hover:bg-opacity-40 transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="bg-blue-600 bg-opacity-30 w-10 h-10 rounded-full flex items-center justify-center hover:bg-opacity-40 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="bg-blue-600 bg-opacity-30 w-10 h-10 rounded-full flex items-center justify-center hover:bg-opacity-40 transition">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 bg-white p-12">
                        <h3 class="text-2xl font-semibold mb-6">Envoyez-nous un message</h3>
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Nom complet</label>
                                <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-gray-700 mb-2">Sujet</label>
                                <select id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                                    <option>Demande d'information</option>
                                    <option>Partenariat</option>
                                    <option>Support technique</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-gray-700 mb-2">Message</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-800 text-white py-3 rounded-lg font-semibold hover:opacity-90 transition shadow-md">
                                Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-xl font-bold mb-4">NorTech</h3>
                    <p class="text-gray-400 mb-4">
                        Transformer l'enseignement technique au Niger grâce à l'innovation technologique.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Accueil</a></li>
                        <li><a href="#solutions" class="text-gray-400 hover:text-white transition">Solutions</a></li>
                        <li><a href="#vision" class="text-gray-400 hover:text-white transition">Vision</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Solutions</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Chatbot Intelligent</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Bibliothèque Numérique</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Atelier Virtuel VR</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">
                        Abonnez-vous pour recevoir nos dernières actualités et innovations.
                    </p>
                    <form class="flex">
                        <input type="email" placeholder="Votre email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-900 w-full">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 text-sm">
                <p>© 2025 NorTech. Tous droits réservés. | <a href="#" class="hover:text-white transition">Politique de confidentialité</a> | <a href="#" class="hover:text-white transition">Conditions d'utilisation</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mobile menu close when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.animate-slide-up');
            elements.forEach(el => {
                const elementPosition = el.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if(elementPosition < screenPosition) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }
            });
        };

        // Initialize animations
        window.addEventListener('load', () => {
            animateOnScroll();
        });

        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>