-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2021 pada 08.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `jadwal_kelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kelas1`
--

CREATE TABLE `jadwal_kelas1` (
  `kode_kelas` varchar(100) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `hari` varchar(222) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `nama_dsn` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_kelas1`
--

INSERT INTO `jadwal_kelas1` (`kode_kelas`, `matkul`, `prodi`, `kelas`, `hari`, `jam`, `nama_dsn`) VALUES
(' PPI1041 ', 'PPKn/State’s Ideology and civic education ', 'D4-TI ', '1A  ', 'Sabtu', '07.00 - 09.30 ', 'Dr. Dhanang Widijawan, SH., MH.'),
('PPI1041', 'PPKn/State’s Ideology and civic education  ', 'D4-TI ', '1B  ', 'Sabtu ', '09.30 - 12.00', 'Dr. Dhanang Widijawan, SH., MH. '),
('PPI1041 ', 'PPKn/State’s Ideology and civic education  ', 'D4-TI ', '1C', 'Sabtu ', '14.40 - 17.10', 'Dr. Dhanang Widijawan, SH., MH. '),
('TI41071', 'Pemograman I/Programming I (Web Design)', 'D4-TI ', '1A ', 'Rabu ', '13.00 - 18.00 ', 'Roni Andarsyah, S.T., M.Kom.'),
('TI41071', 'Pemograman I/Programming I (Web Design)', 'D4-TI', '1B  ', 'Senin ', '13:00 - 18:00', 'Roni Andarsyah ST., M.KOM '),
('TI41061 ', 'Algoritma I /Algorithm I', 'D4-TI', '1A ', 'Senin', '07.00 - 12.00', 'M. Nurkamal Fauzan, S.T., M.T.'),
('TI41061  ', 'Algoritma I /Algorithm I ', 'D4-TI  ', '1B  ', 'Selasa', '07.00 - 12.00 ', 'M. Nurkamal Fauzan, S.T., M.T. '),
('TI41061  ', 'Algoritma I /Algorithm I ', 'D4-TI ', '1C ', 'Kamis ', '07.00 - 12.00 ', 'M. Nurkamal Fauzan, S.T., M.T. '),
(' PPI1031', 'Bahasa Indonesia/Indonesian Language', 'D4-TI  ', '1A ', 'Sabtu', '14.40 - 16.20', ' Dr. Khaerudin Kurniawan,M.PD'),
(' PPI1031', 'Bahasa Indonesia/Indonesian Language ', 'D4-TI  ', '1B   ', 'Sabtu ', '16.20 - 18.00 ', 'Dr. Khaerudin Kurniawan,M.PD'),
(' PPI1031', 'Bahasa Indonesia/Indonesian Language ', 'D4-TI ', '1C', 'Selasa', '07.00 - 08.40', 'Dr. Khaerudin Kurniawan,M.PD '),
('TI43081 ', 'Arsitektur Komputer /Computer Architecture ', 'D4-TI   ', '1A  ', 'Selasa', '13.00 - 17.10', 'Tubagus, ST., MT.'),
('TI43081 ', 'Arsitektur Komputer /Computer Architecture', 'D4-TI  ', '1B  ', 'Kamis', ' 07.50 - 12.00 ', 'Tubagus, ST., MT. '),
('TI43081', 'Arsitektur Komputer /Computer Architecture', 'D4-TI  ', '1C ', 'Kamis ', '13.00 - 17.10 ', 'Tubagus, ST., MT.'),
('TI41011 ', 'Matematika Diskrit/Discrete Mathematics ', 'D4TI ', '1A', 'Kamis', '07.00 - 08.40 ', 'Cahyo Prianto, S.Pd., MT.'),
('TI41011', 'Matematika Diskrit/Discrete Mathematics', 'D4-TI', '1B', 'Jum\'at', '10.20 - 12.00 ', 'Cahyo Prianto, S.Pd., MT.'),
('TI41011', 'Matematika Diskrit/Discrete Mathematics ', 'D4-TI', '1C', 'Jum\'at ', '13.00 - 14.40', 'Cahyo Prianto, S.Pd., MT.'),
('PPI1051', 'Agama/Religion ', 'D4-TI', '1A', 'Jum\'at ', '09.30 - 12.00', 'Ricky Agung Laksono, M.Pd.I'),
('PPI1051', 'Agama/Religion ', 'D4-TI', '1B', 'Jum\'at', '07.00 - 09.30', 'Ricky Agung Laksono, M.Pd.I'),
('PPI1051', 'Agama/Religion', 'D4-TI', '1C', 'Selasa ', '08.40 - 11.10', 'Ricky Agung Laksono, M.Pd.I'),
('PPI1021', 'General English I ', 'D4-TI', '1A', 'Jum\'at ', '13.00 - 16.20 ', 'Rd. Nuraini Siti Fatonah, S.S., M.Hum.'),
('PPI1021', 'General English I ', 'D4-TI', '1B', 'Rabu ', '07.00 - 10.20', 'Rd. Nuraini Siti Fatonah, S.S., M.Hum.'),
('PPI1021', 'General English I ', 'D4-TI', '1C', 'Senin', '07.00 - 10.20', 'Rd. Nuraini Siti Fatonah, S.S., M.Hum.'),
('TI41071', 'Pemograman I/Programming I (Web Design) ', 'D4-TI', '1C', 'Jum\'at ', '07.00 - 12.00', 'Roni Andarsyah, S.T., M.Kom.');
COMMIT;
