<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Enseignant - Libra</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #2dd4bf;
            --accent: #c084fc;
            --dark: #111827;
            --light: #f8fafc;
        }

        body {
            font-family: 'Manrope', sans-serif;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-item {
            animation: fadeIn 0.4s ease-out forwards;
        }

        /* Sidebar */
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.open {
            transform: translateX(0);
        }

        /* Modal */
        .modal {
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .modal.hidden {
            opacity: 0;
            transform: scale(0.95);
            pointer-events: none;
        }

        /* Tabs */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Chatbox */
        .chat-message {
            animation: fadeIn 0.3s ease-out;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Button hover effect */
        button:not(.tab-btn):hover {
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Sidebar -->
    <nav class="sidebar fixed inset-y-0 left-0 w-16 md:w-56 bg-white shadow-lg p-4 flex flex-col justify-between transform -translate-x-full md:translate-x-0 z-50">
        <div>
            <div class="flex items-center gap-2 mb-8">
                <i class="fas fa-book text-xl text-teal-500"></i>
                <span class="hidden md:block text-lg font-bold text-gray-900">Libra Admin</span>
            </div>
            <ul class="space-y-2">
                <li>
                    <button id="open-modal" class="flex items-center gap-2 w-full text-gray-600 hover:text-teal-500 hover:bg-gray-100 py-2 px-3 rounded-lg" aria-label="Ajouter un document">
                        <i class="fas fa-plus-circle"></i>
                        <span class="hidden md:block">Ajouter un document</span>
                    </button>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 w-full text-red-500 hover:text-red-600 hover:bg-gray-100 py-2 px-3 rounded-lg" aria-label="Déconnexion">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="hidden md:block">Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Mobile Menu Button -->
    <button class="fixed top-4 left-4 md:hidden text-xl z-50" id="sidebar-toggle" aria-label="Ouvrir le menu">
        <i class="fas fa-bars text-gray-900"></i>
    </button>

    <!-- Modal for Adding Document -->
    <div id="modal" class="modal fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-xl p-6 w-full max-w-2xl shadow-xl">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Ajouter un Document</h2>
                <button id="close-modal" class="text-gray-500 hover:text-gray-700" aria-label="Fermer">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data" id="document-form">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Titre -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                        <input type="text" id="title" name="title" required class="mt-1 w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500" placeholder="Entrez le titre">
                        <p class="text-red-500 text-xs mt-1 hidden" id="title-error">Le titre est requis.</p>
                    </div>
                    <!-- Filière -->
                    <div>
                        <label for="filiere" class="block text-sm font-medium text-gray-700">Filière</label>
                        <select id="filiere" name="filiere" required class="mt-1 w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option value="">Sélectionnez une filière</option>
                            <option value="Informatique">Informatique</option>
                            <option value="Mathématiques">Mathématiques</option>
                            <option value="Physique">Physique</option>
                            <option value="Chimie">Chimie</option>
                            <option value="Biologie">Biologie</option>
                            <option value="Économie">Économie</option>
                        </select>
                        <p class="text-red-500 text-xs mt-1 hidden" id="filiere-error">La filière est requise.</p>
                    </div>
                    <!-- Description -->
                    <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" required class="mt-1 w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500" rows="3" placeholder="Décrivez le document"></textarea>
                        <p class="text-red-500 text-xs mt-1 hidden" id="description-error">La description est requise.</p>
                    </div>
                    <!-- Niveau -->
                    <div>
                        <label for="niveau" class="block text-sm font-medium text-gray-700">Niveau</label>
                        <select id="niveau" name="niveau" required class="mt-1 w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option value="">Sélectionnez un niveau</option>
                            <option value="Licence 1">Licence 1</option>
                            <option value="Licence 2">Licence 2</option>
                            <option value="Licence 3">Licence 3</option>
                            <option value="Master">Master</option>
                            <option value="Doctorat">Doctorat</option>
                        </select>
                        <p class="text-red-500 text-xs mt-1 hidden" id="niveau-error">Le niveau est requis.</p>
                    </div>
                    <!-- Couverture -->
                    <div>
                        <label for="couverture" class="block text-sm font-medium text-gray-700">Couverture (Image)</label>
                        <input type="file" id="couverture" name="couverture" accept="image/*" class="mt-1 w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <div id="image-preview" class="mt-2 hidden">
                            <img src="#" alt="Prévisualisation" class="w-40 h-40 object-cover rounded-lg">
                        </div>
                        <p class="text-red-500 text-xs mt-1 hidden" id="couverture-error">L'image ne doit pas dépasser 5 Mo.</p>
                    </div>
                </div>
                <button type="submit" class="mt-6 w-full bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-600 transition-all shadow-sm">Ajouter le Document</button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <main class="md:ml-16 lg:ml-56 p-4 md:p-6">
        <!-- Tabs -->
        <div class="flex border-b border-gray-200 mb-6">
            <button data-tab="dashboard" class="tab-btn flex-1 text-center py-3 text-gray-600 hover:text-teal-500 hover:bg-teal-100 rounded-t-lg bg-teal-100 text-teal-600" aria-label="Tableau de bord">Tableau de bord</button>
            <button data-tab="documents" class="tab-btn flex-1 text-center py-3 text-gray-600 hover:text-teal-500 hover:bg-teal-100 rounded-t-lg" aria-label="Documents">Documents</button>
            <button data-tab="forum" class="tab-btn flex-1 text-center py-3 text-gray-600 hover:text-teal-500 hover:bg-teal-100 rounded-t-lg" aria-label="Forum">Forum</button>
        </div>

        <!-- Tab Contents -->
        <div id="dashboard" class="tab-content active">
            <h1 class="text-2xl font-semibold mb-4 text-gray-900">Tableau de Bord</h1>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <p class="text-gray-600">Gérez vos documents pédagogiques et échangez avec la communauté via le forum.</p>
            </div>
        </div>

        <div id="documents" class="tab-content">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-4 gap-4">
                <h2 class="text-2xl font-semibold text-gray-900">Documents</h2>
                <div class="flex gap-4 w-full sm:w-auto">
                    <div class="relative flex-1 max-w-xs">
                        <input type="text" id="search" placeholder="Rechercher un document..." class="w-full p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <i class="fas fa-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <select class="p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <option value="">Filtrer par filière</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Mathématiques">Mathématiques</option>
                        <option value="Physique">Physique</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Biologie">Biologie</option>
                        <option value="Économie">Économie</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Document Card 1 -->
                <div class="animate-item bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/80" alt="Couverture" class="w-16 h-16 object-cover rounded">
                        <div class="flex-1">
                            <h3 class="text-base font-semibold text-gray-900">Introduction à l'Algorithmique</h3>
                            <p class="text-gray-500 text-sm line-clamp-2">Cours de base sur les algorithmes et structures de données.</p>
                            <div class="flex gap-2 mt-2">
                                <span class="bg-teal-100 text-teal-600 text-xs px-2 py-1 rounded">Informatique</span>
                                <span class="bg-purple-100 text-purple-600 text-xs px-2 py-1 rounded">Licence 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="relative group">
                            <button class="text-gray-500 hover:text-teal-500" aria-label="Actions">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="absolute right-0 top-6 bg-white rounded-lg shadow-lg border border-gray-200 hidden group-hover:block">
                                <button class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-50">Modifier</button>
                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-50">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Document Card 2 -->
                <div class="animate-item bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/80" alt="Couverture" class="w-16 h-16 object-cover rounded">
                        <div class="flex-1">
                            <h3 class="text-base font-semibold text-gray-900">Thermodynamique</h3>
                            <p class="text-gray-500 text-sm line-clamp-2">Principes fondamentaux de la thermodynamique.</p>
                            <div class="flex gap-2 mt-2">
                                <span class="bg-teal-100 text-teal-600 text-xs px-2 py-1 rounded">Physique</span>
                                <span class="bg-purple-100 text-purple-600 text-xs px-2 py-1 rounded">Licence 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="relative group">
                            <button class="text-gray-500 hover:text-teal-500" aria-label="Actions">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="absolute right-0 top-6 bg-white rounded-lg shadow-lg border border-gray-200 hidden group-hover:block">
                                <button class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-50">Modifier</button>
                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-50">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ajouter d'autres documents dynamiquement ici -->
            </div>
            <!-- Pagination -->
            <div class="flex justify-center gap-2 mt-6">
                <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-teal-500 hover:text-white"><i class="fas fa-chevron-left"></i></button>
                <button class="w-8 h-8 flex items-center justify-center rounded-full bg-teal-500 text-white">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-teal-500 hover:text-white">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-teal-500 hover:text-white">3</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-teal-500 hover:text-white"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>

        <div id="forum" class="tab-content">
            <h2 class="text-2xl font-semibold mb-4 text-gray-900">Forum</h2>
            <div class="bg-white rounded-lg shadow-sm p-4 h-[500px] flex flex-col">
                <div class="flex-1 overflow-y-auto p-4 space-y-4" id="chat-messages">
                    <!-- Chat Message 1 -->
                    <div class="chat-message flex justify-start gap-2 mb-4">
                        <img src="https://via.placeholder.com/32" alt="Prof. Dupont" class="w-8 h-8 rounded-full">
                        <div class="bg-gray-100 text-gray-900 p-3 rounded-lg max-w-xs">
                            <p class="text-xs font-semibold">Prof. Dupont</p>
                            <p class="text-sm">Bonjour, quelqu’un a des ressources sur les algorithmes de tri ?</p>
                        </div>
                    </div>
                    <!-- Chat Message 2 -->
                    <div class="chat-message flex justify-end gap-2 mb-4">
                        <div class="bg-teal-500 text-white p-3 rounded-lg max-w-xs">
                            <p class="text-xs font-semibold">Vous</p>
                            <p class="text-sm">Oui, j’ai un document sur les tris rapides, je le partage bientôt !</p>
                        </div>
                        <img src="https://via.placeholder.com/32" alt="Vous" class="w-8 h-8 rounded-full">
                    </div>
                    <!-- Ajouter d'autres messages dynamiquement ici -->
                </div>
                <form id="chat-form" class="flex gap-2 p-4 border-t border-gray-200">
                    <input type="text" id="chat-input" placeholder="Tapez votre message..." class="flex-1 p-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-600 transition-all">Envoyer</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        // Gestion de la sidebar mobile
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('.sidebar');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });

        // Gestion du modal
        const openModalBtn = document.getElementById('open-modal');
        const closeModalBtn = document.getElementById('close-modal');
        const modal = document.getElementById('modal');

        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Prévisualisation de l'image
        const couvertureInput = document.getElementById('couverture');
        const imagePreview = document.getElementById('image-preview');
        const imagePreviewImg = imagePreview.querySelector('img');

        couvertureInput.addEventListener('change', () => {
            const file = couvertureInput.files[0];
            if (file) {
                if (file.size > 5 * 1024 * 1024) {
                    document.getElementById('couverture-error').classList.remove('hidden');
                    couvertureInput.value = '';
                    imagePreview.classList.add('hidden');
                } else {
                    document.getElementById('couverture-error').classList.add('hidden');
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        imagePreviewImg.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        // Validation en temps réel
        const inputs = document.querySelectorAll('#document-form input, #document-form textarea, #document-form select');
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                const errorElement = document.getElementById(`${input.id}-error`);
                if (input.value.trim() === '') {
                    errorElement.classList.remove('hidden');
                } else {
                    errorElement.classList.add('hidden');
                }
            });
        });

        // Gestion des onglets
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                tabContents.forEach(content => content.classList.remove('active'));
                document.getElementById(tabId).classList.add('active');
                tabButtons.forEach(btn => btn.classList.remove('bg-teal-100', 'text-teal-600'));
                button.classList.add('bg-teal-100', 'text-teal-600');
            });
        });

        // Animation des éléments au scroll
        const animateItems = document.querySelectorAll('.animate-item');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-item');
                }
            });
        }, { threshold: 0.1 });

        animateItems.forEach(item => observer.observe(item));

        // Recherche (simulation)
        document.getElementById('search').addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.animate-item').forEach(item => {
                const title = item.querySelector('h3').textContent.toLowerCase();
                item.style.display = title.includes(query) ? 'block' : 'none';
            });
        });

        // Chatbox (simulation)
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const chatMessages = document.getElementById('chat-messages');

        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (chatInput.value.trim()) {
                const message = document.createElement('div');
                message.innerHTML = `
                    <div class="chat-message flex justify-end gap-2 mb-4">
                        <div class="bg-teal-500 text-white p-3 rounded-lg max-w-xs">
                            <p class="text-xs font-semibold">Vous</p>
                            <p class="text-sm">${chatInput.value}</p>
                        </div>
                        <img src="https://via.placeholder.com/32" alt="Vous" class="w-8 h-8 rounded-full">
                    </div>
                `;
                chatMessages.appendChild(message);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                chatInput.value = '';
            }
        });
    </script>
</body>
</html>