<x-app-layout title="Dashboard" :profile="$profile">

    {{-- Page Header --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white tracking-tight">
            Welcome, {{ explode(' ', $profile['name'])[0] }} 👋
        </h1>
        <p class="text-sm text-white/35 mt-1">
            Portfolio mahasiswa Teknik Informatika dan web developer learner.
        </p>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 mb-6">
        @foreach ($stats as $stat)
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-4">
                <p class="text-[10px] font-semibold text-white/35 uppercase tracking-widest mb-2">
                    {{ $stat['label'] }}
                </p>

                <p class="text-2xl font-bold tracking-tight
                        @if($stat['color'] === 'blue') text-blue-400
                        @elseif($stat['color'] === 'cyan') text-cyan-400
                        @elseif($stat['color'] === 'green') text-emerald-400
                        @else text-white/90
                        @endif">
                    {{ $stat['value'] }}
                </p>

                <p class="text-[10px] text-white/25 mt-1">
                    {{ $stat['delta'] }}
                </p>
            </div>
        @endforeach
    </div>

    {{-- Featured Projects --}}
    <div class="mb-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xs font-semibold text-white/40 uppercase tracking-widest">
                Featured Projects
            </h2>

            <a href="{{ route('projects') }}"
                class="text-xs text-blue-400 hover:text-blue-300 flex items-center gap-1 transition-colors">
                Lihat semua
                <i class="ti ti-arrow-right text-sm"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            @foreach ($projects as $project)
                <div class="card-hover bg-dark-800 border border-white/[0.07] rounded-xl p-4">

                    {{-- Tag --}}
                    <span class="inline-block text-[9px] font-bold px-2 py-1 rounded-full uppercase tracking-wide mb-3
                            @if($project['tag_color'] === 'red') bg-red-500/15 text-red-400
                            @elseif($project['tag_color'] === 'green') bg-emerald-500/15 text-emerald-400
                            @elseif($project['tag_color'] === 'blue') bg-blue-500/15 text-blue-400
                            @else bg-cyan-500/15 text-cyan-400
                            @endif">

                        {{ $project['tag'] }}
                    </span>

                    {{-- Title --}}
                    <h3 class="text-sm font-semibold text-white/90 mb-1.5">
                        {{ $project['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-xs text-white/35 leading-relaxed">
                        {{ $project['description'] }}
                    </p>

                    {{-- Footer --}}
                    <div class="flex items-center gap-3 mt-4 pt-3 border-t border-white/[0.06]">

                        <div class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full
                                    @if($project['lang_color'] === 'red') bg-red-400
                                    @elseif($project['lang_color'] === 'green') bg-emerald-400
                                    @else bg-cyan-400
                                    @endif"></span>

                            <span class="text-[10px] text-white/30">
                                {{ $project['language'] }}
                            </span>
                        </div>

                        <div class="ml-auto text-[10px] text-white/25">
                            {{ $project['tech'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Top Skills --}}
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xs font-semibold text-white/40 uppercase tracking-widest">
                Top Skills
            </h2>

            <a href="{{ route('skills') }}"
                class="text-xs text-blue-400 hover:text-blue-300 flex items-center gap-1 transition-colors">
                Lihat semua
                <i class="ti ti-arrow-right text-sm"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach (array_slice($skills['Frontend'], 0, 2) as $skill)
                <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-3.5">

                    <div class="flex justify-between items-center mb-2">
                        <p class="text-xs font-medium text-white/80">
                            {{ $skill['name'] }}
                        </p>

                        <p class="text-[10px] text-white/30">
                            {{ $skill['percent'] }}%
                        </p>
                    </div>

                    <div class="h-1 bg-white/[0.07] rounded-full overflow-hidden">
                        <div class="h-1 rounded-full skill-bar-fill"
                            style="width: {{ $skill['percent'] }}%; background: {{ $skill['color'] }}">
                        </div>
                    </div>

                </div>
            @endforeach

            @foreach (array_slice($skills['Backend'], 0, 2) as $skill)
                <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-3.5">

                    <div class="flex justify-between items-center mb-2">
                        <p class="text-xs font-medium text-white/80">
                            {{ $skill['name'] }}
                        </p>

                        <p class="text-[10px] text-white/30">
                            {{ $skill['percent'] }}%
                        </p>
                    </div>

                    <div class="h-1 bg-white/[0.07] rounded-full overflow-hidden">
                        <div class="h-1 rounded-full skill-bar-fill"
                            style="width: {{ $skill['percent'] }}%; background: {{ $skill['color'] }}">
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

</x-app-layout>