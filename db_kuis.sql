-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Nov 2017 pada 01.50
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kuis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paket`
--

CREATE TABLE IF NOT EXISTS `tbl_paket` (
  `paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(20) NOT NULL,
  PRIMARY KEY (`paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_paket`
--

INSERT INTO `tbl_paket` (`paket`, `nama_paket`) VALUES
(8, 'Paket 1'),
(9, 'Paket 2'),
(10, 'Paket 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE IF NOT EXISTS `tbl_soal` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `soal` varchar(2405) DEFAULT NULL,
  `pil_a` text,
  `pil_b` varchar(70) DEFAULT NULL,
  `pil_c` varchar(102) DEFAULT NULL,
  `pil_d` varchar(106) DEFAULT NULL,
  `jwban` int(1) DEFAULT NULL,
  `tipe` int(1) DEFAULT NULL,
  `paket` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paket` (`paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=190 ;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id`, `soal`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `jwban`, `tipe`, `paket`) VALUES
(1, 'Halaman web yang dapat diakses dan berinteraksi sesuai dengan keinginan merupakan teknologi web yang berbasis...', 'Konten', 'Struktural', 'Array', 'Dynamis', 0, 1, 8),
(2, 'WWW adalah singkatan dari.', 'World Wide Web', 'World Web Wide', 'Web World Wide', 'Web Wide World', 0, 1, 8),
(3, 'Standar yang digunakan untuk membentuk web...', 'URL, HTTP, HTML', 'WWW, HTTP, HTML', 'URL, WWW, HTML', 'URL, HTTP, WWW', 0, 1, 8),
(4, 'Website yang kontennya tidak perlu dilakukan perubahan dan perawatan dilakukan secara manual oleh seseorang termasuk jenis ..', 'Website Otomatis', 'Website Dinamis', 'Website Statis', 'Website semi Dinamis', 2, 1, 8),
(5, 'Konfigurasi sambungan ke internet secara garis besar adalah ...', 'Internet modem komputer', 'Modem komputer internet', 'Router modem internet', 'Komputer modem internet', 3, 1, 8),
(6, 'Ada beberapa cara popular yang digunakan untuk menata website, kecuali..', 'Sequential organization', 'Hierarchical organization', 'Kombinasi Sequential organization dan web organization', 'Web organization', 2, 1, 8),
(7, 'Website yang memberikan informasi yang ada terbatasi hanya sekitar satu topik tertentu adalah kategori...', 'Personal home page', 'Company Web Site', 'Special Interest Web Site', 'Standart Website', 2, 1, 8),
(8, 'Gambar dibawah ini termasuk penataan Website model..', 'Sequential organization', 'Hierarchical organization', 'Kombinasi Sequential dan Hierarchical organization', 'Web organization', 3, 1, 8),
(9, 'Apa kepanjangan dari HTML?', 'Hyper text mail language', 'Hyper team mode language', 'Hyper text mark up language', 'Hyper team master language', 2, 1, 8),
(11, 'Untuk membangun halaman HTML sederhana, Anda dapat menggunakan ...', 'Excel', 'Frame', 'Winamp', 'Notepad', 3, 1, 8),
(12, 'Untuk menambahkan bakcground gambar pada sebuah halaman web, kita dapat menggunakan tag', 'Backsong', 'Backsound', 'Background', 'Backsing', 1, 1, 8),
(13, 'Tag ini digunakan untuk memberikan judul pada title bar window. Tag ini berada pada tag head. Tag ini adalah', 'Head', 'Body', 'Frame', 'Title', 3, 1, 8),
(14, 'Tag ini ditulis setelah tag HTML. Tag ini berfungsi untuk menuliskan keterangan tentang dokumen web yang ditampilkan. Tag ini adalah', 'Head', 'Title', 'Body', 'Table', 0, 1, 8),
(15, 'Untuk memberi gambar pada belakang web diatur dengan mengubah nilai atribut .', 'Body background', 'Body', 'Font color', 'Head', 0, 1, 8),
(16, 'Macam-macam pembuatan dan pengaturan dalam CSS, kecuali ...', 'Style font', 'Style warna', 'Style jarak', 'Style jenis', 3, 1, 8),
(17, 'Selector yaitu ...', 'Bagian elemen HTML untuk mengatur style', 'Aturan dalam CSS untuk mengubah value yang dipilih', 'Sebuah property yang berada didalam tanda { }', 'Dapat berupa class dan value', 0, 1, 8),
(18, 'Di bawah ini manfaat penggunaan dari CSS dalam pembuatan web, kecuali ...', 'Kode HTML menjadi lebih sederhana', 'Kapasitas penyimpanan menjadi lebih besar, sehingga load lebih mudah', 'Mudah untuk mengubah tampilan', 'Dapat digunakan semua jenis web browser', 1, 1, 8),
(19, 'Listing merupakan....', 'Menampilkan window baru pada web', 'Menampilkan informasi dalam bentuk Daftar', 'Menampilkan informasi dalam bentuk kotak', 'Menampilkan informasi dalam bentuk abstrak', 1, 1, 8),
(20, 'Komponen yang digunakan sebagai masukan untuk data atau nilai pilihan dengan alternatif jawaban lebih dari 1 opsi pilihan. Tampilan dari komponen input ini berupa kotak yang dapat diberi tanda centang/contreng. Komponen tersebut adalah ....', 'Radio button', 'Input box', 'Select', 'Check box', 3, 1, 8),
(21, 'Sebuah alamat pada komputer agar komputer bisa saling terhubung dengan komputer lain disebut dengan...', 'IP Address', 'Broadcast Address', 'Netmask/Subnet Mask', 'Gateway', 0, 3, 8),
(22, 'IPv 4 Terdiri dari...', 'Net ID & Host ID', 'Kode Vendor & Kode Hardware', 'Broadcast & Netmask', 'FLSM & VLSM', 0, 3, 8),
(23, 'IPv4 terdiri dari berapa Byte dan bit .....', '40 bit & 32 Byte', '48 Byte & 6 bit', '4 Byte & 32 bit', '6 Byte & 32 bit', 2, 3, 8),
(30, 'Susunan kabel UTP yang benar untuk mengkoneksikan network card suatu PC ke hub adalah:', 'straight', 'crossover', 'rollover', 'coax', 0, 3, 8),
(31, 'Metode transmisi sinyal yang tidak terpengaruh noise / interferensi gelombang elektromagnet adalah:', 'wireless', 'akustik', 'optik', 'elektrik', 0, 3, 8),
(32, 'Pada LAN, konektor yang digunakan untuk terminasi kabel coaxial adalah:', 'BNC', 'RJ-11', 'RJ-45', 'Tipe-F', 2, 3, 8),
(33, 'Yang digunakan sebagai penghasil cahaya pada fiber optik multimode adalah:', 'LED', 'laser', 'dop', 'neon', 0, 3, 8),
(34, 'Pengukuran transfer data yang hanya memperhitungkan data yang terpakai aplikasi adalah pengukuran:', 'bandwidth', 'throughput', 'goodput', 'transfer-ratio', 2, 3, 8),
(35, 'Port-port yang termasuk dalam grup Well-known ports adalah:', 'port 0 1023', 'port 1024 49151', 'port 49152 65535', 'semua port', 0, 3, 8),
(36, 'Proses pada Lapisan Network yang bertugas mengkonversi segmet dari lapisan transport menjadi paket data unit baru khusus lapisan Network adalah:', 'pengalamatan', 'enkapsulasi', 'routing', 'dekapsulasi', 3, 3, 8),
(37, 'Informasi apa yang dapat ditemukan pada header protokol TCP maupun UDP?', 'sequence number', 'acknowledgment', 'flow control', 'source dan destination', 2, 3, 8),
(38, 'Port-port yang termasuk dalam grup Registered Ports adalah:', 'port 0 1023', 'port 1024 49151', 'port 49152 65535', 'semua port', 1, 3, 8),
(39, 'Proses pada Lapisan Network yang bertugas merubah paket data unit kembali menjadi segmen untuk diberikan kepada Lapisan Transport adalah:', 'pengalamatan', 'enkapsulasi', 'routing', 'dekapsulasi', 1, 3, 8),
(40, 'Mekanisme yang digunakan TCP untuk menyediakan fungsi flow control saat pengiriman segmen dari host asal ke host tujuan?', 'sequence number', 'pembuatan session', 'window size', 'acknowledgment', 3, 3, 8),
(41, 'Dibandingkan dengan SSH, kelemahan utama penggunaan dari telnet adalah:', 'tidak umum digunakan', 'tidak mendukung enkripsi', 'menghabiskan lebih banyak bandwidth', 'tidak mendukung proses otentikasi', 1, 3, 8),
(42, 'Protokol yang mendukung perpindahan file antara klien dan server adalah:', 'HTML', 'HTTP', 'FTP', 'Telnet', 1, 3, 8),
(43, 'Servis dari lapisan datalink yang mengatur bagaimana data ditempatkan pada suatu jaringan adalah?', 'framing', 'error detection', 'media access control', 'flow control', 1, 3, 8),
(44, 'Pada bagian frame yang mana informasi untuk mendeteksi error suatu frame dapat ditemukan?', 'data link', 'frame', 'header', 'trailer', 0, 3, 8),
(45, 'Susunan kabel UTP yang benar untuk mengkoneksikan network card suatu PC ke network card PC lain adalah:', 'straight', 'crossover', 'rollover', 'coax', 1, 3, 8),
(46, 'Yang digunakan sebagai penghasil cahaya pada fiber optik single-mode adalah:', 'LED', 'laser', 'dop', 'neon', 0, 3, 8),
(47, 'Sintaks java untuk melakukan kompilasi terhadap berkas program adalah :', 'java', 'javac', 'javaclass', 'javax', 1, 6, 8),
(48, 'Diantara perintah untuk mencetak berikut, yang benar adalah ..', 'System.out.println(Mid Java)', 'System.Out.println(Mid Java )', 'System.out.Println(Mid Java )', 'System.Out.Println(Mid Java )', 0, 6, 8),
(49, 'Stream yang berguna untuk mengirim keluaran ke layar adalah', 'System.in.', 'System.out.', 'System.err', 'System.exit', 1, 6, 8),
(50, 'Hasil kompilasi dari berkas java adalah', 'File BAK', 'File Bytecode', 'File executable', 'File class', 1, 6, 8),
(51, 'Fungsi method System.in dalam java adalah', 'Mengirimkan keluaran ke layar', 'Menangani pembacaan dari keyboard', 'Menampilkan pesan kesalahan', 'Menangani suatu objek', 1, 6, 8),
(52, 'Diantara pernyataan berikut, konsep yang tidak ada di dalam pemrograman Java adalah', 'Polymorphisme', 'Encapsulation', 'Multiple inheritance', 'Single Inheritance', 2, 6, 8),
(53, 'Arsitektur java yang dipakai untuk wireless device / mobile device, disebut dengan', 'J2SE', 'J2ME', 'J2EE', 'J2EM', 1, 6, 8),
(54, 'Berikut adalah penamaan class pada java yang diperbolehkan, kecuali', 'B3_Ta', 'S13h', 'O_3ne', '3_One', 3, 6, 8),
(55, 'Method yang digunakan untuk mengkonversi nilai string ke integer dalam Java adalah :', 'parseInt( )', 'converseInt( )', 'Cint( )', 'ChangeInt( )', 0, 6, 8),
(56, 'Diantara pernyataan berikut, penulisan sintaks BbufferredReader yang benar adalah', 'int data =BufferedReader = new BufferedReader(new input Stream Reader(System.in) ).Readline( ).intValue( );', 'int data =BufferedReader = new BufferedReader(new InputStreamReader(Sy', 'int data=(new Integer((new BufferedReader = new BufferedReader(new input Stream Reader(System.in))).re', 'int data = (new Integer( (new BufferedReader (new InputStreamReader (System.in)) ).readLine()).intValue())', 3, 6, 8),
(57, 'Suatu method yang dapat dijalankan otomatis pada saat object dari class dibuat, dikenal dengan ...', 'Constructor', 'Initializer', 'Garbage Collector', 'Inheritance', 2, 6, 8),
(58, 'Berikut ini adalah pernyataan yang benar berhubungan dengan break dan continue, kecuali...', 'Break digunakan untuk keluar dari blok perulangan', 'Continue digunakan untuk melanjutkan ke proses perulangan berikutnya', 'Statement setelah continue tidak akan dijalankan', 'Statement setelah break tetap akan dijalankan', 2, 6, 8),
(59, 'Method yang digunakan untuk mengambil sub-string yang dimulai dari posisi tertentu sampai akhir string adalah', 'charAt(int1,Int2)', 'substring(int)', 'substring(int1, int2)', 'charAt(int)', 3, 6, 8),
(60, 'Sintaks java untuk melakukan kompilasi terhadap berkas program adalah :', 'java', 'javac', 'javaclass', 'javax', 3, 6, 8),
(61, 'Hasil kompilasi dari berkas java adalah', 'File BAK', 'File Bytecode', 'File executable', 'File class', 0, 6, 8),
(62, 'Atribut kelas hanya dapat diakses oleh metode dalam kelas disebut ...', 'Private', 'Protected', 'Default', 'Public', 1, 6, 8),
(63, 'Package yang digunakan untuk kelas komponen GUI, adalah ...', 'Java.io', 'Java.lang', 'Javax.swing', 'Java.applet', 3, 6, 8),
(64, 'Instruksi untuk mengkompile class java menjadi package, adalah', 'javac d', 'javac', 'javac d', 'javac d', 1, 6, 8),
(65, 'Perintah untuk compile di java adalah', 'Javac nm_file', 'Javac nm_class', 'Java nm_class', 'Java nm_file', 2, 6, 8),
(66, 'Method untuk mengembalikan nilai integer saat ini kedalam bentuk pecahan, adalah', 'intValue', 'doubleValue', 'intDouble', 'doubleInteger', 1, 6, 8),
(102, 'Berikut ini yang merupakan karakteristik bahasa pemrograman Android adalah...', 'Pemrograman berorientasi object', 'Berbasis bahasa pemrograman C', 'Tidak memiliki library sendiri', 'Semua jawaban benar', 0, 2, 8),
(103, 'Software yang digunakan dalam pengembangan Android adalah...', 'Android Studio', 'Android Virtual Device Manager', 'Standart Development Kit Manager', 'Semua jawaban benar', 3, 2, 8),
(104, 'Pengaturan layout aplikasi Android dilakukan melalui file ...', 'File xml', 'File jar', 'File java', 'Semua jawaban benar', 0, 2, 8),
(105, 'Berikut ini yang merupakan jenis layout adalah...', 'Horisontal layout', 'Vertical layout', 'Relative layout', 'Semua jawaban benar', 2, 2, 8),
(106, 'Contoh dari view adalah...', 'Text', 'Text field', 'Button', 'Semua jawaban benar', 3, 2, 8),
(107, 'Contoh bahasa pemrograman berorientasi object adalah...', 'Java', 'C', 'PHP', 'Semua jawaban benar', 0, 2, 8),
(108, 'Berikut ini yang merupakan kemampuan Class dan object adalah...', 'Encapsulation', 'Inheritance', 'Polymorphism', 'Semua jawaban benar', 1, 2, 8),
(109, 'Kemampuan class untuk menyembunyikan data yang tidak perlu ditampilkan disebut...', 'Encapsulation', 'Inheritance', 'Polymorphism', 'Semua jawaban benar', 0, 2, 8),
(110, 'Kemampuan class untuk menurunkan data kepada objek disebut...', 'Encapsulation', 'Inheritance', 'Polymorphism', 'Semua jawaban benar', 2, 2, 8),
(111, 'Activity yang mulai tampak berada pada fase...', 'onCreate()', 'onStart()', 'onResume()', 'Semua jawaban benar', 1, 2, 8),
(112, 'Android adalah Sistem Operasi berbasis Linux/Open Source yang menjalan kan sebuah aplikasi dari kombinasi bahasa Pemrograman...', 'C++ dan Java', 'XML dan Java', 'Java dan XML', 'Java dan PHP', 2, 2, 8),
(113, 'Layout pada Android merupakan Layar yang mennggambarkan tampilan. Bahasa yang digunakan pada Layout Android adalah....', 'Java', 'C++', 'XML', 'PHP', 2, 2, 8),
(114, 'Sedangkan Activity merupakan kode yang menjalankan Android. Bahasa yang digunakan pada Activity Android adalah...', 'Java', 'Xml', 'C++', 'PHP', 0, 2, 8),
(115, 'Versi 4.3 dengan API level 18 merupakan Android dengan Kode Nama...', 'Jelly Bean', 'Mr Bean', 'KitKat', 'Lolipop', 0, 2, 8),
(116, 'Activity dan Fragment pada Android memiliki lifecycle. Manakah dari fungsi-fungsi yang berhubungan dengan lifecycle di bawah ini yang hanya ditemukan pada Fragment?', 'onResume()', 'onStart()', 'onStop()', 'onCreateView()', 3, 2, 8),
(117, 'Untuk menampilkan Notification, kita terlebih dahulu perlu membuat Notification menggunakan .', 'NotificationManager', 'NotificationCompat.Builder', 'NotifUtil', 'Notification.Create', 0, 2, 8),
(118, 'Fungsi pada WebView yang kita gunakan untuk menampilkan html adalah .', 'setWebViewClient()', 'loadUrl()', 'showWeb()', 'parseUri()', 1, 2, 8),
(119, 'Untuk mendapatkan posisi GPS, salah satu class yang dapat kita gunakan untuk melakukan hal tersebut adalah .', 'LocationManager', 'GPSLocator', 'NetworkManager', 'PositionLocator', 0, 2, 8),
(120, 'Class pada Android untuk memainkan file Audio adalah...', 'SoundPlayer', 'AudioPlayer', 'MediaPlayer', 'MusicPlayer', 2, 2, 8),
(121, 'Pada Android untuk melakukan koneksi ke internet ada 2 class yang dapat kita gunakan yaitu .', 'HttpURLConnection dan HttpClient', 'HttpResponse dan HttpRequest', 'HttpConnectionParams dan HttpParams', 'HttpPost dan HttpGet', 0, 2, 8),
(122, 'Berikut ini merupakan definisi dari Algoritma, kecuali:', 'Urutan langkah-langkah berhingga untuk memecahkan masalah logika atau matematika', 'Urutan langkah-langkah tak berhingga untuk memecahkan masalah logika a', 'Logika, metode dan tahapan (urutan) sistematis yang digunakan untuk memecahkan suatu permasalahan', 'Urutan logis pengambilan keputusan untuk pemecahan masalah', 1, 4, 8),
(123, 'Perintah dasar sederhana dalam program passcal adalah...', 'Readln', 'End', 'Write', 'Wtiteln', 2, 4, 8),
(124, 'Tipe data bahasa pascal untuk TRUE FALSE adalah...', 'String', 'Char', 'Boolean', 'Byte', 2, 4, 8),
(125, 'Tipe data pascal untuk karakter adalah...', 'Char', 'Boolean', 'Integer', 'Real', 0, 4, 8),
(126, 'Menggambarkan program secara logika merupakan fungsi dari...', 'Flowchart', 'Dxdiag', 'Begin', 'SI', 0, 4, 8),
(127, 'Bilangan yang mengadung pecahan ,palingsedikit harus ada satu digit sebelum dan sesudah titik desimal termasuk dalm tipe data...', 'Real', 'Boolean', 'Integer', 'Long', 0, 4, 8),
(128, 'Prosedur yang digunakan untuk membersihkan layar saat program dijalankan adalah...', 'Writeln', 'Begin', 'Write', 'Readln', 0, 4, 8),
(129, 'ipe data terstruktur yang terdiri dari sejumlah komponen ,komponen yang mempunyai tipe sama,disebut tipe data...', 'Byte', 'Longin', 'Array', 'Integer', 2, 4, 8),
(130, 'Suatu indentifier non standar yang nilainya tidak tetap atau nilainya merupakan hasil dari suatu proses,disebut', 'Variabel', 'Ripe Data', 'Prosedur', 'Deklarasi', 0, 4, 8),
(131, 'Array terdiri dari berbagai tipe kecuali', 'Array Multi-Dimensi', 'Array Dimensi Satu', 'Array Dimensi Tiga', 'Array Dimensi Dua', 0, 4, 8),
(133, 'Teknik pemecahan masalah yang paling umum digunakan dimana suatu masalah yang kompleks dibagi-bagi ke dalam beberapa kelompok masalah yang lebih kecil, disebut:', 'Teknik Top-Down', 'Teknik Bottom-Up', 'Teknik Algoritma', 'Teknik Pemrograman', 0, 4, 8),
(134, '(A + B) merupakan operasi logika:', 'NOR', 'NAND', 'EXOR', 'EXNOR', 0, 4, 8),
(135, 'Yang menterjemahkan instruksi per instruksi merupakan tugas dari :', 'Compiler', 'Interpreter', 'Assembler', 'Machine language', 1, 4, 8),
(136, 'Setiap algoritma akan selalu terdiri dari:', 'Judul, sub judul dan deskripsi algoritma', 'Judul, sub judul dan deklarasi algoritma', 'Judul, deklarasi dan deskripsi algoritma', 'Deklarasi, prosedur dan deskripsi algoritma', 2, 4, 8),
(137, 'Yang merupakan operasi pada Queue yaitu:', 'Push', 'Create', 'Pop', 'Head', 1, 4, 8),
(138, 'Elemen(node) dari suatu Linked List terdiri dari dua bagian, yaitu:', 'Array dan Record', 'Info dan Next', 'Remove dan Insert', 'Next dan Null', 1, 4, 8),
(139, 'Elemen(node) yang berisi tentang informasi elemen data yang bersangkutan disebut dengan:', 'Next', 'Info', 'Link', 'Null', 1, 4, 8),
(140, 'Divide berarti', 'Membagi masalah menjadi beberapa masalah yang memiliki perbedaan dengan masalah semula dan berukuran lebih besar', 'Membagi masalah menjadi beberapa masalah yang memiliki perbedaan denga', 'Membagi masalah menjadi beberapa masalah yang memiliki kemiripan alah semula dan berukuran lebih besar', 'Membagi masalah menjadi beberapa masalah yang memiliki kemiripan alah semula dan berukuran lebih kecil', 2, 4, 8),
(141, 'Conquer berarti:', 'Memecahkan masing-masing masalah secara rekursif', 'Memecahkan masing-masing masalah secara terurut', 'Memecahkan masing-masing masalah secara teratur', 'Semua jawaban benar', 0, 4, 8),
(142, 'Selain dengan Divide and Conquer, suatu permasalahan juga dapat dipecahkan dengan Algoritma:', 'Biasa', 'Brute Ford', 'Brute Force', 'Bruce Force', 2, 4, 8),
(148, 'Apa kepanjangan dari DML ?', 'Data Manipulation Language', 'Definisi Maipulaton Language', 'Data Menegement System', 'Definisi Menegement data', 0, 5, 8),
(149, 'MS Acces terdiri dari berbagai arsitekstur berikut kecuali', 'Table', 'Query', 'Form', 'Columm', 3, 5, 8),
(150, 'Keuntungan menggunakan database adalah sebagai berikut, kecuali', 'Terpeliharanya kekonsistenan data', 'Data dapat dipakai bersama-sama', 'Kemudahan dalam penangganan proses recovery & backup', 'Terkontrolnya kelengkapan data', 2, 5, 8),
(151, 'Berikut adalah pengguna database, kecuali', 'End user', 'Data', 'System Engineer', 'Database administrator', 1, 5, 8),
(152, 'Yang dimaksud dengan data value adalah', 'Atribute', 'Suatu objek yang dapat dibedakan dengan objek lainnya', 'Tanda pengenal yang secara unik entitas dari suatu kumpulan entitas', 'Informasi yang disimpan pada tiap data elemen atau atribute', 3, 5, 8),
(153, 'Kumpulan elemen-elemen yang saling berkaitan menginformasikan tentang suatu entity secara lengkap, disebut...', 'Data value', 'Record/Tuple', 'Entitas', 'Atribute', 1, 5, 8),
(154, 'Program Komputer yang digunakkan untuk memasukkan, mengubah, menghapus, memodifikasi dan memperoleh data/informasi dengan praktis dan efisien disebut....', 'Sistem basis data', 'Database management system', 'Database', 'Database Programming', 1, 5, 8),
(155, 'Dengan mengunakkan DBMS, informasi yang tersedia selalu berubah dan akurat setiap saat, artinya...', 'Kepraktisan', 'Up to date', 'Kecepatan', 'Ketepatan', 1, 5, 8),
(156, 'Tools yang bisa digunakan dalam membangun databse adalah sebagai berikut, kecuali', 'Oracle', 'Mysql', 'Excel', 'Access', 2, 5, 8),
(157, 'Database berfungsi untuk menurunkan tingkat redundancy, artinya', 'Mengontrol kerangkapan data', 'Pemusatan kontrol data', 'Pemakaian data bersama', 'Data yang bebas', 0, 5, 8),
(158, 'Fungsi DBMS adalah data recovery & concurency, artinya.....', 'DBMS harus dapat mengolah pendefinisian data', 'DBMS harus dapat menangani kegagalan- kegagalan pengaksesan database y', 'DBMS harus dapat menagani permintaan dari pemakai untuk mengakses data', 'DBMS harus menyediakan data dictionary', 1, 5, 8),
(159, 'Skema arsitektur DBMS yang memuat deskripsi struktur penyimpanan basis data dan menggunakan model data fisikal serta mendefinisikan secara detail penyimpanan data dalam basis data, termasuk', 'Level konseptual', 'Level internal', 'Level eksternal', 'Semua jaeaban benar', 1, 5, 8),
(160, 'candidate key yang tidak dipilih sebagai primary key disebut....', 'Alternate key', 'Primary key', 'Kandidat key', 'Foreign key', 0, 5, 8),
(161, 'Foreign key adalah', 'Candidate key yang dipilih untuk mengidentifikasikan tupel secara unik dalam relasi', 'Atribut dengan domain yang sama yang menjadi kunci utama pada sebuah r', 'Atribut di dalam relasi yang biasanya mempunyai nilai unik', 'Candidate key yang dipilih untuk mengidentifikasikan tupel secara unik dalam relasi', 1, 5, 8),
(162, 'Istilah dalam database relational untuk mapping cardinality adalah....', 'Sebuah tabel yang terdiri dari beberapa kolom dan beberapa baris', 'Jumlah Entitas dimana entitas lain dapat dihubungkan ke entitas terseb', 'Kumpulan nilai yang valis untuk satu atau lebih atribut', 'Kolom pada sebuah relasi', 1, 5, 8),
(163, 'Sebuah entitas pada A berhubungan dengan nol atau lebih entitas pada B dan sebuah entitas pada B berhubungan dengan paling banyak satu entitas pada A,termasuk ke dalam relasi....', 'Relasi satu ke satu (one to one)', 'Relasi banyak ke banyak (many to many)', 'Relasi banyak ke satu (many to one)', 'Relasi satu ke banyak (one to many)', 2, 5, 8),
(164, 'Sistem basis data yang berjalan pada sistem komputer tunggal dan tidak berinteraksi dengan sistem komputer lain disebut....', 'Sistem komputer tunggal', 'Database terdistribusi', 'Sistem basis data terpusat', 'Sistem database client-server', 2, 5, 8),
(165, 'Penggunaan databse pada kasirsebuah termasuk kategori....', 'Arsitektur sistem databse tunggal', 'Arsitektur sistem database server data', 'Arsitektur sistem database server', 'Jawaban salah semua', 1, 5, 8),
(166, 'Yang tidak termasuk keuntungan penggunaak baris basis data terdistribusi adalah', 'Otonomi lokal', 'Pemrosesan query lambat', 'Efisien dan fleksibel', 'Pengawasan distribusi dan pengambilan data', 1, 5, 8),
(167, 'Sintaks untuk membuat databse PERSONEL yang paling benar di bawah ini adalah....', 'CREATE DATABASE PERSONEL', 'CRATE TABLE PERSONEL', 'DROP DATABASE PERSONEL', 'CREATE VIEW PERSONEL', 0, 5, 8),
(168, 'Pada Microsoft Visual Basic 6.0, bila ingin menulis program, maka harus berada di :', 'Jendela Code', 'Toolbox', 'Jendela Project', 'Jendela Properties', 0, 7, 8),
(169, 'Pada Microsoft Visual Basic, yang dimaksud dengan metoda dibawah ini adalah :', 'Record Source', 'Toolbox', 'MoveNext', 'Adodc', 2, 7, 8),
(170, 'Pada ms. Visual basic 6.0, yang dimaksud dengan properties di bawah ini adalah :', 'Recordsource', 'toolbox', 'click', 'Movenext', 0, 7, 8),
(171, 'Type data Byte yang mempunyai jangkauan nilai', '2 s/d 255', '1 s/d 255', '1 s/d 265', '1 s/d 255', 3, 7, 8),
(172, 'Suatu kontrol dapat ditampilkan tapi tidak bisa diakses langsung, maka sebelumnya merubah properties', 'Enabled', 'Visible', 'Value', 'Validate', 0, 7, 8),
(173, 'Tampilan yang berisi gambaran dari semua modul terlihat pada', 'Jendela Project', 'Jendela Tool Box', 'Jendela Code', 'Jendela Properties', 0, 7, 8),
(174, 'Message yang tampil jika salah dalam pemberian nama suatu control abjek adalah', 'Not a legal object name', 'Illegal operation', 'No legal name', 'Not object name', 0, 7, 8),
(175, 'Pada Ms. Visual Basic, Type data yang mempunyai ukuran 16 byte adalah....', 'Object', 'Variant', 'Boolean', 'Byte', 1, 7, 8),
(176, 'Pada Ms. Basic, dibawah ini semua adalah menu bar, kecuali', 'Debug', 'Insert', 'Window', 'Diagram', 1, 7, 8),
(177, 'Baris dari : FORM2.Print "2" + "4", menghasilkan .', '8', '6', '3', '24', 3, 7, 8),
(178, 'Ekstensi file project visual basic adalah..', '.FRM', '.DOC', '.VBP', '.VBF', 2, 7, 8),
(179, 'Pada Ms. Visual Basic untuk menempatkan posisi kursor yang diiginkan adalah', 'Pointer', 'Sel', 'SetFocus', 'Jawaban a, b, c dan d salah', 2, 7, 8),
(180, 'Pada Ms. Visual Basic, control yang digunakan untuk menampilkan teks yang tidak dapat diperbaiki oleh pemakai adalah', 'CheckBox', 'Label', 'Option Button', 'Frame', 1, 7, 8),
(181, 'Memilih boleh beberapa pilihan sekaligus adalah fungsi dari control', 'TextBox', 'CheckBox', 'Label', 'Option Button', 1, 7, 8),
(182, 'Untuk menjalankan Form yang lain pada satu project, dapat juga menggunakan tombol fungsi', 'F1', 'F7', 'F3', 'F5', 3, 7, 8),
(183, 'Untuk menambahkan Form baru pada Visual basic, sebelumnya kita Add Form dari menu', 'File', 'Edit', 'Insert', 'Project', 3, 7, 8),
(184, 'Secara default saat kita mengambil control text box ke form design, name properties caption-nya adalah :', 'Label1', 'Text1', 'Caption', 'Header', 1, 7, 8),
(185, 'Label1.caption = text1.text * text2.text, baris program tersebut :', 'Benar, Caption tidak perlu dirubah', 'Salah, harusnya Caption diganti text', 'Salah, hasilnya error', 'Benar, tapi hasilnya error', 0, 7, 8),
(186, 'Type data ini merupakan type variabel istimewa, yang dimaksud type data data tersebut adalah :', 'Variant', 'Byte', 'Integer', 'Boolean', 0, 7, 8),
(187, 'Pernyataan ini hanya bisa diletakkan dibagian awal kalimat komentar dan hanya sebagai catatan didalam program (tidak diproses), pernyataan yang dimaksud adalah', 'DIM', 'REM', 'IF', 'Private', 1, 7, 8),
(188, 'Yang digunakan untuk menerangkan field name adalah ....', 'Type', 'Caption', 'Description', 'Properties', 2, 1, 8),
(189, 'tes', 'ad', 'fd', 'bg', 'e', 3, 1, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_versi`
--

CREATE TABLE IF NOT EXISTS `tbl_versi` (
  `id_ver` int(11) NOT NULL,
  `version` varchar(5) NOT NULL,
  `detail` varchar(5) NOT NULL,
  PRIMARY KEY (`id_ver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_versi`
--

INSERT INTO `tbl_versi` (`id_ver`, `version`, `detail`) VALUES
(1, '12', '8');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD CONSTRAINT `tbl_soal_ibfk_1` FOREIGN KEY (`paket`) REFERENCES `tbl_paket` (`paket`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
