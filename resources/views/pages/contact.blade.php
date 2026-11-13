@extends('layouts.app')

@section('title', 'Contact Us | Nexora Innovations - Get in Touch')

@section('content')
    <!-- Contact Header Banner -->
    <section class="bg-slate-900 text-white py-16 lg:py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900 to-indigo-950 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-indigo-500/20 text-indigo-300 border border-indigo-500/30">
                Let's Build Something Exceptional
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">
                Connect With Our Team
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg">
                Have a project idea, an enterprise inquiry, or an architectural challenge? We’re ready to assist.
            </p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Column: Contact Information & Socials -->
                <div class="lg:col-span-5 space-y-8">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200/90 shadow-sm space-y-6">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-indigo-600">Company Information</span>
                            <h3 class="text-2xl font-extrabold text-slate-900 mt-1">Get In Touch</h3>
                            <p class="text-slate-600 text-sm mt-2">
                                Reach out via email, phone, or visit our primary development campus located in Taguig City.
                            </p>
                        </div>

                        <div class="space-y-5 pt-2">
                            <!-- Address -->
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-lg flex-shrink-0">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Our Headquarters</h4>
                                    <p class="text-sm font-semibold text-slate-800 mt-0.5 leading-snug">
                                        {{ $contactDetails['address'] }}
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-lg flex-shrink-0">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Email Us</h4>
                                    <a href="mailto:{{ $contactDetails['email'] }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-700 block mt-0.5">
                                        {{ $contactDetails['email'] }}
                                    </a>
                                    <a href="mailto:{{ $contactDetails['supportEmail'] }}" class="text-xs text-slate-500 hover:text-slate-700 block">
                                        Support: {{ $contactDetails['supportEmail'] }}
                                    </a>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-lg flex-shrink-0">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Call Directly</h4>
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contactDetails['phone']) }}" class="text-sm font-semibold text-slate-800 hover:text-indigo-600 block mt-0.5">
                                        {{ $contactDetails['phone'] }}
                                    </a>
                                    <span class="text-xs text-slate-500">Mobile: {{ $contactDetails['mobile'] }}</span>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-lg flex-shrink-0">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Office Hours</h4>
                                    <p class="text-sm font-semibold text-slate-800 mt-0.5">
                                        {{ $contactDetails['hours'] }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Links -->
                        <div class="pt-6 border-t border-slate-100">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Connect on Social Networks</h4>
                            <div class="flex items-center gap-3">
                                @foreach ($socialLinks as $social)
                                    <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                                       class="w-10 h-10 rounded-xl bg-slate-100 text-slate-700 hover:bg-indigo-600 hover:text-white flex items-center justify-center transition-all duration-200"
                                       aria-label="{{ $social['name'] }}">
                                        @if ($social['icon'] === 'linkedin')
                                            <i class="fa-brands fa-linkedin-in text-base"></i>
                                        @elseif ($social['icon'] === 'github')
                                            <i class="fa-brands fa-github text-base"></i>
                                        @elseif ($social['icon'] === 'twitter')
                                            <i class="fa-brands fa-x-twitter text-base"></i>
                                        @else
                                            <i class="fa-brands fa-facebook-f text-base"></i>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Embedded Google Map -->
                    <div class="bg-white p-4 rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                        <div class="flex items-center justify-between pb-3 px-2">
                            <span class="text-xs font-bold text-slate-700 uppercase tracking-wide">
                                <i class="fa-solid fa-map-pin text-rose-500 mr-1.5"></i> Location Map
                            </span>
                            <span class="text-[11px] text-slate-400">Bonifacio Global City / Taguig</span>
                        </div>
                        <div class="w-full h-64 rounded-2xl overflow-hidden border border-slate-200 relative">
                            <iframe
                                title="Nexora Innovations Office Map"
                                class="w-full h-full border-0"
                                loading="lazy"
                                allowfullscreen
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.8037375677843!2d121.04825637588383!3d14.553215878235207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8f25b39bfad%3A0x6b107b5871bfef12!2sBonifacio%20Global%20City%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700000000000!5m2!1sen!2sph">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Contact Form (UI only) -->
                <div class="lg:col-span-7">
                    <div class="bg-white p-8 sm:p-10 rounded-3xl border border-slate-200/90 shadow-sm">
                        <div class="mb-8">
                            <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full border border-indigo-200">
                                Send a Message
                            </span>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2">
                                Start a Conversation
                            </h2>
                            <p class="text-slate-600 text-sm mt-1">
                                Complete the form below and an engineer from our technical solutions squad will respond within 24 hours.
                            </p>
                        </div>

                        <!-- UI Feedback Alert (Simulated on submit) -->
                        <div id="contact-success-alert" class="hidden mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-600 text-lg mt-0.5"></i>
                            <div>
                                <span class="font-bold block">Thank you! Your inquiry has been received.</span>
                                <span>Our engineering team will review your project parameters and get back to you promptly.</span>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <form id="contact-form" action="#" method="POST" onsubmit="event.preventDefault(); document.getElementById('contact-success-alert').classList.remove('hidden'); document.getElementById('contact-form').reset(); window.scrollTo({ top: document.getElementById('contact-success-alert').offsetTop - 120, behavior: 'smooth' });" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Full Name -->
                                <div>
                                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Full Name <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" required placeholder="e.g. John Doe"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Email Address <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" required placeholder="e.g. john@company.com"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Phone -->
                                <div>
                                    <label for="phone_input" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Phone Number (Optional)
                                    </label>
                                    <input type="tel" id="phone_input" name="phone" placeholder="+63 900 000 0000"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                                </div>

                                <!-- Service Interest -->
                                <div>
                                    <label for="service_interest" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Service of Interest <span class="text-rose-500">*</span>
                                    </label>
                                    <select id="service_interest" name="service" required
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                                        <option value="" disabled selected>Select a Service</option>
                                        <option value="web-dev">Web Development (Laravel / Full-Stack)</option>
                                        <option value="mobile-dev">Mobile App Development</option>
                                        <option value="ui-ux">UI/UX Design & Prototyping</option>
                                        <option value="cloud">Cloud Architecture & DevOps</option>
                                        <option value="cybersecurity">Cybersecurity & Code Auditing</option>
                                        <option value="consulting">IT Strategy & Modernization</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Subject / Project Title <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" id="subject" name="subject" required placeholder="e.g. Enterprise Client Portal Modernization"
                                       class="w-full px-4 py-3 rounded-xl border border-slate-300 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Project Scope & Details <span class="text-rose-500">*</span>
                                </label>
                                <textarea id="message" name="message" rows="5" required placeholder="Tell us about your timeline, expected stack, or current infrastructure..."
                                          class="w-full px-4 py-3 rounded-xl border border-slate-300 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-2">
                                <button type="submit"
                                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-700 shadow-md shadow-indigo-600/30 transition-all duration-200 hover:-translate-y-0.5">
                                    <span>Send Inquiry</span>
                                    <i class="fa-solid fa-paper-plane text-xs"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
