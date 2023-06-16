<?php
    session_start();
    require '../koneksi.php';
    //require_once 'auth.php'; //untuk signup/login

    // Penyimpanan data sementara di dalam session
    if (isset($_POST['submit'])) {
        // Menyimpan data ke dalam variabel session
        $_SESSION['form2_registrasi'] = [
            'nisn' => $_POST['nisn'],
            'no_ijazah' => $_POST['no_ijazah'],
            'pilihan_prodi_1' => $_POST['pilihan_prodi_1'],
            'pilihan_prodi_2' => $_POST['pilihan_prodi_2'],
            'ijazah' => $_POST['ijazah'],
            'kartu_keluarga' => $_POST['kartu_keluarga'],
            'akta_kelahiran' => $_POST['akta_kelahiran'],
            'pasfoto' => $_POST['pasfoto'],
            'tanggal_registrasi' => $_POST['tanggal_registrasi'],
            'tahun_lulus_sekolah' => $_POST['tahun_lulus_sekolah']
        ];
        
        // Meneruskan ke halaman form bagian 2 : form data pribadi
        header('Location: form3_dataOrtu.php');
        exit;
    }

    // Pengecekan isi data dalam session
    if (isset($_SESSION['form2_registrasi'])) {
        $nisn = $_SESSION['form2_registrasi']['nisn'];
        $no_ijazah = $_SESSION['form2_registrasi']['no_ijazah'];
        $pilihan_prodi_1 = $_SESSION['form2_registrasi']['pilihan_prodi_1'];
        $pilihan_prodi_2 = $_SESSION['form2_registrasi']['pilihan_prodi_2'];
        $ijazah = $_SESSION['form2_registrasi']['ijazah'];
        $kartu_keluarga = $_SESSION['form2_registrasi']['kartu_keluarga'];
        $akta_kelahiran = $_SESSION['form2_registrasi']['akta_kelahiran'];
        $pasfoto = $_SESSION['form2_registrasi']['pasfoto'];
        $tanggal_registrasi = $_SESSION['form2_registrasi']['tanggal_registrasi'];
        $tahun_lulus_sekolah = $_SESSION['form2_registrasi']['tahun_lulus_sekolah'];
    } else {
        $nisn = '';
        $no_ijazah = '';
        $pilihan_prodi_1 = '';
        $pilihan_prodi_2 = '';
        $ijazah = '';
        $kartu_keluarga = '';
        $akta_kelahiran = '';
        $pasfoto = '';
        $tanggal_registrasi = '';
        $tahun_lulus_sekolah = '';
    }

    // Kembali ke halaman sebelumnya
    if (isset($_POST['back'])) {
        header('Location: form1_dataSiswa.php');
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
                        <h4>Data Registrasi Calon Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <form id="" action="" method="POST">
                            <!-- id_registrasi terisi otomatis auto-increment -->
                            <div class="mb-3">
                                <label>Nomor Induk Sekolah Nasional (NISN)</label>
                                <input type="text" name="nisn" class="form-control" value="<?php echo isset($nisn) ? $nisn : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Nomor Ijazah</label>
                                <input type="text" name="no_ijazah" class="form-control" value="<?php echo isset($no_ijazah) ? $no_ijazah : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Pilihan Program Studi 1</label>
                                <select class="form-control" name="pilihan_prodi_1" required>
                                    <option value="">- Pilih Program Studi 1 -</option>
                                    <?php $query_prodi1 = "SELECT * FROM tbl_prodi";
                                        $result_prodi1 = mysqli_query($conn, $query_prodi1);
                                        while ($row_prodi1 = mysqli_fetch_assoc($result_prodi1)) { 
                                    $id_prodi = $row_prodi1['id_prodi'];?>
                                        <option value="<?php echo $row_prodi1['program_studi']; ?>" <?php if ($pilihan_prodi_1 == $id_prodi) echo 'selected'; ?> name="pilihan_prodi_1">   
                                        <?php echo $row_prodi1['program_studi']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Pilihan Program Studi 2</label>
                                <select class="form-control" name="pilihan_prodi_2" required>
                                    <option value="">- Pilih Program Studi 2 -</option>
                                    <?php $query_prodi2 = "SELECT * FROM tbl_prodi";
                                        $result_prodi2 = mysqli_query($conn, $query_prodi2);
                                        while ($row_prodi2 = mysqli_fetch_assoc($result_prodi2)) { 
                                    $id_prodi = $row_prodi2['id_prodi'];?>
                                        <option value="<?php echo $row_prodi2['program_studi']; ?>" <?php if ($pilihan_prodi_2 == $id_prodi) echo 'selected'; ?> name="pilihan_prodi_2">   
                                        <?php echo $row_prodi2['program_studi']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- kolom id_status_reg akan terisi setelah ubah status/acc oleh admin-->
                            <div class="mb-3">
                                <label>File Ijazah</label>
                                <input type="file" name="ijazah" class="form-control" value="<?php echo isset($ijazah) ? $ijazah : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>File Kartu Keluarga</label>
                                <input type="file" name="kartu_keluarga" class="form-control" value="<?php echo isset($kartu_keluarga) ? $kartu_keluarga : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>File Akta Kelahiran</label>
                                <input type="file" name="akta_kelahiran" class="form-control" value="<?php echo isset($akta_kelahiran) ? $akta_kelahiran : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Pasfoto 4x6</label>
                                <input type="file" name="pasfoto" class="form-control" value="<?php echo isset($pasfoto) ? $pasfoto : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Registrasi</label>
                                <input type="date" name="tanggal_registrasi" class="form-control" value="<?php echo isset($tanggal_registrasi) ? $tanggal_registrasi : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Tahun Lulus SMA/SMK/MA/Paket C</label>
                                <input type="text" name="tahun_lulus_sekolah" class="form-control" value="<?php echo isset($tahun_lulus_sekolah) ? $tahun_lulus_sekolah : ''; ?>" required>
                            </div>
                            <!-- kolom prodi_diterima akan terisi setelah ubah status/acc oleh admin -->
                            <div class="mb-3">
                                <!-- button untuk kembali -->
                                <button type="submit" class="btn btn-primary float-start" id="back"
                                    name="back">Sebelumnya</button>
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
        <?= print_r($_SESSION['form2_registrasi']); ?>
    </pre>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</html>