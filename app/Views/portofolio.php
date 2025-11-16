<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>


<section id="portofolio" class="py-20" style="background: #fff;">
  <div class="container mx-auto px-6 text-center" data-aos="fade-up">
    <h3 class="text-3xl font-semibold text-center gradient-text mb-10">Portofolio</h3>

    <?php foreach ($portofolio as $porto): ?>
      <div class="mx-auto bg-white border border-pink-100 rounded-2xl shadow-lg p-10 max-w-4xl transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 text-left">
          <div class="flex-1">
            <h3 class="text-2xl font-semibold mb-3" style="color:#c47a91;">
              <?= esc($porto['nama_proyek']); ?>
            </h3>
            <p class="text-gray-700 leading-relaxed mb-5">
              <?= esc($porto['deskripsi']); ?>
            </p>
          </div>

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

<?= $this->endSection(); ?>