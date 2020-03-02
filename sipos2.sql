-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2020 pada 13.48
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `fullname`, `username`, `password`) VALUES
('123', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `limitasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_jual`, `jumlah_barang`, `limitasi`, `id_kategori`) VALUES
('PA01', 'Padi A', 20000, 30, 10, 0),
('PU01', 'Pupuk ABCD', 25000, 30, 10, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `idcustomers` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamatcustomers` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `bayar` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `pdiskon` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `kode_penjualan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_data_supplier`
--

CREATE TABLE `history_data_supplier` (
  `id_supplier` varchar(50) NOT NULL,
  `nama_supplier` varchar(200) NOT NULL,
  `telp_supplier` varchar(12) NOT NULL,
  `email_supplier` varchar(50) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `tgl_ubah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_data_supplier`
--

INSERT INTO `history_data_supplier` (`id_supplier`, `nama_supplier`, `telp_supplier`, `email_supplier`, `alamat_supplier`, `tgl_ubah`) VALUES
('S02', 'Eduward', '085867333477', 'eduward@gmail.com', 'Demang', '2019-12-17 11:21:28'),
('S02', 'Eduward', '', 'eduward@gmail.com', 'Demang', '2019-12-17 11:21:43'),
('S02', 'Eduward', '085867333460', '', 'Demang', '2019-12-17 11:26:12'),
('S02', 'Eduward', '085867333460', 'eduward@gmail.com', 'Demang', '2019-12-18 06:49:01'),
('S02', 'Eduward', '085867333460', '', 'Demang', '2019-12-18 19:10:47'),
('S02', 'Eduward', '085867333460', 'eduward', 'Demang', '2019-12-18 19:10:57'),
('S02', 'Eduward', '085867333460', 'eduward@gmail.com', 'Demang', '2019-12-18 19:14:04'),
('S03', 'Abror', '085867333666', '', 'Bojongsoang', '2019-12-18 19:14:44'),
('S04', 'Rayan', '085867333467', 'rayan@gmail.com', 'Bandung', '2019-12-19 09:12:07'),
('S04', 'Rayan', '085867333467', 'rayan@gmail.com', 'Demang', '2019-12-19 11:59:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaggan`
--

CREATE TABLE `pelaggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaan_barang`
--

CREATE TABLE `pengadaan_barang` (
  `idpengadaan` int(11) NOT NULL,
  `tglpengadaan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlahbeli` int(10) NOT NULL,
  `hargabeli` int(10) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `id_supplier` varchar(50) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengadaan_barang`
--

INSERT INTO `pengadaan_barang` (`idpengadaan`, `tglpengadaan`, `jumlahbeli`, `hargabeli`, `id_permintaan`, `kode_barang`, `id_supplier`, `total`) VALUES
(8, '2020-03-02 04:51:12', 105, 8000, 1, 'PA01', 'S01', '840000'),
(9, '2020-03-02 04:51:59', 65, 9000, 2, 'PU01', 'S02', '585000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_barang`
--

CREATE TABLE `pengembalian_barang` (
  `id_pengembalian` int(11) NOT NULL,
  `tgl_pengembalian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah_pengembalian` int(11) NOT NULL,
  `alasan_pengembalian` text NOT NULL,
  `idpengadaan` int(11) NOT NULL,
  `id_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_penjualan` varchar(20) CHARACTER SET latin1 NOT NULL,
  `kode_barcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_barang`
--

CREATE TABLE `permintaan_barang` (
  `id_permintaan` int(11) NOT NULL,
  `tgl_permintaan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah_permintaan` int(11) NOT NULL,
  `id_supplier` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan_barang`
--

INSERT INTO `permintaan_barang` (`id_permintaan`, `tgl_permintaan`, `jumlah_permintaan`, `id_supplier`, `kode_barang`) VALUES
(1, '2019-12-26 03:15:40', 20, 'S02', 'PU01'),
(2, '2019-12-19 02:12:49', 40, 'S02', 'PA01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(50) NOT NULL,
  `nama_supplier` varchar(200) NOT NULL,
  `telp_supplier` varchar(12) NOT NULL,
  `email_supplier` varchar(50) NOT NULL,
  `alamat_supplier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `telp_supplier`, `email_supplier`, `alamat_supplier`) VALUES
('S01', 'Angga', '085867333477', 'angga@gmail.com', 'Cikoneng'),
('S02', 'Eduward', '085867333460', 'eduward@gmail.com', 'Demang'),
('S03', 'Abror', '085867333666', 'abror@gmail.com', 'Bojongsoang'),
('S04', 'Rayan', '085867333467', 'rayan@gmail.com', 'Bandung');

--
-- Trigger `supplier`
--
DELIMITER $$
CREATE TRIGGER `after_supplier` AFTER UPDATE ON `supplier` FOR EACH ROW BEGIN
INSERT INTO `history_data_supplier`(`id_supplier`, `nama_supplier`, `telp_supplier`, `email_supplier`, `alamat_supplier`, `tgl_ubah`) VALUES (old.id_supplier,old.nama_supplier,old.telp_supplier,old.email_supplier,old.alamat_supplier,now());


END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_penjualan` (`kode_penjualan`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pelaggan`
--
ALTER TABLE `pelaggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  ADD PRIMARY KEY (`idpengadaan`),
  ADD KEY `kodebarang` (`kode_barang`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_permintaan` (`id_permintaan`);

--
-- Indeks untuk tabel `pengembalian_barang`
--
ALTER TABLE `pengembalian_barang`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `idpengadaan` (`idpengadaan`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  MODIFY `idpengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_barang`
--
ALTER TABLE `pengembalian_barang`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `barang` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  ADD CONSTRAINT `pengadaan_barang_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengadaan_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengadaan_barang_ibfk_3` FOREIGN KEY (`id_permintaan`) REFERENCES `permintaan_barang` (`id_permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengembalian_barang`
--
ALTER TABLE `pengembalian_barang`
  ADD CONSTRAINT `pengembalian_barang_ibfk_1` FOREIGN KEY (`idpengadaan`) REFERENCES `pengadaan_barang` (`idpengadaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_barang_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD CONSTRAINT `permintaan_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permintaan_barang_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
