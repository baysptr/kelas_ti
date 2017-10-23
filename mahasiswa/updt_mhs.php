<?php

include '../resource/config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$smt = $_POST['smt'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];

$exec_query = mysqli_query($get_conn, "update T_MHS set nim = '$nim', nama = '$nama', smt = '$smt', fakultas = '$fakultas', jurusan = '$jurusan' where nim = '$nim'");

if ($exec_query) {
    echo "<script>alert('data berhasil diubah!');window.location = 'data_mhs.php';</script>";
} else {
    echo "<script>alert('data gagal diubah!');window.location = 'data_mhs.php';</script>";
}