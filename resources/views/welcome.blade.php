<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookShop - Inicio</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- PALETA DE COLORES --- */
        :root {
            --color-bg: #FDFBF7;          
            --color-terracotta: #B8500C;  
            --color-charcoal: #6E7E80;    
            --color-dark-brown: #421605;  
            --color-taupe: #B29B85;       
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--color-bg);
            color: var(--color-dark-brown);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* --- BARRA DE NAVEGACIÓN SUPERIOR (Modificada con color propio) --- */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 7%;
            background-color: #FFFDF9; /* Color diferenciado para la barra superior según image_96979f.png */
            border-bottom: 1px solid rgba(66, 22, 5, 0.06); /* Sutil línea de separación */
            position: relative;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Lora', serif;
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--color-dark-brown);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--color-dark-brown);
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--color-terracotta);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 8px 15px 8px 38px;
            border: 1px solid rgba(110, 126, 128, 0.15);
            border-radius: 20px;
            background-color: #F5F1E9;
            font-size: 0.85rem;
            outline: none;
            width: 200px;
            color: var(--color-dark-brown);
        }

        .search-icon {
            position: absolute;
            left: 14px;
            color: var(--color-charcoal);
            display: flex;
            align-items: center;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--color-dark-brown);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
            text-decoration: none;
        }
        
        .icon-btn:hover {
            transform: scale(1.05);
            color: var(--color-terracotta);
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--color-dark-brown);
        }

        /* --- CONTENEDOR ENVOLVENTE (Mantiene su color para la sección Hero) --- */
        .hero-wrapper {
            background-color: rgb(247, 239, 223); 
            width: 100%;
        }

        /* --- VISTA HERO --- */
        .hero-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 50px 7% 65px 7%; 
            gap: 50px;
        }

        .hero-content {
            max-width: 540px;
        }

        .hero-content h1 {
            font-family: 'Lora', serif;
            font-size: 3.2rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--color-dark-brown);
            margin-bottom: 25px;
        }

        .hero-content p {
            font-size: 1rem;
            line-height: 1.6;
            color: #554138;
            margin-bottom: 35px;
        }

        .btn-explorar {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background-color: var(--color-terracotta);
            color: #FFFFFF;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 25px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: transform 0.2s, background-color 0.2s;
        }

        .btn-explorar:hover {
            background-color: #963F07;
            transform: translateY(-2px);
        }

        .stats-container {
            display: flex;
            gap: 40px;
            margin-top: 50px;
        }

        .stat-item h3 {
            font-family: 'Lora', serif;
            font-size: 1.6rem;
            color: var(--color-dark-brown);
            margin-bottom: 5px;
        }

        .stat-item p {
            font-size: 0.75rem;
            color: var(--color-charcoal);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 0;
        }

        .hero-image-wrapper {
            display: flex;
            justify-content: center;
        }

        .hero-image {
            width: 100%;
            max-width: 450px;
            height: 550px;
            object-fit: cover;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(66, 22, 5, 0.12);
        }

        /* --- SECCIÓN CATEGORÍAS --- */
        .categories-section {
            padding: 60px 7%;
            text-align: center;
            background-color: var(--color-bg);
        }

        .categories-header h2 {
            font-family: 'Lora', serif;
            font-size: 2.2rem;
            color: var(--color-dark-brown);
            margin-bottom: 12px;
        }

        .categories-header p {
            font-size: 0.95rem;
            color: var(--color-charcoal);
            max-width: 600px;
            margin: 0 auto 45px auto;
            line-height: 1.5;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .category-card {
            background: rgba(251, 251, 250, 0.97);
            border: 1px solid rgba(150, 90, 12, 0.9);
            border-radius: 16px;
            padding: 30px;
            text-align: left;
            display: flex;
            flex-direction: column;
            gap: 15px;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 4px 12px rgba(66, 22, 5, 0.65);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(66, 22, 5, 0.06);
        }

        .category-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .category-info h3 {
            font-family: 'Lora', serif;
            font-size: 1.25rem;
            color: var(--color-dark-brown);
            margin-bottom: 6px;
        }

        .category-info p {
            font-size: 0.85rem;
            color: var(--color-charcoal);
            line-height: 1.4;
        }

        /* --- SECCIÓN LIBROS DESTACADOS --- */
        .featured-section {
            padding: 60px 7%;
            text-align: center;
            background-color: var(--color-bg);
        }

        .featured-header h2 {
            font-family: 'Lora', serif;
            font-size: 2.2rem;
            color: var(--color-dark-brown);
            margin-bottom: 12px;
        }

        .featured-header p {
            font-size: 0.95rem;
            color: var(--color-charcoal);
            margin-bottom: 45px;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .book-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(66, 22, 5, 0.04);
            border: 1px solid rgba(110, 126, 128, 0.08);
            display: flex;
            flex-direction: column;
            text-align: left;
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .book-image-wrapper {
            width: 100%;
            height: 380px;
            overflow: hidden;
            background-color: #F5F1E9;
        }

        .book-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .book-details {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .book-tag {
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--color-terracotta);
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .book-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--color-dark-brown);
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .book-author {
            font-size: 0.85rem;
            color: var(--color-charcoal);
            margin-bottom: 25px;
        }

        .book-footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .book-price {
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--color-dark-brown);
        }

        .btn-add-cart {
            background-color: #F59E0B;
            color: white;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
        }

        .btn-add-cart:hover {
            background-color: #D97706;
            transform: scale(1.05);
        }

        /* --- BOTÓN VER TODOS LOS LIBROS --- */
        .featured-footer {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .btn-view-all {
            display: inline-block;
            background-color: transparent;
            color: var(--color-terracotta);
            border: 1px solid var(--color-terracotta);
            padding: 12px 35px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-view-all:hover {
            background-color: var(--color-terracotta);
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        /* Responsividad */
        @media (max-width: 900px) {
            .books-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .categories-grid {
                grid-template-columns: 1fr;
            }
            .category-card {
                text-align: center;
                align-items: center;
            }
            .books-grid {
                grid-template-columns: 1fr;
            }
        }
        /* ==========================================================================
           --- PIE DE PÁGINA (FOOTER) - ADAPTADO DE image_94c5de.png ---
           ========================================================================== */
        .footer {
            background-color: var(--color-dark-brown);
            color: #FDFBF7;
            padding: 60px 7% 30px 7%;
            font-size: 0.9rem;
            margin-top: auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr 1.2fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-brand h2 {
            font-family: 'Lora', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #FFFFFF;
        }

        .footer-brand p {
            line-height: 1.6;
            color: #DCD1C4;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            background-color: #5A2007; 
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFFFFF;
            text-decoration: none;
            transition: background-color 0.2s, transform 0.2s;
        }

        .social-icon:hover {
            background-color: var(--color-terracotta);
            transform: translateY(-2px);
        }

        .footer-column h3 {
            font-family: 'Lora', serif;
            font-size: 1.15rem;
            font-weight: 500;
            margin-bottom: 20px;
            color: #FFFFFF;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            color: #E2C29D; 
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: #FFFFFF;
        }

        .footer-contact-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 15px;
            color: #E2C29D;
        }

        .footer-contact-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.4;
        }

        .footer-contact-list svg {
            flex-shrink: 0;
            margin-top: 3px;
        }

        /* --- BARRA INFERIOR DE DERECHOS --- */
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            font-size: 0.8rem;
            color: #B29B85;
        }

        .payment-methods {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Responsividad adicional para el Footer */
        @media (max-width: 900px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 550px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- La barra superior ahora se renderiza fuera de forma independiente con su propio color -->
    <x-navbar></x-navbar>

    <div class="hero-wrapper">
        <section class="hero-container">
            <section class="hero-content">
                <h1>Descubre historias para todas las edades</h1>
                <p>Explora nuestra colección cuidadosamente seleccionada de libros que inspiran, educan y entretienen. Tu próxima aventura literaria te espera.</p>
                
                <a href="{{ route('libros.index') }}" class="btn-explorar">
                    Explorar libros 
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>

                <div class="stats-container">
                    <div class="stat-item">
                        <h3>10,000+</h3>
                        <p>Libros disponibles</p>
                    </div>
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>Categorías</p>
                    </div>
                    <div class="stat-item">
                        <h3>24/7</h3>
                        <p>Servicio</p>
                    </div>
                </div>
            </section>

            <div class="hero-image-wrapper">
                <img src="https://images.unsplash.com/photo-1756505087014-0cc7a8eda7dc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHw0fHxjb3p5JTIwYm9va3Nob3AlMjByZWFkaW5nJTIwd2FybSUyMGxpYnJhcnl8ZW58MXx8fHwxNzc4MTIyOTMyfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Estantería de libros" class="hero-image">
            </div>
        </section>
    </div>

    <main style="flex-grow: 1;">
        
        <section class="categories-section">
            <div class="categories-header">
                <h2>Explora por Categorías</h2>
                <p>Encuentra exactamente lo que buscas en nuestra amplia selección de géneros literarios</p>
            </div>

            <div class="categories-grid">
                @foreach ($categories ?? $categorias as $categoria)
                    <a href="#" class="category-card">
                        <div class="category-icon" style="background-color: {{ $categoria['bg_color'] }}; color: {{ $categoria['icon_color'] }};">
                            {!! $categoria['svg'] !!}
                        </div>
                        <div class="category-info">
                            <h3>{{ $categoria['nombre'] }}</h3>
                            <p>{{ $categoria['descripcion'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

        <section class="featured-section"> 
            <div class="featured-header">
                <h2>Libros Destacados</h2>
                <p>Nuestra selección especial de títulos que no puedes dejar de leer</p>
            </div>

            <div class="books-grid">
                @foreach ($librosDestacados as $libro)
                    <div class="book-card">
                        <div class="book-image-wrapper">
                            <img src="{{ $libro['portada'] }}" alt="{{ $libro['titulo'] }}" class="book-image">
                        </div>
                        
                        <div class="book-details">
                            <span class="book-tag">{{ $libro['categoria'] }}</span>
                            <h3 class="book-title">{{ $libro['titulo'] }}</h3>
                            <p class="book-author">{{ $libro['autor'] }}</p>
                            
                            <div class="book-footer">
                                <span class="book-price">S/ {{ number_format($libro['precio'], 2) }}</span>
                                <button class="btn-add-cart" aria-label="Añadir al carrito">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="featured-footer">
                <a href="{{ route('libros.index') }}" class="btn-view-all">Ver todos los libros</a>
            </div>
        </section>

    </main>
</main>

    <footer class="footer">
        <div class="footer-grid">
            
            <div class="footer-brand">
                <h2>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    BookShop
                </h2>
                <p>Tu librería de confianza para descubrir historias maravillosas y conocimiento sin límites. Libros físicos y digitales al mejor precio.</p>
                <div class="social-links">
                    <a href="#" class="social-icon" aria-label="Tiktok">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0 -5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('libros.index') }}">Todos los Libros</a></li>
                    <li><a href="#">Categorías</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li><a href="#">Populares</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Sobre Nosotros</h3>
                <ul class="footer-links">
                    <li><a href="#">Quienes somos </a></li>
                    <li><a href="#">Mision y vision</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contacto</h3>
                <ul class="footer-contact-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>+51 967 750 523</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>contacto@bookshop.pe</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="payment-methods">
                <span>Aceptamos:</span>
                <span style="background: rgba(255,255,255,0.08); padding: 4px 10px; border-radius: 6px; color: #FFFFFF; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1);">VISA</span>
                <span style="background: rgba(255,255,255,0.08); padding: 4px 10px; border-radius: 6px; color: #FFFFFF; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1);">BCP</span>
                <span style="background: rgba(255,255,255,0.08); padding: 4px 10px; border-radius: 6px; color: #FFFFFF; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1);">PAGO EFECTIVO</span>
            </div>
            <div>
                &copy; 2026 BookShop Perú. Todos los derechos reservados. Precios en Soles (S/).
            </div>
        </div>
    </footer>

</body>
</body>
</html>