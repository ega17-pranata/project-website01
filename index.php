<?php
  include "config/config.php";
  $berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 3");
  $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY tanggal DESC");
  $galeri_side = mysqli_query($conn, "SELECT * FROM galeri ORDER BY tanggal DESC LIMIT 4");
?>


<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ega Abelano Pranata | Portal Informasi AMD</title>
    <link rel="stylesheet" href="assets/css/style.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <!-- ===================== HEADER ===================== -->
      <header class="site-header">
        <div class="header-inner">
          <div class="logo-block">
            <div class="logo-icon">
              <svg viewBox="0 0 48 48" width="42" height="42">
                <rect
                  x="4"
                  y="8"
                  width="40"
                  height="26"
                  rx="3"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2.5"
                />
                <rect x="16" y="38" width="16" height="3" fill="currentColor" />
                <rect x="20" y="34" width="8" height="5" fill="currentColor" />
                <path
                  d="M12 16 L18 22 L12 28"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <line
                  x1="22"
                  y1="28"
                  x2="34"
                  y2="28"
                  stroke="currentColor"
                  stroke-width="2.5"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <div class="logo-text">
              <span class="logo-title">AMD<em>Indonesia</em></span>
              <span class="logo-sub"
                >Website AMD &amp; Edukasi Teknologi Komputer</span
              >
            </div>
          </div>
          <div class="header-tagline">
            <span class="blink-dot"></span> WAKTU
            SETEMPAT&nbsp;&nbsp;|&nbsp;&nbsp;<span id="live-clock"
              >00:00:00</span
            >
          </div>
        </div>
      </header>

      <!-- ===================== MARQUEE ===================== -->
      <div class="marquee-bar">
        <marquee behavior="scroll" direction="left" scrollamount="6">
          Selamat datang di halaman website AMD Indonesia &nbsp;•&nbsp; Ikuti
          perkembangan Hardware, Software &amp; Artificial Intelligence terbaru
          2026 &nbsp;•&nbsp; Login member untuk mengakses fitur tambahan
          &nbsp;•&nbsp; Jangan lupa isi Buku Tamu sebelum meninggalkan halaman
          ini! &nbsp;•&nbsp;
        </marquee>
      </div>

      <!-- ===================== MAIN LAYOUT ===================== -->
      <div class="main-layout">
        <!-- ============ SIDEBAR ============ -->
        <aside class="left-side">
          <div class="panel">
            <div class="panel-title">MENU WEB</div>
            <nav class="menu-list" id="menu-web">
              <a href="#" data-page="home" class="menu-item active">Home</a>
              <a href="#" data-page="profil" class="menu-item">Profil</a>
              <a href="#" data-page="berita" class="menu-item">Berita</a>
              <a href="#" data-page="galeri" class="menu-item">Galeri</a>
              <a href="#" data-page="bukutamu" class="menu-item">Buku Tamu</a>
              <a href="#" data-page="kontak" class="menu-item">Kontak Kami</a>
              <a href="#" data-page="tentang" class="menu-item"
                >ℹTentang Kami</a
              >
            </nav>
          </div>

          <!--PENGUMUMAN-->
          <div class="panel announcement">
            <div class="panel-title">PENGUMUMAN</div>
            <div class="announcement-body">
              <p>
                Website AMD Indonesia terus diperbarui dengan informasi terbaru seputar 
                prosesor AMD Ryzen, kartu grafis Radeon, serta perkembangan teknologi komputer. 
                Jangan lupa mengunjungi menu Berita dan Galeri, serta tinggalkan pesan atau saran melalui Buku Tamu.
              <p>
                Mohon gunakan bahasa yang sopan pada kolom Buku Tamu dan Kontak
                Kami. Terima kasihh.
              </p>
            </div>
          </div>
        </aside>

        <!-- ============ ISI KONTEN ============ -->
        <main class="content-area">
          <!-- HOME -->
          <section class="page-content active" id="page-home">
            <h2 class="content-title">Selamat Datang</h2>
            <p class="lead">
              Build What's Next at AMD Advancing AI 2026 July 22-23, San
              Francisco, CA. Register now to experience the latest in AI
              infrastructure, architecture, and development.
            </p>

            <div class="home-grid">
              <div class="home-card">
                <h3>Kenapa AMD?</h3>
                <p>
                  AMD adalah satu-satunya mitra AI yang menawarkan solusi CPU,
                  GPU, dan komputasi adaptif, memungkinkan penerapan AI yang
                  dioptimalkan yang disesuaikan dengan kebutuhan Anda.
                </p>
              </div>
              <div class="home-card">
                <h3>Software &amp; AI</h3>
                <p>
                  Komitmen terhadap standar terbuka dan inovasi bersama
                  mendorong fleksibilitas dan perlindungan investasi, memberi
                  Anda kepercayaan diri untuk menerapkan AI secara menyeluruh.
                </p>
              </div>
              <div class="home-card">
                <h3>Inovasi</h3>
                <p>
                  AMD menghadirkan TCO, efisiensi, dan kemampuan AI canggih
                  terdepan di industri, memberikan kinerja, keandalan, dan
                  skalabilitas perusahaan untuk pusat data, edge, dan pengguna
                  akhir.
                </p>
              </div>
            </div>

            <p class="hint">
              Silakan klik menu di sebelah kiri (Profil, Berita, Galeri, dll.)
              untuk menjelajahi konten lainnya.
            </p>
          </section>

          <!-- PROFIL -->
          <section class="page-content" id="page-profil">
            <h2 class="content-title">Profil Website</h2>
            <p><strong>Nama Website:</strong> AMD RYZEN INDONESIA</p>
            <p><strong>Tema:</strong> Teknologi Komputer</p>
            <p>
              <strong>Tujuan:</strong> Menyajikan informasi seputar 
              chipset,kartu grafis,mau sfotware dan hardware dari AMD RYZEN
              secara sederhana dan mudah dipahami oleh
              pelajar maupun umum.
            </p>
            <p>
              <strong>Dibuat dengan:</strong> HTML, CSS, dan JavaScript sebagai
              tugas praktik pembuatan website (Design 6) dan menggunakan php sebagai crud serta mysql sebagai database.
            </p>
            <div class="mini-divider"></div>
            <p>
              Website ini menampilkan struktur khas portal informasi: header,
              menu navigasi, area konten, form login, galeri foto, pengumuman,
              dan footer — sesuai kaidah dasar pembangunan halaman web statis.
            </p>
          </section>

          <!-- BERITA -->
          <section class="page-content" id="page-berita">

            <!-- hubungin keconfig-->
            <h2 class="content-title">Berita Teknologi Terbaru</h2>
              <div class="content-title">
                <?php while ($row = mysqli_fetch_assoc($berita)) { ?>
                  <div class="news-item">
              <h3><?= $row['judul']; ?></h3>
              <p><?= substr($row['isi'], 0, 150); ?>...</p>
              <small class="news-date"><?= $row['tanggal']; ?></small>
                  </div>
                <?php } ?>
              </div>
            </section>

          <!-- GALERI (dalam konten) -->
          <section class="page-content" id="page-galeri">
          <h2 class="content-title">Galeri Perangkat Komputer</h2>
            <p class="lead">
              Kumpulan ilustrasi perangkat &amp; komponen teknologi komputer.
            </p>

            <!-- hubungin keconfig-->
            <div class="gallery-grid">
              <?php while ($row = mysqli_fetch_assoc($galeri)) { ?>
                <img src="assets/foto/<?= $row['gambar']; ?>" alt="<?= $row['judul']; ?>">
              <?php } ?>
            </div>      
          </section>

          <!-- BUKU TAMU -->
          <section class="page-content" id="page-bukutamu">
          <h2 class="content-title">Buku Tamu</h2>
          <p>
              Silakan tinggalkan pesan, kesan, atau saran Anda untuk website
              ini.
          </p>

            <!-- hubungin keconfig-->
            <form action="proses/simpan_buku_tamu.php" method="POST" class="form-box">
                <input type="text" name="nama" placeholder="Nama lengkap" required>
                <input type="email" name="email" placeholder="Email">
                <textarea name="pesan" placeholder="Tulis pesan..." required></textarea>
                <button type="submit" class="btn-primary">Kirim Buku Tamu</button>
            </form>
          </section>

          <!-- KONTAK -->
          <section class="page-content" id="page-kontak">
            <h2 class="content-title">Kontak Kami</h2>
            <p>
              Punya pertanyaan atau masukan? Hubungi
              melalui saluran berikut:
            </p>
            <ul class="contact-list">
              <li>Email: 250401100@student.umri.ac.id</li>
              <li>Telepon: (+62812) 6119-7096</li>
              <li>Alamat: Jl. KH AHMAD DAHLAN No. 17, Pekanbaru, Riau</li>
            </ul>
          </section>

          <!-- TENTANG KAMI -->
          <section class="page-content" id="page-tentang">
            <h2 class="content-title">Tentang Kami</h2>
            <p>
              AMD Indonesia merupakan website sederhana yang dibuat sebagai media 
              informasi dan edukasi mengenai perkembangan teknologi komputer, khususnya produk-produk AMD seperti prosesor Ryzen, 
              kartu grafis Radeon, chipset, dan berbagai inovasi teknologi lainnya
            </p>
            <p>
              Website ini dibuat sebagai salah satu proyek Ujian Akhir Semester mata kuliah Pemrograman Web. 
              Tujuan dari website ini adalah menerapkan konsep pengembangan website menggunakan HTML, CSS, JavaScript, PHP, dan MySQL 
              serta menghubungkan tampilan website dengan database melalui fitur CRUD (Create, Read, Update, dan Delete).
            </p>
          </section>
        </main>

        <!-- ============ SIDEBAR KANAN ============ -->
        <aside class="right-side">
          <div class="panel">
            <div class="panel-title">MENU LOGIN</div>
            <form class="login-form" action="proses/login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
              <button type="submit" class="btn-login">LOGIN</button>
            </form>
          </div>

          <div class="panel">
            <div class="gallery-side">
              <?php while ($row = mysqli_fetch_assoc($galeri_side)) { ?>
                <div class="gallery-item">
                  <img src="assets/foto/<?= $row['gambar']; ?>" alt="<?= $row['judul']; ?>">
                </div>
              <?php } ?>
            </div>
            <div class="gallery-side"></div>
          </div>
        </aside>
      </div>
      <!-- ===================== FOOTER ===================== -->
      <footer class="site-footer">
        <p>
          &copy; <span id="year"></span> AMD RYZEN INDONESIA — Dibuat oleh
          <strong>Ega Abelano Pranata</strong>. 09 - 07 - 2026
        </p>
      </footer>
    </div>

    <script src="assets/js/script.js"></script>
  </body>
</html>
