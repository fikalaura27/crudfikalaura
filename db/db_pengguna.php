<?php
$proses=$_GET['proses'];
include"../koneksi.php";

if($proses=='insert'){
    $nama=$_POST['nama'];
    $usrname=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    mysqli_query($koneksi,"INSERT INTO pengguna SET nama='$nama',username='$username',password='$password',level='$level'");

}

header("location:../index.php?halaman=pengguna");
