<?php
    include "../../koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Bu Sri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style/bootstrap-5.3.0-dist/css/bootstrap.css">
</head>
<body style="background-color:#ddd;">
    <div class="container mt-5">
        <h3 class="fw-bold">Data Menu Makanan Kantin Bu Sri</h3>
        <a class="btn btn-primary mb-3" href="tambah_data/tambah_makanan.php">Tambah Menu Makanan +</a>
        <table class="table table-striped" border="1" cellpadding="5">
            <thead class="text-center">
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Harga</th>
                <th>Lokasi Rak</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </thead>
            <?php
                $makanan = mysqli_query($con, "select * from tb_makanan");
                $no=1;
                while($data=mysqli_fetch_array($makanan)){
                    echo("
                        <tr class='text-center'>
                            <td class='p-3'>$no</td>
                            <td class='p-3'>$data[nama_makanan]</td>
                            <td class='p-3'>$data[harga]</td>
                            <td class='p-3'>$data[lokasi_rak]</td>
                            <td class='p-3'>$data[deskripsi]</td>
                            <td>
                                <a class='btn btn-warning' href='edit_data/edit_makanan.php?id=$data[id_makanan]'>Edit</a>
                                <a class='btn btn-danger' href='hapus_data/aksi_hapus_makanan.php?id=$data[id_makanan]'>Hapus</a>
                            </td>
                        </tr>
                    ");
                    $no++;
                }
            ?>
            
        </table>

        <a class="btn btn-success" href="../../index.php">Kembali</a>
    </div>
    
    <script src="../../../style/bootstrap-5.3.0-dist/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>