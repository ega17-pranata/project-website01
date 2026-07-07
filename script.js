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

  /* ---------- Form Login (validasi sederhana sisi klien) ---------- */
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
