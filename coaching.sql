-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2021 pada 02.13
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coach`
--

CREATE TABLE `coach` (
  `id_coach` int(11) NOT NULL,
  `coach` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coach`
--

INSERT INTO `coach` (`id_coach`, `coach`) VALUES
(1, 'ADITHIA AMIDJAYA'),
(2, 'Adiwinata Liem'),
(3, 'Andre Wijaya'),
(4, 'IKA PARAMITA'),
(5, 'PHILIPUS INDRA TJAHJANA'),
(6, 'RAHMADSYAH'),
(7, 'SALIM SUTIONO'),
(8, 'SUSANA DEWI'),
(9, 'VERLY NURSANTO'),
(10, 'Vonny Ramali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi`
--

CREATE TABLE `isi` (
  `id_isi` varchar(11) NOT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `sesi` int(1) DEFAULT NULL,
  `soal1` int(1) DEFAULT NULL,
  `soal2` int(1) DEFAULT NULL,
  `soal3` int(1) DEFAULT NULL,
  `soal4` int(1) DEFAULT NULL,
  `id_murid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `isi`
--

INSERT INTO `isi` (`id_isi`, `tanggal`, `sesi`, `soal1`, `soal2`, `soal3`, `soal4`, `id_murid`) VALUES
('1', '2021-08-12', 12, 4, 5, 2, 5, 32),
('2', '2021-08-13', 12, 2, 3, 5, 2, 32),
('3', '2021-08-13', 2, 1, 1, 1, 1, 32),
('4', '2021-08-12', 2, 2, 5, 2, 5, 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `murid` varchar(255) DEFAULT NULL,
  `id_coach` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id_murid`, `murid`, `id_coach`) VALUES
(1, 'muhammad amraks persiawar', 1),
(2, 'Rahmad Kurnia Sanjaya', 1),
(3, 'Azhkwaldi Aldi', 1),
(4, 'Tema Mendrofa', 1),
(5, '[2] ROZY ANDRIANTO', 1),
(6, '[2] ARIF PRAWIRA', 1),
(7, '[2] FRANKY LUKAS MAKATIPU', 1),
(8, '[2] MOH KHATAMSI', 1),
(9, '[3] Ario Wirawan', 1),
(10, '[3] Berton Gurning', 1),
(11, '[3] Ivanlie', 1),
(12, '[3] Mochamad Pradana', 1),
(13, '[3] Zairin Pratondo', 1),
(14, '[3] Saiful Anam', 1),
(16, 'Gordon Pangaribuan', 2),
(17, 'Mochamad Irkhamoyo', 2),
(18, 'Andy Forrer', 2),
(19, 'Conrad Panjaitan', 2),
(20, 'Fezan Gustano R.', 2),
(21, '[2] AHMAD GHALIB', 2),
(22, '[2] TISNA HAMIJAYA', 2),
(23, '[2] HERIZAR SALIM', 2),
(24, '[2] ACHMAD FEBY SUPUFI', 2),
(25, '[2] IMRAN RUSYADI', 2),
(26, '[2] AGUNG PRIYANTOMO', 2),
(31, 'Gordon Pangaribuan', 2),
(32, 'Syafnul Anhary', 3),
(33, 'Ulis Yusnandar', 3),
(34, 'Robby Mandala P', 3),
(35, 'erlangga prayudha negera', 3),
(36, '[3] Michael Tetelpta', 4),
(37, '[3] Reynold Valentino Pateh', 4),
(38, 'Rusli Ware', 5),
(39, 'Septa Pudiawan', 5),
(40, 'M Ryan Fadhli', 5),
(41, '[2] AGGY RESTU PROBADI', 5),
(42, '[2] FAJRI ARDI', 5),
(43, '[2] KENDIAN FETRIKO', 5),
(44, '[2] JOKO SANTOSO S', 5),
(45, '[3] Arthur Edgar Wijaya', 5),
(46, '[3] Fekky Irawan', 5),
(47, '[3] Julianto', 5),
(48, '[3] Wahyullah Nasmar', 5),
(49, '[3] Toga Parulian Sitanggang', 5),
(50, '[3] Rezky Septian Abdillah', 5),
(51, '[3] Sagian Safrudin', 5),
(52, 'Achmad Nizar', 6),
(53, 'HARIS JUNAIDI', 6),
(54, '[2] M FIRSON APRIANDI', 6),
(55, '[2] ENDY ARDAPUTRA', 6),
(56, '[3] Bob Agus Perdana', 6),
(57, '[3] Nuzula Sakti Ramadhan', 6),
(58, '[3] Ramadhan Mahmud Habibie', 6),
(59, '[3] Rajif Rahman', 6),
(60, 'Wahyudi', 7),
(61, 'Rozi Fadly', 7),
(62, '[2] NOFRIZAL', 7),
(63, '[2] TRI HERU IMAN SUSILO', 7),
(64, '[3] Erwin Ramli', 7),
(65, '[3] Amir Hamzah', 7),
(66, 'Dio Delyanta', 8),
(67, '[2] LUKAS', 8),
(68, '[2] DON TRIPOL', 8),
(69, '[3] Cepy Firmansyah', 8),
(70, '[3] Yodie Triwibowo', 8),
(71, '[3] Risa Perdana Kurniawan', 8),
(72, '[3] Dito Ferandy', 8),
(73, 'Ivan Yulindo', 9),
(74, '[2] WAHYU ZULKARNAIN', 9),
(75, '[2] EZZY NORMANSYAH', 9),
(76, '[3] Steven', 9),
(77, '[3] Immanuel Romoe Simanjuntak', 9),
(78, 'Adrian', 10),
(79, 'Heri Purnomo', 10),
(80, 'Donan Perdana', 10),
(81, 'Irwan Budi Rachman', 10),
(82, 'Deny Kurniawan', 10),
(83, 'Ary Lambang Kusuma', 10),
(84, '[2] DODY SUWONDO', 10),
(85, '[2] SIROJUDIN ABBAS', 10),
(86, '[2] RAFAEL YUDHISTIRA ARIE BAWANA', 10),
(87, '[2] PATMOS KABAN', 10),
(88, '[2] ZULHIRMAN', 10),
(89, '[2] FAUZI WARDI', 10),
(90, '[2] FREDDY SEMBIRING', 10),
(91, '[2] ANDRE KURNIAWAN', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id_coach`);

--
-- Indeks untuk tabel `isi`
--
ALTER TABLE `isi`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coach`
--
ALTER TABLE `coach`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
