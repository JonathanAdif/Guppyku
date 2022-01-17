
-- bagian admin
CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Jonathan', 'Jonathan@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

 ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

-- bagian user

CREATE TABLE `user` (
  `id_user` int(8) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `no_telp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_telp`) VALUES
(1, 'Ben', 'Benny@gmail.com', '505774fe6efdf2e639c7a73aee7ade63',2147483647);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

  ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
  COMMIT;

-- bagian gejala 

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` char(3) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(1, 'G1', 'Ikan Guppy Kehilangan Nafsu Makan.'),
(2, 'G2', 'Kulit Ikan Guppy Mengelupas'),
(3, 'G3', 'Ikan Guppy Menggosokkan badannya ke dasar/sekeliling wadah'),
(4, 'G4', 'Ikan Guppy Berdarah'),
(5, 'G5', 'Terdapat Putih Jamur pada Ikan Guppy'),
(6, 'G6', 'Sirip atau Ekor pada Ikan Guppy Menempel'),
(7, 'G7', 'Terdapat Bintik Bintik Putih pada Ikan Guppy'),
(8, 'G8', 'Sirip atau Ekor pada Ikan Guppy Rusak'),
(9, 'G9', 'Ikan Guppy Kesulitan Untuk Berenang'),
(10, 'G10', 'Pembengkakan pada Tubuh Ikan Guppy'),
(11, 'G11', 'Perubahan pada Warna Ikan Guppy'),
(12, 'G12', 'Bentuk Badan pada Ikan Guppy Terdistorsi'),
(13, 'G13', 'Sisik Pada Ikan Guppy Menonjol'),
(14, 'G14', 'Ikan guppy Terengah-engah di permukaan');

ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;


-- bagian jenis jenis penyakit

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kode_penyakit` char(3) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `solusi` text NOT NULL,
  `probabilitas` float NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `solusi`, `probabilitas`, `gambar`) VALUES
(1, 'P1', 'White Spot', 'Tambahkan obat anti white spot dalam dosis yang cukup,  tambahkan garam ikan dengan rasio 1 sendok teh per 4 liter ', 0.2, ''),
(2, 'P2', 'Velvet', 'Tambahkan obat yang mengandung tembaga seperti Seachem Cupramin', 0.1, ''),
(3, 'P3', 'Fin Rot', 'bisa diobati dengan antibiotik seperti Maracyn, Maracyn 2, Tetracycline, atau Seachem ParaGuard.', 0.2, ''),
(4, 'P4', 'Columnaris & Jamur Mulut', ' Gunakan antibiotik Maracyn atau Formalin (yang merupakan bahan kimia yang kuat)', 0.2, ''),
(5, 'P5', 'Dropsy', 'Masukkan dua sendok makan garam Epsom ke 1 galon air (4 liter) dan masukkan ikan di dalamnya selama sekitar 30-45 menit', 0.2, ''),
(6, 'P6', 'Insang Bengkak Terengah', 'segera melakukan penggantian air 50%.', 0.1, '');

ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

  ALTER TABLE `tbl_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

-- bagian hasil diagnosa

CREATE TABLE `tbl_hasil_diagnosa` (
  `id_hasil` int(11) NOT NULL,
  `hasil_probabilitas` float NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `solusi` text NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tbl_hasil_diagnosa`
  ADD PRIMARY KEY (`id_hasil`);

  ALTER TABLE `tbl_hasil_diagnosa`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

-- bagian pengetahuan

CREATE TABLE `tbl_pengetahuan` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_pengetahuan` (`id`, `id_penyakit`, `id_gejala`, `probabilitas`) VALUES

(1, 1, 1, 1),
(2, 1, 2, 0),
(3, 1, 3, 0.5),
(4, 1, 4, 0),
(5, 1, 5, 0),
(6, 1, 6, 0),
(7, 1, 7, 1),
(8, 1, 8, 0),
(9, 1, 9, 0),
(10, 1, 10, 0),
(11, 1, 11, 0),
(12, 1, 12, 0),
(13, 1, 13, 0),
(14, 1, 14, 0),

(15, 2, 1, 0),
(16, 2, 2, 1),
(17, 2, 3, 0),
(18, 2, 4, 1),
(19, 2, 5, 0),
(20, 2, 6, 0),
(21, 2, 7, 1),
(22, 2, 8, 0),
(23, 2, 9, 0),
(24, 2, 10, 0),
(25, 2, 11, 0),
(26, 2, 12, 0),
(27, 2, 13, 0),
(28, 2, 14, 0),

(29, 3, 1, 0),
(30, 3, 2, 0),
(31, 3, 3, 0),
(32, 3, 4, 0),
(33, 3, 5, 1),
(34, 3, 6, 0.5),
(35, 3, 7, 0),
(36, 3, 8, 1),
(37, 3, 9, 0),
(38, 3, 10, 0),
(39, 3, 11, 0),
(40, 3, 12, 0),
(41, 3, 13, 0),
(42, 3, 14, 0),

(43, 4, 1, 0.5),
(44, 4, 2, 0),
(45, 4, 3, 0),
(46, 4, 4, 0),
(47, 4, 5, 1),
(48, 4, 6, 0),
(49, 4, 7, 0.5),
(50, 4, 8, 0),
(51, 4, 9, 1),
(52, 4, 10, 0),
(53, 4, 11, 0),
(54, 4, 12, 0),
(55, 4, 13, 0),
(56, 4, 14, 0),

(57, 5, 1, 0),
(58, 5, 2, 0),
(59, 5, 3, 0),
(60, 5, 4, 0),
(61, 5, 5, 0.5),
(62, 5, 6, 0),
(63, 5, 7, 0),
(64, 5, 8, 0),
(65, 5, 9, 1),
(66, 5, 10, 0.5),
(67, 5, 11, 1),
(68, 5, 12, 0.5),
(69, 5, 13, 1),
(70, 5, 14, 0),

(71, 6, 1, 0),
(72, 6, 2, 0),
(73, 6, 3, 0),
(74, 6, 4, 0),
(75, 6, 5, 0),
(76, 6, 6, 0),
(77, 6, 7, 0),
(78, 6, 8, 0),
(79, 6, 9, 0),
(80, 6, 10, 1),
(81, 6, 11, 0),
(82, 6, 12, 0),
(83, 6, 13, 0),
(84, 6, 14, 1);

ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`id_gejala`),
  ADD KEY `id_kerusakan` (`id_penyakit`);

  ALTER TABLE `tbl_pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

  ALTER TABLE `tbl_pengetahuan`
  ADD CONSTRAINT `tbl_pengetahuan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tbl_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
  COMMIT;

-- bagian tmp

CREATE TABLE `tmp_final` (
  `id` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `probabilitas` float NOT NULL,
  `hasil_probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tmp_final`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `tmp_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

CREATE TABLE `tmp_gejala` (
  `id_user` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;