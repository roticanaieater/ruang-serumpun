document.addEventListener('DOMContentLoaded', () => {
  // Daftar URL gambar (bisa pakai path public atau URL gambar)
  const heroImages = [
    "/images/background/bg-serumpun.png",
    "https://upload.wikimedia.org/wikipedia/commons/d/da/Istana_Maimoon_Medan.jpg",
    "https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=2000&q=80",
    "https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&w=2000&q=80"
  ];

  const layerA = document.getElementById('hero-bg-layer-a');
  const layerB = document.getElementById('hero-bg-layer-b');

  if (!layerA || !layerB) return;

  // 1. Acak gambar saat pertama kali website dibuka
  let currentIdx = Math.floor(Math.random() * heroImages.length);
  let activeLayer = 'A';

  // Set gambar awal di Layer A
  layerA.src = heroImages[currentIdx];

  // 2. Fungsi rotasi crossfade langsung tanpa jeda hitam
  function rotateBackground() {
    currentIdx = (currentIdx + 1) % heroImages.length;
    const nextUrl = heroImages[currentIdx];

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

  // 3. Berganti setiap 7 detik
  setInterval(rotateBackground, 7000);
});

const daftarRiwayatNegeri = [
      {
        nama: "Langkat",
        aksara: "لڠكت",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Coat_of_arms_of_the_Sultanate_of_Langkat.png/300px-Coat_of_arms_of_the_Sultanate_of_Langkat.png",
        keterangan: "Kesultanan Langkat adalah sebuah kerajaan di wilayah Sumatra Timur. Kekuasaan politik Kesultanan Langkat berakhir pada masa pergolakan sosial di Sumatra Timur pada pertengahan abad ke-20.",
        url: "#riwayat-langkat"
      },
      {
        nama: "Pahang",
        aksara: "ڨهڠ | Indera Mahkota",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Coat_of_arms_of_Pahang.svg/300px-Coat_of_arms_of_Pahang.svg.png",
        keterangan: "Negeri Pahang Darul Makmur merupakan negeri tertua di Semenanjung dengan rekod tamadun purba benang emas, pusat perlawanan Mat Kilau serta jalinan sejarah erat dengan kesultanan Riau-Lingga.",
        url: "#riwayat-pahang"
      },
      {
        nama: "Banten",
        aksara: "بنتن | Darul Islam",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Coat_of_arms_of_Banten.svg/300px-Coat_of_arms_of_Banten.svg.png",
        keterangan: "Kesultanan Banten pernah menjadi episentrum pelabuhan kosmopolitan internasional di Selat Sunda, memegang hegemoni lada dunia di bawah Sultan Ageng Tirtayasa.",
        url: "#riwayat-banten"
      },
      {
        nama: "Brunei",
        aksara: "بروني | Darussalam",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Coat_of_arms_of_Brunei.svg/300px-Coat_of_arms_of_Brunei.svg.png",
        keterangan: "Empayar Kesultanan Brunei di bawah Sultan Bolkiah pada zaman kegemilangannya menguasai seluruh pesisir kepulauan Borneo hingga ke kepulauan Sulu dan Manila.",
        url: "#riwayat-brunei"
      },
      {
        nama: "Perak",
        aksara: "ڤيرق | Darul Ridzuan",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Coat_of_arms_of_Perak.svg/300px-Coat_of_arms_of_Perak.svg.png",
        keterangan: "Negeri Perak mewarisi silsilah langsung keturunan darah Kesultanan Melaka purba, termasyhur dengan tamadun bijih timah serta manuskrip Undang-Undang 99 Perak.",
        url: "#riwayat-perak"
      },
      {
        nama: "Siak Sri Indrapura",
        aksara: "سياق سري ايندراڤورا",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Coat_of_arms_of_the_Sultanate_of_Siak_Sri_Indrapura.png/300px-Coat_of_arms_of_the_Sultanate_of_Siak_Sri_Indrapura.png",
        keterangan: "Diterajui Raja Kecik warisan Johor, Kesultanan Siak berkembang menjadi adidaya maritim Selat Melaka dengan Istana Asserayah Hasyimiah dan armada laksamana perkasa.",
        url: "#riwayat-siak"
      },
      {
        nama: "Gowa-Tallo",
        aksara: "ᨁᨚᨓ ᨉᨊ ᨈᨒᨚ | Somba Opu",
        emblem: "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Coat_of_arms_of_South_Sulawesi.svg/300px-Coat_of_arms_of_South_Sulawesi.svg.png",
        keterangan: "Kembar kerajaan maritim Bugis-Makassar yang menegakkan doktrin kebebasan mengarungi lautan 'Mare Liberum', pusat benteng Somba Opu yang disegani bangsa Eropa.",
        url: "#riwayat-gowa-tallo"
      }
    ];

    let currentRiwayatIndex = 0;
    let riwayatTimer = null;

    function applyRiwayatData(data) {
      // Elemen Desktop
      const titleEl = document.getElementById('riwayat-title-text');
      const arabicEl = document.getElementById('riwayat-arabic-text');
      const descEl = document.getElementById('riwayat-desc-text');
      const emblemEl = document.getElementById('riwayat-emblem-img');

      // Elemen Mobile
      const titleMob = document.getElementById('riwayat-title-mobile');
      const arabicMob = document.getElementById('riwayat-arabic-mobile');
      const descMob = document.getElementById('riwayat-desc-mobile');
      const emblemMob = document.getElementById('riwayat-emblem-mobile');

      // Transisi Halus Fade Out
      if (titleEl) titleEl.style.opacity = '0';
      if (arabicEl) arabicEl.style.opacity = '0';
      if (descEl) descEl.style.opacity = '0';
      if (emblemEl) emblemEl.style.opacity = '0';

      setTimeout(() => {
        // Update data desktop
        if (titleEl) titleEl.innerText = data.nama;
        if (arabicEl) arabicEl.innerText = data.aksara;
        if (descEl) descEl.innerText = data.keterangan;
        if (emblemEl) {
          emblemEl.src = data.emblem;
          emblemEl.alt = `Lambang Kesultanan ${data.nama}`;
        }

        // Update data mobile
        if (titleMob) titleMob.innerText = data.nama;
        if (arabicMob) arabicMob.innerText = data.aksara;
        if (descMob) descMob.innerText = data.keterangan;
        if (emblemMob) {
          emblemMob.src = data.emblem;
          emblemMob.alt = `Lambang Kesultanan ${data.nama}`;
        }

        // Fade in kembali
        if (titleEl) titleEl.style.opacity = '1';
        if (arabicEl) arabicEl.style.opacity = '1';
        if (descEl) descEl.style.opacity = '1';
        if (emblemEl) emblemEl.style.opacity = '1';
      }, 250);
    }

    function initRiwayatNegeri() {
      // Random Index setiap reload superweb
      currentRiwayatIndex = Math.floor(Math.random() * daftarRiwayatNegeri.length);
      applyRiwayatData(daftarRiwayatNegeri[currentRiwayatIndex]);

      // Rotasi otomatis setiap 4.5 detik
      if (riwayatTimer) clearInterval(riwayatTimer);
      riwayatTimer = setInterval(() => {
        currentRiwayatIndex = (currentRiwayatIndex + 1) % daftarRiwayatNegeri.length;
        applyRiwayatData(daftarRiwayatNegeri[currentRiwayatIndex]);
      }, 4500);
    }

    function handleRiwayatClick() {
      const activeNegeri = daftarRiwayatNegeri[currentRiwayatIndex];
      showToastFeedback(`Membuka riwayat lengkap: ${activeNegeri.nama}...`);
    }

    const state = {
      activeTab: 'daerah',
      isDarkMode: false,
      currentLanguage: 'id',
      lastScrollY: window.scrollY
    };