-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2019 pada 10.24
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalmazaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `nisn` longtext COLLATE utf8_unicode_ci,
  `name` longtext COLLATE utf8_unicode_ci,
  `birthplace` longtext COLLATE utf8_unicode_ci,
  `birthday` longtext COLLATE utf8_unicode_ci,
  `sex` longtext COLLATE utf8_unicode_ci,
  `religion` longtext COLLATE utf8_unicode_ci,
  `blood_group` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `phone` longtext COLLATE utf8_unicode_ci,
  `email` longtext COLLATE utf8_unicode_ci,
  `password` longtext COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `dormitory_id` int(11) DEFAULT NULL,
  `transport_id` int(11) DEFAULT NULL,
  `dormitory_room_number` longtext COLLATE utf8_unicode_ci,
  `authentication_key` longtext COLLATE utf8_unicode_ci,
  `kitas` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_akta` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agama` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `negara` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khusus_siswa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rt` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rw` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dusun` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kec` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinggal` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transportasi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kks` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anak_ke` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_kps` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_kip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alasan_pip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_rek` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_rek` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tahun_ayah` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pendidikan_ayah` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `penghasilan_ayah` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khusus_ayah` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tahun_ibu` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pendidikan_ibu` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `penghasilan_ibu` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khusus_ibu` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_wali` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik_wali` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tahun_wali` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pendidikan_wali` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `penghasilan_wali` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telepon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_siswa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`student_id`, `nisn`, `name`, `birthplace`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `email`, `password`, `parent_id`, `dormitory_id`, `transport_id`, `dormitory_room_number`, `authentication_key`, `kitas`, `no_akta`, `agama`, `negara`, `khusus_siswa`, `rt`, `rw`, `dusun`, `kelurahan`, `kec`, `kode_pos`, `tinggal`, `transportasi`, `kks`, `anak_ke`, `no_kps`, `no_kip`, `nama_kip`, `alasan_pip`, `bank`, `no_rek`, `nama_rek`, `nama_ayah`, `nik_ayah`, `tahun_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `khusus_ayah`, `nama_ibu`, `nik_ibu`, `tahun_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `khusus_ibu`, `nama_wali`, `nik_wali`, `tahun_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `telepon`, `no_hp`, `email_siswa`) VALUES
(1, 'bf575b6', 'Siswa', NULL, '07/11/1981', 'male', NULL, NULL, 'Jl. Cempaka Besar No. 57, Kelurahan Mawar, Kecamatan Banjarmasin Tengah, Kabupaten Kota Banjarmasin, Provinsi Kalimantan Selatan', '08222222223', 'siswa@almajaya.com', '24ec5822f0da36cb6e9df61eca854049cf20247f', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '7364837', 'Dipa', NULL, '06/07/13', 'female', NULL, NULL, 'Banjarmasin', '0834349835y723', 'siswa1@almajaya.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '00554446644', 'Mustapa Ahmad Kamal', NULL, '12/28/2008', 'male', NULL, NULL, 'Banjarmasin', '08000080577', 'sma2@almajaya.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '00552211', 'KAMAL', NULL, '01/07/12', 'male', NULL, NULL, 'Banjarmasin', '082343657', 'kamal@almajaya.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '0834567877', 'kmklmk', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '1234567', 'contoh', 'amuntai', '01/26/2009', 'male', NULL, 'a', 'Jl. Cempaka Besar No. 57, Kelurahan Mawar, Kecamatan Banjarmasin Tengah, Kabupaten Kota Banjarmasin, Provinsi Kalimantan Selatan', '08000000800', NULL, 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '082153022011', 'herru', 'kota', '09/01/2008', 'mele', NULL, NULL, 'mgl', '082153022011', 'herr@gmail.com', '$2y$12$ElkP9M1Ciz8rQGrXu.2OUOPLkyLI9Uo7eQD1k5lt2GAt7/IDg3Rfq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'herru', 'amuntai', '11/09/2009', 'male', NULL, 'a', 'bjm', '082153022011', NULL, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'arsdft', NULL, NULL, NULL, NULL, '', NULL, '', NULL, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '0909', 'amang', 'amuntai', '03/04/2010', 'male', NULL, '', 'bjm', '082153022011', NULL, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, '46322527', '882452', 'islam', 'indonesia', 'tidak', '05', '09', 'kota baru', 'hulu hulu', 'hala hala', '7555', 'margasari', 'ngesot', '99881', '8', '998123124', '77128319', 'saripudin', 'karan ingin jadi pahlawan', 'brri', '77161 1221 1239 009', 'saripudin', 'basuki', '877123134', '1979', 'S3 mengemudi', 'dreaming', '35.000.000', 'cinta', 'siti badriah', '77186123', '1982', 'S1 menjahit', 'ngurus bokap', '10.000.000', 'tidak', 'nispuni', '342671', '1995', 'SMA', 'kuli bangunan', '1.500.000', '0988888', '08212', 'herrru@rqi.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
