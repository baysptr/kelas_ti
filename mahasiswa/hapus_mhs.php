<?php

include '../resource/config.php';

$nim = $_GET['nim'];

$code_exec = mysqli_query($get_conn, "delete from T_MHS where nim = '$nim'");

if ($code_exec) {
    echo "<script>alert('data berhasil dihapus!');window.location = 'data_mhs.php';</script>";
} else {
    echo "<script>alert('data gagal dihapus!');window.location = 'data_mhs.php';</script>";
}