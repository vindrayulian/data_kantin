<?php
    include "../../../koneksi.php";

    if($_POST['nama_makanan']!=NULL){
        $vnama                = $_POST['nama_makanan'];
        $vharga               = $_POST['harga'];
        $vlokasi              = $_POST['lokasi_rak'];
        $vdeskripsi           = $_POST['deskripsi'];

        $makanan = mysqli_query($con, "insert into tb_makanan 
        values('','$vnama','$vharga','$vlokasi','$vdeskripsi')");
    }

            echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>