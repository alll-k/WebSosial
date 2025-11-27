<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Website Sosial Relawan</title>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    header {
      background: #2c3e50;
      color: white;
      padding: 15px 20px;
      font-size: 20px;
      font-weight: bold;
    }

    /* tombol tambah kegiatan */
    .add-btn {
      display: block;
      width: fit-content;
      margin: 20px auto;
      background: #28a745;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
      transition: 0.2s;
    }
    .add-btn:hover {
      background: #1e7e34;
    }

    .hero {
      background: url('https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=1400&q=80')
        center/cover no-repeat;
      color: white;
      padding: 70px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 36px;
      margin: 0;
    }

    .hero p {
      font-size: 20px;
      margin-top: 10px;
    }

    .section-title {
      text-align: center;
      margin: 30px 0 10px;
      font-size: 26px;
      font-weight: bold;
    }

    #map {
      width: 90%;
      height: 400px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0px 3px 8px rgba(0,0,0,0.3);
    }

    .activities-container {
      width: 90%;
      margin: 20px auto;
    }

    .activity-card {
      background: white;
      padding: 15px;
      border-radius: 10px;
      margin: 10px 0;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .activity-card h3 {
      margin-top: 0;
    }
  </style>

</head>
<body>

<header>
  Website Sosial Relawan & Aksi Sosial
</header>

<section class="hero">
  <h1>Temukan Kegiatan Sosial di Sekitarmu</h1>
  <p>Bergabung sebagai relawan dan bantu sesama</p>
</section>

<div class="section-title">Peta Kegiatan Sosial</div>
<div id="map"></div>

<!-- 🔥 TOMBOL TAMBAH KEGIATAN SOSIAL DI BAWAH PETA -->
<a href="/kegiatan/tambah" class="add-btn">
  + Tambah Kegiatan Sosial
</a>

<div class="section-title">Daftar Kegiatan Terdekat</div>
<div class="activities-container" id="activities-list"></div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
  const activities = [
    { id: 1, title: "Bakti Sosial Panti Asuhan Maju Jaya", lat: -6.2, lng: 106.816666, date: "2025-12-05", org: "Yayasan Maju Jaya" },
    { id: 2, title: "Aksi Bersih Sungai Ciliwung", lat: -6.17511, lng: 106.865036, date: "2025-11-30", org: "Green Volunteers" },
    { id: 3, title: "Pelatihan Keterampilan Pemuda", lat: -6.3, lng: 106.7, date: "2025-12-10", org: "Komunitas Kreasi" }
  ];

  const map = L.map('map').setView([-6.2, 106.816666], 11);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
  }).addTo(map);

  activities.forEach(a => {
    L.marker([a.lat, a.lng])
      .addTo(map)
      .bindPopup(`<b>${a.title}</b><br>${a.org}<br>${a.date}`);
  });

  const listContainer = document.getElementById("activities-list");

  activities.forEach(a => {
    const div = document.createElement("div");
    div.className = "activity-card";
    div.innerHTML = `
      <h3>${a.title}</h3>
      <p><strong>Organisasi:</strong> ${a.org}</p>
      <p><strong>Tanggal:</strong> ${a.date}</p>
      <p><strong>Lokasi:</strong> (${a.lat}, ${a.lng})</p>
    `;
    listContainer.appendChild(div);
  });
</script>

</body>
</html>
