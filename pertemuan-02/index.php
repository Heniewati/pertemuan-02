<?php

require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Produk.php';

$mhs1 = new Mahasiswa(
    "24.24.092345", "Andi", "Pendidikan Teknologi Informasi", 3.85
);

$mhs2 = new Mahasiswa(
    "24.24.784563", "Siti", "Pendidikan Teknologi Informasi", 3.40
);

$mhs3 = new Mahasiswa(
    "24.24.035233", "Budi", "Pendidikan Teknologi Informasi", 2.90
);

echo "<h1>Lab Sheet Pertemuan 2</h1>";
echo "<h2>Data Mahasiswa</h2>";

echo $mhs1->info();
echo "Predikat: " . $mhs1->predikat();
echo "<hr>";

echo $mhs2->info();
echo "Predikat: " . $mhs2->predikat();
echo "<hr>";

echo $mhs3->info();
echo "Predikat: " . $mhs3->predikat();
echo "<hr>";

$produk1 = new Produk("Buku PHP", 50000, 10);

echo "<h2>Data Produk</h2>";
echo "Nama Produk: " . $produk1->nama . "<br>";
echo "Harga: Rp " . number_format($produk1->harga, 0, ',', '.') . "<br>";
echo "Stok: " . $produk1->stok . "<br>";
echo "Total Nilai: Rp "
    . number_format($produk1->totalNilai(), 0, ',', '.');
