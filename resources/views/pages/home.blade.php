@extends('layouts.app')

@section('title', 'Home | Nexora Innovations - Digital Engineering & Solutions Studio')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative overflow-hidden hero-pattern text-white py-24 lg:py-32">
        <div class="absolute inset-0 bg-gradient-to-b from-brown-950/40 via-brown-900/80 to-brown-950"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold bg-terracotta-600/20 text-terracotta-300 border border-terracotta-500/40">
                        <i class="fa-solid fa-sparkles text-amber-300"></i> Next-Generation Laravel & Cloud Solutions
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                        Empowering Enterprise Growth Through <span class="text-transparent bg-clip-text bg-gradient-to-r from-terracotta-300 via-amber-200 to-terracotta-400">Intelligent Tech</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-cream-200 max-w-2xl font-light leading-relaxed">
                        Nexora Innovations engineers robust web platforms, high-performance cloud architectures, and user-centric software that scale your business with speed and resilience.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 pt-4">
                        <a href="{{ route('services') }}" class="px-7 py-3.5 rounded-xl font-bold text-white bg-terracotta-600 hover:bg-terracotta-500 shadow-lg shadow-terracotta-600/35 transition-all duration-200 hover:-translate-y-0.5 flex items-center gap-2.5">
                            <span>Explore Our Services</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="px-7 py-3.5 rounded-xl font-semibold text-cream-100 bg-brown-800/80 hover:bg-brown-700/80 border border-brown-700 transition-all duration-200 flex items-center gap-2">
                            <i class="fa-solid fa-calendar-check text-terracotta-400"></i>
                            <span>Schedule Consultation</span>
                        </a>
                    </div>
                </div>

                <!-- Hero Interactive / Visual Card -->
                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-terracotta-500 to-amber-600 opacity-25 blur-xl"></div>
                        <div class="relative bg-brown-900/90 border border-brown-700/80 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl">
                            <div class="flex items-center justify-between pb-6 border-b border-brown-800">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-terracotta-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                </div>
                                <span class="text-xs text-cream-300 font-mono">architecture::production</span>
                            </div>
                            <div class="space-y-4 pt-6 text-sm">
                                <div class="p-4 rounded-2xl bg-brown-800/60 border border-brown-700/70 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-terracotta-600/20 text-terracotta-400 flex items-center justify-center font-bold">
                                            <i class="fa-solid fa-server"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">Client-Server Latency</div>
                                            <div class="text-xs text-cream-300/70">Optimized MVC Lifecycle</div>
                                        </div>
                                    </div>
                                    <span class="text-terracotta-300 font-mono font-bold">&lt; 18ms</span>
                                </div>

                                <div class="p-4 rounded-2xl bg-brown-800/60 border border-brown-700/70 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-amber-600/20 text-amber-300 flex items-center justify-center font-bold">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">Security Rating</div>
                                            <div class="text-xs text-cream-300/70">CSRF, XSS & RBAC Hardened</div>
                                        </div>
                                    </div>
                                    <span class="text-amber-300 font-mono font-bold">A+ Grade</span>
                                </div>

                                <div class="p-4 rounded-2xl bg-brown-800/60 border border-brown-700/70 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-terracotta-500/20 text-terracotta-400 flex items-center justify-center font-bold">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">Automated Deployment</div>
                                            <div class="text-xs text-cream-300/70">Continuous Integration</div>
                                        </div>
                                    </div>
                                    <span class="text-emerald-400 font-mono font-bold">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="mt-16 pt-10 border-t border-brown-800/80 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                @foreach ($stats as $stat)
                    <div class="p-4">
                        <div class="text-3xl sm:text-4xl font-extrabold text-terracotta-300 tracking-tight">{{ $stat['value'] }}</div>
                        <div class="text-xs sm:text-sm text-cream-200 mt-1 uppercase tracking-wider font-semibold">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Company Introduction Section -->
    <section class="py-20 bg-cream-50 border-b border-cream-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 text-terracotta-700 font-bold text-xs uppercase tracking-widest">
                        <span class="w-6 h-0.5 bg-terracotta-600"></span> About Nexora Innovations
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-brown-950 tracking-tight leading-tight">
                        Pioneering Modern Client-Server Solutions with Enterprise Reliability
                    </h2>
                    <p class="text-brown-700 leading-relaxed">
                        At Nexora Innovations, we believe that world-class software stems from sound architectural principles. Leveraging Laravel’s powerful Model-View-Controller paradigm, we separate business logic, data models, and fluid presentation layers into clean, maintainable systems.
                    </p>
                    <p class="text-brown-700 leading-relaxed">
                        Whether you need a bespoke cloud-native portal, API integrations, or real-time mobile companions, our dedicated team of senior developers and architects ensures on-time, bug-free, and scalable execution.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-white border border-cream-300 shadow-xs">
                            <i class="fa-solid fa-circle-check text-terracotta-600 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-brown-900 text-sm">Clean MVC Architecture</h4>
                                <p class="text-xs text-brown-500 mt-0.5">Strict separation of concerns for maintainability.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-white border border-cream-300 shadow-xs">
                            <i class="fa-solid fa-circle-check text-terracotta-600 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-brown-900 text-sm">Rapid Time-to-Market</h4>
                                <p class="text-xs text-brown-500 mt-0.5">Agile sprints and continuous automated feedback.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-terracotta-700 font-bold hover:text-terracotta-800 transition-colors">
                            <span>Read full company story & team</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Visual Showcase Card -->
                <div class="relative">
                    <div class="relative bg-gradient-to-tr from-cream-200 via-cream-100 to-terracotta-50 p-8 sm:p-10 rounded-3xl border border-cream-300 shadow-md">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-terracotta-600 text-white flex items-center justify-center font-bold text-xl shadow-md">
                                    <i class="fa-solid fa-lightbulb"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brown-900">Innovation-First Mindset</h4>
                                    <p class="text-xs text-brown-600">Continuous exploration of emerging architectures.</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-brown-700 text-cream-100 flex items-center justify-center font-bold text-xl shadow-md">
                                    <i class="fa-solid fa-microchip"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brown-900">High-Concurrency Performance</h4>
                                    <p class="text-xs text-brown-600">Tuned databases, caching layers, and asynchronous queues.</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-terracotta-700 text-white flex items-center justify-center font-bold text-xl shadow-md">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brown-900">Award-Winning Engineering</h4>
                                    <p class="text-xs text-brown-600">Trusted by top enterprises in finance, healthcare & e-commerce.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section class="py-20 bg-cream-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-terracotta-700 bg-terracotta-100 px-3.5 py-1.5 rounded-full border border-terracotta-200">
                    What We Deliver
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brown-950 tracking-tight">
                    Featured Technology Services
                </h2>
                <p class="text-brown-700 text-base">
                    Discover how our specialized engineering capabilities empower companies to build resilient and scalable digital ecosystems.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($featuredServices as $service)
                    <div class="bg-white rounded-3xl p-8 border border-cream-300 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between group">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="w-14 h-14 rounded-2xl bg-terracotta-100 text-terracotta-600 flex items-center justify-center text-2xl group-hover:bg-terracotta-600 group-hover:text-white transition-colors duration-200">
                                    @if ($service['icon'] === 'globe-alt')
                                        <i class="fa-solid fa-globe"></i>
                                    @elseif ($service['icon'] === 'cloud')
                                        <i class="fa-solid fa-cloud"></i>
                                    @else
                                        <i class="fa-solid fa-shield-halved"></i>
                                    @endif
                                </div>
                                <span class="text-xs font-semibold px-2.5 py-1 rounded-lg bg-cream-200 text-brown-800">
                                    {{ $service['badge'] }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-brown-900 group-hover:text-terracotta-600 transition-colors">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-brown-600 text-sm leading-relaxed">
                                {{ $service['description'] }}
                            </p>
                        </div>

                        <div class="mt-8 pt-4 border-t border-cream-200">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-sm font-bold text-terracotta-700 hover:text-terracotta-800">
                                <span>Learn More</span>
                                <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-bold text-brown-800 bg-white border border-cream-300 hover:bg-cream-200/60 shadow-xs transition-colors">
                    <span>View All 6 Specialized Services</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner Section -->
    <section class="py-16 bg-gradient-to-r from-terracotta-700 via-terracotta-600 to-brown-800 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
                <div class="space-y-3 max-w-2xl">
                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Ready to elevate your digital presence?
                    </h2>
                    <p class="text-cream-100 text-sm sm:text-base">
                        Partner with Nexora Innovations today. Let's discuss your system requirements, architecture goals, and product roadmap.
                    </p>
                </div>
                <div class="flex-shrink-0 flex flex-wrap gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="px-8 py-3.5 rounded-xl font-bold text-brown-900 bg-cream-50 hover:bg-white shadow-lg transition-transform duration-200 hover:scale-105">
                        Get In Touch Today
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
