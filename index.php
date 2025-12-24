<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoxChecker - Efficient & Powerful</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/lucide.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        nox: {
                            bg: '#0a0a0f',
                            card: '#13131f',
                            primary: '#00ff9d', // Neon green accent
                            secondary: '#00cc7d',
                            text: '#e2e8f0',
                            muted: '#94a3b8'
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0f;
        }
        ::-webkit-scrollbar-thumb {
            background: #1f1f2e;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00ff9d;
        }
        
        .glass-panel {
            background: rgba(19, 19, 31, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="bg-nox-bg text-nox-text font-sans antialiased selection:bg-nox-primary selection:text-nox-bg">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 top-0 left-0 border-b border-white/10 glass-panel">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center gap-2">
                    <i data-lucide="shield-check" class="h-8 w-8 text-nox-primary"></i>
                    <span class="text-2xl font-bold tracking-tighter text-white">Nox<span class="text-nox-primary">Checker</span></span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="hover:text-nox-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#features" class="hover:text-nox-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Features</a>
                        <a href="#demo" class="hover:text-nox-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Demo</a>
                        <a href="https://t.me/NoxiousXpro" target="_blank" class="bg-nox-primary text-nox-bg hover:bg-nox-secondary px-5 py-2 rounded-full font-bold transition-all transform hover:scale-105 flex items-center gap-2">
                            <i data-lucide="send" class="h-4 w-4"></i> Contact Us
                        </a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                        <i data-lucide="menu" class="h-8 w-8"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-nox-card border-b border-white/10">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="text-gray-300 hover:text-nox-primary block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#features" class="text-gray-300 hover:text-nox-primary block px-3 py-2 rounded-md text-base font-medium">Features</a>
                <a href="#demo" class="text-gray-300 hover:text-nox-primary block px-3 py-2 rounded-md text-base font-medium">Demo</a>
                <a href="https://t.me/NoxiousXpro" class="text-nox-bg bg-nox-primary block px-3 py-2 rounded-md text-base font-bold mt-4">Contact on Telegram</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-1/2 w-full -translate-x-1/2 h-full z-0 pointer-events-none">
            <div class="absolute top-20 left-1/4 w-72 h-72 bg-nox-primary/10 rounded-full blur-[100px] animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
                The Next Gen <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-nox-primary to-blue-500">Efficiency Tool</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-nox-muted">
                Handle the rest with efficient checking. Secure, fast, and reliable automated solutions for your workflow.
            </p>
            
            <div class="mt-10 flex justify-center gap-4">
                <a href="https://t.me/NoxiousXpro" target="_blank" class="px-8 py-4 bg-nox-primary text-nox-bg font-bold rounded-lg hover:bg-nox-secondary transition-all shadow-[0_0_20px_rgba(0,255,157,0.3)] hover:shadow-[0_0_30px_rgba(0,255,157,0.5)] flex items-center gap-2">
                    <i data-lucide="shopping-cart" class="h-5 w-5"></i>
                    Purchase Now
                </a>
                <a href="#demo" class="px-8 py-4 bg-nox-card border border-white/10 text-white font-semibold rounded-lg hover:bg-white/5 transition-all flex items-center gap-2">
                    <i data-lucide="play-circle" class="h-5 w-5"></i>
                    Watch Demo
                </a>
            </div>
        </div>
    </section>

    <!-- Video Demo Section -->
    <section id="demo" class="py-20 bg-nox-card/50 border-y border-white/5">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">See It In Action</h2>
                <p class="text-nox-muted">Watch the breakdown of our capabilities.</p>
            </div>
            
            <!-- Video Container -->
            <div class="relative w-full rounded-2xl overflow-hidden shadow-2xl border border-white/10 bg-black aspect-video group">
                <!-- 
                   UPDATED VIDEO TAG:
                   1. Added 'playsinline' for mobile compatibility.
                   2. Added error handling script below to debug issues.
                -->
                <video 
                    id="mainVideo"
                    controls 
                    playsinline
                    class="w-full h-full object-cover"
                    poster="https://placehold.co/1920x1080/0a0a0f/00ff9d?text=NoxChecker+Demo+Player"
                >
                    <source src="1000248153.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
                <!-- Error Message Display (Hidden by default) -->
                <div id="videoErrorMsg" class="hidden absolute inset-0 bg-black/90 flex-col items-center justify-center text-center p-8 z-20">
                    <i data-lucide="alert-triangle" class="h-12 w-12 text-red-500 mb-4"></i>
                    <h3 class="text-xl font-bold text-red-500 mb-2">Video Not Found</h3>
                    <p class="text-white mb-4">Could not load <code class="bg-gray-800 px-2 py-1 rounded">1000248153.mp4</code></p>
                    <p class="text-nox-muted text-sm">Please make sure the video file is in the <br><strong>exact same folder</strong> as this HTML file.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="features" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white">Why Choose NoxChecker?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="glass-panel p-8 rounded-2xl hover:border-nox-primary/50 transition-colors group">
                    <div class="w-14 h-14 bg-nox-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="zap" class="h-7 w-7 text-nox-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">High Speed</h3>
                    <p class="text-nox-muted leading-relaxed">
                        Optimized for maximum efficiency. Our multithreaded engine ensures you get results faster than ever before.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-panel p-8 rounded-2xl hover:border-nox-primary/50 transition-colors group">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="shield" class="h-7 w-7 text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Secure & Safe</h3>
                    <p class="text-nox-muted leading-relaxed">
                        Built with security in mind. Your data stays private with our advanced encryption protocols.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-panel p-8 rounded-2xl hover:border-nox-primary/50 transition-colors group">
                    <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="cpu" class="h-7 w-7 text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Automated Workflow</h3>
                    <p class="text-nox-muted leading-relaxed">
                        "Handle the rest" automatically. Configure once and let NoxChecker do the heavy lifting for you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Contact Footer -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-nox-bg to-nox-card"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to get started?</h2>
            <p class="text-xl text-nox-muted mb-10">
                Join the community and get access to the most efficient checking tool on the market.
            </p>
            
            <div class="glass-panel p-8 rounded-2xl max-w-lg mx-auto border-nox-primary/30">
                <p class="text-sm text-nox-muted uppercase tracking-wider font-semibold mb-4">Direct Contact</p>
                <a href="https://t.me/NoxiousXpro" target="_blank" class="flex items-center justify-center gap-4 bg-[#0088cc] hover:bg-[#0077b5] text-white p-4 rounded-xl transition-all group">
                    <i data-lucide="send" class="h-8 w-8 group-hover:-translate-y-1 transition-transform"></i>
                    <div class="text-left">
                        <span class="block text-xs opacity-80">Message on Telegram</span>
                        <span class="block text-xl font-bold">@NoxiousXpro</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <footer class="border-t border-white/5 py-8 bg-nox-bg">
        <div class="max-w-7xl mx-auto px-4 text-center text-nox-muted text-sm">
            <p>&copy; 2024 NoxChecker. All rights reserved.</p>
        </div>
    </footer>

    <!-- Initialize Icons, Mobile Menu & Video Debugger -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('


