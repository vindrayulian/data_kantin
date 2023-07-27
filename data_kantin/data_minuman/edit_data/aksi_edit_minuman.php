<?php
    include "../../../koneksi.php";

    $vid                  = $_POST['id_minuman'];
    $vnama                = $_POST['nama_minuman'];
    $vharga               = $_POST['harga'];
    $vlokasi              = $_POST['lokasi_minuman'];
    $vdeskripsi           = $_POST['deskripsi'];

    $edit_minuman = mysqli_query($con, "update tb_minuman set nama_minuman = '$vnama', harga = '$vharga', lokasi_minuman = '$vlokasi', deskripsi = '$vdeskripsi' where id_minuman = '$vid'");

            echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>