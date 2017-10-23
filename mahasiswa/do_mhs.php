<?php

include '../resource/config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$smt = $_POST['smt'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];

$exec_query = mysqli_query($get_conn, "insert into T_MHS values ('$nim', '$nama', '$smt', '$fakultas', '$jurusan')");

if ($exec_query) {
    echo "<script>alert('data berhasil dimasukan!');window.location = 'data_mhs.php';</script>";
} else {
    echo "<script>alert('data gagal dimasukan!');window.location = 'data_mhs.php';</script>";
}