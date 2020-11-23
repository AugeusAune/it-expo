-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 05:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `pesan`) VALUES
(3, 'asdsa asdas', 'asdsa@gmail.com', 'asdsad'),
(4, 'adas asdsada', 'asdsa@gmail.com', 'asdad'),
(5, 'asdadas asdsad', 'asdsa@gmail.com', 'asdadsa'),
(6, 'asdsad asdsad', 'asdsa@gmail.com', 'asddasa'),
(7, 'xzczx zxczx', 'asdsa@gmail.com', 'zxczxcczxczxczcz'),
(12, 'asdas asdas', 'farhanaditya134@gmail.com', 'asdads'),
(13, 'asdda asdadsadas', 'farhanaditya134@gmail.com', 'asdasdasdsa'),
(14, 'asdas asdad', 'kjsdkjaskj@gmail.com', 'asdad'),
(15, 'asdnalk d askjdak', 'sdadasdas@gmail.com', 'asdisad'),
(16, 'farhan aditya', 'farhanaditya134@gmail.com', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `data_cagar`
--

CREATE TABLE `data_cagar` (
  `id` int(11) NOT NULL,
  `nama_cagar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_cagar`
--

INSERT INTO `data_cagar` (`id`, `nama_cagar`, `lokasi`, `kategori`, `provinsi`, `gambar`, `deskripsi`) VALUES
(3, 'prambanan', 'jawa tengah', 'bangunan', 'Jawa Tengah', '_QTeGT478_81.png', 'Candi Prambanan atau Candi Roro Jonggrang (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦥꦿꦩ꧀ꦧꦤꦤ꧀, translit. Candhi Prambanan) adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wisnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah. Berdasarkan prasasti Siwagrha nama asli kompleks candi ini adalah Siwagrha (bahasa Sanskerta yang bermakna \'Rumah Siwa\'), dan memang di garbagriha (ruang utama) candi ini bersemayam arca Siwa Mahadewa setinggi tiga meter yang menujukkan bahwa di candi ini dewa Siwa lebih diutamakan.\r\n\r\nKompleks candi ini terletak di kecamatan Prambanan, Sleman, DI Yogyakarta dan kecamatan Prambanan, Kabupaten Klaten, Jawa Tengah[1] kurang lebih 17 kilometer timur laut Yogyakarta, 50 kilometer barat daya Surakarta dan 120 kilometer selatan Semarang, persis di perbatasan antara provinsi Jawa Tengah dan Daerah Istimewa Yogyakarta.[2] Letaknya sangat unik, Candi Prambanan terletak di wilayah administrasi desa Bokoharjo, Prambanan, Sleman, sedangkan pintu masuk kompleks Candi Prambanan terletak di wilayah adminstrasi desa Tlogo, Prambanan, Klaten.\r\n\r\nCandi ini adalah termasuk Situs Warisan Dunia UNESCO, candi Hindu terbesar di Indonesia, sekaligus salah satu candi terindah di Asia Tenggara. Arsitektur bangunan ini berbentuk tinggi dan ramping sesuai dengan arsitektur Hindu pada umumnya dengan candi Siwa sebagai candi utama memiliki ketinggian mencapai 47 meter menjulang di tengah kompleks gugusan candi-candi yang lebih kecil.[3] Sebagai salah satu candi termegah di Asia Tenggara, candi Prambanan menjadi daya tarik kunjungan wisatawan dari seluruh dunia.[4]\r\n\r\nMenurut prasasti Siwagrha, candi ini mulai dibangun pada sekitar tahun 850 masehi oleh Rakai Pikatan, dan terus dikembangkan dan diperluas oleh Balitung Maha Sambu, pada masa kerajaan Medang Mataram.'),
(4, 'borobudur', 'bali', 'bangunan', 'bali', 'Borobudur.jpg', 'Borobudur (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦧꦫꦧꦸꦝꦸꦂ, translit. Candhi Barabudhur) adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi berbentuk stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia[1][2], sekaligus salah satu monumen Buddha terbesar di dunia[3].\r\n\r\nMonumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha[4]. Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia[3]. Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).\r\n\r\nMonumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha.[5] Para peziarah masuk melalui sisi timur dan memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.\r\n\r\nMenurut bukti-bukti sejarah, Borobudur ditinggalkan pada abad ke-14 seiring melemahnya pengaruh kerajaan Hindu dan Buddha di Jawa serta mulai masuknya pengaruh Islam.[6] Dunia mulai menyadari keberadaan bangunan ini sejak ditemukan 1814 oleh Sir Thomas Stamford Raffles, yang saat itu menjabat sebagai Gubernur Jenderal Inggris atas Jawa. Sejak saat itu Borobudur telah mengalami serangkaian upaya penyelamatan dan pemugaran (perbaikan kembali). Proyek pemugaran terbesar digelar pada kurun waktu 1975 hingga 1982 atas upaya Pemerintah Republik Indonesia dan UNESCO, kemudian situs bersejarah ini masuk dalam daftar Situs Warisan Dunia.[3]\r\n\r\nBorobudur kini masih digunakan sebagai tempat ziarah keagamaan; tiap tahun umat Buddha yang datang dari seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Dalam dunia pariwisata, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi wisatawan.['),
(5, 'Rencong', 'Aceh', 'benda', 'Aceh', '389px-COLLECTIE_TROPENMUSEUM_Dolk_met_rechthoekig_gebogen_hoornen_greep_en_houten_schede_TMnr_151-19.jpg', 'Rencong (Aksara Jawoë : رنچوڠ) atau yang dalam Bahasa Aceh yang ditulis dengan huruf latin dibaca &quot;Rintjong&quot; adalah senjata khas Suku Aceh. Rencong merupakan simbol identitas diri, keberanian, dan ketangguhan Suku Aceh. Ada beberapa jenis rencong. Pertama Rencong Pudoi yaitu Rencong yang belum sempurna pada bentuk gagangnya. Kedua Rencong Meukure yaitu Rencong yang diberi hiasan seperti gambar hewan, akar kayu, dan bunga di bagian mata pisaunya. Ketiga Rencong Meupucok yaitu Rencong yang di atas gagangnya ada sebuah pucuk yang biasanya terbuat dari emas. Keempat Rencong Meucugek, yaitu Rencong yang pada gagangnya ada suatu bentuk cugek (perekat dan bergagang lengkung 90 derajat)'),
(6, 'Keris', 'Jawa', 'benda', 'Jawa timur', '270px-Kris_and_scabbard.jpg', 'Keris adalah senjata tikam golongan belati (berujung runcing dan tajam pada kedua sisinya) dengan banyak fungsi budaya yang dikenal di kawasan Nusantara bagian barat dan tengah. Bentuknya khas dan mudah dibedakan dari senjata tajam lainnya karena tidak simetris di bagian pangkal yang melebar, sering kali bilahnya berkelok-kelok, dan banyak di antaranya memiliki pamor (damascene), yaitu terlihat serat-serat lapisan logam cerah pada helai bilah. Jenis senjata tikam yang memiliki kemiripan dengan keris adalah badik. Senjata tikam lain asli Nusantara adalah kerambit.\r\n\r\nPada masa lalu keris berfungsi sebagai senjata dalam duel/peperangan,[1] sekaligus sebagai benda pelengkap sesajian. Pada penggunaan masa kini, keris lebih merupakan benda aksesori (ageman) dalam berbusana, memiliki sejumlah simbol budaya, atau menjadi benda koleksi yang dinilai dari segi estetikanya.\r\n\r\nPenggunaan keris tersebar pada masyarakat penghuni wilayah yang pernah terpengaruh oleh Majapahit, seperti Jawa, Madura, Nusa Tenggara, Sumatra, pesisir Kalimantan, sebagian Sulawesi, Semenanjung Malaya, Thailand Selatan, dan Filipina Selatan (Mindanao). Keris Mindanao dikenal sebagai kalis. Keris di setiap daerah memiliki kekhasan sendiri-sendiri dalam penampilan, fungsi, teknik garapan, serta peristilahan.\r\n\r\nKeris Indonesia telah terdaftar di UNESCO sebagai Warisan Budaya Dunia Non-Bendawi Manusia sejak 2005'),
(7, 'Tari Piring', 'Solok', 'tarian', 'Sumatra barat', '390px-Tari_Piring_di_Pesisir_Selatan.jpg', 'Tari piring (bahasa Minang: tari piriang) adalah tarian tradisional Minangkabau yang menampilkan atraksi menggunakan piring. Para penari mengayunkan piring di tangan mengikuti gerakan-gerakan cepat yang teratur, tanpa satu pun piring terlepas dari tangan.[1] Gerakannya diambil dari langkah dalam silat Minangkabau atau silek.[2]\r\n\r\nTari ini dipopulerkan oleh Huriah Adam. Saat ini, tari piring dipertunjukkan untuk penyambutan tamu terhormat atau pembukaan upacara adat. Bersama dengan tari saman, pendet, dan jaipong, tari ini menjadi tarian populer Indonesia yang kerap ditampilkan di ajang promosi pariwisata dan kebudayaan Indonesia.'),
(8, 'Tari Jaipong', 'Jawa', 'tarian', 'Jawa Barat', '290px-Jaipongan.jpg', 'Jaipongan terlahir melalui proses kreatif dari tangan dingin H. Suanda sekitar tahun 1976 di Karawang, jaipongan merupakan garapan yang menggabungkan beberapa elemen seni tradisi Karawang seperti pencak silat, wayang golek, topeng banjet, ketuk tilu dan lain-lain. Jaipongan di Karawang pesat pertumbuhannya di mulai tahun 1976, ditandai dengan munculnya rekaman jaipongan SUANDA GROUP dengan instrumen sederhana yang terdiri dari gendang, ketuk, kecrek, goong, rebab dan sinden atau juru kawih. Dengan media kaset rekaman tanpa label tersebut (indi label) jaipongan mulai didistribusikan secara swadaya oleh H Suanda di wilayah Karawang dan sekitarnya. Tak disangka Jaipongan mendapat sambutan hangat, selanjutnya jaipongan menjadi sarana hiburan masyarakat Karawang dan mendapatkan apresiasi yang cukup besar dari segenap masyarakat Karawang dan menjadi fenomena baru dalam ruang seni budaya Karawang, khususnya seni pertunjukan hiburan rakyat. Posisi Jaipongan pada saat itu menjadi seni pertunjukan hiburan alternatif dari seni tradisi yang sudah tumbuh dan berkembang lebih dulu di Karawang seperti pencak silat, topeng banjet, ketuk tilu, tarling dan wayang golek. Keberadaan jaipong memberikan warna dan corak yang baru dan berbeda dalam bentuk pengemasannya, mulai dari penataan pada komposisi musikalnya hingga dalam bentuk komposisi tariannya.\r\n\r\nMungkin di antara kita hanya tahu asal tari jaipong dari Bandung ataupun malah belum mengetahui dari mana asalnya. Dikutip dari ucapan kepala Dinas Kebudayaan dan Pariwisata (Disbudpar) Karawang, Acep Jamhuri “Jaipong itu asli Karawang. Lahir sejak tahun 1979 yang berasal dari tepak Topeng. Kemudian dibawa ke Bandung oleh seniman di sana, Gugum Gumilar. Akhirnya dikemas dengan membuat rekaman. Seniman-seniman Karawang dibawa bersama Suwanda. Ketika sukses, yang bagus malah Bandung. Karawang hanya dikenal gendangnya atau nayaga (pemain musik). Makanya sekarang kami di Disbudpar akan mencoba menggali kembali seni tari Jaipong bahwa ini seni yang sesungguhnya berasal dari Karawang”. Tari ini dibawa ke kota Bandung oleh Gugum Gumbira, sekitar tahun 1960-an, dengan tujuan untuk mengembangkan tarian asal Karawang di kota Bandung yang menciptakan suatu jenis musik dan tarian pergaulan yang digali dari kekayaan seni tradisi rakyat Nusantara, khususnya Jawa Barat. Meskipun termasuk seni tari kreasi yang relatif baru, jaipongan dikembangkan berdasarkan kesenian rakyat yang sudah berkembang sebelumnya, seperti Ketuk Tilu, Kliningan, serta Ronggeng. Perhatian Gumbira pada kesenian rakyat yang salah satunya adalah Ketuk Tilu menjadikannya mengetahui dan mengenal betul perbendaharan pola-pola gerak tari tradisi yang ada pada Kliningan/Bajidoran atau Ketuk Tilu. Gerak-gerak bukaan, pencugan, nibakeun dan beberapa ragam gerak mincid dari beberapa kesenian menjadi inspirasi untuk mengembangkan kesenian jaipongan.\r\n\r\nSebelum bentuk seni pertunjukan ini muncul, ada beberapa pengaruh yang melatarbelakangi terbentuknya tari pergaulan ini. Di kawasan perkotaan Priangan misalnya, pada masyarakat elite, tari pergaulan dipengaruhi dansa Ball Room dari Barat. Sementara pada kesenian rakyat, tari pergaulan dipengaruhi tradisi lokal. Pertunjukan tari-tari pergaulan tradisional tak lepas dari keberadaan ronggeng dan pamogoran. Ronggeng dalam tari pergaulan tidak lagi berfungsi untuk kegiatan upacara, tetapi untuk hiburan atau cara bergaul. Keberadaan ronggeng dalam seni pertunjukan memiliki daya tarik yang mengundang simpati kaum pamogoran. Misalnya pada tari Ketuk Tilu yang begitu dikenal oleh masyarakat Sunda, diperkirakan kesenian ini populer sekitar tahun 1916. Sebagai seni pertunjukan rakyat, kesenian ini hanya didukung oleh unsur-unsur sederhana, seperti waditra yang meliputi rebab, kendang, dua buah kulanter, tiga buah ketuk, dan gong. Demikian pula dengan gerak-gerak tarinya yang tidak memiliki pola gerak yang baku, kostum penari yang sederhana sebagai cerminan kerakyatan.\r\n\r\nSeiring dengan memudarnya jenis kesenian di atas, mantan pamogoran (penonton yang berperan aktif dalam seni pertunjukan Ketuk Tilu/Doger/Tayub) beralih perhatiannya pada seni pertunjukan Kliningan, yang di daerah Pantai Utara Jawa Barat (Karawang, Bekasi, Purwakarta, Indramayu, dan Subang) dikenal dengan sebutan Kliningan Bajidoran yang pola tarinya maupun peristiwa pertunjukannya mempunyai kemiripan dengan kesenian sebelumnya (Ketuk Tilu/Doger/Tayub). Dalam pada itu, eksistensi tari-tarian dalam Topeng Banjet cukup digemari, khususnya di Karawang, di mana beberapa pola gerak Bajidoran diambil dari tarian dalam Topeng Banjet ini. Secara koreografis tarian itu masih menampakkan pola-pola tradisi (Ketuk Tilu) yang mengandung unsur gerak-gerak bukaan, pencugan, nibakeun dan beberapa ragam gerak mincid yang pada gilirannya menjadi dasar penciptaan tari Jaipongan. Beberapa gerak-gerak dasar tari Jaipongan selain dari Ketuk Tilu, Ibing Bajidor serta Topeng Banjet adalah Tayuban dan Pencak Silat.\r\n\r\nTarian ini mulai dikenal luas sejak 1970-an. Kemunculan tarian karya Gugum Gumbira pada awalnya disebut Ketuk Tilu perkembangan, yang memang karena dasar tarian itu merupakan pengembangan dari Ketuk Tilu. Karya pertama Gugum Gumbira masih sangat kental dengan warna ibing Ketuk Tilu, baik dari segi koreografi maupun iringannya, yang kemudian tarian itu menjadi populer dengan sebutan Jaipongan.'),
(9, 'Angklung', 'Sunda', 'alatmusik', 'Jawa Barat', '312px-Two-pitch_Angklung.jpg', 'Angklung (Aksara Sunda Baku: ᮃᮀᮊᮣᮥᮀ) adalah alat musik multitonal (bernada ganda) yang secara tradisional berkembang dalam masyarakat Sunda di Suku Sunda Alat musik ini dibuat dari bambu, dibunyikan dengan cara digoyangkan (bunyi disebabkan oleh benturan badan pipa bambu) sehingga menghasilkan bunyi yang bergetar dalam susunan nada 2, 3, sampai 4 nada dalam setiap ukuran, baik besar maupun kecil. Dictionary of the Sunda Language karya Jonathan Rigg, yang diterbitkan pada tahun 1862 di Batavia, menuliskan bahwa angklung adalah alat musik yang terbuat dari pipa-pipa bambu yang dipotong ujung-ujungnya menyerupai pipa-pipa dalam suatu organ, dan diikat bersama dalam suatu bingkai, digetarkan untuk menghasilkan bunyi.'),
(10, 'Gamelan', 'Sunda', 'alatmusik', 'Jawa Barat', 'Asian_Civilisations_Museum,_Empress_Place_19,_Aug_06.JPG', 'Gamelan (bahasa Jawa: ꦒgaꦩꦼmêꦭꦤ꧀lan, translit. gamêlan, har. \'tabuhan\')[1] adalah musik ansambel tradisional Jawa, Sunda, dan Bali di Indonesia yang memiliki tangga nada pentatonis dalam sistem tangga nada (laras) slendro dan pelog. Terdiri dari instrumen musik perkusi yang digunakan pada seni musik karawitan. Instrumen yang paling umum digunakan adalah metalofon antara lain gangsa, gender, bonang, gong, saron, slenthem dimainkan oleh wiyaga menggunakan palu (pemukul) dan membranofon berupa kendhang yang dimainkan dengan tangan. Juga idiofon berupa kemanak dan metalofon lain adalah beberapa di antara instrumen gamelan yang umum digunakan. Instrumen lain termasuk xilofon berupa gambang, aerofon berupa seruling, kordofon berupa rebab, dan kelompok vokal disebut sindhen.[2]\r\n\r\nSeperangkat gamelan dikelompokkan menjadi dua, yakni gangsa pakurmatan dan gangsa ageng. Gangsa pakurmatan dimainkan untuk mengiringi hajad dalem (upacara adat karaton), jumenengan (upacara penobatan raja atau ratu), tingalan dalem (peringatan kenaikan takhta raja atau ratu), garebeg (upacara peristiwa penting), sekaten (upacara peringatan hari lahir Nabi Muhammad). Gangsa ageng dimainkan sebagai pengiring pergelaran seni budaya umumnya dipakai untuk mengiringi beksan (seni tari), wayang (seni pertunjukan), uyon-uyon (upacara adat/hajatan), dan lain-lain.[3] Saat ini, gamelan banyak digunakan di pulau Jawa, Madura, Bali, dan Lombok.'),
(11, 'Sasando', 'Pulau Rote', 'alatmusik', 'Nusantara Tenggara Timur', '219px-Sasando_PRJ.jpg', 'Sasando adalah sebuah alat musik dawai yang dimainkan dengan dipetik. Instrumen musik ini berasal dari pulau Rote, Nusa Tenggara Timur. Secara harfiah nama Sasando menurut asal katanya dalam bahasa Rote, sasandu, yang berasal dari kata Sandu atau Sanu yang artinya bergetar atau meronta. Suara sasando memiliki kemiripan dengan alat musik dawai lainnya seperti gitar, biola, kecapi, dan harpa. Sasando menurut Organologi tergolong dalam Sitar tabung Bambu.\r\n\r\nBagian utama sasando berbentuk tabung panjang yang biasa terbuat dari bambu. Lalu pada bagian tengah, melingkar dari atas ke bawah diberi ganjalan-ganjalan di mana senar-senar (dawai-dawai) yang direntangkan di tabung, dari atas kebawah bertumpu. Ganjalan-ganjalan ini memberikan nada yang berbeda-beda kepada setiap petikan senar. Lalu tabung sasando ini ditaruh dalam sebuah wadah yang terbuat dari semacam anyaman daun lontar yang dibuat seperti kipas. Wadah ini merupakan tempat resonansi sasando. Perkembangan Sasando berjalan seiring perubahan waktu. Modifikasi dan peningkatan kualitas bunyi mulai dilakukan. Agar mendapat bunyi yang lebih keras dan bisa disesuai dalam wadah pertunjukkan musik apapun maka Sasando akustik beralih perlahan lahan ke Sasando elektrik. Bentuk Sasandopun dimodifikasi dan dibuat lebih modern dan elegan. Pada tahun 2018 bahkan mulai diciptakan oleh seorang pemain Sasando profesional Natalino Mella Sasando yang diberi nama Sasando Bariton. Sasando bariton mempunyai bunyi yg berbeda dengan sasando pada umumnya. Sasando ini menggunakan jenis senar yang berbeda dalam ketebalannya dan mempunyai bunyi yang lebih bulat dan lebih terasa bassnya. Dilengkapi dengan 32 senar berwarna dan bridge yang bisa dipindahkan serta bisa dimainkan dengan teknik 10 jari yang membuat sasando ini akan lebih kaya untuk dipelajari'),
(12, 'Kolintang', 'Minahasa', 'alatmusik', 'Sulawesi Utara', 'Kolintang.JPG', 'Kolintang atau kulintang adalah alat musik yang terdiri dari barisan gong kecil yang diletakkan mendatar. Alat musik ini dimainkan dengan diiringi oleh gong tergantung yang lebih besar dan drum. Kolintang merupakan bagian dari budaya gong Asia Tenggara, yang telah dimainkan selama berabad-abad di Kepulauan Melayu Timur - Filipina, Indonesia Timur, Malaysia Timur, Brunei, dan Timor.[6] Alat musik ini berkembang dari tradisi pemberian isyarat sederhana menjadi bentuk seperti sekarang.[5] Kegunaannya bergantung pada peradaban yang menggunakannya. Dengan pengaruh dari Hindu, Buddha, Islam, Kristen, dan Barat, Kulintang merupakan tradisi gong yang terus berkembang.\r\n\r\nDi Indonesia, Kolintang dikenal sebagai alat musik perkusi bernada dari kayu yang berasal dari daerah Minahasa Sulawesi Utara. Kayu yang dipakai untuk membuat Kolintang adalah kayu lokal yang ringan namun kuat seperti kayu Telur (Alstonia sp),kayu Wenuang (Octomeles Sumatrana Miq),kayu Cempaka (Elmerrillia Tsiampaca),kayu Waru (Hibiscus Tiliaceus), dan sejenisnya yang mempunyai konstruksi serat paralel. Nama kolintang berasal dari suaranya: tong (nada rendah), ting (nada tinggi) dan tang (nada biasa). Dalam bahasa daerah, ajakan &quot;Mari kita lakukan TONG TING TANG&quot; adalah: &quot; Mangemo kumolintang&quot;. Ajakan tersebut akhirnya berubah menjadi kata kolintang.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`, `date`, `image`) VALUES
(1, 'farhan', 'farhanaditya134@gmail.com', '$2y$10$aDXpl2q645KuGdVvA4d9c.P8UnNvk.vFHsGCO/aCKg.EY7utOJG/a', '1', '1603949875', 'default.jpg'),
(2, 'bagas', 'bagas@gmail.com', '$2y$10$lqJPYgjsXw1rHWbDiWffA.23GlCUen/SXmqnfb0pOxyco9Vbk303q', '2', '1604031919', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_cagar`
--
ALTER TABLE `data_cagar`
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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_cagar`
--
ALTER TABLE `data_cagar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
