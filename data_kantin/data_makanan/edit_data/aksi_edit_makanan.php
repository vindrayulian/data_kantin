<?php
    include "../../../koneksi.php";

    $vid                  = $_POST['id_makanan'];
    $vnama                = $_POST['nama_makanan'];
    $vharga               = $_POST['harga'];
    $vlokasi              = $_POST['lokasi_rak'];
    $vdeskripsi           = $_POST['deskripsi'];

    $edit_makanan = mysqli_query($con, "update tb_makanan set nama_makanan = '$vnama', harga = '$vharga', lokasi_rak = '$vlokasi', deskripsi = '$vdeskripsi' where id_makanan = '$vid'");

            echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>