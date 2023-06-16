<?php
    session_start();
    require '../koneksi.php';
    //require_once 'auth.php'; //untuk signup/login

    // Penyimpanan data sementara di dalam session
    if (isset($_POST['submit'])) {
        // Menyimpan data ke dalam variabel session
        $_SESSION['form3_dataOrtu'] = [
            'nama_ayah' => $_POST['nama_ayah'],
            'pekerjaan_ayah' => $_POST['pekerjaan_ayah'],
            'penghasilan_ayah' => $_POST['penghasilan_ayah'],
            'nama_ibu' => $_POST['nama_ibu'],
            'pekerjaan_ibu' => $_POST['pekerjaan_ibu'],
            'penghasilan_ibu' => $_POST['penghasilan_ibu']
        ];

        // Meneruskan ke halaman form bagian 4 : form data ibu
        header('Location: confirm_submission.php');
        exit;
    }

    // Pengecekan isi data dalam session
    if (isset($_SESSION['form3_dataOrtu'])) {
        $nama_ayah = $_SESSION['form3_dataOrtu']['nama_ayah'];
        $pekerjaan_ayah = $_SESSION['form3_dataOrtu']['pekerjaan_ayah'];
        $penghasilan_ayah = $_SESSION['form3_dataOrtu']['penghasilan_ayah'];
        $nama_ibu = $_SESSION['form3_dataOrtu']['nama_ibu'];
        $pekerjaan_ibu = $_SESSION['form3_dataOrtu']['pekerjaan_ibu'];
        $penghasilan_ibu = $_SESSION['form3_dataOrtu']['penghasilan_ibu'];
    } else {
        $nama_ayah = '';
        $pekerjaan_ayah = '';
        $penghasilan_ayah = '';
        $nama_ibu = '';
        $pekerjaan_ibu = '';
        $penghasilan_ibu = '';
    }

    // Kembali ke halaman sebelumnya
    if (isset($_POST['back'])) {
        header('Location: form2_registrasi.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Orangtua Calon Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <!-- id_orangtua terisi otomatis auto-increment -->
                            <div class="mb-3">
                                <label>Nama Ayah Kandung</label>
                                <input type="text" name="nama_ayah" class="form-control" value="<?php echo isset($nama_ayah) ? $nama_ayah : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan Ayah</label>
                                <select class="form-control" name="pekerjaan_ayah" required>
                                    <option value="">- Pilih Pekerjaan Ayah -</option>
                                    <?php $query_pekerjaan_ayah = "SELECT * FROM tbl_pekerjaan_ortu";
                                        $result_pekerjaan_ayah = mysqli_query($conn, $query_pekerjaan_ayah);
                                        while ($row_pekerjaan_ayah = mysqli_fetch_assoc($result_pekerjaan_ayah)) { 
                                    $id_pekerjaan = $row_pekerjaan_ayah['id_pekerjaan'];?>
                                        <option value="<?php echo $row_pekerjaan_ayah['nama_pekerjaan']; ?>" <?php if ($pekerjaan_ayah == $id_pekerjaan) echo 'selected'; ?> name="pekerjaan_ayah">  
                                        <?php echo $row_pekerjaan_ayah['nama_pekerjaan']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Penghasilan Bulanan Ayah</label>
                                <select class="form-control" name="penghasilan_ayah" required>
                                    <option value="">- Pilih Penghasilan -</option>
                                    <?php $query_penghasilan_ayah = "SELECT * FROM tbl_penghasilan_ortu";
                                        $result_penghasilan_ayah = mysqli_query($conn, $query_penghasilan_ayah);
                                        while ($row_penghasilan_ayah = mysqli_fetch_assoc($result_penghasilan_ayah)) { 
                                    $id_penghasilan = $row_penghasilan_ayah['id_penghasilan'];?>
                                        <option value="<?php echo $row_penghasilan_ayah['jumlah_penghasilan']; ?>" <?php if ($penghasilan_ayah == $id_penghasilan) echo 'selected'; ?> name="penghasilan_ayah">
                                        <!-- menampilkan isi kolom berupa nama departemen -->    
                                        <?php echo $row_penghasilan_ayah['jumlah_penghasilan']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Nama Ibu Kandung</label>
                                <input type="text" name="nama_ibu" class="form-control" value="<?php echo isset($nama_ibu) ? $nama_ibu : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan Ibu</label>
                                <select class="form-control" name="pekerjaan_ibu" required>
                                    <option value="">- Pilih Pekerjaan ibu -</option>
                                    <?php $query_pekerjaan_ibu = "SELECT * FROM tbl_pekerjaan_ortu";
                                        $result_pekerjaan_ibu = mysqli_query($conn, $query_pekerjaan_ibu);
                                        while ($row_pekerjaan_ibu = mysqli_fetch_assoc($result_pekerjaan_ibu)) { 
                                    $id_pekerjaan = $row_pekerjaan_ibu['id_pekerjaan'];?>
                                        <option value="<?php echo $row_pekerjaan_ibu['nama_pekerjaan']; ?>" <?php if ($pekerjaan_ibu == $id_pekerjaan) echo 'selected'; ?> name="pekerjaan_ibu">  
                                        <?php echo $row_pekerjaan_ibu['nama_pekerjaan']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Penghasilan Bulanan Ibu</label>
                                <select class="form-control" name="penghasilan_ibu" required>
                                    <option value="">- Pilih Penghasilan -</option>
                                    <?php $query_penghasilan_ibu = "SELECT * FROM tbl_penghasilan_ortu";
                                        $result_penghasilan_ibu = mysqli_query($conn, $query_penghasilan_ibu);
                                        while ($row_penghasilan_ibu = mysqli_fetch_assoc($result_penghasilan_ibu)) { 
                                    $id_penghasilan = $row_penghasilan_ibu['id_penghasilan'];?>
                                        <option value="<?php echo $row_penghasilan_ibu['jumlah_penghasilan']; ?>" <?php if ($penghasilan_ibu == $id_penghasilan) echo 'selected'; ?> name="penghasilan_ibu">
                                        <!-- menampilkan isi kolom berupa nama departemen -->    
                                        <?php echo $row_penghasilan_ibu['jumlah_penghasilan']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <!-- button untuk kembali -->
                                <button type="submit" class="btn btn-primary float-start" id="back"
                                    name="back">Kembali</button>
                                <!-- button untuk lanjut -->
                                <button type="submit" class="btn btn-primary float-end mx-1" id="submit"
                                    name="submit">Selanjutnya</button>
                                <!-- button reset -->
                                <button type="reset" class="btn btn-danger float-end" name="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre>
        <?= print_r($_SESSION['form3_dataOrtu']); ?>
    </pre>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</html>