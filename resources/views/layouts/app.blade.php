<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: true, mobileSidebarOpen: false }" :class="{ 'sidebar-collapsed': !sidebarOpen }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Portfolio' }} — {{ $profile['name'] }}</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Tabler Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sora: ['Sora', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        dark: {
                            900: '#0a0a0f',
                            800: '#0f0e17',
                            700: '#16151f',
                            600: '#1e1c2a',
                        },
                    },
                }
            }
        }
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --bg: #070b14;
            --bg2: #0f172a;
            --card: rgba(255, 255, 255, 0.04);

            --blue: #4500e4;
            --blue: #051c7a;
            --cyan: #06b6d4;

            --border: rgba(255, 255, 255, 0.08);
            --text: #f8fafc;
            --muted: rgba(255, 255, 255, 0.45);
        }

        body {
            font-family: 'Sora', sans-serif;
            background:
                radial-gradient(circle at top left,
                    rgba(139, 92, 246, 0.18),
                    transparent 25%),

                radial-gradient(circle at bottom right,
                    rgba(6, 182, 212, 0.12),
                    transparent 25%),

                var(--bg);

            color: var(--text);
            overflow-x: hidden;
        }

        /* ===== SCROLLBAR ===== */

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(168, 85, 247, 0.45);
            border-radius: 20px;
        }

        /* ===== SIDEBAR ===== */

        .sidebar {
            backdrop-filter: blur(24px);

            background:
                linear-gradient(180deg,
                    rgba(15, 23, 42, .96),
                    rgba(2, 6, 23, .94));

            border-right: 1px solid rgba(255, 255, 255, .06);

            box-shadow:
                10px 0 40px rgba(0, 0, 0, .35);

            transition:
                width .3s ease,
                transform .3s ease;
        }

        .sidebar-text {
            transition: .25s;
            white-space: nowrap;
            overflow: hidden;
            color: white;
        }

        /* ===== NAVIGATION ===== */

        .sidebar nav a {
            position: relative;
            overflow: hidden;
        }

        .sidebar nav a::before {
            content: "";
            position: absolute;
            inset: 0;

            background:
                linear-gradient(90deg,
                    rgba(59, 130, 246, .16),
                    transparent);

            opacity: 0;
            transition: .3s;
        }

        .sidebar nav a:hover::before {
            opacity: 1;
        }

        /* ===== ACTIVE MENU ===== */

        .nav-active-bar {
            transition: .2s;
        }

        /* ===== CARD ===== */

        .card-hover {
            position: relative;
            overflow: hidden;

            background:
                linear-gradient(180deg,
                    rgba(255, 255, 255, .04),
                    rgba(255, 255, 255, .02));

            border: 1px solid rgba(255, 255, 255, .06);

            backdrop-filter: blur(20px);

            transition:
                transform .35s ease,
                border-color .35s ease,
                box-shadow .35s ease;
        }

        .card-hover:hover {

            transform: translateY(-8px);

            border-color:
                blue;

            box-shadow:
                0 15px 40px rgba(37, 99, 235, .15);
        }

        .card-hover::before {
            content: "";
            position: absolute;
            inset: 0;

            background:
                linear-gradient(135deg,
                    rgba(168, 85, 247, 0.12),
                    transparent 40%);

            opacity: 0;
            transition: .3s;
            border: 2px solid blue;
        }

        .card-hover:hover::before {
            opacity: 1;
        }

        .card-hover:hover {
            transform: translateY(-5px);

            border-color: rgba(168, 85, 247, 0.35);

            background: rgba(255, 255, 255, 0.05);
        }

        /* ===== GLOW ===== */

        .glow-blue {
            box-shadow:
                0 0 30px rgba(139, 92, 246, 0.12),
                0 0 80px rgba(139, 92, 246, 0.08);
        }

        /* ===== TOPBAR ===== */

        header {

            backdrop-filter: blur(24px);

            background:
                rgba(2, 6, 23, .72);

            border-bottom:
                1px solid rgba(255, 255, 255, .05);

            box-shadow:
                0 10px 30px rgba(0, 0, 0, .2);
        }

        /* ===== BUTTON ===== */

        button,
        .btn-modern {
            transition: .25s ease;
        }

        button:hover,
        .btn-modern:hover {
            transform: translateY(-2px);
        }

        /* ===== INPUT ===== */

        input,
        textarea {
            background: rgba(255, 255, 255, 0.04) !important;

            border: 1px solid rgba(255, 255, 255, 0.08) !important;

            color: white !important;

            outline: none !important;

            transition: .25s;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        input:focus,
        textarea:focus {
            border-color: rgba(25, 3, 227, 0.95) !important;

            box-shadow:
                0 0 0 4px rgba(168, 85, 247, 0.12);
        }

        /* ===== SKILL BAR ===== */

        .skill-bar-fill {
            animation: fillBar 1.2s ease forwards;
            border-radius: 999px;
        }

        @keyframes fillBar {
            from {
                width: 0;
            }
        }

        /* ===== FADE ANIMATION ===== */

        .fade-in {
            animation: fadeIn .5s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== MOBILE ===== */

        @media(max-width: 1024px) {

            .sidebar {
                position: fixed;
                z-index: 50;
            }

            .btn-glow {
                background:
                    linear-gradient(135deg,
                        #2563eb,
                        #4f46e5);

                box-shadow:
                    0 0 25px rgba(37, 99, 235, .35);

                transition: .3s ease;
            }

            .btn-glow:hover {

                transform: translateY(-2px) scale(1.02);

                box-shadow:
                    0 0 40px rgba(59, 130, 246, .45);
            }

            .fade-in {
                animation: fadeUp .7s ease;
            }

            @keyframes fadeUp {

                from {
                    opacity: 0;
                    transform: translateY(25px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden bg-[#070B14] text-white">

    <!-- FUTURISTIC BG -->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <!-- GRID -->
        <div class="absolute inset-0 opacity-[0.05]" style="
            background-image:
            linear-gradient(rgba(255,255,255,.15) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.15) 1px, transparent 1px);
            background-size: 45px 45px;
        ">
        </div>

        <!-- GLOW 1 -->
        <div class="absolute top-[-200px] left-[-150px]
        w-[450px] h-[450px]
        bg-blue-600/20 blur-[120px] rounded-full">
        </div>

        <!-- GLOW 2 -->
        <div class="absolute bottom-[-200px] right-[-150px]
        w-[450px] h-[450px]
        bg-violet-600/20 blur-[120px] rounded-full">
        </div>

    </div>

    <!-- BACKGROUND EFFECT -->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <!-- Gradient -->
        <div class="absolute top-[-200px] left-[-200px] w-[500px] h-[500px]
        bg-blue-600/20 blur-[120px] rounded-full">
        </div>

        <div class="absolute bottom-[-200px] right-[-200px] w-[500px] h-[500px]
        bg-violet-600/20 blur-[120px] rounded-full">
        </div>

        <!-- Grid -->
        <div class="absolute inset-0 opacity-[0.05]" style="
            background-image:
            linear-gradient(rgba(255,255,255,.15) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.15) 1px, transparent 1px);
            background-size: 45px 45px;
        ">
        </div>

    </div>

    {{-- ═══════════════════════════════════════
    OVERLAY mobile
    ═══════════════════════════════════════ --}}
    <div x-show="mobileSidebarOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" @click="mobileSidebarOpen = false"
        class="fixed inset-0 bg-black/60 z-20 lg:hidden" style="display:none"></div>

    {{-- ═══════════════════════════════════════
    SIDEBAR
    ═══════════════════════════════════════ --}}
    <aside class="sidebar fixed lg:relative z-30 flex flex-col justify-between h-full
    bg-dark-800 border-r border-white/[0.07] flex-shrink-0
    transition-all duration-300" :class="{
        'translate-x-0': mobileSidebarOpen || window.innerWidth >= 1024,
        '-translate-x-full': !mobileSidebarOpen && window.innerWidth < 1024,
        'lg:w-[220px] w-[220px]': sidebarOpen,
        'lg:w-[60px] w-[220px]': !sidebarOpen
    }">

        {{-- Logo --}}
        <div class="flex items-center gap-3 px-4 py-5 border-b border-white/[0.07]">
            <div
                class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-600 to-blue-500 flex items-center justify-center font-mono text-xs font-semibold text-white flex-shrink-0">
                {{ $profile['initials'] }}
            </div>
            <span class="sidebar-text font-semibold text-sm text-white/90"
                :class="sidebarOpen ? 'opacity-100 w-auto' : 'opacity-0 w-0'">
                {{ $profile['name'] }}
            </span>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 flex flex-col px-2 py-4 overflow-y-auto">
            {{-- Main Section --}}
            <p class="sidebar-text px-2 pb-2 text-[9px] font-semibold text-white/25 tracking-widest uppercase"
                :class="sidebarOpen ? 'opacity-100' : 'opacity-0'">Main</p>

            @php
                $navItems = [
                    ['route' => 'dashboard', 'icon' => 'ti-layout-dashboard', 'label' => 'Dashboard'],
                    ['route' => 'about', 'icon' => 'ti-user', 'label' => 'Tentang Saya'],
                    ['route' => 'projects', 'icon' => 'ti-code', 'label' => 'Proyek', 'badge' => '6'],
                    ['route' => 'skills', 'icon' => 'ti-chart-radar', 'label' => 'Keterampilan'],
                ];
            @endphp

            @foreach ($navItems as $item)
                @php $isActive = request()->routeIs($item['route']); @endphp
                <a href="{{ route($item['route']) }}"
                    class="relative flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-150 group
                                                                                                                                                                                                                                                                                                                  {{ $isActive ? 'bg-violbg-blue-500/10 text-blue-400 border border-blue-500/20' : 'text-white/50 hover:bg-white/[0.06] hover:text-white/80' }}">
                    @if($isActive)
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 w-0.5 h-5 bg-blue-400 rounded-r-full"></span>
                    @endif
                    <i class="ti {{ $item['icon'] }} text-lg flex-shrink-0 {{ $isActive ? 'text-blue-400' : '' }}"></i>
                    <span class="sidebar-text text-[13px] font-medium"
                        :class="sidebarOpen ? 'opacity-100 w-auto' : 'opacity-0 w-0'">
                        {{ $item['label'] }}
                    </span>
                    @if(isset($item['badge']))
                        <span
                            class="sidebar-text ml-auto bg-violet-600 text-white text-[9px] font-bold px-1.5 py-0.5 rounded-full"
                            :class="sidebarOpen ? 'opacity-100' : 'opacity-0'">
                            {{ $item['badge'] }}
                        </span>
                    @endif
                </a>
            @endforeach

            {{-- More Section --}}
            <p class="sidebar-text px-2 pt-4 pb-2 text-[9px] font-semibold text-white/25 tracking-widest uppercase"
                :class="sidebarOpen ? 'opacity-100' : 'opacity-0'">More</p>

            @php
                $moreItems = [
                    ['route' => 'experience', 'icon' => 'ti-briefcase', 'label' => 'Pengalaman'],
                    ['route' => 'contact', 'icon' => 'ti-mail', 'label' => 'Kontak'],
                ];
            @endphp

            @foreach ($moreItems as $item)
                @php $isActive = request()->routeIs($item['route']); @endphp
                <a href="{{ route($item['route']) }}"
                    class="relative flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-150
                                                                                                                                                                                                                                                                        {{ $isActive ? 'bg-violet-600/20 text-blue-400' : 'text-white/50 hover:bg-white/[0.06] hover:text-white/80' }}">

                    @if($isActive)
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 w-0.5 h-5 bg-blue-400 rounded-r-full"></span>
                    @endif

                    <i class="ti {{ $item['icon'] }} text-lg flex-shrink-0"></i>

                    <span class="sidebar-text text-[13px] font-medium"
                        :class="sidebarOpen ? 'opacity-100 w-auto' : 'opacity-0 w-0'">
                        {{ $item['label'] }}
                    </span>
                </a>
            @endforeach
            
            {{-- Back To Home --}}
            <a href="/" class="w-full relative flex items-center gap-3 px-3 py-2.5 rounded-lg
    transition-all duration-150 text-white/50 hover:bg-white/[0.06]
    hover:text-white/80">

                <i class="ti ti-arrow-left text-lg flex-shrink-0"></i>

                <span class="sidebar-text text-[13px] font-medium"
                    :class="sidebarOpen ? 'opacity-100 w-auto' : 'opacity-0 w-0'">
                    Kembali
                </span>
            </a>

            {{-- Profile mini --}}
            <div class="mt-auto px-2 py-3 border-t border-white/[0.07]">
                <div
                    class="flex items-center gap-2.5 px-3 py-2 rounded-lg hover:bg-white/[0.05] cursor-pointer transition-all">
                    <div
                        class="w-8 h-8 rounded-full bg-gradient-to-br from-violet-600 to-cyan-500 flex items-center justify-center text-xs font-semibold text-white flex-shrink-0">
                        {{ $profile['initials'] }}
                    </div>
                    <div class="sidebar-text overflow-hidden"
                        :class="sidebarOpen ? 'opacity-100 w-auto' : 'opacity-0 w-0'">
                        <p class="text-xs font-semibold text-white/90 leading-tight">{{ $profile['name'] }}</p>
                        <p class="text-[10px] text-white/35 leading-tight">{{ $profile['title'] }}</p>
                    </div>
                </div>
            </div>
    </aside>

    {{-- ═══════════════════════════════════════
    MAIN CONTENT
    ═══════════════════════════════════════ --}}
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

        {{-- Topbar --}}
        <header class="h-[60px] flex items-center gap-3 px-5 border-b border-white/[0.07] bg-black/30 flex-shrink-0">
            <button @click="sidebarOpen = !sidebarOpen" class="hidden lg:flex w-9 h-9 items-center justify-center rounded-lg
    border border-white/[0.08]
    hover:bg-white/[0.06] transition-all">

                <i class="ti ti-layout-sidebar-left-collapse text-lg"></i>
            </button>
            {{-- Toggle sidebar button --}}
            <button @click="mobileSidebarOpen = !mobileSidebarOpen" class="w-9 h-9 flex items-center justify-center rounded-lg
    border border-white/[0.08]
    hover:bg-white/[0.06] transition-all lg:hidden">

                <i class="ti ti-menu-2 text-lg"></i>
            </button>

            {{-- Breadcrumb --}}
            <div class="flex-1 text-xs text-white">
                Portfolio / <span class="text-blue-400">{{ $title ?? 'Dashboard' }}</span>
            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-2">

                {{-- Github --}}
                <a href="{{ $profile['github'] }}" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-md
        border border-blue-500/30
        text-blue-300
        hover:text-white
        hover:bg-blue-500/20
        transition-all">

                    <i class="ti ti-brand-github text-lg"></i>
                </a>

                {{-- LinkedIn --}}
                <a href="{{ $profile['linkedin'] }}" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-md
        border border-cyan-500/30
        text-cyan-300
        hover:text-white
        hover:bg-cyan-500/20
        transition-all">

                    <i class="ti ti-brand-linkedin text-lg"></i>
                </a>

                {{-- Hire Me --}}
                <a href="{{ route('contact') }}" class="hidden sm:flex items-center gap-2
        px-4 py-2 rounded-xl
        bg-gradient-to-r from-blue-600 to-violet-600
        hover:from-blue-500 hover:to-violet-500
        text-white text-xs font-semibold
        transition-all">

                    <i class="ti ti-send text-sm"></i>
                    Hire Me
                </a>

            </div>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 fade-in">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
