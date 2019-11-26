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
  `codanalize` int(11) NOT NULL,
  `datarecoltarii` varchar(50) DEFAULT NULL,
  `dataefectuarii` varchar(50) DEFAULT NULL,
  `varsta` int(11) DEFAULT NULL,
  `presiunea` varchar(50) DEFAULT NULL,
  `proba` varchar(50) DEFAULT NULL,
  `receptie` varchar(50) DEFAULT NULL,
  `opiniisiinterpretari` varchar(50) DEFAULT NULL,
  `codbiochmie` int(11) DEFAULT NULL,
  PRIMARY KEY (`codanalize`),
  KEY `codbiochmie` (`codbiochmie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.biochimie
CREATE TABLE IF NOT EXISTS `biochimie` (
  `codbiochimie` int(11) NOT NULL,
  `analiza` varchar(50) DEFAULT NULL,
  `rezultat` varchar(50) DEFAULT NULL,
  `intervaldereferinta` varchar(50) DEFAULT NULL,
  `metoda` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codbiochimie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `oras` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `subiect` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
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

-- Data exporting was unselected.
-- Dumping structure for table pie.fisaconsultatie
CREATE TABLE IF NOT EXISTS `fisaconsultatie` (
  `codfisa` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.functie
CREATE TABLE IF NOT EXISTS `functie` (
  `codfunctie` int(11) NOT NULL,
  `denumire` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codfunctie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.internari
CREATE TABLE IF NOT EXISTS `internari` (
  `codinternari` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.logare
CREATE TABLE IF NOT EXISTS `logare` (
  `cont` varchar(50) DEFAULT NULL,
  `parola` varchar(50) DEFAULT NULL,
  `functie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.pacient
CREATE TABLE IF NOT EXISTS `pacient` (
  `codpacient` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `cnp` bigint(20) DEFAULT NULL,
  `Oras` varchar(50) DEFAULT NULL,
  `strada` varchar(50) DEFAULT NULL,
  `numarstrada` int(11) DEFAULT NULL,
  `datanasterii` varchar(50) DEFAULT NULL,
  `gen` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `parola` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codpacient`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.rezervari
CREATE TABLE IF NOT EXISTS `rezervari` (
  `codrezervari` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `CNP` bigint(20) DEFAULT NULL,
  `codpacient` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`codrezervari`),
  KEY `codpacient` (`codpacient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table pie.sectie
CREATE TABLE IF NOT EXISTS `sectie` (
  `codsectie` int(11) NOT NULL,
  `denumire` varchar(50) DEFAULT NULL,
  `specializarea` varchar(50) DEFAULT NULL,
  `camera` int(11) DEFAULT NULL,
  `etaj` int(11) DEFAULT NULL,
  PRIMARY KEY (`codsectie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
