-- Buatlah sebuah database dengan nama db_polinema
CREATE DATABASE db_polinema;

-- Menampilkan database
SHOW DATABASES;

-- Membuat tabel prodi
CREATE TABLE prodi (kode_prodi char(6) primary key, nama_prodi char(30));

-- Menampilkan struktur tabel prodi
DESCRIBE prodi;

-- Membuat tabel mahasiswa
CREATE TABLE MAHASISWA (
    nim int(8) primary key, 
    nama_mhs char(50), 
    jenis_kelamin enum('L','P') default 'L',
    alamat varchar(50),
    kota varchar(20) default 'malang',
    asal_sma char(30),
    no_hp varchar(12),
    umur integer,
    kode_prodi char(6),
    foreign key fk0 (kode_prodi) references prodi(kode_prodi));

-- Menampilkan struktur tabel mahasiswa
DESCRIBE MAHASISWA;

-- Membuat tabel mata kuliah
CREATE TABLE mata_kuliah (
    mk_id char(10) primary key,
    nama_mk char(50),
    jumlah_jam float(4,2),
    sks integer);

-- Menampilkan struktur tabel mata kuliah
DESCRIBE mata_kuliah;

-- Membuat tabel ruang
CREATE TABLE ruang (
    ruang_id char(3) primary key,
    nama_ruang char(20),
    kapasitas integer);

-- Menampilkan struktur tabel ruang
DESCRIBE ruang;

-- Membuat tabel dosen
CREATE TABLE dosen (
    nidn integer(20) primary key,
    nama_dosen char(50),
    status enum ('PNS','KONTRAK') default 'PNS',
    jenis_kelamin enum ('L','P') default 'L',
    no_hp varchar(15));

-- Menampilkan struktur tabel dosen
DESCRIBE dosen;

-- Menambahkan  kolom agama (varchar(10)) pada tabel mahasiswa sebagai kolom terakhir
ALTER TABLE mahasiswa ADD agama varchar(10);

-- Tambahkan kolom alamat(varchar(50)) pada tabel dosen sebagai kolom terakhir
ALTER TABLE dosen ADD alamat varchar(50);

-- Lakukan insert data ke dalam tabel-tabel yang ada pada pada database db_polinema sesuai dengan field, tipe data dan panjang datanya
-- 1. Tabel Dosen
INSERT INTO dosen(
    nidn,
    nama_dosen,
    status,
    jenis_kelamin,
    no_hp,
    alamat) VALUES(
    '1208231701',
    'Kamaruddin Sinaga',
    'PNS',
    'L',
    '088741092393',
    'Malang');

-- Menampilkan Data Tabel Dosen
SELECT * FROM dosen;

-- 2. Tabel Mata Kuliah
INSERT INTO mata_kuliah(
    mk_id,
    nama_mk,
    jumlah_jam,
    sks) VALUES(
    '34015',
    'Basis Data',
    '35.5',
    '2');

-- Menampilkan Data Tabel Mata Kuliah
SELECT * FROM mata_kuliah;

-- 3. Tabel Prodi
INSERT INTO prodi(
    kode_prodi,
    nama_prodi) VALUES(
    '4172',
    'D-IV Teknik Informatika');

-- Menampilkan Data Tabel Prodi
SELECT * FROM prodi;

-- 4. Tabel Mahasiswa
INSERT INTO mahasiswa(
    nim,
    nama_mhs,
    jenis_kelamin,
    alamat,
    kota,
    asal_sma,
    no_hp,
    umur,
    kode_prodi,
    agama) VALUES(
    '1941720060',
    'Darman Saputra Saragih',
    'L',
    'Jl. Pinang',
    'Medan',
    'SMA N 1 Bandar',
    '082196360193',
    '21',
    '4172',
    'Katolik'
    );

-- Menampilkan Data Tabel Mahasiswa
SELECT * FROM mahasiswa;

-- 5. Tabel Ruang
INSERT INTO ruang(
    ruang_id,
    nama_ruang,
    kapasitas) VALUES (
    '001',
    'LPY 01',
    '30');

-- Menampilkan Data Tabel Ruang
SELECT * FROM ruang;

-- Menampilkan Database
SHOW DATABASES;

-- Menampilkan Struktur Metadata Tabel Mahasiswa
DESC mahasiswa;

-- Hilangkan kolom asal_sma yang terdapat didalam tabel mahasiswa
ALTER TABLE mahasiswa DROP asal_sma;