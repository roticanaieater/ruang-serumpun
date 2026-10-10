<header id="main-header" class="fixed top-0 left-0 right-0 z-40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-3 pb-2 transition-all duration-300" id="navbar-container">
      <nav id="main-navbar" class="rounded-full px-5 py-3 flex items-center justify-between transition-all duration-300 bg-transparent border border-transparent">
        
        <!-- Bagian 1: Logo Serumpun -->
        <a href="#hero" class="flex items-center gap-2.5 group cursor-pointer" aria-label="Beranda Serumpun">
          <div class="relative w-8 h-8 flex items-center justify-center">
            <svg viewBox="0 0 40 40" class="w-8 h-8 transform group-hover:rotate-12 transition-transform duration-300" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 6L26 6C30.4183 6 34 9.58172 34 14V26C34 30.4183 30.4183 34 26 34L14 34C9.58172 34 6 30.4183 6 26V14C6 9.58172 9.58172 6 14 6Z" stroke="#38bdf8" stroke-width="4" stroke-linejoin="round"/>
              <path d="M12 24L20 16L28 24" stroke="#0284c7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16 28L24 20" stroke="#0ea5e9" stroke-width="3.5" stroke-linecap="round"/>
            </svg>
          </div>
          <span id="nav-brand-text" class="font-extrabold text-xl tracking-tight text-white transition-colors duration-300">
            SERUMPUN
          </span>
        </a>

        <!-- Bagian 2: Kategori Navigasi (Mode Desktop) -->
        <div class="hidden lg:flex items-center space-x-7 font-bold text-sm tracking-wide" id="desktop-navlinks">
          <a href="#sejarah" class="nav-item-link transition-colors duration-200 text-white hover:text-sky-300 py-1">Sejarah</a>
          <a href="#budaya" class="nav-item-link transition-colors duration-200 text-white hover:text-sky-300 py-1">Budaya</a>
          <a href="#bahasa" class="nav-item-link transition-colors duration-200 text-white hover:text-sky-300 py-1">Bahasa</a>
          <a href="#tokoh" class="nav-item-link transition-colors duration-200 text-white hover:text-sky-300 py-1">Tokoh</a>
          <a href="#bangsapedia" class="nav-item-link transition-colors duration-200 text-white hover:text-sky-300 py-1">Bangsapedia</a>
          <a href="#tentang-kami" class="nav-item-link transition-colors duration-200 text-white hover:text-sky-300 py-1">Tentang Kami</a>
        </div>

        <!-- Bagian 3: Miscellaneous (Pilihan Bahasa, Dark Mode, Pencarian, & Hamburger Menu) -->
        <div class="flex items-center gap-3 sm:gap-4" id="nav-misc-actions">
          
          <!-- Dropdown Bahasa -->
          <div class="relative">
            <button id="lang-btn" type="button" class="flex items-center gap-1.5 p-1.5 rounded-full hover:bg-white/20 transition-all focus:outline-none" aria-expanded="false" aria-label="Pilih Bahasa">
              <img id="current-flag" src="https://flagcdn.com/w40/id.png" alt="Indonesia" class="w-6 h-4 object-cover rounded shadow-sm">
              <i id="lang-arrow" class="fa-solid fa-chevron-down text-xs text-white transition-transform duration-200"></i>
            </button>

            <!-- Dropdown Menu Bahasa -->
            <div id="lang-dropdown" class="hidden absolute right-0 mt-2 w-48 rounded-2xl bg-white dark:bg-[#1b212a] shadow-xl border border-slate-200/80 dark:border-slate-800 py-2 z-50 transform origin-top-right transition-all">
              <div class="px-3.5 py-1.5 text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500">Pilih Bahasa</div>
              <button onclick="selectLanguage('id', 'Indonesia', 'https://flagcdn.com/w40/id.png')" class="w-full flex items-center gap-3 px-3.5 py-2.5 text-sm font-semibold text-serumpun-dark dark:text-slate-200 hover:bg-sky-50 dark:hover:bg-slate-800 transition-colors">
                <img src="https://flagcdn.com/w40/id.png" alt="ID" class="w-5 h-3.5 rounded object-cover shadow-sm">
                <span>Indonesia</span>
              </button>
              <button onclick="selectLanguage('ms', 'Melayu', 'https://flagcdn.com/w40/my.png')" class="w-full flex items-center gap-3 px-3.5 py-2.5 text-sm font-semibold text-serumpun-dark dark:text-slate-200 hover:bg-sky-50 dark:hover:bg-slate-800 transition-colors">
                <img src="https://flagcdn.com/w40/my.png" alt="MY" class="w-5 h-3.5 rounded object-cover shadow-sm">
                <span>Melayu</span>
              </button>
              <button onclick="selectLanguage('en', 'English', 'https://flagcdn.com/w40/gb.png')" class="w-full flex items-center gap-3 px-3.5 py-2.5 text-sm font-semibold text-serumpun-dark dark:text-slate-200 hover:bg-sky-50 dark:hover:bg-slate-800 transition-colors">
                <img src="https://flagcdn.com/w40/gb.png" alt="EN" class="w-5 h-3.5 rounded object-cover shadow-sm">
                <span>English</span>
              </button>
              <button onclick="selectLanguage('bn', 'Brunei', 'https://flagcdn.com/w40/bn.png')" class="w-full flex items-center gap-3 px-3.5 py-2.5 text-sm font-semibold text-serumpun-dark dark:text-slate-200 hover:bg-sky-50 dark:hover:bg-slate-800 transition-colors">
                <img src="https://flagcdn.com/w40/bn.png" alt="BN" class="w-5 h-3.5 rounded object-cover shadow-sm">
                <span>جاوي ملايو</span>
              </button>
            </div>
          </div>

          <!-- Tombol Dark Mode Toggle -->
          <button id="theme-toggle-btn" type="button" class="w-9 h-9 rounded-full flex items-center justify-center hover:bg-white/20 transition-all text-white focus:outline-none" aria-label="Toggle Dark Mode">
            <i id="theme-icon" class="fa-solid fa-moon text-base"></i>
          </button>

          <!-- Tombol Buka Pencarian Serumpun -->
          <button id="open-search-btn" type="button" class="w-9 h-9 rounded-full flex items-center justify-center hover:bg-white/20 transition-all text-white focus:outline-none" aria-label="Buka Pencarian Serumpun">
            <i class="fa-solid fa-magnifying-glass text-base"></i>
          </button>

          <!-- Tombol Hamburger Mobile -->
          <button id="mobile-menu-toggle" type="button" class="lg:hidden w-9 h-9 rounded-full flex items-center justify-center hover:bg-white/20 transition-all text-white focus:outline-none" aria-label="Buka Menu Navigasi">
            <i class="fa-solid fa-bars text-xl"></i>
          </button>

        </div>
      </nav>
    </div>
  </header>
<div id="mobile-sidebar-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden opacity-0 transition-opacity duration-300"></div>
  <aside id="mobile-sidebar" class="fixed top-0 right-0 bottom-0 w-80 max-w-[85vw] bg-white dark:bg-[#1b212a] z-50 shadow-2xl flex flex-col justify-between p-6 transform translate-x-full transition-transform duration-300 ease-in-out">
    <div>
      <div class="flex items-center justify-between pb-6 border-b border-slate-200 dark:border-slate-800">
        <div class="flex items-center gap-2">
          <div class="w-7 h-7 flex items-center justify-center">
            <svg viewBox="0 0 40 40" class="w-7 h-7" fill="none">
              <path d="M14 6L26 6C30.4183 6 34 9.58172 34 14V26C34 30.4183 30.4183 34 26 34L14 34C9.58172 34 6 30.4183 6 26V14C6 9.58172 9.58172 6 14 6Z" stroke="#0ea5e9" stroke-width="4"/>
              <path d="M12 24L20 16L28 24" stroke="#0284c7" stroke-width="4" stroke-linecap="round"/>
            </svg>
          </div>
          <span class="font-extrabold text-lg tracking-tight text-slate-900 dark:text-white">SERUMPUN</span>
        </div>
        <button id="close-sidebar-btn" class="w-9 h-9 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:text-red-500">
          <i class="fa-solid fa-xmark text-lg"></i>
        </button>
      </div>

      <nav class="mt-4 flex flex-col space-y-1">
        <a href="#sejarah" class="mobile-nav-link text-base font-bold text-slate-800 dark:text-slate-100 py-3 border-b border-slate-100 dark:border-slate-800/80 hover:text-sky-600 dark:hover:text-sky-400">Sejarah</a>
        <a href="#budaya" class="mobile-nav-link text-base font-bold text-slate-800 dark:text-slate-100 py-3 border-b border-slate-100 dark:border-slate-800/80 hover:text-sky-600 dark:hover:text-sky-400">Budaya</a>
        <a href="#bahasa" class="mobile-nav-link text-base font-bold text-slate-800 dark:text-slate-100 py-3 border-b border-slate-100 dark:border-slate-800/80 hover:text-sky-600 dark:hover:text-sky-400">Bahasa</a>
        <a href="#tokoh" class="mobile-nav-link text-base font-bold text-slate-800 dark:text-slate-100 py-3 border-b border-slate-100 dark:border-slate-800/80 hover:text-sky-600 dark:hover:text-sky-400">Tokoh</a>
        <a href="#bangsapedia" class="mobile-nav-link text-base font-bold text-slate-800 dark:text-slate-100 py-3 border-b border-slate-100 dark:border-slate-800/80 hover:text-sky-600 dark:hover:text-sky-400">Bangsapedia</a>
        <a href="#tentang-kami" class="mobile-nav-link text-base font-bold text-slate-800 dark:text-slate-100 py-3 border-b border-slate-100 dark:border-slate-800/80 hover:text-sky-600 dark:hover:text-sky-400">Tentang Kami</a>
      </nav>
    </div>

    <div class="pt-6 space-y-4">
      <div class="flex flex-col gap-2.5">
        <button onclick="handleAuthClick('masuk')" class="w-full py-3 px-4 rounded-full bg-[#1b212a] text-white dark:bg-sky-500 dark:text-white font-bold text-sm hover:opacity-90 transition-all shadow-md">
          Masuk
        </button>
        <button onclick="handleAuthClick('daftar')" class="w-full py-3 px-4 rounded-full border-2 border-slate-800 dark:border-slate-200 text-slate-800 dark:text-slate-100 font-bold text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
          Bergabung menjadi Saudara Serumpun
        </button>
      </div>

      <div class="pt-3 flex items-center justify-center gap-5 text-slate-800 dark:text-slate-200">
        <a href="https://instagram.com/serumpun.ig" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-slate-300 dark:border-slate-700 flex items-center justify-center hover:bg-sky-50 dark:hover:bg-slate-800 hover:text-sky-600 transition-all" aria-label="Instagram Serumpunologi">
          <i class="fa-brands fa-instagram text-lg"></i>
        </a>
        <a href="https://facebook.com/ruangserumpun" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-slate-300 dark:border-slate-700 flex items-center justify-center hover:bg-sky-50 dark:hover:bg-slate-800 hover:text-sky-600 transition-all" aria-label="Facebook Serumpunologi">
          <i class="fa-brands fa-facebook-f text-lg"></i>
        </a>
        <a href="https://www.threads.com/@serumpun.ig" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-slate-300 dark:border-slate-700 flex items-center justify-center hover:bg-sky-50 dark:hover:bg-slate-800 hover:text-sky-600 transition-all" aria-label="TikTok Serumpunologi">
          <i class="fa-brands fa-threads text-lg"></i>
        </a>
      </div>
    </div>
  </aside>