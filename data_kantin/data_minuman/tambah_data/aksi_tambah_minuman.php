<?php
    include "../../../koneksi.php";

    if($_POST['nama_minuman']!=NULL){
        $vnama                = $_POST['nama_minuman'];
        $vharga               = $_POST['harga'];
        $vlokasi              = $_POST['lokasi_minuman'];
        $vdeskripsi           = $_POST['deskripsi'];

        $minuman = mysqli_query($con, "insert into tb_minuman 
        values('','$vnama','$vharga','$vlokasi','$vdeskripsi')");
    }

            echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>