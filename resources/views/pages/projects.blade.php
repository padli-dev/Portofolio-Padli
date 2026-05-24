<x-app-layout title="Proyek" :profile="$profile">

    <div x-data="{ activeFilter: 'all' }">

        {{-- Page Header --}}
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-white tracking-tight">Proyek</h1>
            <p class="text-sm text-white/35 mt-1">
                Beberapa project website dan aplikasi yang telah saya kembangkan selama perkuliahan.
            </p>
        </div>

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap gap-2 mb-6">
            @php
                $filters = [
                    ['key' => 'all', 'label' => 'Semua'],
                    ['key' => 'Laravel', 'label' => 'Laravel'],
                    ['key' => 'Web', 'label' => 'Web App'],
                    ['key' => 'UI', 'label' => 'UI/UX'],
                    ['key' => 'Java', 'label' => 'Java'],
                ];
            @endphp

            @foreach ($filters as $f)
                <button @click="activeFilter = '{{ $f['key'] }}'" :class="activeFilter === '{{ $f['key'] }}'
                                ? 'bg-blue-600/30 border-blue-500/50 text-blue-300'
                                : 'border-white/10 text-white/40 hover:text-white/70 hover:border-white/20'"
                    class="px-4 py-1.5 rounded-full border text-xs font-medium transition-all">

                    {{ $f['label'] }}
                </button>
            @endforeach
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

            @foreach ($projects as $project)

                <div x-show="activeFilter === 'all' || '{{ $project['tag'] }}'.includes(activeFilter)"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="card-hover bg-dark-800 border border-white/[0.07] rounded-xl p-5 flex flex-col">

                    {{-- Tag + Featured --}}
                    <div class="flex items-center justify-between mb-3">

                        <span class="inline-block text-[9px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide
                                    @if($project['tag_color'] === 'red') bg-red-500/15 text-red-400
                                    @elseif($project['tag_color'] === 'green') bg-emerald-500/15 text-emerald-400
                                    @elseif($project['tag_color'] === 'blue') bg-blue-500/15 text-violet-400
                                    @else bg-cyan-500/15 text-cyan-400
                                    @endif">

                            {{ $project['tag'] }}

                        </span>

                        @if($project['featured'])
                            <span
                                class="text-[9px] font-semibold px-2 py-0.5 rounded-full bg-amber-500/15 text-amber-400 border border-amber-500/20">
                                ✦ Featured
                            </span>
                        @endif
                    </div>

                    {{-- Title --}}
                    <h3 class="text-sm font-semibold text-white/90 mb-2">
                        {{ $project['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-xs text-white/35 leading-relaxed flex-1">
                        {{ $project['description'] }}
                    </p>

                    {{-- Footer --}}
                    <div class="flex items-center gap-2 mt-4 pt-4 border-t border-white/[0.06]">

                        <span class="w-2 h-2 rounded-full flex-shrink-0
                                    @if($project['lang_color'] === 'red') bg-red-400
                                    @elseif($project['lang_color'] === 'green') bg-emerald-400
                                    @else bg-cyan-400
                                    @endif"></span>

                        <span class="text-[10px] text-white/30">
                            {{ $project['language'] }}
                        </span>

                        @if(isset($project['tech']))
                            <div class="flex items-center gap-1 text-[10px] text-white/25 ml-2">
                                <i class="ti ti-code text-xs"></i>
                                {{ $project['tech'] }}
                            </div>
                        @endif

                        <div class="flex items-center gap-2 ml-auto">

                            {{-- Github --}}
                            <a href="{{ $project['github'] }}" target="_blank"
                                class="w-7 h-7 flex items-center justify-center rounded-md border border-white/10 text-white/35 hover:text-white hover:border-white/25 transition-all">

                                <i class="ti ti-brand-github text-sm"></i>
                            </a>

                            {{-- Demo --}}
                            <a href="{{ $project['demo'] }}" target="_blank"
                                class="w-7 h-7 flex items-center justify-center rounded-md border border-white/10 text-white/35 hover:text-blue-400 hover:border-blue-400/30 transition-all">

                                <i class="ti ti-external-link text-sm"></i>
                            </a>

                        </div>
                    </div>

                </div>

            @endforeach

        </div>

        {{-- Empty State --}}
        <div x-show="activeFilter !== 'all'" class="text-center py-12" style="display:none">

            <i class="ti ti-mood-empty text-4xl text-white/10 block mb-2"></i>

            <p class="text-sm text-white/25">
                Tidak ada project dengan filter ini.
            </p>

        </div>

    </div>

</x-app-layout>