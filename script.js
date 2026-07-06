/* =========================================================
   TEKNOBYTE — script.js
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  /* ---------- Tahun otomatis di footer ---------- */
  document.getElementById("year").textContent = new Date().getFullYear();

  /* ---------- Jam digital berjalan di header ---------- */
  const clockEl = document.getElementById("live-clock");
  function updateClock() {
    const now = new Date();
    const hh = String(now.getHours()).padStart(2, "0");
    const mm = String(now.getMinutes()).padStart(2, "0");
    const ss = String(now.getSeconds()).padStart(2, "0");
    clockEl.textContent = `${hh}:${mm}:${ss}`;
  }
  updateClock();
  setInterval(updateClock, 1000);

  /* ---------- Navigasi menu web (hyperlink ke konten) ---------- */
  const menuItems = document.querySelectorAll("#menu-web .menu-item");
  const pages = document.querySelectorAll(".page-content");

  menuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.preventDefault();
      const target = item.getAttribute("data-page");

      menuItems.forEach((m) => m.classList.remove("active"));
      item.classList.add("active");

      pages.forEach((p) => p.classList.remove("active"));
      const targetPage = document.getElementById("page-" + target);
      if (targetPage) {
        targetPage.classList.add("active");
        document
          .querySelector(".content-area")
          .scrollTo({ top: 0, behavior: "smooth" });
      }
    });
  });

  /* ---------- Galeri Foto (foto chipset & prosesor AMD, sumber Wikimedia Commons berlisensi CC) ---------- */
  const galleryData = [
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_B450_Chipset.jpg?width=400",
      label: "Chipset AMD B450",
      credit: "Wikiinger / Wikimedia Commons",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_970_chipset_southbridge.png?width=400",
      label: "Chipset AMD 970 Southbridge",
      credit: "Wikimedia Commons",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_Ryzen_9_9950X.jpg?width=400",
      label: "Prosesor AMD Ryzen 9 9950X",
      credit: "Wikimedia Commons (CC BY 4.0)",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_Ryzen_7_5800X_19339.jpg?width=400",
      label: "Prosesor AMD Ryzen 7 5800X",
      credit: "Wikimedia Commons (CC BY-SA 3.0)",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_Ryzen_7_1800X.jpg?width=400",
      label: "AMD Ryzen 7 1800X terpasang di socket",
      credit: "Wikimedia Commons (CC BY-SA 2.0)",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_Radeon_HD7870_Die_and_Package.jpg?width=400",
      label: "Die & Package Chipset GPU Radeon HD7870",
      credit: "Wikimedia Commons",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_Radeon_HD_6850_GPU.JPG?width=400",
      label: "Chip GPU AMD Radeon HD 6850",
      credit: "Wikimedia Commons (CC BY-SA 3.0)",
    },
    {
      img: "https://commons.wikimedia.org/wiki/Special:FilePath/AMD_RADEON_HD3450_GPU.jpg?width=400",
      label: "Chip GPU AMD Radeon HD 3450",
      credit: "Wikimedia Commons",
    },
  ];

  function renderGallery(container, count) {
    if (!container) return;
    container.innerHTML = "";
    galleryData.slice(0, count).forEach((g) => {
      const div = document.createElement("div");
      div.className = "gallery-item";
      div.title = g.label;

      const img = document.createElement("img");
      img.src = g.img;
      img.alt = g.label;
      img.loading = "lazy";
      img.referrerPolicy = "no-referrer";
      // Fallback ikon jika gambar gagal dimuat (mis. sedang offline)
      img.onerror = () => {
        div.classList.add("gallery-item--fallback");
        div.textContent = "🧩";
      };

      const caption = document.createElement("span");
      caption.className = "gallery-caption";
      caption.textContent = g.label;

      div.appendChild(img);
      div.appendChild(caption);
      container.appendChild(div);
    });
  }

  renderGallery(document.getElementById("gallery-grid-main"), 8);
  renderGallery(document.getElementById("gallery-grid-side"), 4);

  /* ---------- Form Login (validasi sederhana sisi klien) ---------- */
  const loginForm = document.getElementById("login-form");
  const loginMsg = document.getElementById("login-msg");

  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const user = document.getElementById("username").value.trim();
    const pass = document.getElementById("password").value.trim();

    if (!user || !pass) {
      loginMsg.textContent = "Username dan password wajib diisi.";
      loginMsg.className = "login-msg error";
      return;
    }

    // Demo saja: username "admin" & password "admin123"
    if (user === "admin" && pass === "admin123") {
      loginMsg.textContent = `Login berhasil! Selamat datang, ${user}.`;
      loginMsg.className = "login-msg success";
    } else {
      loginMsg.textContent = "Username atau password salah.";
      loginMsg.className = "login-msg error";
    }
  });

  /* ---------- Buku Tamu (simpan sementara di memori halaman) ---------- */
  const guestForm = document.getElementById("guestbook-form");
  const guestList = document.getElementById("guestbook-list");

  guestForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const nama = document.getElementById("gb-nama").value.trim();
    const pesan = document.getElementById("gb-pesan").value.trim();
    if (!nama || !pesan) return;

    const entry = document.createElement("div");
    entry.className = "guestbook-entry";
    const now = new Date().toLocaleString("id-ID");
    entry.innerHTML = `<b>${escapeHTML(nama)}</b>: ${escapeHTML(pesan)}<span>${now}</span>`;
    guestList.prepend(entry);

    guestForm.reset();
  });

  function escapeHTML(str) {
    const div = document.createElement("div");
    div.textContent = str;
    return div.innerHTML;
  }
});
