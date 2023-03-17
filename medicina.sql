-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 17, 2023 alle 18:07
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicina`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `formativa_didattica`
--

CREATE TABLE `formativa_didattica` (
  `formativa` varchar(6) CHARACTER SET utf8 NOT NULL,
  `didattica` varchar(6) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `formativa_didattica`
--

INSERT INTO `formativa_didattica` (`formativa`, `didattica`) VALUES
('12', '1267'),
('500134', '500130'),
('500134', '501680'),
('500161', '500436'),
('500191', '500131'),
('500191', '500431'),
('500191', '500434'),
('500191', '509031'),
('500312', '501682'),
('500312', '501683'),
('500312', '501684'),
('500312', '501685'),
('500312', '501768'),
('500312', '501769'),
('500312', '501770'),
('500312', '503343'),
('500402', '500026'),
('500402', '500738'),
('500402', '501827'),
('500435', '500162'),
('500435', '500763'),
('500435', '500764'),
('501317', '501699'),
('501317', '502650'),
('501317', '504874'),
('501317', '508910'),
('501628', '500195'),
('501628', '506417'),
('501667', '501636'),
('501667', '501792'),
('501690', '501346'),
('501690', '501670'),
('501690', '502625'),
('501690', '502626'),
('501694', '500198'),
('501694', '501322'),
('501694', '501356'),
('501694', '503966'),
('501694', '504861'),
('501746', '501809'),
('501746', '502756'),
('501763', '501810'),
('501763', '501811'),
('501763', '502642'),
('501771', '501494'),
('501771', '501772'),
('501771', '501777'),
('501778', '501779'),
('501778', '501780'),
('501781', '501782'),
('501781', '501783'),
('501781', '507889'),
('501784', '501785'),
('501784', '501786'),
('501784', '501787'),
('501788', '501789'),
('501788', '507887'),
('501790', '501630'),
('501790', '501791'),
('501793', '501627'),
('501793', '501794'),
('501793', '507888'),
('501795', '501631'),
('501795', '501797'),
('501795', '506414'),
('501802', '501495'),
('501802', '501803'),
('501804', '501753'),
('501804', '501754'),
('501804', '501805'),
('501804', '501806'),
('501804', '501807'),
('501808', '501498'),
('501808', '501747'),
('501832', '501834'),
('501832', '502645'),
('501832', '504447'),
('501833', '501813'),
('501833', '502646'),
('502622', '502623'),
('502622', '504459'),
('503488', '500124'),
('503488', '501692'),
('504451', '500210'),
('504451', '500757'),
('504451', '501497'),
('504451', '502638'),
('504451', '504863'),
('506412', '501814'),
('506412', '501815'),
('506412', '502653'),
('506413', '501634'),
('506413', '501798'),
('506413', '501799'),
('506413', '501800'),
('507239', '507240'),
('507239', '507241'),
('507239', '507242'),
('507239', '507243'),
('507239', '507244'),
('507239', '507245'),
('507239', '507246'),
('507239', '507247'),
('507239', '507248'),
('507239', '507249'),
('507250', '501971'),
('507250', '501999'),
('507250', '507251'),
('507250', '507252'),
('507250', '507253'),
('507250', '507254'),
('507250', '507255'),
('507250', '507256'),
('507250', '507257'),
('507259', '507260'),
('507259', '507261'),
('507259', '507262'),
('507259', '507263'),
('510455', '510456'),
('510455', '510457');

-- --------------------------------------------------------

--
-- Struttura della tabella `piano_di_studi`
--

CREATE TABLE `piano_di_studi` (
  `codice` varchar(6) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CFU` int(11) DEFAULT NULL,
  `settore` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `n_settore` int(11) DEFAULT NULL,
  `TAF_Ambito` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `ore_lezione` int(11) DEFAULT NULL,
  `ore_laboratorio` int(11) DEFAULT NULL,
  `ore_tirocinio` int(11) DEFAULT NULL,
  `tipo_insegnamento` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `descrizione_semestre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `anno1` int(11) DEFAULT NULL,
  `anno2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `piano_di_studi`
--

INSERT INTO `piano_di_studi` (`codice`, `nome`, `CFU`, `settore`, `n_settore`, `TAF_Ambito`, `ore_lezione`, `ore_laboratorio`, `ore_tirocinio`, `tipo_insegnamento`, `semestre`, `descrizione_semestre`, `anno1`, `anno2`) VALUES
('111', 'asd', 11, 'ee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12', 'weee', 123, 'we', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('123', 'eqwe', 12, 'sde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1267', 'e', 15, 'e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('145', 'asd', 23, 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('500000', 'PROVA FINALE', 18, 'PROFIN_S', NULL, 'Lingua/Prova Finale / Per la prova finale', 144, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 6, NULL),
('500026', 'STATISTICA', 5, 'MED', 1, 'Caratterizzante / Inglese scientifico e\nabilità linguistiche, informatiche e relazionali, pedagogia medica,\ntecnologie avanzate e a distanza di informazione e comunicazione', 40, NULL, NULL, 'Obbligatorio', 0, '', 2, NULL),
('500124', 'ECONOMIA AZIENDALE', 1, 'SECS-P', 7, 'Caratterizzante / Scienze umane, politiche\ndella salute e management sanitario', 8, NULL, NULL, 'Obbligatorio', 0, '', 2, NULL),
('500130', 'CHIMICA', 4, 'BIO', 10, 'Base / Struttura, funzione e metabolismo\ndelle molecole d’interesse biologico', 32, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 1, NULL),
('500131', 'PROPEDEUTICA BIOCHIMICA', 3, 'BIO', 10, 'Base / Struttura, funzione e metabolismo\ndelle molecole d’interesse biologico', 24, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 1, NULL),
('500134', 'BIOLOGIA GENERALE', 4, 'BIO', 13, 'Base / Discipline generali per la\nformazione del medico', 32, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 1, NULL),
('500136', 'GENETICA UMANA', 3, 'MED', 3, 'Base / Discipline generali per la\nformazione del medico', 24, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 2, NULL),
('500161', 'ANATOMIA UMANA', 20, '', NULL, '', 160, NULL, NULL, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 1, NULL),
('500162', 'ISTOLOGIA', 4, 'BIO', 17, 'Base / Morfologia umana', 32, NULL, NULL, 'Obbligatorio', 0, '', 1, NULL),
('500191', 'BIOCHIMICA', 18, '', NULL, '', 144, NULL, NULL, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 1, NULL),
('500195', 'GENETICA MEDICA', 1, 'MED', 3, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('500198', 'FARMACOLOGIA', 1, 'BIO', 14, 'Caratterizzante / Farmacologia,\ntossicologia e principi di terapia medica', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('500210', 'BIOETICA', 2, 'MED', 2, 'Caratterizzante / Scienze umane, politiche\ndella salute e management sanitario', 16, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('500312', 'FISIOLOGIA UMANA', 20, '', NULL, '', 160, NULL, NULL, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 2, NULL),
('500402', 'METODOLOGIA MEDICO SCIENTIFICA', 8, '', NULL, '', 64, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 2, NULL),
('500431', 'ELEMENTI DI BIOCHIMICA', 7, 'BIO', 10, 'Base / Struttura, funzione e metabolismo\ndelle molecole d’interesse biologico', 56, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 1, NULL),
('500434', 'BIOCHIMICA CELLULARE', 2, 'BIO', 10, 'Base / Struttura, funzione e metabolismo\ndelle molecole d’interesse biologico', 16, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 1, NULL),
('500435', 'ISTOLOGIA E EMBRIOLOGIA', 9, '', NULL, '', 72, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 1, NULL),
('500436', 'ANATOMIA 1', 9, 'BIO', 16, 'Affine/Integrativa / Attività formative\naffini o integrative', 72, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 1, NULL),
('500738', 'STORIA MEDICINA', 2, 'MED', 2, 'Caratterizzante / Inglese scientifico e\nabilità linguistiche, informatiche e relazionali, pedagogia medica,\ntecnologie avanzate e a distanza di informazione e comunicazione', 16, NULL, NULL, 'Obbligatorio', 0, '', 2, NULL),
('500757', 'IGIENE AMBIENTALE', 1, 'MED', 42, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('500763', 'EMBRIOLOGIA', 3, 'BIO', 17, 'Base / Morfologia umana', 24, NULL, NULL, 'Obbligatorio', 0, '', 1, NULL),
('500764', 'CITOLOGIA', 2, 'BIO', 17, 'Base / Morfologia umana', 16, NULL, NULL, 'Obbligatorio', 0, '', 1, NULL),
('501317', 'MICROBIOLOGIA', 9, '', NULL, '', 12, 64, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('501322', 'TOSSICOLOGIA', 1, 'BIO', 14, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501346', 'FARMACOCINETICA', 1, 'BIO', 14, 'Caratterizzante / Farmacologia,\ntossicologia e principi di terapia medica', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501356', 'FARMACOLOGIA APPLICATA', 1, 'BIO', 14, 'Caratterizzante / Farmacologia,\ntossicologia e principi di terapia medica', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501494', 'CHIRURGIA GENERALE', 3, 'MED', 18, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 16, 12, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('501495', 'DERMATOLOGIA', 2, 'MED', 35, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501497', 'MEDICINA LEGALE', 4, 'MED', 43, 'Caratterizzante / Medicina e sanità\npubblica e degli ambienti di lavoro e scienze medico legali', 32, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('501498', 'NEUROLOGIA', 5, 'MED', 26, 'Caratterizzante / Discipline neurologiche', 40, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501593', 'NEUROSCIENZE', 1, 'BIO', 9, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 1, 2),
('501624', 'MALATTIE INFETTIVE', 5, 'MED', 17, 'Caratterizzante / Medicina di comunità', 40, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 5, NULL),
('501627', 'ENDOCRINOLOGIA', 3, 'MED', 13, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 24, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501628', 'GINECOLOGIA E OSTETRICIA', 6, '', NULL, '', 48, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 6, NULL),
('501630', 'NEFROLOGIA', 4, 'MED', 14, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 32, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501631', 'GASTROENTEROLOGIA', 3, 'MED', 12, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 24, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501634', 'ONCOLOGIA MEDICA', 2, 'MED', 6, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501636', 'ORTOPEDIA', 2, 'MED', 33, 'Caratterizzante / Clinica medico-chirurgica\ndell’apparato locomotore', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501657', 'MEDICINA DELLO SPORT', 2, 'BIO', 9, 'A scelta dello studente / A scelta dello\nstudente', 16, NULL, NULL, '', 1, 'Primo Semestre', 1, 2),
('501667', 'MALATTIE DELL’APPARATO\nLOCOMOTORE', 4, '', NULL, '', 32, NULL, NULL, 'Obbligatorio', 2, '', 4, NULL),
('501670', 'FARMACOLOGIA GENERALE', 2, 'BIO', 14, 'Caratterizzante / Farmacologia,\ntossicologia e principi di terapia medica', 16, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501680', 'ANATOMIA 2', 11, 'BIO', 16, 'Base / Morfologia umana', 88, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 1, NULL),
('501682', 'FISIOLOGIA RESPIRATORIA', 3, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 24, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 2, NULL),
('501683', 'NEUROFISIOLOGIA', 3, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 24, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 2, NULL),
('501684', 'FISIOLOGIA RENE', 2, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 16, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 2, NULL),
('501685', 'FISIOLOGIA GASTROENTEROLOGICA', 2, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 16, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 2, NULL),
('501687', 'IMMUNOLOGIA', 5, 'MED', 4, 'Caratterizzante / Patologia generale e\nmolecolare, immunopatologia, fisiopatologia generale, microbiologia e\nparassitologia', 32, 12, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 2, NULL),
('501690', 'FARMACOLOGIA 1', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 3, NULL),
('501692', 'IGIENE E MEDICINA DI COMUNITA’', 3, 'MED', 42, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 24, NULL, NULL, 'Obbligatorio', 0, '', 2, NULL),
('501694', 'FARMACOLOGIA 2', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 5, NULL),
('501695', 'ANATOMIA PATOLOGICA', 8, 'MED', 8, 'Caratterizzante / Discipline\nanatomo-patologiche e correlazioni anatomo-cliniche', 64, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('501699', 'MICROBIOLOGIA CLINICA', 2, 'MED', 7, 'Caratterizzante / Medicina di laboratorio e\ndiagnostica integrata', 16, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501746', 'PSICHIATRIA', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 5, NULL),
('501747', 'NEUROCHIRURGIA', 1, 'MED', 27, 'Caratterizzante / Discipline neurologiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501753', 'CHIRURGIA MAXILLO FACCIALE', 1, 'MED', 29, 'Affine/Integrativa / Attività formative\naffini o integrative', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501754', 'OTORINOLARINGOIATRIA', 2, 'MED', 31, 'Caratterizzante / Clinica medico-chirurgica\ndegli organi di senso', 16, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501763', 'PEDIATRIA', 7, '', NULL, '', 56, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 5, NULL),
('501768', 'FISIOLOGIA DEL MUSCOLO', 2, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 16, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 2, NULL),
('501769', 'FISIOLOGIA CARDIOCIRCOLATORIA', 3, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 24, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 2, NULL),
('501770', 'FISIOLOGIA ENDOCRINOLOGICA', 2, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 16, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 2, NULL),
('501771', 'SEMEIOTICA MEDICA E CHIRURGICA', 7, '', NULL, '', 40, 24, NULL, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 3, NULL),
('501772', 'SEMEIOTICA MEDICA', 3, 'MED', 9, 'Caratterizzante / Medicina delle attività\nmotorie e del benessere', 16, 12, NULL, 'Obbligatorio', 1, 'Primo Semestre', 3, NULL),
('501773', 'MEDICINA DI LABORATORIO', 5, 'BIO', 12, 'Caratterizzante / Medicina di laboratorio e\ndiagnostica integrata', 24, 24, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('501777', 'SEMEIOTICA STRUMENTALE', 1, 'MED', 36, 'Caratterizzante / Medicina di laboratorio e\ndiagnostica integrata', 8, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 3, NULL),
('501778', 'MALATTIE DEL SISTEMA\nIMMUNITARIO E REUMATOLOGIA', 4, '', NULL, '', 32, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('501779', 'REUMATOLOGIA', 3, 'MED', 16, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 24, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501780', 'IMMUNOLOGIA CLINICA', 1, 'MED', 9, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501781', 'MALATTIE SANGUE', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('501782', 'EMATOLOGIA', 3, 'MED', 15, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 24, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501783', 'ONCOLOGIA EMATOLOGICA', 1, 'MED', 15, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501784', 'MALATTIE CARDIOVASCOLARI', 6, '', NULL, '', 48, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('501785', 'CARDIOLOGIA', 4, 'MED', 11, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 32, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501786', 'CHIRURGIA CARDIACA', 1, 'MED', 23, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501787', 'CHIRURGIA VASCOLARE', 1, 'MED', 22, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501788', 'MALATTIE APPARATO RESPIRATORIO', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('501789', 'CHIRURGIA TORACICA', 1, 'MED', 21, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501790', 'MALATTIE DEL RENE E APPARATO\nURINARIO', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('501791', 'UROLOGIA', 1, 'MED', 24, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501792', 'MEDICINA FISICA E RIABILITAZIONE', 2, 'MED', 34, 'Caratterizzante / Clinica medico-chirurgica\ndell’apparato locomotore', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501793', 'MALATTIE SISTEMA ENDOCRINO E\nMETABOLISMO', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('501794', 'CHIRURGIA ENDOCRINA', 1, 'MED', 18, 'Caratterizzante / Clinica generale medica e\nchirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('501795', 'MALATTIE APPARATO DIGERENTE', 6, '', NULL, '', 48, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('501797', 'NUTRIZIONE UMANA', 1, 'MED', 49, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501798', 'RADIOLOGIA', 2, 'MED', 36, 'Caratterizzante / Discipline radiologiche e\nradioterapiche', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501799', 'RADIOTERAPIA', 1, 'MED', 36, 'Caratterizzante / Discipline radiologiche e\nradioterapiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501800', 'NEURORADIOLOGIA', 1, 'MED', 37, 'Caratterizzante / Discipline radiologiche e\nradioterapiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501802', 'MALATTIE CUTANEE E CHIRURGIA\nPLASTICA', 4, '', NULL, '', 32, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('501803', 'CHIRURGIA PLASTICA E RICOSTRUTTIVA', 2, 'MED', 19, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('501804', 'MALATTIE ORGANI DI SENSO', 8, '', NULL, '', 64, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 5, NULL),
('501805', 'OFTALMOLOGIA', 3, 'MED', 30, 'Caratterizzante / Clinica medico-chirurgica\ndegli organi di senso', 24, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501806', 'AUDIOLOGIA', 1, 'MED', 32, 'Caratterizzante / Clinica medico-chirurgica\ndegli organi di senso', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501807', 'ODONTOIATRIA', 1, 'MED', 28, 'Caratterizzante / Clinica medico-chirurgica\ndegli organi di senso', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501808', 'SCIENZE NEUROLOGICHE', 6, '', NULL, '', 48, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 5, NULL),
('501809', 'PSICOLOGIA MEDICA', 2, 'MED', 25, 'Caratterizzante / Clinica psichiatrica e\ndiscipline del comportamento', 16, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501810', 'CHIRURGIA PEDIATRICA', 1, 'MED', 20, 'Caratterizzante / Discipline pediatriche', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501811', 'NEUROPSICHIATRIA INFANTILE', 1, 'MED', 39, 'Caratterizzante / Discipline pediatriche', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501813', 'MEDICINA URGENZA', 2, 'MED', 9, 'Caratterizzante / Emergenze\nmedico-chirurgiche', 16, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('501814', 'CHIRURGIA URGENZA', 1, 'MED', 18, 'Caratterizzante / Emergenze\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('501815', 'TERAPIA INTENSIVA', 2, 'MED', 41, 'Caratterizzante / Emergenze\nmedico-chirurgiche', 16, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('501817', 'INGLESE 2', 4, 'L-LIN', 12, 'Altro / Ulteriori conoscenze linguistiche', 32, NULL, NULL, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 1, 2),
('501827', 'EPIDEMIOLOGIA', 1, 'MED', 42, 'Caratterizzante / Scienze umane, politiche\ndella salute e management sanitario', 8, NULL, NULL, 'Obbligatorio', 0, '', 2, NULL),
('501832', 'CLINICA MEDICA 1', 5, '', NULL, '', 40, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 5, NULL),
('501833', 'CLINICA MEDICA 2', 8, '', NULL, '', 64, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 6, NULL),
('501834', 'GERIATRIA', 2, 'MED', 9, 'Caratterizzante / Clinica generale medica e\nchirurgica', 16, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('501971', 'TIROCINIO MEDICINA INTERNA', 1, 'MED', 9, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('501999', 'TIROCINIO NEUROLOGIA', 2, 'MED', 26, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('502622', 'PATOLOGIA GENERALE', 8, '', NULL, '', 48, 24, NULL, 'Obbligatorio', 1, 'Primo Semestre', 3, NULL),
('502623', 'FISIOPATOLOGIA GENERALE', 1, 'MED', 4, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('502625', 'FARMACODINAMICA', 1, 'BIO', 14, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('502626', 'MONITORAGGIO FARMACOLOGICO', 1, 'BIO', 14, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('502638', 'MEDICINA DEL LAVORO', 3, 'MED', 44, 'Caratterizzante / Medicina e sanità\npubblica e degli ambienti di lavoro e scienze medico legali', 24, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('502642', 'PEDIATRIA GENERALE', 5, 'MED', 38, 'Caratterizzante / Discipline pediatriche', 40, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('502645', 'MEDICINA INTERNA A', 1, 'MED', 9, 'Caratterizzante / Clinica generale medica e\nchirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('502646', 'MEDICINA INTERNA B', 6, 'MED', 9, 'Caratterizzante / Clinica generale medica e\nchirurgica', 48, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('502650', 'VIROLOGIA', 2, 'MED', 7, 'Caratterizzante / Patologia generale e\nmolecolare, immunopatologia, fisiopatologia generale, microbiologia e\nparassitologia', 16, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('502653', 'CLINICA CHIRURGICA', 6, 'MED', 18, 'Caratterizzante / Clinica generale medica e\nchirurgica', 48, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('502756', 'PSICHIATRIA GENERALE', 3, 'MED', 25, 'Caratterizzante / Clinica psichiatrica e\ndiscipline del comportamento', 24, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('503343', 'FISIOLOGIA CELLULARE', 3, 'BIO', 9, 'Base / Funzioni biologiche integrate di\norgani, sistemi e apparati umani', 24, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 2, NULL),
('503360', 'ADE VI ANNO', 4, 'NN', NULL, 'A scelta dello studente / A scelta dello\nstudente', 32, NULL, NULL, '', 2, 'Secondo Semestre', 6, NULL),
('503488', 'MEDICINA PREVENTIVA', 4, '', NULL, '', 32, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 2, NULL),
('503966', 'FARMACOLOGIA CLINICA', 1, 'BIO', 14, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('504447', 'MEDICINA DEL TERRITORIO', 2, 'MED', 9, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 16, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('504451', 'MEDICINA PUBBLICA', 11, '', NULL, '', 88, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 6, NULL),
('504459', 'PATOLOGIA', 7, 'MED', 4, 'Caratterizzante / Patologia generale e\nmolecolare, immunopatologia, fisiopatologia generale, microbiologia e\nparassitologia', 40, 24, NULL, 'Obbligatorio', 0, '', 3, NULL),
('504861', 'CHEMIOTERAPIA', 1, 'BIO', 14, 'Caratterizzante / Farmacologia,\ntossicologia e principi di terapia medica', 8, NULL, NULL, 'Obbligatorio', 0, '', 5, NULL),
('504863', 'ORGANIZZAZIONE SANITARIA', 1, 'MED', 42, 'Caratterizzante / Scienze umane, politiche\ndella salute e management sanitario', 8, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('504874', 'MICROBIOLOGIA GENERALE', 4, 'MED', 7, 'Caratterizzante / Patologia generale e\nmolecolare, immunopatologia, fisiopatologia generale, microbiologia e\nparassitologia', 32, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('506412', 'CHIRURGIA ED EMERGENZE', 9, '', NULL, '', 72, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 6, NULL),
('506413', 'DIAGNOSTICA PER IMMAGINI E\nONCOLOGIA', 6, '', NULL, '', 48, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('506414', 'CHIRURGIA GASTROENTEROLOGICA', 2, 'MED', 18, 'Caratterizzante / Clinica generale medica e\nchirurgica', 16, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('506416', 'FISICA MEDICA', 5, 'FIS', 7, 'Base / Discipline generali per la\nformazione del medico', 40, NULL, NULL, 'Obbligatorio', 1, 'Primo Semestre', 1, NULL),
('506417', 'GINECOLOGIA E OSTETRICIA – MODULO', 5, 'MED', 40, 'Caratterizzante / Discipline\nostetrico-ginecologiche, medicina della riproduzione e sessuologia medica', 40, NULL, NULL, 'Obbligatorio', 0, '', 6, NULL),
('506422', 'INGLESE 1', 4, 'L-LIN', 12, 'Altro / Ulteriori conoscenze linguistiche', 32, NULL, NULL, '', 3, 'Primo e Secondo Semestre', 1, 2),
('507237', 'TIROCINIO SEMEIOTICA MEDICA', 6, 'MED', 9, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 120, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('507238', 'TIROCINIO SEMEIOTICA CHIRURGICA', 6, 'MED', 18, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 120, 'Obbligatorio', 2, 'Secondo Semestre', 3, NULL),
('507239', 'TIROCINIO IV ANNO', 16, '', NULL, '', NULL, NULL, 320, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 4, NULL),
('507240', 'TIROCINIO RADIOLOGIA', 2, 'MED', 36, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('507241', 'TIROCINIO CARDIOLOGIA', 2, 'MED', 11, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('507242', 'TIROCINIO GASTROENTEROLOGIA', 2, 'MED', 12, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('507243', 'TIROCINIO NEFROLOGIA', 2, 'MED', 14, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('507244', 'TIROCINIO REUMATOLOGIA', 2, 'MED', 16, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('507245', 'TIROCINIO ORTOPEDIA', 1, 'MED', 33, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('507246', 'TIROCINIO DERMATOLOGIA', 1, 'MED', 35, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('507247', 'TIROCINIO CHIRURGIA PLASTICA', 1, 'MED', 19, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('507248', 'TIROCINIO PNEUMOLOGIA', 2, 'MED', 10, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 2, 'Secondo Semestre', 4, NULL),
('507249', 'TIROCINIO FISIATRIA', 1, 'MED', 34, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 1, 'Primo Semestre', 4, NULL),
('507250', 'TIROCINI V ANNO', 16, '', NULL, '', NULL, NULL, 320, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507251', 'TIROCINIO OTORINOLARINGOIATRIA', 2, 'MED', 31, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507252', 'TIROCINIO OCULISTICA', 2, 'MED', 30, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507253', 'TIROCINIO MALATTIE INFETTIVE', 2, 'MED', 17, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507254', 'TIROCINIO NEUROPSICHIATRIA\nINFANTILE', 1, 'MED', 39, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507255', 'TIROCINIO PSICHIATRIA', 1, 'MED', 25, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 20, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507256', 'TIROCINIO CHIRURGIA PEDIATRICA', 2, 'MED', 20, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507257', 'TIROCINIO PEDIATRIA', 3, 'MED', 38, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 60, 'Obbligatorio', 3, 'Primo e Secondo Semestre', 5, NULL),
('507258', 'TIROCINI A SCELTA VI ANNO', 8, 'NN', NULL, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 160, 'Obbligatorio', 1, 'Primo Semestre', 6, NULL),
('507259', 'TIROCINI OBBLIGATORI VI ANNO', 8, '', NULL, '', NULL, NULL, 160, 'Obbligatorio', 2, 'Secondo Semestre', 6, NULL),
('507260', 'TIROCINIO CLINICA MEDICA 2', 2, 'MED', 9, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 0, '', 6, NULL),
('507261', 'TIROCINIO CHIRURGIA', 2, 'MED', 18, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 0, '', 6, NULL),
('507262', 'TIROCINIO ANESTESIOLOGIA', 2, 'MED', 41, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 0, '', 6, NULL),
('507263', 'TIROCINIO GINECOLOGIA', 2, 'MED', 40, 'Altro / Tirocini formativi e di\norientamento', NULL, NULL, 40, 'Obbligatorio', 0, '', 6, NULL),
('507887', 'PNEUMOLOGIA', 4, 'MED', 10, 'Caratterizzante / Formazione clinica\ninterdisciplinare e medicina basata sulle evidenze', 32, NULL, NULL, 'Obbligatorio', 0, '', 4, NULL),
('507888', 'MALATTIE METABOLICHE', 1, 'MED', 9, 'Caratterizzante / Clinica generale medica e\nchirurgica', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('507889', 'ANATOMIA PATOLOGICA EMATOLOGICA', 1, 'MED', 8, 'Caratterizzante / Clinica delle specialità\nmedico-chirurgiche', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('508606', 'APPROFONDIMENTI DI FISIOLOGIA\nUMANA', 1, 'BIO', 9, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 1, 2),
('508607', 'TECNICHE DIAGNOSTICHE E\nTERAPEUTICHE: ECG, IMAGING TOMOGRAFICO, ADROTERAPIA', 1, 'FIS', 7, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 1, 'Primo Semestre', 1, 2),
('508608', 'INSUFFICIENZA RENALE ACUTA E\nCRONICA: CASI CLINICI IN NEFROLOGIA', 1, 'MED', 14, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508609', 'ORGANIZZAZIONE E MANAGMENT\nSANITARIO', 1, 'MED', 42, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508610', 'IL TRAPIANTO CARDIACO', 1, 'MED', 23, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508612', 'APPROFONDIMENTI IN ECG', 1, 'MED', 11, 'A scelta dello studente / A scelta dello\nstudente', 10, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508613', 'MECCANISMI DI ANTIBIOTICO\nRESISTENZA: DIAGNOSTICA E IMPATTO CLINICO', 1, 'MED', 7, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508904', 'ANATOMIA TOPOGRAFICA\nPROPEDEUTICA ALLA CHIRURGIA', 1, 'BIO', 16, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 1, 'Primo Semestre', 4, NULL),
('508905', 'FORMARE CON L’ECOGRAFIA ALLE\nSCIENZE DI BASE', 2, 'MED', 36, 'A scelta dello studente / A scelta dello\nstudente', 16, NULL, NULL, '', 2, 'Secondo Semestre', 1, 2),
('508906', 'PRASSI DELLA COMUNICAZIONE\nMEDICA', 1, 'MED', 9, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 1, 2),
('508909', 'ANATOMIA MACROSCOPICA\nDIGITALIZZATA', 1, 'BIO', 16, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 3, 'Primo e Secondo Semestre', 1, 2),
('508910', 'LABORATORIO IN MICROBIOLOGIA', 1, 'MED', 7, 'Caratterizzante / Patologia generale e\nmolecolare, immunopatologia, fisiopatologia generale, microbiologia e\nparassitologia', 12, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('508916', 'ATTUALITA’ IN CHIRUGIA GENERALE', 1, 'MED', 18, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508917', 'APPROFONDIMENTO IN CHIRURGIA:\nCHIRURGIA ROBOTICA E SPECIALISTICA', 1, 'MED', 40, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('508985', 'GLOBAL HEALTH', 1, 'CHIM', 9, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 1, 'Primo Semestre', 4, NULL),
('509031', 'BIOCHIMICA CELLULARE A', 2, 'BIO', 10, 'Affine/Integrativa / Attività formative\naffini o integrative', 16, NULL, NULL, 'Obbligatorio', 2, 'Secondo Semestre', 1, NULL),
('509346', 'IL PAZIENTE CON DISABILITA’', 1, 'MED', 2, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 1, 2),
('509347', 'AGGIORNAMENTI IN CARDIOLOGIA', 1, 'MED', 11, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 1, 'Primo Semestre', 4, NULL),
('509348', 'AGGIORNAMENTI IN NEFROLOGIA', 1, 'MED', 14, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 1, 'Primo Semestre', 4, NULL),
('510235', 'LA RICERCA BIBLIOGRAFICA IN\nAMBIENTE MEDICO', 2, 'MED', 1, 'A scelta dello studente / A scelta dello\nstudente', 16, NULL, NULL, '', 2, 'Secondo Semestre', 1, 2),
('510236', 'LA SEMEIOTICA CARDIOVASCOLARE –\nTONI E SOFFI CARDIACI', 1, 'MED', 11, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 1, 'Primo Semestre', 4, NULL),
('510237', 'LABORATORIO DI ATTIVITA’\nPRATICHE DI BASE – CLINICAL SKILLS PER L’APPROCCIO INTEGRATO AL PAZIENTE', 1, 'MED', 9, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('510238', 'ABILITA’ NEL COMUNICARE LE\nCATTIVE NOTIZIE NEL MONDO SANITARIO', 1, 'MED', 9, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('510239', 'MEDICINA MOLECOLARE', 1, 'MED', 15, 'A scelta dello studente / A scelta dello\nstudente', 8, NULL, NULL, '', 2, 'Secondo Semestre', 4, NULL),
('510455', 'MEDICINA PREVENTIVA', 5, '', NULL, '', NULL, 40, NULL, 'Obbligatorio', 1, 'Primo Semestre', 3, NULL),
('510456', 'IGIENE E MEDICINA DI COMUNITA’', 4, 'MED', 42, 'Caratterizzante / Fisiopatologia,\nmetodologia clinica, propedeutica clinica e sistematica medico-chirurgica', 32, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL),
('510457', 'ECONOMIA AZIENDALE', 1, 'SECS-P', 7, 'Caratterizzante / Scienze umane, politiche\ndella salute e management sanitario', 8, NULL, NULL, 'Obbligatorio', 0, '', 3, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `ruolo`
--

CREATE TABLE `ruolo` (
  `id` int(11) NOT NULL,
  `descr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ruolo`
--

INSERT INTO `ruolo` (`id`, `descr`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passwd` varchar(120) NOT NULL,
  `ruolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `email`, `passwd`, `ruolo`) VALUES
(1, 'admin@gmail.com', 'admin', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `formativa_didattica`
--
ALTER TABLE `formativa_didattica`
  ADD PRIMARY KEY (`formativa`,`didattica`),
  ADD KEY `didattica` (`didattica`);

--
-- Indici per le tabelle `piano_di_studi`
--
ALTER TABLE `piano_di_studi`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `ruolo`
--
ALTER TABLE `ruolo`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ruolo`
--
ALTER TABLE `ruolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `formativa_didattica`
--
ALTER TABLE `formativa_didattica`
  ADD CONSTRAINT `formativa_didattica_ibfk_1` FOREIGN KEY (`formativa`) REFERENCES `piano_di_studi` (`codice`),
  ADD CONSTRAINT `formativa_didattica_ibfk_2` FOREIGN KEY (`didattica`) REFERENCES `piano_di_studi` (`codice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
