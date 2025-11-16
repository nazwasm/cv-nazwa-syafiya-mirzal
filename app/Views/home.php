<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

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

<?= $this->endSection(); ?>
