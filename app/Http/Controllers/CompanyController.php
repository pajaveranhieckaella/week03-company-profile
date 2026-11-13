<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * Display the company homepage.
     */
    public function home(): View
    {
        $featuredServices = [
            [
                'title' => 'Web Development',
                'description' => 'Scalable, modern web applications built using cutting-edge frameworks, robust architectures, and clean code.',
                'icon' => 'globe-alt',
                'badge' => 'Core Specialization',
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Secure cloud architecture, migration, and DevOps automation across AWS, Google Cloud, and Microsoft Azure.',
                'icon' => 'cloud',
                'badge' => 'High Demand',
            ],
            [
                'title' => 'Cybersecurity & Auditing',
                'description' => 'Comprehensive security audits, vulnerability assessments, and proactive defenses to safeguard enterprise assets.',
                'icon' => 'shield-check',
                'badge' => 'Enterprise Grade',
            ],
        ];

        $stats = [
            ['value' => '99.9%', 'label' => 'System Uptime SLA'],
            ['value' => '250+', 'label' => 'Projects Delivered'],
            ['value' => '98%', 'label' => 'Client Satisfaction'],
            ['value' => '24/7', 'label' => 'Engineering Support'],
        ];

        return view('pages.home', compact('featuredServices', 'stats'));
    }

    /**
     * Display the about us page.
     */
    public function about(): View
    {
        $milestones = [
            [
                'year' => '2020',
                'title' => 'Foundation & Inception',
                'description' => 'TerraNova Technologies was founded with a bold vision to modernize enterprise software and empower high-growth startups.',
            ],
            [
                'year' => '2022',
                'title' => 'Regional Expansion',
                'description' => 'Expanded operations across Southeast Asia, growing our talent pool to over 40 top-tier engineers and cloud architects.',
            ],
            [
                'year' => '2024',
                'title' => 'Cloud & AI Modernization',
                'description' => 'Launched dedicated cloud infrastructure and applied AI practices, delivering mission-critical digital systems.',
            ],
            [
                'year' => '2026',
                'title' => 'Global Enterprise Footprint',
                'description' => 'Partnering with global industry leaders and recognized for engineering excellence and client-first delivery.',
            ],
        ];

        $values = [
            [
                'title' => 'Integrity & Transparency',
                'description' => 'We practice open communication, honest pricing, and transparent reporting in every client collaboration.',
                'icon' => 'sparkles',
            ],
            [
                'title' => 'Engineering Excellence',
                'description' => 'We take pride in clean architectures, automated testing, scalable codebases, and maintainable systems.',
                'icon' => 'cpu-chip',
            ],
            [
                'title' => 'Client-Centric Innovation',
                'description' => 'Every technical decision we make is aligned directly with our clients business objectives and end-user value.',
                'icon' => 'user-group',
            ],
            [
                'title' => 'Agility & Adaptability',
                'description' => 'We embrace iterative development, rapid feedback loops, and proactive problem solving in fast-paced markets.',
                'icon' => 'bolt',
            ],
        ];

        $team = [
            [
                'name' => 'Alexander Vance',
                'role' => 'Chief Executive Officer & Founder',
                'bio' => '15+ years in enterprise software leadership and tech entrepreneurship.',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80',
                'linkedin' => 'https://linkedin.com',
                'github' => 'https://github.com',
            ],
            [
                'name' => 'Samantha Reyes',
                'role' => 'Chief Technology Officer',
                'bio' => 'Former principal architect specializing in distributed cloud infrastructure.',
                'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=80',
                'linkedin' => 'https://linkedin.com',
                'github' => 'https://github.com',
            ],
            [
                'name' => 'Marcus Chen',
                'role' => 'Head of Software Engineering',
                'bio' => 'Full-stack specialist and advocate for scalable Laravel and microservices ecosystems.',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80',
                'linkedin' => 'https://linkedin.com',
                'github' => 'https://github.com',
            ],
            [
                'name' => 'Elena Rostova',
                'role' => 'Lead UI/UX Product Designer',
                'bio' => 'Passionate about crafting intuitive, accessible, and delightful digital user journeys.',
                'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80',
                'linkedin' => 'https://linkedin.com',
                'github' => 'https://github.com',
            ],
        ];

        return view('pages.about', compact('milestones', 'values', 'team'));
    }

    /**
     * Display the services catalog.
     */
    public function services(): View
    {
        $services = [
            [
                'id' => 'web-dev',
                'title' => 'Web Development',
                'category' => 'Engineering',
                'description' => 'Custom enterprise web platforms, SaaS products, and customer portals built with modern Laravel, high-throughput APIs, and responsive frontends.',
                'icon' => 'globe-alt',
                'features' => [
                    'Bespoke Laravel MVC & API architecture',
                    'High-performance database optimization',
                    'Responsive mobile-first interfaces',
                    'Automated CI/CD integration',
                ],
            ],
            [
                'id' => 'mobile-dev',
                'title' => 'Mobile Development',
                'category' => 'Mobile',
                'description' => 'Native and cross-platform mobile apps for iOS and Android that deliver fluent user experiences, offline synchronization, and hardware integration.',
                'icon' => 'device-phone-mobile',
                'features' => [
                    'Flutter & React Native cross-platform apps',
                    'Native iOS (Swift) & Android (Kotlin)',
                    'Push notifications & offline caching',
                    'App Store & Play Store deployment',
                ],
            ],
            [
                'id' => 'ui-ux',
                'title' => 'UI/UX Design',
                'category' => 'Design',
                'description' => 'User-centric product design encompassing customer journey mapping, interactive Figma wireframes, accessible design systems, and usability testing.',
                'icon' => 'swatch',
                'features' => [
                    'Comprehensive user research & interviews',
                    'Interactive prototypes & motion design',
                    'Scalable corporate design systems',
                    'WCAG accessibility compliance',
                ],
            ],
            [
                'id' => 'cloud',
                'title' => 'Cloud Solutions',
                'category' => 'Infrastructure',
                'description' => 'Resilient cloud infrastructure engineering on AWS, GCP, and Azure with Kubernetes, serverless paradigms, auto-scaling, and infrastructure as code.',
                'icon' => 'cloud',
                'features' => [
                    'Multi-cloud architecture & migration',
                    'Docker & Kubernetes orchestration',
                    'Automated backup & disaster recovery',
                    'Cost optimization & observability',
                ],
            ],
            [
                'id' => 'cybersecurity',
                'title' => 'Cybersecurity',
                'category' => 'Security',
                'description' => 'Proactive enterprise security strategies including penetration testing, continuous vulnerability monitoring, threat modeling, and regulatory compliance.',
                'icon' => 'shield-check',
                'features' => [
                    'OWASP Top 10 vulnerability audits',
                    'Data encryption at rest and in transit',
                    'Role-based access control (RBAC)',
                    'SOC2 & GDPR compliance roadmaps',
                ],
            ],
            [
                'id' => 'consulting',
                'title' => 'IT Consulting',
                'category' => 'Strategy',
                'description' => 'Strategic advisory services assisting organizations with legacy system modernization, architectural reviews, DevOps culture, and technology roadmaps.',
                'icon' => 'chart-bar',
                'features' => [
                    'Technical architecture due diligence',
                    'Legacy migration & decoupling plans',
                    'Team mentoring & best practice adoption',
                    'Digital transformation roadmaps',
                ],
            ],
        ];

        return view('pages.services', compact('services'));
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        $contactDetails = [
            'address' => '123 Innovation Avenue, Cyberzone Park, Taguig City, Metro Manila 1634, Philippines',
            'email' => 'contact@terranovatech.com',
            'supportEmail' => 'support@terranovatech.com',
            'phone' => '+63 (2) 8876-5432',
            'mobile' => '+63 917 888 9000',
            'hours' => 'Monday - Friday: 8:00 AM - 6:00 PM (PHT)',
        ];

        $socialLinks = [
            ['name' => 'LinkedIn', 'url' => 'https://linkedin.com', 'icon' => 'linkedin'],
            ['name' => 'GitHub', 'url' => 'https://github.com', 'icon' => 'github'],
            ['name' => 'Twitter', 'url' => 'https://twitter.com', 'icon' => 'twitter'],
            ['name' => 'Facebook', 'url' => 'https://facebook.com', 'icon' => 'facebook'],
        ];

        return view('pages.contact', compact('contactDetails', 'socialLinks'));
    }
}
