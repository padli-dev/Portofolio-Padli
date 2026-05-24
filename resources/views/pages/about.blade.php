<x-app-layout title="Tentang Saya" :profile="$profile">

    {{-- Page Header --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white tracking-tight">Tentang Saya</h1>
        <p class="text-sm text-white/35 mt-1">Kenalan lebih dekat sama saya.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

        {{-- ─── Left: Profile Card ─── --}}
        <div class="lg:col-span-1 space-y-4">

            {{-- Avatar & Name --}}
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5 text-center">
                <div
                    class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-2xl font-bold text-white mx-auto mb-3">
                    {{ $profile['initials'] }}
                </div>
                <h2 class="text-base font-bold text-white/90">{{ $profile['name'] }}</h2>
                <p class="text-xs text-blue-400 mt-0.5">{{ $profile['title'] }}</p>
                <div class="flex items-center justify-center gap-1.5 mt-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-[11px] text-emerald-400">{{ $profile['status'] }}</span>
                </div>
                <div class="flex justify-center gap-3 mt-4">
                    <a href="{{ $profile['github'] }}" target="_blank"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-white/50 hover:text-white hover:border-white/25 transition-all">
                        <i class="ti ti-brand-github text-base"></i>
                    </a>
                    <a href="{{ $profile['linkedin'] }}" target="_blank"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-white/50 hover:text-cyan-400 hover:border-cyan-400/30 transition-all">
                        <i class="ti ti-brand-linkedin text-base"></i>
                    </a>
                    <a href="mailto:{{ $profile['email'] }}"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-white/50 hover:text-blue-400 hover:border-blue-400/30 transition-all">
                        <i class="ti ti-mail text-base"></i>
                    </a>
                </div>
            </div>

            {{-- Info --}}
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-4">
                <h3 class="text-[10px] font-semibold text-white/30 uppercase tracking-widest mb-3">Info</h3>
                @php
                    $infos = [
                        ['icon' => 'ti-school', 'key' => 'Universitas', 'val' => $profile['university']],
                        ['icon' => 'ti-book', 'key' => 'Jurusan', 'val' => $profile['major']],
                        ['icon' => 'ti-calendar', 'key' => 'Semester', 'val' => 'Semester ' . $profile['semester']],
                        ['icon' => 'ti-mail', 'key' => 'Email', 'val' => $profile['email']],
                    ];
                @endphp
                @foreach ($infos as $info)
                    <div class="flex items-start gap-2.5 py-2.5 border-b border-white/[0.05] last:border-0">
                        <i class="ti {{ $info['icon'] }} text-sm text-blue-400/70 mt-0.5 flex-shrink-0"></i>
                        <div>
                            <p class="text-[10px] text-white/30">{{ $info['key'] }}</p>
                            <p class="text-xs font-medium text-white/80">{{ $info['val'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ─── Right: Bio & Tech Stack ─── --}}
        <div class="lg:col-span-2 space-y-4">

            {{-- Bio --}}
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                <h3 class="text-[10px] font-semibold text-white/30 uppercase tracking-widest mb-3">Bio</h3>
                <p class="text-sm text-white/50 leading-relaxed">{{ $profile['bio'] }}</p>
            </div>

            {{-- Tech Stack --}}
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                <h3 class="text-[10px] font-semibold text-white/30 uppercase tracking-widest mb-4">Tech Stack Favorit
                </h3>
                @php
                    $stacks = [
                        ['name' => 'Laravel 11', 'icon' => 'ti-brand-laravel', 'color' => 'text-red-400', 'bg' => 'bg-red-500/10', 'border' => 'border-red-500/20'],

                        ['name' => 'Node.js', 'icon' => 'ti-brand-nodejs', 'color' => 'text-emerald-400', 'bg' => 'bg-emerald-500/10', 'border' => 'border-emerald-500/20'],

                        ['name' => 'Bootstrap CSS', 'icon' => 'ti-brand-bootstrap', 'color' => 'text-cyan-400', 'bg' => 'bg-cyan-500/10', 'border' => 'border-cyan-500/20'],

                        ['name' => 'MySQL', 'icon' => 'ti-database', 'color' => 'text-orange-400', 'bg' => 'bg-orange-500/10', 'border' => 'border-orange-500/20'],

                        ['name' => 'CodeIgniter', 'icon' => 'ti-brand-codepen', 'color' => 'text-sky-400', 'bg' => 'bg-sky-500/10', 'border' => 'border-sky-500/20'],

                        ['name' => 'Figma', 'icon' => 'ti-brand-figma', 'color' => 'text-blue-400', 'bg' => 'bg-blue-500/10', 'border' => 'border-blue-500/20'],

                        ['name' => 'PHP', 'icon' => 'ti-brand-php', 'color' => 'text-white/60', 'bg' => 'bg-white/5', 'border' => 'border-white/10'],

                        ['name' => 'REST API', 'icon' => 'ti-api', 'color' => 'text-blue-400', 'bg' => 'bg-blue-500/10', 'border' => 'border-blue-500/20'],
                    ];
                @endphp
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
                    @foreach ($stacks as $stack)
                        <div
                            class="flex items-center gap-2 px-3 py-2.5 rounded-lg border {{ $stack['bg'] }} {{ $stack['border'] }}">
                            <i class="ti {{ $stack['icon'] }} text-base {{ $stack['color'] }}"></i>
                            <span class="text-xs font-medium text-white/70">{{ $stack['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Highlight Numbers --}}
            <div class="grid grid-cols-3 gap-3">
                @php
                    $highlights = [
                        ['value' => '6+', 'label' => 'Project selesai', 'icon' => 'ti-code', 'color' => 'text-blue-400'],
                        ['value' => '2+', 'label' => 'Tahun coding', 'icon' => 'ti-clock', 'color' => 'text-cyan-400'],
                        ['value' => '3', 'label' => 'Klien puas', 'icon' => 'ti-star', 'color' => 'text-amber-400'],
                    ];
                @endphp
                @foreach ($highlights as $h)
                    <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-4 text-center">
                        <i class="ti {{ $h['icon'] }} text-xl {{ $h['color'] }} mb-2 block"></i>
                        <p class="text-xl font-bold text-white/90">{{ $h['value'] }}</p>
                        <p class="text-[10px] text-white/30 mt-0.5">{{ $h['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>