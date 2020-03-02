-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2019 pada 16.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipos2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `kodekeluar` int(12) NOT NULL,
  `jumlahkeluar` int(11) NOT NULL,
  `hargajual` int(50) NOT NULL,
  `tglkeluar` date NOT NULL,
  `kodekartu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `kodemasuk` int(12) NOT NULL,
  `jumlahmasuk` int(11) NOT NULL,
  `hargajualbarang` int(50) NOT NULL,
  `tglmasuk` date NOT NULL,
  `kodekartu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangrefund`
--

CREATE TABLE `barangrefund` (
  `koderefund` varchar(50) NOT NULL,
  `jumlahrefund` int(11) NOT NULL,
  `hargabeli` int(50) NOT NULL,
  `tglrefund` date NOT NULL,
  `kodekartu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `idcustomers` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamatcustomers` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`idcustomers`, `namalengkap`, `alamatcustomers`, `notelp`) VALUES
(101, 'Faizal Triandi', 'Banjaran', '085867333467'),
(102, 'Rizki Saputra', 'Bojongsoang', '085867333455'),
(103, 'Musyahid', 'Gang Slamet 1', '085867333607');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `kodebarang` varchar(50) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `kategoribarang` varchar(50) NOT NULL,
  `satuanstok` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`kodebarang`, `namabarang`, `kategoribarang`, `satuanstok`, `deskripsi`) VALUES
('101JP', 'Jagung Putih Solo', 'Benih', 'Kg', 'Benih Unggul Jagung Putih dengan kelas inpari (unggul)'),
('101KH', 'Kedelai Hitam Yogya', 'Benih', 'Kg', 'Benih Unggul Kedelai Hitam Yogya  dengan kelas inpari (unggul)'),
('101PH', 'Padi Hitam Solo', 'Benih', 'Kg', 'Benih Unggul Padi Hitam Inpari  dengan kelas inpari (unggul)'),
('102KH', 'Kedelai Hitam Soloraya', 'Benih', 'Kg', 'Benih Unggul Kedelai Hitam Soloraya dengan kelas inpari (unggul)'),
('102PH', 'Padi Hitam Yogya', 'Benih', 'Kg', 'Benih Unggul Padi Hitam Yogya  dengan kelas inpari (unggul)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_supplier`
--

CREATE TABLE `data_supplier` (
  `kodesupplier` varchar(50) NOT NULL,
  `namasupplier` varchar(200) NOT NULL,
  `telpsupplier` varchar(12) NOT NULL,
  `emailsupplier` varchar(50) NOT NULL,
  `namaoutlet` varchar(50) NOT NULL,
  `alamatoutlet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_supplier`
--

INSERT INTO `data_supplier` (`kodesupplier`, `namasupplier`, `telpsupplier`, `emailsupplier`, `namaoutlet`, `alamatoutlet`) VALUES
('101BB', 'Suparno', '085867333460', 'udbenihberkah@gmail.com', 'UD Benih Berkah', 'Yogyakarta'),
('101JB', 'Kaka', '085867333463', 'udjafarberkah@gmail.com', 'UD Jafar Berkah', 'Solo'),
('101JGB', 'Suparno', '085867333464', 'udjagungberkah@gmail.com', 'UD Jagung Berkah', 'Solo'),
('101KB', 'Amin', '085867333468', 'udkedelaiberkah@gmail.com', 'UD Kedelai Berkah', 'Yogyakarta'),
('101PB', 'Tono', '085867333469', 'udpadiberkah@gmail.com', 'UD Padi Berkah', 'Yogyakarta');

--
-- Trigger `data_supplier`
--
DELIMITER $$
CREATE TRIGGER `after_supplier` AFTER UPDATE ON `data_supplier` FOR EACH ROW BEGIN
INSERT INTO `history_data_supplier`(`kodesupplier`, `namasupplier`, `telpsupplier`, `emailsupplier`, `namaoutlet`, `alamatoutlet`, `tgl_ubah`) VALUES (old.kodesupplier,old.namasupplier,old.telpsupplier,old.emailsupplier,old.namaoutlet,old.alamatoutlet,now());


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `historykeluar`
--

CREATE TABLE `historykeluar` (
  `kodekeluar` varchar(50) NOT NULL,
  `tglkeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `historymasuk`
--

CREATE TABLE `historymasuk` (
  `kodemasuk` varchar(50) NOT NULL,
  `tglmasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `historyrefund`
--

CREATE TABLE `historyrefund` (
  `koderefund` varchar(50) NOT NULL,
  `tglrefund` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_data_supplier`
--

CREATE TABLE `history_data_supplier` (
  `kodesupplier` varchar(50) NOT NULL,
  `namasupplier` varchar(200) NOT NULL,
  `telpsupplier` varchar(12) NOT NULL,
  `emailsupplier` varchar(50) NOT NULL,
  `namaoutlet` varchar(50) NOT NULL,
  `alamatoutlet` text NOT NULL,
  `tgl_ubah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infopelanggan`
--

CREATE TABLE `infopelanggan` (
  `memberID` varchar(5) NOT NULL,
  `namapelanggan` varchar(50) NOT NULL,
  `tlppelanggan` varchar(12) NOT NULL,
  `emailpelanggan` varchar(50) NOT NULL,
  `alamatpelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infopenjualan`
--

CREATE TABLE `infopenjualan` (
  `kodeproduk` varchar(50) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartustok`
--

CREATE TABLE `kartustok` (
  `kodekartu` varchar(20) NOT NULL,
  `kodebarang` varchar(50) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `hargajualstok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaan_barang`
--

CREATE TABLE `pengadaan_barang` (
  `idpengadaan` int(11) NOT NULL,
  `tglpengadaan` varchar(255) NOT NULL,
  `jumlahbeli` int(10) NOT NULL,
  `hargabeli` int(10) NOT NULL,
  `kodebarang` varchar(50) NOT NULL,
  `kodesupplier` varchar(50) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola_supplier`
--

CREATE TABLE `pengelola_supplier` (
  `id` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengelola_supplier`
--

INSERT INTO `pengelola_supplier` (`id`, `fullname`, `username`, `password`) VALUES
('101', 'Bagaswara', 'bagas', 'jkt48'),
('102', 'Monalisa', 'Mona', 'monalisacantik'),
('103', 'Martinus', 'martin', '12345'),
('104', 'Abdurahman Arsyad', 'Arsyad', 'mamasayange');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans`
--

CREATE TABLE `trans` (
  `idprod` int(11) NOT NULL,
  `namaprod` varchar(15) NOT NULL,
  `jml` int(11) NOT NULL,
  `hrg` int(11) NOT NULL,
  `tothrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans`
--

INSERT INTO `trans` (`idprod`, `namaprod`, `jml`, `hrg`, `tothrg`) VALUES
(1, 'bit jagung', 10, 10000, 100000),
(2, 'bit padi', 3, 23000, 69000),
(3, 'bit tomat', 20, 2000, 40000),
(4, 'bit wortel', 16, 2000, 38000),
(5, 'bit timun', 40, 1500, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(123) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`kodekeluar`),
  ADD KEY `kodekartu` (`kodekartu`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`kodemasuk`),
  ADD KEY `kodekartu` (`kodekartu`);

--
-- Indexes for table `barangrefund`
--
ALTER TABLE `barangrefund`
  ADD PRIMARY KEY (`koderefund`),
  ADD KEY `kodekartu` (`kodekartu`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`kodesupplier`);

--
-- Indexes for table `infopelanggan`
--
ALTER TABLE `infopelanggan`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `infopenjualan`
--
ALTER TABLE `infopenjualan`
  ADD KEY `kodeproduk` (`kodeproduk`);

--
-- Indexes for table `kartustok`
--
ALTER TABLE `kartustok`
  ADD PRIMARY KEY (`kodekartu`),
  ADD KEY `kodebarang1` (`kodebarang`);

--
-- Indexes for table `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  ADD PRIMARY KEY (`idpengadaan`),
  ADD KEY `kodebarang` (`kodebarang`),
  ADD KEY `kodesupplier` (`kodesupplier`);

--
-- Indexes for table `pengelola_supplier`
--
ALTER TABLE `pengelola_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `kodekeluar` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `kodemasuk` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  MODIFY `idpengadaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD CONSTRAINT `barangkeluar_ibfk_1` FOREIGN KEY (`kodekartu`) REFERENCES `kartustok` (`kodekartu`);

--
-- Ketidakleluasaan untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD CONSTRAINT `barangmasuk_ibfk_1` FOREIGN KEY (`kodekartu`) REFERENCES `kartustok` (`kodekartu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barangrefund`
--
ALTER TABLE `barangrefund`
  ADD CONSTRAINT `barangrefund_ibfk_1` FOREIGN KEY (`kodekartu`) REFERENCES `kartustok` (`kodekartu`);

--
-- Ketidakleluasaan untuk tabel `kartustok`
--
ALTER TABLE `kartustok`
  ADD CONSTRAINT `kartustok_ibfk_1` FOREIGN KEY (`kodebarang`) REFERENCES `data_barang` (`kodebarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  ADD CONSTRAINT `pengadaan_barang_ibfk_1` FOREIGN KEY (`kodebarang`) REFERENCES `data_barang` (`kodebarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengadaan_barang_ibfk_2` FOREIGN KEY (`kodesupplier`) REFERENCES `data_supplier` (`kodesupplier`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
