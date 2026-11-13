@extends('layouts.app')

@section('title', 'Services | Nexora Innovations - Comprehensive Digital & Engineering Solutions')

@section('content')
    <!-- Services Header Banner -->
    <section class="bg-slate-900 text-white py-16 lg:py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900 to-indigo-950 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-indigo-500/20 text-indigo-300 border border-indigo-500/30">
                End-to-End Capabilities
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">
                Enterprise Engineering Services
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg">
                Explore our full suite of digital engineering capabilities tailored to meet modern enterprise demands.
            </p>
        </div>
    </section>

    <!-- Services Catalog Grid -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div id="{{ $service['id'] }}" class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between group">
                        <div>
                            <!-- Header & Icon -->
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-3xl group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                    @if ($service['icon'] === 'globe-alt')
                                        <i class="fa-solid fa-code"></i>
                                    @elseif ($service['icon'] === 'device-phone-mobile')
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    @elseif ($service['icon'] === 'swatch')
                                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                                    @elseif ($service['icon'] === 'cloud')
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                    @elseif ($service['icon'] === 'shield-check')
                                        <i class="fa-solid fa-shield-halved"></i>
                                    @else
                                        <i class="fa-solid fa-lightbulb"></i>
                                    @endif
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider text-indigo-700 bg-indigo-50 px-3 py-1 rounded-full border border-indigo-100">
                                    {{ $service['category'] }}
                                </span>
                            </div>

                            <!-- Title & Description -->
                            <h3 class="text-2xl font-bold text-slate-900 group-hover:text-indigo-600 transition-colors mb-3">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                                {{ $service['description'] }}
                            </p>

                            <!-- Key Features / Deliverables -->
                            <div class="space-y-2.5 pt-4 border-t border-slate-100">
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Key Deliverables</h4>
                                <ul class="space-y-2">
                                    @foreach ($service['features'] as $feature)
                                        <li class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-600">
                                            <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0"></i>
                                            <span>{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- CTA button -->
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl font-bold text-sm text-indigo-600 bg-indigo-50 hover:bg-indigo-600 hover:text-white transition-all duration-200">
                                <span>Request Proposal</span>
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Development Lifecycle Section -->
    <section class="py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full border border-indigo-200">
                    How We Work
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Our Proven Delivery Methodology
                </h2>
                <p class="text-slate-600 text-base">
                    From initial discovery to continuous cloud deployment, we follow a disciplined, transparent engineering pipeline.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-12 h-12 rounded-full bg-indigo-600 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
                        1
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Discovery & Architecture</h4>
                    <p class="text-xs text-slate-500">Requirements gathering, technical feasibility, data modeling, and UX wireframes.</p>
                </div>

                <div class="text-center p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-12 h-12 rounded-full bg-indigo-600 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
                        2
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Agile Development</h4>
                    <p class="text-xs text-slate-500">Two-week sprint iterations with continuous integration and client milestone reviews.</p>
                </div>

                <div class="text-center p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-12 h-12 rounded-full bg-indigo-600 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
                        3
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Quality & Security QA</h4>
                    <p class="text-xs text-slate-500">Automated unit testing, vulnerability assessments, and performance profiling.</p>
                </div>

                <div class="text-center p-6 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="w-12 h-12 rounded-full bg-indigo-600 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
                        4
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Deploy & Maintain</h4>
                    <p class="text-xs text-slate-500">Automated multi-region cloud rollout, 24/7 logging, and continuous SLA support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="py-16 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <h2 class="text-3xl font-extrabold tracking-tight">Need a customized engineering solution?</h2>
            <p class="text-slate-400 max-w-xl mx-auto text-sm sm:text-base">
                Our team can tailor a dedicated engineering squad or handle turnkey solution delivery for your company.
            </p>
            <div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-500 shadow-lg shadow-indigo-600/30 transition-transform hover:scale-105">
                    <span>Contact Our Solutions Team</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
