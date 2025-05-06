<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }

        /* Animation pour les cartes */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .book-card {
            animation: fadeIn 0.4s ease-out forwards;
        }

        /* Navbar mobile */
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
    </style>
</head>
<body class="bg-white text-gray-900">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2 text-xl font-bold">
                <i class="fas fa-book text-green-500"></i>
                LIBRA
            </a>

            <button class="md:hidden text-2xl" id="nav-toggle" aria-label="Ouvrir le menu">
                <i class="fas fa-bars"></i>
            </button>

            <div class="hidden md:flex items-center gap-6">
                <form class="relative flex-1 max-w-md">
                    <input type="text" class="w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rechercher un livre..." aria-label="Rechercher">
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-green-500">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <a href="#" class="text-gray-700 hover:text-green-500">Accueil</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Catégories</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Tendances</a>
                <a href="#" class="text-gray-700 hover:text-green-500">Études</a>
                <a href="#" class="relative text-gray-700 hover:text-green-500" aria-label="Favoris">
                    <i class="fas fa-heart"></i>
                    <span class="absolute -top-2 -right-2 bg-green-500 text-white rounded-full w-4 h-4 flex items-center justify-center text-xs">5</span>
                </a>
                <a href="#" class="text-gray-700 hover:text-green-500" aria-label="Profil">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="nav-mobile hidden md:hidden bg-white shadow-lg transform -translate-y-full">
            <div class="p-4">
                <form class="mb-4 relative">
                    <input type="text" class="w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rechercher..." aria-label="Rechercher">
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-green-500">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <ul class="space-y-3">
                    <li><a href="#" class="block text-gray-700 hover:text-green-500">Accueil</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-green-500">Catégories</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-green-500">Tendances</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-green-500">Études</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-green-500">Favoris</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-green-500">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-400 to-pink-400 text-white pt-24 pb-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Libra : Votre Univers de Lecture</h1>
            <p class="text-lg md:text-xl mb-6 max-w-2xl mx-auto">Plongez dans une collection de milliers de livres numériques et ressources académiques, accessibles partout, tout le temps.</p>
            <a href="#" class="inline-block bg-green-500 text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-600 transition-all">Découvrir</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Filter Bar -->
        <div class="bg-gray-100 rounded-lg p-4 mb-6 flex flex-wrap gap-3">
            <div class="flex items-center gap-2 flex-1 min-w-[150px]">
                <span class="font-medium text-sm">Catégorie :</span>
                <select class="flex-1 p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                    <option>Toutes</option>
                    <option>Littérature</option>
                    <option>Sciences</option>
                    <option>Technologie</option>
                    <option>Histoire</option>
                    <option>Philosophie</option>
                </select>
            </div>
            <div class="flex items-center gap-2 flex-1 min-w-[150px]">
                <span class="font-medium text-sm">Niveau :</span>
                <select class="flex-1 p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                    <option>Tous</option>
                    <option>Licence 1</option>
                    <option>Licence 2</option>
                    <option>Licence 3</option>
                    <option>Master</option>
                    <option>Doctorat</option>
                </select>
            </div>
            <div class="flex items-center gap-2 flex-1 min-w-[150px]">
                <span class="font-medium text-sm">Filière :</span>
                <select class="flex-1 p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                    <option>Toutes</option>
                    <option>Informatique</option>
                    <option>Mathématiques</option>
                    <option>Physique</option>
                    <option>Chimie</option>
                    <option>Biologie</option>
                </select>
            </div>
            <div class="flex items-center gap-2 flex-1 min-w-[150px]">
                <span class="font-medium text-sm">Trier :</span>
                <select class="flex-1 p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                    <option>Pertinence</option>
                    <option>Plus récents</option>
                    <option>Mieux notés</option>
                    <option>A-Z</option>
                </select>
            </div>
        </div>

        <!-- Book Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4">
            <!-- Book 1 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <span class="absolute top-2 left-2 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">Nouveau</span>
                    <img src="https://m.media-amazon.com/images/I/71QKQ9mwV7L._AC_UF1000,1000_QL80_.jpg" alt="L'Étranger" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">L'Étranger</h3>
                    <p class="text-blue-500 text-xs mb-2">Albert Camus</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Littérature</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Licence 2</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 2 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="https://m.media-amazon.com/images/I/91SZSWXqylL._AC_UF1000,1000_QL80_.jpg" alt="1984" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">1984</h3>
                    <p class="text-blue-500 text-xs mb-2">George Orwell</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Science-fiction</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Licence 3</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 3 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <span class="absolute top-2 left-2 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">Populaire</span>
                    <img src="https://m.media-amazon.com/images/I/71X1p4TGlxL._AC_UF1000,1000_QL80_.jpg" alt="Le Petit Prince" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">Le Petit Prince</h3>
                    <p class="text-blue-500 text-xs mb-2">Antoine de Saint-Exupéry</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Jeunesse</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Licence 1</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 4 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg" alt="Dune" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">Dune</h3>
                    <p class="text-blue-500 text-xs mb-2">Frank Herbert</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Science-fiction</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Master</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 5 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="https://m.media-amazon.com/images/I/71ZLavBjpRL._AC_UF1000,1000_QL80_.jpg" alt="Le Seigneur des Anneaux" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">Le Seigneur des Anneaux</h3>
                    <p class="text-blue-500 text-xs mb-2">J.R.R. Tolkien</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Fantasy</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Licence 2</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 6 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <span class="absolute top-2 left-2 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">Best-seller</span>
                    <img src="https://m.media-amazon.com/images/I/91BdP+31lAL._AC_UF1000,1000_QL80_.jpg" alt="Harry Potter" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">Harry Potter à l'école des sorciers</h3>
                    <p class="text-blue-500 text-xs mb-2">J.K. Rowling</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Jeunesse</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Licence 1</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 7 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="https://m.media-amazon.com/images/I/81dQwQlmAXL._AC_UF1000,1000_QL80_.jpg" alt="Le Comte de Monte-Cristo" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">Le Comte de Monte-Cristo</h3>
                    <p class="text-blue-500 text-xs mb-2">Alexandre Dumas</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Classique</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Licence 3</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
            <!-- Book 8 -->
            <div class="book-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="https://m.media-amazon.com/images/I/81dQwQlmAXL._AC_UF1000,1000_QL80_.jpg" alt="Les Misérables" class="w-full h-40 object-cover">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-semibold mb-1 line-clamp-2">Les Misérables</h3>
                    <p class="text-blue-500 text-xs mb-2">Victor Hugo</p>
                    <div class="flex gap-1 mb-2 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Classique</span>
                        <span class="bg-blue-100 text-blue-500 text-xs px-2 py-1 rounded">Master</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-1 text-yellow-500 text-xs">
                            <i class="fas fa-star"></i>
                            <span>4.6</span>
                        </div>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 text-xs">Lire</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center gap-2 mt-8">
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-500 hover:text-white"><i class="fas fa-chevron-left"></i></button>
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-500 text-white">1</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-500 hover:text-white">2</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-500 hover:text-white">3</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-500 hover:text-white">4</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-500 hover:text-white">5</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-500 hover:text-white"><i class="fas fa-chevron-right"></i></button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-4">LIBRA</h3>
                <p class="text-gray-400 mb-4">Votre bibliothèque numérique pour explorer des milliers de livres et ressources académiques.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Navigation</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="#" class="hover:text-green-500">Livres populaires</a></li>
                    <li><a href="#" class="hover:text-green-500">Nouveautés</a></li>
                    <li><a href="#" class="hover:text-green-500">Catégories</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Compte</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="#" class="hover:text-green-500">Mon compte</a></li>
                    <li><a href="#" class="hover:text-green-500">Favoris</a></li>
                    <li><a href="#" class="hover:text-green-500">Historique</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Support</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="#" class="hover:text-green-500">Aide</a></li>
                    <li><a href="#" class="hover:text-green-500">Contact</a></li>
                    <li><a href="#" class="hover:text-green-500">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
            <p>© 2025 LIBRA. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Gestion de la navbar mobile
        const navToggle = document.getElementById('nav-toggle');
        const navMobile = document.querySelector('.nav-mobile');

        navToggle.addEventListener('click', () => {
            navMobile.classList.toggle('hidden');
            navMobile.classList.toggle('open');
        });

        // Animation des cartes au scroll
        const bookCards = document.querySelectorAll('.book-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('book-card');
                }
            });
        }, { threshold: 0.1 });

        bookCards.forEach(card => observer.observe(card));

        // Simulation de recherche
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const input = form.querySelector('input');
                alert(`Recherche : ${input.value}`);
                input.value = '';
            });
        });

        // Pagination
        document.querySelectorAll('.rounded-full:not(.bg-blue-500)').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.bg-blue-500').classList.remove('bg-blue-500', 'text-white');
                document.querySelector('.bg-blue-500').classList.add('bg-white', 'border-gray-200');
                btn.classList.remove('bg-white', 'border-gray-200');
                btn.classList.add('bg-blue-500', 'text-white');
            });
        });
    </script>
</body>
</html>