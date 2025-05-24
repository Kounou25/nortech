<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Enseignant - Libra</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-blue: #3b82f6;
            --light-blue: #dbeafe;
            --dark: #1f2937;
            --light: #f1f5f9;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-item {
            animation: fadeIn 0.5s ease-out forwards;
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
            transition: opacity 0.3s ease, transform 0.3s ease;
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
            animation: fadeIn 0.4s ease-out;
        }

        /* Button hover */
        button:not(.tab-btn):hover {
            transform: translateY(-1px);
        }

        /* Focus states */
        input:focus, select:focus, textarea:focus {
            outline: none;
            ring: 2px var(--primary-blue);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Sidebar -->
    <nav class="sidebar fixed inset-y-0 left-0 w-20 md:w-64 bg-white shadow-lg p-6 flex flex-col justify-between transform -translate-x-full md:translate-x-0 z-50">
        <div>
            <div class="flex items-center gap-3 mb-10">
                <i class="fas fa-book text-2xl text-blue-600"></i>
                <span class="hidden md:block text-xl font-semibold text-gray-900">Libra Admin</span>
            </div>
            <ul class="space-y-3">
                <li>
                    <button id="open-modal" class="flex items-center gap-3 w-full text-gray-600 hover:text-blue-600 hover:bg-blue-50 py-3 px-4 rounded-lg transition-all" aria-label="Ajouter un document">
                        <i class="fas fa-plus-circle"></i>
                        <span class="hidden md:block text-sm font-medium">Ajouter un document</span>
                    </button>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 w-full text-red-500 hover:text-red-600 hover:bg-red-50 py-3 px-4 rounded-lg transition-all" aria-label="Déconnexion">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="hidden md:block text-sm font-medium">Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Mobile Menu Button -->
    <button class="fixed top-4 left-4 md:hidden text-2xl z-50" id="sidebar-toggle" aria-label="Ouvrir le menu">
        <i class="fas fa-bars text-gray-900"></i>
    </button>

    <!-- Modal for Adding Document -->
    <div id="modal" class="modal fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-2xl p-8 w-full max-w-3xl shadow-xl">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Ajouter un Document</h2>
                <button id="close-modal" class="text-gray-500 hover:text-gray-700" aria-label="Fermer">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="/libra/teachers" method="POST" enctype="multipart/form-data" id="document-form">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Titre -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required class="mt-2 w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500" placeholder="Entrez le titre">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Filière -->
                    <div>
                        <label for="filiere" class="block text-sm font-medium text-gray-700">Filière</label>
                        <select id="filiere" name="filiere" required class="mt-2 w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
                            <option value="">Sélectionnez une filière</option>
                            @foreach($filieres as $filiere)
                                <option value="{{ $filiere->id }}" {{ old('filiere') == $filiere->id ? 'selected' : '' }}>{{ $filiere->nom }}</option>
                            @endforeach
                        </select>
                        @error('filiere')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Description -->
                    <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" required class="mt-2 w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Décrivez le document">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Niveau -->
                    <div>
                        <label for="niveau" class="block text-sm font-medium text-gray-700">Niveau</label>
                        <select id="niveau" name="niveau" required class="mt-2 w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
                            <option value="">Sélectionnez un niveau</option>
                            @foreach($niveaux as $niveau)
                                <option value="{{ $niveau->id }}" {{ old('niveau') == $niveau->id ? 'selected' : '' }}>{{ $niveau->nom }}</option>

                            @endforeach
                        </select>
                        @error('niveau')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Couverture -->
                    <div>
                        <label for="couverture" class="block text-sm font-medium text-gray-700">Couverture (Image)</label>
                        <input type="file" id="couverture" name="couverture" accept="image/*" class="mt-2 w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
                        <div id="image-preview" class="mt-3 hidden">
                            <img src="#" alt="Prévisualisation" class="w-48 h-48 object-cover rounded-lg">
                        </div>
                        @error('couverture')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="fichier" class="block text-sm font-medium text-gray-700">Document (PDF)</label>
                        <input type="file" id="fichier" name="fichier" accept="application/pdf" class="mt-2 w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
                        <div id="image-preview" class="mt-3 hidden">
                            <img src="#" alt="Prévisualisation" class="w-48 h-48 object-cover rounded-lg">
                        </div>
                        @error('couverture')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="mt-8 w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-all shadow-sm">Ajouter le Document</button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <main class="md:ml-20 lg:ml-64 p-6 md:p-8">
        <!-- Affichage des messages -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg flex items-center gap-2">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg flex items-center gap-2">
                <i class="fas fa-exclamation-circle"></i>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Tabs -->
        <div class="flex border-b border-gray-200 mb-8">
            <button data-tab="dashboard" class="tab-btn flex-1 text-center py-4 text-gray-600 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-all active:border-blue-600 active:text-blue-600" aria-label="Tableau de bord">Tableau de bord</button>
            <button data-tab="documents" class="tab-btn flex-1 text-center py-4 text-gray-600 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-all" aria-label="Documents">Documents</button>
            <button data-tab="forum" class="tab-btn flex-1 text-center py-4 text-gray-600 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-all" aria-label="Forum">Forum</button>
        </div>

        <!-- Tab Contents -->
        <div id="dashboard" class="tab-content active">
            <h1 class="text-3xl font-semibold mb-6 text-gray-900">Tableau de Bord</h1>
            <div class="bg-white p-8 rounded-xl shadow-sm">
                <p class="text-gray-600">Gérez vos documents pédagogiques et échangez avec la communauté via le forum.</p>
            </div>
        </div>

        <div id="documents" class="tab-content">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                <h2 class="text-3xl font-semibold text-gray-900">Documents</h2>
                <div class="flex gap-4 w-full sm:w-auto">
                    <div class="relative flex-1 max-w-sm">
                        <input type="text" id="search" placeholder="Rechercher un document..." class="w-full p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <select class="p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Document Card 1 -->
                <div class="animate-item bg-white rounded-xl p-6 shadow-sm hover:shadow-lg hover:scale-105 transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/80" alt="Couverture" class="w-20 h-20 object-cover rounded-lg">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900">Introduction à l'Algorithmique</h3>
                            <p class="text-gray-500 text-sm line-clamp-2">Cours de base sur les algorithmes et structures de données.</p>
                            <div class="flex gap-2 mt-3">
                                <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Informatique</span>
                                <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Licence 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="relative group">
                            <button class="text-gray-500 hover:text-blue-600" aria-label="Actions">
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
                <div class="animate-item bg-white rounded-xl p-6 shadow-sm hover:shadow-lg hover:scale-105 transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/80" alt="Couverture" class="w-20 h-20 object-cover rounded-lg">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900">Thermodynamique</h3>
                            <p class="text-gray-500 text-sm line-clamp-2">Principes fondamentaux de la thermodynamique.</p>
                            <div class="flex gap-2 mt-3">
                                <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Physique</span>
                                <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Licence 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="relative group">
                            <button class="text-gray-500 hover:text-blue-600" aria-label="Actions">
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
            </div>
            <!-- Pagination -->
            <div class="flex justify-center gap-3 mt-8">
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-600 hover:text-white transition-all"><i class="fas fa-chevron-left"></i></button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white">1</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-600 hover:text-white transition-all">2</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-600 hover:text-white transition-all">3</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 hover:bg-blue-600 hover:text-white transition-all"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>

        <div id="forum" class="tab-content">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Forum</h2>
            <div class="bg-white rounded-xl shadow-sm p-6 h-[600px] flex flex-col">
                <div class="flex-1 overflow-y-auto p-4 space-y-4" id="chat-messages">
                    <!-- Chat Message 1 -->
                    <div class="chat-message flex justify-start gap-3 mb-4">
                        <img src="https://via.placeholder.com/32" alt="Prof. Dupont" class="w-10 h-10 rounded-full">
                        <div class="bg-gray-100 text-gray-900 p-4 rounded-xl max-w-sm">
                            <p class="text-xs font-semibold text-gray-700">Prof. Dupont</p>
                            <p class="text-sm">Bonjour, quelqu’un a des ressources sur les algorithmes de tri ?</p>
                        </div>
                    </div>
                    <!-- Chat Message 2 -->
                    <div class="chat-message flex justify-end gap-3 mb-4">
                        <div class="bg-blue-600 text-white p-4 rounded-xl max-w-sm">
                            <p class="text-xs font-semibold">Vous</p>
                            <p class="text-sm">Oui, j’ai un document sur les tris rapides, je le partage bientôt !</p>
                        </div>
                        <img src="https://via.placeholder.com/32" alt="Vous" class="w-10 h-10 rounded-full">
                    </div>
                </div>
                <form id="chat-form" class="flex gap-3 p-4 border-t border-gray-200">
                    <input type="text" id="chat-input" placeholder="Tapez votre message..." class="flex-1 p-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-all">Envoyer</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        // Sidebar toggle
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('.sidebar');
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });

        // Modal
        const openModalBtn = document.getElementById('open-modal');
        const closeModalBtn = document.getElementById('close-modal');
        const modal = document.getElementById('modal');
        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Image preview
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

        // Real-time form validation
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

        // Tabs
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                tabContents.forEach(content => content.classList.remove('active'));
                document.getElementById(tabId).classList.add('active');
                tabButtons.forEach(btn => btn.classList.remove('border-blue-600', 'text-blue-600'));
                button.classList.add('border-blue-600', 'text-blue-600');
            });
        });

        // Animation on scroll
        const animateItems = document.querySelectorAll('.animate-item');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-item');
                }
            });
        }, { threshold: 0.1 });
        animateItems.forEach(item => observer.observe(item));

        // Search
        document.getElementById('search').addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.animate-item').forEach(item => {
                const title = item.querySelector('h3').textContent.toLowerCase();
                item.style.display = title.includes(query) ? 'block' : 'none';
            });
        });

        // Chat
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const chatMessages = document.getElementById('chat-messages');
        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (chatInput.value.trim()) {
                const message = document.createElement('div');
                message.innerHTML = `
                    <div class="chat-message flex justify-end gap-3 mb-4">
                        <div class="bg-blue-600 text-white p-4 rounded-xl max-w-sm">
                            <p class="text-xs font-semibold">Vous</p>
                            <p class="text-sm">${chatInput.value}</p>
                        </div>
                        <img src="https://via.placeholder.com/32" alt="Vous" class="w-10 h-10 rounded-full">
                    </div>
                `;
                chatMessages.appendChild(message);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                chatInput.value = '';
            }
        });

        // Faire disparaître les messages après 5 secondes
        setTimeout(() => {
            const successMessage = document.querySelector('.bg-green-100');
            const errorMessage = document.querySelector('.bg-red-100');
            if (successMessage) successMessage.style.display = 'none';
            if (errorMessage) errorMessage.style.display = 'none';
        }, 5000);
    </script>
</body>
</html>