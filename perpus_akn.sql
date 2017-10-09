-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 08:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_akn`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_dosen`
--

CREATE TABLE `anggota_dosen` (
  `id_dosen` varchar(30) NOT NULL,
  `nip` varchar(60) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `program_studi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_dosen`
--

INSERT INTO `anggota_dosen` (`id_dosen`, `nip`, `nama`, `jenis_kelamin`, `program_studi`) VALUES
('DSN0001', '19580422 198403 2 004', 'Dra. SOETATIK, M.Pd', 'P', ''),
('DSN0002', '19630628 199412 2 001', 'Dra. OETIK RETNO OETARI', 'P', 'Teknik Geodesi'),
('DSN0003', '19630728 198903 2 004', 'KANTI SETYO RAHAJOE, S.Pd., MM', 'P', 'Teknik Geodesi'),
('DSN0005', '19650914 198803 1 008', 'SUMARIN, M.Pd', 'L', ''),
('DSN0006', '19690319 200501 1 011', 'Drs. M. JAMIL', 'L', 'Teknik Otomotif'),
('DSN0007', '19750101 200501 1 015', 'AGUS HADICHOTMARNO, MM', 'L', 'Teknik Geodesi'),
('DSN0008', '19760302 201101 1 004', 'SUTRAN MARIYANTO, S.T', 'L', 'Teknik Otomotif'),
('DSN0009', '19780528 200903 1 001', 'ENDRY MEYDIANT, S.PD', 'L', 'Teknik Otomotif'),
('DSN0010', '19820418 201001 1 025', 'AKHMAD MAMAN NAFIK, S.Pd', 'L', 'Teknik Geodesi'),
('DSN0011', '19841020 201001 1 024', 'TOFAN TRI OKTORA, S.Pd., M.Si', 'L', 'Teknik Geodesi'),
('DSN0012', '', 'MUTROFIN ROZAQ, M.Pd', 'L', 'Teknik Geodesi'),
('DSN0013', '', 'ANIS SISWANTO, S.ST', 'L', ''),
('DSN0014', '', 'SISWANTO, S.Pd., M.Si', 'L', 'Teknik Geodesi'),
('DSN0015', '', 'DIDIK DINO ASMORO, S.ST', 'L', ''),
('DSN0016', '', 'SHINTA AULIA RAHMAWATI, S.Pd', 'P', ''),
('DSN0017', '19760518 201406 2 001', 'KHURROTUL AYUN, S.Pd', 'P', 'Teknik Geodesi'),
('DSN0018', '', 'RIDA HIFZA ROSIDA, S.Pd', 'P', 'Teknik Geodesi'),
('DSN0019', '', 'FIRDHA RIZQI YOGITHASARI, S.T', 'P', 'Teknik Geodesi'),
('DSN0020', '19650413 200501 1 007', 'Drs. PURWADI IKHTIARTO', 'L', 'Teknik Otomotif'),
('DSN0021', '19620621 198303 1 012', 'DIDIK AKHMAD M., S.Pd', 'L', 'Teknik Otomotif'),
('DSN0022', '19770208 200604 1 011', 'ABDI SAMPURNO, S.T', 'L', 'Teknik Otomotif'),
('DSN0023', '19750721 200604 1 008', 'M. AGUNG PRIBADI, S.Pd', 'L', 'Teknik Otomotif'),
('DSN0024', '19840318 200903 1 005', 'ZAINUL MAARIF, S.Pd', 'L', 'Teknik Geodesi'),
('DSN0025', '', 'Drs. SAMSUL HADI, HM., MA', 'L', 'Teknik Otomotif'),
('DSN0026', '19560602 198103 1 007', 'Drs. DWI NIRWANA, M.Pd', 'L', 'Teknik Geodesi'),
('DSN0027', '', 'Drs. AGUS SUGIYONO', 'L', 'Teknik Geodesi'),
('DSN0028', '', 'FERI DWI HERMAWAN, S.Pd', 'L', '');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_mahasiswa`
--

CREATE TABLE `anggota_mahasiswa` (
  `nim` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `program_studi` enum('Teknik Geodesi','Teknik Otomotif','','') NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_mahasiswa`
--

INSERT INTO `anggota_mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `program_studi`, `kelas`) VALUES
(1521075001, 'ABDUL HADI', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075002, 'ABDUL JALAL', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075003, 'AHMAD FAISOL', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075004, 'ANDI MARIO YUDHISTIRA', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075005, 'BAMBANG HERMANTO', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075006, 'M. FAIK AL HABIB', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075007, 'MOHAMMAD KHILMI', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075008, 'MOHAMMAD THORIQ MAHMUD', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075009, 'MOKHAMAD ANDIKA WICAKSONO', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075010, 'RINO EFENDI', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075011, 'RONI WIJAYA', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075012, 'SAIFUL MUTTAKIN', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075013, 'SAMPURNO', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075014, 'SHOLEHUDIN WAHID', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075015, 'SISWO CAHYO SAPUTRO', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075016, 'TOHA', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075017, 'UNTUNG RIZKI WAHYUDI', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075018, 'FIQIH ZYAKARIA', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075019, 'VICKY FERDIANSYAH', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521075020, 'ZAENI SAHAZ', 'L', 'Teknik Otomotif', 'TEKNIK OTOMOTIF '),
(1521076001, 'ABDUL ROSYID', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076003, 'ANANG LUKMANTO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076004, 'ARDI FIRMANSYAH', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076005, 'ARISKA AGNESIA WIDURI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076006, 'CHUSNUL KHOTIMAH', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076007, 'DEDIK YUDIONNO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076008, 'DENI MAULANA ALWI', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076009, 'EKA AYUNAM RAMADHANI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076010, 'EKO YUDY PRAMONO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076011, 'FERY MAULANA WIJAYA', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076012, 'FINA NURI MAWADDAH', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076013, 'INGGAR TRI WAHYU PAMUNGKAS', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076014, 'LITA MARATUS SHOLIHAH', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076015, 'MANORA YULITA WARDANI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076016, 'MOCHAMMAD SURO IQBAL', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076017, 'MOCHAMMAD SULTHON A.R.A', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076018, 'MOHAMMAD FAIRUZ ELFREDA D', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076019, 'MOHAMMAD ROIS', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076020, 'MUHAMMAD SYAHRUL AKBAR', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076021, 'MUSRIYANTO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076022, 'NOVALDI BINTANG NUGRAHA', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076023, 'NUR HAYATI HILMI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076024, 'NURUL FADHILAH', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076025, 'RISKY EKO ARISANDI', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076026, 'RISQI HIDAYATULLAH', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076027, 'SITI FATIMAH', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076028, 'ZUMROTUL NAFISAH MASRURO', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 1'),
(1521076029, 'ABDUL MAJID', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076030, 'AHMAD DONI RAMADHAN', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076031, 'ACHMAD JUNAIDI', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076032, 'ALFIN NUR ROSYADI', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076033, 'ARIS BUDI SETIAWAN', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076034, 'BETY MEIKA SANTI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076035, 'DANES GILANG SAPUTRA', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076036, 'DAVID PRATAMA FITRIANTO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076037, 'DEDY WAHYU WIDIANTO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076039, 'DWI LAILATUL FARDHA', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076040, 'FANDIK SANJAYA', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076041, 'FITA MAGHFIROTUL ARDIYAH', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076042, 'JAQFAD YOGAFAD HABIB', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076043, 'LIA DWI AGUSTIN', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076044, 'MAHENDRA EKA CIPTA', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076045, 'MUHAMMAD AFRI ZULFIKAR', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076046, 'MUHAMMAD RIYAN BAIHAQI', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076047, 'NURIL HIDAYATULLAH', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076048, 'RAHMITA PUTRI EFENDI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076049, 'RINA HASTARI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076050, 'ROSI RAHMAWATI PUTRI', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076051, 'SOFI LINA AGUSTIN', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076052, 'YOGGY ADI SAPUTRO', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076053, 'YUDHA SETIAWAN', 'P', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076054, 'YUDHISTIRA', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI 2'),
(1521076055, 'ABDUL KARIM', 'L', 'Teknik Geodesi', 'TEKNIK GEODESI ');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_dinamis`
--

CREATE TABLE `catatan_dinamis` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan_dinamis`
--

INSERT INTO `catatan_dinamis` (`id`, `judul`, `isi`) VALUES
(1, '', 'Kembalikan Buku Tepat Waktu, Supaya Tidak Terkena Denda\n**Ganti Buku Jika Rusak/ Hilang'),
(2, 'Hello World', 'Akan segera dibuatkan dokumentasi tutorial penggunaaan aplikasi Insya allah minggu depan');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku_perpus`
--

CREATE TABLE `daftar_buku_perpus` (
  `id` int(10) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `ins_pengarang` varchar(255) NOT NULL,
  `ins_judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `riil` int(10) NOT NULL,
  `kurang` int(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `cover_depan` varchar(200) NOT NULL,
  `cover_belakang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_buku_perpus`
--

INSERT INTO `daftar_buku_perpus` (`id`, `kode`, `ins_pengarang`, `ins_judul`, `pengarang`, `judul_buku`, `penerbit`, `tahun_terbit`, `jumlah`, `riil`, `kurang`, `keterangan`, `cover_depan`, `cover_belakang`) VALUES
(2, '005', 'RIY,PUT,IND', 'TPS', 'RIYANTO, PRILNALI EKA PUTRA, HENDI INDERLAKO', 'TUNTUNAN PRAKTIS PENGEMBANGAN APLIKASI SIG', 'GAVA MEDIA', 2010, 20, 20, 0, 'Lengkap', '', ''),
(3, '005', 'RIY', 'GIS', 'RIYANTO', 'MEMBUAT SENDIRI APLIKASI MOBILE GIS', 'ANDI', 2009, 20, 20, 0, 'Lengkap', '', ''),
(4, '330', 'ITA', 'K', 'DRA. ITA RIFIANI PERMATASARI, MM', 'KEWIRAUSAHAAN', 'POLINEMA', 2014, 10, 8, 2, 'Belum Lengkap', '', ''),
(5, '330', 'BAS', 'P', 'DRS. BASUKI RACHMAT, AK.,MM', 'PENGANTAR AKUNTANSI II', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(6, '330', 'HER', 'KS', 'DRS. PUDJI HERIJANTO, M.AB', 'KEYBOARDING SKILL', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(7, '330', 'MIH', 'AD', 'DRS. APIT MIHARSO, AK., M.PD', 'PRAKTEK AKUNTANSI PERUSAHAAN DAGANG', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(8, '330', 'MIH', 'AJ', 'DRS. APIT MIHARSO, AK., M.PD', 'PRAKTEK AKUNTANSI PERUSAHAAN JASA', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(9, '330', 'SUW', 'A', 'ENDAH SUWARMIN, S.SOS., M.SA', 'PENGANTAR AKUNTANSI i', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(10, '330', 'DEW, SUL, UT', 'PB', 'DR. KARTIKA DEWI SRI SUSILOWATI, SE., M.BA', 'PENGANTAR BISNIS', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(11, '330', 'ISM', 'AKB', 'DRA. SIDIK ISMANU, M.SI', 'APLIKASI KOMPUTER BISNIS ii', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(12, '330', 'JAR', 'KUP', 'DRS. AHMAD JARNUZI, M.SI., AK', 'KETENTUAN UMUM PERPAJAKAN', 'POLINEMA', 2014, 10, 9, 1, 'Belum Lengkap', '', ''),
(14, '330', 'WAH', 'AB', 'HESTY WAHYUNI, SE., M., AK', 'AKUNTANSI BIAYA', 'POLINEMA', 2015, 10, 8, 2, 'Belum Lengkap', '', ''),
(15, '330', 'WID', 'AKM', 'RETNO WIDIASTUTI, SE., AK ', 'AKUNTANSI KEUANGAN MENENGAH i', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(16, '330', 'MUL', 'SIA', 'IMAM MULYONO, SE., AK., M.SI', 'SISTEM INFORMASI AKUNTANSI', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(17, '330', 'JAR', 'PPN', 'DRS. AHMAD JARNUZI, M.SI., AK', 'PPN, BPHTB, PBB DAN BEA MATERAI', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(18, '330', 'EDI', 'PENG', 'DRS. EDI WINARTO, M.SI', 'PENGANGGARAN', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(19, '330', 'PUJ', 'ET', 'I NYOMAN PUJAMAN', 'EKONOMI TEKNIK EDISI 2', 'TARSITO', 0000, 50, 50, 0, 'Lengkap', '', ''),
(20, '340', 'SIN', 'P', 'MOHAMMAD SINAL, S.H., M.H', 'PANCASILA', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(21, '420', 'UMI', 'B', 'DRA. UMI ANIS ROSIATUN, M.PD', 'BAHASA INGGRIS', 'POLINEMA', 2014, 10, 9, 1, 'Belum Lengkap', '', ''),
(22, '420', 'TIIN', 'B', 'LIA AGUSTINA, S.PD., M.PD', 'BAHASA INGGRIS (KA)', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(23, '420', 'ROS', 'B', 'DRA. UMI ANIS ROSIATUN, M.PD', 'BAHASA INGGRIS', 'POLINEMA', 2015, 10, 9, 1, 'Belum Lengkap', '', ''),
(24, '490', 'NUR', 'B', 'DRA. NURDJIZAH, M.PD', 'BAHASA INDONESIA', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(25, '490', 'NUR', 'B', 'DRA. NURDJIZAH, M.PD', 'BAHASA INDONESIA', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(26, '510', 'BAH', 'M', 'BAHRUDIN, SE., ME', 'MATEMATIKA EKONOMI', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(27, '510', 'RAH', 'M', 'DRS. ARIF RAHMAN HAKIM, M.SI', 'MATEMATIKA', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(28, '510', 'RIN ', 'HP', 'IR. RINTO SASONGKO, MT', 'AJAR HITUNG PERATAAN', 'POLINEMA', 2014, 10, 7, 3, 'Belum Lengkap', '', ''),
(29, '516', 'WON', 'IUT', 'SOETOMO WONGSOTJITRO', 'ILMU UKUR TANAH', 'PT KANISIUS', 1980, 30, 30, 0, 'Lengkap', '', ''),
(30, '516', 'MUN', 'IUW', 'AHMAD MUNIR', 'ILMU UKUR WILAYAH DAN SIG', 'KENCANA', 0000, 20, 18, 2, 'Belum Lengkap', '', ''),
(31, '526.1', 'KAH', 'TKT', 'JOENIL KAHAR', 'GEODESI: TEKNIK KUADRAT TERKECIL', 'ITB', 2007, 60, 59, 1, 'Belum Lengkap', '', ''),
(32, '526.1', 'ABI, JON, KAH', 'SDG', 'PROF. DR. HASANUDDIN Z. ABIDIN', 'SURVEY DENGAN GPS', 'ITB', 2011, 30, 28, 2, 'Belum Lengkap', '', ''),
(33, '526.1', 'PRA', 'STA', 'EDDY PRAHASTA', 'SIG: TUTORIAL ARCGIS', 'INFORMATIKA', 2015, 20, 20, 0, 'Lengkap', '', ''),
(34, '526.1', 'PRA', 'SAP', 'EDDY PRAHASTA', 'SIG: APLIKASI PEMROGRAMAN MAPINFO', 'INFORMATIKA', 2005, 20, 20, 0, 'Lengkap', '', ''),
(35, '526.1', 'PRA', 'SKD', 'EDDY PRAHASTA', 'SIG: KONSEP DASAR PERSPEKTIF GEODESI DAN GEOMATIKA', 'INFORMATIKA', 2014, 20, 20, 0, 'Lengkap', '', ''),
(36, '526.1', 'SUD', 'ALD', 'D. BAMBANG SUDARSONO', 'MENGGAMBAR KONTUR 3 DIMENSI DENGAN AUTOCAD LAND DEVELOPMENT', 'ANDI', 0000, 20, 20, 0, 'Lengkap', '', ''),
(37, '526.1', 'IND', 'PPJ', 'INDARTO', 'TEORI DAN PRAKTEK PENGINDERAAN JAUH', 'ANDI', 0000, 20, 20, 0, 'Lengkap', '', ''),
(38, '526.1', 'POE, DJU', 'SH', 'DR. DER NAT. POERBONDONO, S.T.,', 'SUEVEY HIDROGRAFI', 'REFIKA ADITAMA', 0000, 30, 30, 0, 'Lengkap', '', ''),
(39, '526.1', 'KOM', 'AG', 'WAHANA KOMPUTER', 'SISTEM INFORMASI MENGGUNAKAN ARCGIS: PEDOMAN DASAR', 'PT ELEX MEDIA KOMPUTINDO', 0000, 40, 40, 0, 'Lengkap', '', ''),
(40, '526.1', 'SUB', 'PP', 'SUBAGIO', 'PENGETAHUAN PETA', 'ITB', 0000, 40, 40, 0, 'Lengkap', '', ''),
(41, '526.1', 'IND', 'AG', 'DR INDARTO, S.T.P., DA', 'ANALISIS GEOSTATIK', 'GRAHA ILMU', 0000, 40, 40, 0, 'Lengkap', '', ''),
(42, '530', 'PON', 'F', 'PONDI UDIANTO, S.SI., MT', 'FISIKA TEKNIK', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(43, '540', 'PUS', 'KT', 'HARIS PUSPITO BUWONO, ST., MT', 'KIMIA TEKNIK SEMESTER 3', 'POLINEMA', 2015, 10, 10, 0, 'Lengkap', '', ''),
(44, '542,3', 'KAT', 'PAU', 'TH. KATMAN', 'PEMELIHARAAN ALAT-ALAT UKUR', 'ERLANGGA', 0000, 50, 50, 0, 'Lengkap', '', ''),
(45, '574.3', 'GUN ', 'PTK', 'DR IR GUNTUR MS', 'PEMETAAN TERUMBU KARANG', 'PT GHALIA INDONESIA', 0000, 40, 40, 0, 'Lengkap', '', ''),
(46, '620', 'KAS', 'T', 'IR KASIJANTO, MT', 'THERMODINAMIKA', 'POLINEMA', 2014, 10, 10, 0, 'Lengkap', '', ''),
(47, '620', 'YUN', 'KDK', 'YUNIARTO AGUS WINOKO, ST., MT.', 'KINEMATIKA DINAMIKA KENDARAAN', 'POLINEMA', 2015, 10, 9, 1, 'Belum Lengkap', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `greeting`
--

CREATE TABLE `greeting` (
  `id_greeting` int(11) NOT NULL,
  `judul` int(11) NOT NULL,
  `isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(10) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_peminjaman`
--

CREATE TABLE `tabel_peminjaman` (
  `id` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `nomor_induk` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `kelas_semester` varchar(255) NOT NULL,
  `judul_buku1` varchar(255) NOT NULL,
  `jumlah1` varchar(255) NOT NULL,
  `judul_buku2` varchar(50) NOT NULL,
  `jumlah2` varchar(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_peminjaman`
--

INSERT INTO `tabel_peminjaman` (`id`, `tgl_pinjam`, `nama_peminjam`, `jenis_kelamin`, `nomor_induk`, `jabatan`, `program_studi`, `kelas_semester`, `judul_buku1`, `jumlah1`, `judul_buku2`, `jumlah2`, `tgl_kembali`, `status_kembali`) VALUES
('Perp.AKNL_000001', '2016-09-01', 'MUTROFIN ROZAQ, M.Pd', 'L', '', 'Dosen', 'Teknik Geodesi', '', 'KINEMATIKA DINAMIKA KENDARAAN', '1', '', '', '2016-09-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `tingkat`) VALUES
('US0001', 'admin', 'adminaknl', 'admin'),
('US0002', 'surya', 'surya', 'operator'),
('US0003', 'Rosyid', '1234', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_dosen`
--
ALTER TABLE `anggota_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `anggota_mahasiswa`
--
ALTER TABLE `anggota_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `catatan_dinamis`
--
ALTER TABLE `catatan_dinamis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_buku_perpus`
--
ALTER TABLE `daftar_buku_perpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `greeting`
--
ALTER TABLE `greeting`
  ADD PRIMARY KEY (`id_greeting`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_mahasiswa`
--
ALTER TABLE `anggota_mahasiswa`
  MODIFY `nim` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1521076056;
--
-- AUTO_INCREMENT for table `catatan_dinamis`
--
ALTER TABLE `catatan_dinamis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daftar_buku_perpus`
--
ALTER TABLE `daftar_buku_perpus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
