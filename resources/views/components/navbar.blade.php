<header class="sticky top-0 z-50 bg-cream-50/95 backdrop-blur-md border-b border-cream-300 transition-all duration-300 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-terracotta-700 via-terracotta-600 to-amber-600 flex items-center justify-center text-white shadow-md shadow-terracotta-600/25 group-hover:scale-105 transition-transform duration-200">
                        <i class="fa-solid fa-shapes text-xl"></i>
                    </div>
                    <div>
                        <span class="text-xl font-extrabold text-brown-950 tracking-tight group-hover:text-terracotta-600 transition-colors">Nexora</span>
                        <span class="text-xs font-semibold tracking-wider uppercase text-terracotta-600 block -mt-1">Innovations</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="{{ route('home') }}"
                   class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('home') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200 shadow-xs' : 'text-brown-700 hover:text-terracotta-600 hover:bg-cream-200/70' }}">
                    <i class="fa-solid fa-house-chimney text-xs mr-1.5 opacity-80"></i> Home
                </a>
                <a href="{{ route('about') }}"
                   class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('about') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200 shadow-xs' : 'text-brown-700 hover:text-terracotta-600 hover:bg-cream-200/70' }}">
                    <i class="fa-solid fa-building text-xs mr-1.5 opacity-80"></i> About
                </a>
                <a href="{{ route('services') }}"
                   class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('services') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200 shadow-xs' : 'text-brown-700 hover:text-terracotta-600 hover:bg-cream-200/70' }}">
                    <i class="fa-solid fa-layer-group text-xs mr-1.5 opacity-80"></i> Services
                </a>
                <a href="{{ route('contact') }}"
                   class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200 shadow-xs' : 'text-brown-700 hover:text-terracotta-600 hover:bg-cream-200/70' }}">
                    <i class="fa-solid fa-envelope text-xs mr-1.5 opacity-80"></i> Contact
                </a>
            </nav>

            <!-- Right CTA Button -->
            <div class="hidden md:flex items-center space-x-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-bold text-white bg-terracotta-600 hover:bg-terracotta-700 shadow-md shadow-terracotta-600/25 transition-all duration-200 hover:-translate-y-0.5">
                    <span>Get a Quote</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden">
                <button type="button" id="mobile-menu-btn"
                        class="p-2.5 rounded-xl text-brown-800 hover:text-terracotta-600 hover:bg-cream-200 focus:outline-none focus:ring-2 focus:ring-terracotta-500"
                        aria-label="Toggle navigation menu">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-cream-300 bg-cream-50 px-4 pt-3 pb-6 shadow-xl space-y-2">
        <a href="{{ route('home') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('home') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200' : 'text-brown-800 hover:bg-cream-200' }}">
            <i class="fa-solid fa-house-chimney w-5 text-center text-terracotta-600"></i> Home
        </a>
        <a href="{{ route('about') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('about') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200' : 'text-brown-800 hover:bg-cream-200' }}">
            <i class="fa-solid fa-building w-5 text-center text-terracotta-600"></i> About
        </a>
        <a href="{{ route('services') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('services') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200' : 'text-brown-800 hover:bg-cream-200' }}">
            <i class="fa-solid fa-layer-group w-5 text-center text-terracotta-600"></i> Services
        </a>
        <a href="{{ route('contact') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('contact') ? 'bg-terracotta-100 text-terracotta-700 font-bold border border-terracotta-200' : 'text-brown-800 hover:bg-cream-200' }}">
            <i class="fa-solid fa-envelope w-5 text-center text-terracotta-600"></i> Contact
        </a>
        <div class="pt-2">
            <a href="{{ route('contact') }}" class="w-full flex items-center justify-center gap-2 px-5 py-3 rounded-xl text-sm font-bold text-white bg-terracotta-600 hover:bg-terracotta-700 shadow-md">
                <span>Start Project</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</header>
