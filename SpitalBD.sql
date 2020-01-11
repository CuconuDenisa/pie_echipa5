-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pie
CREATE DATABASE IF NOT EXISTS `pie` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pie`;

-- Dumping structure for table pie.analize
CREATE TABLE IF NOT EXISTS `analize` (
  `codanalize` int(11) NOT NULL AUTO_INCREMENT,
  `datarecoltarii` varchar(50) DEFAULT NULL,
  `dataefectuarii` varchar(50) DEFAULT NULL,
  `varsta` int(11) DEFAULT NULL,
  `presiunea` varchar(50) DEFAULT NULL,
  `proba` varchar(50) DEFAULT NULL,
  `receptie` varchar(50) DEFAULT NULL,
  `opiniisiinterpretari` varchar(50) DEFAULT NULL,
  `codbiochimie` int(11) DEFAULT NULL,
  PRIMARY KEY (`codanalize`),
  KEY `codbiochmie` (`codbiochimie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.analize: ~3 rows (approximately)
DELETE FROM `analize`;
/*!40000 ALTER TABLE `analize` DISABLE KEYS */;
INSERT INTO `analize` (`codanalize`, `datarecoltarii`, `dataefectuarii`, `varsta`, `presiunea`, `proba`, `receptie`, `opiniisiinterpretari`, `codbiochimie`) VALUES
	(1, '19.11.2017', '20.11.2017', 35, '95', 'Sange Ser Urina', 'DUM: 10.11.2017', 'SER HEMOLIZAT. Posibile valori modificate pentru L', 1),
	(2, '10.11.2017', '11.11.2017', 35, '90', 'Sange Ser Urina', 'DUM: 10.11.2017', 'SER HEMOLIZAT', 8),
	(3, '10.11.2017', '11.11.2017', 35, '90', 'Sange Ser Urina', 'DUM: 10.11.2017', 'SER HEMOLIZAT', 8);
/*!40000 ALTER TABLE `analize` ENABLE KEYS */;

-- Dumping structure for table pie.biochimie
CREATE TABLE IF NOT EXISTS `biochimie` (
  `codbiochimie` int(11) NOT NULL AUTO_INCREMENT,
  `analiza` varchar(50) DEFAULT NULL,
  `rezultat` varchar(50) DEFAULT NULL,
  `intervaldereferinta` varchar(50) DEFAULT NULL,
  `metoda` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codbiochimie`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.biochimie: ~10 rows (approximately)
DELETE FROM `biochimie`;
/*!40000 ALTER TABLE `biochimie` DISABLE KEYS */;
INSERT INTO `biochimie` (`codbiochimie`, `analiza`, `rezultat`, `intervaldereferinta`, `metoda`) VALUES
	(1, 'acid uric', '5.1', 'Copii: 2.0-5.5 mg/dl', 'Fotometrica'),
	(2, 'acid uric', '2.3', 'Femei: 2.5-5.0 mg/dl', 'Fotometrica'),
	(3, 'acid uric', '6.5', 'Barbati: 3.4-7.0 mg/dl', 'Fotometrica'),
	(4, 'colesterol', '187', 'Valoare dezirabila: <200 mg/dl', 'Fotometrica'),
	(5, 'colesterol', '187', 'Risc scazut: 200-239 mg/dl', 'Fotometrica'),
	(6, 'colesterol', '187', 'Risc inalt: 70-110 mg/dl', 'Fotometrica'),
	(7, 'glicemie', '84', '70-110 mg/dl', 'Fotometrica'),
	(8, 'LH', '7.3', 'Ovulatie:9.6-80.0 mUl/ml', 'Chemiluminescenta'),
	(9, 'sdfds', 'gdfg', 'fhdfh', 'dhdfh'),
	(10, 'sdfds', 'gdfg', 'fhdfh', 'dhdfh');
/*!40000 ALTER TABLE `biochimie` ENABLE KEYS */;

-- Dumping structure for table pie.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `oras` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `subiect` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pie.contact: ~5 rows (approximately)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`nume`, `prenume`, `email`, `oras`, `telefon`, `subiect`) VALUES
	('cuconu', 'Codrin', 'deny_deny110@yahoo.com', 'Ianca', '0734958676', 'gh'),
	('cuconu', 'Codrin', 'deny_deny110@yahoo.com', 'Ianca', '0734958676', 'gh'),
	('cuconu', 'Codrin', 'deny_deny110@yahoo.com', 'Ianca', '0734958676', 'gh'),
	('cuconu', 'Codrin', 'deny_deny110@yahoo.com', 'Ianca', '0734958676', 'gh'),
	('gg', 'gfg', 'deny_deny110@yahoo.com', 'Ianca', '0734958676', 'ccv');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table pie.doctori
CREATE TABLE IF NOT EXISTS `doctori` (
  `coddoctori` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `parola` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `codsectie` int(11) DEFAULT NULL,
  `codfunctie` int(11) DEFAULT NULL,
  PRIMARY KEY (`coddoctori`),
  KEY `codsectie` (`codsectie`),
  KEY `codfunctie` (`codfunctie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pie.doctori: ~3 rows (approximately)
DELETE FROM `doctori`;
/*!40000 ALTER TABLE `doctori` DISABLE KEYS */;
INSERT INTO `doctori` (`coddoctori`, `nume`, `prenume`, `email`, `parola`, `telefon`, `codsectie`, `codfunctie`) VALUES
	(1, 'Oprea', 'Daniel', 'od@gmail.com', 'od', '0720340548', 1, 1),
	(2, 'Oprea', 'Cristina', 'oc@gmail.com', 'oc', '0720340457', 1, 1),
	(3, 'Costin', 'Sergiu', 'cs@gmail.com', 'cs', '0720340548', 2, 1);
/*!40000 ALTER TABLE `doctori` ENABLE KEYS */;

-- Dumping structure for table pie.fisaconsultatie
CREATE TABLE IF NOT EXISTS `fisaconsultatie` (
  `codfisa` int(11) NOT NULL AUTO_INCREMENT,
  `motiveprezentare` varchar(50) DEFAULT NULL,
  `grupasange` varchar(50) DEFAULT NULL,
  `tipsistemnervos` varchar(50) DEFAULT NULL,
  `tipalimentatie` varchar(50) DEFAULT NULL,
  `afectiunivirale` varchar(50) DEFAULT NULL,
  `afectiunibacteriene` varchar(50) DEFAULT NULL,
  `afectiunisange` varchar(50) DEFAULT NULL,
  `afectiunirespiratorii` varchar(50) DEFAULT NULL,
  `afectiunidigestive` varchar(50) DEFAULT NULL,
  `afectiunicardiovasculare` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codfisa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.fisaconsultatie: ~1 rows (approximately)
DELETE FROM `fisaconsultatie`;
/*!40000 ALTER TABLE `fisaconsultatie` DISABLE KEYS */;
INSERT INTO `fisaconsultatie` (`codfisa`, `motiveprezentare`, `grupasange`, `tipsistemnervos`, `tipalimentatie`, `afectiunivirale`, `afectiunibacteriene`, `afectiunisange`, `afectiunirespiratorii`, `afectiunidigestive`, `afectiunicardiovasculare`) VALUES
	(1, 'dureri cap', '0I', 'neechiibrat', 'dieta', 'hepatita epidermica', 'RAA', 'leucemie cornica', 'sinuzite', 'gastrita', 'aritmii');
/*!40000 ALTER TABLE `fisaconsultatie` ENABLE KEYS */;

-- Dumping structure for table pie.functie
CREATE TABLE IF NOT EXISTS `functie` (
  `codfunctie` int(11) NOT NULL,
  `denumire` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codfunctie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pie.functie: ~2 rows (approximately)
DELETE FROM `functie`;
/*!40000 ALTER TABLE `functie` DISABLE KEYS */;
INSERT INTO `functie` (`codfunctie`, `denumire`) VALUES
	(1, 'doctor'),
	(2, 'pacient');
/*!40000 ALTER TABLE `functie` ENABLE KEYS */;

-- Dumping structure for table pie.internari
CREATE TABLE IF NOT EXISTS `internari` (
  `codinternari` int(11) NOT NULL AUTO_INCREMENT,
  `datainternarii` varchar(50) DEFAULT NULL,
  `orainternarii` varchar(50) DEFAULT NULL,
  `codsectie` int(11) DEFAULT NULL,
  `codanalize` int(11) DEFAULT NULL,
  `codpacient` int(11) DEFAULT NULL,
  `codfisaconsultatie` int(11) DEFAULT NULL,
  PRIMARY KEY (`codinternari`),
  KEY `codsectie` (`codsectie`),
  KEY `codpacient` (`codpacient`),
  KEY `codanalize` (`codanalize`),
  KEY `codfisaconsultatie` (`codfisaconsultatie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.internari: ~4 rows (approximately)
DELETE FROM `internari`;
/*!40000 ALTER TABLE `internari` DISABLE KEYS */;
INSERT INTO `internari` (`codinternari`, `datainternarii`, `orainternarii`, `codsectie`, `codanalize`, `codpacient`, `codfisaconsultatie`) VALUES
	(1, '20.11.2017', '12:00', 1, 2, 1, 1),
	(2, '21.12.2018', '16:40', 2, 1, 2, 2),
	(3, '21.10.2016', '08:00', 3, 4, 4, 3),
	(4, '22.03.2014', '13:20', 4, 3, 3, 4);
/*!40000 ALTER TABLE `internari` ENABLE KEYS */;

-- Dumping structure for table pie.logare
CREATE TABLE IF NOT EXISTS `logare` (
  `cont` varchar(50) DEFAULT NULL,
  `parola` varchar(50) DEFAULT NULL,
  `functie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pie.logare: ~0 rows (approximately)
DELETE FROM `logare`;
/*!40000 ALTER TABLE `logare` DISABLE KEYS */;
/*!40000 ALTER TABLE `logare` ENABLE KEYS */;

-- Dumping structure for table pie.pacient
CREATE TABLE IF NOT EXISTS `pacient` (
  `codpacient` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `cnp` bigint(20) DEFAULT NULL,
  `oras` varchar(50) DEFAULT NULL,
  `strada` varchar(50) DEFAULT NULL,
  `numarstrada` int(11) DEFAULT NULL,
  `datanasterii` varchar(50) DEFAULT NULL,
  `gen` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `parola` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codpacient`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.pacient: ~5 rows (approximately)
DELETE FROM `pacient`;
/*!40000 ALTER TABLE `pacient` DISABLE KEYS */;
INSERT INTO `pacient` (`codpacient`, `nume`, `prenume`, `cnp`, `oras`, `strada`, `numarstrada`, `datanasterii`, `gen`, `telefon`, `email`, `parola`) VALUES
	(1, 'Cuconu', 'Denisa', 2980132025234, 'Ianca', 'Albinei', 12, '10.01.1997', 'F', '0720340548', 'cd@gmail.com', 'cd'),
	(2, 'Vioara', 'Maria', 2980110090012, 'Galati', 'Maces', 123, '21.10.1998', 'F', '0720340549', 'vm@gmail.com', 'vm'),
	(3, 'Coman', 'Ionut', 1980503091057, 'Bucuresti', 'Veteranilor', 203, '10.11.2001', 'M', '0720340547', 'ci@yahoo..com', 'ci'),
	(5, 'Dobre', 'Corina', 2920812096542, 'Buzau', 'Crinilor', 7, '26.02.1994', 'F', '0734958676', 'dc@yahoo.com', 'dc'),
	(7, 'alexandru', 'alexandru', 11111, 'Ianca', 'fasd', 73, '26.02.1994', '12.11.2016', '0734958676', 'sssssss@gmail.com', 'mc');
/*!40000 ALTER TABLE `pacient` ENABLE KEYS */;

-- Dumping structure for table pie.rezervari
CREATE TABLE IF NOT EXISTS `rezervari` (
  `codrezervare` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) DEFAULT NULL,
  `specializarea` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `medic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codrezervare`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.rezervari: ~1 rows (approximately)
DELETE FROM `rezervari`;
/*!40000 ALTER TABLE `rezervari` DISABLE KEYS */;
INSERT INTO `rezervari` (`codrezervare`, `nume`, `specializarea`, `telefon`, `email`, `medic`) VALUES
	(1, 'cuconu', 'h', NULL, 'deny_deny110@yahoo.com', 'io');
/*!40000 ALTER TABLE `rezervari` ENABLE KEYS */;

-- Dumping structure for table pie.sectie
CREATE TABLE IF NOT EXISTS `sectie` (
  `codsectie` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(50) DEFAULT NULL,
  `specializarea` varchar(50) DEFAULT NULL,
  `camera` int(11) DEFAULT NULL,
  `etaj` int(11) DEFAULT NULL,
  PRIMARY KEY (`codsectie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pie.sectie: ~4 rows (approximately)
DELETE FROM `sectie`;
/*!40000 ALTER TABLE `sectie` DISABLE KEYS */;
INSERT INTO `sectie` (`codsectie`, `denumire`, `specializarea`, `camera`, `etaj`) VALUES
	(1, 'SECTIA CARDIOLOGIE', 'CARDIOLOGIE', 1, 1),
	(2, 'COMPARTIMENT BOLI NUTRITIE', 'BOLI NUTRITIE', 1, 2),
	(3, 'SECTIE CHIRURGIE', 'CHIRURGIE', 2, 1),
	(4, 'SECTIA BOLI INFECTIOASE', 'BOLI INFECTIOASE', 3, 2);
/*!40000 ALTER TABLE `sectie` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
