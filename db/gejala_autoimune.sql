-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.epizy.com
-- Generation Time: Nov 04, 2020 at 11:15 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27120775_gejala_autoimune`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `gambar_about` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `gambar_about`, `keterangan`) VALUES
(1, '1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi neque, inventore cupiditate quis ipsam velit magni maxime, eius ipsa voluptates nobis aspernatur a nam laborum quia ea deleniti sunt adipisci debitis dignissimos quod error asperiores unde. Sunt voluptates ab molestiae exercitationem nihil delectus mollitia obcaecati, ex labore voluptatem doloremque quisquam facere earum, ad eius id, facilis sit voluptatibus aspernatur tenetur in nam. Ut nam facilis possimus. Et, commodi aut itaque porro facere repudiandae placeat eos rerum eveniet deserunt explicabo veniam. Illum aspernatur voluptatum tempore autem iste dolor. Quae hic minus accusantium sunt ea exercitationem, quis quaerat eum maiores cumque aliquam?');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(35) NOT NULL,
  `status` enum('admin','user','','') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_login`, `nama`, `email`, `uname`, `pword`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `autoimune`
--

CREATE TABLE `autoimune` (
  `id_autoimune` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `ket_singkat` text NOT NULL,
  `ket_lengkap` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autoimune`
--

INSERT INTO `autoimune` (`id_autoimune`, `gambar`, `judul`, `ket_singkat`, `ket_lengkap`) VALUES
(13, '2852883.png', 'Penyakit Autoimune', 'Setelah membaca lebih detail tentang sistem imun dapat disimpulkan Jika sistem imune pada tubuh kita tidak di jaga maka sistem imun kita akan melemah dan tubuh kita akan terkena penyakit yang di namakan \"AUTOIMUN\" berikut penjelasannya', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reiciendis nobis accusantium aperiam nihil voluptatibus culpa ad nisi molestias tenetur obcaecati iure id laudantium, doloribus animi. Quidem velit facere quaerat amet possimus, officia sapiente corrupti suscipit aperiam beatae tempora quasi quos, asperiores est, sunt non? Rerum nulla similique, doloribus ab voluptates mollitia temporibus eveniet inventore dolorem officia laboriosam itaque exercitationem quo? Quos eligendi maiores enim eum veritatis? Tempora obcaecati recusandae ipsa, possimus delectus laborum? Non hic nostrum voluptates repudiandae, porro cum aliquid, asperiores blanditiis nihil, sint soluta corporis cumque perferendis accusamus natus. Voluptatum, iusto ad debitis deserunt architecto harum voluptatem minus totam aliquid perferendis quisquam error placeat, voluptates ex dolorum repudiandae animi libero aliquam, earum maiores eos facilis a labore reprehenderit? Tempore, impedit? Cum labore dolorem expedita reiciendis ipsa aliquid dicta omnis laborum voluptatibus aut distinctio error molestiae temporibus magnam repudiandae impedit, doloribus laboriosam fugit, quisquam nihil obcaecati iure ad neque! Voluptas quia a id perferendis repellat aperiam, quidem vero assumenda accusamus quo voluptatibus ullam rerum tempore. Aliquid neque dolores aliquam quam ea? Eligendi, vero omnis, itaque quas exercitationem dolor autem assumenda vel quos eius facilis nesciunt iusto pariatur. Dicta, laudantium? Culpa tempora nesciunt cum voluptatibus nulla, consequuntur fugiat fugit!'),
(14, 'cough_sneeze_illness_sick_healthcare_icon_133521.png', 'Gejala Penyakit Autoimune', 'Setelah Mendapatkan informasi tentang penyakit autoimune kalian harus mengatuin gejala-gejala apa saja yang terdapat pada penyakit autoimun berikut ini merupakan gejala-gejala yang timbul jika kalian terkena penyakit autoimune', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ratione consectetur unde, praesentium pariatur quia debitis. Eum illo accusamus non temporibus possimus pariatur velit nihil facere ab. Totam rem fugiat sint eum nobis iusto molestiae? Quisquam perferendis molestiae rerum error enim velit nemo modi minima similique laudantium ullam assumenda corporis doloremque delectus corrupti autem, asperiores praesentium sit suscipit! Est voluptatum laudantium possimus quasi, quos alias! Inventore asperiores laudantium molestias repudiandae amet illum natus odio! Debitis esse ipsa illo nostrum dolores libero odit repellendus quasi iste recusandae alias voluptate ratione, exercitationem quae vel officiis dolorem reiciendis at dolorum et! Totam perferendis mollitia veritatis praesentium aut corrupti officia. Recusandae iusto nostrum ducimus error, in quam accusantium natus quasi autem, iste sequi, amet dicta veniam itaque eos neque voluptatem consectetur. Beatae quaerat quos magni. Placeat officiis praesentium dolore error dolores unde harum. Quisquam mollitia consequatur laborum voluptatibus labore ipsum cupiditate incidunt, corporis id expedita est corrupti sunt enim possimus impedit rem saepe nesciunt. Illum est temporibus quas veritatis deserunt eos natus minus excepturi error earum obcaecati perspiciatis ab saepe hic quasi assumenda maiores eveniet voluptas, itaque velit quis. Nobis molestias debitis dolorem, pariatur, totam autem ipsa earum placeat rerum explicabo ipsam eaque nulla.'),
(15, 'water_wash_hand_washing_healthcare_icon_133534.png', 'Pencegahan Penyakit Autoimune', 'Meski belum diketahui cara untuk mencegah penyakit autoimun, tapi ada berbagai hal yang bisa diterapkan untuk mencegahnya, di antaranya sebagai berikut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ratione consectetur unde, praesentium pariatur quia debitis. Eum illo accusamus non temporibus possimus pariatur velit nihil facere ab. Totam rem fugiat sint eum nobis iusto molestiae? Quisquam perferendis molestiae rerum error enim velit nemo modi minima similique laudantium ullam assumenda corporis doloremque delectus corrupti autem, asperiores praesentium sit suscipit! Est voluptatum laudantium possimus quasi, quos alias! Inventore asperiores laudantium molestias repudiandae amet illum natus odio! Debitis esse ipsa illo nostrum dolores libero odit repellendus quasi iste recusandae alias voluptate ratione, exercitationem quae vel officiis dolorem reiciendis at dolorum et! Totam perferendis mollitia veritatis praesentium aut corrupti officia. Recusandae iusto nostrum ducimus error, in quam accusantium natus quasi autem, iste sequi, amet dicta veniam itaque eos neque voluptatem consectetur. Beatae quaerat quos magni. Placeat officiis praesentium dolore error dolores unde harum. Quisquam mollitia consequatur laborum voluptatibus labore ipsum cupiditate incidunt, corporis id expedita est corrupti sunt enim possimus impedit rem saepe nesciunt. Illum est temporibus quas veritatis deserunt eos natus minus excepturi error earum obcaecati perspiciatis ab saepe hic quasi assumenda maiores eveniet voluptas, itaque velit quis. Nobis molestias debitis dolorem, pariatur, totam autem ipsa earum placeat rerum explicabo ipsam eaque nulla.');

-- --------------------------------------------------------

--
-- Table structure for table `cara_pencegahan`
--

CREATE TABLE `cara_pencegahan` (
  `id_pencegahan` int(11) NOT NULL,
  `pencegahan` varchar(100) NOT NULL,
  `penjelasan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cara_pencegahan`
--

INSERT INTO `cara_pencegahan` (`id_pencegahan`, `pencegahan`, `penjelasan`) VALUES
(43829480, '0', '0'),
(34328482, 'cuci tangan', 'kepo');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_gejala`
--

CREATE TABLE `gejala_gejala` (
  `Id_Gejala` int(3) NOT NULL,
  `Gejala` varchar(25) NOT NULL,
  `Penjelasan_Gejala` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala_gejala`
--

INSERT INTO `gejala_gejala` (`Id_Gejala`, `Gejala`, `Penjelasan_Gejala`) VALUES
(0, 'dkfmskm', 'dsfds');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_lengkap`, `email`, `isi`) VALUES
(2, 'Rizky Pratama', 'pratamakyky0692@gmail.com', 'Haii Informasi Ini sangat membantu sekali terimakasih'),
(3, 'asdddd', 'qwe@gmail.com', 'Coba test'),
(4, 'Rizky Pratama', 'pratamaiky1@gmail.com', 'informasi yang bagus terima kasih');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `logo` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `copy_right` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `logo`, `nama`, `telp`, `email`, `alamat`, `copy_right`) VALUES
(1, 'angular-4.png', 'Rizki Pratama1', '089999999991', 'admin1@gmail.com', 'Swadaya1', 'Rizki Pratama1');

-- --------------------------------------------------------

--
-- Table structure for table `task_beranda`
--

CREATE TABLE `task_beranda` (
  `id_task` int(11) NOT NULL,
  `judul_task` varchar(50) NOT NULL,
  `ket_singkat` text NOT NULL,
  `ket_lengkap` text NOT NULL,
  `gambar_task` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_beranda`
--

INSERT INTO `task_beranda` (`id_task`, `judul_task`, `ket_singkat`, `ket_lengkap`, `gambar_task`) VALUES
(2, 'System Imune', 'sistem imun tubuh manusia', 'Sistem imun atau sistem kekebalan tubuh merupakan suatu sistem perlindungan secara biologis yang ada di dalam tubuh manusia dengan tujuan untuk menangkal radikal bebas yang menyerang sehingga seorang individu akan terhindar dari penyakit. Apabila sistem ini dapat bekerja dengan baik, maka seseorang akan terhindar dari serangan virus ataupun bakteri, bahkan dapat mencegah dari serangan kanker.\r\n\r\nAkan tetapi, apabila sistem ini tidak bekerja dengan baik atau dalam kondisi yang lemah, maka kekebalan tubuh individu tersebut akan mudah terserang penyakit. Hal yang ditakutkan ketika sistem ini melemah adalah dapat meingkatkan resiko terserang penyakit kanker', 'virus_cell_life_biology_microorganism_icon_133542.png'),
(3, 'Fungsi Imune', 'Setelah Mendapatkan informasi tentang imune disini kami akan menjelaskan fungsi imune bagi tubuh manusia klik link di bawah ini untuk melihat fungsi fungsi imune pada tabuh manusia', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod facere voluptatem dolor exercitationem, aliquid vero aut veniam alias ea explicabo ipsam numquam sint voluptate. Itaque, dolorem sed blanditiis delectus animi sint ullam labore sit, molestiae corporis repudiandae velit laborum possimus! Obcaecati provident explicabo ratione sunt qui sapiente, aperiam magni non exercitationem quibusdam illum asperiores corporis. Molestiae, eligendi. Dolores assumenda impedit fugit veritatis tenetur similique! Quibusdam earum velit a, voluptates possimus, ea minima iure odio temporibus rerum vitae ipsum perferendis dicta amet dolores autem nostrum. Exercitationem obcaecati accusamus velit at fugiat nisi recusandae atque eos error eius aspernatur expedita officiis quidem, harum perferendis cupiditate repudiandae eligendi. Explicabo dolore sint quos voluptatum vitae facere voluptate quod molestias incidunt obcaecati eius ea debitis, accusamus nobis? Veniam, maxime. Dolores, tempora asperiores architecto ratione incidunt aspernatur quidem similique deserunt error corrupti? Optio, maiores accusantium id minima possimus laudantium dolor. Atque ipsum nisi placeat in debitis, repellendus mollitia enim quod temporibus quas dicta quaerat quam accusantium aut fugit alias voluptates cum autem quos porro impedit! Voluptate ratione dolores maiores dicta est atque eum, voluptatum ducimus quam rerum obcaecati quibusdam nisi sapiente odit placeat, dolor suscipit vero. Assumenda ratione expedita dolorem quae deserunt ipsum libero adipisci distinctio?', 'Study_34591.png'),
(4, 'Jenis - Jenis Imune', 'Setelah membaca pengertian dan fungsi fungsi imune pada tubuh manusia disini kami akan memberikan sebuah informasi tentang jenis jenis system imune pada tubuh manusia', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod facere voluptatem dolor exercitationem, aliquid vero aut veniam alias ea explicabo ipsam numquam sint voluptate. Itaque, dolorem sed blanditiis delectus animi sint ullam labore sit, molestiae corporis repudiandae velit laborum possimus! Obcaecati provident explicabo ratione sunt qui sapiente, aperiam magni non exercitationem quibusdam illum asperiores corporis. Molestiae, eligendi. Dolores assumenda impedit fugit veritatis tenetur similique! Quibusdam earum velit a, voluptates possimus, ea minima iure odio temporibus rerum vitae ipsum perferendis dicta amet dolores autem nostrum. Exercitationem obcaecati accusamus velit at fugiat nisi recusandae atque eos error eius aspernatur expedita officiis quidem, harum perferendis cupiditate repudiandae eligendi. Explicabo dolore sint quos voluptatum vitae facere voluptate quod molestias incidunt obcaecati eius ea debitis, accusamus nobis? Veniam, maxime. Dolores, tempora asperiores architecto ratione incidunt aspernatur quidem similique deserunt error corrupti? Optio, maiores accusantium id minima possimus laudantium dolor. Atque ipsum nisi placeat in debitis, repellendus mollitia enim quod temporibus quas dicta quaerat quam accusantium aut fugit alias voluptates cum autem quos porro impedit! Voluptate ratione dolores maiores dicta est atque eum, voluptatum ducimus quam rerum obcaecati quibusdam nisi sapiente odit placeat, dolor suscipit vero. Assumenda ratione expedita dolorem quae deserunt ipsum libero adipisci distinctio?', 'Immune.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `autoimune`
--
ALTER TABLE `autoimune`
  ADD PRIMARY KEY (`id_autoimune`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `task_beranda`
--
ALTER TABLE `task_beranda`
  ADD PRIMARY KEY (`id_task`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `autoimune`
--
ALTER TABLE `autoimune`
  MODIFY `id_autoimune` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_beranda`
--
ALTER TABLE `task_beranda`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
