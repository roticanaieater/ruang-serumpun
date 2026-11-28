<section id="budaya"
    data-minimap-url="{{ asset('images/minimaps/nusantara-minimap.svg') }}"
    class="budaya-pattern-section relative w-full min-h-[90vh] py-16 lg:py-20 flex flex-col justify-center border-t border-b border-kelabu-4/50 dark:border-serumpun-middark scroll-mt-0">

    <!-- Layer Pola Tile SVG Nusantara yang Bergerak Pelan -->
    <div id="budayaTileLayer" class="budaya-pattern-layer" aria-hidden="true"></div>

    <!-- Gradasi Halus Atas & Bawah agar Transisi Antar-Section Mulus -->
    <div class="absolute top-0 left-0 right-0 h-20 pointer-events-none z-0 bg-gradient-to-b from-kelabu-5 to-transparent dark:from-serumpun-dark dark:to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 h-20 pointer-events-none z-0 bg-gradient-to-t from-kelabu-5 to-transparent dark:from-serumpun-dark dark:to-transparent"></div>

    <!-- Konten Utama Section Budaya -->
    <div class="relative z-10 w-full">

        <!-- 1. Header Section: Judul Artistik "WARISAN KITA", Deskripsi & Tombol Redirect -->
        <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
            <!-- Judul Editorial "WARISAN KITA" (Bisa memakai file SVG judul eksternal atau fallback tipografi Serif) -->
            <div class="inline-flex items-center justify-center">
                <h2 class="sr-only">Warisan Kita</h2>
                <img
                    src="{{ asset('images/titles/warisan-kita-light.svg') }}"
                    alt="Warisan Kita"
                    class="block dark:hidden h-11 sm:h-14 md:h-16 w-auto select-none"
                    onerror="this.style.display='none'; this.nextElementSibling.nextElementSibling.classList.remove('hidden');"
                >
                <img
                    src="{{ asset('images/titles/warisan-kita-dark.svg') }}"
                    alt="Warisan Kita"
                    class="hidden dark:block h-11 sm:h-14 md:h-16 w-auto select-none"
                    onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');"
                >
                <span aria-hidden="true" class="hidden font-serif font-extrabold text-3xl sm:text-5xl md:text-6xl tracking-wider uppercase text-serumpun-dark dark:text-white">
                    WARISAN KITA
                </span>
            </div>

            <p class="mt-3 text-xs sm:text-sm md:text-[15px] text-kelabu-1 dark:text-kelabu-5 max-w-2xl mx-auto leading-relaxed font-medium">
                Menjelajahi khazanah kesenian, wastra, senjata pusaka, dan teknologi maritim yang diwariskan lintas generasi serta menghubungkan berbagai suku bangsa di Nusantara.
            </p>

            <div class="mt-5">
                <a href="{{ url('/budaya') }}"
                    class="group inline-flex items-center gap-2.5 px-6 py-2.5 rounded-full bg-serumpun-dark hover:bg-serumpun-middark dark:bg-white dark:hover:bg-serumpun-yellow text-white dark:text-serumpun-dark font-bold text-xs sm:text-sm tracking-wide shadow-md transition-all duration-200 hover:-translate-y-0.5 active:scale-95">
                    <span>Jelajahi lebih banyak</span>
                    <i class="fa-solid fa-chevron-right text-[11px] text-serumpun-yellow dark:text-serumpun-dark transition-transform duration-200 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <!-- 2. Horizontal Peek Carousel Area -->
        <div class="relative w-full mt-8 lg:mt-10">

            <!-- Tombol Navigasi Mengambang Kiri & Kanan (Desktop) -->
            <button id="budaya-prev-btn"
                type="button"
                onclick="prevBudayaCard()"
                aria-label="Objek budaya sebelumnya"
                class="hidden md:flex items-center justify-center w-11 h-11 rounded-full bg-white/95 dark:bg-serumpun-middark/95 text-serumpun-dark dark:text-white border border-kelabu-4/60 dark:border-kelabu-2/60 shadow-xl hover:scale-105 hover:bg-serumpun-yellow hover:text-serumpun-dark dark:hover:bg-serumpun-yellow dark:hover:text-serumpun-dark transition-all duration-200 absolute left-3 lg:left-6 top-1/2 -translate-y-1/2 z-30 cursor-pointer">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>

            <button id="budaya-next-btn"
                type="button"
                onclick="nextBudayaCard()"
                aria-label="Objek budaya berikutnya"
                class="hidden md:flex items-center justify-center w-11 h-11 rounded-full bg-white/95 dark:bg-serumpun-middark/95 text-serumpun-dark dark:text-white border border-kelabu-4/60 dark:border-kelabu-2/60 shadow-xl hover:scale-105 hover:bg-serumpun-yellow hover:text-serumpun-dark dark:hover:bg-serumpun-yellow dark:hover:text-serumpun-dark transition-all duration-200 absolute right-3 lg:right-6 top-1/2 -translate-y-1/2 z-30 cursor-pointer">
                <i class="fa-solid fa-chevron-right text-sm"></i>
            </button>

            <!-- Viewport Carousel (Kartu Aktif di Tengah + Kartu Samping Mengintip / Peek) -->
            <div id="budaya-carousel-viewport" class="w-full overflow-hidden py-2">
                <div id="budaya-carousel-track" class="gap-4 sm:gap-6 lg:gap-7">
                    <!-- Kartu-kartu budaya dirender dinamis oleh initBudayaSection() di main.js -->
                </div>
            </div>

            <!-- Indikator Posisi & Navigasi Bawah -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 mt-5 flex items-center justify-center gap-4">
                <button type="button"
                    onclick="prevBudayaCard()"
                    aria-label="Sebelumnya"
                    class="md:hidden w-8 h-8 rounded-full bg-white dark:bg-serumpun-middark border border-kelabu-4/60 dark:border-kelabu-2/60 text-serumpun-dark dark:text-white flex items-center justify-center text-xs">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div id="budaya-dots-container"
                    class="flex items-center gap-2 bg-white/90 dark:bg-serumpun-middark/90 backdrop-blur-md px-4 py-2 rounded-full border border-kelabu-4/50 dark:border-kelabu-2/50 shadow-sm">
                    <!-- Dots dirender otomatis oleh renderBudayaDots() -->
                </div>

                <button type="button"
                    onclick="nextBudayaCard()"
                    aria-label="Berikutnya"
                    class="md:hidden w-8 h-8 rounded-full bg-white dark:bg-serumpun-middark border border-kelabu-4/60 dark:border-kelabu-2/60 text-serumpun-dark dark:text-white flex items-center justify-center text-xs">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

        </div>

    </div>
</section>