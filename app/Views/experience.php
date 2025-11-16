<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

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

<?= $this->endSection(); ?>
