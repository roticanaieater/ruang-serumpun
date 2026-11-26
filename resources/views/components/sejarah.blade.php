<section id="sejarah"
    style="background-image: url('{{ asset('images/background/bg-sejarah-main.png') }}');"
    class="relative w-full py-20 md:py-28 overflow-x-hidden bg-cover bg-center bg-fixed scroll-mt-0">

    <!-- Lapisan tint Parchment Editorial / Charcoal Gelap + Grain Kertas Arsip -->
    <div class="absolute inset-0 pointer-events-none z-0 bg-[#F5F2E9]/[0.92] dark:bg-[#12161c]/[0.91] backdrop-blur-[2px] archival-paper-grain"></div>

    <!-- Pembatas Fade Gradient Atas & Bawah -->
    <div class="absolute top-0 left-0 right-0 h-32 md:h-40 pointer-events-none z-0 bg-gradient-to-b from-[#F5F2E9] via-[#F5F2E9]/90 to-transparent dark:from-[#12161c] dark:via-[#12161c]/90 dark:to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 h-32 md:h-40 pointer-events-none z-0 bg-gradient-to-t from-[#F5F2E9] via-[#F5F2E9]/90 to-transparent dark:from-[#12161c] dark:via-[#12161c]/90 dark:to-transparent"></div>

    <!-- Container Utama Konten Sejarah -->
    <div class="relative z-10 w-full flex flex-col space-y-20 md:space-y-24">

        <!-- ====================================================================
             SUB-BAGIAN 01: HEADER & 3 KARTU ARTIKEL TERBARU SEJARAH NUSANTARA
             ==================================================================== -->
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2.5 text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#9A7B2C] dark:text-[#facc15] mb-3">
                    <span class="w-6 h-[1.5px] bg-[#C8A94E]"></span>
                    <span>01 • Artikel Sejarah</span>
                    <span class="w-6 h-[1.5px] bg-[#C8A94E]"></span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serifHeader font-extrabold tracking-wide uppercase text-[#1b212a] dark:text-white">
                    Sejarah Nusantara
                </h2>
                <p class="mt-3.5 text-xs sm:text-sm md:text-[15px] text-slate-700 dark:text-slate-300 max-w-2xl mx-auto leading-relaxed font-medium">
                    Melihat sejarah Nusantara dari sudut pandang keserumpunan—menonjolkan hubungan persaudaraan untuk dilestarikan, maupun perselisihan masa lampau untuk dijadikan iktibar.
                </p>
                <div class="mt-6">
                    <a href="{{ url('/sejarah') }}"
                        class="group inline-flex items-center gap-2.5 px-6 py-2.5 rounded-full bg-[#1b212a] hover:bg-[#2a3340] dark:bg-[#FCFBF7] dark:hover:bg-[#facc15] text-[#FCFBF7] dark:text-[#1b212a] font-bold text-xs sm:text-sm tracking-wide shadow-md border border-[#1b212a] dark:border-transparent transition-all duration-200 hover:-translate-y-0.5 active:scale-95">
                        <span>Jelajahi lebih banyak</span>
                        <i class="fa-solid fa-chevron-right text-[11px] text-[#C8A94E] dark:text-[#1b212a] transition-transform duration-200 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- 3 Kartu Artikel Sejarah Terbaru -->
            <div class="mt-10 md:mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-7">
                <!-- Kartu 1: Pasang Surut Aceh-Johor -->
                <article class="sejarah-article-card group bg-[#FCFBF7] dark:bg-[#1b212a] rounded-2xl overflow-hidden shadow-md border border-[#E4DEC9] dark:border-slate-800 flex flex-col justify-between">
                    <div>
                        <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-200 dark:bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80"
                                alt="Pasang Surut Aceh-Johor"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        </div>
                        <div class="p-5 sm:p-6 pb-3">
                            <h3 class="font-editorial font-bold text-lg sm:text-xl text-[#1b212a] dark:text-white group-hover:text-[#9A7B2C] dark:group-hover:text-[#facc15] leading-snug line-clamp-1 transition-colors duration-200">
                                Pasang Surut Aceh-Johor
                            </h3>
                            <p class="mt-2.5 text-xs sm:text-[13px] text-slate-600 dark:text-slate-300 line-clamp-3 leading-relaxed">
                                Dinamika geopolitik Selat Melaka di masa Perang Tiga Segi (Aceh, Johor, dan Portugis), di mana persaingan kuasa maritim berpadu erat dengan ikatan trah darah kesultanan serumpun.
                            </p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 sm:px-6 sm:pb-6 pt-2 flex items-center justify-start">
                        <a href="{{ url('/sejarah/pasang-surut-aceh-johor') }}"
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#1b212a] group-hover:bg-[#C8A94E] dark:bg-slate-800 dark:group-hover:bg-[#facc15] text-white group-hover:text-[#1b212a] font-bold text-xs tracking-wide transition-all duration-200">
                            <span>Baca selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px] transition-transform duration-200 group-hover:translate-x-0.5"></i>
                        </a>
                    </div>
                </article>

                <!-- Kartu 2: Revolusi Sosial 1946 -->
                <article class="sejarah-article-card group bg-[#FCFBF7] dark:bg-[#1b212a] rounded-2xl overflow-hidden shadow-md border border-[#E4DEC9] dark:border-slate-800 flex flex-col justify-between">
                    <div>
                        <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-200 dark:bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b675?auto=format&fit=crop&w=800&q=80"
                                alt="Revolusi Sosial 1946"
                                class="w-full h-full object-cover filter grayscale contrast-125 transition-transform duration-700 ease-out group-hover:scale-105">
                        </div>
                        <div class="p-5 sm:p-6 pb-3">
                            <h3 class="font-editorial font-bold text-lg sm:text-xl text-[#1b212a] dark:text-white group-hover:text-[#9A7B2C] dark:group-hover:text-[#facc15] leading-snug line-clamp-1 transition-colors duration-200">
                                Revolusi Sosial 1946
                            </h3>
                            <p class="mt-2.5 text-xs sm:text-[13px] text-slate-600 dark:text-slate-300 line-clamp-3 leading-relaxed">
                                Prahara berdarah yang melanda monarki-monarki Melayu di pesisir Sumatera Timur, merenggut nyawa para bangsawan dan sastrawan besar Amir Hamzah sebagai iktibar pahit sejarah.
                            </p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 sm:px-6 sm:pb-6 pt-2 flex items-center justify-start">
                        <a href="{{ url('/sejarah/revolusi-sosial-1946') }}"
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#1b212a] group-hover:bg-[#C8A94E] dark:bg-slate-800 dark:group-hover:bg-[#facc15] text-white group-hover:text-[#1b212a] font-bold text-xs tracking-wide transition-all duration-200">
                            <span>Baca selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px] transition-transform duration-200 group-hover:translate-x-0.5"></i>
                        </a>
                    </div>
                </article>

                <!-- Kartu 3: Jaringan Dagang Makassar -->
                <article class="sejarah-article-card group bg-[#FCFBF7] dark:bg-[#1b212a] rounded-2xl overflow-hidden shadow-md border border-[#E4DEC9] dark:border-slate-800 flex flex-col justify-between">
                    <div>
                        <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-200 dark:bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1524654458049-e36be0721fa2?auto=format&fit=crop&w=800&q=80"
                                alt="Jaringan Dagang Makassar"
                                class="w-full h-full object-cover filter sepia-[0.3] transition-transform duration-700 ease-out group-hover:scale-105">
                        </div>
                        <div class="p-5 sm:p-6 pb-3">
                            <h3 class="font-editorial font-bold text-lg sm:text-xl text-[#1b212a] dark:text-white group-hover:text-[#9A7B2C] dark:group-hover:text-[#facc15] leading-snug line-clamp-1 transition-colors duration-200">
                                Jaringan Dagang Makassar
                            </h3>
                            <p class="mt-2.5 text-xs sm:text-[13px] text-slate-600 dark:text-slate-300 line-clamp-3 leading-relaxed">
                                Kisah pelaut ulung Bugis dan Makassar yang menghubungkan perairan kepulauan Nusantara, Maluku, Selat Melaka, hingga Australia Utara (Marege) demi teripang dan rempah.
                            </p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 sm:px-6 sm:pb-6 pt-2 flex items-center justify-start">
                        <a href="{{ url('/sejarah/jaringan-dagang-makassar') }}"
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#1b212a] group-hover:bg-[#C8A94E] dark:bg-slate-800 dark:group-hover:bg-[#facc15] text-white group-hover:text-[#1b212a] font-bold text-xs tracking-wide transition-all duration-200">
                            <span>Baca selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px] transition-transform duration-200 group-hover:translate-x-0.5"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>

        <!-- Garis Pemisah Editorial Halus -->
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
            <div class="h-px w-full bg-gradient-to-r from-transparent via-[#C8A94E]/45 to-transparent"></div>
        </div>

        <!-- ====================================================================
             SUB-BAGIAN 02: RIWAYAT NEGERI (1/3 KIRI TRANSPARAN, 2/3 KANAN KONTRAS)
             ==================================================================== -->
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                <!-- Kiri (1/3): Transparan menyatu dengan peta vintage -->
                <div class="lg:col-span-4 text-center lg:text-left flex flex-col items-center lg:items-start">
                    <span class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#9A7B2C] dark:text-[#facc15] mb-2">
                        02 • Riwayat Negeri
                    </span>
                    <h3 class="font-serifHeader font-black text-3xl sm:text-4xl lg:text-[42px] leading-[1.06] tracking-tight text-[#1b212a] dark:text-white uppercase">
                        <span class="block">RIWAYAT</span>
                        <span class="block lg:pl-4 text-[#9A7B2C] dark:text-[#facc15]">NEGERI</span>
                    </h3>
                    <p class="mt-4 text-xs sm:text-sm text-slate-700 dark:text-slate-300 leading-relaxed font-medium max-w-md lg:max-w-none">
                        Menyelami sejarah sesebuah provinsi Indonesia, negara bagian Malaysia, maupun kerajaan lama yang pernah berdiri—dilihat dari sudut pandang keserumpunan melalui hubungannya dengan berbagai entitas serumpun lain.
                    </p>

                    <div class="mt-6">
                        <a href="{{ url('/riwayat-negeri') }}"
                            class="group inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full bg-[#1b212a] hover:bg-[#2a3340] dark:bg-[#FCFBF7] dark:hover:bg-[#facc15] text-[#FCFBF7] dark:text-[#1b212a] font-bold text-xs sm:text-[13px] tracking-wide shadow-md transition-all duration-200 hover:-translate-y-0.5 active:scale-95">
                            <span>Telusuri lebih lanjut</span>
                            <i class="fa-solid fa-arrow-right text-[11px] text-[#C8A94E] dark:text-[#1b212a] transition-transform duration-200 group-hover:translate-x-1"></i>
                        </a>
                    </div>

                    <!-- Indikator Rotasi Otomatis -->
                    <div class="mt-6 w-full max-w-[260px] lg:max-w-full">
                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-500 dark:text-slate-400 mb-2">
                            <span class="flex items-center gap-1.5">
                                <span id="riwayat-live-dot" class="w-1.5 h-1.5 rounded-full bg-[#C8A94E]"></span>
                                <span id="riwayat-status-label">Sorotan Bergilir</span>
                            </span>
                            <span id="riwayat-counter-text" class="font-mono text-[#1b212a] dark:text-[#facc15]">01 / 07</span>
                        </div>
                        <div id="riwayat-progress-segments" class="grid grid-cols-7 gap-1.5">
                            <!-- Diisi dinamis oleh main.js -->
                        </div>
                    </div>
                </div>

                <!-- Kanan (2/3): Card Box Kontras -->
                <div class="lg:col-span-8">
                    <div id="riwayat-card-box"
                        onmouseenter="pauseRiwayatRotation()"
                        onmouseleave="resumeRiwayatRotation()"
                        class="relative w-full rounded-2xl sm:rounded-3xl overflow-hidden bg-[#1b212a] dark:bg-[#EAD180] text-white dark:text-[#1b212a] shadow-2xl border border-[#C8A94E]/30 dark:border-[#facc15]/50 transition-colors duration-500 group/card">

                        <!-- Layer Gambar Khas Negeri (Bagian Atas) -->
                        <div class="relative h-56 sm:h-64 md:h-72 w-full overflow-hidden bg-[#141920] dark:bg-[#d8be6c]">
                            <img id="riwayat-bg-image"
                                src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=1200&q=80"
                                alt="Lanskap Sejarah Kesultanan Langkat"
                                class="w-full h-full object-cover object-center filter grayscale contrast-110 brightness-90 transition-opacity duration-500">
                            <div class="absolute inset-0 riwayat-photo-gradient"></div>

                            <!-- Layer Atas Gambar: Wadah Konsisten Bendera / Lambang Negeri (Rasio 4:3) -->
<div id="riwayat-flag-container"
    class="absolute top-5 left-5 sm:top-6 sm:left-7 z-10 w-20 sm:w-24 aspect-[4/3] rounded-xl overflow-hidden shadow-xl transition-all duration-300 bg-[#1b212a]/90 flex items-center justify-center">
    <img id="riwayat-flag-img"
        src="{{ asset('images/flags/regions/langkat.svg') }}"
        alt="Bendera Kesultanan Langkat"
        class="w-full h-full object-cover">
</div>

                            <!-- Nama Negeri & Aksara Tradisional -->
                            <div class="absolute bottom-2 left-5 right-5 sm:left-7 sm:right-7 z-10 flex flex-wrap items-baseline gap-2.5 sm:gap-3.5 transition-all duration-300" id="riwayat-header-overlay">
                                <h4 id="riwayat-title-text" class="font-editorial text-3xl sm:text-4xl font-extrabold text-white dark:text-[#1b212a] tracking-tight drop-shadow-sm">
                                    Langkat
                                </h4>
                                <span id="riwayat-script-sep" class="text-[#C8A94E]/70 dark:text-[#1b212a]/45 font-light text-xl">|</span>
                                <span id="riwayat-script-text" class="text-xl sm:text-2xl font-arabic text-[#facc15] dark:text-[#7A5908] tracking-wide drop-shadow-sm">
                                    لڠكت
                                </span>
                            </div>
                        </div>

                        <!-- Bagian Bawah Card -->
                        <div class="relative bg-[#1b212a] dark:bg-[#EAD180] px-5 pb-6 pt-3 sm:px-7 sm:pb-7 flex flex-col sm:flex-row items-start sm:items-end justify-between gap-6 transition-colors duration-500">
                            <!-- Kiri Bawah: Deskripsi Singkat & Tautan Redirect -->
                            <div class="flex-1 min-w-0 z-10 transition-all duration-300" id="riwayat-body-content">
                                <p id="riwayat-desc-text" class="text-xs sm:text-sm text-slate-200/95 dark:text-[#1b212a]/90 font-medium leading-relaxed line-clamp-3">
                                    Kesultanan Langkat adalah sebuah kerajaan di wilayah Sumatra Timur. Kekuasaan politik Kesultanan Langkat berakhir pada masa pergolakan sosial di Sumatra Timur pada pertengahan abad ke-20.
                                </p>
                                <div class="mt-5 flex items-center gap-4">
                                    <a id="riwayat-read-link"
                                        href="{{ url('/riwayat-negeri/kesultanan-langkat') }}"
                                        class="group/btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#facc15] hover:bg-[#fde047] text-[#1b212a] dark:bg-[#1b212a] dark:hover:bg-[#28313e] dark:text-[#facc15] font-extrabold text-xs sm:text-[13px] tracking-wide shadow-lg transition-all duration-200 hover:-translate-y-0.5 active:scale-95">
                                        <span>Baca selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right text-[11px] transition-transform duration-200 group-hover/btn:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Kanan Bawah: Peta Negeri Polos (Disuntikkan dari file eksternal /images/maps/regions/*.svg) -->
                            <div id="riwayat-map-container"
                                class="w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 flex-shrink-0 self-center sm:self-end flex items-center justify-center text-[#FCFBF7] dark:text-[#1b212a] transition-all duration-500"
                                title="Siluet Wilayah Historis">
                                <!-- SVG Peta Siluet Negeri dimuat otomatis dari file eksternal -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Garis Pemisah Editorial Halus -->
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
            <div class="h-px w-full bg-gradient-to-r from-transparent via-[#C8A94E]/45 to-transparent"></div>
        </div>

        <!-- ====================================================================
             SUB-BAGIAN 03: LINIMASA SEJARAH INTERAKTIF
             ==================================================================== -->
        <div id="sejarah-timeline-area" class="w-full">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
                <div class="inline-flex items-center gap-2.5 text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#9A7B2C] dark:text-[#facc15] mb-2">
                    <span class="w-6 h-[1.5px] bg-[#C8A94E]"></span>
                    <span>03 • Timeline</span>
                    <span class="w-6 h-[1.5px] bg-[#C8A94E]"></span>
                </div>
                <p class="text-xs sm:text-sm md:text-[15px] text-[#1b212a] dark:text-slate-200 leading-relaxed font-semibold">
                    Menelusuri simpul-simpul sejarah yang mengikat persaudaraan lintas negeri dan suku bangsa di Nusantara dari masa ke masa. Klik ikon atau judul peristiwa untuk membuka ringkasannya, lalu geser ke samping untuk menjelajahi era berikutnya.
                </p>

                <!-- Kontrol Navigasi Slider -->
                <div class="mt-5 inline-flex items-center gap-3 bg-[#FCFBF7]/95 dark:bg-[#1b212a]/95 backdrop-blur-md px-4 py-1.5 rounded-full border border-[#E4DEC9] dark:border-slate-700/80 shadow-sm">
                    <button id="tl-btn-prev" type="button" aria-label="Peristiwa sebelumnya" class="w-7 h-7 rounded-full hover:bg-[#F5F2E9] dark:hover:bg-slate-800 text-[#1b212a] dark:text-white disabled:opacity-30 flex items-center justify-center transition">
                        <i class="fa-solid fa-chevron-left text-xs"></i>
                    </button>
                    <span class="text-xs font-bold text-slate-600 dark:text-slate-300">
                        Simpul Waktu: <strong id="tl-active-counter" class="text-[#9A7B2C] dark:text-[#facc15] font-mono">1 / 8</strong>
                    </span>
                    <button id="tl-btn-next" type="button" aria-label="Peristiwa berikutnya" class="w-7 h-7 rounded-full hover:bg-[#F5F2E9] dark:hover:bg-slate-800 text-[#1b212a] dark:text-white disabled:opacity-30 flex items-center justify-center transition">
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Viewport Horizontal Timeline Slider -->
            <div class="relative w-full mt-6 select-none">
                <div class="pointer-events-none hidden md:block absolute left-0 top-0 bottom-0 w-16 z-20 bg-gradient-to-r from-[#F5F2E9]/90 to-transparent dark:from-[#12161c]/90"></div>
                <div class="pointer-events-none hidden md:block absolute right-0 top-0 bottom-0 w-16 z-20 bg-gradient-to-l from-[#F5F2E9]/90 to-transparent dark:from-[#12161c]/90"></div>

                <div id="serumpun-timeline-viewport" class="w-full overflow-x-auto no-scrollbar cursor-grab px-8 sm:px-16 lg:px-28 py-4">
                    <div id="serumpun-timeline-track" class="relative inline-flex items-start gap-6 sm:gap-8 min-w-max pb-10 pt-4">
                        <!-- Diisi otomatis oleh initSerumpunTimeline() di main.js -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>