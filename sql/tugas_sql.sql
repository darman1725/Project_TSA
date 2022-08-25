-- membuat database.
CREATE DATABASE dts_tsa;

-- Melihat daftar database yang ada di server.
SHOW DATABASES; 

-- Menggunakan database yang dipilih.
USE DATABASE dts_tsa;

-- Membuat sebuah tabel dengan atribut-atribut didalamnya
CREATE TABLE produk(
    id_produk int(5) not null auto_increment,
    nama_produk varchar(25),
    harga_produk double,
    primary key(id_produk)
);

-- Menampilkan struktur tabel produk
DESC produk;

-- Menambahkan/ merubah/ menghapus atribut yang ada pada tabel
ALTER TABLE produk ADD merk_produk VARCHAR(25);
ALTER TABLE produk MODIFY harga_produk int(6);
ALTER TABLE produk DROP merk_produk; 

-- Menghapus tabel
DROP TABLE produk;

-- Melihat daftar table
SHOW TABLES;

-- Melihat struktur table
DESCRIBE produk;

-- Menambahkan data sesuai kolom yang ada
INSERT INTO produk(nama_produk,harga_produk) VALUES('MAMY POKO','42000')
-- Atau dapat disederhanakan menjadi
INSERT INTO produk VALUES('','MAMY POKO','42000');
-- Menambahkan data pada kolom tertentu
INSERT INTO produk(nama_produk) VALUES('SUSU DANCOW');
-- Menambahkan lebih dari satu data
INSERT INTO produk (nama_produk,harga_produk)VALUES('MAMY POKO','42000'),('SUSU DANCOW','12000');

-- Menghapus seluruh data pada tabel
DELETE produk;
-- Menghapus suatu data
DELETE produk where nama_produk="DANCOW";
-- Mereset isi data table seluruhnya
TRUNCATE produk;

-- Menampilkan semua isi tabel
SELECT * FROM produk
-- Menampilkan beberapa kolom
SELECT nama_produk FROM produk
-- Menampilkan beberapa data
SELECT * FROM WHERE nama_produk="DANCOW"
