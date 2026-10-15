<footer 
  class="relative bg-cover bg-center bg-no-repeat border-t border-slate-700/30 dark:border-slate-300/30 py-16 text-slate-100 dark:text-slate-900 transition-colors duration-300 bg-[image:var(--bg-footer-light)] dark:bg-[image:var(--bg-footer-dark)]"
  style="
    --bg-footer-light: url('{{ asset('images/background/bg-dark.png') }}');
    --bg-footer-dark: url('{{ asset('images/background/bg-light.png') }}');
  "
>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Bagian Atas: Grid Kolom Utama -->
      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-14 pb-12">
        
        <!-- Kolom Kiri (Brand, Tagline & Social Media) -->
        <div class="md:col-span-5 lg:col-span-5 space-y-6">
          <!-- Logo & Brand Header -->
          <a href="#hero" class="inline-flex items-center gap-3 group" aria-label="Beranda Serumpun">
  
  <!-- Container Gambar Logo -->
  <div class="h-9 flex items-center justify-center transition-transform group-hover:scale-105">
            <!-- Icon Badge Logo -->
            <img src="{{ asset('images/logo/logo-white.png') }}" class="h-15 w-auto object-contain dark:hidden">
            <img src="{{ asset('images/logo/logo-black.png') }}" class="h-15 w-auto object-contain hidden dark:block">
  </div>
          </a>

          <!-- Deskripsi Ringkas / Tagline -->
          <p class="text-sm leading-relaxed text-slate-300 dark:text-slate-700 max-w-sm font-medium">
            Serumpun memberdayakan generasi masa kini untuk menelusuri, merawat, dan menghidupkan kembali intisari peradaban kepulauan Nusantara dalam wawasan visual yang menginspirasi.
          </p>

          <!-- Deretan Ikon Sosial Media Sesuai Contoh (X, Instagram, LinkedIn, GitHub) -->
          <div class="flex items-center gap-5 pt-1 text-slate-300 dark:text-serumpun-dark text-lg">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-serumpun-yellow dark:hover:text-serumpun-middark transition-colors" aria-label="Instagram Serumpun">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-serumpun-yellow dark:hover:text-serumpun-middark transition-colors" aria-label="Instagram Serumpun">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://threads.com" target="_blank" rel="noopener noreferrer" class="hover:text-serumpun-yellow dark:hover:text-serumpun-middark transition-colors" aria-label="Instagram Serumpun">
              <i class="fa-brands fa-threads"></i>
            </a>
            <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" class="hover:text-serumpun-yellow dark:hover:text-serumpun-middark transition-colors" aria-label="Instagram Serumpun">
              <i class="fa-brands fa-tiktok"></i>
            </a>
          </div>
        </div>

        <!-- Kolom Kanan: 3 Kolom Navigasi (Product, Resources, Company) -->
        <div class="md:col-span-7 lg:col-span-7 grid grid-cols-2 sm:grid-cols-3 gap-8">
          

          <!-- Kolom Navigasi 2: Resources -->
          <div class="space-y-4">
            <h4 class="text-sm font-bold tracking-wider text-white dark:text-slate-950">
              Jelajah
            </h4>
            <ul class="space-y-3 text-xs sm:text-sm font-medium text-slate-300 dark:text-slate-600">
              <li>
                <a href="#dokumentasi" onclick="showToastFeedback('Membuka dokumentasi arsip digital...')" class="hover:text-white dark:hover:text-slate-950 transition-colors">Beranda</a>
              </li>
              <li>
                <a href="#tutorial" onclick="showToastFeedback('Membuka panduan riset sejarah...')" class="hover:text-white dark:hover:text-slate-950 transition-colors">Tentang Kami</a>
              </li>
              <li>
                <a href="#sejarah" class="hover:text-white dark:hover:text-slate-950 transition-colors">Blog</a>
              </li>
              <li>
                <a href="#bantuan" onclick="showToastFeedback('Pusat bantuan & kurasi dibuka.')" class="hover:text-white dark:hover:text-slate-950 transition-colors">Support</a>
              </li>
            </ul>
          </div>

          <!-- Kolom Navigasi 3: Company -->
          <div class="space-y-4 col-span-2 sm:col-span-1">
            <h4 class="text-sm font-bold tracking-wider text-white dark:text-slate-950">
              Company
            </h4>
            <ul class="space-y-3 text-xs sm:text-sm font-medium text-slate-300 dark:text-slate-600">
              <li>
                <a href="#tentang-kami" class="hover:text-white dark:hover:text-slate-950 transition-colors">About</a>
              </li>
              <li>
                <a href="#karir" onclick="showToastFeedback('Informasi relawan & periset serumpun.')" class="hover:text-white dark:hover:text-slate-950 transition-colors">Careers</a>
              </li>
              <li>
                <a href="#kontak" onclick="showToastFeedback('Surel: redaksi@serumpunologi.id')" class="hover:text-white dark:hover:text-slate-950 transition-colors">Contact</a>
              </li>
              <li>
                <a href="#mitra" onclick="showToastFeedback('Jaringan museum & perguruan tinggi serumpun.')" class="hover:text-white dark:hover:text-slate-950 transition-colors">Partners</a>
              </li>
            </ul>
          </div>

        </div>

      </div>

      <!-- Garis Pembatas Horisontal -->
      <div class="border-t border-white/15 dark:border-slate-900/15 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
        
        <!-- Sisi Kiri: Hak Cipta -->
        <p class="text-slate-400 dark:text-slate-600 font-normal">
          © 2026 Serumpun. Hak cipta terpelihara.
        </p>

        <!-- Sisi Kanan: Tautan Legal (Privacy, Terms, Cookies) -->
        <div class="flex items-center gap-6 text-slate-400 dark:text-slate-600 font-normal">
          <a href="#privacy" onclick="showToastFeedback('Membuka Kebijakan Privasi...')" class="hover:text-white dark:hover:text-slate-900 underline underline-offset-4 decoration-slate-500/40 hover:decoration-white dark:hover:decoration-slate-900 transition-colors">
            Privacy Policy
          </a>
          <a href="#terms" onclick="showToastFeedback('Membuka Ketentuan Layanan...')" class="hover:text-white dark:hover:text-slate-900 underline underline-offset-4 decoration-slate-500/40 hover:decoration-white dark:hover:decoration-slate-900 transition-colors">
            Terms of Service
          </a>
          <a href="#cookies" onclick="showToastFeedback('Membuka Pengaturan Kuki...')" class="hover:text-white dark:hover:text-slate-900 underline underline-offset-4 decoration-slate-500/40 hover:decoration-white dark:hover:decoration-slate-900 transition-colors">
            Cookies Settings
          </a>
        </div>

      </div>

    </div>
  </footer>