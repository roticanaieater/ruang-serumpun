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