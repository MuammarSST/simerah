-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 06:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simoeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_paket`
--

CREATE TABLE `jenis_paket` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_paket`
--

INSERT INTO `jenis_paket` (`id`, `kode`, `keterangan`) VALUES
(1, 'F1', 'Konstruksi'),
(6, 'F2', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kode_kecamatan` varchar(25) NOT NULL,
  `nama_kecamatan` varchar(25) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kode_kecamatan`, `nama_kecamatan`, `keterangan`) VALUES
(1, '11.07.03', 'Batee', 'Keterangan'),
(2, '11.07.04', 'Delima', 'Keterangan'),
(3, '11.07.05', 'Geumpang', 'Keterangan'),
(4, '11.07.06', 'Geulumpang Tiga', 'Keterangan'),
(5, '11.07.29', 'Glumpang Baro', 'Keterangan'),
(6, '11.07.25', 'Grong-Grong', 'Keterangan'),
(7, '11.07.07', 'Indrajaya', 'Keterangan'),
(8, '11.07.08', 'Kembang Tanjong', 'Keterangan'),
(9, '11.07.22', 'Keumala', 'Keterangan'),
(10, '11.07.09', 'Kota Sigli', 'Keterangan'),
(11, '11.07.27', 'Mane', 'Keterangan'),
(12, '11.07.11', 'Mila', 'Keterangan'),
(13, '11.07.12', 'Muara Tiga', 'Keterangan'),
(14, '11.07.13', 'Mutiara', 'Keterangan'),
(15, '11.07.24', 'Mutiara Timur', 'Keterangan'),
(16, '11.07.14', 'Padang Tiji', 'Keterangan'),
(17, '11.07.15', 'Peukan Baro', 'Keterangan'),
(18, '11.07.16', 'Pidie', 'Keterangan'),
(19, '11.07.17', 'Sakti', 'Keterangan'),
(20, '11.07.18', 'Simpang Tiga', 'Keterangan'),
(21, '11.07.19', 'Tangse', 'Keterangan'),
(22, '11.07.21', 'Tiro/ Truseb', 'Keterangan'),
(23, '11.07.31', 'Titeue', 'Keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `alamat_paket` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `skpk_id` int(11) DEFAULT NULL,
  `kpa` varchar(255) DEFAULT NULL,
  `alamat_skpk` varchar(255) DEFAULT NULL,
  `nama_pa` varchar(255) DEFAULT NULL,
  `nama_bendahara` varchar(255) DEFAULT NULL,
  `nama_pptk` varchar(255) DEFAULT NULL,
  `pl_nama_1` varchar(255) DEFAULT NULL,
  `pl_instasi_asal_1` varchar(255) DEFAULT NULL,
  `pl_nama_2` varchar(255) DEFAULT NULL,
  `pl_instasi_asal_2` varchar(255) DEFAULT NULL,
  `pl_nama_3` varchar(255) DEFAULT NULL,
  `pl_instasi_asal_3` varchar(255) DEFAULT NULL,
  `pl_nama_4` varchar(255) DEFAULT NULL,
  `pl_instasi_asal_4` varchar(255) DEFAULT NULL,
  `pl_nama_5` varchar(255) DEFAULT NULL,
  `pl_instasi_asal_5` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pho_nama_1` varchar(255) DEFAULT NULL,
  `pho_instasi_asal_1` varchar(255) DEFAULT NULL,
  `pho_nama_2` varchar(255) DEFAULT NULL,
  `pho_instasi_asal_2` varchar(255) DEFAULT NULL,
  `pho_nama_3` varchar(255) DEFAULT NULL,
  `pho_instasi_asal_3` varchar(255) DEFAULT NULL,
  `pho_nama_4` varchar(255) DEFAULT NULL,
  `pho_instasi_asal_4` varchar(255) DEFAULT NULL,
  `pho_nama_5` varchar(255) DEFAULT NULL,
  `pho_instasi_asal_5` varchar(255) DEFAULT NULL,
  `pho_nama_6` varchar(255) DEFAULT NULL,
  `pho_instasi_asal_6` varchar(255) DEFAULT NULL,
  `pr_nama_perusahaan` varchar(255) DEFAULT NULL,
  `pr_alamat_perusahaan` varchar(255) DEFAULT NULL,
  `pr_nama_pimpinan` varchar(255) DEFAULT NULL,
  `pr_alamat_pimpinan` varchar(255) DEFAULT NULL,
  `pr_nilai_kontrak` varchar(255) DEFAULT NULL,
  `pw_nama_perusahaan` varchar(255) DEFAULT NULL,
  `pw_alamat_perusahaan` varchar(255) DEFAULT NULL,
  `pw_nama_pimpinan` varchar(255) DEFAULT NULL,
  `pw_alamat_pimpinan` varchar(255) DEFAULT NULL,
  `pw_nilai_kontrak` varchar(255) DEFAULT NULL,
  `pf_nama_perusahaan` varchar(255) DEFAULT NULL,
  `pf_alamat_perusahaan` varchar(255) DEFAULT NULL,
  `pf_nama_pimpinan` varchar(255) DEFAULT NULL,
  `pf_nomor_kontrak` varchar(255) DEFAULT NULL,
  `pf_nilai_kontrak` varchar(255) DEFAULT NULL,
  `pf_tanggal` varchar(255) DEFAULT NULL,
  `pf_pagu` varchar(255) DEFAULT NULL,
  `pf_sumber_dana` varchar(255) DEFAULT NULL,
  `no_pho` varchar(255) DEFAULT NULL,
  `tgl_pho` varchar(255) DEFAULT NULL,
  `ha` varchar(255) DEFAULT NULL,
  `gambar_kondisi_1` varchar(255) DEFAULT NULL,
  `gambar_kondisi_2` varchar(255) DEFAULT NULL,
  `gambar_kondisi_3` varchar(255) DEFAULT NULL,
  `gambar_kondisi_4` varchar(255) DEFAULT NULL,
  `gambar_kondisi_5` varchar(255) DEFAULT NULL,
  `gambar_kondisi_6` varchar(255) DEFAULT NULL,
  `jenis_paket` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_sumber_dana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_paket`, `nama_paket`, `alamat_paket`, `latitude`, `longitude`, `skpk_id`, `kpa`, `alamat_skpk`, `nama_pa`, `nama_bendahara`, `nama_pptk`, `pl_nama_1`, `pl_instasi_asal_1`, `pl_nama_2`, `pl_instasi_asal_2`, `pl_nama_3`, `pl_instasi_asal_3`, `pl_nama_4`, `pl_instasi_asal_4`, `pl_nama_5`, `pl_instasi_asal_5`, `nama`, `jabatan`, `alamat`, `pho_nama_1`, `pho_instasi_asal_1`, `pho_nama_2`, `pho_instasi_asal_2`, `pho_nama_3`, `pho_instasi_asal_3`, `pho_nama_4`, `pho_instasi_asal_4`, `pho_nama_5`, `pho_instasi_asal_5`, `pho_nama_6`, `pho_instasi_asal_6`, `pr_nama_perusahaan`, `pr_alamat_perusahaan`, `pr_nama_pimpinan`, `pr_alamat_pimpinan`, `pr_nilai_kontrak`, `pw_nama_perusahaan`, `pw_alamat_perusahaan`, `pw_nama_pimpinan`, `pw_alamat_pimpinan`, `pw_nilai_kontrak`, `pf_nama_perusahaan`, `pf_alamat_perusahaan`, `pf_nama_pimpinan`, `pf_nomor_kontrak`, `pf_nilai_kontrak`, `pf_tanggal`, `pf_pagu`, `pf_sumber_dana`, `no_pho`, `tgl_pho`, `ha`, `gambar_kondisi_1`, `gambar_kondisi_2`, `gambar_kondisi_3`, `gambar_kondisi_4`, `gambar_kondisi_5`, `gambar_kondisi_6`, `jenis_paket`, `id_user`, `id_tahun`, `id_sumber_dana`) VALUES
(18, 'Penyelesaian Revitalisasi SDN 1 Lampoh Saka Lantai I6', 'Peukan Baro      ', '5.3269696', '95.9506515', 4, 'Mutiyawati, S.Pd, M.Pd', 'Kab. Pidie', 'YUSMADI, S.Pd, M.Pd', 'Mutiyawati, S.Pd, M.Pd', 'Muhammad Firdaus, S.Sos', 'Mutiyawati, S.Pd, M.Pd', '-Mutiyawati, S.Pd, M.Pd', 'Mutiyawati, S.Pd, M.Pd', '-', 'Mutiyawati, S.Pd, M.Pd', '-', '-', '-', '-', '-', '-Mutiyawati, S.Pd, M.Pd', '-Mutiyawati, S.Pd, M.Pd', '-Mutiyawati, S.Pd, M.Pd', '-Mutiyawati, S.Pd, M.Pd', '-Mutiyawati, S.Pd, M.Pd', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-Mutiyawati, S.Pd, M.Pd', '-', '-', '-', '-', '-Mutiyawati, S.Pd, M.Pd', '-', '-', '-', '-', 'CV. ROYAL MANDIRI COOPERATION', '-', '-', '-', '-', '-', '814800000', 'DOKA', '-Mutiyawati, S.Pd, M.Pd', '-', '60%', '../uploads/1.png', '../uploads/2.png', '../uploads/3.png', '../uploads/4.png', '../uploads/5.png', '../uploads/6.png', 1, NULL, NULL, NULL),
(19, 'Penyelesaian Revitalisasi SDN 1 Lampoh Saka Lantai I3', 'Peukan Baro  ', '5.1825', ' 95.57505', 6, 'Mutiyawati, S.Pd, M.Pd', 'Kab. Pidie', 'YUSMADI, S.Pd, M.Pd', '-', 'Muhammad Firdaus, S.Sos', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'CV. ROYAL MANDIRI COOPERATION', '-', '-', '-', '-', '-', '814800000', 'DOKA', '-', '-', '60%', 'uploads/facial-recognition-connected-real-estate.png', 'uploads/ektp.png', 'uploads/Foto-Utama.jpg', 'uploads/facial-recognition-connected-real-estate.png', 'uploads/IMG_20210918_223832337.jpg', 'uploads/wp3997626.jpg', 1, NULL, NULL, NULL),
(20, 'Penyelesaian Revitalisasi SDN 1 Lampoh Saka Lantai II', 'Peukan Baro ', '5,1825', ' 95,57505', 76, 'Mutiyawati, S.Pd, M.Pd', 'Kab. Pidie', 'YUSMADI, S.Pd, M.Pd', '-', 'Muhammad Firdaus, S.Sos', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'CV. ROYAL MANDIRI COOPERATION', '-', '-', '-', '-', '-', '814800000', 'DOKA', '-', '-', '60%', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(21, 'Penyelesaian Revitalisasi SDN 1 Lampoh Saka Lantai II', 'Peukan Baro', '5,1825', ' 95,57505', 2, 'Mutiyawati, S.Pd, M.Pd', 'Kab. Pidie', 'YUSMADI, S.Pd, M.Pd', '-', 'Muhammad Firdaus, S.Sos', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'CV. ROYAL MANDIRI COOPERATION', '-', '-', '-', '-', '-', '814800000', 'DOKA', '-', '-', '60%', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skpk`
--

CREATE TABLE `skpk` (
  `id_skpk` int(11) NOT NULL,
  `kode_skpk` varchar(25) NOT NULL,
  `nama_skpk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skpk`
--

INSERT INTO `skpk` (`id_skpk`, `kode_skpk`, `nama_skpk`, `alamat`, `keterangan`) VALUES
(1, '1.01.0.00.0.00.04.0000', 'SEKRETARIAT MAJELIS PENDIDIKAN DAERAH', 'Kabupaten Pidie', 'SKPD'),
(2, '1.01.2.22.0.00.01.0000', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Kabupaten Pidie', 'SKPD'),
(3, '1.01.9.01.0.00.03.0000', 'DINAS PENDIDIKAN DAYAH', 'Kabupaten Pidie', 'SKPD'),
(4, '1.02.0.00.0.00.01.0000', 'DINAS KESEHATAN', 'Kabupaten Pidie', 'SKPD'),
(5, '1.02.0.00.0.00.01.0001', 'Puskesmas Geumpang', 'Kabupaten Pidie', 'Unit SKPD'),
(6, '1.02.0.00.0.00.01.0002', 'Puskesmas Mane', 'Kabupaten Pidie', 'Unit SKPD'),
(7, '1.02.0.00.0.00.01.0003', 'Puskesmas Glumpang Tiga', 'Kabupaten Pidie', 'Unit SKPD'),
(8, '1.02.0.00.0.00.01.0004', 'Puskesmas Teupin Raya', 'Kabupaten Pidie', 'Unit SKPD'),
(9, '1.02.0.00.0.00.01.0005', 'Puskesmas Glumpang Baro', 'Kabupaten Pidie', 'Unit SKPD'),
(10, '1.02.0.00.0.00.01.0006', 'Puskesmas Mutiara Timur', 'Kabupaten Pidie', 'Unit SKPD'),
(11, '1.02.0.00.0.00.01.0007', 'Puskesmas Ujong Rimba', 'Kabupaten Pidie', 'Unit SKPD'),
(12, '1.02.0.00.0.00.01.0008', 'Puskesmas Mutiara Barat', 'Kabupaten Pidie', 'Unit SKPD'),
(13, '1.02.0.00.0.00.01.0009', 'Puskesmas Tiro', 'Kabupaten Pidie', 'Unit SKPD'),
(14, '1.02.0.00.0.00.01.0010', 'Puskesmas Tangse', 'Kabupaten Pidie', 'Unit SKPD'),
(15, '1.02.0.00.0.00.01.0011', 'Puskesmas Titeu', 'Kabupaten Pidie', 'Unit SKPD'),
(16, '1.02.0.00.0.00.01.0012', 'Puskesmas Keumala', 'Kabupaten Pidie', 'Unit SKPD'),
(17, '1.02.0.00.0.00.01.0013', 'Puskesmas Sakti', 'Kabupaten Pidie', 'Unit SKPD'),
(18, '1.02.0.00.0.00.01.0014', 'Puskesmas Mila', 'Kabupaten Pidie', 'Unit SKPD'),
(19, '1.02.0.00.0.00.01.0015', 'Puskesmas Padang Tiji', 'Kabupaten Pidie', 'Unit SKPD'),
(20, '1.02.0.00.0.00.01.0016', 'Puskesmas Delima', 'Kabupaten Pidie', 'Unit SKPD'),
(21, '1.02.0.00.0.00.01.0017', 'Puskesmas Reubee', 'Kabupaten Pidie', 'Unit SKPD'),
(22, '1.02.0.00.0.00.01.0018', 'Puskesmas Grong-Grong', 'Kabupaten Pidie', 'Unit SKPD'),
(23, '1.02.0.00.0.00.01.0019', 'Puskesmas Indra Jaya', 'Kabupaten Pidie', 'Unit SKPD'),
(24, '1.02.0.00.0.00.01.0020', 'Puskesmas Peukan Baro', 'Kabupaten Pidie', 'Unit SKPD'),
(25, '1.02.0.00.0.00.01.0021', 'Puskesmas Kembang Tanjong', 'Kabupaten Pidie', 'Unit SKPD'),
(26, '1.02.0.00.0.00.01.0022', 'Puskesmas Simpang Tiga', 'Kabupaten Pidie', 'Unit SKPD'),
(27, '1.02.0.00.0.00.01.0023', 'Puskesmas Kota Sigli', 'Kabupaten Pidie', 'Unit SKPD'),
(28, '1.02.0.00.0.00.01.0024', 'Puskesmas Pidie', 'Kabupaten Pidie', 'Unit SKPD'),
(29, '1.02.0.00.0.00.01.0025', 'Puskesmas Batee', 'Kabupaten Pidie', 'Unit SKPD'),
(30, '1.02.0.00.0.00.01.0026', 'Puskesmas Muara Tiga', 'Kabupaten Pidie', 'Unit SKPD'),
(31, '1.02.0.00.0.00.02.0000', 'RSUD TGK. CHIK DITIRO', 'Kabupaten Pidie', 'SKPD'),
(32, '1.02.0.00.0.00.03.0000', 'RSUD TGK. ABDULLAH SYAFI', 'Kabupaten Pidie', 'SKPD'),
(33, '1.03.0.00.0.00.01.0000', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'Kabupaten Pidie', 'SKPD'),
(34, '1.04.1.03.0.00.01.0000', 'DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN', 'Kabupaten Pidie', 'SKPD'),
(35, '1.05.0.00.0.00.02.0000', 'SATUAN POLISI PAMONG PRAJA dan WILAYATUL HISBAH', 'Kabupaten Pidie', 'SKPD'),
(36, '1.05.2.10.0.00.04.0000', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'Kabupaten Pidie', 'SKPD'),
(37, '1.06.0.00.0.00.01.0000', 'DINAS SOSIAL', 'Kabupaten Pidie', 'SKPD'),
(38, '2.07.3.32.0.00.01.0000', 'DINAS TENAGA KERJA DAN TRANSMIGRASI', 'Kabupaten Pidie', 'SKPD'),
(39, '2.08.2.14.0.00.02.0000', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK DAN KELUARGA BERENCANA', 'Kabupaten Pidie', 'SKPD'),
(40, '2.11.1.03.0.00.01.0000', 'DINAS LINGKUNGAN HIDUP', 'Kabupaten Pidie', 'SKPD'),
(41, '2.12.0.00.0.00.01.0000', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'Kabupaten Pidie', 'SKPD'),
(42, '2.13.0.00.0.00.01.0000', 'DINAS PEMBERDAYAAN MASYARAKAT DAN GAMPONG', 'Kabupaten Pidie', 'SKPD'),
(43, '2.15.0.00.0.00.01.0000', 'DINAS PERHUBUNGAN', 'Kabupaten Pidie', 'SKPD'),
(44, '2.16.2.21.2.20.03.0000', 'DINAS KOMUNIKASI, INFORMATIKA DAN PERSANDIAN', 'Kabupaten Pidie', 'SKPD'),
(45, '2.18.0.00.0.00.01.0000', 'DINAS PENANAMAN MODAL DAN PELAYANAN PERIZINAN SATU PINTU', 'Kabupaten Pidie', 'SKPD'),
(46, '2.22.0.00.0.00.04.0000', 'SEKRETARIAT MAJELIS ADAT ACEH', 'Kabupaten Pidie', 'SKPD'),
(47, '2.23.2.24.0.00.02.0000', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'Kabupaten Pidie', 'SKPD'),
(48, '3.25.0.00.0.00.01.0000', 'DINAS KELAUTAN DAN PERIKANAN', 'Kabupaten Pidie', 'SKPD'),
(49, '3.26.2.19.0.00.02.0000', 'DINAS PARIWISATA, KEPEMUDAAN DAN OLAHRAGA', 'Kabupaten Pidie', 'SKPD'),
(50, '3.27.2.09.0.00.01.0000', 'DINAS PERTANIAN DAN PANGAN', 'Kabupaten Pidie', 'SKPD'),
(51, '3.30.2.17.3.31.03.0000', 'DINAS PERDAGANGAN, KOPERASI, USAHA KECIL DAN MENENGAH', 'Kabupaten Pidie', 'SKPD'),
(52, '4.01.0.00.0.00.01.0000', 'SEKRETARIAT DAERAH', 'Kabupaten Pidie', 'SKPD'),
(53, '4.02.0.00.0.00.01.0000', 'SEKRETARIAT DPRK', 'Kabupaten Pidie', 'SKPD'),
(54, '5.01.5.05.0.00.01.0000', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', 'Kabupaten Pidie', 'SKPD'),
(55, '5.02.0.00.0.00.01.0000', 'BADAN PENGELOLAAN KEUANGAN KABUPATEN', 'Kabupaten Pidie', 'SKPD'),
(56, '5.03.5.04.0.00.01.0000', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'Kabupaten Pidie', 'SKPD'),
(57, '6.01.0.00.0.00.01.0000', 'INSPEKTORAT', 'Kabupaten Pidie', 'SKPD'),
(58, '7.01.0.00.0.00.01.0000', 'KECAMATAN GLUMPANG TIGA', 'Kabupaten Pidie', 'SKPD'),
(59, '7.01.0.00.0.00.02.0000', 'KECAMATAN GLUMPANG BARO', 'Kabupaten Pidie', 'SKPD'),
(60, '7.01.0.00.0.00.03.0000', 'KECAMATAN MUTIARA TIMUR', 'Kabupaten Pidie', 'SKPD'),
(61, '7.01.0.00.0.00.04.0000', 'KECAMATAN MUTIARA', 'Kabupaten Pidie', 'SKPD'),
(62, '7.01.0.00.0.00.05.0000', 'KECAMATAN KEMBANG TANJONG', 'Kabupaten Pidie', 'SKPD'),
(63, '7.01.0.00.0.00.06.0000', 'KECAMATAN SIMPANG TIGA', 'Kabupaten Pidie', 'SKPD'),
(64, '7.01.0.00.0.00.07.0000', 'KECAMATAN KOTA SIGLI', 'Kabupaten Pidie', 'SKPD'),
(65, '7.01.0.00.0.00.08.0000', 'KECAMATAN PIDIE', 'Kabupaten Pidie', 'SKPD'),
(66, '7.01.0.00.0.00.09.0000', 'KECAMATAN GRONG-GRONG', 'Kabupaten Pidie', 'SKPD'),
(67, '7.01.0.00.0.00.10.0000', 'KECAMATAN BATEE', 'Kabupaten Pidie', 'SKPD'),
(68, '7.01.0.00.0.00.11.0000', 'KECAMATAN MUARA TIGA', 'Kabupaten Pidie', 'SKPD'),
(69, '7.01.0.00.0.00.12.0000', 'KECAMATAN PADANG TIJI', 'Kabupaten Pidie', 'SKPD'),
(70, '7.01.0.00.0.00.13.0000', 'KECAMATAN DELIMA', 'Kabupaten Pidie', 'SKPD'),
(71, '7.01.0.00.0.00.14.0000', 'KECAMATAN MILA', 'Kabupaten Pidie', 'SKPD'),
(72, '7.01.0.00.0.00.15.0000', 'KECAMATAN INDRAJAYA', 'Kabupaten Pidie', 'SKPD'),
(73, '7.01.0.00.0.00.16.0000', 'KECAMATAN PEUKAN BARO', 'Kabupaten Pidie', 'SKPD'),
(74, '7.01.0.00.0.00.17.0000', 'KECAMATAN TIRO/TRUSEB', 'Kabupaten Pidie', 'SKPD'),
(75, '7.01.0.00.0.00.18.0000', 'KECAMATAN SAKTI', 'Kabupaten Pidie', 'SKPD'),
(76, '7.01.0.00.0.00.19.0000', 'KECAMATAN TITEU', 'Kabupaten Pidie', 'SKPD'),
(77, '7.01.0.00.0.00.20.0000', 'KECAMATAN KEUMALA', 'Kabupaten Pidie', 'SKPD'),
(78, '7.01.0.00.0.00.21.0000', 'KECAMATAN TANGSE', 'Kabupaten Pidie', 'SKPD'),
(79, '7.01.0.00.0.00.22.0000', 'KECAMATAN MANE', 'Kabupaten Pidie', 'SKPD'),
(80, '7.01.0.00.0.00.23.0000', 'KECAMATAN GEUMPANG', 'Kabupaten Pidie', 'SKPD'),
(81, '8.01.0.00.0.00.01.0000', 'BADAN KESATUAN BANGSA DAN POLITIK', 'Kabupaten Pidie', 'SKPD'),
(82, '9.01.0.00.0.00.01.0000', 'DINAS SYARIAT ISLAM', 'Kabupaten Pidie', 'SKPD'),
(83, '9.01.0.00.0.00.02.0000', 'SEKRETARIAT BAITUL MAL', 'Kabupaten Pidie', 'SKPD'),
(84, '9.01.0.00.0.00.05.0000', 'SEKRETARIAT MAJELIS PERMUSYAWARATAN ULAMA', 'Kabupaten Pidie', 'SKPD');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_dana`
--

CREATE TABLE `sumber_dana` (
  `id_sumber_dana` int(11) NOT NULL,
  `sumber_dana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, '2023'),
(2, '2024');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `email`, `nomor_hp`, `username`, `password`, `level`, `keterangan`) VALUES
(1, 'Mukhtasar', 'mukhtasar@gmail.com', '085244668800', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'super-admin', 'admin utama'),
(2, 'Admin Monev', 'adminmonev@gmail.com', '0822334455662', 'monev', '6842cbf4ba070a2b5dbb1b45bd416664', 'admin-monev', 'Admin Monev');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `jenis_paket_fk` (`jenis_paket`);

--
-- Indexes for table `skpk`
--
ALTER TABLE `skpk`
  ADD PRIMARY KEY (`id_skpk`);

--
-- Indexes for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  ADD PRIMARY KEY (`id_sumber_dana`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `skpk`
--
ALTER TABLE `skpk`
  MODIFY `id_skpk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  MODIFY `id_sumber_dana` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
