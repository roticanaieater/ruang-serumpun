/* ==========================================================================
       1. STATE MANAGEMENT & DATA
       ========================================================================== */
const state = {
  activeTab: 'daerah',
  isDarkMode: false,
  currentLanguage: 'id',
  lastScrollY: window.scrollY,
  heroHeight: 0
};

// Database Komprehensif untuk Autocomplete & Pencarian Serumpun
const serumpunDatabase = [
  { name: "Pahang", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Perak", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Perlis", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Papua", type: "daerah", category: "Provinsi Indonesia" },
  { name: "Palembang", type: "daerah", category: "Sumatera Selatan" },
  { name: "Pontianak", type: "daerah", category: "Kalimantan Barat" },
  { name: "Padang", type: "daerah", category: "Sumatera Barat" },
  { name: "Sumatera Utara", type: "daerah", category: "Provinsi Indonesia" },
  { name: "Sumatera Barat", type: "daerah", category: "Provinsi Indonesia" },
  { name: "Riau", type: "daerah", category: "Pusat Kebudayaan Melayu" },
  { name: "Kepulauan Riau", type: "daerah", category: "Provinsi Indonesia" },
  { name: "Johor", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Kedah", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Kelantan", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Terengganu", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Selangor", type: "daerah", category: "Negeri Semenanjung Melayu" },
  { name: "Sabah", type: "daerah", category: "Borneo Timur" },
  { name: "Sarawak", type: "daerah", category: "Borneo Barat" },
  { name: "Brunei Darussalam", type: "daerah", category: "Kesultanan Borneo" },
  { name: "Kalimantan Barat", type: "daerah", category: "Provinsi Indonesia" },
  { name: "Kalimantan Selatan", type: "daerah", category: "Banjar / Borneo" },
  { name: "Sulawesi Selatan", type: "daerah", category: "Bugis / Makassar" },
  { name: "Aceh", type: "daerah", category: "Serambi Mekkah" },
  { name: "Jawa Barat", type: "daerah", category: "Tatar Sunda" },
  { name: "Jawa Tengah", type: "daerah", category: "Kejawen" },
  { name: "Jawa Timur", type: "daerah", category: "Arekan / Majapahit" },

  // Suku Bangsa Serumpun & Nusantara
  { name: "Aceh", type: "suku", category: "Suku Bangsa Pesisir & Gayo" },
  { name: "Bali", type: "suku", category: "Suku Bangsa Pulau Dewata" },
  { name: "Banjar", type: "suku", category: "Suku Bangsa Kalimantan Selatan" },
  { name: "Batak", type: "suku", category: "Suku Bangsa Toba, Karo, Mandailing" },
  { name: "Bugis", type: "suku", category: "Suku Bangsa Maritim Sulawesi" },
  { name: "Dayak", type: "suku", category: "Suku Bangsa Pedalaman Borneo" },
  { name: "Gorontalo", type: "suku", category: "Suku Bangsa Pesisir Gorontalo" },
  { name: "Jawa", type: "suku", category: "Suku Bangsa Jawa & Pesisir" },
  { name: "Kadazan-Dusun", type: "suku", category: "Suku Bangsa Sabah Borneo" },
  { name: "Karo", type: "suku", category: "Suku Bangsa Dataran Tinggi Karo" },
  { name: "Kerinci", type: "suku", category: "Suku Bangsa Lembah Sakti Jambi" },
  { name: "Lampung", type: "suku", category: "Suku Bangsa Saibatin & Pepadun" },
  { name: "Madura", type: "suku", category: "Suku Bangsa Pulau Garam" },
  { name: "Makassar", type: "suku", category: "Suku Bangsa Gowa & Tallo" },
  { name: "Melayu", type: "suku", category: "Rumpun Utama Pesisir Nusantara" },
  { name: "Minangkabau", type: "suku", category: "Suku Bangsa Ranah Minang" },
  { name: "Nias", type: "suku", category: "Suku Bangsa Pulau Nias / Ono Niha" },
  { name: "Sasak", type: "suku", category: "Suku Bangsa Pulau Lombok" },
  { name: "Sunda", type: "suku", category: "Suku Bangsa Parahyangan" },
  { name: "Toraja", type: "suku", category: "Suku Bangsa Dataran Tinggi Sulsel" }
];

/* ==========================================================================
   2. ADAPTIVE NAVBAR & SMART HIDE ON SCROLL LOGIC
   ========================================================================== */
const mainNavbar = document.getElementById('main-navbar');
const heroSection = document.getElementById('hero');
const navBrandText = document.getElementById('nav-brand-text');
const navItemLinks = document.querySelectorAll('.nav-item-link');
const navMiscIcons = document.querySelectorAll('#nav-misc-actions button');
const langArrow = document.getElementById('lang-arrow');

function updateNavbarAesthetics() {
  const scrollPos = window.scrollY;
  const heroBottom = heroSection ? (heroSection.offsetHeight - 90) : 400;
  const isPastHero = scrollPos > heroBottom;

  const currentScrollY = window.scrollY;
  const scrollDelta = currentScrollY - state.lastScrollY;

  if (currentScrollY > 150 && scrollDelta > 6) {
    mainNavbar.classList.add('nav-hidden');
  } else if (scrollDelta < -4 || currentScrollY <= 80) {
    mainNavbar.classList.remove('nav-hidden');
  }

  state.lastScrollY = currentScrollY;

  if (isPastHero) {
    mainNavbar.classList.add(
      'bg-white/95',
      'dark:bg-[#1b212a]/95',
      'shadow-lg',
      'shadow-black/5',
      'backdrop-blur-md',
      'border-slate-200/80',
      'dark:border-slate-800'
    );
    mainNavbar.classList.remove('bg-transparent', 'border-transparent');

    navBrandText.classList.remove('text-white');
    navBrandText.classList.add('text-[#1b212a]', 'dark:text-white');

    navItemLinks.forEach(link => {
      link.classList.remove('text-white', 'hover:text-sky-300');
      link.classList.add('text-[#1b212a]', 'dark:text-slate-200', 'hover:text-sky-600', 'dark:hover:text-sky-400');
    });

    navMiscIcons.forEach(btn => {
      btn.classList.remove('text-white', 'hover:bg-white/20');
      btn.classList.add('text-[#1b212a]', 'dark:text-white', 'hover:bg-slate-100', 'dark:hover:bg-slate-800');
    });
    if (langArrow) {
      langArrow.classList.remove('text-white');
      langArrow.classList.add('text-[#1b212a]', 'dark:text-white');
    }

  } else {
    mainNavbar.classList.remove(
      'bg-white/95',
      'dark:bg-[#1b212a]/95',
      'shadow-lg',
      'shadow-black/5',
      'backdrop-blur-md',
      'border-slate-200/80',
      'dark:border-slate-800'
    );
    mainNavbar.classList.add('bg-transparent', 'border-transparent');

    navBrandText.classList.add('text-white');
    navBrandText.classList.remove('text-[#1b212a]', 'dark:text-white');

    navItemLinks.forEach(link => {
      link.classList.add('text-white', 'hover:text-sky-300');
      link.classList.remove('text-[#1b212a]', 'dark:text-slate-200', 'hover:text-sky-600', 'dark:hover:text-sky-400');
    });

    navMiscIcons.forEach(btn => {
      btn.classList.add('text-white', 'hover:bg-white/20');
      btn.classList.remove('text-[#1b212a]', 'dark:text-white', 'hover:bg-slate-100', 'dark:hover:bg-slate-800');
    });
    if (langArrow) {
      langArrow.classList.add('text-white');
      langArrow.classList.remove('text-[#1b212a]', 'dark:text-white');
    }
  }
}

window.addEventListener('scroll', updateNavbarAesthetics, { passive: true });
window.addEventListener('resize', () => {
  if (heroSection) state.heroHeight = heroSection.offsetHeight;
});

/* ==========================================================================
   3. DARK MODE TOGGLE
   ========================================================================== */
const themeToggleBtn = document.getElementById('theme-toggle-btn');
const themeIcon = document.getElementById('theme-icon');

function toggleDarkMode() {
  state.isDarkMode = !state.isDarkMode;
  if (state.isDarkMode) {
    document.documentElement.classList.add('dark');
    themeIcon.classList.replace('fa-moon', 'fa-sun');
    localStorage.setItem('serumpun_theme', 'dark');
  } else {
    document.documentElement.classList.remove('dark');
    themeIcon.classList.replace('fa-sun', 'fa-moon');
    localStorage.setItem('serumpun_theme', 'light');
  }
  updateNavbarAesthetics();
}

themeToggleBtn.addEventListener('click', toggleDarkMode);

if (localStorage.getItem('serumpun_theme') === 'dark' ||
  (!localStorage.getItem('serumpun_theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  toggleDarkMode();
}

/* ==========================================================================
   4. LANGUAGE DROPDOWN
   ========================================================================== */
const langBtn = document.getElementById('lang-btn');
const langDropdown = document.getElementById('lang-dropdown');
const currentFlag = document.getElementById('current-flag');

langBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  langDropdown.classList.toggle('hidden');
  langArrow.classList.toggle('rotate-180');
});

document.addEventListener('click', () => {
  if (!langDropdown.classList.contains('hidden')) {
    langDropdown.classList.add('hidden');
    langArrow.classList.remove('rotate-180');
  }
});

function selectLanguage(code, name, flagUrl) {
  state.currentLanguage = code;
  currentFlag.src = flagUrl;
  currentFlag.alt = name;
  langDropdown.classList.add('hidden');
  langArrow.classList.remove('rotate-180');
}

/* ==========================================================================
   5. MOBILE SIDEBAR DRAWER
   ========================================================================== */
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileSidebar = document.getElementById('mobile-sidebar');
const mobileSidebarBackdrop = document.getElementById('mobile-sidebar-backdrop');
const closeSidebarBtn = document.getElementById('close-sidebar-btn');
const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

function openMobileSidebar() {
  mobileSidebarBackdrop.classList.remove('hidden');
  setTimeout(() => {
    mobileSidebarBackdrop.classList.remove('opacity-0');
    mobileSidebar.classList.remove('translate-x-full');
  }, 10);
}

function closeMobileSidebar() {
  mobileSidebar.classList.add('translate-x-full');
  mobileSidebarBackdrop.classList.add('opacity-0');
  setTimeout(() => {
    mobileSidebarBackdrop.classList.add('hidden');
  }, 300);
}

mobileMenuToggle.addEventListener('click', openMobileSidebar);
closeSidebarBtn.addEventListener('click', closeMobileSidebar);
mobileSidebarBackdrop.addEventListener('click', closeMobileSidebar);
mobileNavLinks.forEach(link => link.addEventListener('click', closeMobileSidebar));

function handleAuthClick(action) {
  closeMobileSidebar();
  const actionName = action === 'masuk' ? 'Halaman Masuk' : 'Pendaftaran Saudara Serumpun';
  showToastFeedback(`Membuka modal ${actionName}...`);
}

/* ==========================================================================
   6. SEARCH MODAL & TAB CONTROL
   ========================================================================== */
const searchModal = document.getElementById('search-modal');
const searchModalCard = document.getElementById('search-modal-card');
const openSearchBtn = document.getElementById('open-search-btn');
const closeSearchBtn = document.getElementById('close-search-btn');
const searchInput = document.getElementById('search-input');
const autocompleteBox = document.getElementById('autocomplete-box');
const clearSearchBtn = document.getElementById('clear-search-btn');

const tabBtnDaerah = document.getElementById('tab-btn-daerah');
const tabBtnSuku = document.getElementById('tab-btn-suku');
const tabContentDaerah = document.getElementById('tab-content-daerah');
const tabContentSuku = document.getElementById('tab-content-suku');

function openSearchModal() {
  searchModal.classList.remove('hidden');
  setTimeout(() => {
    searchModal.classList.remove('opacity-0');
    searchModalCard.classList.remove('scale-95');
    searchModalCard.classList.add('scale-100');
    searchInput.focus();
  }, 20);
}

function openSearchModalWithTab(tab) {
  openSearchModal();
  switchSearchTab(tab);
}

function closeSearchModal() {
  searchModalCard.classList.remove('scale-100');
  searchModalCard.classList.add('scale-95');
  searchModal.classList.add('opacity-0');
  setTimeout(() => {
    searchModal.classList.add('hidden');
    autocompleteBox.classList.add('hidden');
  }, 250);
}

openSearchBtn.addEventListener('click', openSearchModal);
closeSearchBtn.addEventListener('click', closeSearchModal);

searchModal.addEventListener('click', (e) => {
  if (e.target === searchModal) closeSearchModal();
});

function switchSearchTab(tab) {
  state.activeTab = tab;
  if (tab === 'daerah') {
    tabBtnDaerah.className = "w-full sm:w-1/2 py-2.5 px-6 rounded-full font-bold text-sm transition-all duration-200 shadow-sm bg-[#111827] text-white dark:bg-white dark:text-slate-900 flex items-center justify-center gap-2";
    tabBtnSuku.className = "w-full sm:w-1/2 py-2.5 px-6 rounded-full font-bold text-sm transition-all duration-200 border-2 border-slate-900 dark:border-slate-400 text-slate-900 dark:text-white bg-transparent hover:bg-slate-100 dark:hover:bg-slate-800 flex items-center justify-center gap-2";
    tabContentDaerah.classList.remove('hidden');
    tabContentSuku.classList.add('hidden');
  } else {
    tabBtnSuku.className = "w-full sm:w-1/2 py-2.5 px-6 rounded-full font-bold text-sm transition-all duration-200 shadow-sm bg-[#111827] text-white dark:bg-white dark:text-slate-900 flex items-center justify-center gap-2";
    tabBtnDaerah.className = "w-full sm:w-1/2 py-2.5 px-6 rounded-full font-bold text-sm transition-all duration-200 border-2 border-slate-900 dark:border-slate-400 text-slate-900 dark:text-white bg-transparent hover:bg-slate-100 dark:hover:bg-slate-800 flex items-center justify-center gap-2";
    tabContentSuku.classList.remove('hidden');
    tabContentDaerah.classList.add('hidden');
  }
}

/* ==========================================================================
   7. DIRECT SEARCH POPULATION & DRAFT PRESERVATION
   ========================================================================== */
function appendSearchTerm(term) {
  const currentVal = searchInput.value.trim();
  if (!currentVal) {
    searchInput.value = term;
  } else {
    const parts = currentVal.split(',').map(s => s.trim().toLowerCase());
    if (!parts.includes(term.toLowerCase())) {
      searchInput.value = currentVal + ', ' + term;
    }
  }
  clearSearchBtn.classList.remove('hidden');
  showToastFeedback(`Ditambahkan ke pencarian: "${term}"`);
  searchInput.focus();
}

function resetSearchQuery() {
  searchInput.value = '';
  clearSearchBtn.classList.add('hidden');
  autocompleteBox.classList.add('hidden');
  document.querySelectorAll('.map-region').forEach(p => p.classList.remove('selected-region'));
  resetMapTransform();
  showToastFeedback("Kolom pencarian dibersihkan.");
}

function executeSearchAction() {
  const query = searchInput.value.trim() || 'Semua Khazanah Peradaban';
  closeSearchModal();
  showToastFeedback(`Membuka arsip untuk: "${query}"`);
}

/* ==========================================================================
   8. AUTO-FILL / AUTOCOMPLETE LOGIC
   ========================================================================== */
searchInput.addEventListener('input', (e) => {
  const val = e.target.value.trim().toLowerCase();
  if (val.length > 0) {
    clearSearchBtn.classList.remove('hidden');
    renderAutocompleteSuggestions(val);
  } else {
    clearSearchBtn.classList.add('hidden');
    autocompleteBox.classList.add('hidden');
  }
});

clearSearchBtn.addEventListener('click', () => {
  searchInput.value = '';
  clearSearchBtn.classList.add('hidden');
  autocompleteBox.classList.add('hidden');
  searchInput.focus();
});

function renderAutocompleteSuggestions(keyword) {
  const lastToken = keyword.split(',').pop().trim();
  if (!lastToken) {
    autocompleteBox.classList.add('hidden');
    return;
  }

  const matches = serumpunDatabase.filter(item =>
    item.name.toLowerCase().startsWith(lastToken) ||
    item.name.toLowerCase().includes(lastToken)
  );

  if (matches.length === 0) {
    autocompleteBox.innerHTML = `
          <div class="px-4 py-3 text-xs text-slate-400 text-center">
            Tekan Enter untuk mencari bebas kata "<strong>${lastToken}</strong>".
          </div>
        `;
    autocompleteBox.classList.remove('hidden');
    return;
  }

  autocompleteBox.innerHTML = '';
  matches.forEach(item => {
    const itemBtn = document.createElement('button');
    itemBtn.className = "w-full px-4 py-2.5 flex items-center justify-between text-left hover:bg-sky-50 dark:hover:bg-slate-700/60 transition-colors text-slate-800 dark:text-slate-100";

    const regex = new RegExp(`(${lastToken})`, 'gi');
    const highlightedName = item.name.replace(regex, '<span class="text-sky-600 dark:text-sky-400 font-extrabold">$1</span>');

    itemBtn.innerHTML = `
          <div class="flex items-center gap-2.5">
            <i class="${item.type === 'daerah' ? 'fa-solid fa-location-dot text-amber-500' : 'fa-solid fa-users text-emerald-500'} text-xs"></i>
            <span class="text-sm font-semibold">${highlightedName}</span>
          </div>
          <span class="text-[11px] text-slate-400 uppercase tracking-wider">${item.category}</span>
        `;

    itemBtn.addEventListener('click', () => {
      appendSearchTerm(item.name);
      autocompleteBox.classList.add('hidden');
    });

    autocompleteBox.appendChild(itemBtn);
  });

  autocompleteBox.classList.remove('hidden');
}

/* ==========================================================================
   9. PETA INTERAKTIF SVG (ZOOM & DRAG / PAN BEBAS)
   ========================================================================== */
const mapWrapper = document.getElementById('map-interactive-wrapper');
const mapTooltip = document.getElementById('map-floating-tooltip');
const tooltipLogo = document.getElementById('tooltip-logo');
const tooltipTitle = document.getElementById('tooltip-title');
const tooltipSubtitle = document.getElementById('tooltip-subtitle');
const mapRegions = document.querySelectorAll('.map-region');
const mapHoverHint = document.getElementById('map-hover-hint');

let mapScale = 1;
let mapTranslateX = 0;
let mapTranslateY = 0;
let isDraggingMap = false;
let dragStartX = 0;
let dragStartY = 0;
let initialTranslateX = 0;
let initialTranslateY = 0;

function applyMapTransform() {
  mapPanZoomLayer.style.transform = `translate(${mapTranslateX}px, ${mapTranslateY}px) scale(${mapScale})`;
}

function zoomMap(delta) {
  mapScale = Math.min(Math.max(0.8, mapScale + delta), 3.5);
  applyMapTransform();
}

function resetMapTransform() {
  mapScale = 1;
  mapTranslateX = 0;
  mapTranslateY = 0;
  applyMapTransform();
}

// Mouse Dragging (Desktop)
mapWrapper.addEventListener('mousedown', (e) => {
  if (e.target.closest('button')) return;
  isDraggingMap = true;
  mapWrapper.classList.add('is-dragging');
  dragStartX = e.clientX;
  dragStartY = e.clientY;
  initialTranslateX = mapTranslateX;
  initialTranslateY = mapTranslateY;
});

window.addEventListener('mousemove', (e) => {
  if (!isDraggingMap) return;
  const dx = e.clientX - dragStartX;
  const dy = e.clientY - dragStartY;
  mapTranslateX = initialTranslateX + dx;
  mapTranslateY = initialTranslateY + dy;
  applyMapTransform();
});

window.addEventListener('mouseup', () => {
  if (isDraggingMap) {
    isDraggingMap = false;
    mapWrapper.classList.remove('is-dragging');
  }
});

// Touch Dragging (Mobile / Tablet)
mapWrapper.addEventListener('touchstart', (e) => {
  if (e.touches.length === 1) {
    isDraggingMap = true;
    dragStartX = e.touches[0].clientX;
    dragStartY = e.touches[0].clientY;
    initialTranslateX = mapTranslateX;
    initialTranslateY = mapTranslateY;
  }
}, { passive: true });

mapWrapper.addEventListener('touchmove', (e) => {
  if (!isDraggingMap || e.touches.length !== 1) return;
  const dx = e.touches[0].clientX - dragStartX;
  const dy = e.touches[0].clientY - dragStartY;
  mapTranslateX = initialTranslateX + dx;
  mapTranslateY = initialTranslateY + dy;
  applyMapTransform();
}, { passive: true });

mapWrapper.addEventListener('touchend', () => {
  isDraggingMap = false;
});

// Region Click & Hover Events
mapRegions.forEach(region => {
  region.addEventListener('mouseenter', () => {
    const name = region.getAttribute('data-name');
    mapHoverHint.innerText = name;
  });
  region.addEventListener('mouseleave', () => {
    mapHoverHint.innerText = "Nusantara & Semenanjung Melayu";
  });

  region.addEventListener('click', (e) => {
    const name = region.getAttribute('data-name') || 'Nusantara';
    appendSearchTerm(name);
    region.classList.toggle('selected-region');
  });
});

mapRegions.forEach(region => {
  // 1. Saat kursor masuk ke poligon daerah
  region.addEventListener('mouseenter', (e) => {
    const name = region.getAttribute('data-name') || region.getAttribute('data-tooltip-text') || 'Daerah';
    const aksara = region.getAttribute('data-aksara');
    const logoUrl = region.getAttribute('data-logo');

    // Update teks info bar di atas peta
    if (mapHoverHint) mapHoverHint.innerText = name;

    // Isi konten Tooltip
    if (mapTooltip) {
      tooltipTitle.innerText = name;
      tooltipSubtitle.innerText = aksara;

      if (logoUrl && logoUrl.trim() !== '') {
        tooltipLogo.src = logoUrl;
        tooltipLogo.style.display = 'block';
      } else {
        tooltipLogo.style.display = 'none';
      }

      // Tampilkan Tooltip
      mapTooltip.classList.remove('hidden');
      requestAnimationFrame(() => {
        mapTooltip.classList.remove('opacity-0');
        mapTooltip.classList.add('opacity-100');
      });
    }
  });

  // 2. Saat kursor bergerak di atas poligon (posisi tooltip ikut bergerak)
  region.addEventListener('mousemove', (e) => {
    if (!mapTooltip || mapTooltip.classList.contains('hidden')) return;

    const wrapperRect = mapWrapper.getBoundingClientRect();
    const x = e.clientX - wrapperRect.left;
    const y = e.clientY - wrapperRect.top;

    // Posisikan tooltip tepat di atas kursor mouse (offset 10px ke atas)
    mapTooltip.style.left = `${x}px`;
    mapTooltip.style.top = `${y - 10}px`;
  });

  // 3. Saat kursor meninggalkan poligon
  region.addEventListener('mouseleave', () => {
    if (mapHoverHint) mapHoverHint.innerText = "Nusantara & Semenanjung Melayu";

    if (mapTooltip) {
      mapTooltip.classList.remove('opacity-100');
      mapTooltip.classList.add('opacity-0');
      setTimeout(() => {
        if (mapTooltip.classList.contains('opacity-0')) {
          mapTooltip.classList.add('hidden');
        }
      }, 150);
    }
  });

  // 4. Klik poligon untuk menambah ke input pencarian
  region.addEventListener('click', () => {
    const name = region.getAttribute('data-name') || region.getAttribute('data-tooltip-text') || 'Daerah';
    appendSearchTerm(name.split('|')[0].trim());
    region.classList.toggle('selected-region');
  });
});

/* ==========================================================================
   10. TOAST FEEDBACK
   ========================================================================== */
let toastTimeout;
function showToastFeedback(msg) {
  let toast = document.getElementById('serumpun-toast');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'serumpun-toast';
    toast.className = 'fixed bottom-6 right-6 z-50 px-5 py-3 rounded-2xl bg-[#1b212a] dark:bg-white text-white dark:text-slate-900 text-xs font-bold shadow-2xl flex items-center gap-2 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none';
    document.body.appendChild(toast);
  }

  toast.innerHTML = `<i class="fa-solid fa-circle-check text-sky-400 dark:text-sky-600"></i> <span>${msg}</span>`;
  toast.classList.remove('translate-y-20', 'opacity-0');

  clearTimeout(toastTimeout);
  toastTimeout = setTimeout(() => {
    toast.classList.add('translate-y-20', 'opacity-0');
  }, 2600);
}

window.addEventListener('load', () => {
  updateNavbarAesthetics();
});

window.appendSearchTerm = appendSearchTerm;
window.resetSearchQuery = resetSearchQuery;
window.executeSearchAction = executeSearchAction;
window.zoomMap = zoomMap;
window.resetMapTransform = resetMapTransform;
window.switchSearchTab = switchSearchTab;
window.selectLanguage = selectLanguage;
window.handleAuthClick = handleAuthClick;
window.openSearchModal = openSearchModal;
window.openSearchModalWithTab = openSearchModalWithTab;