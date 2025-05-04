<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libra - Votre bibliothèque numérique premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #4f46e5;
            --accent: #f59e0b;
            --dark: #1e293b;
            --darker: #0f172a;
            --light: #f8fafc;
            --lighter: #ffffff;
            --gray: #94a3b8;
            --gray-light: #e2e8f0;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f5f9;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--darker);
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-container {
            display: flex;
            align-items: center;
            padding: 15px 0;
            gap: 30px;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo-icon {
            color: var(--accent);
        }
        
        .search-form {
            flex: 1;
            position: relative;
        }
        
        .search-input {
            padding: 12px 20px;
            border-radius: 6px;
            border: none;
            width: 100%;
            font-size: 1rem;
            background-color: white;
        }
        
        .search-input:focus {
            outline: 2px solid var(--accent);
        }
        
        .search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 15px;
            cursor: pointer;
            transition: background 0.2s;
        }
        
        .search-btn:hover {
            background: var(--primary-dark);
        }
        
        .nav-links {
            display: flex;
            gap: 25px;
        }
        
        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .nav-link i {
            font-size: 1.2rem;
            margin-bottom: 3px;
        }
        
        .nav-link:hover {
            color: var(--accent);
        }
        
        .user-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        
        .action-icon {
            color: white;
            font-size: 1.3rem;
            position: relative;
            transition: color 0.2s;
        }
        
        .action-icon:hover {
            color: var(--accent);
        }
        
        .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent);
            color: var(--darker);
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 700;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
        }
        
        .hero-container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .hero-btn {
            background-color: var(--accent);
            color: var(--darker);
            padding: 14px 32px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            font-size: 1.1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .hero-btn:hover {
            background-color: #fbbf24;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        
        /* Main Content */
        .main-content {
            padding: 40px 0;
            transform: translateY(-50px);
            position: relative;
            z-index: 2;
        }
        
        /* Filter Bar */
        .filter-bar {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .filter-label {
            font-weight: 500;
            color: var(--dark);
        }
        
        .filter-select {
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid var(--gray-light);
            background-color: white;
            font-family: 'Poppins', sans-serif;
        }
        
        .filter-select:focus {
            outline: 2px solid var(--primary);
            border-color: transparent;
        }
        
        /* Book Grid */
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .book-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .book-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--accent);
            color: var(--darker);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 1;
        }
        
        .book-cover-container {
            position: relative;
            padding-bottom: 140%;
            overflow: hidden;
        }
        
        .book-cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .book-card:hover .book-cover {
            transform: scale(1.05);
        }
        
        .book-info {
            padding: 18px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .book-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            color: var(--darker);
        }
        
        .book-author {
            color: var(--primary);
            font-size: 0.9rem;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .book-meta {
            margin-top: auto;
        }
        
        .book-category {
            display: inline-block;
            background-color: var(--gray-light);
            color: var(--dark);
            font-size: 0.75rem;
            padding: 3px 8px;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        .book-level {
            display: inline-block;
            background-color: #dbeafe;
            color: var(--primary);
            font-size: 0.75rem;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 5px;
        }
        
        .book-field {
            display: inline-block;
            background-color: #ecfdf5;
            color: var(--success);
            font-size: 0.75rem;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 5px;
        }
        
        .book-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        
        .book-rating {
            display: flex;
            align-items: center;
            gap: 3px;
            color: var(--dark);
            font-size: 0.9rem;
        }
        
        .book-rating i {
            color: var(--warning);
        }
        
        .read-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.9rem;
        }
        
        .read-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-1px);
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            gap: 10px;
        }
        
        .page-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            background-color: white;
            color: var(--dark);
            border: 1px solid var(--gray-light);
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .page-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
        }
        
        .page-btn.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        /* Footer Styles */
        footer {
            background-color: var(--darker);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-col h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-col p {
            color: var(--gray);
            margin-bottom: 20px;
            line-height: 1.6;
            font-size: 0.9rem;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-link {
            margin-bottom: 12px;
        }
        
        .footer-link a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.2s;
            font-size: 0.9rem;
        }
        
        .footer-link a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-link {
            color: var(--gray);
            font-size: 1.1rem;
            transition: color 0.2s;
        }
        
        .social-link:hover {
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid #334155;
            padding-top: 30px;
            text-align: center;
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 1200px) {
            .hero::before {
                width: 50%;
                opacity: 0.15;
            }
        }
        
        @media (max-width: 992px) {
            .header-container {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .search-form {
                order: 3;
                flex: 1 1 100%;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero::before {
                display: none;
            }
            
            .hero-container {
                text-align: center;
            }
            
            .hero-content {
                max-width: 100%;
            }
            
            .hero-btn {
                width: 100%;
                text-align: center;
            }
            
            .nav-links {
                display: none;
            }
            
            .book-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                padding: 60px 0;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .main-content {
                transform: translateY(-30px);
            }
            
            .filter-group {
                width: 100%;
            }
            
            .filter-select {
                flex: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-book-open logo-icon"></i>
                LIBRA
            </a>
            
            <form class="search-form">
                <input type="text" class="search-input" placeholder="Rechercher un livre, un auteur ou une catégorie...">
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            
            <nav class="nav-links">
                <a href="#" class="nav-link">
                    <i class="fas fa-home"></i>
                    Accueil
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-list"></i>
                    Catégories
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-fire"></i>
                    Tendances
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-user-graduate"></i>
                    Études
                </a>
            </nav>
            
            <div class="user-actions">
                <a href="#" class="action-icon">
                    <i class="fas fa-heart"></i>
                    <span class="badge">5</span>
                </a>
                <a href="#" class="action-icon">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Votre bibliothèque numérique premium</h1>
                <p class="hero-subtitle">Accédez à des milliers de livres, manuels et ouvrages académiques dans tous les domaines de connaissance.</p>
                <a href="#" class="hero-btn">Explorer la collection</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Filter Bar -->
            <div class="filter-bar">
                <div class="filter-group">
                    <span class="filter-label">Filtrer par :</span>
                    <select class="filter-select">
                        <option>Toutes les catégories</option>
                        <option>Littérature</option>
                        <option>Sciences</option>
                        <option>Technologie</option>
                        <option>Histoire</option>
                        <option>Philosophie</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span class="filter-label">Niveau :</span>
                    <select class="filter-select">
                        <option>Tous niveaux</option>
                        <option>Licence 1</option>
                        <option>Licence 2</option>
                        <option>Licence 3</option>
                        <option>Master</option>
                        <option>Doctorat</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span class="filter-label">Filière :</span>
                    <select class="filter-select">
                        <option>Toutes filières</option>
                        <option>Informatique</option>
                        <option>Mathématiques</option>
                        <option>Physique</option>
                        <option>Chimie</option>
                        <option>Biologie</option>
                        <option>Économie</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span class="filter-label">Trier par :</span>
                    <select class="filter-select">
                        <option>Pertinence</option>
                        <option>Les plus récents</option>
                        <option>Les mieux notés</option>
                        <option>A-Z</option>
                    </select>
                </div>
            </div>
            
            <!-- Book Grid -->
            <div class="book-grid">
                <!-- Book 1 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <span class="book-badge">Nouveau</span>
                        <img src="https://m.media-amazon.com/images/I/71QKQ9mwV7L._AC_UF1000,1000_QL80_.jpg" alt="L'Étranger" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">L'Étranger</h3>
                        <p class="book-author">Albert Camus</p>
                        <div class="book-meta">
                            <span class="book-category">Littérature</span>
                            <span class="book-level">Licence 2</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.8
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 2 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <img src="https://m.media-amazon.com/images/I/91SZSWXqylL._AC_UF1000,1000_QL80_.jpg" alt="1984" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">1984</h3>
                        <p class="book-author">George Orwell</p>
                        <div class="book-meta">
                            <span class="book-category">Science-fiction</span>
                            <span class="book-level">Licence 3</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.9
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 3 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <span class="book-badge">Populaire</span>
                        <img src="https://m.media-amazon.com/images/I/71X1p4TGlxL._AC_UF1000,1000_QL80_.jpg" alt="Le Petit Prince" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">Le Petit Prince</h3>
                        <p class="book-author">Antoine de Saint-Exupéry</p>
                        <div class="book-meta">
                            <span class="book-category">Jeunesse</span>
                            <span class="book-level">Licence 1</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.7
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 4 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <img src="https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg" alt="Dune" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">Dune</h3>
                        <p class="book-author">Frank Herbert</p>
                        <div class="book-meta">
                            <span class="book-category">Science-fiction</span>
                            <span class="book-level">Master</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.8
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 5 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <img src="https://m.media-amazon.com/images/I/71ZLavBjpRL._AC_UF1000,1000_QL80_.jpg" alt="Le Seigneur des Anneaux" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">Le Seigneur des Anneaux</h3>
                        <p class="book-author">J.R.R. Tolkien</p>
                        <div class="book-meta">
                            <span class="book-category">Fantasy</span>
                            <span class="book-level">Licence 2</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.9
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 6 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <span class="book-badge">Best-seller</span>
                        <img src="https://m.media-amazon.com/images/I/91BdP+31lAL._AC_UF1000,1000_QL80_.jpg" alt="Harry Potter" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">Harry Potter à l'école des sorciers</h3>
                        <p class="book-author">J.K. Rowling</p>
                        <div class="book-meta">
                            <span class="book-category">Jeunesse</span>
                            <span class="book-level">Licence 1</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.8
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 7 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <img src="https://m.media-amazon.com/images/I/81dQwQlmAXL._AC_UF1000,1000_QL80_.jpg" alt="Le Comte de Monte-Cristo" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">Le Comte de Monte-Cristo</h3>
                        <p class="book-author">Alexandre Dumas</p>
                        <div class="book-meta">
                            <span class="book-category">Classique</span>
                            <span class="book-level">Licence 3</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.7
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
                
                <!-- Book 8 -->
                <div class="book-card">
                    <div class="book-cover-container">
                        <img src="https://m.media-amazon.com/images/I/81dQwQlmAXL._AC_UF1000,1000_QL80_.jpg" alt="Les Misérables" class="book-cover">
                    </div>
                    <div class="book-info">
                        <h3 class="book-title">Les Misérables</h3>
                        <p class="book-author">Victor Hugo</p>
                        <div class="book-meta">
                            <span class="book-category">Classique</span>
                            <span class="book-level">Master</span>
                            <span class="book-field">Lettres</span>
                        </div>
                        <div class="book-footer">
                            <div class="book-rating">
                                <i class="fas fa-star"></i>
                                4.6
                            </div>
                            <button class="read-btn">Lire</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="pagination">
                <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">5</button>
                <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>LIBRA</h3>
                    <p>Votre bibliothèque numérique premium. Accédez à des milliers de livres et ouvrages académiques où que vous soyez.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>Explorer</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Livres populaires</a></li>
                        <li class="footer-link"><a href="#">Nouveautés</a></li>
                        <li class="footer-link"><a href="#">Auteurs</a></li>
                        <li class="footer-link"><a href="#">Catégories</a></li>
                        <li class="footer-link"><a href="#">Filières académiques</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Compte</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Mon compte</a></li>
                        <li class="footer-link"><a href="#">Ma bibliothèque</a></li>
                        <li class="footer-link"><a href="#">Favoris</a></li>
                        <li class="footer-link"><a href="#">Historique</a></li>
                        <li class="footer-link"><a href="#">Abonnements</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Centre d'aide</a></li>
                        <li class="footer-link"><a href="#">Nous contacter</a></li>
                        <li class="footer-link"><a href="#">FAQ</a></li>
                        <li class="footer-link"><a href="#">Conditions d'utilisation</a></li>
                        <li class="footer-link"><a href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 LIBRA. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript pour les interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Animation des boutons "Lire"
            const readBtns = document.querySelectorAll('.read-btn');
            readBtns.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 4px 8px rgba(0,0,0,0.15)';
                });
                
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                });
                
                btn.addEventListener('click', function() {
                    const bookTitle = this.closest('.book-card').querySelector('.book-title').textContent;
                    alert(`Ouverture du livre: ${bookTitle}`);
                });
            });
            
            // Animation des cartes de livres
            const bookCards = document.querySelectorAll('.book-card');
            bookCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.1)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                });
            });
            
            // Simulation de recherche
            const searchForm = document.querySelector('.search-form');
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const searchInput = this.querySelector('.search-input');
                alert(`Recherche pour: ${searchInput.value}`);
                searchInput.value = '';
            });
            
            // Pagination
            const pageBtns = document.querySelectorAll('.page-btn:not(.active)');
            pageBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelector('.page-btn.active').classList.remove('active');
                    this.classList.add('active');
                    // Ici, vous pourriez charger dynamiquement le contenu de la page
                });
            });
        });
    </script>
</body>
</html>