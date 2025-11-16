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

  <!-- NAVBAR RESPONSIVE -->
  <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-white/70 border-b border-pink-100 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="font-semibold text-2xl gradient-text">Curriculum Vitae</h1>

      <!-- Menu Desktop -->
    <div class="hidden md:flex space-x-8 text-gray-600 text-sm font-medium">
      <a href="<?= base_url('/cvnazwasyafiya'); ?>" class="hover:text-[var(--primary)] transition">About</a>
      <a href="<?= base_url('/education'); ?>" class="hover:text-[var(--primary)] transition">Education</a>
      <a href="<?= base_url('/experience'); ?>" class="hover:text-[var(--primary)] transition">Experience</a>
      <a href="<?= base_url('/skills'); ?>" class="hover:text-[var(--primary)] transition">Skills</a>
      <a href="<?= base_url('/portofolio'); ?>" class="hover:text-[var(--primary)] transition">Portofolio</a>
    </div>

      <!-- Hamburger Mobile -->
      <div class="md:hidden">
        <button id="menu-btn" class="focus:outline-none">
          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/90 backdrop-blur-md border-t border-pink-100">
      <div class="flex flex-col space-y-4 py-4 px-6">
        <a href="<?= base_url('/cvnazwasyafiya'); ?>">About</a>
        <a href="<?= base_url('/education'); ?>">Education</a>
        <a href="<?= base_url('/experience'); ?>">Experience</a>
        <a href="<?= base_url('/skills'); ?>">Skills</a>
        <a href="<?= base_url('/portofolio'); ?>">Portofolio</a>
      </div>
    </div>
  </nav>
<main class="min-h-screen pt-24 pb-20">
  <?= $this->renderSection('content'); ?>
</main>

  
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

  // Toggle mobile menu
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
</body>
</html>