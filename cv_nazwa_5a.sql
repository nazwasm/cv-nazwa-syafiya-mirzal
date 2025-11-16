-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2025 at 02:16 PM
-- Server version: 11.4.4-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_nazwa_5a`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `email`, `phone`, `alamat`, `deskripsi`, `foto`) VALUES
(1, 'Nazwa Syafiya Mirzal', 'nazwa.syafia2016@gmail.com', '085723939802', 'Sukabumi, Jawa Barat, Indonesia', 'Mahasiswi Teknik Informatika di Universitas Muhammadiyah Sukabumi. Aktif di organisasi kampus (Library Lovers Community dan Himpunan Teknik Informatika), fokus di design grafis, UI/UX, content creation, dan koordinasi proyek. Pernah menjadi koordinator desain dan staff publikasi untuk beberapa event. ', 'nazwa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `nama_keahlian` varchar(150) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `biodata_id`, `nama_keahlian`, `level`) VALUES
(1, 1, 'Graphic Design', 'Menengah'),
(2, 1, 'Canva', 'Mahir'),
(3, 1, 'Figma', 'Pemula'),
(4, 1, 'Content Creation', 'Menengah'),
(5, 1, 'Time Management', 'Menengah'),
(6, 1, 'Project Coordination', 'Menengah'),
(7, 1, 'Communication', 'Menengah'),
(8, 1, 'Teamwork', 'Mahir'),
(9, 1, 'Creativity', 'Mahir'),
(10, 1, 'Desire to Learn', 'Mahir'),
(11, 1, 'UI/UX (Entry-Level)', 'Pemula'),
(12, 1, 'English (Intermediate)', 'Menengah');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `tingkat` varchar(100) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `tahun_mulai` varchar(20) DEFAULT NULL,
  `tahun_selesai` varchar(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `biodata_id`, `tingkat`, `institusi`, `jurusan`, `tahun_mulai`, `tahun_selesai`, `keterangan`) VALUES
(1, 1, 'S1 (Bachelor of Science)', 'Universitas Muhammadiyah Sukabumi', 'Informatika', '2023', '2027', 'IPK: 3.75 / 4.00'),
(2, 1, 'SMA', 'SMAN 1 Sukaraja, Kab. Sukabumi', 'Jurusan IPS (Social Science)', '2020', '2023', 'Nilai akhir: 91.86. Vice leader English Club.');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tahun_mulai` varchar(20) DEFAULT NULL,
  `tahun_selesai` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `biodata_id`, `judul`, `jenis`, `institusi`, `lokasi`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 1, 'Staff & Program Lead – Divisi Media & Publikasi', 'Organisasi', 'Library Lovers Community, Universitas Muhammadiyah Sukabumi', 'Sukabumi, West Java, Indonesia', 'Sep 2024', 'Agu 2025', '- Penanggung jawab program \"Jumat Quotes\". \r\n- Menyusun jadwal & pembagian tugas desain untuk 11 anggota.\r\n- Membuat desain visual untuk proker lain; aktif sebagai staf desain.'),
(2, 1, 'Design Coordinator – Seminar \"Pengembangan Skill x Make Creation\"', 'Kepanitiaan', 'Library Lovers Community', 'Sukabumi, West Java, Indonesia', 'Jan 2025', 'Feb 2025', '- Koordinator Divisi Desain (PDD) untuk 5 anggota. \r\n- Menyusun jobdesk & RAB. \r\n- Penghubung antar divisi, buat konten promosi, edit video dokumentasi.'),
(3, 1, 'Media & Publication Staff | Event Operator – Literacy Festival', 'Kepanitiaan', 'Library Lovers Community', 'Sukabumi, West Java, Indonesia', 'Jul 2024', 'Agu 2024', '- Mendesain pamflet lomba poster & seminar. \r\n- Membuat landing page di Canva. \r\n- Operator acara & dokumentasi (fotografi).'),
(4, 1, 'Student Guide – MASFAK SAINTEK (Masa Ta\'aruf)', 'Kepanitiaan', 'BEM Fakultas Sains & Teknologi (Panitia)', 'Sukabumi, West Java, Indonesia', 'Sep 2024', 'Okt 2024', '- Mendampingi 13 mahasiswa baru, memberi tugas, menilai kinerja, dan jadi penghubung informasi.'),
(5, 1, 'Media & Publication Staff – Seminar HARTIK', 'Kepanitiaan', 'Himpunan Mahasiswa Teknik Informatika (HMIF)', 'Sukabumi, West Java, Indonesia', 'Agu 2024', 'Agu 2024', '- Mendesain banner & feed IG untuk seminar \"Keamanan Data\".'),
(6, 1, 'Media & Publication Staff | Technical Operator – Seminar Pengembangan Skill', 'Kepanitiaan', 'Library Lovers Community', 'Sukabumi, West Java, Indonesia', 'Jan 2024', 'Jan 2024', '- Mendesain banner seminar \"Menulis Kisah Melalui Kata yang Terasah\". \r\n- Operator teknis acara.'),
(7, 1, 'Anggota MedKominfo – HMIF (Himpunan Mahasiswa Teknik Informatika)', 'Organisasi', 'HMIF - Universitas Muhammadiyah Sukabumi', 'Sukabumi, West Java, Indonesia', 'Sekarang', '2026', '- Menyusun content brief, kelola sosial media, dan manajemen informasi divisi.');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `nama_proyek` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `link_porto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `nama_proyek`, `deskripsi`, `link_porto`) VALUES
(1, 'Portofolio Nazwa Syafiya M', 'Menampilkan beberapa design yang sudah dibuat,', 'https://portofolionazwasyafiya.my.canva.site/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
