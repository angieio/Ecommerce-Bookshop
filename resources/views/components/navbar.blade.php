<header class="navbar">
    <button class="menu-toggle" id="mobile-menu-btn" aria-label="Abrir menú">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>

    <a href="{{ url('/') }}" class="logo">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
        BookShop
    </a>

    <nav id="nav-menu">
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ route('libros.index') }}">Todos los Libros</a></li>
            <li><a href="{{ route('libros.novedades') }}">Novedades</a></li>
            <li><a href="{{ route('libros.populares') }}">Populares</a></li>
        </ul>
    </nav>

    <div class="nav-actions">
        <form action="{{ route('libros.buscar') }}" method="GET" class="search-bar">
            <span class="search-icon">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </span>
            <input type="search" name="q" placeholder="Buscar">
        </form>
        
        <a href="{{ route('perfil') }}" class="icon-btn" aria-label="Perfil">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </a>
        
        <a href="{{ route('carrito') }}" class="icon-btn" aria-label="Carrito">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
        </a>
    </div>
</header>

<style>
    @media (max-width: 900px) {
        .navbar {
            padding: 15px 5% !important;
            flex-wrap: wrap !important;
        }

        .menu-toggle {
            display: block !important;
            order: 1 !important;
        }

        .logo {
            order: 2 !important;
        }

        .nav-actions {
            order: 3 !important;
            gap: 12px !important;
        }

        /* Forzamos que el #nav-menu responda al ID exacto */
        #nav-menu {
            display: none; 
            width: 100%;
            background-color: #F8F5EE; 
            position: absolute;
            top: 100%;
            left: 0;
            padding: 20px 7%;
            box-shadow: 0 8px 16px rgba(66, 22, 5, 0.06);
            border-bottom: 2px solid var(--color-terracotta, #B8500C);
            order: 4 !important;
            z-index: 999;
        }

        /* Clase contenedora activa */
        #nav-menu.active {
            display: block !important;
        }

        .nav-links {
            display: flex !important;
            flex-direction: column !important;
            gap: 15px !important;
        }

        .search-bar input {
            width: 140px !important;
        }
    }
</style>

<script>
    // Usamos una función autoejecutable para evitar duplicados en el DOM
    (function() {
        function initMenu() {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const navMenu = document.getElementById('nav-menu');

            if (menuBtn && navMenu) {
                // Removemos listeners viejos por si Laravel recarga componentes
                menuBtn.removeAttribute('onclick'); 
                
                menuBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    navMenu.classList.toggle('active');
                });
            }
        }

        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", initMenu);
        } else {
            initMenu();
        }
    })();
</script>