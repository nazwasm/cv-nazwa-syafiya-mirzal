<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($biodata['nama']); ?> | CV & Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fafafa;
      color: #2f2f2f;
      scroll-behavior: smooth;
    }

    /* Palet Warna */
    :root {
      --primary: #c47a91;
      --secondary: #f4c2c2;
      --bg-light: #fff;
      --text-muted: #6b6b6b;
    }

    .gradient-text {
      background: linear-gradient(120deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .btn-primary {
      background: var(--primary);
      color: white;
      padding: 0.7rem 1.5rem;
      border-radius: 9999px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: #a45d72;
      transform: translateY(-3px);
      box-shadow: 0 8px 16px rgba(196, 122, 145, 0.3);
    }

    .card {
      background: var(--bg-light);
      border-radius: 1.2rem;
      padding: 2rem;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.05);
      transition: 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
    }

    .section {
      padding: 6rem 1.5rem;
    }

    footer {
      background: #fff5f7;
      font-size: 0.9rem;
    }

    /* Scrollbar elegan */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background-color: var(--primary);
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-white/70 border-b border-pink-100 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="font-semibold text-2xl gradient-text">Curriculum Vitae</h1>
      <div class="hidden md:flex space-x-8 text-gray-600 text-sm font-medium">
        <a href="#about" class="hover:text-[var(--primary)] transition">About</a>
        <a href="#education" class="hover:text-[var(--primary)] transition">Education</a>
        <a href="#experience" class="hover:text-[var(--primary)] transition">Experience</a>
        <a href="#skills" class="hover:text-[var(--primary)] transition">Skills</a>
        <a href="#portofolio" class="hover:text-[var(--primary)] transition">Portofolio</a>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="about" class="section pt-28 flex flex-col md:flex-row items-center justify-center max-w-7xl mx-auto">
    <div class="md:w-1/2 text-center md:text-left" data-aos="fade-right">
      <h2 class="text-5xl md:text-6xl font-bold mb-5 gradient-text"><?= esc($biodata['nama']); ?></h2>
      <p class="text-[var(--text-muted)] mb-6 text-lg leading-relaxed"><?= esc($biodata['deskripsi']); ?></p>
      <div class="text-sm text-gray-600 space-y-1 mb-8">
        <p>📍 <?= esc($biodata['alamat']); ?></p>
        <p>✉️ <?= esc($biodata['email']); ?></p>
        <p>📞 <?= esc($biodata['phone']); ?></p>
      </div>
      <a href="https://github.com/nazwasm" class="btn-primary inline-block">Github</a>
    </div>
    <div class="md:w-1/2 flex justify-center mt-10 md:mt-0" data-aos="fade-left">
      <img src="<?= $biodata['foto'] ? base_url('uploads/'.$biodata['foto']) : 'https://i.ibb.co/3Nv5b8m/profile-placeholder.png'; ?>"
           class="w-64 h-64 md:w-80 md:h-80 object-cover rounded-full border-[5px] border-pink-200 shadow-xl hover:scale-105 transition duration-500">
    </div>
  </section>

  <!-- EDUCATION -->
  <section id="education" class="section" style="background: linear-gradient(180deg, #fce4ec 0%, #fff 100%);">
    <div class="max-w-6xl mx-auto" data-aos="fade-up">
      <h3 class="text-3xl font-semibold text-center gradient-text mb-10">Education</h3>
      <div class="grid md:grid-cols-2 gap-8">
        <?php foreach ($pendidikan as $edu): ?>
        <div class="card">
          <h4 class="text-lg font-bold text-[var(--primary)]"><?= esc($edu['tingkat']); ?></h4>
          <p class="font-medium"><?= esc($edu['institusi']); ?></p>
          <p class="text-sm text-gray-500"><?= esc($edu['jurusan']); ?> | <?= esc($edu['tahun_mulai']); ?> - <?= esc($edu['tahun_selesai']); ?></p>
          <p class="text-sm mt-2 leading-relaxed"><?= esc($edu['keterangan']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section id="experience" class="section">
    <div class="max-w-6xl mx-auto" data-aos="fade-up">
      <h3 class="text-3xl font-semibold text-center gradient-text mb-10">Experience</h3>
      <div class="space-y-6">
        <?php foreach ($pengalaman as $exp): ?>
        <div class="card">
          <div class="flex justify-between items-center mb-2">
            <h4 class="font-bold text-lg"><?= esc($exp['judul']); ?></h4>
            <span class="text-sm text-gray-400"><?= esc($exp['tahun_mulai']); ?> - <?= esc($exp['tahun_selesai']); ?></span>
          </div>
          <p class="text-sm font-medium text-gray-600"><?= esc($exp['institusi']); ?> — <?= esc($exp['lokasi']); ?></p>
          <p class="mt-2 text-sm leading-relaxed"><?= nl2br(esc($exp['deskripsi'])); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
<section id="skills" class="section" style="background: linear-gradient(180deg, #fce4ec 0%, #fff 100%);">
  <div class="max-w-6xl mx-auto" data-aos="fade-up">
    <h3 class="text-3xl font-semibold text-center gradient-text mb-10">Skills</h3>

    <div class="grid md:grid-cols-2 gap-8">
      <?php foreach ($keahlian as $skill): ?>
        <?php
          // Tentukan nilai persentase berdasarkan level
          $level = strtolower($skill['level']);
          switch ($level) {
            case 'ahli': $percent = 95; break;
            case 'mahir': $percent = 80; break;
            case 'menengah': $percent = 60; break;
            case 'pemula': $percent = 35; break;
            default: $percent = 50; break;
          }
        ?>
        <div class="card">
          <div class="flex justify-between mb-2">
            <h4 class="font-medium text-[var(--primary)]"><?= esc($skill['nama_keahlian']); ?></h4>
            <span class="text-sm text-gray-500"><?= ucfirst($skill['level']); ?> (<?= $percent; ?>%)</span>
          </div>
          <div class="w-full bg-pink-100 rounded-full h-3 overflow-hidden">
            <div class="h-3 rounded-full bg-[var(--primary)] transition-all duration-700"
                 style="width: <?= $percent; ?>%;"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section id="portofolio" class="py-20" style="background: #fff;">
  <div class="container mx-auto px-6 text-center" data-aos="fade-up">
    <h3 class="text-3xl font-semibold text-center gradient-text mb-10">Portofolio</h3>

    <?php foreach ($portofolio as $porto): ?>
      <div class="mx-auto bg-white border border-pink-100 rounded-2xl shadow-lg p-10 max-w-4xl transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 text-left">
          
          <!-- Keterangan -->
          <div class="flex-1">
            <h3 class="text-2xl font-semibold mb-3" style="color:#c47a91;">
              <?= esc($porto['nama_proyek']); ?>
            </h3>
            <p class="text-gray-700 leading-relaxed mb-5">
              <?= esc($porto['deskripsi']); ?>
            </p>
          </div>

          <!-- Tombol -->
          <?php if ($porto['link_porto']): ?>
            <div class="text-center md:text-right">
              <a href="<?= esc($porto['link_porto']); ?>" target="_blank"
                 class="inline-block px-7 py-3 rounded-full font-medium text-white transition-transform duration-300 hover:scale-105"
                 style="background-color:#c47a91; text-decoration:none;">
                 🔗 Lihat Proyek
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


  <!-- FOOTER -->
<footer class="py-8 text-center mt-10" style="background: linear-gradient(90deg, #c47a91, #e6a8b1); color: #fff;">
    <p>© <?= date('Y'); ?> <?= esc($biodata['nama']); ?> — Thank you for taking a look! <span class="text-[var(--primary)]">❤</span></p>
  </footer>

  <script>
    AOS.init({
      duration: 900,
      once: true,
      easing: 'ease-out-cubic'
    });
  </script>
</body>
</html>
