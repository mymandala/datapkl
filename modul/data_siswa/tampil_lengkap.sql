-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2014 at 10:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pkl`
--

-- --------------------------------------------------------

--
-- Structure for view `tampil_lengkap`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_lengkap` AS select `data_siswa`.`nis` AS `nis`,`data_siswa`.`nama_siswa` AS `nama_siswa`,`data_siswa`.`jenis_kelamin` AS `jenis_kelamin`,`agama`.`agama` AS `agama`,`data_siswa`.`tempat_lahir` AS `tempat_lahir`,`data_siswa`.`tanggal_lahir` AS `tanggal_lahir`,`data_siswa`.`alamat` AS `alamat`,`sekolah`.`s_nama` AS `s_nama`,`pembimbing`.`p_nama` AS `p_nama`,`prog_keahlian`.`nama_prog_keahlian` AS `nama_prog_keahlian`,`data_siswa`.`periode_pkl` AS `periode_pkl` from ((((`data_siswa` join `agama`) join `sekolah`) join `pembimbing`) join `prog_keahlian`) where ((`agama`.`id_agama` = `data_siswa`.`id_agama`) and (`sekolah`.`id_sekolah` = `data_siswa`.`id_sekolah`) and (`pembimbing`.`id_pembimbing` = `data_siswa`.`id_pembimbing`) and (`prog_keahlian`.`id_prog_keahlian` = `data_siswa`.`id_prog_keahlian`));

--
-- VIEW  `tampil_lengkap`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
