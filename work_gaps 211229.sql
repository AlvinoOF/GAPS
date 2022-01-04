-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 09:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_gaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_aset`
--

CREATE TABLE `mst_aset` (
  `id_aset` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `kd_aset` varchar(255) DEFAULT NULL,
  `nm_aset` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_aset`
--

INSERT INTO `mst_aset` (`id_aset`, `id_client`, `kd_aset`, `nm_aset`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, '1010102030101', 'P3K', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(2, 2, '1010102030102', 'Helmet', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(3, 2, '1010102030103', 'Rompi', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(4, 2, '1010102030104', 'Senter', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(5, 2, '1010102030105', 'Gatur', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(6, 2, '1010102030106', 'HT', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(7, 2, '1010102030107', 'Jas Hujan', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(8, 2, '1010102030108', 'Tongkat T / Sarung', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(9, 2, '1010102030109', 'Borgol', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(10, 2, '1010102030110', 'Safety Mirror', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(11, 2, '1010102030111', 'APAR', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(12, 2, '1010102030112', 'HP', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(13, 2, '1010102030113', 'Laptop', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(14, 2, '1010102030114', 'PC Desktop', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(15, 2, '1010102030115', 'Guard Tour', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(16, 2, '1010102030116', 'Printer', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(17, 2, '1010102030117', 'Traffic Wand/Lampu lalin', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(18, 2, '1010102030118', 'Vehicle Search Mirror', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(19, 2, '1010102030119', 'Hand held Metal Detector', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL),
(20, 2, '1010102030120', 'Stop Sign', '2021-10-12 02:58:55', 2, '2021-10-12 02:59:58', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `old_tbl_incident`
--

CREATE TABLE `old_tbl_incident` (
  `id_incident` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `incident_no` varchar(255) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `logweek` varchar(10) NOT NULL,
  `badge_no` varchar(10) NOT NULL,
  `incident_title` varchar(255) NOT NULL,
  `incident_location` varchar(255) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `id_category` varchar(50) NOT NULL,
  `reported_by` varchar(100) NOT NULL,
  `reported_date` date NOT NULL,
  `incident_detail` text NOT NULL,
  `follow_up` int(11) NOT NULL,
  `important_level` varchar(20) NOT NULL,
  `complete_plan` int(11) NOT NULL,
  `complete_plan_period` varchar(20) NOT NULL,
  `kesimpulan` text NOT NULL,
  `report_to` varchar(100) NOT NULL,
  `report_date` datetime NOT NULL,
  `input_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `incident_status` varchar(20) NOT NULL DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_tbl_incident`
--

INSERT INTO `old_tbl_incident` (`id_incident`, `id_client`, `id_user`, `user_type`, `incident_no`, `incident_date`, `incident_time`, `logweek`, `badge_no`, `incident_title`, `incident_location`, `shift`, `id_category`, `reported_by`, `reported_date`, `incident_detail`, `follow_up`, `important_level`, `complete_plan`, `complete_plan_period`, `kesimpulan`, `report_to`, `report_date`, `input_date`, `last_update`, `incident_status`) VALUES
(1, 1, 1, 'user', '03/GPN/0PS/IMK/VII/2020', '2020-06-02', '20:30:00', '', '03/GPN/0PS', 'Pencurian jacket di Mess Camp D.09 / 04 PT.IMK', 'Camp D.09 / 04 PT.IMK ', 'Night', '6', 'Junaidi Kuwarta ( Karyawan PT.IMK – Power Plan )', '2020-07-02', 'a) Pada hari Kamis tanggal 2 juli 2020 sekitar jam 20:30 wib saat melakukan patroli diarea Waste Dump yang\r\nkemudian mendapatkan informasi by handy talky dari sdr,Baini petugas security yang berada di post muro\r\n3 bahwa adanya berita penting\r\nb) Sekitar Pukul 21:00 wib tiba nya di post muro 3 bahwa ada nya seorang karyawan yang mengatas namakan\r\nJunaidi Kuwarta bagian Power Plan telah datang untuk melaporkan tentang kehilangan satu buah jacket\r\nkulit berwarna hitam di Camp D.09 / 04 PT.IMK.\r\nc) Setelah mendapatkan keterangan dari sipelapor,team patroli ( Teguh,Djunaedi & Bayu Cakra ) bergegas\r\nuntuk mendatangi tempat kejadian dan melakukan penggeledahan setiap kamar karyawan serta\r\nmelakukan penyisiran disekitar Camp D.09 / 04\r\nd) Sekitar Pukul 21:30 wib telah ditemukan bungkusan plastic berwarna hitam dibawah kolong Camp D.09 /\r\n04 yang berisikan jacket kulit berwarna hitam\r\ne) Dari hasil penggeledahan dan penyisiran , bahwa adanya kecurigaan dari salah satu karyawan atas nama\r\nGuntur putra yang terlihat pada saat dilakukan nya penggeledahan keluar dari kamarnya membawa\r\npakaian keluar dari camp D.09\r\nf) Mengamankan barang bukti dan mengamankan dari sdr Guntur putra di kantor  tengkawang untuk\r\ndimintai keterangan nya', 1, 'Red', 1, 'Day', 'a) Dari hasil pengumpulan informasi dan fakta fakta yang terjadi bahwa kejadian tersebut sudah yang kesekian\r\nkali nya namun tidak dilaporkan ke pihak keamanan\r\nb) Sdr. Guntur Putra mengakui telah mengambil jacket yang berwarna hitam milik sdr Junaedi dikamar Camp\r\nD.09 / 04 \r\nc) Sdr. Guntur Putra melakukan perbuatan tersebut atas dasar pengalaman yang terjadi pada dirinya karena\r\nmerasa pernah kehilangan barang berharga seperti dompet, uang dan barang berharga lainnya di waktu yang\r\nberbeda.\r\nd) Sdr. Guntur Putra merasa menyesal dan meminta maaf kepada korban Sdr. Junaedi dan tidak akan\r\nmengulangi perbuatannya lagi kepada orang lain.\r\ne) Kejadian tersebut diselesikan secara kekeluargaan', 'CEO', '2020-07-03 12:00:00', '2020-11-20 07:58:42', '2020-11-24 06:05:56', 'Closed'),
(2, 1, 1, 'user', '24/GPN/0PS/IMK/IX/2020', '2020-09-07', '14:50:00', '', '24/GPN/0PS', 'Penyetopan Operasional Dumping', 'Waste Dump Beringin', 'Day', '8', 'Ubot  &  Mardianoor', '2020-09-07', 'Sekitar jam : 14.50 wib, petugas Response Bapak Riki L (SP) dan Kastoyo (Gapara), sedang \r\nmelakukan patroli di area Waste Dump Beringin, terlihat warga melakukan penyetopan kendaraan ADT,\r\nuntuk tidak dumping material di area Waste Dump dekat parit gajah.\r\nPetugas Response sdr Ubot dan tim BKO Polri, petugas security sdr. Madianoor, dan Sdr Riki (SP),\r\nmendatangi warga ke lokasi penyetopan, melakukan himbauan agar tidak melakukan penyetopan\r\nsehingga aktifitas tetap jalan, namun warga tidak mau. Warga ingin bertemu dengan orang Line, untuk\r\nmenentukan batas lahan IMK dengan lahan warga. Warga merasa pihak IMK belum memberikan ganti\r\nrugi lahan yang sudah di pakai oleh IMK. Sebelumnya sudah di lakukan mediasi oleh pihak Pospol\r\nTanah Siang Selatan dengan warga tersebut, namun belum ada kesepakatan.\r\nSekitar jam : 15.00 wib, Bapak Riki, selanjutnya melaporkan ke Bapak Mukti (SP), perihal di\r\nWaste Dump telah terjadi penyetopan aktifitas dumping ke dekat area parit Gajah oleh warga dan ingin\r\nbertemu dengan tim line, selanjutnya pak Mukti menyampaikan tidak bisa dadakan harus bikin janji\r\nterlebih dahulu dengan tim line.\r\nSudah di berikan himbauan, namun warga tidak mau, warga tetap bertahan di lokasi Waste Dump\r\nberingin melakukan penyetopan kendaraan ADT yang akan dumping di area dekat parit gajah.\r\nDiantara warga yang melakukan penyetopan atas nama : 1. Militer, 2. Lian, 3. Daniel, 4. Agus.\r\nSekitar jam : 16.00 \r\nWarga yang melakukan penyetopan di area waste dump, meninggalkan lokasi area waste dump .\r\n     Demikian laporan kejadian ini dibuat, sebagai pertanggung jawaban pelaksanaan tugas kepada\r\npimpinan dan bahan masukan untuk mengambil kebijakan lebih lanjut. ', 1, 'Yellow', 1, 'Week', 'Warga menuntut ganti rugi lahan yang di pergunakan oleh pihak PT IMK. \r\nWarga minta ada pertemuan dengan pihak IMK ( tim Line).\r\nSelama belum ada penyelesai masalah lahan pihak IMK tidak boleh bekerja di sekitar area parit\r\ngajah.\r\n', '1', '2020-09-07 20:00:00', '2020-11-20 10:38:39', '2020-11-20 10:38:39', 'Open'),
(4, 1, 1, 'user', '35/GPN/0PS/IMK/IX/2020', '2020-09-19', '01:30:00', '', '35/GPN/0PS', 'Pemortalan simpang bandara KM.4 oleh Sdr. Toyo', 'Simpang 4 arah bandara dan dirung lingkin', 'Night', '8', 'Managemant', '2020-09-19', '\r\n Telah terjadi peristiwa pemortalan di simpang 4 arah bandara dan dirung lingkin, Kec. Tanah Siang selatan\r\nyang dilakukan oleh Sdr. TOYO dan Sdr. RUDI, terjadi pada hari Sabtu, tanggal 19 September 2020, sekira jam\r\n13.12 Wib, adapun keronologis kejadian Sbb: \r\n\r\nLatar belakang masalah :\r\n\r\nSdr. TOYO dan Sdr. RUDI mengaku memiliki lahan diarea bantian juwa harapan yang mana lahan tersebut telah\r\ndigarap oleh perusahaan PT. IMK, dirinya menerangkan lahan yang terdapat tong krucut merupakan bondri milik\r\nperusahaan yang sudah dibebaskan namun ada lokasi lahan miliknya yang masih belum selesai untuk dilakukan\r\npembebasan namun pihak perusahaan PT. IMK sudah menggarap lahan miliknya, dikarenakan selama 9\r\n(sembilan) bulan pihak perusahaan belum ada tindak lanjut terkait pembebasan maka dirinya melakukan\r\npemortalan agar pihak perusahaan dapat menindaklanjuti apa yang diinginkan oleh dirinya bersama Sdr. RUDI. \r\n\r\nTuntutan :\r\n  Pihak perusahaan segera menyelesaikan permasalahan pembebasan lahan milik Sdr. TOYO yang sudah 9\r\n(sembilan) bulan belum penyelesaian.\r\n\r\nPemortalan tersebut dilakukan dengan cara memortal jalan dengan memarkir kendaraan bermotor roda 2 miliknya\r\ndan milik Sdr. RUDI ditengah jalan dan melarang aktifitas perusahaan baik Unit LV maupun unit lainnya yang\r\nakan melintasi jalan simpang 4 arah bandara dan dirunglingkin dengan tujuan menghambat aktifitas operasional\r\nperusahaan PT. IMK.\r\n\r\nSupervisor Gapara Sdr. Vicky Pranata bersama dengan personil BKO Polri yang dipimpin oleh Aiptu IPANSYAH\r\nmendatangi TKP, melakukan negosiasi kepda Sdr. TOYO dan Sdr. RUDI agar mereka dapat membuka portal\r\ndimaksud dan melakukan koordinasi terkait permasalahan lahan tanpa melakukan pemortalan dan kekerasan,\r\nnamun Sdr. TOYO dan RUDI masih bersikukuh pada pendiriannya dan tetap melakukan pemortalan sebelum\r\nadanya kesepakatan dari pihak perusahaan.\r\n\r\nSdr. Vicky melaporkan perihal dimaksud kepada pimpinan guna mendapatkan petunjuk dan petunjuk dari\r\npimpinan bahwa terhadap permasalahan lahan akan diadakan pertemuan antara pihak managemant dengan\r\npihak Sdr. Toyo CS di lokasi lahan yang disengketakan pada hari Senin, tanggal 21 September 2020 dan\r\ndiharapkan Sdr. TOYO membawa dokumen yang asli miliknya sebagai bukti kepemilikan lahan, kemudian Sdr.\r\nToyo CS setuju atas penyampaian dari pihak perusahaan dan bersedia membuka portal pada jam 17.00 wib, arus\r\nlalu lintas berjalan normal dan giat aktifitas perusahaan diijinkan menggunakan akses jalan, situasi kondusif.\r\n \r\n  Demikian laporan kejadian ini dibuat, sebagai bahan pertanggungjawaban pelaksanaan tugas kepada\r\npimpinan.\r\n', 1, 'Yellow', 1, 'Day', 'Pemortalan yang dilakukan berdasarkan permasalahan lahan yang diakui milik Sdr. TOYO yang sampai saat\r\nini belum diselesaikan pembebasannya oleh pihak perusahaan dalam kurun waktu + 9 bulan lamanya.\r\nSdr. Toyo sampai saat ini belum mampu menunjukan legalitas kepemilikan lahan yang diklaim miliknya.\r\n', '1', '2020-09-19 17:41:00', '2020-11-20 10:41:50', '2020-11-20 10:41:50', 'Open'),
(5, 1, 1, 'user', '36/GPN/0PS/IMK/IX/2020', '2020-09-20', '01:30:00', '', '36/GPN/0PS', 'Penangkapan berunak.', 'Stok File 4 (Batu Scat).', 'Night', '1', 'Bayu Cakra ', '2020-09-20', ' Telah terjadi penangkapan teradap 2 (dua) orang berunak di area batu scat (Stok File 4 ) yang terjadi pada haiMinggu, Tanggal 20 September 2020, sekira jam 01.30 wib oleh Tim, adapun keronologis kejadian Sbb: \r\n\r\nSekira jam 01.10 Wib Patroli Respon RLV 125 yang di kemudikan oleh Driver An. Obot Bersama dengan SpvGapara An. Bayu, dan 2 (dua) personil BKO Polri dikontek oleh CRO melalui radio HT dan dinformasikan bahwadi Area Stok File 4 (batu Scet) terpantau cahaya senter sebanyak 3 cahaya, kemudian Tim langsung meluncur keTKP guna menindaklanjuti berita dari CRO dimaksud.\r\n\r\nSekira jam 01.30 Wib setelah tim tiba di TKP terpantau + 6 orang berunak dan tim Bersama patugas BKO Polri\r\ndengan Unit RLV 108 melakukan penyergapan dan pengepungan terhadap berunak tersebut, namun dari upayapenangkapan berunak hanya 2 orang berunak yang berhasil diamankan adapun identitas berunak sbb :\r\n\r\n1.  Nama  \r\n: SANDIWARA \r\n \r\n Umur  \r\n: 18 Thn \r\n \r\n Alamat  : Desa Hanangan  \r\n\r\n2.  Nama  \r\n: Ogot  \r\n \r\n Umur  \r\n: 29 Thn \r\n \r\n Alamat  : Desa Dirung lingkin  \r\n\r\n \r\nTerhadap kedua berunak tersebut diamankan di Pos Muro tiga guna proses Investigas yang selanjutnya akandibawa ke Pos Pol Tanah Siang selatan guna mendapatkan proses lebih lanjut, sedangkan untuk bernak lainnyayang berumlah 4 orang melarikan diri.\r\n  \r\n \r\n Dari hasil investigasi dilapangan berdasarkan keterangan Saudara Sandiwara dan Ogote bahwa meraka akan\r\nberancaa memasuki Raompet Bersama ke 4 rekannya yang lain, namun sebelum melaksanakan aksinyamemasuki rompet area stok File material batu ORE milik perusahaan PT. IMK mereka sudah diamankan oleh\r\npetugas, mereka mengaku tidak kapok dengan apa yang mereka alami yaitu diamankan oleh petugas, baik dari\r\nsecurity maupun peugas kepolisian, dan menerangkan akan melakukan lagi jika ada kesempatan. \r\n \r\nDemikian laporan kejadian ini dibuat, sebagai bahan pertanggungjawaban pelaksanaan tugas kepada\r\npimpinan.\r\n', 1, 'Yellow', 1, 'Day', 'Berunak An. Sdr. Sandiwara dan Sdr. Ogot  berencana memasuki area rompat untuk mengambil material\r\nbatu ORE milik Perusahaan PT. IMK.\r\nBeruna An. Sandiwara menerangkan akan melakukan pencurian batu ore di Rompat Bersama dengan 4\r\nRekan lainnya yang berhasil kabur saat petugas datang untuk mengamankan mereka.\r\nSdr. Sandiwara dan Ogot mengaku tidak kapok atas paa yang meraka alami dan akan mengulangi lagi\r\nperilaku meraka jika ada kesempatan.  ', '1', '2020-11-24 15:03:00', '2020-11-24 08:03:53', '2020-11-24 08:03:53', 'Open'),
(6, 1, 1, 'user', '05/GPN/0PS/IMK/VII/2020', '2020-12-01', '09:00:00', '', '05/GPN/0PS', 'Test', 'Jakarta', 'Day', '1', 'DEri', '2020-12-01', 'Testing', 1, 'Red', 1, 'Day', 'Testing', '1', '2020-12-01 09:20:00', '2020-12-01 02:20:03', '2020-12-01 02:20:03', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `old_tbl_incident_doc`
--

CREATE TABLE `old_tbl_incident_doc` (
  `id_incident_doc` int(11) NOT NULL,
  `id_incident` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `incident_foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `input_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_tbl_incident_doc`
--

INSERT INTO `old_tbl_incident_doc` (`id_incident_doc`, `id_incident`, `id_user`, `user_type`, `incident_foto`, `keterangan`, `tanggal`, `input_date`) VALUES
(18, 1, 1, 'user', 'idoc_1606203353_001.PNG', 'Dokumentasi pada saat dilakukan penggeledahan diCamp D.09 /04 ', '2020-11-17', '2020-11-24 07:35:53'),
(19, 1, 1, 'user', 'idoc_1606203374_002.PNG', 'Dokumentasi pada saat dilakukannya pemeriksaan dalam proses invetigasi', '2020-11-17', '2020-11-24 07:36:14'),
(20, 1, 1, 'user', 'idoc_1606203393_003.PNG', 'Dokumentasi pengakuan dari pelaku dan diselesaikan secara kekeluargaan', '2020-11-17', '2020-11-24 07:36:33'),
(21, 1, 1, 'user', 'idoc_1606203406_004.PNG', 'Dokumentasi pernyataan dari pelaku', '2020-11-17', '2020-11-24 07:36:46'),
(22, 5, 1, 'user', 'idoc_1606205149_005.PNG', 'Berunak An. Sdr. Sandiwara dan Sdr. Ogot', '2020-11-24', '2020-11-24 08:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `old_tbl_incident_follow`
--

CREATE TABLE `old_tbl_incident_follow` (
  `id_incident_follow` int(11) NOT NULL,
  `id_incident_saran` int(11) NOT NULL,
  `id_client_user` int(11) NOT NULL,
  `follow_up` text NOT NULL,
  `follow_up_date` date NOT NULL,
  `tgl_follow` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_tbl_incident_follow`
--

INSERT INTO `old_tbl_incident_follow` (`id_incident_follow`, `id_incident_saran`, `id_client_user`, `follow_up`, `follow_up_date`, `tgl_follow`) VALUES
(1, 2, 1, 'Test', '2020-11-30', '2020-11-27 03:45:08'),
(2, 2, 1, 'assd', '2020-11-29', '2020-11-27 03:53:19'),
(3, 1, 1, 'aaa', '2020-11-24', '2020-11-27 04:00:04'),
(4, 1, 1, '222', '2020-11-27', '2020-11-27 04:00:12'),
(5, 1, 1, '333', '2020-11-30', '2020-11-27 04:00:21'),
(6, 2, 1, 'TEsting lagi', '2020-12-01', '2020-12-01 02:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `old_tbl_incident_saran`
--

CREATE TABLE `old_tbl_incident_saran` (
  `id_incident_saran` int(11) NOT NULL,
  `id_incident` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rekomendasi` text NOT NULL,
  `follow` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_saran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_tbl_incident_saran`
--

INSERT INTO `old_tbl_incident_saran` (`id_incident_saran`, `id_incident`, `id_user`, `rekomendasi`, `follow`, `status`, `tgl_saran`) VALUES
(1, 1, 1, 'Perlu nya dilakukan sosialisai keseluruh karyawan bahwa keamanan adalah tanggung jawab bersama dan\r\nselalu menjaga keamanan diri, orang lain dan lingkungan', 1, 'Open', '2020-11-18 07:37:08'),
(2, 1, 1, 'Perlu nya dilakukakan penguncian tempat barang barang berharga dan perbaikan kunci kunci yang sudah\r\ntidak layak untuk keamanan', 1, 'Open', '2020-11-20 08:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity_program`
--

CREATE TABLE `tbl_activity_program` (
  `id_activiry_program` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_mst` int(11) NOT NULL DEFAULT 0,
  `thn_act` year(4) NOT NULL,
  `no_act` varchar(10) DEFAULT NULL,
  `nama_act` varchar(100) NOT NULL,
  `periodic_act` varchar(100) DEFAULT NULL,
  `pic_act` varchar(100) DEFAULT NULL,
  `plan_act` text DEFAULT NULL,
  `actual_act` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activity_program`
--

INSERT INTO `tbl_activity_program` (`id_activiry_program`, `id_client`, `id_mst`, `thn_act`, `no_act`, `nama_act`, `periodic_act`, `pic_act`, `plan_act`, `actual_act`, `remark`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 0, 2021, '1', 'Recruitment Process', NULL, NULL, NULL, NULL, NULL, '2021-08-03 01:35:30', 1, '2021-08-03 01:41:50', NULL, NULL, NULL),
(2, 1, 1, 2021, 'A', 'Site Management', NULL, NULL, NULL, NULL, NULL, '2021-08-03 01:36:05', 1, NULL, NULL, NULL, NULL),
(3, 1, 2, 2021, '', 'Data Compiling, Recruitment and Selection', NULL, NULL, '[\"1\"]', NULL, NULL, '2021-08-03 01:36:05', 1, NULL, NULL, NULL, NULL),
(4, 1, 2, 2021, '', 'Socialisation of Job Description', NULL, NULL, '[\"1\"]', '[\"1\"]', NULL, '2021-08-03 01:36:05', 1, '2021-08-03 02:15:52', NULL, NULL, NULL),
(5, 1, 0, 2021, '2', 'Training & Refrseher Training', NULL, NULL, NULL, NULL, NULL, '2021-08-03 01:35:30', 1, NULL, NULL, NULL, NULL),
(6, 1, 5, 2021, 'A', 'Security Training & Refresher', NULL, NULL, NULL, NULL, NULL, '2021-08-03 01:36:05', 1, NULL, NULL, NULL, NULL),
(7, 1, 6, 2021, '', 'Gada Pratama ', 'as required', NULL, '[\"2\",\"3\",\"4\",\"5\"]', NULL, NULL, '2021-08-03 01:36:05', 1, NULL, NULL, NULL, NULL),
(8, 0, 0, 2021, '3', 'Security & Safety Equipment', 'Annualy', NULL, '[\"1\",\"2\",\"3\",\"4\"]', NULL, NULL, '2021-08-03 02:14:43', 1, NULL, NULL, NULL, NULL),
(9, 1, 0, 2021, '3', 'Security & Safety Equipment', 'Annualy', NULL, '[\"1\",\"2\",\"3\",\"4\"]', NULL, NULL, '2021-08-03 02:14:54', 1, NULL, NULL, NULL, NULL),
(10, 1, 0, 2021, '4', 'Operational Management Inspection', '', '', '[\"1\",\"3\",\"5\"]', NULL, NULL, '2021-08-04 03:00:31', 1, NULL, NULL, NULL, NULL),
(11, 1, 10, 2021, '', 'HQ Management Visit', 'Quarterly', '', '[\"2\",\"5\",\"8\",\"11\"]', NULL, NULL, '2021-08-04 03:01:30', 1, NULL, NULL, NULL, NULL),
(12, 1, 0, 2021, '5', 'Site Management Inspections', '', '', 'null', NULL, NULL, '2021-08-04 03:25:34', 1, NULL, NULL, NULL, NULL),
(13, 1, 12, 2021, '', 'Radio HT', 'Monthly', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '[\"1\",\"3\",\"5\"]', '', '2021-08-04 03:26:22', 1, '2021-08-13 07:16:03', 1, NULL, NULL),
(14, 1, 12, 2021, '', 'Radio HT', '', '', '[\"1\",\"3\"]', NULL, NULL, '2021-08-13 07:15:44', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `id_category_grup` int(11) NOT NULL,
  `nama_category` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `id_category_grup`, `nama_category`, `status`) VALUES
(1, 1, 'Penangkapan', 1),
(2, 1, 'Orang Terluka', 1),
(3, 1, 'Kebakaran', 1),
(4, 1, 'Kecelakaan Kendaraan', 1),
(5, 1, 'Percobaan Pencurian', 1),
(6, 1, 'Pencurian', 1),
(7, 1, 'Sabotase', 1),
(8, 1, 'Gangguan Masyarakat', 1),
(9, 1, 'Lain-lain', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_group`
--

CREATE TABLE `tbl_category_group` (
  `tbl_category_group` int(11) NOT NULL,
  `nama_group` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category_group`
--

INSERT INTO `tbl_category_group` (`tbl_category_group`, `nama_group`, `status`) VALUES
(1, 'Incident', 1),
(2, 'Security Performance', 1),
(3, 'K3L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id_client` int(11) NOT NULL,
  `client_code` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` varchar(255) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_city` varchar(255) NOT NULL,
  `client_post` varchar(255) NOT NULL,
  `client_provinve` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id_client`, `client_code`, `client_name`, `client_phone`, `client_address`, `client_city`, `client_post`, `client_provinve`, `logo`, `status`) VALUES
(1, 'GPNPKT003', 'PT Indexim Coalindo', '0812 5846 6966', 'Pengadaan,Kaliorang, Cipta Graha, Kec. Kaubun, Kabupaten Kutai Timur, Kalimantan Timur 75618', 'Kaliorang', '75618', 'Kalimantan Timur', 'profil_indexim.jpg', 1),
(2, 'CC-001', 'PT. Huntsman Indonesia', '(021) 8711500', 'Jl. Raya Bogor No.7, RT.10/RW.2, Pekayon, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13710', 'Kota Jakarta Timur', '13710', 'Daerah Khusus Ibukota Jakarta', 'profile_02_huntsman.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_user`
--

CREATE TABLE `tbl_client_user` (
  `id_client_user` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client_user`
--

INSERT INTO `tbl_client_user` (`id_client_user`, `id_client`, `username`, `password`, `nama_lengkap`, `email`, `jabatan`, `telp`, `akses`, `status`) VALUES
(1, 1, 'user01', '827ccb0eea8a706c4c34a16891f84e7b', 'User 01', 'user@user.com', 'Chief Officer', '1234567890', 'chief', 1),
(2, 2, 'huntsman01', '827ccb0eea8a706c4c34a16891f84e7b', 'Huntsman Guard', 'user@user.com', 'Guard', '1234567890', 'guard', 1),
(3, 2, 'huntsman_admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Huntsman Guard', 'user@user.com', 'Chief', '1234567890', 'guard', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `id_complaint` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `complaint` text NOT NULL,
  `sugestion` text NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`id_complaint`, `nama_lengkap`, `email`, `phone`, `address`, `complaint`, `sugestion`, `status`, `id_user`, `tgl_input`) VALUES
(1, 'Muhammad Deri Ekaputra', 'test@gmail.com', '08123456789', 'Pancoran, Jakarta', 'Testing complaint', 'Testing sugestions', 1, 1, '2020-11-26 03:39:48'),
(2, 'Deri', 'm.deri@sucofindo.co.id', '1234567', 'Jakarta', 'Testing 1', 'Testing 1', 1, 1, '2020-12-01 02:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_cms`
--

CREATE TABLE `tbl_daily_cms` (
  `id_daily_cms` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_finding`
--

CREATE TABLE `tbl_daily_finding` (
  `id_daily_finding` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `temuan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `aksi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_finding`
--

INSERT INTO `tbl_daily_finding` (`id_daily_finding`, `id_client`, `tanggal`, `location`, `nama`, `jabatan`, `temuan`, `deskripsi`, `aksi`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, '2021-10-12 15:58:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 5, NULL, 'Test deskripsi', '2021-10-12 08:59:16', 2, '2021-10-12 09:16:09', NULL, '2021-10-12 09:16:09', 2),
(2, 2, '2021-10-12 15:58:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', NULL, NULL, NULL, '2021-10-12 08:59:48', 2, NULL, NULL, NULL, NULL),
(3, 2, '2021-10-12 15:58:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', NULL, NULL, NULL, '2021-10-12 08:59:51', 2, NULL, NULL, NULL, NULL),
(4, 2, '2021-10-12 16:00:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 3, 'asd', 'asd', '2021-10-12 09:00:53', 2, NULL, NULL, NULL, NULL),
(5, 2, '2021-10-12 16:00:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 3, 'asd', 'asd', '2021-10-12 09:01:56', 2, NULL, NULL, NULL, NULL),
(6, 2, '2021-10-13 10:17:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 6, 'Deskripsi', 'Aksia', '2021-10-13 03:18:14', 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_finding_img`
--

CREATE TABLE `tbl_daily_finding_img` (
  `id_daily_finding_img` int(11) NOT NULL,
  `id_daily_finding` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_finding_img`
--

INSERT INTO `tbl_daily_finding_img` (`id_daily_finding_img`, `id_daily_finding`, `file`, `created_at`, `created_by`, `deleted_at`, `deleted_by`) VALUES
(1, 5, 'finding_2_5_1634029316_000.PNG', '2021-10-12 09:01:56', 2, NULL, NULL),
(2, 5, 'finding_2_5_1634029316_0001.PNG', '2021-10-12 09:01:56', 2, NULL, NULL),
(3, 5, 'finding_2_5_1634029316_0002.PNG', '2021-10-12 09:01:56', 2, NULL, NULL),
(4, 5, 'finding_2_5_1634029316_0003.PNG', '2021-10-12 09:01:56', 2, NULL, NULL),
(5, 6, 'finding_2_6_1634095094_000.PNG', '2021-10-13 03:18:14', 2, NULL, NULL),
(6, 6, 'finding_2_6_1634095094_0001.PNG', '2021-10-13 03:18:14', 2, NULL, NULL),
(7, 6, 'finding_2_6_1634095094_0002.PNG', '2021-10-13 03:18:14', 2, NULL, NULL),
(8, 6, 'finding_2_6_1634095094_0003.PNG', '2021-10-13 03:18:14', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_guard`
--

CREATE TABLE `tbl_daily_guard` (
  `id_daily_guard` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `tim` varchar(255) DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `finding` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_guard`
--

INSERT INTO `tbl_daily_guard` (`id_daily_guard`, `id_client`, `tanggal`, `location`, `tim`, `barcode`, `finding`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, '2021-10-12 16:41:00', 'Kantor Pusat', 'Tim Patrol', 'QR001001001', 'asdasdasd', '2021-10-12 09:41:58', 2, '2021-10-12 09:45:07', NULL, '2021-10-12 09:45:07', 2),
(2, 2, '2021-10-13 10:16:00', 'Kantor Pusat', 'Tim Patrol', 'QR001001001', 'Tidak ada', '2021-10-13 03:17:07', 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_guard_img`
--

CREATE TABLE `tbl_daily_guard_img` (
  `id_daily_guard_img` int(11) NOT NULL,
  `id_daily_guard` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_guard_img`
--

INSERT INTO `tbl_daily_guard_img` (`id_daily_guard_img`, `id_daily_guard`, `file`, `created_at`, `created_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 'guard_2_1_1634031718_000.PNG', '2021-10-12 09:41:58', 2, NULL, NULL),
(2, 1, 'guard_2_1_1634031718_0001.PNG', '2021-10-12 09:41:58', 2, NULL, NULL),
(3, 1, 'guard_2_1_1634031718_0002.PNG', '2021-10-12 09:41:58', 2, NULL, NULL),
(4, 1, 'guard_2_1_1634031718_0003.PNG', '2021-10-12 09:41:58', 2, NULL, NULL),
(5, 2, 'guard_2_2_1634095027_000.PNG', '2021-10-13 03:17:07', 2, NULL, NULL),
(6, 2, 'guard_2_2_1634095027_000.', '2021-10-13 03:17:07', 2, NULL, NULL),
(7, 2, 'guard_2_2_1634095027_000.', '2021-10-13 03:17:07', 2, NULL, NULL),
(8, 2, 'guard_2_2_1634095027_000.', '2021-10-13 03:17:07', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_hse`
--

CREATE TABLE `tbl_daily_hse` (
  `id_daily_hse` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tgl` datetime DEFAULT NULL,
  `observer` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `p3k` int(11) NOT NULL DEFAULT 0,
  `medic` int(11) NOT NULL DEFAULT 0,
  `fatal` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 0,
  `jumtk` int(11) NOT NULL DEFAULT 0,
  `aktifitas` text DEFAULT NULL,
  `kondisi` text DEFAULT NULL,
  `diamati1` tinyint(1) DEFAULT NULL,
  `tindakan1` text DEFAULT NULL,
  `diamati2` tinyint(1) DEFAULT NULL,
  `tindakan2` text DEFAULT NULL,
  `perbaikan` tinyint(1) DEFAULT NULL,
  `tindakan3` text DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_hse`
--

INSERT INTO `tbl_daily_hse` (`id_daily_hse`, `id_client`, `tgl`, `observer`, `jabatan`, `shift`, `lokasi`, `p3k`, `medic`, `fatal`, `total`, `jumtk`, `aktifitas`, `kondisi`, `diamati1`, `tindakan1`, `diamati2`, `tindakan2`, `perbaikan`, `tindakan3`, `foto1`, `foto2`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, '0000-00-00 00:00:00', '', '', NULL, '', 0, 0, 0, 0, 0, '', '[{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"}]', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2021-08-30 23:25:37', 1, NULL, NULL, NULL, NULL),
(2, 1, '2021-08-30 06:26:00', '1', '2', NULL, '3', 0, 0, 0, 0, 0, '4', '[{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"TA\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"TA\"},{\"tta\":\"TTA\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"TTA\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"}]', 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30 23:26:44', 1, NULL, NULL, NULL, NULL),
(3, 1, '2021-09-01 08:55:16', 'pengamat 1', 'jabatan 1', 'shift1', 'site', 1, 1, 1, 3, 4, NULL, '[{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"TTA\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"TA\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"},{\"tta\":\"\",\"ta\":\"\"}]', 1, '4', NULL, '4', NULL, '4', NULL, NULL, '2021-09-08 01:54:27', 1, '2021-09-08 01:57:09', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_security`
--

CREATE TABLE `tbl_daily_security` (
  `id_daily_security` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `site` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  `shift` varchar(255) NOT NULL,
  `logistik` varchar(255) NOT NULL,
  `intel` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `peristiwa` text NOT NULL,
  `temuan` text NOT NULL,
  `tindakan` text NOT NULL,
  `pra` text NOT NULL,
  `pkk` text NOT NULL,
  `dk` text NOT NULL,
  `tk_keamanan` int(11) NOT NULL,
  `tk_karyawan` int(11) NOT NULL,
  `perbaikan` text NOT NULL,
  `pengembangan` text NOT NULL,
  `komunikasi` text NOT NULL,
  `infolain` text NOT NULL,
  `saran_tl` text NOT NULL,
  `saran_rek` text NOT NULL,
  `kesimpulan` text NOT NULL,
  `lampiran` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_security`
--

INSERT INTO `tbl_daily_security` (`id_daily_security`, `id_client`, `site`, `tgl`, `shift`, `logistik`, `intel`, `supervisor`, `leader`, `ringkasan`, `peristiwa`, `temuan`, `tindakan`, `pra`, `pkk`, `dk`, `tk_keamanan`, `tk_karyawan`, `perbaikan`, `pengembangan`, `komunikasi`, `infolain`, `saran_tl`, `saran_rek`, `kesimpulan`, `lampiran`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 'Sucofindo', '2021-08-01 08:55:00', 'Pagi', 'logistik', 'intel', 'supervisor', 'shift leader', 'Ringkasan umu kegiatan pengamanan adalah ........................', '[{\"tanggal\":\"2021-08-01T08:00\",\"peristiwa\":\"kegiatan pengamanan kunjungan tamu VVIP\"}]', '[{\"tanggal\":\"2021-08-01T08:43\",\"petugas\":\"MWS\",\"area\":\"Pagar di sisi barat dormitory\",\"temuan\":\"pagar berlubang blm diperbaiki\",\"laporan\":\"MWS petugas patroli\",\"status\":\"Deteksi\"}]', '[\"* memberikan himbauan kepada 2 warga desa\\u2026nama\\u2026usia...dan nama\\u2026usia \\u2026.agar tidak memasuki area proyek, dengan etika sesuai prosedur disaksikan petugas patroli SWM       \\r\\n\"]', '[\"Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Perbaikan\",\"Perbaikan\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"]', 2, 3, '*perbaikan formulir laporan harian dan mingguan etc ', '* pelatihan , meeting, review rencana pengamanan etc    \r\n', '* Apel pagi, evaluasi petugas pos….agarlebih…..    \r\n', '*Mitigasi akses rute tamu VVIP,     \r\nMempersiapkan visitor card VVIP, melakukan pengawalan rute jalan    \r\n', '*Petugas baru nama…..perlu mendapat sosialisasi BPJS TKU    \r\n', '*perbaikan / penebalan kawat duri tembok perimeter area rawan    \r\npekerja menutup sementara dengan sarana alternatif menjelang istirahat    \r\n', 'Kegiatan pengamanan oleh regu shift 1 berjalan sesuai dengan renpam    \r\nHasil pengamanan kegiatan kerja karyawan berjalan normal.    \r\nLevel resiko rendah dan level ancaman sangat rendah    \r\nTidak ditemukan kejadian mencurigakan yang dilarang, situasi keamanan normal     \r\n', NULL, '2021-08-25 02:00:32', 1, NULL, 0, NULL, 0),
(2, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 03:57:24', 2, '2021-09-24 01:58:34', 0, '2021-09-23 20:58:34', 2),
(3, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:00:43', 2, '2021-09-24 02:01:17', 0, '2021-09-23 21:01:17', 2),
(4, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:01:11', 2, NULL, 0, NULL, 0),
(5, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:01:15', 2, NULL, 0, NULL, 0),
(6, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:01:21', 2, NULL, 0, NULL, 0),
(7, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:01:25', 2, NULL, 0, NULL, 0),
(8, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:01:51', 2, NULL, 0, NULL, 0),
(9, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:02:00', 2, NULL, 0, NULL, 0),
(10, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:02:15', 2, NULL, 0, NULL, 0),
(11, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:02:24', 2, NULL, 0, NULL, 0),
(12, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:02:31', 2, NULL, 0, NULL, 0),
(13, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:02:48', 2, NULL, 0, NULL, 0),
(14, 2, '', '2021-09-21 05:28:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:03:10', 2, NULL, 0, NULL, 0),
(15, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:04:30', 2, NULL, 0, NULL, 0),
(16, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:05:03', 2, NULL, 0, NULL, 0),
(17, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:07:30', 2, NULL, 0, NULL, 0),
(18, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:07:48', 2, NULL, 0, NULL, 0),
(19, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:08:35', 2, NULL, 0, NULL, 0),
(20, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:08:58', 2, NULL, 0, NULL, 0),
(21, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:09:19', 2, NULL, 0, NULL, 0),
(22, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:11:09', 2, NULL, 0, NULL, 0),
(23, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:11:58', 2, NULL, 0, NULL, 0),
(24, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:12:15', 2, NULL, 0, NULL, 0),
(25, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:12:41', 2, NULL, 0, NULL, 0),
(26, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:12:53', 2, NULL, 0, NULL, 0),
(27, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:15:21', 2, NULL, 0, NULL, 0);
INSERT INTO `tbl_daily_security` (`id_daily_security`, `id_client`, `site`, `tgl`, `shift`, `logistik`, `intel`, `supervisor`, `leader`, `ringkasan`, `peristiwa`, `temuan`, `tindakan`, `pra`, `pkk`, `dk`, `tk_keamanan`, `tk_karyawan`, `perbaikan`, `pengembangan`, `komunikasi`, `infolain`, `saran_tl`, `saran_rek`, `kesimpulan`, `lampiran`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(28, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:15:28', 2, NULL, 0, NULL, 0),
(29, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:17:43', 2, NULL, 0, NULL, 0),
(30, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:18:55', 2, NULL, 0, NULL, 0),
(31, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:19:06', 2, NULL, 0, NULL, 0),
(32, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', NULL, '2021-09-21 04:21:25', 2, NULL, 0, NULL, 0),
(33, 2, '', '2021-09-21 06:04:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', '[{\"nama\":\"Foto 1\",\"foto\":\"1632198097_lampiran_33_000.PNG\"},{\"nama\":\"Foto 2\",\"foto\":\"1632198097_lampiran_33_001.PNG\"}]', '2021-09-21 04:21:37', 2, '2021-09-21 04:21:37', 0, NULL, 0),
(34, 1, '', '2021-09-22 05:22:00', '', '', '', '', '', '', '[{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"},{\"tanggal\":\"\",\"peristiwa\":\"\"}]', '[{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"},{\"tanggal\":\"\",\"petugas\":\"\",\"area\":\"\",\"temuan\":\"\",\"laporan\":\"\",\"status\":\"\"}]', '[\"\"]', '[\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\",\"Tidak Ada\"]', '[\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\",\"Normal\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 0, 0, '', '', '', '', '', '', '', '[{\"nama\":\"Foto 1\",\"foto\":\"1632281003_lampiran_1_34_000.PNG\"},{\"nama\":\"Foto 2\",\"foto\":\"1632281003_lampiran_1_34_001.PNG\"}]', '2021-09-22 03:23:23', 1, '2021-09-30 03:30:25', 0, '2021-09-29 22:30:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_security_new`
--

CREATE TABLE `tbl_daily_security_new` (
  `id_daily_security_new` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `shift` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kegiatan` int(11) DEFAULT NULL,
  `sub_kegiatan` int(11) DEFAULT NULL,
  `ringkasan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_security_new`
--

INSERT INTO `tbl_daily_security_new` (`id_daily_security_new`, `id_client`, `tanggal`, `location`, `shift`, `nama`, `kegiatan`, `sub_kegiatan`, `ringkasan`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, '2021-10-06 00:00:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 2, 7, NULL, '2021-10-06 02:03:35', 2, '2021-10-06 04:44:13', NULL, '2021-10-06 04:44:13', 2),
(2, 2, '2021-10-06 00:00:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 2, 7, 'Testing aplikasi', '2021-10-06 02:04:16', 2, '2021-10-12 02:33:12', 2, NULL, NULL),
(3, 2, '2021-10-06 00:00:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 1, 1, '123', '2021-10-06 02:06:35', 2, '2021-10-06 03:59:38', NULL, NULL, 2),
(4, 2, '2021-10-06 00:00:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 1, 1, '123', '2021-10-06 02:06:49', 2, '2021-10-06 04:13:55', NULL, '2021-10-06 04:13:55', 2),
(5, 2, '2021-10-06 10:20:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 3, 16, 'Testing Aplikasi', '2021-10-06 03:20:57', 2, '2021-10-06 04:03:49', NULL, '2021-10-06 04:03:49', 2),
(6, 2, '2021-10-06 11:06:00', 'Kantor Pusat', 1, 'PT. PELINDO IV-TPM', 1, 1, 'adasdasd', '2021-10-06 04:06:17', 2, '2021-10-06 04:06:31', NULL, '2021-10-06 04:06:31', 2),
(7, 2, '2021-10-06 11:07:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 1, 1, 'asdasda', '2021-10-06 04:07:52', 2, '2021-10-06 04:08:05', NULL, '2021-10-06 04:08:05', 2),
(8, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 04:41:00', 2, '2021-10-13 03:19:12', NULL, '2021-10-13 03:19:12', 2),
(9, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 04:41:59', 2, '2021-10-13 03:19:22', NULL, '2021-10-13 03:19:22', 2),
(10, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 04:43:58', 2, '2021-10-13 03:19:32', NULL, '2021-10-13 03:19:32', 2),
(11, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 04:44:06', 2, '2021-10-13 03:19:40', NULL, '2021-10-13 03:19:40', 2),
(12, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:32:03', 2, '2021-10-13 03:19:47', NULL, '2021-10-13 03:19:47', 2),
(13, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:32:14', 2, '2021-10-13 03:19:55', NULL, '2021-10-13 03:19:55', 2),
(14, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:32:36', 2, NULL, NULL, NULL, NULL),
(15, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:32:50', 2, NULL, NULL, NULL, NULL),
(16, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:32:58', 2, NULL, NULL, NULL, NULL),
(17, 2, '2021-10-06 12:33:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 1, 1, 'asdasd', '2021-10-06 05:33:14', 2, NULL, NULL, NULL, NULL),
(18, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:38:37', 2, NULL, NULL, NULL, NULL),
(19, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:38:56', 2, NULL, NULL, NULL, NULL),
(20, 2, '0000-00-00 00:00:00', '', 1, '', 1, 1, '', '2021-10-06 05:39:11', 2, '2021-10-06 09:54:59', 2, NULL, NULL),
(21, 2, '2021-10-13 10:13:00', 'Kantor Pusat', 1, 'Muhammad Deri Ekaputra', 1, 1, 'test', '2021-10-13 03:13:57', 2, '2021-10-13 03:14:55', 2, '2021-10-13 03:14:55', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_security_new_img`
--

CREATE TABLE `tbl_daily_security_new_img` (
  `id_daily_security_new_img` int(11) NOT NULL,
  `id_daily_security_new` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_security_new_img`
--

INSERT INTO `tbl_daily_security_new_img` (`id_daily_security_new_img`, `id_daily_security_new`, `file`, `created_at`, `created_by`, `deleted_at`, `deleted_by`) VALUES
(1, 15, '1633498370', '2021-10-06 05:32:50', 2, NULL, NULL),
(2, 15, '1633498370', '2021-10-06 05:32:50', 2, NULL, NULL),
(3, 15, '1633498370', '2021-10-06 05:32:50', 2, NULL, NULL),
(4, 16, '1633498378', '2021-10-06 05:32:58', 2, NULL, NULL),
(5, 16, '1633498378', '2021-10-06 05:32:58', 2, NULL, NULL),
(6, 16, '1633498378', '2021-10-06 05:32:58', 2, NULL, NULL),
(7, 17, '1633498394', '2021-10-06 05:33:14', 2, NULL, NULL),
(8, 17, '1633498394', '2021-10-06 05:33:14', 2, NULL, NULL),
(9, 17, '1633498394', '2021-10-06 05:33:14', 2, NULL, NULL),
(10, 18, '1633498717', '2021-10-06 05:38:37', 2, NULL, NULL),
(11, 18, '1633498717', '2021-10-06 05:38:37', 2, NULL, NULL),
(12, 18, '1633498717', '2021-10-06 05:38:37', 2, NULL, NULL),
(13, 19, '1633498736_foto_2_19_000.PNG', '2021-10-06 05:38:56', 2, NULL, NULL),
(14, 19, '1633498736_foto_2_19_0001.PNG', '2021-10-06 05:38:56', 2, NULL, NULL),
(15, 19, '1633498736_foto_2_19_0002.PNG', '2021-10-06 05:38:56', 2, NULL, NULL),
(16, 20, '1633498751_foto_2_20_000.PNG', '2021-10-06 05:39:11', 2, NULL, NULL),
(17, 20, '1633498751_foto_2_20_0001.PNG', '2021-10-06 05:39:11', 2, NULL, NULL),
(18, 20, '1633498751_foto_2_20_0002.PNG', '2021-10-06 05:39:11', 2, '2021-10-06 07:30:45', 2),
(19, 1, '1633513980_foto_2_1_000.PNG', '2021-10-06 09:53:00', 2, NULL, NULL),
(20, 1, '1633513980_foto_2_1_0001.PNG', '2021-10-06 09:53:00', 2, NULL, NULL),
(21, 1, '1633513980_foto_2_1_0002.PNG', '2021-10-06 09:53:00', 2, NULL, NULL),
(22, 1, '1633513983_foto_2_1_000.PNG', '2021-10-06 09:53:03', 2, NULL, NULL),
(23, 1, '1633513983_foto_2_1_0001.PNG', '2021-10-06 09:53:03', 2, NULL, NULL),
(24, 1, '1633513983_foto_2_1_0002.PNG', '2021-10-06 09:53:03', 2, NULL, NULL),
(25, 20, '1633514099_foto_2_20_000.PNG', '2021-10-06 09:54:59', 2, NULL, NULL),
(26, 20, '1633514099_foto_2_20_0001.PNG', '2021-10-06 09:54:59', 2, NULL, NULL),
(27, 20, '1633514099_foto_2_20_0002.PNG', '2021-10-06 09:54:59', 2, NULL, NULL),
(28, 20, '1633514117_foto_2_20_000.PNG', '2021-10-06 09:55:17', 2, NULL, NULL),
(29, 20, '1633514117_foto_2_20_0001.PNG', '2021-10-06 09:55:17', 2, NULL, NULL),
(30, 20, '1633514117_foto_2_20_0002.PNG', '2021-10-06 09:55:17', 2, NULL, NULL),
(31, 20, '1633514166_foto_2_20_000.PNG', '2021-10-06 09:56:06', 2, NULL, NULL),
(32, 20, '1633514166_foto_2_20_0001.PNG', '2021-10-06 09:56:06', 2, NULL, NULL),
(33, 20, '1633514166_foto_2_20_0002.PNG', '2021-10-06 09:56:06', 2, NULL, NULL),
(34, 20, '1633514175_foto_2_20_000.PNG', '2021-10-06 09:56:15', 2, NULL, NULL),
(35, 20, '1633514175_foto_2_20_000.', '2021-10-06 09:56:15', 2, '2021-10-06 09:59:39', 2),
(36, 20, '1633514175_foto_2_20_000.', '2021-10-06 09:56:15', 2, '2021-10-06 09:59:44', 2),
(37, 20, '1633514358_foto_2_20_000.PNG', '2021-10-06 09:59:18', 2, NULL, NULL),
(38, 20, '1633514371_foto_2_20_000.PNG', '2021-10-06 09:59:31', 2, NULL, NULL),
(39, 2, '1634005992_foto_2_2_000.PNG', '2021-10-12 02:33:12', 2, NULL, NULL),
(40, 2, '1634005992_foto_2_2_0001.PNG', '2021-10-12 02:33:12', 2, NULL, NULL),
(41, 2, '1634005992_foto_2_2_0002.PNG', '2021-10-12 02:33:12', 2, NULL, NULL),
(42, 21, 'security_2_21_1634094837_000.PNG', '2021-10-13 03:13:57', 2, NULL, NULL),
(43, 21, 'security_2_21_1634094837_0001.PNG', '2021-10-13 03:13:57', 2, NULL, NULL),
(44, 21, 'security_2_21_1634094837_0002.PNG', '2021-10-13 03:13:57', 2, NULL, NULL),
(45, 21, 'security_2_1_1634094874_000.PNG', '2021-10-13 03:14:34', 2, NULL, NULL),
(46, 21, 'security_2_1_1634094874_0001.PNG', '2021-10-13 03:14:34', 2, '2021-10-13 03:14:46', 2),
(47, 21, 'security_2_1_1634094874_0002.PNG', '2021-10-13 03:14:34', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_uav`
--

CREATE TABLE `tbl_daily_uav` (
  `id_daily_uav` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `pilot` varchar(255) DEFAULT NULL,
  `device` int(11) DEFAULT NULL,
  `activity` int(11) DEFAULT NULL,
  `flight` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_uav`
--

INSERT INTO `tbl_daily_uav` (`id_daily_uav`, `id_client`, `tanggal`, `location`, `pilot`, `device`, `activity`, `flight`, `remarks`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, '2021-08-10', 'Site 01', 'Pilot 1', 1, 2, '[{\"from\":\"20:51\",\"to\":\"21:51\",\"departure\":\"Pin A\",\"destination\":\"Pin B\",\"altitude\":\"100\",\"distance\":\"100\",\"sc\":\"sc\",\"theft\":\"th\",\"shelter\":\"sh\",\"mass\":\"mm\",\"fire\":\"fi\",\"natural\":\"nd\",\"etc\":\"etc\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"\",\"theft\":\"\",\"shelter\":\"\",\"mass\":\"\",\"fire\":\"\",\"natural\":\"\",\"etc\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"\",\"theft\":\"\",\"shelter\":\"\",\"mass\":\"\",\"fire\":\"\",\"natural\":\"\",\"etc\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"\",\"theft\":\"\",\"shelter\":\"\",\"mass\":\"\",\"fire\":\"\",\"natural\":\"\",\"etc\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"\",\"theft\":\"\",\"shelter\":\"\",\"mass\":\"\",\"fire\":\"\",\"natural\":\"\",\"etc\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"\",\"theft\":\"\",\"shelter\":\"\",\"mass\":\"\",\"fire\":\"\",\"natural\":\"\",\"etc\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"\",\"theft\":\"\",\"shelter\":\"\",\"mass\":\"\",\"fire\":\"\",\"natural\":\"\",\"etc\":\"\"}]', 'Remarks 1', '2021-09-07 13:52:37', 1, NULL, NULL, NULL, NULL),
(2, 1, '2021-09-12', 'Site 01', 'Pilot 1', 3, 3, '[{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"sc\":\"1\",\"theft\":\"1\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\",\"shelter\":\"1\",\"mass\":\"1\",\"fire\":\"1\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\"},{\"from\":\"\",\"to\":\"\",\"departure\":\"\",\"destination\":\"\",\"altitude\":\"\",\"distance\":\"\"}]', 'Remarks', '2021-09-15 03:07:02', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_verbal`
--

CREATE TABLE `tbl_daily_verbal` (
  `id_daily_verbal` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `kegiatan` int(11) DEFAULT NULL,
  `sub_kegiatan` int(11) DEFAULT NULL,
  `kronologis` text DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_verbal`
--

INSERT INTO `tbl_daily_verbal` (`id_daily_verbal`, `id_client`, `tanggal`, `location`, `nama`, `jabatan`, `kegiatan`, `sub_kegiatan`, `kronologis`, `tindakan`, `bukti`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, '2021-10-12 10:28:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 1, 1, NULL, 'Tindakan', 'Barang bukti', '2021-10-12 03:31:23', 2, '2021-10-12 03:45:46', NULL, '2021-10-12 03:45:46', 2),
(2, 2, '2021-10-12 10:31:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 2, 7, 'asd', 'asd', 'asd', '2021-10-12 03:32:19', 2, '2021-10-12 09:15:11', NULL, '2021-10-12 09:15:11', 2),
(3, 2, '2021-10-12 10:32:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 1, 1, 'asd', 'asd', 'asd', '2021-10-12 03:33:16', 2, NULL, NULL, NULL, NULL),
(4, 2, '2021-10-12 10:32:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 1, 1, 'asd', 'asd', 'asd', '2021-10-12 03:33:36', 2, NULL, NULL, NULL, NULL),
(5, 2, '2021-10-12 10:32:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 1, 1, 'asd', 'asd', 'asd', '2021-10-12 03:34:02', 2, NULL, NULL, NULL, NULL),
(6, 2, '2021-10-12 10:34:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 1, 1, 'asd', 'asd', 'asd', '2021-10-12 03:34:46', 2, '2021-10-12 03:45:23', NULL, '2021-10-12 03:45:23', 2),
(7, 2, '2021-10-13 10:15:00', 'Kantor Pusat', 'Muhammad Deri Ekaputra', 'Staff', 1, 2, 'asd', 'asd', 'asd', '2021-10-13 03:15:50', 2, '2021-10-13 03:16:22', NULL, '2021-10-13 03:16:22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_verbal_img`
--

CREATE TABLE `tbl_daily_verbal_img` (
  `id_daily_verbal_img` int(11) NOT NULL,
  `id_daily_verbal` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_verbal_img`
--

INSERT INTO `tbl_daily_verbal_img` (`id_daily_verbal_img`, `id_daily_verbal`, `file`, `created_at`, `created_by`, `deleted_at`, `deleted_by`) VALUES
(1, 4, 'verbal_2_4_1634009616_000.PNG', '2021-10-12 03:33:36', 2, NULL, NULL),
(2, 4, 'verbal_2_4_1634009616_0001.PNG', '2021-10-12 03:33:36', 2, NULL, NULL),
(3, 4, 'verbal_2_4_1634009616_0002.PNG', '2021-10-12 03:33:36', 2, NULL, NULL),
(4, 5, 'verbal_2_5_1634009642_000.PNG', '2021-10-12 03:34:02', 2, NULL, NULL),
(5, 5, 'verbal_2_5_1634009642_0001.PNG', '2021-10-12 03:34:02', 2, NULL, NULL),
(6, 5, 'verbal_2_5_1634009642_0002.PNG', '2021-10-12 03:34:02', 2, NULL, NULL),
(7, 6, 'verbal_2_6_1634009686_000.PNG', '2021-10-12 03:34:46', 2, NULL, NULL),
(8, 6, 'verbal_2_6_1634009686_0001.PNG', '2021-10-12 03:34:46', 2, NULL, NULL),
(9, 6, 'verbal_2_6_1634009686_0002.PNG', '2021-10-12 03:34:46', 2, NULL, NULL),
(10, 7, 'verbal_2_7_1634094950_000.PNG', '2021-10-13 03:15:50', 2, NULL, NULL),
(11, 7, 'verbal_2_7_1634094950_0001.PNG', '2021-10-13 03:15:50', 2, NULL, NULL),
(12, 7, 'verbal_2_7_1634094950_0002.PNG', '2021-10-13 03:15:50', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_incident`
--

CREATE TABLE `tbl_incident` (
  `id_incident` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `nm_inc` varchar(255) NOT NULL,
  `site` varchar(255) DEFAULT NULL,
  `klien` varchar(255) DEFAULT NULL,
  `tgl_incident` datetime DEFAULT NULL,
  `nama_gapara` varchar(255) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `eksposure` varchar(50) DEFAULT NULL,
  `keamanan` varchar(50) DEFAULT NULL,
  `eskalasi` varchar(50) DEFAULT NULL,
  `kt_ancaman` text DEFAULT NULL,
  `nama1` varchar(255) DEFAULT NULL,
  `alm1` varchar(255) DEFAULT NULL,
  `tlp1` varchar(255) DEFAULT NULL,
  `tmp1` varchar(255) DEFAULT NULL,
  `tgl1` date DEFAULT NULL,
  `agama1` varchar(255) DEFAULT NULL,
  `nikah1` varchar(255) DEFAULT NULL,
  `suami1` varchar(255) DEFAULT NULL,
  `anak1` varchar(255) DEFAULT NULL,
  `nama2` varchar(255) DEFAULT NULL,
  `alm2` varchar(255) DEFAULT NULL,
  `tlp2` varchar(255) DEFAULT NULL,
  `tmp2` varchar(255) DEFAULT NULL,
  `tgl2` date DEFAULT NULL,
  `agama2` varchar(255) DEFAULT NULL,
  `nikah2` varchar(255) DEFAULT NULL,
  `suami2` varchar(255) DEFAULT NULL,
  `anak2` varchar(255) DEFAULT NULL,
  `apa` text DEFAULT NULL,
  `dimana` text DEFAULT NULL,
  `dengan` text DEFAULT NULL,
  `lain` text DEFAULT NULL,
  `mengapa` text DEFAULT NULL,
  `bagaimana` text DEFAULT NULL,
  `bilamana` text DEFAULT NULL,
  `aset1` bigint(20) DEFAULT NULL,
  `uang1` bigint(20) DEFAULT NULL,
  `alat1` bigint(20) DEFAULT NULL,
  `lainnya1` bigint(20) DEFAULT NULL,
  `aset2` bigint(20) DEFAULT NULL,
  `uang2` bigint(20) DEFAULT NULL,
  `alat2` bigint(20) DEFAULT NULL,
  `lainnya2` bigint(20) DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `dok` varchar(255) DEFAULT NULL,
  `gam1` varchar(255) DEFAULT NULL,
  `gam2` varchar(255) DEFAULT NULL,
  `bukti1` varchar(255) DEFAULT NULL,
  `bukti2` varchar(255) DEFAULT NULL,
  `bukti3` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'New',
  `is_r2` tinyint(1) NOT NULL DEFAULT 0,
  `kesimpulan` text DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `tindakan2` text DEFAULT NULL,
  `keputusan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `r2_at` timestamp NULL DEFAULT NULL,
  `r2_by` int(11) DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `closed_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_incident`
--

INSERT INTO `tbl_incident` (`id_incident`, `id_client`, `nm_inc`, `site`, `klien`, `tgl_incident`, `nama_gapara`, `jabatan`, `eksposure`, `keamanan`, `eskalasi`, `kt_ancaman`, `nama1`, `alm1`, `tlp1`, `tmp1`, `tgl1`, `agama1`, `nikah1`, `suami1`, `anak1`, `nama2`, `alm2`, `tlp2`, `tmp2`, `tgl2`, `agama2`, `nikah2`, `suami2`, `anak2`, `apa`, `dimana`, `dengan`, `lain`, `mengapa`, `bagaimana`, `bilamana`, `aset1`, `uang1`, `alat1`, `lainnya1`, `aset2`, `uang2`, `alat2`, `lainnya2`, `tindakan`, `dok`, `gam1`, `gam2`, `bukti1`, `bukti2`, `bukti3`, `status`, `is_r2`, `kesimpulan`, `saran`, `tindakan2`, `keputusan`, `created_at`, `created_by`, `updated_at`, `updated_by`, `r2_at`, `r2_by`, `closed_at`, `closed_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 'Incident Pertama', 'Sucofindo', 'Deri', '2021-08-01 00:13:00', 'Gapara', 'Jabatan', 'Eksposure', 'Keamanan', 'Ancaman', '[\"34\",\"26\",\"71\"]', 'pelaku', 'alamat', '081231234123', 'jakarta', '1990-02-20', 'Islam', 'Belum Menikah', 'Nama Istri', 'Anak', 'korban', 'alamat korban', '0912312312', 'Jakarta', '1980-01-10', 'Islam', 'Menikah', 'Nama Suami', 'Anak Korban', 'Kronologi Apa', 'Kronologi Dimana', 'Kronologi Dengan Apa', 'Informasi Lain', 'Mengapa R2', 'Bagaimana R2', 'Bilamana R2', 100000, 200000, 300000, 400000, 110000, 120000, 130000, 140000, '[{\"metode\":\"Test\",\"tw\":\"2021-08-01T00:46\",\"tindakan\":\"Tindakan pertama\",\"setuju\":\"Pimpinan\"}]', '', '', '', '', '', '', 'New', 1, '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[{\"metode\":\"\",\"tanggal\":\"\",\"tindakan\":\"\",\"dilakukan\":\"\"}]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2021-08-12 08:15:41', 1, '2021-08-30 22:36:41', 1, '2021-08-30 16:41:44', 1, '2021-08-30 16:44:21', 1, NULL, NULL),
(4, 1, 'Incident Kedua', 'Sucofindo', 'Deri', '2021-08-01 00:13:00', 'Gapara', NULL, NULL, NULL, NULL, NULL, 'pelaku', 'alamat', '081231234123', 'jakarta', '1990-02-20', 'Islam', 'Belum Menikah', 'Nama Istri', 'Anak', 'korban', 'alamat korban', '0912312312', 'Jakarta', '1980-01-10', 'Islam', 'Menikah', 'Nama Suami', 'Anak Korban', 'Kronologi Apa', 'Kronologi Dimana', 'Kronologi Dengan Apa', 'Informasi Lain', NULL, NULL, NULL, 100000, 200000, 300000, 400000, 110000, 120000, 130000, 140000, '[{\"metode\":\"Test\",\"tw\":\"2021-08-01T00:46\",\"tindakan\":\"Tindakan pertama\",\"setuju\":\"Pimpinan\"}]', '', '', '', '', '', '', 'New', 0, NULL, NULL, NULL, NULL, '2021-08-14 09:15:41', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', '', '', '', '', '', '', 'New', 0, NULL, NULL, NULL, NULL, '2021-09-15 03:11:31', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', '', '', '', '', '', '', 'New', 0, NULL, NULL, NULL, NULL, '2021-09-21 08:16:18', 2, '2021-09-21 08:16:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', '002.PNG', '003.PNG', '004.PNG', '005.PNG', '2017-06-21.jpg', '002.PNG', 'New', 0, NULL, NULL, NULL, NULL, '2021-09-21 08:17:47', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', '002.PNG', '003.PNG', '004.PNG', '005.PNG', '2017-06-21.jpg', '002.PNG', 'New', 0, NULL, NULL, NULL, NULL, '2021-09-21 08:17:58', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 'New', 0, NULL, NULL, NULL, NULL, '2021-09-21 08:18:31', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 'New', 0, NULL, NULL, NULL, NULL, '2021-09-21 08:19:48', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', '', '1632212398_lampiran_2_11_IMG1.PNG', '1632212398_lampiran_2_11_IMG2.PNG', '', '', '', 'New', 0, NULL, NULL, NULL, NULL, '2021-09-21 08:19:58', 2, '2021-09-21 08:19:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, '', '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', '0000-00-00', '', 'Belum Menikah', '', '', '', '', '', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '[{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"},{\"metode\":\"\",\"tw\":\"\",\"tindakan\":\"\",\"setuju\":\"\"}]', '', '', '', '', '', '', 'New', 0, NULL, NULL, NULL, NULL, '2021-12-17 09:19:34', 1, '2021-12-17 09:19:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `no_reg` varchar(255) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `departemen` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `pengemudi` text DEFAULT NULL,
  `kendaraan` text DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `syarat` text DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id_kendaraan`, `id_client`, `no_reg`, `tgl`, `pic`, `telp`, `departemen`, `jenis`, `pengemudi`, `kendaraan`, `tujuan`, `lokasi`, `syarat`, `lampiran`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, NULL, '2021-09-05 09:45:00', 'PIC 01', '12345', 'Dept 1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Akses untuk kegiatan hari ini', '[\"1\",\"3\"]', '[\"1\",\"3\"]', NULL, '2021-09-16 02:46:56', 1, NULL, NULL, NULL, NULL),
(2, 1, NULL, '2021-09-05 09:45:00', 'PIC 01', '12345', 'Dept 1', '1', '[{\"nama\":\"NAma 1\",\"ktp\":\"320809111111111111\",\"perusahaan\":\"Perusahaan 1\",\"badge\":\"Badge-001\",\"mulai\":\"09:45\",\"selesai\":\"12:45\"},{\"nama\":\"\",\"ktp\":\"\",\"perusahaan\":\"\",\"badge\":\"\",\"mulai\":\"\",\"selesai\":\"\"},{\"nama\":\"\",\"ktp\":\"\",\"perusahaan\":\"\",\"badge\":\"\",\"mulai\":\"\",\"selesai\":\"\"}]', '[{\"jenis\":\"SUV\",\"merk\":\"Triton\",\"plat\":\"B 1234 SCI\",\"validasi\":\"Valid\",\"mulai\":\"09:45\",\"selesai\":\"12:45\"},{\"jenis\":\"\",\"merk\":\"\",\"plat\":\"\",\"validasi\":\"\",\"mulai\":\"\",\"selesai\":\"\"},{\"jenis\":\"\",\"merk\":\"\",\"plat\":\"\",\"validasi\":\"\",\"mulai\":\"\",\"selesai\":\"\"}]', 'Akses untuk kegiatan hari ini', '[\"1\",\"3\"]', '[\"1\",\"3\"]', NULL, '2021-09-16 02:47:52', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manpower`
--

CREATE TABLE `tbl_manpower` (
  `id_manpower` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `tmp_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `maritial` varchar(255) DEFAULT NULL,
  `dependent` int(11) DEFAULT NULL,
  `tinggi` decimal(6,3) DEFAULT NULL,
  `berat` decimal(6,3) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `kta` varchar(255) DEFAULT NULL,
  `kta_exp` date DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `bank_acc` varchar(255) DEFAULT NULL,
  `contract` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_manpower`
--

INSERT INTO `tbl_manpower` (`id_manpower`, `id_client`, `ktp`, `name`, `jenis`, `tmp_lahir`, `tgl_lahir`, `gender`, `address`, `phone`, `email`, `maritial`, `dependent`, `tinggi`, `berat`, `npwp`, `kta`, `kta_exp`, `bank`, `bank_acc`, `contract`, `start`, `end`, `id`, `status`, `work`, `job`, `posisi`, `department`, `location`, `lampiran`, `foto`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, '3208091231231231', 'Test 1', 'PKWT', 'Jakarta', '2021-04-28', 'Male', 'Jakarta', '123123123123', 'test@gmail.com', 'Married', 2, '170.000', '80.000', '12312312312312', 'Gada Pratama', NULL, 'BCA', '123321123321', 'C10201/1230/123/123', '2020-10-10', '2022-10-10', 'ID-GPR-01', 'Active', 'Shift/Scheduled', 'Staff Officer', 'Staff', 'Industri', 'Kantor Pusat', NULL, NULL, '2021-09-16 04:07:35', 1, '2021-09-16 04:10:27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_ancaman`
--

CREATE TABLE `tbl_mst_ancaman` (
  `id_mst_ancaman` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_mst` int(11) NOT NULL DEFAULT 0,
  `nm_ancaman` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mst_ancaman`
--

INSERT INTO `tbl_mst_ancaman` (`id_mst_ancaman`, `id_client`, `id_mst`, `nm_ancaman`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 0, 'Ancaman Orang', '2021-07-17 20:22:51', 1, NULL, NULL, NULL, NULL),
(2, 1, 0, 'Ancaman Aset', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(3, 1, 0, 'Ancaman Informasi', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(4, 1, 0, 'Ancaman Teroris', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(5, 1, 0, 'Instabilitas Sosial', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(6, 1, 0, 'Bahaya Lingkungan', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(7, 1, 0, 'Bahaya Perjalanan', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(8, 1, 0, 'Pilihan Tidakan Terhadap Resiko', '2021-07-17 20:25:41', 1, NULL, NULL, NULL, NULL),
(9, 1, 1, 'Ancaman Orang Dalam', '2021-07-17 20:26:55', 1, NULL, NULL, NULL, NULL),
(10, 1, 1, 'Penculikan', '2021-07-17 20:26:55', 1, NULL, NULL, NULL, NULL),
(11, 1, 1, 'Pembunuhan', '2021-07-17 20:26:55', 1, NULL, NULL, NULL, NULL),
(12, 1, 1, 'Penyerangan / Perampokan', '2021-07-17 20:26:55', 1, NULL, NULL, NULL, NULL),
(13, 1, 1, 'Pemerasan / Intimidasi', '2021-07-17 20:26:55', 1, NULL, NULL, NULL, NULL),
(14, 1, 1, 'Pelecehan', '2021-07-17 20:26:55', 1, NULL, NULL, NULL, NULL),
(15, 1, 14, 'Pelecehan Nama Baik (Lisan/Tulisan)', '2021-07-17 20:27:48', 1, NULL, NULL, NULL, NULL),
(16, 1, 14, 'Fisik', '2021-07-17 20:27:48', 1, NULL, NULL, NULL, NULL),
(17, 1, 2, 'Demonstrasi & Pemblokiran', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(18, 1, 2, 'Penggelapan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(19, 1, 2, 'Penipuan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(20, 1, 2, 'Resiko Reputasi Perusahaan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(21, 1, 2, 'Tenaga Kerja', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(22, 1, 2, 'Pencurian', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(23, 1, 2, 'Perampokan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(24, 1, 2, 'Perampokan Bersenjata & Pembajakan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(25, 1, 2, 'Kerusakan berbahaya & sabotase', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(26, 1, 2, 'Pembakaran oleh seseorang', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(27, 1, 2, 'Penembakan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(28, 1, 2, 'Akses Kontrol', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(29, 1, 2, 'Kondisi Tidak Aman', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(30, 1, 2, 'Kondisi Tidak Selamat', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(31, 1, 2, 'Tindakan Mencurigakan', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(32, 1, 2, 'Penambang Ilegal', '2021-07-17 20:31:32', 1, NULL, NULL, NULL, NULL),
(33, 1, 17, 'Isu Keamanan', '2021-07-17 20:33:16', 1, NULL, NULL, NULL, NULL),
(34, 1, 17, 'Isu Masyarakat', '2021-07-17 20:33:16', 1, NULL, NULL, NULL, NULL),
(35, 1, 34, 'Limbah (B3 & Non)', '2021-07-17 20:34:22', 1, NULL, NULL, NULL, NULL),
(36, 1, 34, 'Aturan Perusahaan', '2021-07-17 20:34:22', 1, NULL, NULL, NULL, NULL),
(37, 1, 34, 'Sengketa Lahan', '2021-07-17 20:34:22', 1, NULL, NULL, NULL, NULL),
(38, 1, 19, 'Asett Perusahaan', '2021-07-17 20:36:16', 1, NULL, NULL, NULL, NULL),
(39, 1, 19, 'Keuangan', '2021-07-17 20:36:16', 1, NULL, NULL, NULL, NULL),
(40, 1, 19, 'Konflik Kepentingan', '2021-07-17 20:36:16', 1, NULL, NULL, NULL, NULL),
(41, 1, 19, 'Menyebarkan Informasi', '2021-07-17 20:36:16', 1, NULL, NULL, NULL, NULL),
(42, 1, 21, 'Rekruitmen', '2021-07-17 20:37:31', 1, NULL, NULL, NULL, NULL),
(43, 1, 21, 'Tanggungan', '2021-07-17 20:37:31', 1, NULL, NULL, NULL, NULL),
(44, 1, 21, 'Keuntungan', '2021-07-17 20:37:31', 1, NULL, NULL, NULL, NULL),
(45, 1, 22, 'Aset Kontraktor', '2021-07-17 20:37:31', 1, NULL, NULL, NULL, NULL),
(46, 1, 22, 'Aset Perusahaan', '2021-07-17 20:37:31', 1, NULL, NULL, NULL, NULL),
(47, 1, 46, 'Aset Operasional', '2021-07-17 20:38:03', 1, NULL, NULL, NULL, NULL),
(48, 1, 46, 'Aset Produksi', '2021-07-17 20:38:03', 1, NULL, NULL, NULL, NULL),
(49, 1, 23, 'Aset Perusahaan', '2021-07-17 20:38:45', 1, NULL, NULL, NULL, NULL),
(50, 1, 23, 'Aset Kontraktor', '2021-07-17 20:38:45', 1, NULL, NULL, NULL, NULL),
(51, 1, 23, 'Aset Personel', '2021-07-17 20:38:45', 1, NULL, NULL, NULL, NULL),
(52, 1, 28, 'Masuk Tanpa Ijin', '2021-07-17 20:39:52', 1, NULL, NULL, NULL, NULL),
(53, 1, 28, 'Upaya Infiltrasi', '2021-07-17 20:39:52', 1, NULL, NULL, NULL, NULL),
(54, 1, 28, 'Mengekor', '2021-07-17 20:39:52', 1, NULL, NULL, NULL, NULL),
(55, 1, 52, 'Area Terlarang', '2021-07-17 20:40:56', 1, NULL, NULL, NULL, NULL),
(56, 1, 52, 'Area Terbatas', '2021-07-17 20:40:56', 1, NULL, NULL, NULL, NULL),
(57, 1, 52, 'Area Umum', '2021-07-17 20:40:56', 1, NULL, NULL, NULL, NULL),
(58, 1, 54, 'Karyawan', '2021-07-17 20:40:56', 1, NULL, NULL, NULL, NULL),
(59, 1, 54, 'Non Karyawan', '2021-07-17 20:40:56', 1, NULL, NULL, NULL, NULL),
(60, 1, 56, 'Karyawan', '2021-07-17 20:42:21', 1, NULL, NULL, NULL, NULL),
(61, 1, 56, 'Bukan Karyawan', '2021-07-17 20:42:21', 1, NULL, NULL, NULL, NULL),
(62, 1, 57, 'Karyawan', '2021-07-17 20:42:21', 1, NULL, NULL, NULL, NULL),
(63, 1, 57, 'Bukan Karyawan', '2021-07-17 20:42:21', 1, NULL, NULL, NULL, NULL),
(64, 1, 30, 'Ijin Kerja', '2021-07-17 20:43:50', 1, NULL, NULL, NULL, NULL),
(65, 1, 30, 'Ijin Kendaraan', '2021-07-17 20:43:50', 1, NULL, NULL, NULL, NULL),
(66, 1, 30, 'Alat Pelindung Diri', '2021-07-17 20:43:50', 1, NULL, NULL, NULL, NULL),
(67, 1, 32, 'Penimbunan Stok', '2021-07-17 20:43:50', 1, NULL, NULL, NULL, NULL),
(68, 1, 32, 'Tanah Ijin Perusahaan', '2021-07-17 20:43:50', 1, NULL, NULL, NULL, NULL),
(69, 1, 3, 'Kejahatan Pencurian Informasi', '2021-07-17 20:45:09', 1, NULL, NULL, NULL, NULL),
(70, 1, 3, 'Kejahatan Kebocoran Informasi', '2021-07-17 20:45:09', 1, NULL, NULL, NULL, NULL),
(71, 1, 3, 'Kejahatan Manipulasi Informasi', '2021-07-17 20:45:09', 1, NULL, NULL, NULL, NULL),
(72, 1, 3, 'Kebocoran Informasi Tidak Sengaja', '2021-07-17 20:45:09', 1, NULL, NULL, NULL, NULL),
(73, 1, 3, 'Manipulasi Informasi yang Tidak Sengaja', '2021-07-17 20:45:09', 1, NULL, NULL, NULL, NULL),
(74, 1, 4, 'Serangan langsung ke Objek', '2021-07-17 20:49:28', 1, NULL, NULL, NULL, NULL),
(75, 1, 4, 'Efek Serangan bukan ke Objek', '2021-07-17 20:49:28', 1, NULL, NULL, NULL, NULL),
(76, 1, 4, 'Kekuatan Rezim', '2021-07-17 20:49:28', 1, NULL, NULL, NULL, NULL),
(77, 1, 4, 'Penahanan oleh Otoritas', '2021-07-17 20:49:28', 1, NULL, NULL, NULL, NULL),
(78, 1, 4, 'Tekanan Regional', '2021-07-17 20:49:28', 1, NULL, NULL, NULL, NULL),
(79, 1, 5, 'Kerusuhan Warga', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(80, 1, 5, 'Aktifitas Sosial', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(81, 1, 5, 'Isu Agama', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(82, 1, 5, 'Perang Saudara', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(83, 1, 5, 'Kerusuhan Militer', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(84, 1, 5, 'Aktifitas OPM', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(85, 1, 6, 'Kebakaran', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(86, 1, 6, 'Bencana Alam', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(87, 1, 6, 'Banjir', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(88, 1, 6, 'Tanah Longsor', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(89, 1, 6, 'Angin Topan', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(90, 1, 6, 'Tsunami', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(91, 1, 6, 'Erupsi', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(92, 1, 6, 'Gempa Bumi', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(93, 1, 6, 'Pandemi', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(94, 1, 7, 'Penerbangan', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(95, 1, 7, 'Kecelakaan Lalu Lintas', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(96, 1, 7, 'Infrastruktur', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(97, 1, 7, 'Sentimen Anti Asing', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(98, 1, 7, 'Aktifitas Drone(UAV)', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(99, 1, 8, 'Toleransi', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(100, 1, 8, 'Negosiasi', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(101, 1, 8, 'Transfer Resiko', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(102, 1, 8, 'Mengakhiri Resiko', '2021-07-17 20:49:29', 1, NULL, NULL, NULL, NULL),
(103, 1, 0, 'Coba rubah', '2021-07-17 20:25:41', 1, '2021-07-21 07:05:38', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_non_conformity`
--

CREATE TABLE `tbl_non_conformity` (
  `id_non_conformity` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tgl` datetime DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `pelapor` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `temuan` text DEFAULT NULL,
  `dokumentasi` text DEFAULT NULL,
  `penanggung_jawab` varchar(255) DEFAULT NULL,
  `dept2` varchar(255) DEFAULT NULL,
  `tgl2` datetime DEFAULT NULL,
  `analisa` text DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `batas` date DEFAULT NULL,
  `reviewer` varchar(255) DEFAULT NULL,
  `dept3` varchar(255) DEFAULT NULL,
  `tanggal_review` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `closed_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_non_conformity`
--

INSERT INTO `tbl_non_conformity` (`id_non_conformity`, `id_client`, `tgl`, `lokasi`, `pelapor`, `dept`, `jenis`, `temuan`, `dokumentasi`, `penanggung_jawab`, `dept2`, `tgl2`, `analisa`, `tindakan`, `batas`, `reviewer`, `dept3`, `tanggal_review`, `status`, `catatan`, `created_at`, `created_by`, `updated_at`, `updated_by`, `closed_at`, `closed_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, '2021-07-21 15:38:00', 'Pagar sebelah barat area jetty', 'Erwin Indrayana', 'Marine', 'Permasalahan', '- Ditemukan pagar rusak di sebelah barat area jetty\n<br>- Terdapat nelayan yang melakukan aktivitas di sekitar jetty', '[\"\",\"\",\"\",\"\"]', 'Budiman Harjono', 'General Affair & Security', '2021-09-07 14:51:10', '- Pagar rusak kemungkinan disebabkan oleh faktor alam (korosi akibat terkena air laut)\r\n- Security belum konsisten dalam melakukan pelarangan terhadap nelayan yang melakukan aktivitas sekitar jetty\r\n', '- Mengajukan anggaran untuk perbaikan pagar di area jetty & menginstruksikan bagian security untuk melakukan perhatian lebih terhadap area sekitar pagar yang rusak.\r\n- Mengingatkan anggota security yang melakukan penjagaan di area jetty untuk menegur & melakukan pelarangan terhadap nelayan yang melakukan aktivitas disekitar jetty\r\n', '2021-08-21', 'Supriono', 'Dept. Compliance', '2021-08-30 00:00:00', 'Close', 'Agar dipastikan progress pengajuan anggaran & realisasi perbaikan pagarnya.', '2021-09-07 08:40:48', 1, '2021-09-07 12:53:45', 1, '2021-09-07 07:53:45', 1, NULL, NULL),
(2, 1, '2021-09-09 10:19:00', 'Jakarta', 'Erwin Indrayana', 'Marine', 'Permasalahan', '-Temuan 1', '[\"\",\"\",\"\",\"\"]', 'Budiman Harjono', 'General Affair & Security', '2021-09-09 05:20:51', '- Penyebab', '- tindakan', '2021-09-16', 'Supriono', 'Dept. Compliance', '2021-09-09 00:00:00', 'Close', '- Catatan', '2021-09-09 03:20:06', 1, '2021-09-09 03:21:33', 1, '2021-09-08 22:21:33', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_risk`
--

CREATE TABLE `tbl_risk` (
  `id_risk` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `aktivitas` varchar(255) DEFAULT NULL,
  `aset` varchar(255) DEFAULT NULL,
  `ancaman` varchar(255) DEFAULT NULL,
  `pengendalian` varchar(255) DEFAULT NULL,
  `kerawanan` varchar(255) DEFAULT NULL,
  `peluang` smallint(6) DEFAULT NULL,
  `keparahan` smallint(6) DEFAULT NULL,
  `risiko` smallint(6) DEFAULT NULL,
  `mitigasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_risk`
--

INSERT INTO `tbl_risk` (`id_risk`, `id_client`, `aktivitas`, `aset`, `ancaman`, `pengendalian`, `kerawanan`, `peluang`, `keparahan`, `risiko`, `mitigasi`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 'Aktivitas 1', 'Aset 1', 'Ancaman 1', 'Pengendalian 1', 'Kerawanan 1', 2, 3, 0, 'Mitigasi 1', '2021-09-07 15:28:21', 1, NULL, NULL, NULL, NULL),
(2, 1, 'Aktivitas 2', 'Aset 2', 'Ancaman 2', 'Pengendalian 2', 'Kerawanan 2', 3, 1, 3, 'Mitigasi 2', '2021-09-07 15:32:43', 1, NULL, NULL, NULL, NULL),
(3, 1, 'Aktivitas 3', 'Aset 3', 'Ancaman 3', 'Pengendalian 3', 'Kerawanan 3', 2, 3, 0, 'Mitigasi 3', '2021-09-15 03:10:50', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `id_tamu` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `no_reg` varchar(255) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `departemen` varchar(255) DEFAULT NULL,
  `temui` varchar(255) DEFAULT NULL,
  `pengunjung` text DEFAULT NULL,
  `kendaraan` varchar(255) DEFAULT NULL,
  `no_kendaraan` varchar(255) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `syarat` text DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`id_tamu`, `id_client`, `no_reg`, `tgl`, `pic`, `telp`, `departemen`, `temui`, `pengunjung`, `kendaraan`, `no_kendaraan`, `tujuan`, `lokasi`, `syarat`, `lampiran`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(2, 1, NULL, '2021-08-31 13:56:00', 'Admin', '12345', 'Security', 'Deri', '[{\"nama\":\"Pengunjung 1\",\"ktp\":\"12345\",\"perusahaan\":\"OPerusahaan A\",\"badge\":\"1234\",\"mulai\":\"13:00\",\"selesai\":\"15:00\"},{\"nama\":\"\",\"ktp\":\"\",\"perusahaan\":\"\",\"badge\":\"\",\"mulai\":\"\",\"selesai\":\"\"},{\"nama\":\"\",\"ktp\":\"\",\"perusahaan\":\"\",\"badge\":\"\",\"mulai\":\"\",\"selesai\":\"\"}]', 'Test', 'B 1234 C', 'Tujuan kunjungan', '[\"1\",\"2\"]', '[\"1\",\"2\"]', NULL, '2021-08-31 06:57:11', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `unit`, `jabatan`, `perusahaan`, `telp`, `akses`, `status`) VALUES
(1, 'm.deri', '7c79dd68b400e6b0c9f99f8f221dae26', 'Muhammad Deri Ekaputra', 'drx.mde@gmail.com', 'SBU Industri', 'Programmer', 'PT. SUCOFINDO', '081322277242', 'superadmin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_aset`
--
ALTER TABLE `mst_aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `old_tbl_incident`
--
ALTER TABLE `old_tbl_incident`
  ADD PRIMARY KEY (`id_incident`);

--
-- Indexes for table `old_tbl_incident_doc`
--
ALTER TABLE `old_tbl_incident_doc`
  ADD PRIMARY KEY (`id_incident_doc`);

--
-- Indexes for table `old_tbl_incident_follow`
--
ALTER TABLE `old_tbl_incident_follow`
  ADD PRIMARY KEY (`id_incident_follow`);

--
-- Indexes for table `old_tbl_incident_saran`
--
ALTER TABLE `old_tbl_incident_saran`
  ADD PRIMARY KEY (`id_incident_saran`);

--
-- Indexes for table `tbl_activity_program`
--
ALTER TABLE `tbl_activity_program`
  ADD PRIMARY KEY (`id_activiry_program`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_category_group`
--
ALTER TABLE `tbl_category_group`
  ADD PRIMARY KEY (`tbl_category_group`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tbl_client_user`
--
ALTER TABLE `tbl_client_user`
  ADD PRIMARY KEY (`id_client_user`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`id_complaint`);

--
-- Indexes for table `tbl_daily_cms`
--
ALTER TABLE `tbl_daily_cms`
  ADD PRIMARY KEY (`id_daily_cms`);

--
-- Indexes for table `tbl_daily_finding`
--
ALTER TABLE `tbl_daily_finding`
  ADD PRIMARY KEY (`id_daily_finding`) USING BTREE;

--
-- Indexes for table `tbl_daily_finding_img`
--
ALTER TABLE `tbl_daily_finding_img`
  ADD PRIMARY KEY (`id_daily_finding_img`);

--
-- Indexes for table `tbl_daily_guard`
--
ALTER TABLE `tbl_daily_guard`
  ADD PRIMARY KEY (`id_daily_guard`);

--
-- Indexes for table `tbl_daily_guard_img`
--
ALTER TABLE `tbl_daily_guard_img`
  ADD PRIMARY KEY (`id_daily_guard_img`);

--
-- Indexes for table `tbl_daily_hse`
--
ALTER TABLE `tbl_daily_hse`
  ADD PRIMARY KEY (`id_daily_hse`);

--
-- Indexes for table `tbl_daily_security`
--
ALTER TABLE `tbl_daily_security`
  ADD PRIMARY KEY (`id_daily_security`);

--
-- Indexes for table `tbl_daily_security_new`
--
ALTER TABLE `tbl_daily_security_new`
  ADD PRIMARY KEY (`id_daily_security_new`);

--
-- Indexes for table `tbl_daily_security_new_img`
--
ALTER TABLE `tbl_daily_security_new_img`
  ADD PRIMARY KEY (`id_daily_security_new_img`);

--
-- Indexes for table `tbl_daily_uav`
--
ALTER TABLE `tbl_daily_uav`
  ADD PRIMARY KEY (`id_daily_uav`);

--
-- Indexes for table `tbl_daily_verbal`
--
ALTER TABLE `tbl_daily_verbal`
  ADD PRIMARY KEY (`id_daily_verbal`);

--
-- Indexes for table `tbl_daily_verbal_img`
--
ALTER TABLE `tbl_daily_verbal_img`
  ADD PRIMARY KEY (`id_daily_verbal_img`);

--
-- Indexes for table `tbl_incident`
--
ALTER TABLE `tbl_incident`
  ADD PRIMARY KEY (`id_incident`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `tbl_manpower`
--
ALTER TABLE `tbl_manpower`
  ADD PRIMARY KEY (`id_manpower`);

--
-- Indexes for table `tbl_mst_ancaman`
--
ALTER TABLE `tbl_mst_ancaman`
  ADD PRIMARY KEY (`id_mst_ancaman`);

--
-- Indexes for table `tbl_non_conformity`
--
ALTER TABLE `tbl_non_conformity`
  ADD PRIMARY KEY (`id_non_conformity`);

--
-- Indexes for table `tbl_risk`
--
ALTER TABLE `tbl_risk`
  ADD PRIMARY KEY (`id_risk`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_aset`
--
ALTER TABLE `mst_aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `old_tbl_incident`
--
ALTER TABLE `old_tbl_incident`
  MODIFY `id_incident` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `old_tbl_incident_doc`
--
ALTER TABLE `old_tbl_incident_doc`
  MODIFY `id_incident_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `old_tbl_incident_follow`
--
ALTER TABLE `old_tbl_incident_follow`
  MODIFY `id_incident_follow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `old_tbl_incident_saran`
--
ALTER TABLE `old_tbl_incident_saran`
  MODIFY `id_incident_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_activity_program`
--
ALTER TABLE `tbl_activity_program`
  MODIFY `id_activiry_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_category_group`
--
ALTER TABLE `tbl_category_group`
  MODIFY `tbl_category_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_client_user`
--
ALTER TABLE `tbl_client_user`
  MODIFY `id_client_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `id_complaint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_daily_cms`
--
ALTER TABLE `tbl_daily_cms`
  MODIFY `id_daily_cms` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_daily_finding`
--
ALTER TABLE `tbl_daily_finding`
  MODIFY `id_daily_finding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_daily_finding_img`
--
ALTER TABLE `tbl_daily_finding_img`
  MODIFY `id_daily_finding_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_daily_guard`
--
ALTER TABLE `tbl_daily_guard`
  MODIFY `id_daily_guard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_daily_guard_img`
--
ALTER TABLE `tbl_daily_guard_img`
  MODIFY `id_daily_guard_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_daily_hse`
--
ALTER TABLE `tbl_daily_hse`
  MODIFY `id_daily_hse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_daily_security`
--
ALTER TABLE `tbl_daily_security`
  MODIFY `id_daily_security` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_daily_security_new`
--
ALTER TABLE `tbl_daily_security_new`
  MODIFY `id_daily_security_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_daily_security_new_img`
--
ALTER TABLE `tbl_daily_security_new_img`
  MODIFY `id_daily_security_new_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_daily_uav`
--
ALTER TABLE `tbl_daily_uav`
  MODIFY `id_daily_uav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_daily_verbal`
--
ALTER TABLE `tbl_daily_verbal`
  MODIFY `id_daily_verbal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_daily_verbal_img`
--
ALTER TABLE `tbl_daily_verbal_img`
  MODIFY `id_daily_verbal_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_incident`
--
ALTER TABLE `tbl_incident`
  MODIFY `id_incident` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_manpower`
--
ALTER TABLE `tbl_manpower`
  MODIFY `id_manpower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mst_ancaman`
--
ALTER TABLE `tbl_mst_ancaman`
  MODIFY `id_mst_ancaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_non_conformity`
--
ALTER TABLE `tbl_non_conformity`
  MODIFY `id_non_conformity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_risk`
--
ALTER TABLE `tbl_risk`
  MODIFY `id_risk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
