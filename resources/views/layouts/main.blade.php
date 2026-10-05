<body class="bg-slate-50 text-slate-800 dark:bg-[#12161c] dark:text-slate-100 font-sans antialiased overflow-x-hidden selection:bg-sky-500 selection:text-white">

    <!-- Memanggil Navbar & Mobile Drawer -->
    <x-navbar />

    <!-- Memanggil Modal Overlay Pencarian -->
    <x-search-modal />

    <!-- Konten Halaman (Hero, Sejarah, Budaya, dll) -->
    <main>
        @yield('content')
    </main>

    <x-footer />
</body>