<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img 
        src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=2000&q=80" 
        alt="Istana Kesultanan Melayu Nusantara" 
        class="w-full h-full object-cover object-center filter brightness-[0.70] contrast-[1.05]"
        onerror="this.src='https://placehold.co/1920x1080/1b212a/ffffff?text=SERUMPUN+Nusantara'"
      >
      <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/40 to-[#12161c]"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center text-white pt-24 pb-16">
      <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs sm:text-sm font-semibold mb-6 animate-pulse">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
        Eksplorasi Peradaban Melayu & Kepulauan Nusantara
      </div>
      <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight leading-tight mb-6 drop-shadow-lg">
        Menyatukan Warisan, <br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-teal-300 to-amber-300">
          Satu Jiwa Serumpun
        </span>
      </h1>
      <p class="text-base sm:text-xl text-slate-200 max-w-2xl mx-auto mb-10 leading-relaxed font-normal drop-shadow">
        Pusat literasi terpadu sejarah, kebudayaan, linguistik, serta tokoh besar rumpun Melayu-Austronesia.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <button onclick="openSearchModal()" class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-sky-500 hover:bg-sky-600 text-white font-bold text-sm shadow-lg shadow-sky-500/30 hover:scale-105 transition-all flex items-center justify-center gap-2">
          <i class="fa-solid fa-magnifying-glass"></i>
          <span>Jelajah Daerah & Suku Bangsa</span>
        </button>
        <a href="#sejarah" class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-md border border-white/30 text-white font-bold text-sm transition-all flex items-center justify-center gap-2">
          <span>Mulai Membaca</span>
          <i class="fa-solid fa-arrow-down text-xs"></i>
        </a>
      </div>
    </div>

    <a href="#sejarah" class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white/70 hover:text-white flex flex-col items-center gap-1 transition-colors text-xs font-medium" aria-label="Scroll ke konten">
      <span>Scroll ke bawah</span>
      <i class="fa-solid fa-chevron-down animate-bounce text-sm"></i>
    </a>
  </section>