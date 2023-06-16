<?php
    session_start();
    require '../koneksi.php';
    //require_once 'auth.php'; //untuk signup/login

    // Penyimpanan data sementara di dalam session
    if (isset($_POST['submit'])) {
        // Menyimpan data ke dalam variabel session
        $_SESSION['form1_dataSiswa'] = [
            'nama_lengkap' => $_POST['nama_lengkap'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'tempat_lahir' => $_POST['tempat_lahir'],
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'nik' => $_POST['nik'],
            'kewarganegaraan' => $_POST['kewarganegaraan'],
            'email' => $_POST['email'],
            'no_hp' => $_POST['no_hp'],
            'agama' => $_POST['agama'],
            'alamat_mahasiswa' => $_POST['alamat_mahasiswa'],
            'rt' => $_POST['rt'],
            'rw' => $_POST['rw'],
            'kecamatan' => $_POST['kecamatan'],
            'kabupaten_kota' => $_POST['kabupaten_kota'],
            'provinsi' => $_POST['provinsi'],
            'kode_pos' => $_POST['kode_pos'],
            'ket_disabilitas' => $_POST['ket_disabilitas'],
            'status_registrasi' => $_POST['status_registrasi'],
            'id_alamat' => $_POST['id_alamat'],
            'id_berkas' => $_POST['id_berkas'],
            'id_orangtua' => $_POST['id_orangtua'],
            'id_registrasi' => $_POST['id_registrasi'],
            'id_status_reg' => $_POST['id_status_reg']
        ];
        
        // Meneruskan ke halaman form bagian 2 : form data pribadi
        header('Location: form2_registrasi.php');
        exit;
    }

    // Pengecekan isi data dalam session
    if (isset($_SESSION['form1_dataSiswa'])) {
        $nama_lengkap = $_SESSION['form1_dataSiswa']['nama_lengkap'];
        $jenis_kelamin = $_SESSION['form1_dataSiswa']['jenis_kelamin'];
        $tempat_lahir = $_SESSION['form1_dataSiswa']['tempat_lahir'];
        $tanggal_lahir = $_SESSION['form1_dataSiswa']['tanggal_lahir'];
        $nik = $_SESSION['form1_dataSiswa']['nik'];
        $kewarganegaraan = $_SESSION['form1_dataSiswa']['kewarganegaraan'];
        $email = $_SESSION['form1_dataSiswa']['email'];
        $no_hp = $_SESSION['form1_dataSiswa']['no_hp'];
        $agama = $_SESSION['form1_dataSiswa']['agama'];
        $alamat_mahasiswa = $_SESSION['form1_dataSiswa']['alamat_mahasiswa'];
        $ket_disabilitas = $_SESSION['form1_dataSiswa']['ket_disabilitas'];
        $status_registrasi = $_SESSION['form1_dataSiswa']['status_registrasi'];
        $id_alamat = $_SESSION['form1_dataSiswa']['id_alamat'];
        $id_berkas = $_SESSION['form1_dataSiswa']['id_berkas'];
        $id_orangtua = $_SESSION['form1_dataSiswa']['id_orangtua'];
        $id_registrasi = $_SESSION['form1_dataSiswa']['id_registrasi'];
        $id_status_reg = $_SESSION['form1_dataSiswa']['id_status_reg'];
    } else {
        $nama_lengkap = '';
        $jenis_kelamin = '';
        $tempat_lahir = '';
        $tanggal_lahir = '';
        $nik = '';
        $kewarganegaraan = '';
        $email = '';
        $no_hp = '';
        $agama = '';
        $alamat_mahasiswa = '';
        $rt = '';
        $rw = '';
        $kecamatan = '';
        $kabupaten_kota = '';
        $provinsi = '';
        $kode_pos = '';
        $ket_disabilitas = '';
        $status_registrasi = '';
        $id_alamat = '';
        $id_berkas = '';
        $id_orangtua = '';
        $id_registrasi = '';
        $id_status_reg = '';
    }

    $query = mysqli_query($conn, "SELECT COUNT(*) as total FROM tbl_mahasiswa"); //where id_mahasiswa from tbl user = id_mahasiswa from tbl_mahasiswa (akun Gisa hanya bisa isi data punya Gisa)
    $row = mysqli_fetch_assoc($query);
   
    // Kode ID Alamat
    $query = mysqli_query($conn, "SELECT max(id_alamat) as kodeUrut FROM tbl_mahasiswa");
    $data = mysqli_fetch_array($query);
    $kodeAlamat = $data['kodeUrut'];
    // ==============================
    $urutan = (int) substr($kodeAlamat, 3, 3);
    $urutan++;

    $huruf = 110;
    $kodeAlamat = $huruf . sprintf("%03s", $urutan);

    // Kode ID Berkas
    $query = mysqli_query($conn, "SELECT max(id_berkas) as kodeUrut FROM tbl_mahasiswa");
    $data = mysqli_fetch_array($query);
    $kodeBerkas = $data['kodeUrut'];
    // ==============================
    $urutan = (int) substr($kodeBerkas, 3, 3);
    $urutan++;

    $huruf = 220;
    $kodeBerkas = $huruf . sprintf("%03s", $urutan);

    // Kode ID Orangtua
    $query = mysqli_query($conn, "SELECT max(id_orangtua) as kodeUrut FROM tbl_mahasiswa");
    $data = mysqli_fetch_array($query);
    $kodeOrtu = $data['kodeUrut'];
    // ==============================
    $urutan = (int) substr($kodeOrtu, 3, 3);
    $urutan++;

    $huruf = 330;
    $kodeOrtu = $huruf . sprintf("%03s", $urutan);

    // Kode ID Registrasi
    $query = mysqli_query($conn, "SELECT max(id_registrasi) as kodeUrut FROM tbl_mahasiswa");
    $data = mysqli_fetch_array($query);
    $kodeRegistrasi = $data['kodeUrut'];
    // ==============================
    $urutan = (int) substr($kodeRegistrasi, 3, 3);
    $urutan++;

    $huruf = 440;
    $kodeRegistrasi = $huruf . sprintf("%03s", $urutan);

    // Kode ID Status Registrasi
    $query = mysqli_query($conn, "SELECT max(id_status_reg) as kodeUrut FROM tbl_mahasiswa");
    $data = mysqli_fetch_array($query);
    $kodeStatus = $data['kodeUrut'];
    // ==============================
    $urutan = (int) substr($kodeStatus, 3, 3);
    $urutan++;

    $huruf = 550;
    $kodeStatus = $huruf . sprintf("%03s", $urutan);

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
                                <h4>Data Pribadi Calon Mahasiswa
                                    <a href="../dashboard/home/index.php" class="btn btn-danger float-end">KEMBALI</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form id="" action="" method="POST">
                                    <!-- id_mahasiswa terisi otomatis auto-increment -->
                                    <div class="mb-3">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo isset($nama_lengkap) ? $nama_lengkap : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo isset($jenis_kelamin) ? $jenis_kelamin : ''; ?>" 
                                        placeholder="P/L" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo isset($tempat_lahir) ? $tempat_lahir : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo isset($tanggal_lahir) ? $tanggal_lahir : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nomor Induk Keluarga (NIK)</label>
                                        <input type="text" name="nik" class="form-control" value="<?php echo isset($nik) ? $nik : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo isset($kewarganegaraan) ? $kewarganegaraan : ''; ?>" 
                                        placeholder="Indonesia/Asing" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php echo isset($email) ? $email : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nomor HP</label>
                                        <input type="text" name="no_hp" class="form-control" value="<?php echo isset($no_hp) ? $no_hp : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama" required>
                                            <option value="">- Pilih Agama -</option>
                                            <?php $query_agama = "SELECT * FROM tbl_agama";
                                                $result_agama = mysqli_query($conn, $query_agama);
                                                while ($row_agama = mysqli_fetch_assoc($result_agama)) { 
                                            $id_agama = $row_agama['id_agama'];?>
                                                <option value="<?php echo $row_agama['nama_agama']; ?>" <?php if ($agama == $id_agama) echo 'selected'; ?> name="agama">   
                                                <?php echo $row_agama['nama_agama']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Alamat Jalan</label>
                                        <input type="text" name="alamat_mahasiswa" class="form-control" value="<?php echo isset($alamat_mahasiswa) ? $alamat_mahasiswa : ''; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>RT</label>
                                        <input type="text" name="rt" class="form-control" value="<?php echo isset($rt) ? $rt : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>RW</label>
                                        <input type="text" name="rw" class="form-control" value="<?php echo isset($rw) ? $rw : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" value="<?php echo isset($kecamatan) ? $kecamatan : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kabupaten</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" value="<?php echo isset($kabupaten_kota) ? $kabupaten_kota : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Provinsi</label>
                                        <input type="text" name="provinsi" class="form-control" value="<?php echo isset($provinsi) ? $provinsi : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kode Pos</label>
                                        <input type="text" name="kode_pos" class="form-control" value="<?php echo isset($kode_pos) ? $kode_pos : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Status Registrasi</label>
                                        <input type="text" name="status_registrasi" class="form-control" value="<?php echo isset($status_registrasi) ? $status_registrasi : ''; echo 0;?>" placeholder="" required readonly>
                                    </div>
                                    <!-- ----------------------------------------------------------------------------------------- -->
                                    <div class="mb-3">
                                        <label>ID Alamat</label>
                                        <input type="text" name="id_alamat" class="form-control" value="<?php echo isset($id_alamat) ? $id_alamat : ''; echo $kodeAlamat;  ?>" placeholder="" required readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>ID Berkas</label>
                                        <input type="text" name="id_berkas" class="form-control" value="<?php echo isset($id_berkas) ? $id_berkas : ''; echo $kodeBerkas; ?>" placeholder="" required readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>ID Orangtua</label>
                                        <input type="text" name="id_orangtua" class="form-control" value="<?php echo isset($id_orangtua) ? $id_orangtua : ''; echo $kodeOrtu; ?>" placeholder="" required readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>ID Registrasi</label>
                                        <input type="text" name="id_registrasi" class="form-control" value="<?php echo isset($id_registrasi) ? $id_registrasi : ''; echo $kodeRegistrasi; ?>" placeholder="" required readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>ID STATUS REG</label>
                                        <input type="text" name="id_status_reg" class="form-control" value="<?php echo isset($id_status_reg) ? $id_status_reg : ''; echo $kodeStatus; ?>" placeholder="" required readonly>
                                    </div>
                                    
                                   
                                    <div class="mb-3">
                                        <label>Kebutuhan Khusus</label>
                                        <select class="form-control" name="ket_disabilitas" required>
                                            <option value="">- Keterangan -</option>
                                            <?php $query_disabilitas = "SELECT * FROM tbl_disabilitas";
                                                $result_disabilitas = mysqli_query($conn, $query_disabilitas);
                                                while ($row_disabilitas = mysqli_fetch_assoc($result_disabilitas)) { 
                                            $id_disabilitas = $row_disabilitas['id_disabilitas'];?>
                                                <option value="<?php echo $row_disabilitas['nama_disabilitas']; ?>" <?php if ($ket_disabilitas == $id_disabilitas) echo 'selected'; ?> name="ket_disabilitas"> 
                                                <?php echo $row_disabilitas['nama_disabilitas']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <!-- button submit -->
                                        <button type="submit" class="btn btn-primary float-end mx-1" id="submit" name="submit">Selanjutnya</button>
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
                <?= print_r($_SESSION['form1_dataSiswa']); ?>
            </pre>
        </body>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

        </html>   
