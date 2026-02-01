<?php
// Default page if not set
$current_page = $current_page ?? 'inicio';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'TransiQ | CMR automáticos con IA'; ?></title>
    <meta name="description"
        content="<?php echo $page_description ?? 'TransiQ automatiza la creación de documentos CMR en el sector automotriz usando IA. De proforma a CMR correcto en segundos.'; ?>">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6b21a8',
                        accent: '#a855f7',
                        pink: '#f472b6',
                        dark: {
                            900: '#09090b',
                            800: '#18181b',
                            700: '#27272a',
                            600: '#3f3f46',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: #09090b;
            color: #ffffff;
        }

        .nav-blur {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .gradient-text {
            background: linear-gradient(135deg, #a855f7 0%, #f472b6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #6b21a8 0%, #a855f7 100%);
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #7c3aed 0%, #c084fc 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 40px rgba(168, 85, 247, 0.3);
        }

        .card-glow {
            transition: all 0.3s ease;
        }

        .card-glow:hover {
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.15);
            transform: translateY(-4px);
        }

        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }
    </style>
</head>

<body class="antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 nav-blur bg-dark-900/80 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="index.php" class="flex items-center">
                    <img src="assets/images/logo.png" alt="TransiQ Logo" class="h-6 lg:h-8 w-auto">
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index.php"
                        class="text-sm font-medium <?php echo $current_page === 'inicio' ? 'text-accent' : 'text-gray-300 hover:text-white'; ?> transition-colors">Inicio</a>
                    <a href="index.php#como-funciona"
                        class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Cómo funciona</a>
                    <a href="index.php#por-que-transiq"
                        class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Por qué TransiQ</a>
                    <a href="precios.php"
                        class="text-sm font-medium <?php echo $current_page === 'precios' ? 'text-accent' : 'text-gray-300 hover:text-white'; ?> transition-colors">Precios</a>
                    <a href="contacto.php"
                        class="text-sm font-medium <?php echo $current_page === 'contacto' ? 'text-accent' : 'text-gray-300 hover:text-white'; ?> transition-colors">Contacto</a>
                </div>

                <!-- Desktop Buttons -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="#"
                        class="px-4 py-2 text-sm font-medium text-white border border-white/20 rounded-lg hover:bg-white/5 transition-all">
                        Login
                    </a>
                    <a href="#" class="px-5 py-2.5 text-sm font-medium text-white btn-gradient rounded-lg">
                        Registrarse
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-gray-300 hover:text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="mobile-menu fixed top-0 right-0 bottom-0 w-80 max-w-full z-50 bg-dark-800 border-l border-white/10 shadow-2xl">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b border-white/10">
                <img src="assets/images/logo.png" alt="TransiQ Logo" class="h-6 w-auto">
                <button id="mobile-menu-close" class="p-2 text-gray-300 hover:text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="flex-1 py-6 px-4 space-y-2">
                <a href="index.php"
                    class="block px-4 py-3 text-base font-medium <?php echo $current_page === 'inicio' ? 'text-accent bg-accent/10' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?> rounded-lg transition-all">Inicio</a>
                <a href="index.php#como-funciona"
                    class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all">Cómo
                    funciona</a>
                <a href="index.php#por-que-transiq"
                    class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all">Por
                    qué TransiQ</a>
                <a href="precios.php"
                    class="block px-4 py-3 text-base font-medium <?php echo $current_page === 'precios' ? 'text-accent bg-accent/10' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?> rounded-lg transition-all">Precios</a>
                <a href="contacto.php"
                    class="block px-4 py-3 text-base font-medium <?php echo $current_page === 'contacto' ? 'text-accent bg-accent/10' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?> rounded-lg transition-all">Contacto</a>
            </div>
            <div class="p-4 border-t border-white/10 space-y-3">
                <a href="#"
                    class="block w-full px-4 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-lg hover:bg-white/5 transition-all">
                    Login
                </a>
                <a href="#"
                    class="block w-full px-4 py-3 text-center text-sm font-medium text-white btn-gradient rounded-lg">
                    Registrarse
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 z-40 bg-black/50 hidden"></div>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        function openMobileMenu() {
            mobileMenu.classList.add('open');
            mobileMenuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('open');
            mobileMenuOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        mobileMenuClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);
    </script>