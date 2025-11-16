<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<section id="skills" class="section">
  <div class="max-w-6xl mx-auto" data-aos="fade-up">
    <h3 class="text-3xl font-semibold text-center gradient-text mb-10">Skills</h3>

    <div class="grid md:grid-cols-2 gap-8">
      <?php foreach ($keahlian as $skill): ?>
        <?php
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

<?= $this->endSection(); ?>
