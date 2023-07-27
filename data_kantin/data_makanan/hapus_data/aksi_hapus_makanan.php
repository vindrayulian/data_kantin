<?php
    include "../../../koneksi.php";

    $vid        = $_GET['id'];

    $hpsmakanan = mysqli_query($con, "delete from tb_makanan where id_makanan = '$vid'");

    echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>