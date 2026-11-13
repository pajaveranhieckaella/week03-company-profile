<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nexora Innovations - Digital Transformation, Enterprise Engineering, and Modern Cloud Solutions.">
    <title>@yield('title', 'Nexora Innovations | Digital Engineering & Solutions Studio')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS with Terracotta + Brown + Cream Palette -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        serif: ['"Playfair Display"', 'Georgia', 'serif'],
                    },
                    colors: {
                        terracotta: {
                            50: '#FDF7F4',
                            100: '#F9EDE7',
                            200: '#F3DACF',
                            300: '#EABFAe',
                            400: '#DF9981',
                            500: '#D37355',
                            600: '#C86446', // Primary Terracotta
                            700: '#A94E35',
                            800: '#8A412E',
                            900: '#723728',
                        },
                        cream: {
                            50: '#FDFCF9',
                            100: '#FBF8F3', // Soft Linen Cream
                            200: '#F6EFE6', // Light Sand Cream
                            300: '#EFE3D5',
                            400: '#E2D1BE',
                            500: '#CDB7A0',
                        },
                        brown: {
                            50: '#F8F6F4',
                            100: '#EDE7E2',
                            200: '#D9CDC4',
                            300: '#BEACA0',
                            400: '#9B8374',
                            500: '#786052',
                            600: '#5A4438',
                            700: '#433127',
                            800: '#32221A',
                            900: '#231610', // Deep Espresso Brown
                            950: '#180E09',
                        }
                    }
                }
            }
        }
    </script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        .hero-pattern {
            background-color: #231610;
            background-image: radial-gradient(rgba(200, 100, 70, 0.18) 1.5px, transparent 1.5px);
            background-size: 26px 26px;
        }
        .cream-card {
            background-color: #FFFFFF;
            border: 1px solid #EFE3D5;
        }
    </style>
</head>
<body class="bg-cream-100 text-brown-900 min-h-screen flex flex-col antialiased selection:bg-terracotta-600 selection:text-white">

    <!-- Reusable Navigation Bar -->
    @include('components.navbar')

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Reusable Footer -->
    @include('components.footer')

    <!-- Interactive script for mobile navigation and dynamic interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
