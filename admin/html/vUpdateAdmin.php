<?php
include '../../koneksi.php';
$id_admin         = $_GET['id_admin'];
$query  = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id_admin='$id_admin'");
$row        = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <form method="post" action="./controllers/cUpdateAdmin.php">
            <input type="hidden" value="<?php echo $row['id_admin'];?>" name="id_admin">
            <table>
                <tr><td>
                    Username : </td><td><input class="form-control" type="text" value="<?php echo $row['username'];?>" name="username">
                </td></tr>
                <tr><td>
                    Email : </td><td><input class="form-control" type="text" value="<?php echo $row['email'];?>" name="email">
                </td></tr>
                <tr><td>
                    Password : </td><td><input class="form-control" type="text" value="<?php echo $row['password'];?>" name="password">
                </td></tr>
                <tr><td>
                    Status Level   : </td><td><input class="form-control" type="text" value="<?php echo $row['status_admin'];?>" name="status_admin">
                </td></tr>
                <tr><td colspan="2">
                    <button class="btn btn-sm btn-primary" type="submit" value="simpan">Simpan</button>
                    <a href="./vAkunAdmin.php"><div class="btn btn-sm btn-danger" type="link">Kembali</div></a>
                </td></tr>
            </table>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>