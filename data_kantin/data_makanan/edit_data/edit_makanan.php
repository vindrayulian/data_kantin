<?php
    include "../../../koneksi.php";

    $vid            = $_GET['id'];
    $edit_makanan   = mysqli_query($con, "select * from tb_makanan where id_makanan='$vid'");
    $data           = mysqli_fetch_array($edit_makanan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data makanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style/bootstrap-5.3.0-dist/css/bootstrap.css">
</head>
<body style="background-color:#ddd;">
    <h3 class="text-center m-5">Edit data makanan</h3>

    <form action="aksi_edit_makanan.php" method="post">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <label for="nama_makanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" name="nama_makanan" value="<?php echo $data['nama_makanan'] ?>">
                </div>
                <div class="col">
                    <label for="harga_makanan" class="form-label">Harga Makanan</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="lokasi_rak" class="form-label">Lokasi Makanan</label>
                    <input type="text" class="form-control" name="lokasi_rak" value="<?php echo $data['lokasi_rak'] ?>">
                </div>
                <div class="col mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Makanan</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
                </div>
            </div>
            <input type="hidden" name="id_makanan" value="<?php echo $data['id_makanan'] ?>">
            <button type="submit" class="btn btn-warning">Edit</button>
            <a class="btn btn-success" href="../index.php">Kembali</a>
            
        </div>
    </form>

    <script src="../../../style/bootstrap-5.3.0-dist/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>