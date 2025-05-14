<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Libra - Votre bibliothèque numérique élégante pour explorer des milliers de livres et ressources académiques">
    <title>Libra - Bibliothèque Numérique Élégante</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #60a5fa;
            --secondary: #f472b6;
            --accent: #34d399;
            --dark: #111827;
            --light: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            @apply bg-gray-50;
        }

        /* Fade-in animation for cards */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .book-card {
            animation: fadeIn 0.5s ease-out forwards;
        }

        /* Mobile nav transition */
        .nav-mobile {
            transition: transform 0.3s ease-in-out;
        }

        .nav-mobile.open {
            transform: translateY(0);
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom focus styles */
        [type="text"]:focus, select:focus {
            @apply ring-2 ring-offset-2 ring-[var(--accent)] outline-none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2 text-2xl font-bold text-gray-900">
                <i class="fas fa-book text-[var(--accent)]"></i>
                LIBRA
            </a>

            <button class="md:hidden text-2xl focus:outline-none" id="nav-toggle" aria-label="Toggle menu">
                <i class="fas fa-bars text-gray-700"></i>
            </button>

            <div class="hidden md:flex items-center gap-8">
                <form class="relative flex-1 max-w-md" role="search">
                    <input 
                        type="text" 
                        class="w-full p-3 pl-10 rounded-lg border border-gray-200 bg-gray-50 text-sm" 
                        placeholder="Rechercher un livre..." 
                        aria-label="Rechercher des livres"
                    >
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[var(--accent)]" aria-label="Lancer la recherche">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <a href="#" class="text-gray-600 hover:text-[var(--accent)] font-medium">Accueil</a>
                <a href="#" class="text-gray-600 hover:text-[var(--accent)] font-medium">Catégories</a>
                <a href="#" class="text-gray-600 hover:text-[var(--accent)] font-medium">Tendances</a>
                <a href="#" class="text-gray-600 hover:text-[var(--accent)] font-medium">Études</a>
                <a href="#" class="relative text-gray-600 hover:text-[var(--accent)]" aria-label="Favoris">
                    <i class="fas fa-heart"></i>
                    <span class="absolute -top-2 -right-2 bg-[var(--accent)] text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">5</span>
                </a>
                <a href="#" class="text-gray-600 hover:text-[var(--accent)]" aria-label="Profil">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="nav-mobile hidden md:hidden bg-white shadow-lg transform -translate-y-full absolute top-full left-0 right-0">
            <div class="p-6">
                <form class="mb-6 relative" role="search">
                    <input 
                        type="text" 
                        class="w-full p-3 pl-10 rounded-lg border border-gray-200 bg-gray-50 text-sm" 
                        placeholder="Rechercher..." 
                        aria-label="Rechercher des livres"
                    >
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[var(--accent)]" aria-label="Lancer la recherche">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <ul class="space-y-4">
                    <li><a href="#" class="block text-gray-600 hover:text-[var(--accent)] font-medium">Accueil</a></li>
                    <li><a href="#" class="block text-gray-600 hover:text-[var(--accent)] font-medium">Catégories</a></li>
                    <li><a href="#" class="block text-gray-600 hover:text-[var(--accent)] font-medium">Tendances</a></li>
                    <li><a href="#" class="block text-gray-600 hover:text-[var(--accent)] font-medium">Études</a></li>
                    <li><a href="#" class="block text-gray-600 hover:text-[var(--accent)] font-medium">Favoris</a></li>
                    <li><a href="#" class="block text-gray-600 hover:text-[var(--accent)] font-medium">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] text-white pt-24 pb-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight">Libra : Votre Univers de Lecture</h1>
            <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto opacity-90">Plongez dans une collection de milliers de livres numériques et ressources académiques, accessibles partout, tout le temps.</p>
            <a 
                href="#" 
                class="inline-block bg-[var(--accent)] text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-105"
            >
                Découvrir Maintenant
            </a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Filter Bar -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8 flex flex-wrap gap-4">
            <div class="flex items-center gap-3 flex-1 min-w-[200px]">
                <span class="font-semibold text-gray-700 text-sm">Catégorie :</span>
                <select class="flex-1 p-3 rounded-lg border border-gray-200 bg-gray-50 text-sm" aria-label="Sélectionner une catégorie">
                    <option>Toutes</option>
                    <option>Littérature</option>
                    <option>Sciences</option>
                    <option>Technologie</option>
                    <option>Histoire</option>
                    <option>Philosophie</option>
                </select>
            </div>
            <div class="flex items-center gap-3 flex-1 min-w-[200px]">
                <span class="font-semibold text-gray-700 text-sm">Niveau :</span>
                <select class="flex-1 p-3 rounded-lg border border-gray-200 bg-gray-50 text-sm" aria-label="Sélectionner un niveau">
                    <option>Tous</option>
                    <option>Licence 1</option>
                    <option>Licence 2</option>
                    <option>Licence 3</option>
                    <option>Master</option>
                    <option>Doctorat</option>
                </select>
            </div>
            <div class="flex items-center gap-3 flex-1 min-w-[200px]">
                <span class="font-semibold text-gray-700 text-sm">Filière :</span>
                <select class="flex-1 p-3 rounded-lg border border-gray-200 bg-gray-50 text-sm" aria-label="Sélectionner une filière">
                    <option>Toutes</option>
                    <option>Informatique</option>
                    <option>Mathématiques</option>
                    <option>Physique</option>
                    <option>Chimie</option>
                    <option>Biologie</option>
                </select>
            </div>
            <div class="flex items-center gap-3 flex-1 min-w-[200px]">
                <span class="font-semibold text-gray-700 text-sm">Trier :</span>
                <select class="flex-1 p-3 rounded-lg border border-gray-200 bg-gray-50 text-sm" aria-label="Trier les résultats">
                    <option>Pertinence</option>
                    <option>Plus récents</option>
                    <option>Mieux notés</option>
                    <option>A-Z</option>
                </select>
            </div>
        </div>

        <!-- Book Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @foreach ($documents as $Document)
            <div class="book-card bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
                <div class="relative">
                    <span class="absolute top-3 left-3 bg-[var(--accent)] text-white text-xs font-semibold px-2 py-1 rounded">Nouveau</span>
                    <img 
                        src="{{$Document->file_path}}" 
                        alt="{{$Document->title}}" 
                        class="w-full h-48 object-cover" 
                        loading="lazy"
                        onerror="this.src='https://via.placeholder.com/300x200?text=Image+indisponible'"
                    >
                </div>
                <div class="p-4">
                    <h3 class="text-base font-semibold mb-2 line-clamp-2">{{$Document->title}}</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{$Document->description}}</p>
                    <div class="flex gap-2 mb-3 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">{{$Document->filiere->nom}}</span>
                        <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded">{{$Document->niveau->nom}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-sm">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                        <button class="bg-[var(--primary)] text-white px-3 py-1.5 rounded-lg hover:bg-blue-600 text-sm transition-colors">
                            Lire
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center gap-2 mt-10">
            <button class="w-10 h-10 flex itemsjim-center justify-center rounded-full bg-white border border-gray-200 hover:bg-[var(--primary)] hover:text-white transition-colors" aria-label="Page précédente">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-[var(--primary)] text-white" aria-label="Page 1">1</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-[var(--primary)] hover:text-white transition-colors" aria-label="Page 2">2</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-[var(--primary)] hover:text-white transition-colors" aria-label="Page 3">3</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-[var(--primary)] hover:text-white transition-colors" aria-label="Page 4">4</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-[var(--primary)] hover:text-white transition-colors" aria-label="Page 5">5</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-[var(--primary)] hover:text-white transition-colors" aria-label="Page suivante">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12">
            <div>
                <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                    <i class="fas fa-book text-[var(--accent)]"></i>
                    LIBRA
                </h3>
                <p class="text-gray-400 mb-6">Votre bibliothèque numérique pour explorer des milliers de livres et ressources académiques.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-400 hover:text-[var(--accent)] transition-colors" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[var(--accent)] transition-colors" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[var(--accent)] transition-colors" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Navigation</h3>
                <ul class="text-gray-400 space-y-3">
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Livres populaires</a></li>
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Nouveautés</a></li>
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Catégories</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Compte</h3>
                <ul class="text-gray-400 space-y-3">
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Mon compte</a></li>
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Favoris</a></li>
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Historique</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Support</h3>
                <ul class="text-gray-400 space-y-3">
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Aide</a></li>
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">Contact</a></li>
                    <li><a href="#" class="hover:text-[var(--accent)] transition-colors">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
            <p>© 2025 LIBRA. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Mobile navbar toggle
        const navToggle = document.getElementById('nav-toggle');
        const navMobile = document.querySelector('.nav-mobile');

        navToggle.addEventListener('click', () => {
            const isHidden = navMobile.classList.contains('hidden');
            navMobile.classList.toggle('hidden', !isHidden);
            navMobile.classList.toggle('open', isHidden);
            navToggle.querySelector('i').classList.toggle('fa-bars', isHidden);
            navToggle(irreversible) {
                navToggle.querySelector('i').classList.toggle('fa-times', !isHidden);
            });

        // Card animation on scroll
        const bookCards = document.querySelectorAll('.book-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        bookCards.forEach(card => {
            card.style.animationPlayState = 'paused';
            observer.observe(card);
        });

        // Search form handling
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const input = form.querySelector('input');
                if (input.value.trim()) {
                    console.log(`Recherche: ${input.value}`);
                    input.value = '';
                }
            });
        });

        // Pagination handling
        const paginationButtons = document.querySelectorAll('.rounded-full:not(.bg-[var(--primary)])');
        const activeButton = document.querySelector('.bg-[var(--primary)]');

        paginationButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                activeButton.classList.remove('bg-[var(--primary)]', 'text-white');
                activeButton.classList.add('bg-white', 'border-gray-200');
                btn.classList.remove('bg-white', 'border-gray-200');
                btn.classList.add('bg-[var(--primary)]', 'text-white');
            });
        });
    </script>
</body>
</html>