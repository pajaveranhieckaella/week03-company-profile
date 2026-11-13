<footer class="bg-brown-900 text-cream-200 border-t border-brown-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-12">
            <!-- Brand & Tagline -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group inline-block">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-terracotta-600 to-amber-600 flex items-center justify-center text-white shadow-lg">
                        <i class="fa-solid fa-shapes text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xl font-extrabold text-white tracking-tight">Nexora</span>
                        <span class="text-xs font-semibold tracking-wider uppercase text-terracotta-400 block -mt-1">Innovations</span>
                    </div>
                </a>
                <p class="text-brown-200 text-sm leading-relaxed max-w-sm">
                    Crafting modern client-server architectures, enterprise Laravel platforms, and human-centered design through earthy elegance and technological precision.
                </p>
                <div class="pt-2">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-terracotta-500/15 text-terracotta-300 border border-terracotta-500/30">
                        <span class="w-2 h-2 rounded-full bg-terracotta-400 animate-pulse"></span>
                        Available for Q1/Q2 Consultations
                    </span>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-cream-100">Navigation</h4>
                <ul class="space-y-2.5 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="text-brown-200 hover:text-cream-100 transition-colors duration-200 flex items-center gap-2">
                            <i class="fa-solid fa-chevron-right text-[10px] text-terracotta-400"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-brown-200 hover:text-cream-100 transition-colors duration-200 flex items-center gap-2">
                            <i class="fa-solid fa-chevron-right text-[10px] text-terracotta-400"></i> About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-brown-200 hover:text-cream-100 transition-colors duration-200 flex items-center gap-2">
                            <i class="fa-solid fa-chevron-right text-[10px] text-terracotta-400"></i> Our Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-brown-200 hover:text-cream-100 transition-colors duration-200 flex items-center gap-2">
                            <i class="fa-solid fa-chevron-right text-[10px] text-terracotta-400"></i> Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Core Services -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-cream-100">Core Services</h4>
                <ul class="space-y-2.5 text-sm text-brown-200">
                    <li class="hover:text-cream-100 transition-colors">Enterprise Web Development</li>
                    <li class="hover:text-cream-100 transition-colors">Mobile App Development</li>
                    <li class="hover:text-cream-100 transition-colors">Cloud Architecture & DevOps</li>
                    <li class="hover:text-cream-100 transition-colors">Cybersecurity Auditing</li>
                    <li class="hover:text-cream-100 transition-colors">UI/UX Design Systems</li>
                    <li class="hover:text-cream-100 transition-colors">IT Consulting & Roadmaps</li>
                </ul>
            </div>

            <!-- Contact Information & Socials -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-cream-100">Contact Info</h4>
                <ul class="space-y-3 text-sm text-brown-200">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-terracotta-400 mt-1"></i>
                        <span>Cyberzone Park, Taguig City, Metro Manila, Philippines</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-terracotta-400"></i>
                        <a href="mailto:contact@nexorainnovations.com" class="hover:text-cream-100 transition-colors">contact@nexorainnovations.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-terracotta-400"></i>
                        <a href="tel:+63288765432" class="hover:text-cream-100 transition-colors">+63 (2) 8876-5432</a>
                    </li>
                </ul>

                <!-- Social Media Links -->
                <div class="pt-2">
                    <h5 class="text-xs font-semibold text-cream-100 uppercase tracking-wider mb-2.5">Follow Our Studio</h5>
                    <div class="flex items-center gap-2.5">
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"
                           class="w-9 h-9 rounded-xl bg-brown-800 text-cream-200 hover:text-white hover:bg-terracotta-600 flex items-center justify-center transition-all duration-200"
                           aria-label="Nexora on LinkedIn">
                            <i class="fa-brands fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="https://github.com" target="_blank" rel="noopener noreferrer"
                           class="w-9 h-9 rounded-xl bg-brown-800 text-cream-200 hover:text-white hover:bg-terracotta-600 flex items-center justify-center transition-all duration-200"
                           aria-label="Nexora on GitHub">
                            <i class="fa-brands fa-github text-sm"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                           class="w-9 h-9 rounded-xl bg-brown-800 text-cream-200 hover:text-white hover:bg-terracotta-600 flex items-center justify-center transition-all duration-200"
                           aria-label="Nexora on Twitter">
                            <i class="fa-brands fa-x-twitter text-sm"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                           class="w-9 h-9 rounded-xl bg-brown-800 text-cream-200 hover:text-white hover:bg-terracotta-600 flex items-center justify-center transition-all duration-200"
                           aria-label="Nexora on Facebook">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="mt-12 pt-8 border-t border-brown-800 flex flex-col sm:flex-row items-center justify-between text-xs text-brown-300 gap-4">
            <p>&copy; {{ date('Y') }} Nexora Innovations Inc. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <span class="hover:text-cream-100 transition-colors cursor-pointer">Privacy Policy</span>
                <span class="hover:text-cream-100 transition-colors cursor-pointer">Terms of Service</span>
                <span class="hover:text-cream-100 transition-colors cursor-pointer">Architecture Blueprint</span>
            </div>
        </div>
    </div>
</footer>
