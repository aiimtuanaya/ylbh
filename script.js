// script.js

// Fungsi untuk animasi scroll manual (untuk elemen dengan class .scroll-fade)
document.addEventListener("DOMContentLoaded", function () {
  const scrollFadeElements = document.querySelectorAll(".scroll-fade");

  function checkPosition() {
    const triggerBottom = window.innerHeight * 0.9;
    scrollFadeElements.forEach((el) => {
      const boxTop = el.getBoundingClientRect().top;
      if (boxTop < triggerBottom) {
        el.classList.add("show");
      }
    });
  }

  window.addEventListener("scroll", checkPosition);
  checkPosition(); // Jalankan saat halaman dimuat
});

// Fungsi untuk mengganti teks tombol collapse
document.querySelectorAll(".toggle-profil").forEach((button) => {
  const label = button.querySelector(".label-text");
  const icon = button.querySelector(".rotate-icon");
  const targetId = button.getAttribute("data-bs-target");
  const targetElement = document.querySelector(targetId);

  // Gunakan Bootstrap collapse event
  if (targetElement) {
    targetElement.addEventListener("show.bs.collapse", () => {
      label.textContent = "Tutup Profil";
    });

    targetElement.addEventListener("hide.bs.collapse", () => {
      label.textContent = "Lihat Profil Lengkap";
    });
  }
});

<script>
  const carousel = document.querySelector('#carouselPortofolio');
  const bsCarousel = new bootstrap.Carousel(carousel, {
    interval: 4000,
    ride: 'carousel',
    pause: false,
    wrap: true
  });
</script>
