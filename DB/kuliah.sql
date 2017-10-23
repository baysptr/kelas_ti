-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: kuliah
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `T_KELAS`
--

DROP TABLE IF EXISTS `T_KELAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `T_KELAS` (
  `id_kelas` int(3) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(10) NOT NULL,
  `mat_kul` varchar(75) NOT NULL,
  `dosen_pengajar` varchar(75) NOT NULL,
  `tgl_post` datetime NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `T_KELAS`
--

LOCK TABLES `T_KELAS` WRITE;
/*!40000 ALTER TABLE `T_KELAS` DISABLE KEYS */;
/*!40000 ALTER TABLE `T_KELAS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `T_KULIAH`
--

DROP TABLE IF EXISTS `T_KULIAH`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `T_KULIAH` (
  `id_kuliah` int(3) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(3) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `mulai` datetime NOT NULL,
  `akhir` datetime NOT NULL,
  PRIMARY KEY (`id_kuliah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `T_KULIAH`
--

LOCK TABLES `T_KULIAH` WRITE;
/*!40000 ALTER TABLE `T_KULIAH` DISABLE KEYS */;
/*!40000 ALTER TABLE `T_KULIAH` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `T_MHS`
--

DROP TABLE IF EXISTS `T_MHS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `T_MHS` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `smt` int(3) NOT NULL,
  `fakultas` varchar(75) NOT NULL,
  `jurusan` varchar(75) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `T_MHS`
--

LOCK TABLES `T_MHS` WRITE;
/*!40000 ALTER TABLE `T_MHS` DISABLE KEYS */;
INSERT INTO `T_MHS` VALUES ('04116047','Bayu Saputra',3,'Ilmu Komputer','Sistem Komputer');
/*!40000 ALTER TABLE `T_MHS` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-24  1:10:53
