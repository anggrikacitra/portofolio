<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Citra Anggrika | Junior Software Developer</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Tailwind CSS & JS (Vite) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .font-mono-tech {
                font-family: 'Fira Code', monospace;
            }
            /* Smooth custom scrolling */
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #030014;
            }
            ::-webkit-scrollbar-thumb {
                background: rgba(147, 51, 234, 0.3);
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: rgba(147, 51, 234, 0.6);
            }
        </style>
    </head>
    <body class="bg-[#030014] text-gray-100 overflow-x-hidden antialiased relative selection:bg-purple-500/30 selection:text-purple-200">
        
        <!-- Interactive Background Radial Glow (tracks mouse) -->
        <div id="bg-glow" class="fixed inset-0 pointer-events-none z-0 transition-all duration-300 opacity-80" 
             style="background: radial-gradient(circle 600px at 50% 50%, rgba(147, 51, 234, 0.12), rgba(59, 130, 246, 0.04), transparent 80%);">
        </div>

        <!-- Ambient static background glowing blobs for visual depth -->
        <div class="fixed top-[-10%] left-[-10%] w-[50vw] h-[50vw] bg-purple-900/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="fixed bottom-[-10%] right-[-10%] w-[50vw] h-[50vw] bg-blue-900/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

        <div class="relative z-10 grid-bg min-h-screen flex flex-col justify-between">
            
            <!-- Sticky Navigation Bar -->
            <header class="sticky top-0 w-full backdrop-blur-md bg-black/40 border-b border-white/5 z-50 transition-all duration-300">
                <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                    <a href="#home" class="flex items-center gap-2 group">
                        <span class="font-bold text-xl tracking-tight bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent group-hover:text-purple-400 transition-colors duration-300">Citra Anggrika<span class="text-purple-500"></span></span>
                    </a>
                    
                    <!-- Desktop Nav Menu -->
                    <nav class="hidden md:flex items-center gap-8">
                        <a href="#about" class="text-sm font-medium text-gray-400 hover:text-white transition-colors duration-300">Tentang</a>
                        <a href="#skills" class="text-sm font-medium text-gray-400 hover:text-white transition-colors duration-300">Keahlian</a>
                        <a href="#education" class="text-sm font-medium text-gray-400 hover:text-white transition-colors duration-300">Pendidikan</a>
                        <a href="#organizations" class="text-sm font-medium text-gray-400 hover:text-white transition-colors duration-300">Organisasi</a>
                        <a href="#projects" class="text-sm font-medium text-gray-400 hover:text-white transition-colors duration-300">Project</a>
                        <a href="#contact" class="text-sm font-medium text-gray-400 hover:text-white transition-colors duration-300">Kontak</a>
                    </nav>

                    <div class="hidden md:block">
                        <a href="#contact" class="px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 hover:border-purple-500/50 hover:bg-purple-500/10 text-sm font-medium transition-all duration-300 shadow-[0_0_20px_rgba(255,255,255,0.02)]">
                            Hubungi Saya
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-white/5 text-gray-400 hover:text-white focus:outline-none transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Nav Menu Panel -->
                <div id="mobile-menu" class="hidden md:hidden border-b border-white/5 bg-black/90 backdrop-blur-lg absolute left-0 right-0 p-6 flex flex-col gap-4 animate-fade-in">
                    <a href="#about" class="mobile-nav-link text-lg font-medium text-gray-300 py-2 border-b border-white/5">Tentang</a>
                    <a href="#skills" class="mobile-nav-link text-lg font-medium text-gray-300 py-2 border-b border-white/5">Keahlian</a>
                    <a href="#education" class="mobile-nav-link text-lg font-medium text-gray-300 py-2 border-b border-white/5">Pendidikan</a>
                    <a href="#organizations" class="mobile-nav-link text-lg font-medium text-gray-300 py-2 border-b border-white/5">Organisasi</a>
                    <a href="#projects" class="mobile-nav-link text-lg font-medium text-gray-300 py-2 border-b border-white/5">Project</a>
                    <a href="#contact" class="mobile-nav-link text-lg font-medium text-gray-300 py-2">Kontak</a>
                    <a href="#contact" class="mobile-nav-link w-full py-3 text-center rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold shadow-lg shadow-purple-500/25 mt-2">
                        Hubungi Saya
                    </a>
                </div>
            </header>

            <main class="w-full">

                <!-- HERO SECTION -->
                <section id="about" class="max-w-7xl mx-auto px-6 py-20 lg:py-32 flex flex-col-reverse lg:flex-row items-center justify-between gap-16 relative">
                    <!-- Text content -->
                    <div class="flex-1 text-left space-y-6 max-w-2xl">
                        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/30 text-purple-300 text-xs font-semibold uppercase tracking-wider animate-pulse shadow-[0_0_15px_rgba(168,85,247,0.1)]">
                            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                            Junior Software Developer
                        </div>
                        
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none text-white">
                            Hai, saya <span class="bg-gradient-to-r from-purple-400 via-violet-500 to-blue-500 bg-clip-text text-transparent">Ni Km. Citra Anggrika Pratiwi</span>
                        </h1>
                        
                        <p class="text-gray-300 text-base sm:text-lg leading-relaxed font-light">
                            Saya adalah seorang <strong class="text-white font-medium">Junior Software Developer</strong> yang memiliki ketertarikan tinggi pada dunia teknologi dan pengembangan perangkat lunak. Berfokus pada <strong class="text-purple-400 font-medium">Frontend Development</strong>, saya senang membangun antarmuka yang interaktif, responsif, dan ramah pengguna. Saya selalu antusias mempelajari teknologi baru serta mengembangkan keterampilan untuk menciptakan solusi digital yang bermanfaat dan inovatif.
                        </p>
                        
                        <div class="flex flex-wrap gap-4 pt-4">
                            <a href="#contact" class="px-8 py-4 rounded-xl bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 hover:from-purple-500 hover:to-blue-500 text-white font-semibold shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40 hover:-translate-y-0.5 transition-all duration-300">
                                Hubungi Saya
                            </a>
                            <a href="#projects" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 hover:border-purple-500/30 hover:bg-white/10 text-gray-300 hover:text-white font-semibold hover:-translate-y-0.5 transition-all duration-300">
                                Lihat Project
                            </a>
                        </div>
                    </div>
                    
                    <!-- Portrait / Photo container -->
                    <div class="flex-shrink-0 relative group">
                        <!-- Neon background glows -->
                        <div class="absolute -inset-1 rounded-2xl bg-gradient-to-r from-purple-600 to-blue-600 opacity-40 blur-xl group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                        
                        <!-- Floating graphic element -->
                        <div class="relative w-72 h-72 sm:w-80 sm:h-80 md:w-96 md:h-96 rounded-2xl overflow-hidden border-2 border-purple-500/30 shadow-2xl bg-[#0b0f19] transform group-hover:scale-[1.02] transition-all duration-500 ease-out">
                            <img class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700 ease-out" 
                                 src="{{ asset('images/foto.jpeg') }}" 
                                 alt="Anggrika Citra Profile Picture">
                            
                            <!-- Dark vignette overlay on image hover -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-60"></div>
                            
                            <!-- Custom border highlights -->
                            <div class="absolute inset-x-0 bottom-0 h-1.5 bg-gradient-to-r from-purple-500 via-indigo-500 to-blue-500"></div>
                        </div>
                    </div>
                </section>


                <!-- SKILLS MARQUEE SECTION -->
                <section id="skills" class="py-16 border-t border-b border-white/5 bg-black/20 overflow-hidden relative">
                    <div class="max-w-7xl mx-auto px-6 mb-12 text-center">
                        <h2 class="text-xs font-bold tracking-widest text-purple-400 uppercase mb-2">Keahlian</h2>
                        <h3 class="text-3xl font-extrabold text-white">Teknologi & Perangkat Lunak</h3>
                    </div>

                    <!-- Infinite Scrolling Marquee Wrapper -->
                    <div class="relative w-full overflow-hidden">
                        <!-- Shadow gradients on edge -->
                        <div class="absolute inset-y-0 left-0 w-24 sm:w-32 bg-gradient-to-r from-[#030014] to-transparent z-20 pointer-events-none"></div>
                        <div class="absolute inset-y-0 right-0 w-24 sm:w-32 bg-gradient-to-l from-[#030014] to-transparent z-20 pointer-events-none"></div>

                        <!-- Marquee Inner Container (using Tailwind v4 custom anim) -->
                        <div class="flex animate-marquee hover:[animation-play-state:paused] py-4 whitespace-nowrap">
                            
                            <!-- List of Skills: Set 1 -->
                            <div class="flex shrink-0 gap-6">
                                <!-- PHP -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-purple-500/50 hover:bg-purple-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/php/777BB4" alt="PHP logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">PHP</span>
                                </div>
                                <!-- Laravel -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-red-500/50 hover:bg-red-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Laravel</span>
                                </div>
                                <!-- Astro JS -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 hover:bg-orange-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/astro/FF5D01" alt="Astro JS logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Astro JS</span>
                                </div>
                                <!-- MySQL -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-blue-400/50 hover:bg-blue-400/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/mysql/4479A1" alt="MySQL logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">MySQL</span>
                                </div>
                                <!-- Microsoft Office -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-600/50 hover:bg-orange-600/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/microsoftoffice/D83B01" alt="Microsoft Office logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Microsoft Office</span>
                                </div>
                                <!-- Draw.io -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-amber-500/50 hover:bg-amber-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/diagramsdotnet/F08705" alt="Draw.io logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Draw.io</span>
                                </div>
                                <!-- Python -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-yellow-500/50 hover:bg-yellow-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/python/3776AB" alt="Python logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Python</span>
                                </div>
                            </div>
                            
                            <!-- List of Skills: Set 2 (Duplicate for seamless infinite marquee loop) -->
                            <div class="flex shrink-0 gap-6 ml-6">
                                <!-- PHP -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-purple-500/50 hover:bg-purple-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/php/777BB4" alt="PHP logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">PHP</span>
                                </div>
                                <!-- Laravel -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-red-500/50 hover:bg-red-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Laravel</span>
                                </div>
                                <!-- Astro JS -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-500/50 hover:bg-orange-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/astro/FF5D01" alt="Astro JS logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Astro JS</span>
                                </div>
                                <!-- MySQL -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-blue-400/50 hover:bg-blue-400/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/mysql/4479A1" alt="MySQL logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">MySQL</span>
                                </div>
                                <!-- Microsoft Office -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-orange-600/50 hover:bg-orange-600/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/microsoftoffice/D83B01" alt="Microsoft Office logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Microsoft Office</span>
                                </div>
                                <!-- Draw.io -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-amber-500/50 hover:bg-amber-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/diagramsdotnet/F08705" alt="Draw.io logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Draw.io</span>
                                </div>
                                <!-- Python -->
                                <div class="flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:border-yellow-500/50 hover:bg-yellow-500/10 group transition-all duration-300">
                                    <img class="w-8 h-8 object-contain filter brightness-90 group-hover:brightness-100 transition-all" src="https://cdn.simpleicons.org/python/3776AB" alt="Python logo">
                                    <span class="text-gray-300 group-hover:text-white font-medium">Python</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- EDUCATION SECTION -->
                <section id="education" class="max-w-6xl mx-auto px-6 py-24 relative">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <h2 class="text-xs font-bold tracking-widest text-blue-400 uppercase mb-2">Pendidikan</h2>
                        <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Riwayat Pendidikan</h3>
                        <p class="text-gray-400 mt-4 font-light">Perjalanan akademis saya dalam menuntut ilmu.</p>
                    </div>

                    <!-- Timeline Layout -->
                    <div class="relative max-w-4xl mx-auto">
                        <!-- Middle Timeline vertical line -->
                        <div class="absolute left-4 sm:left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-purple-500 via-indigo-500 to-blue-500 -translate-x-1/2"></div>
                        
                        <!-- Timeline Item 1 (Pendidikan Tinggi) -->
                        <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between mb-16 group">
                            <!-- Left Content (empty on mobile, card on desktop) -->
                            <div class="hidden sm:block w-[45%] text-right pr-8">
                                <span class="font-mono-tech text-purple-400 font-semibold text-sm">2023 - Sekarang</span>
                                <h4 class="text-xl font-bold text-white mt-1">Politeknik Negeri Bali</h4>
                                <p class="text-gray-300 font-medium text-sm mt-1">Jurusan Teknologi Informasi</p>
                            </div>
                            
                            <!-- Timeline node dot -->
                            <div class="absolute left-4 sm:left-1/2 w-6 h-6 rounded-full bg-[#030014] border-4 border-purple-500 -translate-x-1/2 z-25 group-hover:scale-125 transition-transform duration-300 shadow-[0_0_15px_rgba(168,85,247,0.5)]"></div>
                            
                            <!-- Right Card -->
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-8">
                                <div class="bg-white/5 border border-white/10 hover:border-purple-500/40 p-6 rounded-2xl backdrop-blur-md hover:-translate-y-1 transition-all duration-300 shadow-xl shadow-purple-950/5">
                                    <div class="sm:hidden mb-2">
                                        <span class="font-mono-tech text-purple-400 font-semibold text-xs bg-purple-500/10 px-2.5 py-1 rounded-full border border-purple-500/20">2023 - Sekarang</span>
                                        <h4 class="text-lg font-bold text-white mt-2">Politeknik Negeri Bali</h4>
                                        <p class="text-purple-300 font-medium text-xs mt-0.5">Jurusan Teknologi Informasi</p>
                                    </div>
                                    <span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-purple-500/10 text-purple-300 border border-purple-500/20 mb-3">Pendidikan Tinggi</span>
                                    <p class="text-gray-400 text-sm leading-relaxed font-light">
                                        Saat ini saya sedang menempuh studi perguruan tinggi di Politeknik Negeri Bali pada program studi Teknologi Rekayasa Perangkat Lunak Jurusan Teknologi Informasi. Di sini saya mendalami teori rekayasa perangkat lunak, sistem basis data, algoritma, serta teknologi web modern.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 2 (SMA) -->
                        <div class="relative flex flex-col sm:flex-row-reverse items-start sm:items-center justify-between group">
                            <!-- Left Content (empty on mobile, card on desktop) -->
                            <div class="hidden sm:block w-[45%] text-left pl-8">
                                <span class="font-mono-tech text-blue-400 font-semibold text-sm">2020 - 2023</span>
                                <h4 class="text-xl font-bold text-white mt-1">SMA Negeri 1 Negara</h4>
                                <p class="text-gray-300 font-medium text-sm mt-1">Matematika & Ilmu Pengetahuan Alam (MIPA)</p>
                            </div>
                            
                            <!-- Timeline node dot -->
                            <div class="absolute left-4 sm:left-1/2 w-6 h-6 rounded-full bg-[#030014] border-4 border-blue-500 -translate-x-1/2 z-25 group-hover:scale-125 transition-transform duration-300 shadow-[0_0_15px_rgba(59,130,246,0.5)]"></div>
                            
                            <!-- Right Card -->
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-8">
                                <div class="bg-white/5 border border-white/10 hover:border-blue-500/40 p-6 rounded-2xl backdrop-blur-md hover:-translate-y-1 transition-all duration-300 shadow-xl shadow-blue-950/5">
                                    <div class="sm:hidden mb-2">
                                        <span class="font-mono-tech text-blue-400 font-semibold text-xs bg-blue-500/10 px-2.5 py-1 rounded-full border border-blue-500/20">2020 - 2023</span>
                                        <h4 class="text-lg font-bold text-white mt-2">SMA Negeri 1 Negara</h4>
                                        <p class="text-blue-300 font-medium text-xs mt-0.5">MIPA</p>
                                    </div>
                                    <span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-300 border border-blue-500/20 mb-3">Sekolah Menengah Atas</span>
                                    <p class="text-gray-400 text-sm leading-relaxed font-light">
                                        Saya menyelesaikan pendidikan menengah atas di SMA Negeri 1 Negara dengan mengambil konsentrasi program MIPA. Di masa sekolah ini, saya membangun kemampuan analitis dasar dan logika matematika yang kuat sebagai pondasi programming.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- ORGANIZATIONS SECTION -->
                <section id="organizations" class="max-w-7xl mx-auto px-6 py-24 relative border-t border-white/5">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <h2 class="text-xs font-bold tracking-widest text-purple-400 uppercase mb-2">Organisasi</h2>
                        <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Pengalaman Organisasi</h3>
                        <p class="text-gray-400 mt-4 font-light">Berbagai kontribusi, kepemimpinan, dan kegiatan kepanitiaan selama masa perkuliahan.</p>
                    </div>

                    <!-- Organization Cards Grid - Equal Size 2x2 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Card 1: HMJ Fungsionaris -->
                        <div class="bg-gradient-to-br from-white/[0.04] to-white/[0.01] hover:from-white/[0.07] hover:to-white/[0.02] border border-white/10 hover:border-purple-500/40 p-8 rounded-3xl backdrop-blur-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group shadow-xl">
                            <div>
                                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <!-- Sparkles SVG -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                </div>
                                <span class="text-xs font-mono-tech text-purple-400 uppercase tracking-wider font-semibold">Student Association</span>
                                <h4 class="text-2xl font-bold text-white mt-2">Fungsionaris Himpunan Mahasiswa</h4>
                                <p class="text-purple-300 font-semibold text-sm mt-1">Jurusan Teknologi Informasi</p>
                                <p class="text-gray-400 text-sm mt-4 font-light leading-relaxed">
                                    Sebagai anggota Bidang 2 (Minat dan Bakat), aktif mengembangkan serta memfasilitasi minat dan bakat mahasiswa Jurusan TI di bidang non-akademik, seni, olahraga, dan kreativitas guna meningkatkan iklim kekeluargaan.
                                </p>
                            </div>
                            <div class="mt-8 pt-4 border-t border-white/5 flex items-center justify-between text-xs text-gray-500">
                                <span>Bidang: Minat & Bakat</span>
                                <span class="text-purple-400 font-mono-tech">Fungsionaris</span>
                            </div>
                        </div>

                        <!-- Card 2: Koordinator Sie Hubungan Masyarakat -->
                        <div class="bg-gradient-to-br from-white/[0.04] to-white/[0.01] hover:from-white/[0.07] hover:to-white/[0.02] border border-white/10 hover:border-blue-500/40 p-8 rounded-3xl backdrop-blur-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group shadow-xl">
                            <div>
                                <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <!-- User Group SVG -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <span class="text-xs font-mono-tech text-blue-400 uppercase tracking-wider font-semibold">Leadership & Public Relations</span>
                                <h4 class="text-2xl font-bold text-white mt-2">Koordinator Sie Hubungan Masyarakat</h4>
                                <p class="text-blue-300 font-semibold text-sm mt-1">PNBIT Competition #17</p>
                                <p class="text-gray-400 text-sm mt-4 font-light leading-relaxed">
                                    Memimpin secara langsung divisi Hubungan Masyarakat untuk perhelatan kompetisi teknologi skala besar PNBIT Competition #17. Mengkoordinasikan promosi kegiatan, kerja sama media partner, serta perizinan formal dengan pemangku kepentingan.
                                </p>
                            </div>
                            <div class="mt-8 pt-4 border-t border-white/5 flex items-center justify-between text-xs text-gray-500">
                                <span>Jabatan: Koordinator Seksi Hubungan Masyarakat</span>
                                <span class="text-blue-400 font-mono-tech">Period: #17</span>
                            </div>
                        </div>

                        <!-- Card 3: Sekretaris Inti -->
                        <div class="bg-gradient-to-br from-white/[0.04] to-white/[0.01] hover:from-white/[0.07] hover:to-white/[0.02] border border-white/10 hover:border-purple-500/40 p-8 rounded-3xl backdrop-blur-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group shadow-xl">
                            <div>
                                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <!-- Document SVG -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </div>
                                <span class="text-xs font-mono-tech text-purple-400 uppercase tracking-wider font-semibold">Administration & Management</span>
                                <h4 class="text-2xl font-bold text-white mt-2">Sekretaris Inti</h4>
                                <p class="text-purple-300 font-semibold text-sm mt-1">REPETISI 2025</p>
                                <p class="text-gray-400 text-sm mt-4 font-light leading-relaxed">
                                    Bertanggung jawab atas jalannya manajemen kesekretariatan inti pada REPETISI 2025. Mengatur sistem pengarsipan surat keluar-masuk, penyusunan proposal, laporan pertanggungjawaban kegiatan, serta notulensi koordinasi tingkat tinggi.
                                </p>
                            </div>
                            <div class="mt-8 pt-4 border-t border-white/5 flex items-center justify-between text-xs text-gray-500">
                                <span>Jabatan: Sekretaris Utama</span>
                                <span class="text-purple-400 font-mono-tech">Tahun: 2025</span>
                            </div>
                        </div>

                        <!-- Card 4: Anggota Kepanitiaan Humas -->
                        <div class="bg-gradient-to-br from-white/[0.04] to-white/[0.01] hover:from-white/[0.07] hover:to-white/[0.02] border border-white/10 hover:border-blue-500/40 p-8 rounded-3xl backdrop-blur-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group shadow-xl">
                            <div>
                                <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <!-- Calendar SVG -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                                <span class="text-xs font-mono-tech text-blue-400 uppercase tracking-wider font-semibold">Event Operations</span>
                                <h4 class="text-2xl font-bold text-white mt-2">Anggota Sie Hubungan Masyarakat</h4>
                                <p class="text-gray-400 text-sm mt-4 font-light leading-relaxed">
                                    Berkontribusi secara konsisten dalam perencanaan humas, publikasi, sosialisasi, dan penyebaran informasi untuk berbagai event bergengsi Jurusan dan Kampus PNB:
                                </p>
                                
                                <!-- Events Tag Grid -->
                                <div class="flex flex-wrap gap-2.5 mt-6">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-300 text-xs font-medium transition-colors hover:bg-blue-500/20">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-ping"></span>
                                        PCW 2023
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs font-medium transition-colors hover:bg-purple-500/20">
                                        <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
                                        CITICE 2024
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-medium transition-colors hover:bg-indigo-500/20">
                                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                                        PTBC 2024
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-pink-500/10 border border-pink-500/20 text-pink-300 text-xs font-medium transition-colors hover:bg-pink-500/20">
                                        <span class="w-1.5 h-1.5 rounded-full bg-pink-400"></span>
                                        PNBITC #16 X ECO
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-teal-500/10 border border-teal-500/20 text-teal-300 text-xs font-medium transition-colors hover:bg-teal-500/20">
                                        <span class="w-1.5 h-1.5 rounded-full bg-teal-400"></span>
                                        PNBRC 2025
                                    </span>
                                </div>
                            </div>
                            <div class="mt-8 pt-4 border-t border-white/5 flex items-center justify-between text-xs text-gray-500">
                                <span>Peran: Anggota Sie Humas</span>
                                <span class="text-blue-400 font-mono-tech">2023 - 2025</span>
                            </div>
                        </div>

                    </div>
                </section>


                <!-- GITHUB PROJECTS SECTION -->
                <section id="projects" class="max-w-7xl mx-auto px-6 py-24 border-t border-white/5 relative">
                    <!-- Subtle graphic shape -->
                    <div class="absolute right-0 top-1/4 w-[300px] h-[300px] bg-purple-600/5 rounded-full blur-[100px] pointer-events-none"></div>

                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                        <div class="max-w-2xl text-left">
                            <h2 class="text-xs font-bold tracking-widest text-blue-400 uppercase mb-2">Portofolio</h2>
                            <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Project GitHub Saya</h3>
                            <p class="text-gray-400 mt-3 font-light">Proyek-proyek repositori yang saya kembangkan, disinkronkan secara langsung dari profil GitHub saya.</p>
                        </div>
                        <a href="https://github.com/anggrikacitra" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-purple-400 hover:text-purple-300 mt-6 md:mt-0 transition-colors duration-300 group">
                            <span>Kunjungi GitHub Profil</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>

                    <!-- Repository Cards Grid Container -->
                    <div id="github-repos-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Initial Skeleton Loading Cards -->
                        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl animate-pulse">
                            <div class="h-6 bg-white/10 rounded w-2/3 mb-4"></div>
                            <div class="h-4 bg-white/10 rounded w-full mb-2"></div>
                            <div class="h-4 bg-white/10 rounded w-5/6 mb-6"></div>
                            <div class="flex items-center justify-between">
                                <div class="h-4 bg-white/10 rounded w-1/4"></div>
                                <div class="h-4 bg-white/10 rounded w-1/4"></div>
                            </div>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl animate-pulse">
                            <div class="h-6 bg-white/10 rounded w-2/3 mb-4"></div>
                            <div class="h-4 bg-white/10 rounded w-full mb-2"></div>
                            <div class="h-4 bg-white/10 rounded w-5/6 mb-6"></div>
                            <div class="flex items-center justify-between">
                                <div class="h-4 bg-white/10 rounded w-1/4"></div>
                                <div class="h-4 bg-white/10 rounded w-1/4"></div>
                            </div>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl animate-pulse">
                            <div class="h-6 bg-white/10 rounded w-2/3 mb-4"></div>
                            <div class="h-4 bg-white/10 rounded w-full mb-2"></div>
                            <div class="h-4 bg-white/10 rounded w-5/6 mb-6"></div>
                            <div class="flex items-center justify-between">
                                <div class="h-4 bg-white/10 rounded w-1/4"></div>
                                <div class="h-4 bg-white/10 rounded w-1/4"></div>
                            </div>
                        </div>

                    </div>
                </section>


                <!-- CONTACT SECTION -->
                <section id="contact" class="max-w-7xl mx-auto px-6 py-24 border-t border-white/5 relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 via-transparent to-blue-500/5 blur-[120px] pointer-events-none"></div>
                    
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <h2 class="text-xs font-bold tracking-widest text-purple-400 uppercase mb-2">Hubungi</h2>
                        <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Mari Bekerja Sama</h3>
                        <p class="text-gray-400 mt-4 font-light">Punya tawaran proyek atau ingin berdiskusi? Silakan hubungi saya secara langsung melalui kontak di bawah ini.</p>
                    </div>

                    <!-- Centered Contact Cards Grid (3 Columns) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto items-stretch">
                        
                        <!-- Email Info Box -->
                        <div class="bg-white/5 border border-white/10 p-8 rounded-3xl backdrop-blur-md flex flex-col justify-between hover:border-purple-500/40 hover:bg-white/[0.07] transition-all duration-300 shadow-xl group">
                            <div>
                                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <!-- Envelope SVG -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <h4 class="text-lg font-bold text-white">Email Langsung</h4>
                                <p id="email-address" class="text-sm text-gray-400 font-mono-tech break-all mt-2">anggrikacitra@gmail.com</p>
                            </div>
                            <div class="flex items-center gap-3 mt-8 pt-4 border-t border-white/5 text-xs">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=anggrikacitra@gmail.com" class="px-4 py-2 rounded-xl bg-purple-600 hover:bg-purple-500 text-white font-semibold transition-colors duration-200">Tulis Email</a>
                                <button onclick="copyToClipboard('anggrikacitra@gmail.com')" class="px-4 py-2 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 hover:border-white/20 text-gray-300 font-semibold transition-all duration-200">Copy Email</button>
                            </div>
                        </div>

                        <!-- Social Links Card -->
                        <div class="bg-white/5 border border-white/10 p-8 rounded-3xl backdrop-blur-md flex flex-col justify-between hover:border-purple-500/40 hover:bg-white/[0.07] transition-all duration-300 shadow-xl group">
                            <div>
                                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <!-- Link SVG -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                </div>
                                <h4 class="text-lg font-bold text-white">Media Sosial</h4>
                                <p class="text-gray-400 text-sm mt-2 leading-relaxed">Hubungkan di jejaring sosial saya.</p>
                            </div>
                            <div class="flex flex-wrap gap-3 mt-8 pt-4 border-t border-white/5">
                                <!-- GitHub -->
                                <a href="https://github.com/anggrikacitra" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 hover:border-purple-500/50 hover:bg-purple-500/10 flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300" title="GitHub">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C19.137 20.162 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                                </a>
                                <!-- Email -->
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=anggrikacitra@gmail.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 hover:border-blue-500/50 hover:bg-blue-500/10 flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300" title="Kirim Email via Gmail">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </a>
                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/in/ni-km-citra-anggrika-pratiwi-983654358" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 hover:border-blue-600/50 hover:bg-blue-600/10 flex items-center justify-center text-gray-400 hover:text-blue-400 transition-all duration-300" title="LinkedIn">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <!-- Instagram -->
                                <a href="https://instagram.com/citraanggrika" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 hover:border-pink-500/50 hover:bg-pink-500/10 flex items-center justify-center text-gray-400 hover:text-pink-400 transition-all duration-300" title="Instagram">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>

            </main>

          <!-- FOOTER -->
<footer class="w-full border-t border-white/5 bg-black/40 backdrop-blur-md py-8">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p class="text-xs sm:text-sm text-gray-500">
            &copy; 2026 Citra Anggrika. All rights reserved.
        </p>
    </div>
</footer>

            <!-- Copied Toast Notification -->
            <div id="toast" class="fixed bottom-6 right-6 px-4 py-3 rounded-xl bg-[#0b0f19] border border-green-500/30 text-green-400 text-xs sm:text-sm shadow-2xl flex items-center gap-2 transform translate-y-12 opacity-0 pointer-events-none transition-all duration-300 z-50">
                <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span id="toast-message">Email berhasil disalin!</span>
            </div>

        </div>

        <script>
            // Sticky Navbar and Mouse Radial Glow Interaction
            const header = document.querySelector('header');
            const bgGlow = document.getElementById('bg-glow');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    header.classList.add('shadow-lg', 'bg-black/60', 'py-1');
                } else {
                    header.classList.remove('shadow-lg', 'bg-black/60', 'py-1');
                }
            });

            window.addEventListener('mousemove', (e) => {
                const x = e.clientX;
                const y = e.clientY;
                bgGlow.style.background = `radial-gradient(circle 500px at ${x}px ${y}px, rgba(147, 51, 234, 0.12), rgba(59, 130, 246, 0.04), transparent 80%)`;
            });

            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close mobile menu on clicking nav-links
            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });

            // Copy to Clipboard Utility
            function copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(() => {
                    showToast("Email berhasil disalin ke clipboard!");
                }).catch(() => {
                    showToast("Gagal menyalin email.");
                });
            }

            function showToast(message) {
                const toast = document.getElementById('toast');
                const toastMsg = document.getElementById('toast-message');
                toastMsg.innerText = message;
                
                toast.classList.remove('translate-y-12', 'opacity-0', 'pointer-events-none');
                toast.classList.add('translate-y-0', 'opacity-100');
                
                setTimeout(() => {
                    toast.classList.remove('translate-y-0', 'opacity-100');
                    toast.classList.add('translate-y-12', 'opacity-0', 'pointer-events-none');
                }, 3000);
            }



            // Fetch GitHub Repositories Dynamically
            const username = 'anggrikacitra';
            const reposContainer = document.getElementById('github-repos-container');

            // Map of languages to color badges
            const langColors = {
                'PHP': 'bg-purple-500',
                'JavaScript': 'bg-yellow-500',
                'TypeScript': 'bg-blue-500',
                'Python': 'bg-blue-600',
                'HTML': 'bg-red-500',
                'CSS': 'bg-indigo-500',
                'Astro': 'bg-orange-500',
                'Vue': 'bg-emerald-500',
                'C++': 'bg-pink-500',
                'Blade': 'bg-red-600'
            };

            // Fallback Static Projects in case API fails or hits rate-limiting
            const fallbackProjects = [
                {
                    name: 'e-commerce-laravel',
                    description: 'A robust e-commerce application built with Laravel framework, integrating interactive product lists, authentication, and shopping cart operations.',
                    stargazers_count: 5,
                    forks_count: 2,
                    language: 'PHP',
                    html_url: `https://github.com/${username}/e-commerce-laravel`
                },
                {
                    name: 'portfolio-astro',
                    description: 'A blazing fast portfolio template designed with Astro JS, utilizing Tailwind CSS for styling and smooth client-side transitions.',
                    stargazers_count: 3,
                    forks_count: 1,
                    language: 'Astro',
                    html_url: `https://github.com/${username}/portfolio-astro`
                },
                {
                    name: 'data-analysis-python',
                    description: 'Python script utility for analyzing database structures, featuring data processing, model diagrams generation, and database export features.',
                    stargazers_count: 2,
                    forks_count: 0,
                    language: 'Python',
                    html_url: `https://github.com/${username}/data-analysis-python`
                }
            ];

            function renderRepos(repos) {
                reposContainer.innerHTML = '';
                
                if (repos.length === 0) {
                    reposContainer.innerHTML = `
                        <div class="col-span-full text-center py-12 text-gray-500">
                            Tidak ada repository publik yang ditemukan.
                        </div>
                    `;
                    return;
                }

                // Render top 6 repositories
                repos.slice(0, 6).forEach(repo => {
                    const langColor = langColors[repo.language] || 'bg-gray-500';
                    const desc = repo.description || 'Tidak ada deskripsi yang disediakan untuk proyek ini.';
                    
                    const card = document.createElement('div');
                    card.className = 'bg-white/5 border border-white/10 hover:border-purple-500/30 p-6 rounded-2xl backdrop-blur-md hover:-translate-y-1 hover:bg-white/[0.07] transition-all duration-300 flex flex-col justify-between group shadow-xl';
                    
                    card.innerHTML = `
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <svg class="w-7 h-7 text-gray-400 group-hover:text-purple-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                                <a href="${repo.html_url}" target="_blank" class="p-1.5 rounded-lg bg-white/5 border border-white/10 text-gray-400 hover:text-white hover:border-purple-500/50 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                            </div>
                            <h4 class="text-lg font-bold text-white group-hover:text-purple-400 transition-colors break-all leading-tight">${repo.name}</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mt-3 font-light leading-relaxed line-clamp-3">${desc}</p>
                        </div>
                        
                        <div class="mt-8 pt-4 border-t border-white/5 flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center gap-1.5 font-medium">
                                <span class="w-2 h-2 rounded-full ${langColor}"></span>
                                ${repo.language || 'HTML/CSS'}
                            </span>
                            <div class="flex items-center gap-3 font-mono-tech">
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    ${repo.stargazers_count}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                                    ${repo.forks_count}
                                </span>
                            </div>
                        </div>
                    `;
                    reposContainer.appendChild(card);
                });
            }

            // Fetch request
            fetch(`https://api.github.com/users/${username}/repos?sort=updated&per_page=12`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('API request failed');
                    }
                    return response.json();
                })
                .then(data => {
                    // Filter out forks if you only want original projects, or show all
                    const originalRepos = data.filter(repo => !repo.fork);
                    // If no original repos, use all repos
                    const reposToShow = originalRepos.length > 0 ? originalRepos : data;
                    renderRepos(reposToShow);
                })
                .catch(error => {
                    console.warn("GitHub fetch failed, rendering fallbacks:", error);
                    renderRepos(fallbackProjects);
                });
        </script>
    </body>
</html>
