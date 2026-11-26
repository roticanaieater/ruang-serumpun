document.addEventListener('DOMContentLoaded', () => {
  // =========================================================================
  // 1. ROTASI BACKGROUND HERO SECTION
  // =========================================================================
  const heroImages = [
    "/images/background/bg-serumpun.png",
    "https://upload.wikimedia.org/wikipedia/commons/d/da/Istana_Maimoon_Medan.jpg",
    "https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=2000&q=80",
    "https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&w=2000&q=80"
  ];

  const layerA = document.getElementById('hero-bg-layer-a');
  const layerB = document.getElementById('hero-bg-layer-b');

  if (layerA && layerB) {
    let currentHeroIdx = Math.floor(Math.random() * heroImages.length);
    let activeLayer = 'A';

    layerA.src = heroImages[currentHeroIdx];

    function rotateBackground() {
      currentHeroIdx = (currentHeroIdx + 1) % heroImages.length;
      const nextUrl = heroImages[currentHeroIdx];

      if (activeLayer === 'A') {
        layerB.src = nextUrl;
        layerB.onload = () => {
          layerB.classList.replace('opacity-0', 'opacity-100');
          layerA.classList.replace('opacity-100', 'opacity-0');
          activeLayer = 'B';
        };
      } else {
        layerA.src = nextUrl;
        layerA.onload = () => {
          layerA.classList.replace('opacity-0', 'opacity-100');
          layerB.classList.replace('opacity-100', 'opacity-0');
          activeLayer = 'A';
        };
      }
    }

    setInterval(rotateBackground, 7000);
  }

  // =========================================================================
  // 2. INISIALISASI RIWAYAT NEGERI & TIMELINE SEJARAH
  // =========================================================================
  initRiwayatNegeri();
  initSerumpunTimeline();
  setTimeout(updateTimelineProgressBar, 120);
});

window.addEventListener('resize', () => {
  if (typeof updateTimelineProgressBar === 'function') {
    updateTimelineProgressBar();
  }
});

// ===========================================================================
// HELPER: PEMUAT SVG EKSTERNAL (MENDUKUNG currentColor UNTUK DARK/LIGHT MODE)
// ===========================================================================
const svgFileCache = new Map();

async function injectExternalSvg(containerEl, url, extraClasses = 'w-full h-full') {
  if (!containerEl || !url) return;

  try {
    let svgText = svgFileCache.get(url);
    if (!svgText) {
      const response = await fetch(url);
      if (!response.ok) throw new Error(`Gagal memuat SVG: ${url}`);
      svgText = await response.text();
      svgFileCache.set(url, svgText);
    }

    containerEl.innerHTML = svgText;
    const svgEl = containerEl.querySelector('svg');
    if (svgEl) {
      svgEl.removeAttribute('width');
      svgEl.removeAttribute('height');
      svgEl.setAttribute('class', `${extraClasses} drop-shadow-sm`);
    }
  } catch (err) {
    // Fallback bersih apabila file SVG belum diletakkan di folder public/images/...
    containerEl.innerHTML = `
      <div class="w-full h-full rounded-xl border border-dashed border-current/30 flex items-center justify-center opacity-50 text-[10px] font-mono text-center p-2">
        SVG
      </div>
    `;
  }
}

// ===========================================================================
// 1. DATA & LOGIKA RIWAYAT NEGERI (MEKANISME BARU + FILE SVG EKSTERNAL)
// ===========================================================================
// Folder aset:
// - Bendera / Lambang : /images/flags/regions/{nama-file}.svg
// - Peta Mini Negeri  : /images/maps/regions/{nama-file}.svg  (dimensi viewBox="0 0 140 140")
const daftarRiwayatNegeri = [
  {
    slug: "kesultanan-langkat",
    nama: "Langkat",
    aksara: "لڠكت",
    gambar: "https://upload.wikimedia.org/wikipedia/commons/7/78/COLLECTIE_TROPENMUSEUM_Paleis_van_de_Sultan_van_Langkat_tijdens_een_banjir_Tandjoengpoera_TMnr_60021731.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original",
    keterangan: "Kesultanan Langkat adalah sebuah kerajaan di wilayah Sumatra Timur. Kekuasaan politik Kesultanan Langkat berakhir pada masa pergolakan sosial di Sumatra Timur pada pertengahan abad ke-20.",
    isEmblem: false,
    benderaUrl: "/images/flags/regions/langkat.svg",
    petaUrl: "/images/minimaps/langkat.svg"
  },
  {
    slug: "negeri-pahang",
    nama: "Pahang",
    aksara: "ڤهڠ دار المعمور",
    gambar: "https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1200&q=80",
    keterangan: "Negeri Pahang Darul Makmur merupakan negeri tertua di Semenanjung dengan rekod tamadun purba benang emas, pusat perlawanan Mat Kilau serta jalinan sejarah erat dengan kesultanan Riau-Lingga.",
    isEmblem: false,
    benderaUrl: "/images/flags/regions/pahang.svg",
    petaUrl: "/images/minimaps/pahang.svg"
  },
  {
    slug: "kesultanan-brunei",
    nama: "Brunei",
    aksara: "بروني دار السلام",
    gambar: "https://images.unsplash.com/photo-1586075010923-2dd4570fb338?auto=format&fit=crop&w=1200&q=80",
    keterangan: "Empayar Kesultanan Brunei di bawah Sultan Bolkiah pada zaman kegemilangannya menguasai seluruh pesisir kepulauan Borneo hingga ke kepulauan Sulu dan Manila.",
    isEmblem: false,
    benderaUrl: "/images/flags/regions/brunei.svg",
    petaUrl: "/images/minimaps/brunei.svg"
  },
  {
    slug: "banten",
    nama: "Banten",
    aksara: "ᮘᮔ᮪ᮒᮨᮔ᮪ ᮒᮔᮂ ᮏᮝᮛ",
    gambar: "https://images.unsplash.com/photo-1658061927507-e135012dbe20?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
    keterangan: "Empayar Kesultanan Brunei di bawah Sultan Bolkiah pada zaman kegemilangannya menguasai seluruh pesisir kepulauan Borneo hingga ke kepulauan Sulu dan Manila.",
    isEmblem: true,
    benderaUrl: "/images/flags/regions/Coat_of_arms_of_Banten.svg",
    petaUrl: "/images/minimaps/banten.svg"
  },
  {
    slug: "kesultanan-aceh",
    nama: "Aceh",
    aksara: "اچيه دار السلام",
    gambar: "https://images.unsplash.com/photo-1591017683260-655b616bfb17?q=80&w=1700&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
    keterangan: "Kesultanan Banten pernah menjadi episentrum pelabuhan kosmopolitan internasional di Selat Sunda, memegang hegemoni lada dunia di bawah Sultan Ageng Tirtayasa.",
    isEmblem: false,
    benderaUrl: "/images/flags/regions/aceh.svg",
    petaUrl: "/images/minimaps/aceh.svg"
  },
  {
    slug: "negeri-kelantan",
    nama: "Kelantan",
    aksara: "كلنتن دار النعيم",
    gambar: "https://images.unsplash.com/photo-1646533776863-ca1f5ff138d1?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
    keterangan: "Kelantan Darul Naim merupakan negeri serambi Mekah di pantai timur Semenanjung dengan warisan seni kraf diraja, wayang kulit klasik, serta pertalian sejarah dengan Patani dan Champa.",
    isEmblem: false,
    benderaUrl: "/images/flags/regions/kelantan.svg",
    petaUrl: "/images/minimaps/kelantan.svg"
  },{
    slug: "bali",
    nama: "Bali",
    aksara: "ᬩᬮᬶ​ᬧᬸᬮᭁ​ᬤᬾᬯᬢ",
    gambar: "https://images.unsplash.com/photo-1711609110590-5ad5c4599e56?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
    keterangan: "Empayar Kesultanan Brunei di bawah Sultan Bolkiah pada zaman kegemilangannya menguasai seluruh pesisir kepulauan Borneo hingga ke kepulauan Sulu dan Manila.",
    isEmblem: true,
    benderaUrl: "/images/flags/regions/Coat_of_arms_of_Banten.svg",
    petaUrl: "/images/minimaps/bali.svg"
  },
];

let currentRiwayatIndex = 0;
let riwayatInterval = null;
let isRiwayatPaused = false;
const RIWAYAT_DURATION_MS = 6000;

function renderRiwayatProgressSegments() {
  const container = document.getElementById('riwayat-progress-segments');
  const counterEl = document.getElementById('riwayat-counter-text');
  if (!container) return;

  if (counterEl) {
    const cur = String(currentRiwayatIndex + 1).padStart(2, '0');
    const tot = String(daftarRiwayatNegeri.length).padStart(2, '0');
    counterEl.textContent = `${cur} / ${tot}`;
  }

  container.style.gridTemplateColumns = `repeat(${daftarRiwayatNegeri.length}, minmax(0, 1fr))`;
  container.innerHTML = daftarRiwayatNegeri.map((item, idx) => {
    const isDone = idx < currentRiwayatIndex;
    const isCurrent = idx === currentRiwayatIndex;
    return `
      <button
        type="button"
        onclick="jumpToRiwayatNegeri(${idx})"
        aria-label="Lihat sorotan ${item.nama}"
        title="${item.nama}"
        class="h-1.5 w-full rounded-full bg-[#1b212a]/15 dark:bg-white/15 overflow-hidden focus:outline-none cursor-pointer"
      >
        <div class="h-full rounded-full bg-[#C8A94E] dark:bg-[#facc15] ${
          isDone ? 'w-full' : isCurrent ? 'riwayat-progress-running ' + (isRiwayatPaused ? 'riwayat-progress-paused' : '') : 'w-0'
        }"></div>
      </button>
    `;
  }).join('');
}

function applyRiwayatData(index) {
  const data = daftarRiwayatNegeri[index];
  if (!data) return;

  const bgImg = document.getElementById('riwayat-bg-image');
  const flagBox = document.getElementById('riwayat-flag-container');
  const flagImg = document.getElementById('riwayat-flag-img');
  const headerOverlay = document.getElementById('riwayat-header-overlay');
  const bodyContent = document.getElementById('riwayat-body-content');
  const mapContainer = document.getElementById('riwayat-map-container');
  const readLink = document.getElementById('riwayat-read-link');

  // Fase keluar halus
  [flagBox, headerOverlay, bodyContent, mapContainer].forEach(el => {
    if (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(6px)';
    }
  });
  if (bgImg) bgImg.style.opacity = '0.35';

  setTimeout(() => {
    if (bgImg) {
      bgImg.classList.remove('riwayat-img-animate');
      bgImg.src = data.gambar;
      bgImg.alt = `Lanskap Sejarah ${data.nama}`;
      void bgImg.offsetWidth;
      bgImg.classList.add('riwayat-img-animate');
      bgImg.style.opacity = '1';
    }

    // Muat bendera / lambang dari file SVG eksternal
    if (flagBox && flagImg) {
  flagBox.className = `absolute top-5 left-5 sm:top-6 sm:left-7 z-10 w-20 sm:w-24 aspect-[4/3] rounded-xl overflow-hidden shadow-xl border border-white/25 dark:border-[#1b212a]/20 transition-all duration-300 bg-[#1b212a]/90 flex items-center justify-center ${
    data.isEmblem ? 'p-1.5' : ''
  }`;

  flagImg.src = data.benderaUrl;
  flagImg.alt = data.isEmblem ? `Lambang ${data.nama}` : `Bendera ${data.nama}`;
  flagImg.className = data.isEmblem
    ? 'max-w-full max-h-full object-contain drop-shadow'
    : 'w-full h-full object-fill';
}

    const titleEl = document.getElementById('riwayat-title-text');
    const scriptEl = document.getElementById('riwayat-script-text');
    const scriptSep = document.getElementById('riwayat-script-sep');
    const descEl = document.getElementById('riwayat-desc-text');

    if (titleEl) titleEl.textContent = data.nama;
    if (data.aksara) {
      if (scriptEl) { scriptEl.textContent = data.aksara; scriptEl.classList.remove('hidden'); }
      if (scriptSep) scriptSep.classList.remove('hidden');
    } else {
      if (scriptEl) scriptEl.classList.add('hidden');
      if (scriptSep) scriptSep.classList.add('hidden');
    }
    if (descEl) descEl.textContent = data.keterangan;

    // Muat peta mini dari file SVG eksternal (/images/maps/regions/*.svg)
    if (mapContainer) {
      injectExternalSvg(mapContainer, data.petaUrl, 'w-full h-full');
    }

    if (readLink) {
      readLink.href = `/riwayat-negeri/${data.slug}`;
    }

    // Fase masuk halus
    [flagBox, headerOverlay, bodyContent, mapContainer].forEach(el => {
      if (el) {
        el.style.opacity = '1';
        el.style.transform = 'translateY(0)';
      }
    });

    renderRiwayatProgressSegments();
  }, 240);
}

function jumpToRiwayatNegeri(index) {
  currentRiwayatIndex = index;
  applyRiwayatData(currentRiwayatIndex);
  restartRiwayatTimer();
}

function restartRiwayatTimer() {
  if (riwayatInterval) clearInterval(riwayatInterval);
  riwayatInterval = setInterval(() => {
    if (!isRiwayatPaused) {
      currentRiwayatIndex = (currentRiwayatIndex + 1) % daftarRiwayatNegeri.length;
      applyRiwayatData(currentRiwayatIndex);
    }
  }, RIWAYAT_DURATION_MS);
}

function pauseRiwayatRotation() {
  isRiwayatPaused = true;
  const statusLabel = document.getElementById('riwayat-status-label');
  if (statusLabel) statusLabel.textContent = 'Dijeda saat dibaca';
  const activeBar = document.querySelector('.riwayat-progress-running');
  if (activeBar) activeBar.classList.add('riwayat-progress-paused');
}

function resumeRiwayatRotation() {
  isRiwayatPaused = false;
  const statusLabel = document.getElementById('riwayat-status-label');
  if (statusLabel) statusLabel.textContent = 'Sorotan Bergilir';
  const activeBar = document.querySelector('.riwayat-progress-running');
  if (activeBar) activeBar.classList.remove('riwayat-progress-paused');
}

function initRiwayatNegeri() {
  if (!daftarRiwayatNegeri.length) return;
  currentRiwayatIndex = Math.floor(Math.random() * daftarRiwayatNegeri.length);
  applyRiwayatData(currentRiwayatIndex);
  restartRiwayatTimer();
}

// ===========================================================================
// 2. DATA & LOGIKA TIMELINE SEJARAH (IKON SVG EKSTERNAL)
// ===========================================================================
// Folder aset ikon timeline: /images/icons/timeline/{nama-file}.svg (viewBox="0 0 96 96")
const timelineEvents = [
  {
    id: 1,
    slug: "hubungan-sriwijaya-dan-kedah",
    period: "Abad ke-7",
    title: "Hubungan Sriwijaya & Kedah",
    summary: "Kemaharajaan Sriwijaya yang berpusat di Sumatra menjalin integrasi erat dengan Kedah Tua di Semenanjung Tanah Melayu sebagai gerbang utama pelayaran lintas samudra.",
    iconUrl: "/images/icons/timeline/sriwijaya-kedah.svg"
  },
  {
    id: 2,
    slug: "mia-patalima-johor-kerajaan-buton",
    period: "Abad ke-14",
    title: "Mia Patalima dari Johor Mendirikan Kerajaan Buton",
    summary: "Rombongan perantau Melayu dari Johor (Mia Patalima) berlayar ke timur dan berperan penting dalam peletakan dasar berdirinya Kerajaan Buton bersama Ratu Wa Kaa Kaa.",
    iconUrl: "/images/icons/timeline/johor-buton.svg"
  },
  {
    id: 3,
    slug: "hubungan-melaka-dan-pasai",
    period: "Abad ke-15",
    title: "Hubungan Melaka dan Pasai",
    summary: "Pertalian erat antara Samudera Pasai sebagai serambi keilmuan Islam pertama dengan Kesultanan Melaka sebagai pusat perdagangan maritim terbesar di Asia Tenggara.",
    iconUrl: "/images/icons/timeline/melaka-pasai.svg"
  },
  {
    id: 4,
    slug: "pasang-surut-hubungan-aceh-johor",
    period: "Abad ke-16",
    title: "Pasang Surut Hubungan Aceh-Johor",
    summary: "Interaksi dinamis antara dua adidaya Melayu pasca-1511 yang silih berganti menjalin persekutuan keluarga dan bersaing menguasai jalur niaga Selat Melaka.",
    iconUrl: "/images/icons/timeline/aceh-johor.svg"
  },
  {
    id: 5,
    slug: "kehadiran-pelaut-bugis-tanah-melayu",
    period: "Abad ke-17",
    title: "Kehadiran Pelaut Bugis di Tanah Melayu",
    summary: "Para bangsawan dan pelaut ulung Bugis dari Sulawesi Selatan berlayar ke barat dan menjadi sekutu strategis dalam menjaga kedaulatan Kesultanan Johor-Riau.",
    iconUrl: "/images/icons/timeline/bugis-melayu.svg"
  },
  {
    id: 6,
    slug: "perjuangan-raja-haji-fisabilillah",
    period: "Abad ke-18",
    title: "Perjuangan Raja Haji Fisabilillah di Selat Melaka",
    summary: "Yang Dipertuan Muda Riau ke-4 memimpin armada gabungan Melayu-Bugis dari Riau dan Selangor mengepung benteng VOC di Melaka demi mempertahankan kemerdekaan perairan.",
    iconUrl: "/images/icons/timeline/raja-haji.svg"
  },
  {
    id: 7,
    slug: "jaringan-cendekiawan-riau-lingga-betawi",
    period: "Abad ke-19",
    title: "Jaringan Cendekiawan Riau-Lingga & Betawi",
    summary: "Para cendekiawan Pulau Penyengat menerbitkan karya-karya monumental tata bahasa dan kamus yang menyatukan standar literasi pembaca di seluruh kepulauan Nusantara.",
    iconUrl: "/images/icons/timeline/cendekiawan-riau.svg"
  },
  {
    id: 8,
    slug: "sumpah-pemuda-solidaritas-serumpun",
    period: "Abad ke-20",
    title: "Sumpah Pemuda & Solidaritas Serumpun",
    summary: "Puncak kesadaran persaudaraan lintas suku dan pulau melalui ikrar Sumpah Pemuda 1928 yang kelak turut menginspirasi semangat kemerdekaan di kawasan Asia Tenggara.",
    iconUrl: "/images/icons/timeline/sumpah-pemuda.svg"
  }
];

let activeTimelineIndex = 0;

function initSerumpunTimeline() {
  const tlTrack = document.getElementById('serumpun-timeline-track');
  const tlViewport = document.getElementById('serumpun-timeline-viewport');
  const tlBtnPrev = document.getElementById('tl-btn-prev');
  const tlBtnNext = document.getElementById('tl-btn-next');

  if (!tlTrack) return;

  tlTrack.innerHTML = `
    <div class="absolute left-0 right-0 top-[156px] sm:top-[172px] h-[2px] bg-[#1b212a]/20 dark:bg-slate-700 rounded-full z-0">
      <div id="serumpun-timeline-progress" class="h-full bg-gradient-to-r from-[#C8A94E] to-[#9A7B2C] dark:from-[#facc15] dark:to-amber-400 rounded-full transition-all duration-700 ease-[cubic-bezier(0.22,1,0.36,1)]" style="width: 120px;"></div>
    </div>
  `;

  timelineEvents.forEach((ev, index) => {
    const isActive = index === activeTimelineIndex;

    const nodeCol = document.createElement('div');
    nodeCol.id = `tl-node-${index}`;
    nodeCol.dataset.active = isActive ? 'true' : 'false';
    nodeCol.className = 'tl-node group relative z-10 flex flex-col items-center w-[250px] sm:w-[285px] shrink-0';

    nodeCol.innerHTML = `
      <!-- 1. Ikon SVG Eksternal Khas Peristiwa -->
      <button 
        type="button"
        onclick="selectTimelineNode(${index})"
        aria-label="Pilih peristiwa ${ev.title}"
        class="h-24 sm:h-28 flex items-end justify-center pb-2 focus:outline-none cursor-pointer"
      >
        <div id="tl-icon-${index}" class="tl-icon-wrapper w-16 h-20 sm:w-20 sm:h-24 text-[#1b212a] dark:text-slate-200 flex items-center justify-center"></div>
      </button>

      <!-- 2. Label Periode / Abad -->
      <button 
        type="button"
        onclick="selectTimelineNode(${index})"
        class="tl-period-label text-xs sm:text-[13px] font-extrabold tracking-wide uppercase mb-3 focus:outline-none transition-colors duration-300 ${
          isActive ? 'text-[#9A7B2C] dark:text-[#facc15]' : 'text-slate-600 dark:text-slate-400 group-hover:text-[#1b212a] dark:group-hover:text-white'
        }"
      >
        ${ev.period}
      </button>

      <!-- 3. Simpul Bulat pada Garis Waktu -->
      <div class="relative flex items-center justify-center h-8 mb-4">
        <button 
          type="button"
          onclick="selectTimelineNode(${index})"
          aria-expanded="${isActive}"
          aria-label="Simpul ${ev.period}: ${ev.title}"
          class="tl-dot w-3.5 h-3.5 rounded-full bg-[#1b212a] dark:bg-slate-400 border-2 border-[#F5F2E9] dark:border-[#12161c] hover:bg-[#C8A94E] focus:outline-none cursor-pointer"
        ></button>
      </div>

      <!-- 4. Judul & Accordion Ringkasan (Gelap di Light Mode | Terang Ivory di Dark Mode) -->
      <div class="tl-card-surface w-full rounded-2xl border border-transparent px-4 py-3.5 text-center">
        <button 
          type="button"
          onclick="selectTimelineNode(${index})"
          class="w-full focus:outline-none cursor-pointer"
        >
          <h4 class="tl-title-text font-editorial font-bold text-sm sm:text-base leading-snug transition-colors duration-300 ${
            isActive ? 'text-white dark:text-[#1b212a] text-left' : 'text-[#1b212a]/85 dark:text-slate-300 group-hover:text-[#9A7B2C] dark:group-hover:text-[#facc15] text-center'
          }">
            ${ev.title}
          </h4>
        </button>

        <div class="tl-accordion-grid text-left">
          <div class="tl-accordion-inner">
            <div class="pt-2.5 pb-1">
              <p class="text-xs text-slate-200 dark:text-slate-700 leading-relaxed">
                ${ev.summary}
              </p>
              <div class="mt-4 pt-3 border-t border-white/15 dark:border-[#E4DEC9] flex justify-start">
                <a 
                  href="/sejarah/${ev.slug}"
                  class="group/tlbtn inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-[#facc15] hover:bg-yellow-300 text-[#1b212a] dark:bg-[#1b212a] dark:hover:bg-[#2a3340] dark:text-[#facc15] font-bold text-[11px] shadow-sm transition-all duration-200"
                >
                  <span>Baca selengkapnya</span>
                  <i class="fa-solid fa-arrow-right text-[10px] transition-transform duration-200 group-hover/tlbtn:translate-x-0.5"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    `;

    tlTrack.appendChild(nodeCol);

    // Muat file SVG eksternal untuk masing-masing simpul linimasa
    const iconBox = document.getElementById(`tl-icon-${index}`);
    injectExternalSvg(iconBox, ev.iconUrl, 'w-full h-full');
  });

  // Drag-to-scroll untuk Horizontal Timeline Slider
  let tlIsDown = false;
  let tlStartX = 0;
  let tlScrollLeft = 0;
  let tlHasDragged = false;

  if (tlViewport) {
    tlViewport.addEventListener('mousedown', (e) => {
      tlIsDown = true;
      tlHasDragged = false;
      tlViewport.classList.add('cursor-grabbing');
      tlViewport.classList.remove('cursor-grab');
      tlStartX = e.pageX - tlViewport.offsetLeft;
      tlScrollLeft = tlViewport.scrollLeft;
    });
    tlViewport.addEventListener('mouseleave', () => {
      tlIsDown = false;
      tlViewport.classList.remove('cursor-grabbing');
      tlViewport.classList.add('cursor-grab');
    });
    tlViewport.addEventListener('mouseup', () => {
      tlIsDown = false;
      tlViewport.classList.remove('cursor-grabbing');
      tlViewport.classList.add('cursor-grab');
    });
    tlViewport.addEventListener('mousemove', (e) => {
      if (!tlIsDown) return;
      e.preventDefault();
      const x = e.pageX - tlViewport.offsetLeft;
      const walk = (x - tlStartX) * 1.4;
      if (Math.abs(walk) > 6) tlHasDragged = true;
      tlViewport.scrollLeft = tlScrollLeft - walk;
    });
    tlViewport.addEventListener('click', (e) => {
      if (tlHasDragged) {
        e.stopPropagation();
        tlHasDragged = false;
      }
    }, true);
  }

  if (tlBtnPrev) tlBtnPrev.addEventListener('click', () => selectTimelineNode(activeTimelineIndex - 1));
  if (tlBtnNext) tlBtnNext.addEventListener('click', () => selectTimelineNode(activeTimelineIndex + 1));

  updateTimelineIndicators();
}

function selectTimelineNode(index) {
  if (index < 0 || index >= timelineEvents.length) return;
  activeTimelineIndex = index;

  timelineEvents.forEach((_, idx) => {
    const nodeEl = document.getElementById(`tl-node-${idx}`);
    if (!nodeEl) return;

    const isActive = idx === activeTimelineIndex;
    nodeEl.dataset.active = isActive ? 'true' : 'false';

    const dotBtn = nodeEl.querySelector('.tl-dot');
    if (dotBtn) dotBtn.setAttribute('aria-expanded', isActive ? 'true' : 'false');

    const periodBtn = nodeEl.querySelector('.tl-period-label');
    if (periodBtn) {
      periodBtn.className = `tl-period-label text-xs sm:text-[13px] font-extrabold tracking-wide uppercase mb-3 focus:outline-none transition-colors duration-300 ${
        isActive ? 'text-[#9A7B2C] dark:text-[#facc15]' : 'text-slate-600 dark:text-slate-400 group-hover:text-[#1b212a] dark:group-hover:text-white'
      }`;
    }

    const titleEl = nodeEl.querySelector('.tl-title-text');
    if (titleEl) {
      titleEl.className = `tl-title-text font-editorial font-bold text-sm sm:text-base leading-snug transition-colors duration-300 ${
        isActive ? 'text-white dark:text-[#1b212a] text-left' : 'text-[#1b212a]/85 dark:text-slate-300 group-hover:text-[#9A7B2C] dark:group-hover:text-[#facc15] text-center'
      }`;
    }
  });

  updateTimelineIndicators();

  const activeEl = document.getElementById(`tl-node-${index}`);
  if (activeEl) {
    activeEl.scrollIntoView({
      behavior: 'smooth',
      block: 'nearest',
      inline: 'center'
    });
  }
}

function updateTimelineIndicators() {
  const tlCounter = document.getElementById('tl-active-counter');
  const tlBtnPrev = document.getElementById('tl-btn-prev');
  const tlBtnNext = document.getElementById('tl-btn-next');

  if (tlCounter) {
    tlCounter.textContent = `${activeTimelineIndex + 1} / ${timelineEvents.length}`;
  }
  if (tlBtnPrev) tlBtnPrev.disabled = activeTimelineIndex === 0;
  if (tlBtnNext) tlBtnNext.disabled = activeTimelineIndex === timelineEvents.length - 1;
  updateTimelineProgressBar();
}

function updateTimelineProgressBar() {
  const progressBar = document.getElementById('serumpun-timeline-progress');
  const activeEl = document.getElementById(`tl-node-${activeTimelineIndex}`);
  if (progressBar && activeEl) {
    const centerOffset = activeEl.offsetLeft + (activeEl.offsetWidth / 2);
    progressBar.style.width = `${centerOffset}px`;
  }
}

// Ekspos fungsi global agar bisa dipanggil oleh event onclick di Blade
window.jumpToRiwayatNegeri = jumpToRiwayatNegeri;
window.pauseRiwayatRotation = pauseRiwayatRotation;
window.resumeRiwayatRotation = resumeRiwayatRotation;
window.initRiwayatNegeri = initRiwayatNegeri;
window.selectTimelineNode = selectTimelineNode;
window.initSerumpunTimeline = initSerumpunTimeline;