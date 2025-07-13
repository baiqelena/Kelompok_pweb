<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pusat Gadai Indonesia</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="logo">Pusat Gadai Indonesia</div>
      <nav>
        <a href="#home">Beranda</a>
        <a href="#about">Tentang Kami</a>
        <a href="#layanan">Layanan</a>
        <a href="#contact">Kontak</a>
        <a href="login_admin.php">Admin(only admin)</a>

      </nav>
    </header>

    <section class="hero" id="home" data-aos="fade-in">
      <h1>Selamat Datang di Pusat Gadai Indonesia</h1>
      <p>Solusi Gadai Cepat, Aman & Terpercaya</p>
      <a href="#about" class="btn">Pelajari Lebih Lanjut</a>
    </section>

    <section class="about" id="about" data-aos="fade-up">
      <h2>Tentang Kami</h2>
      <p>PT. Pusat Gadai Indonesia (PGI) adalah perusahaan gadai swasta resmi yang telah berdiri sejak tahun 2025 dan terdaftar di OJK.</p>
      <ul>
        <li>Gadai Emas & Kendaraan</li>
        <li>Pelayanan Cepat dan Aman</li>
        <li>Jaringan Luas di Seluruh Indonesia</li>
      </ul>
    </section>

    <section class="simulasi-gadai">
      <div class="simulasi-container">
        <div class="simulasi-text">
          <h2>Simulasi Gadai</h2>
          <p>Hitung estimasi pinjaman Anda sekarang</p>
          <ul>
            <li>Proses Cepat</li>
            <li>Bunga Rendah</li>
            <li>Nilai Taksiran Tinggi</li>
          </ul>
          <a href="#" class="simulasi-button">Hitung Simulasi</a>
        </div>
        <div class="simulasi-app">
          <h4><strong>Nikmati Aplikasi GAOL</strong></h4>
          <p>Nikmati Beragam Kemudahan Dalam Satu Genggaman</p>
        </div>
      </div>
    </section>

    <section id="layanan" class="section" data-aos="fade-up">
      <h2 style="text-align: center; color: #002b6c;">Layanan Kami</h2>
      <div class="service-container">
        <div class="service-box" data-aos="zoom-in" data-aos-delay="100">
          <img src="Assets/emas.png" alt="Gadai Emas" />
          <h3>Gadai Emas</h3>
          <p>Terima jaminan emas perhiasan dan logam mulia</p>
        </div>
        <div class="service-box" data-aos="zoom-in" data-aos-delay="200">
          <img src="Assets/elektronik.png" alt="Gadai Elektronik" />
          <h3>Gadai Elektronik</h3>
          <p>Terima jaminan barang elektronik</p>
        </div>
        <div class="service-box" data-aos="zoom-in" data-aos-delay="300">
          <img src="Assets/kendaraan.png" alt="Gadai BPKB Kendaraan" />
          <h3>Gadai BPKB Kendaraan</h3>
          <p>Terima jaminan BPKB kendaraan motor dan mobil</p>
        </div>
      </div>
    </section>

    <section class="why-choose-us" id="why" data-aos="fade-up">
      <h2 style="text-align: center; color: #002b6c;">Mengapa Memilih Kami</h2>
      <div class="why-grid">
        <div class="why-card" data-aos="fade-up" data-aos-delay="100">
          <img src="Assets/icon-safe.png" alt="Aman" />
          <h3>Aman</h3>
          <p>Barang jaminan disimpan aman dalam brankas tahan api dan bongkar</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="200">
          <img src="Assets/icon-money.png" alt="Pinjaman Tinggi" />
          <h3>Pinjaman Tinggi</h3>
          <p>Pinjaman paling tinggi, hampir sama dengan harga jual</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="300">
          <img src="Assets/icon-flash.png" alt="Proses Cepat" />
          <h3>Proses Cepat</h3>
          <p>Pencairan cepat hanya 10 menit tanpa survey</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="400">
          <img src="Assets/icon-shield.png" alt="Diasuransikan" />
          <h3>Barang Diasuransikan</h3>
          <p>Semua barang gadai diasuransikan</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="500">
          <img src="Assets/icon-id.png" alt="Syarat Mudah" />
          <h3>Syarat Mudah</h3>
          <p>Persyaratan mudah hanya dengan KTP</p>
        </div>
        <div class="why-card" data-aos="fade-up" data-aos-delay="600">
          <img src="Assets/icon-percent.png" alt="Biaya Ringan" />
          <h3>Biaya Jasa Ringan</h3>
          <p>Biaya jasa hanya 5% per 2 minggu</p>
        </div>
      </div>
    </section>

    <section class="contact" id="contact" data-aos="fade-up">
      <h2>Hubungi Kami</h2>
  <div class="form-container">
    <h2>Form Pengajuan Gadai</h2>
    <p>Isi form di bawah ini untuk mengajukan gadai secara online dengan cepat dan aman.</p>

    <form action="proses_pengajuan.php" method="POST" class="gadai-form">
      <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required />
      </div>

      <div class="form-group">
        <label for="hp">No. HP:</label>
        <input type="text" id="hp" name="no_hp" placeholder="Contoh: 08123456789" required />
      </div>

      <div class="form-group">
        <label for="barang">Jenis Barang:</label>
        <input type="text" id="barang" name="jenis_barang" placeholder="Contoh: Emas, Laptop, Motor" required />
      </div>

      <div class="form-group">
        <label for="taksiran">Nilai Taksiran (Rp):</label>
        <input type="number" id="taksiran" name="nilai_taksiran" placeholder="Contoh: 5000000" required />
      </div>

      <button type="submit" class="submit-btn">Ajukan Sekarang</button>
    </form>
  </div>
</section>

        </section>

    </section>

    <footer class="footer-new">
      <div class="footer-container">
        <div class="footer-column">
          <h3>Pusat Gadai Indonesia</h3>
          <p>Jl. Jalanin aja dulu No.1, Mataram</p>
          <p>📱 <a href="https://wa.me/628119393800" target="_blank">+628119393800</a></p>
          <p>☎️ 021-3003-7333</p>
        </div>
        <div class="footer-column">
          <h3>Kebijakan</h3>
          <p><a href="#">Kebijakan Privasi</a></p>
          <p><a href="#">Kebijakan Privasi Absensiku</a></p>
          <p><a href="#">Nonaktivasi</a></p>
        </div>
        <div class="footer-column">
          <h3>Social Media Kami</h3>
          <div class="social-icons">
            <a href="#"><img src="Assets/youtube.svg" alt="YouTube" /></a>
            <a href="#"><img src="Assets/instagram.svg" alt="Instagram" /></a>
            <a href="#"><img src="Assets/facebook.svg" alt="Facebook" /></a>
            <a href="#"><img src="Assets/tiktok.svg" alt="TikTok" /></a>
          </div>
        </div>
      </div>
      <hr />
      <p>&copy; 2025 Pusat Gadai Indonesia. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
        once: true
      });
    </script>
  </body>
</html>