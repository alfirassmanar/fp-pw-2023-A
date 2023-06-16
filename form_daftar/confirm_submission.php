<?php
    session_start();
    require '../koneksi.php';
    //require_once 'auth.php'; //untuk signup/login

    // Pengecekan isi data dalam session
    if (isset($_POST['submit'])) {
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
        $rt = $_SESSION['form1_dataSiswa']['rt'];
        $rw = $_SESSION['form1_dataSiswa']['rw'];
        $kecamatan = $_SESSION['form1_dataSiswa']['kecamatan'];
        $kabupaten_kota = $_SESSION['form1_dataSiswa']['kabupaten_kota'];
        $provinsi = $_SESSION['form1_dataSiswa']['provinsi'];
        $kode_pos = $_SESSION['form1_dataSiswa']['kode_pos'];
        $ket_disabilitas = $_SESSION['form1_dataSiswa']['ket_disabilitas'];
        $status_registrasi = $_SESSION['form1_dataSiswa']['status_registrasi'];
        // 
        $id_alamat = $_SESSION['form1_dataSiswa']['id_alamat'];
        $id_berkas = $_SESSION['form1_dataSiswa']['id_berkas'];
        $id_orangtua = $_SESSION['form1_dataSiswa']['id_orangtua'];
        $id_registrasi = $_SESSION['form1_dataSiswa']['id_registrasi'];
        $id_status_reg = $_SESSION['form1_dataSiswa']['id_status_reg'];

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

        $nama_ayah = $_SESSION['form3_dataOrtu']['nama_ayah'];
        $pekerjaan_ayah = $_SESSION['form3_dataOrtu']['pekerjaan_ayah'];
        $penghasilan_ayah = $_SESSION['form3_dataOrtu']['penghasilan_ayah'];
        $nama_ibu = $_SESSION['form3_dataOrtu']['nama_ibu'];
        $pekerjaan_ibu = $_SESSION['form3_dataOrtu']['pekerjaan_ibu'];
        $penghasilan_ibu = $_SESSION['form3_dataOrtu']['penghasilan_ibu'];


        // Insert into tabel alamat
        $query = "INSERT INTO tbl_alamat (id_alamat, alamat_mahasiswa, rt, rw, kecamatan, kabupaten_kota, provinsi, kode_pos) VALUES ('$id_alamat', '$alamat_mahasiswa','$rt','$rw','$kecamatan','$kabupaten_kota','$provinsi','$kode_pos')";
        $result = mysqli_query($conn, $query);
        $alamat_mahasiswa = mysqli_insert_id($conn);

        // $unique_id_berkas = substr(uniqid(), 0, 10);
        // $_SESSION['unique_id_berkas'] = $unique_id_berkas;

        // Insert into tabel registrasi
        $query = "INSERT INTO tbl_berkas (id_berkas, ijazah, kartu_keluarga, akta_kelahiran, pasfoto) VALUES ('$id_berkas','$ijazah', '$kartu_keluarga', '$akta_kelahiran', '$pasfoto')";
        $result = mysqli_query($conn, $query);
        // $unique_id_regis = substr(uniqid(), 0, 10);
        // $_SESSION['unique_id_regis'] = $unique_id_regis;
        // $id_status_reg = 1;
        // $_SESSION['id_status_reg'] = $id_status_reg;
        // Insert into tabel registrasi
        $query = "INSERT INTO tbl_registrasi (id_registrasi, nisn, no_ijazah, pilihan_prodi_1, pilihan_prodi_2, tanggal_registrasi, tahun_lulus_sekolah) VALUES ('$id_registrasi','$nisn', '$no_ijazah', '$pilihan_prodi_1', '$pilihan_prodi_2', '$tanggal_registrasi', '$tahun_lulus_sekolah')"; 
        $result = mysqli_query($conn, $query);
        //kolom prodi_diterima kosong

        // $unique_ortu = substr(uniqid(), 0, 10);
        // Insert into tabel orangtua
        $query = "INSERT INTO tbl_orangtua (id_orangtua, nama_ayah, pekerjaan_ayah, penghasilan_ayah, nama_ibu, pekerjaan_ibu, penghasilan_ibu) VALUES ('$id_orangtua', '$nama_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$nama_ibu', '$pekerjaan_ibu', '$penghasilan_ibu')";
        $result = mysqli_query($conn, $query);

        $query = "INSERT INTO tbl_status_registrasi (id_status_reg, status_registrasi) VALUES ('$id_status_reg', '$status_registrasi')";
        $result = mysqli_query($conn, $query);

        // $unique_id_mahasiswa = substr(uniqid(), 0, 10);
        // Insert into tabel siswa (data pribadi kecuali alamat)
        $query = "INSERT INTO tbl_mahasiswa (id_alamat, id_berkas, id_orangtua, id_registrasi, id_status_reg, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, nik, kewarganegaraan, email, no_hp, agama, alamat_mahasiswa, rt, rw, kecamatan, kabupaten_kota, provinsi, kode_pos, status_registrasi, ket_disabilitas, pasfoto)
        VALUES ('$id_alamat', '$id_berkas', '$id_orangtua', '$id_registrasi', '$id_status_reg', '$nama_lengkap', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$nik',
        '$kewarganegaraan', '$email', '$no_hp', '$agama', '$alamat_mahasiswa', '$rt', '$rw', '$kecamatan', '$kabupaten_kota', '$provinsi', '$kode_pos','$status_registrasi', '$ket_disabilitas', '$pasfoto')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_error($conn));
        } else {
            // ambil id registrasi
            $id_registrasi = mysqli_insert_id($conn);
        }

        // alert sukses
        echo "<script>alert('Data berhasil disimpan.');</script>";
        header('Location: ./success.php');
    } 

    // Kembali ke halaman sebelumnya
    if (isset($_POST['back'])) {
        header('Location: form3_dataOrtu.php');
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
    <div class="container">
        <h4>Lihat Data</h4>
        <?php
            echo "<pre>";
            print_r($_SESSION['form1_dataSiswa']);
            print_r($_SESSION['form2_registrasi']);
            print_r($_SESSION['form3_dataOrtu']);
            echo "</pre>";
        ?>
        <form action="" method="POST">
            <!-- button untuk kembali -->
            <button type="submit" class="btn btn-primary float-start" id="back"
            name="back">Sebelumnya</button>
            <!-- button untuk submit -->
            <button type="submit" class="btn btn-primary float-end mx-1" id="submit"
            name="submit">Submit</button>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</html>