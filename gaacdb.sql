-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2020 at 08:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11408406_gaac`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajudamedica`
--

CREATE TABLE `ajudamedica` (
  `id` int(11) NOT NULL,
  `foiCentroSaude` varchar(45) DEFAULT NULL,
  `foiDiagnosticado` varchar(45) DEFAULT NULL,
  `recebeuTratamento` varchar(45) DEFAULT NULL,
  `qualDiagnostico` varchar(45) DEFAULT NULL,
  `Entrevista_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aldeia`
--

CREATE TABLE `aldeia` (
  `id` int(11) NOT NULL,
  `nomeAldeia` varchar(45) NOT NULL,
  `idUtilizador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aldeia`
--

INSERT INTO `aldeia` (`id`, `nomeAldeia`, `idUtilizador`) VALUES
(1, 'Ancuabe', 1),
(2, 'Ntessa', NULL),
(3, 'Ntessa', NULL),
(4, 'Ntessa', NULL),
(5, 'Chiure2', NULL),
(6, 'Nonane', NULL),
(7, 'Muaguide', NULL),
(8, 'Ntele', NULL),
(9, 'Nanhomane', NULL),
(10, 'Namcapa', NULL),
(11, 'Nacololo', NULL),
(12, 'Ngeue', NULL),
(13, 'Mbonge', NULL),
(14, 'Ntuto', NULL),
(15, 'Gihote', NULL),
(16, 'Ngeue', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cargaviralestatus`
--

CREATE TABLE `cargaviralestatus` (
  `id` int(11) NOT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargaviralestatus`
--

INSERT INTO `cargaviralestatus` (`id`, `estado`) VALUES
(1, 'Dectetavel'),
(2, 'Nao Dectetavel'),
(3, 'Obito'),
(4, 'Gravida');

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--
-- Error reading structure for table id11408406_gaac.consulta: #1932 - Table 'id11408406_gaac.consulta' doesn't exist in engine
-- Error reading data for table id11408406_gaac.consulta: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `id11408406_gaac`.`consulta`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `emprego`
--

CREATE TABLE `emprego` (
  `id` int(11) NOT NULL,
  `emprego` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emprego`
--

INSERT INTO `emprego` (`id`, `emprego`) VALUES
(1, 'Tem emprego remunerado'),
(2, 'Nao tem emprego remunerado');

-- --------------------------------------------------------

--
-- Table structure for table `entrevista`
--

CREATE TABLE `entrevista` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `idMembro` int(11) NOT NULL,
  `idSintoma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estadocivil`
--

CREATE TABLE `estadocivil` (
  `id` int(11) NOT NULL,
  `estadoCivil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estadocivil`
--

INSERT INTO `estadocivil` (`id`, `estadoCivil`) VALUES
(1, 'Tem Parceiro/a'),
(2, 'Nao tem Parceiro/a');

-- --------------------------------------------------------

--
-- Table structure for table `estadoparceiro`
--

CREATE TABLE `estadoparceiro` (
  `id` int(11) NOT NULL,
  `Parceiro` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estadoparceiro`
--

INSERT INTO `estadoparceiro` (`id`, `Parceiro`) VALUES
(1, 'HIV Positivo'),
(2, 'HIV Negativo'),
(3, 'Nao sabe');

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Table structure for table `grupogaac`
--

CREATE TABLE `grupogaac` (
  `id` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `nomeGrupo` varchar(45) NOT NULL,
  `idAldeia` int(11) NOT NULL,
  `dataCriacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupogaac`
--

INSERT INTO `grupogaac` (`id`, `numero`, `nomeGrupo`, `idAldeia`, `dataCriacao`) VALUES
(1, NULL, 'ANC321', 1, '2020-01-29'),
(2, NULL, 'ANC987', 1, '2020-01-29'),
(3, NULL, 'Esperanca', 1, '2020-02-17'),
(4, NULL, 'TesteCampo', 1, '2020-02-20'),
(5, NULL, 'Nonane', 1, '2020-02-20'),
(6, NULL, 'Makalelo', 1, '2020-02-20'),
(7, NULL, 'Wamotsa', 1, '2020-02-20'),
(8, NULL, 'Muaguide', 7, '2020-02-20'),
(9, NULL, 'Unido', 8, '2020-02-24'),
(10, NULL, 'Nanhomane', 9, '2020-02-27'),
(11, NULL, 'Niri wamotsa', 10, '2020-02-27'),
(12, NULL, 'Cariaco', 11, '2020-02-28'),
(13, NULL, 'Somos', 12, '2020-02-28'),
(14, NULL, 'Nawaco momo', 13, '2020-04-22'),
(15, NULL, 'Ntuto', 14, '2020-04-22'),
(16, NULL, 'Nacololo', 11, '2020-05-04'),
(17, NULL, 'Gihote', 15, '2020-05-04'),
(18, NULL, 'Ngeue', 16, '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `membro`
--

CREATE TABLE `membro` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `apelido` varchar(45) NOT NULL,
  `nid` varchar(45) NOT NULL,
  `dataNascimento` date NOT NULL,
  `dataIngressonogrupo` date NOT NULL,
  `partilhouestadoParceiro` varchar(45) DEFAULT NULL,
  `idEstadoCivil` int(11) NOT NULL,
  `idEmprego` int(11) NOT NULL,
  `idGrupogaac` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `idEducacao` int(11) NOT NULL,
  `idMora` int(11) NOT NULL,
  `cargaViralStatus` varchar(45) DEFAULT NULL,
  `dataPreIngresso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membro`
--

INSERT INTO `membro` (`id`, `nome`, `apelido`, `nid`, `dataNascimento`, `dataIngressonogrupo`, `partilhouestadoParceiro`, `idEstadoCivil`, `idEmprego`, `idGrupogaac`, `idGenero`, `idEstado`, `idEducacao`, `idMora`, `cargaViralStatus`, `dataPreIngresso`) VALUES
(3, 'Pedro', 'Carlos', '1234', '1989-03-15', '2020-01-27', 'Sim', 1, 1, 1, 1, 1, 1, 1, 'Activo', '2020-01-15'),
(4, 'Antonio', 'Lombe', '5748', '1997-11-15', '2020-01-27', 'Sim', 1, 1, 1, 1, 1, 1, 1, NULL, '2020-01-15'),
(5, 'Roma', 'Nefiro', '98765', '1988-04-15', '2020-01-29', 'Sim', 1, 1, 1, 1, 1, 1, 1, 'Retornado', '2020-01-15'),
(6, 'Marta', 'Jose', '7654', '2020-02-15', '2020-02-17', 'Sim', 1, 2, 1, 2, 1, 2, 4, NULL, '2020-02-17'),
(7, 'Marta', 'Jose', '7654', '2020-02-15', '2020-02-17', 'Sim', 1, 2, 3, 2, 1, 2, 4, NULL, '2020-02-17'),
(8, 'Laura', 'Matias', '4222', '2020-02-05', '2020-02-17', 'Nao', 2, 2, 3, 2, 1, 2, 1, NULL, '2020-02-17'),
(9, 'Lopez', 'Antonio', '321', '2020-02-20', '2020-02-20', 'Sim', 1, 1, 1, 1, 1, 1, 1, NULL, '2020-02-20'),
(10, 'Teste Nome', 'Teste Apelido', '568', '2020-02-21', '2020-02-20', 'Nao', 2, 2, 4, 1, 3, 3, 1, NULL, '2020-02-20'),
(11, 'Andurabe', 'Ussuale', '2007/00068', '2020-02-20', '2020-02-20', 'Sim', 1, 2, 5, 1, 1, 5, 3, 'Activo', '2020-02-20'),
(12, 'Helena', 'Califa', '2014/00059', '2020-02-20', '2020-02-20', 'Nao', 2, 2, 5, 2, 3, 5, 2, NULL, '2020-02-20'),
(13, 'Helena ', 'Cassimo', '014/20', '2020-02-20', '2020-02-20', 'Nao', 2, 2, 1, 2, 3, 5, 2, NULL, '2020-02-20'),
(14, 'Fatima ', 'Agide', '09/210', '2020-02-20', '2020-02-20', 'Sim', 1, 2, 1, 2, 2, 5, 3, NULL, '2020-02-20'),
(15, 'Mariamo', 'Vasco', '014/178', '2020-02-20', '2020-02-20', 'Nao', 2, 2, 1, 2, 3, 5, 2, NULL, '2020-02-20'),
(16, 'Puhane', 'Armando', '129/016', '2020-02-20', '2020-02-20', 'Nao', 2, 2, 8, 2, 3, 5, 2, 'Activo', '2020-02-20'),
(17, 'Amina', 'Luis', '252/010', '2020-02-20', '2020-02-20', 'Nao', 2, 2, 8, 2, 3, 5, 2, NULL, '2020-02-20'),
(18, 'Awage', 'Amade', '013/746', '2020-02-20', '2020-02-20', 'Nao', 2, 2, 8, 2, 3, 5, 1, NULL, '2020-02-20'),
(19, 'Salia', 'Juma', '012/241', '2020-02-24', '2020-02-24', 'Sim', 1, 2, 9, 2, 2, 1, 3, NULL, '2012-02-04'),
(20, 'Mariamo', 'Rafael', '010/343', '2020-02-24', '2020-02-24', 'Nao', 2, 2, 9, 2, 3, 5, 2, NULL, '2020-02-24'),
(21, 'Atimuna', 'Andurusse', '016/209', '1987-02-27', '2020-02-27', 'Nao', 2, 1, 10, 2, 3, 3, 2, 'Obito', '2016-10-14'),
(22, 'Marssamo ', 'Cussi', '011/070', '1952-09-25', '2020-02-27', 'Nao', 2, 2, 10, 2, 3, 5, 2, NULL, '2019-02-27'),
(23, 'Pedro', 'Amtonio', '190/015', '1968-02-27', '2020-02-27', 'Sim', 1, 2, 10, 1, 1, 3, 3, NULL, '2020-02-27'),
(24, 'Amina ', 'Omar', '12606', '2020-02-27', '2020-02-27', 'Nao', 2, 2, 10, 2, 3, 5, 1, NULL, '2020-02-27'),
(25, 'Anita', 'Aquimo', '09/90', '1976-01-01', '2020-02-27', 'Sim', 1, 2, 11, 2, 2, 1, 3, NULL, '2020-09-18'),
(26, 'Luisa', 'Antonio', '010/415', '1987-02-27', '2020-02-27', 'Sim', 1, 2, 11, 2, 2, 5, 3, NULL, '2015-02-20'),
(27, 'Rabia', 'Joaquim', '010329', '1986-02-27', '2020-02-27', 'Nao', 2, 2, 11, 2, 3, 5, 1, NULL, '2019-02-13'),
(28, 'Saide', 'Latifo', '35/015', '1972-02-28', '2020-02-28', 'Sim', 1, 2, 12, 1, 2, 1, 3, NULL, '2020-02-28'),
(29, 'Julio', 'Waite', '221/016 ', '1968-02-28', '2020-02-28', 'Sim', 1, 2, 12, 1, 1, 5, 3, NULL, '2016-02-28'),
(30, 'Aina', 'Adabo ', '012/189', '1990-02-28', '2020-02-28', 'Nao', 2, 2, 12, 2, 3, 5, 2, NULL, '2017-02-28'),
(31, 'Levane', 'Cecilio', '011/150 ', '2011-03-25', '2020-02-28', 'Nao', 2, 2, 13, 2, 3, 5, 3, NULL, '2020-02-28'),
(32, 'Helena ', 'Suade', '017/32', '1988-02-28', '2020-02-28', 'Nao', 2, 2, 13, 2, 3, 2, 2, NULL, '2020-02-28'),
(33, 'Agira', 'Buanasak', '016/11', '1990-02-28', '2020-02-28', 'Sim', 1, 2, 13, 2, 1, 2, 3, NULL, '2020-02-28'),
(34, 'Regina ', 'Atanasio', '010/ 179', '1981-04-22', '2020-04-22', 'Nao', 2, 2, 14, 2, 3, 1, 2, NULL, '2013-06-28'),
(35, 'Julieta', 'Atanasio', '010/060', '1980-04-22', '2020-04-22', 'Sim', 1, 2, 14, 2, 2, 5, 3, NULL, '2019-06-28'),
(36, 'Judite', 'Ernesto ', '011/087', '1984-04-23', '2020-04-23', 'Sim', 1, 2, 14, 2, 2, 5, 3, NULL, '2013-06-28'),
(37, 'Alima', 'Pius', '08/421', '1978-04-23', '2020-04-23', 'Sim', 1, 2, 14, 2, 2, 1, 3, NULL, '2013-06-28'),
(38, 'Guilherme', 'Muito', '014/401', '1950-05-04', '2020-05-04', 'Sim', 1, 2, 16, 1, 1, 5, 2, NULL, '2016-05-12'),
(39, 'Suema ', 'Nihuva', '010/200', '1965-05-04', '2020-05-04', 'Sim', 1, 2, 16, 2, 2, 5, 3, NULL, '2016-04-12'),
(40, 'Amissina', 'Amedi', '014/293', '1985-05-04', '2020-05-04', 'Sim', 1, 2, 16, 2, 2, 5, 3, NULL, '2016-04-12'),
(41, 'Suema ', 'Nihuva', '010/200', '1965-05-04', '2020-05-04', 'Sim', 1, 2, 16, 2, 2, 5, 3, NULL, '2016-04-12'),
(42, 'Julieta', 'Ernesto', '014/169', '1995-05-04', '2020-05-04', 'Nao', 2, 2, 16, 2, 3, 1, 1, NULL, '2016-04-12'),
(43, 'Luisa ', 'Amiduna', '017/141', '1976-05-04', '2020-05-04', 'Sim', 1, 2, 17, 2, 2, 5, 3, NULL, '2016-01-04'),
(44, 'Sarima', 'Sumail', '010/354', '1981-05-04', '2020-05-04', 'Sim', 1, 2, 17, 2, 2, 5, 3, NULL, '2016-01-04'),
(45, 'Teresa', 'Assamo', '015/078', '1963-06-13', '2020-05-04', 'Sim', 1, 2, 17, 2, 1, 5, 3, NULL, '2016-01-01'),
(46, 'Marieta', 'Mussa', '07/014', '1960-05-04', '2020-05-04', 'Nao', 2, 2, 17, 2, 3, 5, 2, NULL, '2016-01-01'),
(47, 'Amissina', 'Francisco', '012/197', '1982-05-11', '2020-05-11', 'Nao', 2, 2, 9, 2, 3, 5, 2, NULL, '2013-01-10'),
(48, 'Amissina', 'Francisco', '012/197', '1982-05-11', '2020-05-11', 'Nao', 2, 2, 9, 2, 3, 5, 2, NULL, '2013-01-10'),
(49, 'Suzana', 'Selemane', '09/328', '1967-05-11', '2020-05-11', 'Nao', 2, 2, 9, 2, 3, 5, 2, NULL, '2013-01-10'),
(50, 'Awge', 'Salimo', '178/017', '1985-05-11', '2020-05-11', 'Sim', 1, 2, 9, 2, 2, 5, 3, NULL, '2013-01-10'),
(51, 'Levane', 'Cecilio', '011/150', '1978-05-12', '2020-05-12', 'Nao', 2, 2, 18, 2, 3, 5, 2, NULL, '2017-08-08'),
(52, 'Helena', 'Suade', '017/32', '1988-05-12', '2020-05-12', 'Nao', 2, 2, 18, 2, 3, 2, 2, NULL, '2017-08-08'),
(53, 'Agira', 'Buanasak', '016/11', '1890-05-12', '2020-05-12', 'Sim', 1, 2, 18, 2, 1, 2, 3, NULL, '2017-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `moracom`
--

CREATE TABLE `moracom` (
  `id` int(11) NOT NULL,
  `moracom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moracom`
--

INSERT INTO `moracom` (`id`, `moracom`) VALUES
(1, 'Sozinho'),
(2, 'Filhos/as'),
(3, 'Parceiro/a e Filhos/as'),
(4, 'Parceiro/a');

-- --------------------------------------------------------

--
-- Table structure for table `nivel`
--

CREATE TABLE `nivel` (
  `id` int(11) NOT NULL,
  `educacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nivel`
--

INSERT INTO `nivel` (`id`, `educacao`) VALUES
(1, 'Letrado'),
(2, 'Primaria'),
(3, 'Secondaria'),
(4, 'Mais que secondaria'),
(5, 'Nao Letrado');

-- --------------------------------------------------------

--
-- Table structure for table `nivelacesso`
--

CREATE TABLE `nivelacesso` (
  `id` int(11) NOT NULL,
  `nivelAcesso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nivelacesso`
--

INSERT INTO `nivelacesso` (`id`, `nivelAcesso`) VALUES
(1, 'Conselheiro');

-- --------------------------------------------------------

--
-- Table structure for table `sintoma`
--

CREATE TABLE `sintoma` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `nomeUtilizador` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `idNivelAcesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`id`, `nomeUtilizador`, `senha`, `idNivelAcesso`) VALUES
(1, 'Pedro', '12345', 1),
(2, 'Gaac', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajudamedica`
--
ALTER TABLE `ajudamedica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entrevitaA` (`Entrevista_id`);

--
-- Indexes for table `aldeia`
--
ALTER TABLE `aldeia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilizador` (`idUtilizador`);

--
-- Indexes for table `cargaviralestatus`
--
ALTER TABLE `cargaviralestatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprego`
--
ALTER TABLE `emprego`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_membroE` (`idMembro`),
  ADD KEY `fk_sintoma` (`idSintoma`);

--
-- Indexes for table `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estadoparceiro`
--
ALTER TABLE `estadoparceiro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupogaac`
--
ALTER TABLE `grupogaac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aldeia` (`idAldeia`);

--
-- Indexes for table `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_EstadoCivil` (`idEstadoCivil`),
  ADD KEY `fk_emprego` (`idEmprego`),
  ADD KEY `fk_grupoGaac` (`idGrupogaac`),
  ADD KEY `fk_genero` (`idGenero`),
  ADD KEY `fk_estado` (`idEstado`),
  ADD KEY `fk_educacao` (`idEducacao`),
  ADD KEY `fk_moracom` (`idMora`);

--
-- Indexes for table `moracom`
--
ALTER TABLE `moracom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivelacesso`
--
ALTER TABLE `nivelacesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sintoma`
--
ALTER TABLE `sintoma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nacesso` (`idNivelAcesso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajudamedica`
--
ALTER TABLE `ajudamedica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aldeia`
--
ALTER TABLE `aldeia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cargaviralestatus`
--
ALTER TABLE `cargaviralestatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emprego`
--
ALTER TABLE `emprego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estadoparceiro`
--
ALTER TABLE `estadoparceiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grupogaac`
--
ALTER TABLE `grupogaac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `membro`
--
ALTER TABLE `membro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `moracom`
--
ALTER TABLE `moracom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sintoma`
--
ALTER TABLE `sintoma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ajudamedica`
--
ALTER TABLE `ajudamedica`
  ADD CONSTRAINT `fk_entrevitaA` FOREIGN KEY (`Entrevista_id`) REFERENCES `entrevista` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `aldeia`
--
ALTER TABLE `aldeia`
  ADD CONSTRAINT `fk_utilizador` FOREIGN KEY (`idUtilizador`) REFERENCES `utilizador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `entrevista`
--
ALTER TABLE `entrevista`
  ADD CONSTRAINT `fk_membroE` FOREIGN KEY (`idMembro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sintoma` FOREIGN KEY (`idSintoma`) REFERENCES `sintoma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grupogaac`
--
ALTER TABLE `grupogaac`
  ADD CONSTRAINT `fk_aldeia` FOREIGN KEY (`idAldeia`) REFERENCES `aldeia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `membro`
--
ALTER TABLE `membro`
  ADD CONSTRAINT `fk_EstadoCivil` FOREIGN KEY (`idEstadoCivil`) REFERENCES `estadocivil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_educacao` FOREIGN KEY (`idEducacao`) REFERENCES `nivel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_emprego` FOREIGN KEY (`idEmprego`) REFERENCES `emprego` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`idEstado`) REFERENCES `estadoparceiro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_genero` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupoGaac` FOREIGN KEY (`idGrupogaac`) REFERENCES `grupogaac` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_moracom` FOREIGN KEY (`idMora`) REFERENCES `moracom` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD CONSTRAINT `fk_nacesso` FOREIGN KEY (`idNivelAcesso`) REFERENCES `nivelacesso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
