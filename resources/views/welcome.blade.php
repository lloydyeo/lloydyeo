<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lloyd Yeo - Solution Consulting & Development</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --brand-red: #FF0000;
            --brand-black: #1A1A1A;
        }

        html {
            scroll-behavior: smooth;
        }

        .brand-gradient {
            background: linear-gradient(135deg, var(--brand-black) 0%, var(--brand-red) 100%);
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--brand-red) 0%, #FF4444 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

</head>
<body class="bg-gray-100">
<!-- Navigation -->
<nav class="fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-gradient">
                <svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
                    <!-- Main text in bold, geometric font -->
                    <text x="10" y="28" font-family="Arial" font-weight="800" font-size="24" letter-spacing="1" fill="#1A1A1A">
                        LLO<tspan fill="#FF0000">Y</tspan>D
                    </text>
                </svg>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#services" class="text-gray-800 hover:text-red-600">Services</a>
                <a href="#contact" class="text-gray-800 hover:text-red-600">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="brand-gradient text-white min-h-screen flex items-center relative overflow-hidden">
    <!-- Abstract background pattern -->
    <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
            <pattern id="grid" width="8" height="8" patternUnits="userSpaceOnUse">
                <path d="M 8 0 L 0 0 0 8" fill="none" stroke="currentColor" stroke-width="0.5"/>
            </pattern>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="container mx-auto px-6 py-24 relative z-10">
        <div class="max-w-4xl">
            <h1 class="text-6xl font-bold mb-6 leading-tight">
                Architecting Digital Solutions
                <span class="block mt-2 text-red-400">That Drive Business Growth</span>
            </h1>
            <p class="text-xl mb-12 text-gray-200 leading-relaxed max-w-2xl">
                From concept to execution, we deliver tailored technology solutions
                that transform challenges into competitive advantages.
            </p>
            <div class="flex gap-6">
                <a href="#services"
                   class="bg-white text-black px-8 py-4 rounded-lg hover:bg-red-600 hover:text-white transition duration-300 font-semibold">
                    Explore Solutions
                </a>
                <a href="#contact"
                   class="border border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-black transition duration-300 font-semibold">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative element -->
    <div class="absolute bottom-0 right-0 w-1/3 h-1/3 opacity-10">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M43.2,-68.1C57.9,-61.9,73,-53.3,80.6,-40.3C88.2,-27.3,88.3,-9.9,85.1,6.2C81.8,22.3,75.2,37.1,65.7,49.7C56.2,62.3,43.8,72.7,29.3,77.5C14.8,82.3,-1.9,81.5,-17.8,76.7C-33.7,71.9,-48.9,63.2,-60.2,51C-71.5,38.8,-78.9,23.2,-81.1,6.7C-83.3,-9.8,-80.3,-27.1,-71.3,-40.6C-62.3,-54.1,-47.3,-63.7,-32.8,-70C-18.3,-76.3,-4.6,-79.2,7.3,-76.6C19.2,-74,33.8,-65.9,43.2,-68.1Z" transform="translate(100 100)" />
        </svg>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Services</h2>
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Solution Consulting Card -->
            <div class="p-8 border border-gray-200 rounded-lg hover:shadow-xl transition duration-300 flex flex-col">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Solution Consulting</h3>
                <p class="text-gray-600 mb-6">Strategic technology consulting to help businesses innovate and scale effectively.</p>
                <ul class="space-y-3 text-gray-600 mb-6 flex-grow">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Technical Architecture Design
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        System Integration Strategy
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Technology Stack Optimization
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Digital Transformation Planning
                    </li>
                </ul>
            </div>

            <!-- Software Development Card -->
            <div class="p-8 border border-gray-200 rounded-lg hover:shadow-xl transition duration-300 flex flex-col">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Software Development</h3>
                <p class="text-gray-600 mb-6">Custom software solutions built with modern technologies and best practices.</p>
                <ul class="space-y-3 text-gray-600 mb-6 flex-grow">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Full-Stack Web Applications
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        API Development & Integration
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Database Design & Optimization
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Cloud-Native Solutions
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Contact Us</h2>
        <div class="max-w-xl mx-auto">
            <form class="space-y-6">
                <div>
                    <label class="block text-gray-700 mb-2">Name</label>
                    <input type="text" class="w-full p-3 border rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" class="w-full p-3 border rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Message</label>
                    <textarea class="w-full p-3 border rounded-lg" rows="4"></textarea>
                </div>
                <button type="submit" class="w-full bg-black text-white py-3 rounded-lg hover:bg-red-600 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer with Stripe Required Information -->
<footer class="bg-black text-white py-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Contact Details</h3>
                <p>Email: lloyd@lloydyeo.com</p>
                <p>Phone: (+65) 91681553</p>
                <p>Address: Circulator Road, 049422</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Policies</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-red-500">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-red-500">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-800 text-center">
            <p>&copy; 2023 Lloyd Yeo. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
