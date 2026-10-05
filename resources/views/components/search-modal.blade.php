<div id="search-modal" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300 bg-black/70 backdrop-blur-sm flex flex-col justify-start items-center p-3 sm:p-6 overflow-y-auto">
  <div class="relative w-full max-w-4xl bg-white dark:bg-[#1b212a] rounded-3xl shadow-2xl border border-slate-200 dark:border-slate-800 my-auto overflow-hidden transition-all duration-300 transform scale-95" id="search-modal-card">
    
    <!-- Bar Header Pencarian & Close Button -->
    <div class="p-5 sm:p-7 border-b border-slate-100 dark:border-slate-800/80 bg-white dark:bg-[#1b212a]">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>
          <h3 class="text-xs uppercase tracking-wider font-extrabold text-slate-500 dark:text-slate-400">JELAJAH SUPERWEB SERUMPUN</h3>
        </div>
        <button id="close-search-btn" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 flex items-center justify-center transition-colors">
          <i class="fa-solid fa-xmark text-sm"></i>
        </button>
      </div>

      <!-- Input Utama Pencarian -->
      <div class="relative">
        <div class="flex items-center border-b-2 border-slate-800 dark:border-slate-300 pb-2">
          <i class="fa-solid fa-magnifying-glass text-slate-800 dark:text-slate-200 text-base mr-3"></i>
          <input 
            id="search-input" 
            type="text" 
            placeholder="Cari konten, artikel sejarah, daerah atau suku..." 
            autocomplete="off"
            class="w-full bg-transparent text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 font-semibold text-base focus:outline-none"
          >
          <button id="clear-search-btn" class="hidden text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 px-2" title="Bersihkan">
            <i class="fa-solid fa-circle-xmark"></i>
          </button>
        </div>

        <div id="autocomplete-box" class="hidden absolute left-0 right-0 mt-2 bg-white dark:bg-[#222a36] rounded-2xl shadow-xl border border-slate-200 dark:border-slate-700 py-2 z-30 max-h-60 overflow-y-auto custom-scroll">
        </div>
      </div>

      <!-- Tab Tombol -->
      <div class="mt-5 flex flex-wrap sm:flex-nowrap gap-3">
        <button id="tab-btn-daerah" onclick="switchSearchTab('daerah')" class="w-full sm:w-1/2 py-2.5 px-6 rounded-full font-bold text-sm transition-all duration-200 border-2 border-slate-900 dark:border-slate-400 text-slate-900 dark:text-white bg-transparent hover:bg-slate-100 dark:hover:bg-slate-800 flex items-center justify-center gap-2">
          <i class="fa-solid fa-map-location-dot"></i> Cari berdasarkan daerah
        </button>
        <button id="tab-btn-suku" onclick="switchSearchTab('suku')" class="w-full sm:w-1/2 py-2.5 px-6 rounded-full font-bold text-sm transition-all duration-200 shadow-sm bg-[#111827] text-white dark:bg-white dark:text-slate-900 flex items-center justify-center gap-2">
          <i class="fa-solid fa-users"></i> Cari berdasarkan suku bangsa
        </button>
      </div>
    </div>

    <!-- Tab 1: Peta Interaktif Nusantara -->
    <div id="tab-content-daerah" class="p-4 sm:p-7 hidden">
      <div class="flex items-center justify-between mb-3 text-xs text-slate-500 dark:text-slate-400">
        <p><i class="fa-solid fa-hand-pointer mr-1 text-sky-500"></i> Klik poligon daerah untuk langsung menambah ke pencarian. Geser dan zoom untuk navigasi.</p>
        <span id="map-hover-hint" class="font-bold text-sky-600 dark:text-sky-400">Nusantara & Semenanjung Melayu</span>
      </div>

      <div class="relative w-full h-[360px] bg-slate-100 dark:bg-[#151a22] rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 map-container-draggable" id="map-interactive-wrapper">
        <div class="absolute top-3 right-3 z-20 flex flex-col gap-1.5 bg-white/90 dark:bg-slate-800/90 backdrop-blur-md rounded-xl p-1 border border-slate-200 dark:border-slate-700 shadow-md">
          <button onclick="zoomMap(0.25)" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 active:scale-95 transition-all text-sm font-bold" title="Perbesar (Zoom In)">
            <i class="fa-solid fa-plus"></i>
          </button>
          <button onclick="zoomMap(-0.25)" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 active:scale-95 transition-all text-sm font-bold" title="Perkecil (Zoom Out)">
            <i class="fa-solid fa-minus"></i>
          </button>
          <button onclick="resetMapTransform()" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 active:scale-95 transition-all text-xs" title="Reset Posisi & Zoom">
            <i class="fa-solid fa-rotate-left"></i>
          </button>
        </div>

        <svg viewBox="0 0 950 480" class="w-full h-full select-none" id="nusantara-svg">
          <g id="map-pan-zoom-layer">
            <g id="map-regions">
              <path id="region-semenanjung" data-name="Pahang & Semenanjung" class="map-region" d="M220,100 C240,110 260,150 280,190 C290,210 270,230 250,230 C235,215 220,180 200,160 C190,130 205,105 220,100 Z" />
              <path id="region-aceh-sumut" data-name="Sumatera Utara" class="map-region" d="M120,140 C145,150 170,185 190,225 C180,240 160,250 145,230 C125,200 110,165 120,140 Z" />
              <path id="region-sumatera-selatan" data-name="Sumatera Selatan" class="map-region" d="M190,225 C215,260 250,305 285,345 C270,360 250,350 230,325 C200,285 175,250 190,225 Z" />
              <path id="region-jawa" data-name="Jawa" class="map-region" d="M285,360 C330,365 420,375 510,380 C505,395 440,398 370,395 C310,390 280,380 285,360 Z" />
              <path id="region-kalimantan" data-name="Kalimantan" class="map-region" d="M350,190 C390,170 450,175 490,220 C500,260 480,310 440,325 C390,330 360,280 345,230 C340,210 345,195 350,190 Z" />
              <path id="region-sulawesi" data-name="Sulawesi" class="map-region" d="M540,220 C560,200 580,220 570,250 C585,270 610,280 610,300 C590,305 570,285 555,280 C540,315 525,310 525,275 C520,245 530,230 540,220 Z" />
              <path id="region-nusatenggara" data-name="Nusa Tenggara" class="map-region" d="M525,385 C555,388 650,392 680,385 C675,398 600,405 530,398 Z" />
              <path id="region-maluku" data-name="Maluku" class="map-region" d="M635,230 C655,220 670,245 660,270 C650,295 630,280 635,230 Z M650,310 C665,305 675,325 660,340 C645,335 645,315 650,310 Z" />
              <path id="region-papua" data-name="Papua" class="map-region" d="M710,270 C760,260 830,280 870,305 C865,370 820,380 770,360 C735,345 700,310 710,270 Z" />
            </g>

            <text x="210" y="145" class="fill-slate-600 dark:fill-slate-400 text-[11px] font-bold pointer-events-none">Semenanjung</text>
            <text x="135" y="240" class="fill-slate-600 dark:fill-slate-400 text-[11px] font-bold pointer-events-none">Sumatera</text>
            <text x="390" y="255" class="fill-slate-600 dark:fill-slate-400 text-[11px] font-bold pointer-events-none">Kalimantan</text>
            <text x="360" y="380" class="fill-slate-600 dark:fill-slate-400 text-[11px] font-bold pointer-events-none">Jawa</text>
            <text x="545" y="265" class="fill-slate-600 dark:fill-slate-400 text-[11px] font-bold pointer-events-none">Sulawesi</text>
            <text x="760" y="325" class="fill-slate-600 dark:fill-slate-400 text-[11px] font-bold pointer-events-none">Papua</text>
          </g>
        </svg>
      </div>

      <div class="mt-3 flex flex-wrap gap-1.5 items-center">
        <span class="text-xs font-semibold text-slate-500 mr-1">Pilihan Cepat:</span>
        <button onclick="appendSearchTerm('Sumatera Utara')" class="px-2.5 py-1 text-xs font-medium rounded-lg bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 hover:border-sky-500">Sumatera Utara</button>
        <button onclick="appendSearchTerm('Pahang')" class="px-2.5 py-1 text-xs font-medium rounded-lg bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 hover:border-sky-500">Pahang</button>
        <button onclick="appendSearchTerm('Perak')" class="px-2.5 py-1 text-xs font-medium rounded-lg bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 hover:border-sky-500">Perak</button>
        <button onclick="appendSearchTerm('Kalimantan')" class="px-2.5 py-1 text-xs font-medium rounded-lg bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 hover:border-sky-500">Kalimantan</button>
        <button onclick="appendSearchTerm('Sulawesi')" class="px-2.5 py-1 text-xs font-medium rounded-lg bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 hover:border-sky-500">Sulawesi</button>
      </div>
    </div>

    <!-- Tab 2: 20 Kartu Suku Bangsa -->
    <div id="tab-content-suku" class="p-5 sm:p-7 block">
      <div class="flex items-center justify-between mb-4">
        <p class="text-xs text-slate-500 dark:text-slate-400 flex items-center gap-1.5">
          <i class="fa-solid fa-layer-group text-sky-500"></i> Disusun berurutan abjad. Klik kartu untuk menambahkan ke kolom pencarian di atas.
        </p>
        <span class="text-xs font-bold text-sky-600 dark:text-sky-400">20 Suku Bangsa Terdata</span>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-3.5 max-h-[420px] overflow-y-auto custom-scroll pr-1" id="suku-cards-grid">
        
        <!-- 1. Aceh -->
        <div onclick="appendSearchTerm('Aceh')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-merah-4">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c1.85 0 3.58-.5 5.08-1.38-4.54-1.07-7.91-5.18-7.91-10.08 0-3.32 1.57-6.28 4-8.18C12.78 2.13 12.4 2 12 2z"/>
                <polygon points="17,3.5 18.2,6.5 21.5,6.8 19,9 19.8,12.2 17,10.5 14.2,12.2 15,9 12.5,6.8 15.8,6.5"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Aceh</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-aceh.png') }}" alt="Suku Aceh" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/ec4848/ffffff?text=Aceh'">
          </div>
        </div>

        <!-- 2. Bali -->
        <div onclick="appendSearchTerm('Bali')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-ungu-2">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M5 21V9l3-4v16M19 21V9l-3-4v16M2 21h20M9 13h6"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Bali</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-bali.png') }}" alt="Suku Bali" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/0f766e/ffffff?text=Bali'">
          </div>
        </div>

        <!-- 3. Banjar -->
        <div onclick="appendSearchTerm('Banjar')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-hijau-3">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M12 3L3 11h3v9h12v-9h3L12 3z"/>
                <path d="M9 11l3-3 3 3v9H9v-9z"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Banjar</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-banjar.png') }}" alt="Suku Banjar" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/d97706/ffffff?text=Banjar'">
          </div>
        </div>

        <!-- 4. Batak -->
        <div onclick="appendSearchTerm('Batak')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-merah-1">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                <path d="M2 15C5 10 8 7 11 11L12 12.5L13 11C16 7 19 10 22 15C19 12 17 11 14 15L12 17.5L10 15C7 11 5 12 2 15Z"/>
                <circle cx="12" cy="6" r="2"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Batak</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-batak.png') }}" alt="Suku Batak" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/991b1b/ffffff?text=Batak'">
          </div>
        </div>

        <!-- 5. Bugis -->
        <div onclick="appendSearchTerm('Bugis')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-biru-2">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3L4 18h16L12 3z"/>
                <path d="M7 14h10"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Bugis</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-bugis.png') }}" alt="Suku Bugis" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/2563eb/ffffff?text=Bugis'">
          </div>
        </div>

        <!-- 6. Dayak -->
        <div onclick="appendSearchTerm('Dayak')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-kuning-4">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-slate-950 select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="#0f172a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/>
                <circle cx="12" cy="12" r="2.5" fill="#0f172a"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate text-slate-950">Dayak</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-dayak.png') }}" alt="Suku Dayak" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/f2b308/111827?text=Dayak'">
          </div>
        </div>

        <!-- 7. Gorontalo -->
        <div onclick="appendSearchTerm('Gorontalo')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-ungu-3">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <polygon points="12,2 15,8 21,9 17,14 18,20 12,17 6,20 7,14 3,9 9,8"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Gorontalo</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-gorontalo.png') }}" alt="Suku Gorontalo" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/4f46e5/ffffff?text=Gorontalo'">
          </div>
        </div>

        <!-- 8. Jawa -->
        <div onclick="appendSearchTerm('Jawa')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-oranye-2">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M12 2C8 7 5 11 5 16a7 7 0 0 0 14 0c0-5-3-9-7-14z"/>
                <path d="M12 2v20M8 14h8"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Jawa</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-jawa.png') }}" alt="Suku Jawa" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/b83d00/ffffff?text=Jawa'">
          </div>
        </div>

        <!-- 9. Kadazan-Dusun -->
        <div onclick="appendSearchTerm('Kadazan-Dusun')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-toska-4">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M4 18l8-12 8 12H4z"/>
                <path d="M9 18l3-5 3 5"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Kadazan</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-kadazandusun.png') }}" alt="Suku Kadazan" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/00b4b4/ffffff?text=Kadazan'">
          </div>
        </div>

        <!-- 10. Karo -->
        <div onclick="appendSearchTerm('Karo')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-merah-5">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M2 14l10-10 10 10v7H2v-7z"/>
                <path d="M9 21v-6h6v6"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Karo</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-karo.png') }}" alt="Suku Karo" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/881337/ffffff?text=Karo'">
          </div>
        </div>

        <!-- 11. Kerinci -->
        <div onclick="appendSearchTerm('Kerinci')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-magenta-3">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M3 20l9-15 9 15H3z"/>
                <path d="M8 20l4-7 4 7"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Kerinci</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-kerinci.png') }}" alt="Suku Kerinci" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/166534/ffffff?text=Kerinci'">
          </div>
        </div>

        <!-- 12. Lampung -->
        <div onclick="appendSearchTerm('Lampung')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-kelabu-1">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M2 17l3-10 4 6 3-9 3 9 4-6 3 10H2z"/>
                <line x1="2" y1="20" x2="22" y2="20" stroke="white" stroke-width="2"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Lampung</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-lampung.png') }}" alt="Suku Lampung" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/64748b/ffffff?text=Lampung'">
          </div>
        </div>

        <!-- 13. Madura -->
        <div onclick="appendSearchTerm('Madura')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-kelabu-5">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M19 4c-6 0-14 6-14 13a4 4 0 0 0 8 0c0-4-3-7-3-7"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Madura</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-madura.png') }}" alt="Suku Madura" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/be123c/ffffff?text=Madura'">
          </div>
        </div>

        <!-- 14. Makassar -->
        <div onclick="appendSearchTerm('Makassar')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-merah-3">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M5 21l7-18 4 6-8 12H5z"/>
                <path d="M12 3l7 18h-4"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Makassar</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-makassar.png') }}" alt="Suku Makassar" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/b91c1c/ffffff?text=Makassar'">
          </div>
        </div>

        <!-- 15. Melayu -->
        <div onclick="appendSearchTerm('Melayu')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-biru-1">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M3 18L9 6L14 14L18 5L21 18H3Z"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Melayu</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-melayu.png') }}" alt="Suku Melayu" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/15803d/ffffff?text=Melayu'">
          </div>
        </div>

        <!-- 16. Minangkabau -->
        <div onclick="appendSearchTerm('Minangkabau')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-oranye-1">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M2 12c3-4 6-9 7-9 1 3 2 6 3 9 1-3 2-6 3-9 1 0 4 5 7 9H2z"/>
                <path d="M4 12v7h16v-7"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Minang</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-minang.png') }}" alt="Suku Minang" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/9f1239/ffffff?text=Minang'">
          </div>
        </div>

        <!-- 17. Nias -->
        <div onclick="appendSearchTerm('Nias')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-toska-3">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-slate-950 select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="#0f172a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12,3 2,12 6,21 18,21 22,12"/>
                <line x1="12" y1="3" x2="12" y2="21"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate text-slate-950">Nias</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-nias.png') }}" alt="Suku Nias" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/ca8a04/111827?text=Nias'">
          </div>
        </div>

        <!-- 18. Sasak -->
        <div onclick="appendSearchTerm('Sasak')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-kuning-3">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M4 14C4 7 8 4 12 4s8 3 8 10H4z"/>
                <path d="M7 14v6M17 14v6M4 20h16"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Sasak</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-sasak.png') }}" alt="Suku Sasak" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/1d4ed8/ffffff?text=Sasak'">
          </div>
        </div>

        <!-- 19. Sunda -->
        <div onclick="appendSearchTerm('Sunda')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-ungu-1">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M12 2c2 3 5 5 5 9 0 4-3 7-5 7s-5-3-5-7c0-4 3-6 5-9z"/>
                <circle cx="12" cy="11" r="1.5" fill="#047857"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Sunda</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-sunda.png') }}" alt="Suku Sunda" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/047857/ffffff?text=Sunda'">
          </div>
        </div>

        <!-- 20. Toraja -->
        <div onclick="appendSearchTerm('Toraja')" class="cursor-pointer group h-16 sm:h-[72px] max-h-[74px] rounded-2xl overflow-hidden shadow-sm hover:shadow-md hover:scale-[1.01] transition-all flex items-stretch bg-kuning-1">
          <div class="flex-1 px-3.5 py-2 flex flex-col justify-center text-white select-none min-w-0">
            <div class="w-5 h-5 flex items-center mb-1">
              <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                <path d="M2 7c4 7 8 10 10 10s6-3 10-10C17 11 14 12 12 12S7 11 2 7z"/>
                <path d="M6 13v7h12v-7"/>
              </svg>
            </div>
            <h4 class="text-lg sm:text-xl font-black tracking-tight leading-none truncate">Toraja</h4>
          </div>
          <div class="h-full aspect-[4/3] shrink-0 relative overflow-hidden bg-black/10">
            <img src="{{ asset('images/search/search-toraja.png') }}" alt="Suku Toraja" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x300/b45309/ffffff?text=Toraja'">
          </div>
        </div>

      </div>
    </div>

    <!-- Footer Modal -->
    <div class="px-5 py-4 sm:px-7 sm:py-5 bg-white dark:bg-[#1b212a] border-t border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-3">
      <div class="text-xs text-slate-400 dark:text-slate-500 text-center sm:text-left">
        <span>Menampilkan seluruh arsip sejarah, manuskrip, dan kebudayaan serumpun.</span>
      </div>
      <div class="flex items-center gap-4 w-full sm:w-auto justify-end">
        <button onclick="resetSearchQuery()" class="text-xs font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
          Reset Filter
        </button>
        <button onclick="executeSearchAction()" class="px-6 py-2.5 rounded-full text-xs font-bold bg-[#1b212a] dark:bg-white text-white dark:text-slate-900 hover:opacity-90 shadow transition-all">
          Terapkan Pencarian
        </button>
      </div>
    </div>

  </div>
</div>