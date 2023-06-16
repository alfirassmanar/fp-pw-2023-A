<?php
include '../../koneksi.php';
$id_mahasiswa         = $_GET['id_mahasiswa'];
$query  = mysqli_query($conn, "SELECT * FROM vHasilPendaftaran WHERE id_mahasiswa='$id_mahasiswa'");
$row        = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Status Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <form method="post" action="./controllers/cUpdateStatus.php">
            <input type="hidden" value="<?php echo $row['id_mahasiswa'];?>" name="id_mahasiswa">
            <table>
                <tr><td>
                    Status Mahasiswa : </td><td><input class="form-control" type="text" value="<?php echo $row['status_registrasi'];?>" name="status_registrasi">
                </td></tr>
                <tr><td>
                    <br>
                </td></tr>
                <tr><td>
                    <b><span><i style="color: red;">Notes :</i>  Kosong kan satu form dengan (0)</span></b>
                </td></tr>
                <tr><td>
                    Konfirmasi Prodi   : </td><td><input class="form-control" type="text" value="<?php echo $row['pilihan_prodi_1'];?>" name="pilihan_prodi_1">
                </td></tr>
                <tr><td>
                    Konfirmasi Prodi   : </td><td><input class="form-control" type="text" value="<?php echo $row['pilihan_prodi_2'];?>" name="pilihan_prodi_2">
                </td></tr>
                <tr><td colspan="2">
                    <button class="btn btn-sm btn-primary" type="submit" value="simpan">Simpan</button>
                    <a href="./vStatusReg.php"><div class="btn btn-sm btn-danger" type="link">Kembali</div></a>
                </td></tr>
            </table>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>