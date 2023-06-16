<?php
ob_start();
session_start();
    include "../koneksi.php";
    // include "";
    $email          = mysqli_real_escape_string($conn, $_POST['email']);
    $password       = mysqli_real_escape_string($conn, $_POST['password']);
    // $op             = $_GET['op'];

    if($email == TRUE){
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'");
        if(mysqli_num_rows($query)==1){
            $row = mysqli_fetch_array($query);
            $_SESSION['id_user']    = $row['id_user'];
            $_SESSION['email']      = $row['email'];
            $_SESSION['username']   = $row['username'];
            $_SESSION['level']      = $row['level'];
            $_SESSION['password']   = $row['password'];

            if($row['level'] == 0){
                echo "
                <div class='alert alert-primary' role='alert'>
                   Akun anda belum aktif, menunggu konfirmasi admin.
                   <a href='../views/Login/login.php'>Kembali Login</a>
                </div>
                ";
                
            } else {
                header("location: ../home.php");
            }
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Oops! Login Failed. Username & password tidak sesuai ...');
                document.location='../views/Login/login.php';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['id_user']);
        unset($_SESSION['level']);
        header("location: ../home.php");
    }
?>