<x-app-layout title="Experience" :profile="$profile">

    {{-- Page Header --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white tracking-tight">Pengalaman</h1>
        <p class="text-sm text-white/35 mt-1">
            Pengalaman project, pengembangan aplikasi, dan pembelajaran selama kuliah.
        </p>
    </div>

    {{-- Timeline --}}
    <div class="relative">

        {{-- Garis vertikal --}}
        <div class="absolute left-5 top-0 bottom-0 w-px bg-white/[0.07] hidden sm:block"></div>

        <div class="space-y-4">

            {{-- Project 1 --}}
            <div class="relative sm:pl-14">

                {{-- Icon --}}
                <div
                    class="hidden sm:flex absolute left-0 w-10 h-10 rounded-full border border-white/10 items-center justify-center bg-violet-600/20">
                    <i class="ti ti-shopping-cart text-blue-400 text-base"></i>
                </div>

                {{-- Card --}}
                <div class="card-hover bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                    <div class="flex flex-wrap items-start justify-between gap-2 mb-3">
                        <div>
                            <h3 class="text-sm font-semibold text-white/90">
                                E-Commerce Website Project (MY-SHOP)
                            </h3>
                            <p class="text-xs text-blue-400 mt-0.5">
                                Personal Project
                            </p>
                        </div>

                        <div class="text-right">
                            <p class="text-xs text-white/30">2026</p>

                            <span
                                class="inline-block text-[9px] font-semibold px-2 py-0.5 rounded-full mt-1 bg-violet-500/15 text-violet-400">
                                Project
                            </span>
                        </div>
                    </div>

                    <p class="text-xs text-white/40 leading-relaxed mb-3">
                        Mengembangkan website e-commerce berbasis web dengan fitur
                        pencarian produk, kategori produk, wishlist, keranjang belanja,
                        pelacakan pesanan, autentikasi pengguna (login & registrasi),
                        serta manajemen akun pengguna dengan tampilan modern dan responsif.
                    </p>

                    <div class="flex flex-wrap gap-1.5">
                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Laravel
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            MySQL
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Tailwind CSS
                        </span>
                    </div>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="relative sm:pl-14">

                {{-- Icon --}}
                <div
                    class="hidden sm:flex absolute left-0 w-10 h-10 rounded-full border border-white/10 items-center justify-center bg-cyan-600/20">
                    <i class="ti ti-building text-cyan-400 text-base"></i>
                </div>

                {{-- Card --}}
                <div class="card-hover bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                    <div class="flex flex-wrap items-start justify-between gap-2 mb-3">
                        <div>
                            <h3 class="text-sm font-semibold text-white/90">
                                Sistem Monitoring Kantor Berbasis Web (Sistem Monitoring WP Law )
                            </h3>
                            <p class="text-xs text-blue-400 mt-0.5">
                                Personal Project
                            </p>
                        </div>

                        <div class="text-right">
                            <p class="text-xs text-white/30">2026</p>

                            <span
                                class="inline-block text-[9px] font-semibold px-2 py-0.5 rounded-full mt-1 bg-cyan-500/15 text-cyan-400">
                                Web App
                            </span>
                        </div>
                    </div>

                    <p class="text-xs text-white/40 leading-relaxed mb-3">
                        Membuat aplikasi monitoring kantor berbasis web untuk
                        pengelolaan data Kebersihan Ruangan ,Pengelalolaan Stok Kebutuhan Barang, laporan aktivitas
                        Adminstrasi,
                        dan dashboard monitoring.
                    </p>

                    <div class="flex flex-wrap gap-1.5">
                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Laravel
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Bootstrap
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            MySQL
                        </span>
                    </div>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="relative sm:pl-14">

                {{-- Icon --}}
                <div
                    class="hidden sm:flex absolute left-0 w-10 h-10 rounded-full border border-white/10 items-center justify-center bg-emerald-600/20">
                    <i class="ti ti-chef-hat text-emerald-400 text-base"></i>
                </div>

                {{-- Card --}}
                <div class="card-hover bg-dark-800 border border-white/[0.07] rounded-xl p-5">
                    <div class="flex flex-wrap items-start justify-between gap-2 mb-3">
                        <div>
                            <h3 class="text-sm font-semibold text-white/90">
                                Website Restoran Menggunakan Metode Scan Qris (Double - C)
                            </h3>
                            <p class="text-xs text-blue-400 mt-0.5">
                                Personal Project
                            </p>
                        </div>

                        <div class="text-right">
                            <p class="text-xs text-white/30">2026</p>

                            <span
                                class="inline-block text-[9px] font-semibold px-2 py-0.5 rounded-full mt-1 bg-emerald-500/15 text-emerald-400">
                                Web App
                            </span>
                        </div>
                    </div>

                    <p class="text-xs text-white/40 leading-relaxed mb-3">
                        Mendesain dan membangun website restoran modern dengan
                        fitur daftar menu, reservasi, kontak, dan tampilan
                        responsif untuk perangkat mobile maupun desktop.
                    </p>

                    <div class="flex flex-wrap gap-1.5">
                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            HTML
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            CSS
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            JavaScript
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Education --}}
    <div class="mt-6">
        <h2 class="text-xs font-semibold text-white/30 uppercase tracking-widest mb-4">
            Pendidikan
        </h2>

        <div class="bg-dark-800 border border-white/[0.07] rounded-xl p-5">
            <div class="flex items-start gap-4">

                <div
                    class="w-10 h-10 rounded-xl bg-violet-600/20 border border-violet-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="ti ti-school text-blue-400 text-base"></i>
                </div>

                <div class="flex-1">
                    <h3 class="text-sm font-semibold text-white/90">
                        S1 Teknik Informatika
                    </h3>

                    <p class="text-xs text-blue-400 mt-0.5">
                        {{ $profile['university'] }}
                    </p>

                    <p class="text-xs text-white/30 mt-1">
                        2022 – Sekarang · Semester {{ $profile['semester'] }}
                    </p>

                    <div class="flex flex-wrap gap-1.5 mt-3">

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Algoritma & Struktur Data
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Pemrograman Web
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Pemprograman Fullstack
                        </span>

                        <span
                            class="text-[10px] px-2.5 py-1 rounded-full bg-white/[0.05] border border-white/[0.08] text-white/40">
                            Pemprograman Mobile
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>