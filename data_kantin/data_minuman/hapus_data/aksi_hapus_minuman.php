<?php
    include "../../../koneksi.php";

    $vid        = $_GET['id'];

    $hpsminuman = mysqli_query($con, "delete from tb_minuman where id_minuman = '$vid'");

    echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>