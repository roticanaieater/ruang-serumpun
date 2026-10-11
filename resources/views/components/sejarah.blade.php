<section 
  id="sejarah" 
  style="background-image: url('{{ asset('images/bg-sejarah-main.png') }}');"
  class="relative w-full md:min-h-screen md:h-screen flex flex-col justify-center items-center py-16 md:py-8 lg:py-10 overflow-hidden bg-cover bg-center bg-fixed scroll-mt-0"
>   
    <!-- Lapisan Gradien Atas & Bawah (Transparan di tengah, menyatu ke latar web di tepi atas/bawah) -->
    <div class="absolute inset-0 pointer-events-none z-0 bg-white/75 dark:bg-[#12161c]/85 backdrop-blur-[1px]"></div>
    
    <!-- Top & Bottom Gradient Flow Masking -->
    <div class="absolute top-0 left-0 right-0 h-28 md:h-36 pointer-events-none z-0 bg-gradient-to-b from-slate-50 via-slate-50/70 to-transparent dark:from-[#12161c] dark:via-[#12161c]/80 dark:to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 h-28 md:h-36 pointer-events-none z-0 bg-gradient-to-t from-slate-50 via-slate-50/70 to-transparent dark:from-[#12161c] dark:via-[#12161c]/80 dark:to-transparent"></div>

    <!-- Container Utama Konten Sejarah -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-between h-full max-h-[920px]">
      
      <!-- BAGIAN HEADER SEJARAH NUSANTARA -->
      <div class="text-center max-w-4xl mx-auto pt-2 md:pt-4">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-serifHeader font-extrabold tracking-wide uppercase text-slate-900 dark:text-white drop-shadow-sm">
          Sejarah Nusantara
        </h2>
        <p class="mt-2.5 sm:mt-3 text-xs sm:text-sm md:text-base text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed font-medium">
          Melihat sejarah Nusantara dari sudut pandang keserumpunan, yaitu menonjolkan hubungan persaudaraan untuk dilestarikan, maupun perselisihan untuk dijadikan iktibar
        </p>
        <div class="mt-3.5 sm:mt-4">
          <a 
            href="#sejarah-eksplorasi-semua" 
            onclick="showToastFeedback('Mengarahkan ke laman direktori lengkap artikel Sejarah Nusantara...')" 
            class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-[#1b212a] hover:bg-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700 text-white font-semibold text-xs sm:text-sm tracking-wide shadow-md transition-all duration-200 hover:scale-105 active:scale-95"
          >
            <span>Jelajahi lebih banyak</span>
            <i class="fa-solid fa-chevron-right text-[11px]"></i>
          </a>
        </div>
      </div>

      <!-- BAGIAN 1: 3 TAB KARTU ARTIKEL SEJARAH (Gambar Atas, Teks Bawah) -->
      <div class="mt-6 md:mt-8 grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
        
        <!-- Kartu 1: Pasang Surut Aceh-Johor -->
        <article class="bg-white/95 dark:bg-[#1b212a]/95 rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-slate-200/80 dark:border-slate-800/80 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1">
          <div>
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-100 dark:bg-slate-800">
              <img 
                src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=700&q=80" 
                alt="Perang Segitiga Selat Malaka: Pasang Surut Aceh dan Johor" 
                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                onerror="this.src='https://placehold.co/700x420/1e293b/ffffff?text=Perang+Aceh+Johor'"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
            </div>
            <div class="p-4 sm:p-5">
              <h3 class="font-extrabold text-base sm:text-lg text-slate-900 dark:text-white leading-snug line-clamp-1">
                Pasang Surut Aceh-Johor
              </h3>
              <p class="mt-2 text-xs sm:text-[13px] text-slate-600 dark:text-slate-400 line-clamp-3 leading-relaxed">
                Dinamika geopolitik Selat Melaka di masa Perang Tiga Segi (Aceh, Johor, dan Portugis), di mana persaingan kuasa maritim berpadu erat dengan ikatan trah darah kesultanan serumpun.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 sm:px-5 sm:pb-5 pt-0">
            <button 
              onclick="showToastFeedback('Membuka artikel: Pasang Surut Aceh-Johor')" 
              class="w-full sm:w-auto px-5 py-2 rounded-xl bg-[#1b212a] dark:bg-slate-800 hover:bg-slate-700 dark:hover:bg-slate-700 text-white font-bold text-xs tracking-wider transition-all duration-200 shadow-sm active:scale-95 flex items-center justify-center gap-1.5"
            >
              <span>Baca selengkapnya</span>
            </button>
          </div>
        </article>

        <!-- Kartu 2: Revolusi Sosial 1946 -->
        <article class="bg-white/95 dark:bg-[#1b212a]/95 rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-slate-200/80 dark:border-slate-800/80 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1">
          <div>
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-100 dark:bg-slate-800">
              <img 
                src="https://images.unsplash.com/photo-1579783902614-a3fb3927b675?auto=format&fit=crop&w=700&q=80" 
                alt="Arsip Dokumentasi Revolusi Sosial Sumatera Timur 1946" 
                class="w-full h-full object-cover filter grayscale contrast-125 transition-transform duration-500 hover:scale-105"
                onerror="this.src='https://placehold.co/700x420/334155/ffffff?text=Revolusi+Sosial+1946'"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
            </div>
            <div class="p-4 sm:p-5">
              <h3 class="font-extrabold text-base sm:text-lg text-slate-900 dark:text-white leading-snug line-clamp-1">
                Revolusi Sosial 1946
              </h3>
              <p class="mt-2 text-xs sm:text-[13px] text-slate-600 dark:text-slate-400 line-clamp-3 leading-relaxed">
                Prahara berdarah yang melanda monarki-monarki Melayu di pesisir Sumatera Timur, merenggut nyawa para bangsawan dan sastrawan besar Amir Hamzah sebagai iktibar pahit sejarah.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 sm:px-5 sm:pb-5 pt-0">
            <button 
              onclick="showToastFeedback('Membuka artikel: Revolusi Sosial 1946')" 
              class="w-full sm:w-auto px-5 py-2 rounded-xl bg-[#1b212a] dark:bg-slate-800 hover:bg-slate-700 dark:hover:bg-slate-700 text-white font-bold text-xs tracking-wider transition-all duration-200 shadow-sm active:scale-95 flex items-center justify-center gap-1.5"
            >
              <span>Baca selengkapnya</span>
            </button>
          </div>
        </article>

        <!-- Kartu 3: Jaringan Dagang Makassar -->
        <article class="bg-white/95 dark:bg-[#1b212a]/95 rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-slate-200/80 dark:border-slate-800/80 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1">
          <div>
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-100 dark:bg-slate-800">
              <img 
                src="https://images.unsplash.com/photo-1524654458049-e36be0721fa2?auto=format&fit=crop&w=700&q=80" 
                alt="Peta Kuno Jaringan Dagang Maritim Makassar" 
                class="w-full h-full object-cover filter sepia-[0.35] transition-transform duration-500 hover:scale-105"
                onerror="this.src='https://placehold.co/700x420/78350f/ffffff?text=Jaringan+Makassar'"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
            </div>
            <div class="p-4 sm:p-5">
              <h3 class="font-extrabold text-base sm:text-lg text-slate-900 dark:text-white leading-snug line-clamp-1">
                Jaringan Dagang Makassar
              </h3>
              <p class="mt-2 text-xs sm:text-[13px] text-slate-600 dark:text-slate-400 line-clamp-3 leading-relaxed">
                Kisah pelaut ulung Bugis dan Makassar yang menghubungkan perairan kepulauan Nusantara, Kepulauan Maluku, Selat Melaka, hingga perairan Australia Utara (Marege) demi teripang dan rempah.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 sm:px-5 sm:pb-5 pt-0">
            <button 
              onclick="showToastFeedback('Membuka artikel: Jaringan Dagang Makassar')" 
              class="w-full sm:w-auto px-5 py-2 rounded-xl bg-[#1b212a] dark:bg-slate-800 hover:bg-slate-700 dark:hover:bg-slate-700 text-white font-bold text-xs tracking-wider transition-all duration-200 shadow-sm active:scale-95 flex items-center justify-center gap-1.5"
            >
              <span>Baca selengkapnya</span>
            </button>
          </div>
        </article>

      </div>

      <!-- BAGIAN 2: BANNER "RIWAYAT NEGERI" (Compact vertical space, dynamic carousel, interactive reveal) -->
      <div class="mt-6 md:mt-8 pb-2 md:pb-4">
        
        <!-- CONTAINER LUAR DENGAN BACKGROUND KUNING DI BAWAHNYA -->
        <div class="relative w-full rounded-2xl sm:rounded-3xl overflow-hidden bg-amber-400 dark:bg-amber-500 shadow-lg group select-none">
          
          <!-- Background Lapisan Kuning: Berisi Tulisan Tersembunyi "Baca Selengkapnya" (Vertical) & Ikon Panah -->
          <div class="absolute inset-y-0 right-0 w-24 sm:w-28 flex items-center justify-center bg-amber-400 dark:bg-amber-500 text-slate-950 font-black z-0 pointer-events-none">
            <div class="flex items-center gap-2">
              <span class="writing-vertical-lr text-xs sm:text-sm font-extrabold uppercase tracking-widest text-slate-950">
                Baca Selengkapnya
              </span>
              <div class="flex flex-col text-sm font-black text-slate-950">
                <i class="fa-solid fa-angles-right"></i>
              </div>
            </div>
          </div>

          <!-- LAPISAN GELAP ATAS (Desktop menyusut ke kiri saat di-hover; Mobile tetap adaptif) -->
          <div 
            id="riwayat-negeri-card" 
            class="relative z-10 w-full bg-[#1b212a] text-white p-4 sm:p-5 md:py-4 md:px-6 transition-all duration-500 ease-out md:group-hover:w-[calc(100%-80px)] lg:group-hover:w-[calc(100%-96px)] rounded-2xl sm:rounded-3xl"
          >
            
            <!-- Tampilan Desktop & Tablet (Horizontal Row) -->
            <div class="hidden md:flex items-center justify-between gap-6">
              
              <!-- Kolom 1: Logo Statis Riwayat Negeri -->
              <div class="flex-shrink-0 flex items-center gap-3 pr-6 border-r border-slate-700/80">
                <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center text-amber-400 shadow-inner">
                  <i class="fa-solid fa-scroll text-lg"></i>
                </div>
                <div class="leading-tight">
                  <span class="block text-sm font-black tracking-wider uppercase font-serifHeader text-white">RIWAYAT</span>
                  <span class="block text-xs font-bold tracking-widest text-amber-400 uppercase">NEGERI</span>
                </div>
              </div>

              <!-- Kolom 2: Lambang Dinamis Negeri / Kerajaan -->
              <div class="flex-shrink-0 w-24 h-20 flex items-center justify-center transition-all duration-500" id="riwayat-emblem-container">
                <img 
                  id="riwayat-emblem-img"
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Coat_of_arms_of_the_Sultanate_of_Langkat.png/300px-Coat_of_arms_of_the_Sultanate_of_Langkat.png" 
                  alt="Lambang Kesultanan Langkat" 
                  class="max-h-16 max-w-full object-contain filter drop-shadow transition-opacity duration-400"
                  onerror="this.src='https://placehold.co/120x80/222a36/fbbf24?text=Emblem'"
                >
              </div>

              <!-- Kolom 3: Teks Dinamis Riwayat Negeri -->
              <div class="flex-1 min-w-0 pr-4">
                <div class="flex items-center gap-3">
                  <h4 id="riwayat-title-text" class="text-xl font-black text-white tracking-tight truncate transition-opacity duration-300">
                    Langkat
                  </h4>
                  <span id="riwayat-arabic-text" class="text-xs font-serif text-amber-300/90 tracking-wide transition-opacity duration-300 font-medium">
                    لڠكت
                  </span>
                </div>
                <p id="riwayat-desc-text" class="mt-1 text-xs text-slate-300 line-clamp-2 leading-relaxed transition-opacity duration-300">
                  Kesultanan Langkat adalah sebuah kerajaan di wilayah Sumatra Timur. Kekuasaan politik Kesultanan Langkat berakhir pada masa pergolakan sosial di Sumatra Timur pada pertengahan abad ke-20.
                </p>
              </div>

              <!-- Kolom 4: Tombol Panah >> di Ujung Kanan -->
              <div class="flex-shrink-0 flex items-center">
                <button 
                  id="riwayat-cta-btn" 
                  onclick="handleRiwayatClick()"
                  class="w-10 h-10 rounded-xl bg-slate-800/80 hover:bg-amber-400 hover:text-slate-950 text-amber-400 font-extrabold flex items-center justify-center transition-all duration-300 shadow active:scale-95 cursor-pointer"
                  title="Lihat riwayat lengkap negeri ini"
                  aria-label="Riwayat lengkap negeri"
                >
                  <i class="fa-solid fa-angles-right text-base"></i>
                </button>
              </div>

            </div>

            <!-- Tampilan Mobile (Kreatif & Sesuai Rancangan: Logo & Emblem Bersanding di Atas, Deskripsi & Tombol di Bawah) -->
            <div class="md:hidden flex flex-col space-y-3.5">
              
              <!-- Baris Atas Mobile: Logo Riwayat Negeri & Lambang Kerajaan Bersebelahan -->
              <div class="flex items-center justify-between pb-2.5 border-b border-slate-700/60">
                <!-- Logo Riwayat Negeri -->
                <div class="flex items-center gap-2">
                  <div class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center text-amber-400 text-xs">
                    <i class="fa-solid fa-scroll"></i>
                  </div>
                  <div class="leading-tight">
                    <span class="block text-xs font-black tracking-wide uppercase font-serifHeader text-white">RIWAYAT</span>
                    <span class="block text-[10px] font-bold tracking-wider text-amber-400 uppercase">NEGERI</span>
                  </div>
                </div>

                <!-- Lambang Kerajaan Mobile -->
                <div class="w-16 h-12 flex items-center justify-end">
                  <img 
                    id="riwayat-emblem-mobile"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Coat_of_arms_of_the_Sultanate_of_Langkat.png/300px-Coat_of_arms_of_the_Sultanate_of_Langkat.png" 
                    alt="Lambang Kesultanan Langkat" 
                    class="max-h-10 max-w-full object-contain filter drop-shadow"
                    onerror="this.src='https://placehold.co/80x60/222a36/fbbf24?text=Emblem'"
                  >
                </div>
              </div>

              <!-- Baris Tengah Mobile: Judul, Aksara Jawi & Keterangan Singkat -->
              <div>
                <div class="flex items-center gap-2">
                  <h4 id="riwayat-title-mobile" class="text-base font-extrabold text-white">
                    Langkat
                  </h4>
                  <span id="riwayat-arabic-mobile" class="text-xs text-amber-300 font-serif">
                    لڠكت
                  </span>
                </div>
                <p id="riwayat-desc-mobile" class="mt-1 text-xs text-slate-300 leading-relaxed line-clamp-3">
                  Kesultanan Langkat adalah sebuah kerajaan di wilayah Sumatra Timur. Kekuasaan politik Kesultanan Langkat berakhir pada masa pergolakan sosial di Sumatra Timur pada pertengahan abad ke-20.
                </p>
              </div>

              <!-- Baris Bawah Mobile: Tombol Baca Selengkapnya Terintegrasi -->
              <div class="pt-1">
                <button 
                  onclick="handleRiwayatClick()" 
                  class="w-full py-2 px-4 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs flex items-center justify-center gap-2 shadow-md transition-colors"
                >
                  <span>Baca Selengkapnya</span>
                  <i class="fa-solid fa-angles-right text-xs"></i>
                </button>
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>
  </section>