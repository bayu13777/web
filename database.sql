-- =========================
-- DATABASE RENTAL PS
-- =========================
CREATE DATABASE rental_ps;
USE rental_ps;

-- =========================
-- TABEL USER (LOGIN & ROLE)
-- =========================
CREATE TABLE user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','kasir','owner') NOT NULL
);

INSERT INTO user VALUES
(NULL,'admin',MD5('admin'),'admin'),
(NULL,'kasir',MD5('kasir'),'kasir'),
(NULL,'owner',MD5('owner'),'owner');

-- =========================
-- TABEL PLAYSTATION
-- =========================
CREATE TABLE playstation (
    id_ps INT AUTO_INCREMENT PRIMARY KEY,
    tipe_ps VARCHAR(50),
    harga_jam INT,
    status ENUM('tersedia','dipakai') DEFAULT 'tersedia'
);

-- =========================
-- TABEL PELANGGAN
-- =========================
CREATE TABLE pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    no_hp VARCHAR(20),
    alamat TEXT
);

-- =========================
-- TABEL TRANSAKSI
-- =========================
CREATE TABLE transaksi (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    id_pelanggan INT,
    id_ps INT,
    durasi INT,
    total INT,
    status VARCHAR(20),
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id_pelanggan),
    FOREIGN KEY (id_ps) REFERENCES playstation(id_ps)
);
