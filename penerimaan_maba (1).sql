-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 12:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerimaan_maba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_admin` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `email`, `password`, `status_admin`, `foto_profil`) VALUES
(1, 'Gading Indra Swari', 'gadingisa@worker.admin.ac.id', 'admin', 'admin', 'DSC07026.JPG'),
(2, 'Susanti Maya', 'susantimay@worker.staff.ac.id', 'staff', 'staff', 'line_1525447245573.jpg'),
(3, 'Al Firas Manar', 'alfirassmanar@worker.dba.ac.id', 'qwertyping', 'dba', 'DSC_1468.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen/Protestan'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khong Hu Chu'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alamat`
--

CREATE TABLE `tbl_alamat` (
  `id_alamat` int(11) NOT NULL,
  `alamat_mahasiswa` varchar(100) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_alamat`
--

INSERT INTO `tbl_alamat` (`id_alamat`, `alamat_mahasiswa`, `rt`, `rw`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`) VALUES
(7, 'Jl.Gajah Magersari 1 No.20', '11', '04', 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', '61212'),
(8, 'Jl. Semarang No.100', '15', '2', 'Semarang', 'Seamarang', 'Jawa Tengah', '62231'),
(9, 'Jl. Ahmad Subroto 12', '20', '1', 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', '61212'),
(10, 'Jl.Gajah Magersari 1 No.20 RT.11 RW.04', '11', '04', 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', '61212'),
(110001, 'Jl. Ahmad Subroto 12', '15', '04', 'Semarang', 'Seamarang', 'Jawa Tengah', '62231');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_berkas` int(11) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `akta_kelahiran` varchar(255) NOT NULL,
  `pasfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id_berkas`, `ijazah`, `kartu_keluarga`, `akta_kelahiran`, `pasfoto`) VALUES
(6, 'ijazah.pdf', 'Sertifikat magang.pdf', 'SPTJM_MSIB_B5_R3.pdf', 'DSC07026.JPG'),
(7, 'Sertifikat magang.pdf', 'Sertifikat magang.pdf', 'Sertifikat magang.pdf', 'line_1525447245573.jpg'),
(8, 'ijazah.pdf', 'ijazah.pdf', 'ijazah.pdf', 'DSC_1468.JPG'),
(9, 'ijazah.pdf', 'ijazah.pdf', 'ijazah.pdf', 'DSC_1468.JPG'),
(220001, 'ijazah.pdf', 'ijazah.pdf', 'ijazah.pdf', 'DSC_1468.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disabilitas`
--

CREATE TABLE `tbl_disabilitas` (
  `id_disabilitas` int(11) NOT NULL,
  `nama_disabilitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_disabilitas`
--

INSERT INTO `tbl_disabilitas` (`id_disabilitas`, `nama_disabilitas`) VALUES
(1, 'Tidak'),
(2, 'Netra (A)'),
(3, 'Rungu (B)'),
(4, 'Grahita Ringan (C)'),
(5, 'Grahita Sedang (C1)'),
(6, 'Daksa Ringan (D)'),
(7, 'Daksa Sedang (D1)'),
(8, 'Laras (E)'),
(9, 'Wicara (F)'),
(10, 'Tuna Ganda (G)'),
(11, 'Hiperaktif (H)'),
(12, 'Cerdas Istimewa (I)'),
(13, 'Bakat Istimewa (J)'),
(14, 'Kesulitan Belajar (K)'),
(15, 'Narkoba (N)'),
(16, 'Indigo (O)'),
(17, 'Down Syndrome (P)'),
(18, 'Autisme (Q)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `img_fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`id_fakultas`, `nama_fakultas`, `img_fakultas`) VALUES
(1, 'Fakultas Teknik', 'teknik.jpeg'),
(2, 'Fakultas MIPA', 'mipa.jpg'),
(3, 'Fakultas Ekonomi dan Bisnis', 'ekonomi-bisnis.jpeg'),
(4, 'Fakultas Ilmu Komputer', 'ilmu-komputer.jpeg'),
(5, 'Fakultas Ilmu Sosial dan Ilmu Politik', 'ilmu-sosial.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `id_orangtua` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `id_status_reg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` varchar(25) NOT NULL,
  `kewarganegaraan` enum('Indonesia','Asing') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat_mahasiswa` varchar(255) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten_kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `ket_disabilitas` varchar(255) NOT NULL,
  `pasfoto` varchar(255) NOT NULL,
  `status_registrasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mahasiswa`, `id_alamat`, `id_berkas`, `id_orangtua`, `id_registrasi`, `id_status_reg`, `id_user`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `kewarganegaraan`, `email`, `no_hp`, `agama`, `alamat_mahasiswa`, `rt`, `rw`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `ket_disabilitas`, `pasfoto`, `status_registrasi`) VALUES
(6505, 7, 6, 10, 6, 2, 5, 'Muhammad Ulin Nuha Al Firas Manar', 'L', 'Surabaya', '2023-06-12', '351508110220005', 'Indonesia', 'alfirassmanar11@gmail.com', '082331016638', 'Katholik', '7', 11, 4, 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', 61212, 'Tidak', 'DSC07026.JPG', 1),
(6507, 8, 7, 11, 7, 3, 11, 'Sujiwo Tejo', 'L', 'Semarang', '2023-06-12', '351508110220005', 'Indonesia', 'sujiwotejo@gmail.com', '082331016638', 'Hindu', '8', 15, 2, 'Semarang', 'Seamarang', 'Jawa Tengah', 62231, 'Tidak', 'line_1525447245573.jpg', 0),
(6508, 9, 8, 12, 8, 4, 12, 'Ali Yasraf Kafabih', 'L', 'Sidoarjo', '2023-06-12', '351508110220005', 'Indonesia', 'aliyasraf@gmail.com', '082331016638', 'Khong Hu Chu', '9', 20, 1, 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', 61212, 'Tidak', 'DSC_1468.JPG', 0),
(6509, 10, 9, 13, 9, 5, 13, 'Gading Indra Swari', 'P', 'Surabaya', '2023-06-13', '3515081105020005', 'Indonesia', 'gadinggisa@gmail.com', '082331016638', 'Katholik', '10', 11, 4, 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', 61212, 'Indigo (O)', 'DSC_1468.JPG', 0),
(6510, 110001, 220001, 330001, 440001, 550001, 0, 'Muhammad Dilan', 'L', 'Surabaya', '2023-06-14', '351508110220005', 'Indonesia', 'dilan@gmail.com', '082331016638', 'Islam', '110001', 15, 4, 'Semarang', 'Seamarang', 'Jawa Tengah', 62231, 'Tidak', 'DSC_1468.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orangtua`
--

CREATE TABLE `tbl_orangtua` (
  `id_orangtua` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orangtua`
--

INSERT INTO `tbl_orangtua` (`id_orangtua`, `nama_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) VALUES
(10, 'Mukhlis', 'Buruh', 2, 'Munaroh', 'Wirausaha', 5),
(11, 'Abdulah', 'Petani', 0, 'Siti', 'Wirausaha', 2),
(12, 'Nono', 'Nelayan', 5, 'Masyaroh', 'Peternak', 0),
(13, 'Sukijantoro', 'Pedagang Besar', 5, 'asda', 'PNS/TNI/POLRI', 1),
(330001, 'Nono', 'Peternak', 5, 'Masyaroh', 'PNS/TNI/POLRI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan_ortu`
--

CREATE TABLE `tbl_pekerjaan_ortu` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pekerjaan_ortu`
--

INSERT INTO `tbl_pekerjaan_ortu` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'Tidak Bekerja'),
(2, 'Nelayan'),
(3, 'Petani'),
(4, 'Peternak'),
(5, 'PNS/TNI/POLRI'),
(6, 'Karyawan Swasta'),
(7, 'Pedagang Kecil'),
(8, 'Pedagang Besar'),
(9, 'Wiraswasta'),
(10, 'Wirausaha'),
(11, 'Buruh'),
(12, 'Pensiunan'),
(13, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penghasilan_ortu`
--

CREATE TABLE `tbl_penghasilan_ortu` (
  `id_penghasilan` int(11) NOT NULL,
  `jumlah_penghasilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penghasilan_ortu`
--

INSERT INTO `tbl_penghasilan_ortu` (`id_penghasilan`, `jumlah_penghasilan`) VALUES
(1, 'Kurang dari 500.000'),
(2, '500.000 - 999.999'),
(3, '1 juta - 1.999.999'),
(4, '2 juta - 4.999.999'),
(5, '5 juta - 20 juta'),
(6, 'Lebih dari 20 juta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int(11) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prodi`, `program_studi`, `id_fakultas`) VALUES
(1, 'Teknik Sipil', 1),
(2, 'Teknik Industri', 1),
(3, 'Teknik Kimia', 1),
(4, 'Statistika', 2),
(5, 'Agribisnis', 2),
(6, 'Ilmu dan Teknologi Pangan', 2),
(7, 'Akuntansi', 3),
(8, 'Ekonomi', 3),
(9, 'Manajemen', 3),
(10, 'Informatika', 4),
(11, 'Sistem Informasi', 4),
(12, 'Bisnis Digital', 4),
(13, 'Administrasi Bisnis', 5),
(14, 'Administrasi Negara', 5),
(15, 'Ilmu Komunikasi', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi`
--

CREATE TABLE `tbl_registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `no_ijazah` varchar(25) NOT NULL,
  `pilihan_prodi_1` varchar(255) NOT NULL,
  `pilihan_prodi_2` varchar(255) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `tahun_lulus_sekolah` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registrasi`
--

INSERT INTO `tbl_registrasi` (`id_registrasi`, `nisn`, `no_ijazah`, `pilihan_prodi_1`, `pilihan_prodi_2`, `tanggal_registrasi`, `tahun_lulus_sekolah`) VALUES
(6, '00122212', '00021221', 'Teknik Industri', 'Informatika', '2023-06-12', '2021'),
(7, '01222122', '01010101', 'Ilmu Komunikasi', 'Ekonomi', '2023-06-12', '2020'),
(8, '099912211', '099912121', 'Statistika', 'Statistika', '2023-06-12', '2019'),
(9, '2131321', '2131231', 'Teknik Sipil', 'Administrasi Bisnis', '2023-06-13', '2018'),
(440001, '8282828822', '2222131233', 'Ilmu dan Teknologi Pangan', 'Administrasi Bisnis', '2023-06-14', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_registrasi`
--

CREATE TABLE `tbl_status_registrasi` (
  `id_status_reg` int(11) NOT NULL,
  `status_registrasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_status_registrasi`
--

INSERT INTO `tbl_status_registrasi` (`id_status_reg`, `status_registrasi`) VALUES
(2, '1'),
(3, '0'),
(4, '0'),
(5, '0'),
(550001, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_user`
--

CREATE TABLE `tbl_status_user` (
  `id_status_user` int(11) NOT NULL,
  `status_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_status_user`
--

INSERT INTO `tbl_status_user` (`id_status_user`, `status_user`) VALUES
(1, 'Aktif'),
(2, 'Nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `foto_profil`, `level`) VALUES
(5, 'alfirassmanar', 'alfirassmanar11@gmail.com', '12345', 'DSC_1468.JPG', '1'),
(11, 'Gadingisa', 'gadinggisa@gmail.com', '123', 'line_1525447245573.jpg', '1'),
(12, 'Tejo', 'sujiwotejo@gmail.com', '123', 'DSC07026.JPG', '1'),
(13, 'dilan', 'dilan@gmail.com', '123', 'DSC_1468 - Copy (1).jpg', '1'),
(14, 'ali', 'aliyasraf@gmail.com', '123', 'DSC_1468.JPG', '1'),
(16, 'manar', 'manar@gmail.com', '123', 'DSC07026.JPG', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vhasilpendaftaran`
-- (See below for the actual view)
--
CREATE TABLE `vhasilpendaftaran` (
`id_mahasiswa` int(11)
,`nama_lengkap` varchar(100)
,`jenis_kelamin` enum('P','L')
,`tempat_lahir` varchar(100)
,`tanggal_lahir` date
,`nik` varchar(25)
,`kewarganegaraan` enum('Indonesia','Asing')
,`email` varchar(100)
,`no_hp` varchar(13)
,`agama` varchar(255)
,`ket_disabilitas` varchar(255)
,`id_alamat` int(11)
,`alamat_mahasiswa` varchar(100)
,`rt` varchar(3)
,`rw` varchar(3)
,`kecamatan` varchar(50)
,`kabupaten_kota` varchar(50)
,`provinsi` varchar(50)
,`kode_pos` varchar(10)
,`id_berkas` int(11)
,`ijazah` varchar(255)
,`kartu_keluarga` varchar(255)
,`akta_kelahiran` varchar(255)
,`pasfoto` varchar(255)
,`id_orangtua` int(11)
,`nama_ayah` varchar(100)
,`pekerjaan_ayah` varchar(255)
,`penghasilan_ayah` int(11)
,`nama_ibu` varchar(100)
,`pekerjaan_ibu` varchar(255)
,`penghasilan_ibu` int(11)
,`id_registrasi` int(11)
,`nisn` varchar(12)
,`no_ijazah` varchar(25)
,`pilihan_prodi_1` varchar(255)
,`pilihan_prodi_2` varchar(255)
,`tanggal_registrasi` date
,`tahun_lulus_sekolah` varchar(4)
,`id_status_reg` int(11)
,`status_registrasi` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vhome`
-- (See below for the actual view)
--
CREATE TABLE `vhome` (
`id_mahasiswa` int(11)
,`nama_lengkap` varchar(100)
,`jenis_kelamin` enum('P','L')
,`tempat_lahir` varchar(100)
,`tanggal_lahir` date
,`nik` varchar(25)
,`kewarganegaraan` enum('Indonesia','Asing')
,`email` varchar(100)
,`no_hp` varchar(13)
,`agama` varchar(255)
,`ket_disabilitas` varchar(255)
,`id_alamat` int(11)
,`alamat_mahasiswa` varchar(100)
,`rt` varchar(3)
,`rw` varchar(3)
,`kecamatan` varchar(50)
,`kabupaten_kota` varchar(50)
,`provinsi` varchar(50)
,`kode_pos` varchar(10)
,`id_berkas` int(11)
,`ijazah` varchar(255)
,`kartu_keluarga` varchar(255)
,`akta_kelahiran` varchar(255)
,`pasfoto` varchar(255)
,`id_orangtua` int(11)
,`nama_ayah` varchar(100)
,`pekerjaan_ayah` varchar(255)
,`penghasilan_ayah` int(11)
,`nama_ibu` varchar(100)
,`pekerjaan_ibu` varchar(255)
,`penghasilan_ibu` int(11)
,`id_registrasi` int(11)
,`nisn` varchar(12)
,`no_ijazah` varchar(25)
,`pilihan_prodi_1` varchar(255)
,`pilihan_prodi_2` varchar(255)
,`tanggal_registrasi` date
,`tahun_lulus_sekolah` varchar(4)
,`id_status_reg` int(11)
,`status_registrasi` varchar(100)
,`id_user` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `vhasilpendaftaran`
--
DROP TABLE IF EXISTS `vhasilpendaftaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vhasilpendaftaran`  AS SELECT `mhs`.`id_mahasiswa` AS `id_mahasiswa`, `mhs`.`nama_lengkap` AS `nama_lengkap`, `mhs`.`jenis_kelamin` AS `jenis_kelamin`, `mhs`.`tempat_lahir` AS `tempat_lahir`, `mhs`.`tanggal_lahir` AS `tanggal_lahir`, `mhs`.`nik` AS `nik`, `mhs`.`kewarganegaraan` AS `kewarganegaraan`, `mhs`.`email` AS `email`, `mhs`.`no_hp` AS `no_hp`, `mhs`.`agama` AS `agama`, `mhs`.`ket_disabilitas` AS `ket_disabilitas`, `almt`.`id_alamat` AS `id_alamat`, `almt`.`alamat_mahasiswa` AS `alamat_mahasiswa`, `almt`.`rt` AS `rt`, `almt`.`rw` AS `rw`, `almt`.`kecamatan` AS `kecamatan`, `almt`.`kabupaten_kota` AS `kabupaten_kota`, `almt`.`provinsi` AS `provinsi`, `almt`.`kode_pos` AS `kode_pos`, `bks`.`id_berkas` AS `id_berkas`, `bks`.`ijazah` AS `ijazah`, `bks`.`kartu_keluarga` AS `kartu_keluarga`, `bks`.`akta_kelahiran` AS `akta_kelahiran`, `bks`.`pasfoto` AS `pasfoto`, `orgt`.`id_orangtua` AS `id_orangtua`, `orgt`.`nama_ayah` AS `nama_ayah`, `orgt`.`pekerjaan_ayah` AS `pekerjaan_ayah`, `orgt`.`penghasilan_ayah` AS `penghasilan_ayah`, `orgt`.`nama_ibu` AS `nama_ibu`, `orgt`.`pekerjaan_ibu` AS `pekerjaan_ibu`, `orgt`.`penghasilan_ibu` AS `penghasilan_ibu`, `regist`.`id_registrasi` AS `id_registrasi`, `regist`.`nisn` AS `nisn`, `regist`.`no_ijazah` AS `no_ijazah`, `regist`.`pilihan_prodi_1` AS `pilihan_prodi_1`, `regist`.`pilihan_prodi_2` AS `pilihan_prodi_2`, `regist`.`tanggal_registrasi` AS `tanggal_registrasi`, `regist`.`tahun_lulus_sekolah` AS `tahun_lulus_sekolah`, `stregist`.`id_status_reg` AS `id_status_reg`, `stregist`.`status_registrasi` AS `status_registrasi` FROM (((((`tbl_mahasiswa` `mhs` join `tbl_alamat` `almt` on(`mhs`.`id_alamat` = `almt`.`id_alamat`)) join `tbl_berkas` `bks` on(`mhs`.`id_berkas` = `bks`.`id_berkas`)) join `tbl_orangtua` `orgt` on(`mhs`.`id_orangtua` = `orgt`.`id_orangtua`)) join `tbl_registrasi` `regist` on(`mhs`.`id_registrasi` = `regist`.`id_registrasi`)) join `tbl_status_registrasi` `stregist` on(`mhs`.`id_status_reg` = `stregist`.`id_status_reg`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vhome`
--
DROP TABLE IF EXISTS `vhome`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vhome`  AS SELECT `mhs`.`id_mahasiswa` AS `id_mahasiswa`, `mhs`.`nama_lengkap` AS `nama_lengkap`, `mhs`.`jenis_kelamin` AS `jenis_kelamin`, `mhs`.`tempat_lahir` AS `tempat_lahir`, `mhs`.`tanggal_lahir` AS `tanggal_lahir`, `mhs`.`nik` AS `nik`, `mhs`.`kewarganegaraan` AS `kewarganegaraan`, `mhs`.`email` AS `email`, `mhs`.`no_hp` AS `no_hp`, `mhs`.`agama` AS `agama`, `mhs`.`ket_disabilitas` AS `ket_disabilitas`, `almt`.`id_alamat` AS `id_alamat`, `almt`.`alamat_mahasiswa` AS `alamat_mahasiswa`, `almt`.`rt` AS `rt`, `almt`.`rw` AS `rw`, `almt`.`kecamatan` AS `kecamatan`, `almt`.`kabupaten_kota` AS `kabupaten_kota`, `almt`.`provinsi` AS `provinsi`, `almt`.`kode_pos` AS `kode_pos`, `bks`.`id_berkas` AS `id_berkas`, `bks`.`ijazah` AS `ijazah`, `bks`.`kartu_keluarga` AS `kartu_keluarga`, `bks`.`akta_kelahiran` AS `akta_kelahiran`, `bks`.`pasfoto` AS `pasfoto`, `orgt`.`id_orangtua` AS `id_orangtua`, `orgt`.`nama_ayah` AS `nama_ayah`, `orgt`.`pekerjaan_ayah` AS `pekerjaan_ayah`, `orgt`.`penghasilan_ayah` AS `penghasilan_ayah`, `orgt`.`nama_ibu` AS `nama_ibu`, `orgt`.`pekerjaan_ibu` AS `pekerjaan_ibu`, `orgt`.`penghasilan_ibu` AS `penghasilan_ibu`, `regist`.`id_registrasi` AS `id_registrasi`, `regist`.`nisn` AS `nisn`, `regist`.`no_ijazah` AS `no_ijazah`, `regist`.`pilihan_prodi_1` AS `pilihan_prodi_1`, `regist`.`pilihan_prodi_2` AS `pilihan_prodi_2`, `regist`.`tanggal_registrasi` AS `tanggal_registrasi`, `regist`.`tahun_lulus_sekolah` AS `tahun_lulus_sekolah`, `stregist`.`id_status_reg` AS `id_status_reg`, `stregist`.`status_registrasi` AS `status_registrasi`, `usr`.`id_user` AS `id_user` FROM ((((((`tbl_mahasiswa` `mhs` join `tbl_alamat` `almt` on(`mhs`.`id_alamat` = `almt`.`id_alamat`)) join `tbl_berkas` `bks` on(`mhs`.`id_berkas` = `bks`.`id_berkas`)) join `tbl_orangtua` `orgt` on(`mhs`.`id_orangtua` = `orgt`.`id_orangtua`)) join `tbl_registrasi` `regist` on(`mhs`.`id_registrasi` = `regist`.`id_registrasi`)) join `tbl_status_registrasi` `stregist` on(`mhs`.`id_status_reg` = `stregist`.`id_status_reg`)) join `tbl_user` `usr` on(`mhs`.`id_user` = `usr`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tbl_disabilitas`
--
ALTER TABLE `tbl_disabilitas`
  ADD PRIMARY KEY (`id_disabilitas`);

--
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `id_alamat` (`id_alamat`),
  ADD UNIQUE KEY `id_berkas` (`id_berkas`),
  ADD UNIQUE KEY `id_orangtua` (`id_orangtua`),
  ADD UNIQUE KEY `id_registrasi` (`id_registrasi`),
  ADD UNIQUE KEY `id_status_reg` (`id_status_reg`);

--
-- Indexes for table `tbl_orangtua`
--
ALTER TABLE `tbl_orangtua`
  ADD PRIMARY KEY (`id_orangtua`);

--
-- Indexes for table `tbl_pekerjaan_ortu`
--
ALTER TABLE `tbl_pekerjaan_ortu`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tbl_penghasilan_ortu`
--
ALTER TABLE `tbl_penghasilan_ortu`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `tbl_status_registrasi`
--
ALTER TABLE `tbl_status_registrasi`
  ADD PRIMARY KEY (`id_status_reg`);

--
-- Indexes for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  ADD PRIMARY KEY (`id_status_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110002;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220002;

--
-- AUTO_INCREMENT for table `tbl_disabilitas`
--
ALTER TABLE `tbl_disabilitas`
  MODIFY `id_disabilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6511;

--
-- AUTO_INCREMENT for table `tbl_orangtua`
--
ALTER TABLE `tbl_orangtua`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330002;

--
-- AUTO_INCREMENT for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440002;

--
-- AUTO_INCREMENT for table `tbl_status_registrasi`
--
ALTER TABLE `tbl_status_registrasi`
  MODIFY `id_status_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550002;

--
-- AUTO_INCREMENT for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  MODIFY `id_status_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
