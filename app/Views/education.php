<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<section id="education" class="section">
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

<?= $this->endSection(); ?>
