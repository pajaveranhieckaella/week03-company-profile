<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-700 to-sky-500 flex items-center justify-center text-white shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-200">
                        <i class="fa-solid fa-cubes text-xl"></i>
                    </div>
                    <div>
                        <span class="text-xl font-extrabold text-slate-900 tracking-tight group-hover:text-indigo-600 transition-colors">Nexora</span>
                        <span class="text-xs font-semibold tracking-wider uppercase text-indigo-600 block -mt-1">Innovations</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="{{ route('home') }}"
                   class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-600 font-bold shadow-xs' : 'text-slate-600 hover:text-indigo-600 hover:bg-slate-100/70' }}">
                    <i class="fa-solid fa-house-chimney text-xs mr-1.5 opacity-80"></i> Home
                </a>
                <a href="{{ route('about') }}"
                   class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('about') ? 'bg-indigo-50 text-indigo-600 font-bold shadow-xs' : 'text-slate-600 hover:text-indigo-600 hover:bg-slate-100/70' }}">
                    <i class="fa-solid fa-building text-xs mr-1.5 opacity-80"></i> About
                </a>
                <a href="{{ route('services') }}"
                   class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('services') ? 'bg-indigo-50 text-indigo-600 font-bold shadow-xs' : 'text-slate-600 hover:text-indigo-600 hover:bg-slate-100/70' }}">
                    <i class="fa-solid fa-layer-group text-xs mr-1.5 opacity-80"></i> Services
                </a>
                <a href="{{ route('contact') }}"
                   class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-indigo-50 text-indigo-600 font-bold shadow-xs' : 'text-slate-600 hover:text-indigo-600 hover:bg-slate-100/70' }}">
                    <i class="fa-solid fa-envelope text-xs mr-1.5 opacity-80"></i> Contact
                </a>
            </nav>

            <!-- Right CTA Button -->
            <div class="hidden md:flex items-center space-x-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 shadow-md shadow-indigo-600/25 transition-all duration-200 hover:-translate-y-0.5">
                    <span>Get a Quote</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden">
                <button type="button" id="mobile-menu-btn"
                        class="p-2.5 rounded-xl text-slate-700 hover:text-indigo-600 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        aria-label="Toggle navigation menu">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 shadow-xl space-y-2">
        <a href="{{ route('home') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-600 font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
            <i class="fa-solid fa-house-chimney w-5 text-center text-indigo-500"></i> Home
        </a>
        <a href="{{ route('about') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('about') ? 'bg-indigo-50 text-indigo-600 font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
            <i class="fa-solid fa-building w-5 text-center text-indigo-500"></i> About
        </a>
        <a href="{{ route('services') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('services') ? 'bg-indigo-50 text-indigo-600 font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
            <i class="fa-solid fa-layer-group w-5 text-center text-indigo-500"></i> Services
        </a>
        <a href="{{ route('contact') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('contact') ? 'bg-indigo-50 text-indigo-600 font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
            <i class="fa-solid fa-envelope w-5 text-center text-indigo-500"></i> Contact
        </a>
        <div class="pt-2">
            <a href="{{ route('contact') }}" class="w-full flex items-center justify-center gap-2 px-5 py-3 rounded-xl text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 shadow-md">
                <span>Start Project</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</header>
