-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2022 pada 23.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gunakarya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pamsimas`
--

CREATE TABLE `pamsimas` (
  `id_pelanggan` varchar(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `langganan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pamsimas`
--

INSERT INTO `pamsimas` (`id_pelanggan`, `nama`, `alamat`, `nik`, `langganan`) VALUES
('1', 'SUPARMO', 'PLUKISAN', '1', 'UMUM'),
('10', 'YULI HARSONO', 'PLUKISAN', '10', 'UMUM'),
('100', 'NURHADI', 'PLUKISAN', '100', 'UMUM'),
('101', 'SUMANTO', 'PLUKISAN', '101', 'UMUM'),
('102', 'SUYARTO', 'PLUKISAN', '102', 'UMUM'),
('103', 'HARMI', 'PLUKISAN', '103', 'UMUM'),
('104', 'PARTUJI LOR', 'PLUKISAN', '104', 'KEBON SUWUNG'),
('105', 'WIHARA', 'PLUKISAN', '105', 'GRATIS'),
('106', 'KINEM', 'SIDOMULYO', '106', 'GARTIS'),
('107', 'HARYONO', 'SIDOMULYO', '107', 'UMUM'),
('108', 'D. WARDI', 'SIDOMULYO', '108', 'UMUM'),
('109', 'PURNOMO', 'SIDOMULYO', '109', 'UMUM'),
('11', 'TRIJOKO', 'PLUKISAN', '11', 'FLAT'),
('110', 'SARNO', 'SIDOMULYO', '110', 'UMUM'),
('111', 'SUMADI / MADI SUYONO', 'SIDOMULYO', '111', 'UMUM'),
('112', 'GUNADI', 'SIDOMULYO', '112', 'pengurus'),
('113', 'HARSO SUJI', 'SIDOMULYO', '113', 'FLAT'),
('114', 'SUMADI LOR', 'SIDOMULYO', '114', 'UMUM'),
('115', 'DARNO', 'SIDOMULYO', '115', 'UMUM'),
('116', 'WARDOYO', 'SIDOMULYO', '116', 'UMUM'),
('117', 'GIARTO', 'SIDOMULYO', '117', 'UMUM'),
('118', 'SUMIDI', 'SIDOMULYO', '118', 'UMUM'),
('119', 'NING', 'SIDOMULYO', '119', 'UMUM'),
('12', 'SLAMET SABIDI', 'PLUKISAN', '12', 'UMUM'),
('120', 'SUNU', 'SIDOMULYO', '120', 'UMUM'),
('121', 'CITRO', 'SIDOMULYO', '121', 'UMUM'),
('122', 'PARMO', 'SIDOMULYO', '122', 'UMUM'),
('123', 'WARDI / SUKINI', 'SIDOMULYO', '123', 'UMUM'),
('124', 'SUYADI', 'SIDOMULYO', '124', 'PENGURUS'),
('125', 'SANGADI', 'SIDOMULYO', '125', 'UMUM'),
('126', 'SUMIRAH', 'SIDOMULYO', '126', 'UMUM'),
('127', 'SUTRISNO', 'SIDOMULYO', '127', 'UMUM'),
('128', 'WIDODO', 'CANDIROTO', '128', 'UMUM'),
('129', 'SUPADI', 'CANDIROTO', '129', 'UMUM'),
('13', 'SARTONO', 'PLUKISAN', '13', 'UMUM'),
('130', 'PARNAN', 'CANDIROTO', '130', 'UMUM'),
('131', 'BAYAN SUROTO', 'CANDIROTO', '131', 'UMUM'),
('132', 'SRIONO UNYIL', 'CANDIROTO', '132', 'UMUM'),
('133', 'SALIP', 'CANDIROTO', '133', 'UMUM'),
('134', 'MUSHOLA KULON', 'GUDANG', '134', 'UMUM'),
('135', 'MUSHOLA ETAN', 'GUDANG', '135', 'UMUM'),
('136', 'S.SUPOMO', 'GUDANG', '136', 'UMUM'),
('137', 'SABAR', 'GUDANG', '137', 'UMUM'),
('138', 'MITRO SARDI', 'GUDANG', '138', 'UMUM'),
('139', 'H. SUWARDI', 'GUDANG', '139', 'UMUM'),
('14', 'JUMALI', 'PLUKISAN', '14', 'UMUM'),
('140', 'YANTI', 'GUDANG', '140', 'KEBON SUWUNG'),
('141', 'GUNAWAN', 'GUDANG', '141', 'UMUM'),
('142', 'MULYATI', 'GUDANG', '142', 'UMUM'),
('143', 'MARYONO', 'GUDANG', '143', 'UMUM'),
('144', 'YAHMI', 'GUDANG', '144', 'UMUM'),
('145', 'PORWANTO', 'GUDANG', '145', 'UMUM'),
('146', 'SARYADI', 'GUDANG', '146', 'UMUM'),
('147', 'JOKO', 'GUDANG', '147', 'UMUM'),
('148', 'BIDAN SRI SUHARMI', 'GUDANG', '148', 'UMUM'),
('149', 'S. SRI', 'GUDANG', '149', 'UMUM'),
('15', 'SUWANTO', 'PLUKISAN', '15', 'UMUM'),
('150', 'DIDIK', 'GUDANG', '150', 'UMUM'),
('151', 'NGATEMAN', 'GUDANG', '151', 'UMUM'),
('152', 'TONI', 'GUDANG', '152', 'UMUM'),
('153', 'JUMALI', 'GUDANG', '153', 'UMUM'),
('154', 'SASTRO WIYONO', 'GUDANG', '154', 'UMUM'),
('155', 'NARNO', 'GUDANG', '155', 'UMUM'),
('156', 'RAHARJO', 'GUDANG', '156', 'UMUM'),
('157', 'WALUYO', 'GUDANG', '157', 'UMUM'),
('158', 'WIYONO', 'GUDANG', '158', 'FLAT'),
('159', 'BEJO', 'SIDOMULYO', '159', 'UMUM'),
('16', 'MARTO PARJI', 'PLUKISAN', '16', 'UMUM'),
('160', 'SUYONO', 'SIDOMULYO', '160', 'UMUM'),
('161', 'KARTOMO (122)', 'SIDOMULYO', '161', 'UMUM'),
('162', 'SISWO PAIDI', 'SIDOMULYO', '162', 'UMUM'),
('163', 'SARMI', 'CANDIROTO', '163', 'UMUM'),
('164', 'BANDI', 'PLUKISAN', '164', 'UMUM'),
('165', 'JAYADI', 'PLUKISAN', '165', 'UMUM'),
('166', 'YOSO BIBIT', 'PLUKISAN', '166', 'UMUM'),
('167', 'JOKO PRAMONO', 'PLUKISAN', '167', 'UMUM'),
('168', 'MINUK', 'PLUKISAN', '168', 'UMUM'),
('169', 'YAENI', 'PLUKISAN', '169', 'UMUM'),
('17', 'MARDI SARONO', 'PLUKISAN', '17', 'UMUM'),
('170', 'YONO', 'SIDOMULYO', '170', 'UMUM'),
('171', 'SUYANTO', 'CANDIROTO', '171', 'FLAT'),
('172', 'SUWARDI', 'SIDOMULYO', '172', 'UMUM'),
('173', 'SLAMET RIYADI', 'SIDOMULYO', '173', 'UMUM'),
('174', 'WARNO', 'CANDIROTO', '174', 'FLAT'),
('175', 'YOSO SLAMET', 'CANDIROTO', '175', 'UMUM'),
('176', 'MARDI', 'CANDIROTO', '176', 'UMUM'),
('177', 'JUMAR', 'CANDIROTO', '177', 'FLAT'),
('178', 'SUKIDI', 'CANDIROTO', '178', 'FLAT'),
('179', 'UMI', 'PLUKISAN', '179', 'UMUM'),
('18', 'MAHMUDI', 'PLUKISAN', '18', 'UMUM'),
('180', 'JOKO TRIYANTO', 'PLUKISAN', '180', 'UMUM'),
('181', 'GITO SARIS', 'PLUKISAN', '181', 'UMUM'),
('19', 'JUADI DARSONO', 'PLUKISAN', '19', 'UMUM'),
('2', 'SULAMTO', 'PLUKISAN', '2', 'UMUM'),
('20', 'DUL TAMBUNG', 'PLUKISAN', '20', 'UMUM'),
('21', 'K.MULUT', 'PLUKISAN', '21', 'CABUT SEGEL'),
('22', 'BEMAN', 'PLUKISAN', '22', 'UMUM'),
('23', 'HUDI', 'PLUKISAN', '23', 'UMUM'),
('24', 'SLAMET SENEN', 'PLUKISAN', '24', 'UMUM'),
('25', 'SUHONO', 'PLUKISAN', '25', 'UMUM'),
('26', 'DARMO WALIDI', 'PLUKISAN', '26', 'UMUM'),
('27', 'JUNI', 'PLUKISAN', '27', 'UMUM'),
('28', 'JARWANTO', 'PLUKISAN', '28', 'UMUM'),
('29', 'NGATINI', 'PLUKISAN', '29', 'UMUM'),
('3', 'SLAMET ARISUDIN', 'PLUKISAN', '3', 'UMUM'),
('30', 'YAMTI S', 'PLUKISAN', '30', 'UMUM'),
('31', 'PARJI SARWO', 'PLUKISAN', '31', 'UMUM'),
('32', 'TOMO JUMADI', 'PLUKISAN', '32', 'UMUM'),
('33', 'DARMO SURIP', 'PLUKISAN', '33', 'UMUM'),
('34', 'WIYONO BENI', 'PLUKISAN', '34', 'UMUM'),
('35', 'EDI PURWANTO', 'PLUKISAN', '35', 'UMUM'),
('36', 'SIH NARWOTO', 'PLUKISAN', '36', 'UMUM'),
('37', 'JAMIN', 'PLUKISAN', '37', 'UMUM'),
('38', 'JIMIN', 'PLUKISAN', '38', 'UMUM'),
('39', 'MESERI', 'PLUKISAN', '39', 'UMUM'),
('4', 'WARNO', 'PLUKISAN', '4', 'UMUM'),
('40', 'WAWAN', 'PLUKISAN', '40', 'UMUM'),
('41', 'SURATNO', 'PLUKISAN', '41', 'UMUM'),
('42', 'YARLAN', 'PLUKISAN', '42', 'UMUM'),
('43', 'JAMAN', 'PLUKISAN', '43', 'UMUM'),
('44', 'RESOJAINAP', 'PLUKISAN', '44', 'UMUM'),
('45', 'WIDODO SS', 'PLUKISAN', '45', 'UMUM'),
('46', 'MULYONO', 'PLUKISAN', '46', 'UMUM'),
('47', 'YAMRONI', 'PLUKISAN', '47', 'UMUM'),
('48', 'NGADIONO', 'PLUKISAN', '48', 'UMUM'),
('49', 'MURI', 'PLUKISAN', '49', 'UMUM'),
('5', 'SUKIRJI', 'PLUKISAN', '5', 'UMUM'),
('50', 'JUEDI IKSAN', 'PLUKISAN', '50', 'UMUM'),
('51', 'YOTO REJO', 'PLUKISAN', '51', 'UMUM'),
('52', 'WINARNO', 'PLUKISAN', '52', 'UMUM'),
('53', 'JULIANTO', 'PLUKISAN', '53', 'UMUM'),
('54', 'SUMADI', 'PLUKISAN', '54', 'UMUM'),
('55', 'SLAMET KABUL', 'PLUKISAN', '55', 'UMUM'),
('56', 'M. SUKRI', 'PLUKISAN', '56', 'UMUM'),
('57', 'MESRO', 'PLUKISAN', '57', 'UMUM'),
('58', 'MARYADI', 'PLUKISAN', '58', 'UMUM'),
('59', 'YADI BASUKI', 'PLUKISAN', '59', 'UMUM'),
('6', 'ISWADI', 'PLUKISAN', '6', 'UMUM'),
('60', 'SURANTO', 'PLUKISAN', '60', 'UMUM'),
('61', 'SUPARMI', 'PLUKISAN', '61', 'UMUM'),
('62', 'SABAR', 'PLUKISAN', '62', 'RUSAK'),
('62d586dcbc9', 'Tes Tambahan Nama Edit', 'Tes Tambahan Alamat Edit', '123456', 'Tes Tambahan Jenis Langganan'),
('63', 'HARDIYANTO', 'PLUKISAN', '63', 'RUSAK'),
('64', 'SARTIYEM', 'PLUKISAN', '64', 'UMUM'),
('65', 'DUL SAMBURI', 'PLUKISAN', '65', 'UMUM'),
('66', 'H. SUTRISNO', 'PLUKISAN', '66', 'UMUM'),
('67', 'WIDODO E', 'PLUKISAN', '67', 'UMUM'),
('68', 'PARTUJI KIDUL', 'PLUKISAN', '68', 'UMUM'),
('69', 'P. PARMAN', 'PLUKISAN', '69', 'UMUM'),
('7', 'SUKIRMAN', 'PLUKISAN', '7', 'UMUM'),
('70', 'HARNO', 'PLUKISAN', '70', 'UMUM'),
('71', 'WARSITO', 'PLUKISAN', '71', 'RUSAK'),
('72', 'SUPARDI', 'PLUKISAN', '72', 'UMUM'),
('73', 'KOMARI', 'PLUKISAN', '73', 'UMUM'),
('74', 'WALUYO', 'PLUKISAN', '74', 'UMUM'),
('75', 'ANTO', 'PLUKISAN', '75', 'UMUM'),
('76', 'GALIH', 'PLUKISAN', '76', 'CABUT SEGEL'),
('77', 'MARDIONO', 'PLUKISAN', '77', 'UMUM'),
('78', 'D. TUNGGAL', 'PLUKISAN', '78', 'UMUM'),
('79', 'WAIDI', 'PLUKISAN', '79', 'UMUM'),
('8', 'ABDUL ROHMAN', 'PLUKISAN', '8', 'UMUM'),
('80', 'P. NGADIMAN', 'PLUKISAN', '80', 'UMUM'),
('81', 'DALIMAN', 'PLUKISAN', '81', 'UMUM'),
('82', 'KIRMAJI', 'PLUKISAN', '82', 'UMUM'),
('83', 'MUL WIDODO', 'PLUKISAN', '83', 'UMUM'),
('84', 'BEJO MULYANTO', 'PLUKISAN', '84', 'UMUM'),
('85', 'SUNARNO', 'PLUKISAN', '85', 'UMUM'),
('86', 'MARJONO', 'PLUKISAN', '86', 'UMUM'),
('87', 'PONIKEM', 'PLUKISAN', '87', 'UMUM'),
('88', 'SUYADI', 'PLUKISAN', '88', 'UMUM'),
('89', 'NARTI', 'PLUKISAN', '89', 'KEBON SUWUNG'),
('9', 'M SUPARDIYO', 'PLUKISAN', '9', 'PENGURUS'),
('90', 'HARJO SLAMET', 'PLUKISAN', '90', 'UMUM'),
('91', 'JIMU', 'PLUKISAN', '91', 'UMUM'),
('92', 'SLAMET AMBAR', 'PLUKISAN', '92', 'UMUM'),
('93', 'SLAMET ARDANI', 'PLUKISAN', '93', 'UMUM'),
('94', 'SARJI PURNOMO', 'PLUKISAN', '94', 'UMUM'),
('95', 'PARJI HARUN', 'PLUKISAN', '95', 'UMUM'),
('96', 'BIBIT HARSONO', 'PLUKISAN', '96', 'UMUM'),
('97', 'CIPTO SUROSO', 'PLUKISAN', '97', 'UMUM'),
('98', 'RIYADI', 'PLUKISAN', '98', 'UMUM'),
('99', 'INDAH', 'PLUKISAN', '99', 'FLAT RUSAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
('62d08f08b20a4', 'Masker Hitam', 2000, 'default.jpg', 'Masker Medis'),
('62d0c8f58073b', 'Teh Pucuk Harum', 3500, 'default.jpg', 'Minuman teh botol'),
('62d2e18d57d31', 'Makanan ringan', 1500, 'default.jpg', 'Kripik kentang'),
('62d45370adade', 'Tes Delete', 10000, 'default.jpg', 'ujicoba hapus'),
('62d48f045a1b2', 'Tes Gambar', 20000, 'default.jpg', 'ini merupakan proses pengetesan upload gambar'),
('62d4d54562844', 'Produk Uji Coba Edit', 9000, 'default.jpg', 'Merupakan Ujicoba Edit Program'),
('62d5cb3a85fe0', 'Tes Hapus', 100000, 'default.jpg', 'Tes hapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`) VALUES
('6118b2a943acc2.78631959', 'Administrator', 'admin@mail.com', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', NULL, '2021-08-14 23:22:33', '2022-07-18 15:59:16'),
('6118b2a943acc2.78631960', 'Administrator2', 'admi2n@mail.com', 'admin2', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', NULL, '2022-06-18 06:57:33', '2022-07-18 01:59:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pamsimas`
--
ALTER TABLE `pamsimas`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
