-- Buatlah sebuah database dengan nama db_polinema
CREATE DATABASE db_polinema;

-- Menggunakan database dts_tsa
USE dts_tsa;

-- Membuat tabel produk
CREATE TABLE produk(
    id_produk int(5) NOT NULL AUTO_INCREMENT,
    nama_produk varchar(25) DEFAULT NULL,
    harga_produk double DEFAULT NULL,
    merk_produk varchar(25) DEFAULT NULL,
    PRIMARY KEY(id_produk)
);

-- Menampilkan struktur tabel produk
DESC produk;

-- Membuat tabel nilai
CREATE TABLE nilai(
    id_nilai int(11) NOT NULL,
    id_mahasiswa char(10) DEFAULT NULL,
    nilai int(11) DEFAULT NULL,
    PRIMARY KEY(id_nilai)
);

-- Menampilkan struktur tabel nilai
DESC nilai;

-- Menambahkan data sesuai kolom yang ada
INSERT INTO produk(
    nama_produk,
    harga_produk,
    merk_produk) VALUES
    ('Susu','20000','Dancow'),
    ('Susu','30000','Milo'),
    ('Popok','50000','Makuku'),
    ('Popok','75000',NULL)

-- Menampilkan data tabel produk
SELECT * FROM produk;

-- Menambahkan data sesuai kolom yang ada
INSERT INTO produk(
    id_nilai,
    id_mahasiswa,
    nilai) VALUES
    ('1','123','80'),
    ('2','234','75'),
    ('3','456','85'),
    ('4','345','65'),
    ('5','321','77'),
    ('6','432','78')

-- Menampilkan data tabel nilai
SELECT * FROM nilai;

-- Tampilkan jumlah data yang ada pada tabel produk dengan nama alias jumlah produk
SELECT COUNT(id_produk) as jumlah_produk FROM produk;

-- Tampilkan jumlah data yang ada pada tabel produk dengan nama produk "popok" dengan nama alias jumlah produk popok
SELECT COUNT(nama_produk) as total_penjualan_popok
FROM produk
WHERE nama_produk="Popok";

-- Tampilkan jumlah harga produk yang ada pada tabel produk dengan nama nama alias jumlah harga produk
SELECT nama_produk as "Nama Produk", 
COUNT(nama_produk) as "Jumlah Penjualan", 
(SUM(harga_produk)) as "Total Penjualan"
FROM produk GROUP BY nama_produk;

-- Tampilkan jumlah harga produk yang ada pada tabel produk dengan nama nama alias jumlah harga produk
SELECT SUM(harga_produk) as "Total Penjualan" FROM produk;

-- Tampilkan omzet total dari tabel produk jika diasumsikan setiap barang terjual 3 buah dengan nama nama alias omzet total
SELECT SUM(harga_produk * 3) AS "Total Omset" FROM produk;

-- Tampilkan id_mahasiswa beserta nilainya yang memiliki nilai paling rendah dari tabel nilai
SELECT id_mahasiswa, nilai
FROM nilai
WHERE nilai=(SELECT MIN(nilai) FROM nilai);

-- Tampilkan id_mahasiswa beserta nilainya yang memiliki nilai paling tinggi dari tabel nilai
SELECT id_mahasiswa, nilai
FROM nilai
WHERE nilai=(SELECT MAX(nilai) FROM nilai);

-- Tampilkan nilai rata-rata dari tabel nilai
SELECT AVG(nilai) as "Nilai Rata-rata" FROM nilai; 

-- Tampilkan id_mahasiswa, nilai dan nilai rata-rata dari tabel nilai urutkan berdasarkan nilai terendah.
select id_mahasiswa, nilai, 
(select avg(nilai) from nilai) as "Nilai Rata-Rata Tabel" 
from nilai order by nilai asc;

----------------------------------------TUGAS---------------------------------------------------

-- Membuat tabel transaksi
CREATE TABLE transaksi (
    id_transaksi int(5) NOT NULL AUTO_INCREMENT,
    id_produk int(5),
    bulan varchar(15),
    harga_beli double,
    harga_jual double,
    qty int(11),
    PRIMARY KEY (id_transaksi),
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
    );

-- Menampilkan struktur tabel transaksi
DESC transaksi;

-- Menambahkan data pada tabel transaksi
INSERT INTO transaksi(
    id_produk,
    bulan,
    harga_beli,
    harga_jual,
    qty) VALUES
    ('1','Januari','10000','13000','2'),
    ('2','Januari','15000','18000','3'),
    ('3','Januari','14000','17500','5'),
    ('1','Februari','10000','13000','2'),
    ('2','Februari','15000','18000','2'),
    ('3','Februari','14000','17500','7'),
    ('1','Maret','10000','13000','1'),
    ('2','Maret','15000','18000','2'),
    ('3','Maret','14000','17500','8'),
    ('1','April','10000','13000','2'),
    ('2','April','15000','18000','4'),
    ('3','April','14000','17500','5');

-- Menampilkan data pada tabel transaksi
SELECT * FROM transaksi;

-- Query untuk menunjukkan keuntungan dengan Rumus: 
-- (harga jual - harga beli) * kuantitas 
SELECT (SUM((harga_jual-harga_beli) * qty)) as "Total Keuntungan (Rp)" FROM transaksi;

-- Query untuk menunjukkan keuntungan tiap bulan, urutkan berdasarkan bulan.
SELECT bulan as "Bulan", 
(SUM((harga_jual-harga_beli) * qty)) as "Total Keuntungan (Rp)" 
FROM transaksi GROUP BY bulan;

-- Query untuk menunjukkan rata-rata penjualan perbulan.
SELECT bulan,
AVG((harga_jual-harga_beli) * qty) AS "Rata-rata penjualan"
FROM transaksi
GROUP BY bulan;

-- Query untuk menunjukkan omzet penjualan perbulan
SELECT bulan,
SUM(harga_jual * qty) AS 'Omzet Penjualan'
FROM transaksi
GROUP BY bulan;

-- Query yang menunjukkan omzet penjualan total
SELECT SUM(harga_jual*qty) AS 'Omzet Penjualan Total'
FROM transaksi;

-- Query yang menunjukkan nilai omzet tertinggi dalam sebulan.
SELECT bulan, MAX(harga_jual * qty) AS 'omzet'
FROM transaksi
GROUP BY bulan;