<x-app-layout title="Kontak" :profile="$profile">

    {{-- Page Header --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white tracking-tight">Kontak</h1>
        <p class="text-sm text-white/35 mt-1">Kirim pesan untuk berdiskusi atau kolaborasi.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5">

                @if (session('success'))
                    <div
                        class="mb-4 p-3 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-xs font-semibold text-white/30 mb-2" for="name">Nama</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="w-full bg-white/[0.04] border border-white/[0.08] rounded-lg px-3 py-2 text-white placeholder:text-white/30 focus:outline-none focus:border-violet-500/40"
                            placeholder="Nama kamu" required>
                        @error('name')
                            <p class="text-xs text-red-400 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-white/30 mb-2" for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="w-full bg-white/[0.04] border border-white/[0.08] rounded-lg px-3 py-2 text-white placeholder:text-white/30 focus:outline-none focus:border-violet-500/40"
                            placeholder="email@contoh.com" required>
                        @error('email')
                            <p class="text-xs text-red-400 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-white/30 mb-2" for="subject">Subjek</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                            class="w-full bg-white/[0.04] border border-white/[0.08] rounded-lg px-3 py-2 text-white placeholder:text-white/30 focus:outline-none focus:border-violet-500/40"
                            placeholder="Topik pesan" required>
                        @error('subject')
                            <p class="text-xs text-red-400 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-white/30 mb-2" for="message">Pesan</label>
                        <textarea name="message" id="message" rows="6"
                            class="w-full bg-white/[0.04] border border-white/[0.08] rounded-lg px-3 py-2 text-white placeholder:text-white/30 focus:outline-none focus:border-violet-500/40"
                            placeholder="Tulis pesan kamu..." required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-xs text-red-400 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-3">
                        <button type="submit"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-blue-600 text-white text-sm font-semibold hover:bg-red-500 transition">
                            Kirim Pesan
                        </button>

                        <span class="text-xs text-white/30">(Pengiriman email dinonaktifkan sampai MAIL_*
                            diaktifkan)</span>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                <h2 class="text-xs font-semibold text-white/30 uppercase tracking-widest mb-4">Info Kontak</h2>

                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-lg bg-white/[0.05] border border-white/[0.08] flex items-center justify-center text-violet-300">
                            <i class="ti ti-mail"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white/90">Email</p>
                            <p class="text-xs text-white/35">{{ $profile['email'] }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-lg bg-white/[0.05] border border-white/[0.08] flex items-center justify-center text-cyan-300">
                            <i class="ti ti-brand-github"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white/90">GitHub</p>
                            <a class="text-xs text-cyan-300 hover:underline" href="{{ $profile['github'] }}"
                                target="_blank" rel="noopener">{{ $profile['github'] }}</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div
                            class="w-9 h-9 rounded-lg bg-white/[0.05] border border-white/[0.08] flex items-center justify-center text-emerald-300">
                            <i class="ti ti-brand-linkedin"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white/90">LinkedIn</p>
                            <a class="text-xs text-emerald-300 hover:underline" href="{{ $profile['linkedin'] }}"
                                target="_blank" rel="noopener">{{ $profile['linkedin'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>