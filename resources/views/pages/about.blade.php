@extends('layouts.app')

@section('title', 'About Us | TerraNova Technologies - History, Mission, Vision & Team')

@section('content')
    <!-- Header Banner -->
    <section class="bg-brown-900 text-white py-16 lg:py-24 relative overflow-hidden hero-pattern">
        <div class="absolute inset-0 bg-gradient-to-r from-brown-950 via-brown-900/90 to-brown-950 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-terracotta-600/25 text-terracotta-300 border border-terracotta-500/40">
                Who We Are
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">
                Architecting the Future of Enterprise Software
            </h1>
            <p class="max-w-2xl mx-auto text-cream-200 text-base sm:text-lg font-light">
                Discover the story, mission, and passionate engineering minds behind TerraNova Technologies.
            </p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16 bg-cream-50 border-b border-cream-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Mission Card -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-terracotta-200 shadow-sm relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-terracotta-600 text-white flex items-center justify-center text-2xl shadow-md mb-6 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-brown-950 mb-4">Our Mission</h3>
                    <p class="text-brown-700 leading-relaxed text-base">
                        To empower global organizations by building scalable, maintainable, and high-performance digital solutions. We combine rigorous MVC architectural standards, cloud-native resiliency, and empathetic design to help businesses achieve breakthrough efficiency and customer value.
                    </p>
                </div>

                <!-- Vision Card -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-amber-200 shadow-sm relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-brown-700 text-white flex items-center justify-center text-2xl shadow-md mb-6 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-brown-950 mb-4">Our Vision</h3>
                    <p class="text-brown-700 leading-relaxed text-base">
                        To stand as the most trusted and forward-thinking digital transformation partner in Southeast Asia and beyond—setting benchmarks in software craftsmanship, transparent client relationships, and continuous engineering innovation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company History & Milestones Section -->
    <section class="py-20 bg-cream-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-terracotta-700 bg-terracotta-100 px-3.5 py-1.5 rounded-full border border-terracotta-200">
                    Our Journey
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brown-950 tracking-tight">
                    Company History & Milestones
                </h2>
                <p class="text-brown-700 text-base">
                    From a humble boutique software laboratory to a trusted enterprise technology partner.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($milestones as $milestone)
                    <div class="bg-white p-7 rounded-3xl border border-cream-300 shadow-sm hover:shadow-md transition-shadow relative">
                        <div class="text-terracotta-600 font-extrabold text-2xl font-mono pb-2 border-b border-cream-200">
                            {{ $milestone['year'] }}
                        </div>
                        <h4 class="text-lg font-bold text-brown-900 mt-4 mb-2">
                            {{ $milestone['title'] }}
                        </h4>
                        <p class="text-brown-600 text-sm leading-relaxed">
                            {{ $milestone['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-cream-50 border-t border-cream-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-terracotta-700 bg-terracotta-100 px-3.5 py-1.5 rounded-full border border-terracotta-200">
                    Principles That Guide Us
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brown-950 tracking-tight">
                    Our Core Values
                </h2>
                <p class="text-brown-700 text-base">
                    Every line of code and every customer relationship is grounded in our fundamental corporate ethics.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($values as $val)
                    <div class="p-6 rounded-3xl bg-white border border-cream-300 hover:border-terracotta-300 hover:shadow-lg transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-terracotta-100 text-terracotta-700 flex items-center justify-center text-xl mb-4">
                            @if ($val['icon'] === 'sparkles')
                                <i class="fa-solid fa-handshake-simple"></i>
                            @elseif ($val['icon'] === 'cpu-chip')
                                <i class="fa-solid fa-code"></i>
                            @elseif ($val['icon'] === 'user-group')
                                <i class="fa-solid fa-users"></i>
                            @else
                                <i class="fa-solid fa-bolt-lightning"></i>
                            @endif
                        </div>
                        <h4 class="text-lg font-bold text-brown-900 mb-2">{{ $val['title'] }}</h4>
                        <p class="text-brown-600 text-sm leading-relaxed">{{ $val['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Introduction Section -->
    <section class="py-20 bg-cream-100 border-t border-cream-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-terracotta-700 bg-terracotta-100 px-3.5 py-1.5 rounded-full border border-terracotta-200">
                    Leadership & Talent
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brown-950 tracking-tight">
                    Meet Our Leadership Team
                </h2>
                <p class="text-brown-700 text-base">
                    Experienced technology strategists, engineers, and designers committed to delivering excellence.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($team as $member)
                    <div class="bg-white rounded-3xl overflow-hidden border border-cream-300 shadow-sm hover:shadow-xl transition-all duration-300 group">
                        <div class="aspect-square w-full overflow-hidden bg-cream-200">
                            <img src="{{ $member['avatar'] }}" alt="{{ $member['name'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6 space-y-2">
                            <h4 class="text-lg font-bold text-brown-900">{{ $member['name'] }}</h4>
                            <div class="text-xs font-semibold text-terracotta-700 uppercase tracking-wide">{{ $member['role'] }}</div>
                            <p class="text-brown-500 text-xs leading-relaxed pt-1">{{ $member['bio'] }}</p>
                            <div class="pt-3 flex items-center gap-3 border-t border-cream-200 mt-3">
                                <a href="{{ $member['linkedin'] }}" target="_blank" class="text-brown-400 hover:text-terracotta-600 transition-colors" aria-label="{{ $member['name'] }} LinkedIn">
                                    <i class="fa-brands fa-linkedin text-sm"></i>
                                </a>
                                <a href="{{ $member['github'] }}" target="_blank" class="text-brown-400 hover:text-brown-800 transition-colors" aria-label="{{ $member['name'] }} GitHub">
                                    <i class="fa-brands fa-github text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
