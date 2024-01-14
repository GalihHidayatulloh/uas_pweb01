// Fungsi untuk menangani perubahan lebar layar
function handleResize() {
    if (window.innerWidth < 768) {
      // Tambahkan atau hapus kelas CSS saat layar kecil
      document.body.classList.add("small-screen");
    } else {
      // Tambahkan atau hapus kelas CSS saat layar besar
      document.body.classList.remove("small-screen");
    }
  }

  // Tambahkan event listener untuk event resize
  window.addEventListener("resize", handleResize);

  // Panggil fungsi handleResize() saat halaman dimuat pertama kali
  handleResize();