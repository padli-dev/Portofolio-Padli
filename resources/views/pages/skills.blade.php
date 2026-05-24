<x-app-layout title="Skills" :profile="$profile">

    {{-- Page Header --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white tracking-tight">Keterampilan</h1>
        <p class="text-sm text-white/35 mt-1">Kemampuan teknis yang saya kuasai.</p>
    </div>

    <div class="space-y-5">
        @foreach ($skills as $category => $categorySkills)
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                <h2 class="text-[10px] font-semibold text-white/30 uppercase tracking-widest mb-4">{{ $category }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4">
                    @foreach ($categorySkills as $skill)
                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <span class="text-sm font-medium text-white/80">{{ $skill['name'] }}</span>
                                <span class="text-xs text-white/30 font-mono">{{ $skill['percent'] }}%</span>
                            </div>
                            <div class="h-1.5 bg-white/[0.06] rounded-full overflow-hidden">
                                <div class="h-1.5 rounded-full skill-bar-fill"
                                    style="width: {{ $skill['percent'] }}%; background: {{ $skill['color'] }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    {{-- Legend --}}
    <div class="mt-5 bg-dark-800 border border-white/[0.07] rounded-xl p-4">
        <p class="text-[10px] font-semibold text-white/30 uppercase tracking-widest mb-3">Keterangan Level</p>
        <div class="flex flex-wrap gap-x-6 gap-y-2">
            @php
                $levels = [
                    ['range' => '90–100%', 'label' => 'Expert', 'color' => 'bg-purple-400'],
                    ['range' => '75–89%', 'label' => 'Advanced', 'color' => 'bg-cyan-400'],
                    ['range' => '60–74%', 'label' => 'Intermediate', 'color' => 'bg-emerald-400'],
                    ['range' => '< 60%', 'label' => 'Beginner', 'color' => 'bg-white/30'],
                ];
            @endphp
            @foreach ($levels as $level)
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full {{ $level['color'] }}"></span>
                    <span class="text-xs text-white/40">{{ $level['range'] }} — {{ $level['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>