-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 22. led 2021, 10:58
-- Verze serveru: 10.4.17-MariaDB
-- Verze PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `epiz_27718449_kolecko`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `games`
--

CREATE TABLE `games` (
  `game` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `platform` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `games`
--

INSERT INTO `games` (`game`, `name`, `link`, `platform`) VALUES
('acp', 'Assassins Creed Pirates', 'https://mega.nz/#F!wJxxnKaL!--4AJcdsvk9SFqRmY35BEA', 'android'),
('bae', 'Bully Aniversary Edition', 'https://mega.nz/#F!QIZXFSyK!xUF60Nvmum4cvnm0b0rvjA', 'android'),
('bcp', 'Bridge Constructor Portal', 'https://mega.nz/#!9c5nHAzR!fa4Ayn6_YJxCHLH8EMmjwrPCWj-GU9VhkDMrqwJechc', 'android'),
('bwf', 'BlockWorld Full 0.24', 'https://mega.nz/#!EdRXmATL!WHjsD4eArrTKL-zbRac9oVryy2ZObjuy4YjSLunBkfg', 'android'),
('codboz', 'Call of Duty Black Ops Zombies', 'https://mega.nz/#F!hVZ3kSYZ!13gt-mhapQNlT5NeGnSewA', 'android'),
('dwl', 'Doctor Who Legacy', 'https://mega.nz/folder/9dpFzRbA#n1cyf1Vnex8POeGPPZNYqg', 'android'),
('esfe', 'ES File Explorer', 'https://mega.nz/file/0Z5UVA5T#2euIgcSJ2WNm87i79wOrFinKBPVeGXZiYG5iiHOPel0', 'android'),
('fb', 'Flappy Bird', 'https://mega.nz/#!QF4XVSpI!gHmDvgAwE2236oueu9mbESjWWTIbhoqXYw3WJdd-UyA', 'android'),
('ff1', 'Final Fantasy I', 'https://mega.nz/#!Vdh1RIDB!dDlxKG6RT3fSSsO5Yo17z75bOazvykd2yfmdJAfxCY4', 'android'),
('ff2', 'Final Fantasy II', 'https://mega.nz/#F!4Np1USCQ!u1FJGnMAgUklhmVcaDBscA', 'android'),
('ff3', 'Final Fantasy III', 'https://mega.nz/#F!JQAVWQKS!Ltoy-q9U2_RGX134N8LJlA', 'android'),
('ff6', 'Final Fantasy VI', 'https://mega.nz/#F!1U5DGATB!5hx3sjkgLLwsM_MObRXX2Q', 'android'),
('gta3', 'Grand Theft Auto III', 'https://mega.nz/#F!QBZHEaaQ!qc9z23yg6huBZDjwbU8dSQ', 'android'),
('gtactw', 'Grand Theft Auto Chinatown Wars', 'https://mega.nz/#F!pRohDSYL!RF5Iuwz1MaT6EpxB_ThF_w', 'android'),
('gtalcs', 'Grand Theft Auto Liberty City Stories', 'https://mega.nz/#F!NVZzHY6D!A1aB1gjcVMmkwBJ3Lm_lUw', 'android'),
('gtasa', 'Grand Theft Auto San Andreas', 'https://mega.nz/#F!Ac4H3ICR!33rgmm3WCacLYLY2JqmBMw', 'android'),
('gtasas', 'Grand Theft Auto San Andreas UWP', 'https://mega.nz/folder/IcolXbRQ#40Rilc2zwJVq_-36Pv1bDw', 'windows'),
('gtavc', 'Grand Theft Auto Vice City', 'https://mega.nz/#F!wY4X1a5C!TRcOPNv4z9mzGk94JlSMdg', 'android'),
('jorvik', 'Jorvik(Star) Games', 'https://mega.nz/#F!RUw0AYJZ!unVoLij2WxlpG8KO_s3avw', 'windows'),
('mc', 'Minecraft', 'https://mega.nz/#F!RYBHTAaL!bF4d4j-snGxzZ_v2IG9iRA', 'android'),
('mcfw10', 'Miencraft for Windows 10 (Bedrock) UWP', 'https://mega.nz/#F!dZwBDYTR!YAa_spEL1kyZ5wJyc925dQ', 'windows'),
('mh', 'Moorhuhn (Crazy Chicken) UWP', 'https://mega.nz/file/YNI1iKxC#r7Cv332xJJj8cmkA5Q1s6bpCheRXWCvdTWzzqXGEkAA', 'windows'),
('mlphq', 'My Little Pony Harmony Quest', 'https://mega.nz/#F!YZoHHahZ!1MJkS3mMHybQoTq_nmjIjQ', 'android'),
('mlprr', 'My Little Pony Rainbow Runners', 'https://mega.nz/#F!RcYxRCbC!lUR7xVHpZxyPrWvVFUcegg', 'android'),
('msoi', 'OInstall', 'https://mega.nz/file/lEwC2SRB#m62s01cdvgyCxoZkJKS63Rq27BSNfqvSa7zqkEslm0U', 'windows'),
('pokerom', 'PokeROM #25 Pikachu', 'https://mega.nz/#!dJI0lYxB!gN7b3nAmPUNiTGamoFV-X8q4YpsodKaUNE-jQhASqEY', 'windows'),
('srddc', 'Shadowrun Dragonfall Drirector\'s cut', 'https://mega.nz/#F!FBojnS7B!dtH9AE_JnW2CkffcePWs1g', 'android'),
('srr', 'Shadowrun Returns', 'https://mega.nz/#F!INR31aYT!uP6zSaOAtqHpumzdXQrqvA', 'android'),
('sth', 'Sonic the Hedgehog', 'https://mega.nz/#!dRYTgYjY!wLs-8d3sa9lfZ7n2oNw53qjiWXpCwmLMQJRZS7QKrtw', 'android');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
