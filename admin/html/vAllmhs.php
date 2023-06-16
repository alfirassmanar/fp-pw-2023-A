<?php include '../../koneksi.php'; 
$allmhs = mysqli_query($conn, "SELECT * FROM vHasilPendaftaran");
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>All Mahasiswa - Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="./dba/vDba.php">Home</a>  /</span> All Mahasiswa </h4>
              <a href="./vExport.php"><div class="btn btn-sm btn-success" style="margin-bottom: 10px;">Export PDF</div></a>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tabel All Mahasiswa</h5> 
                <div class="table-responsive text-nowrap">
                  <table class="table" id="mauexport" >
                    <thead>
                      <tr>
                        <?php $no = 1; ?>
                        <th>No.</th>
                        <th>Nomor Mahasiswa</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>NIK</th>
                        <th>Kewarganegaraan</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Ket Disabilitas</th>
                        <th>Alamat Mahasiswa</th>
                        <th>Pilihan Prodi</th>
                        <th>Tanggal Registrasi</th>
                        <th>Tahun Lulus</th>
                        <th>Status Registrasi</th>
                        <th>More</th>
                      </tr>

                      <?php foreach ($allmhs as $row) {
                        
                        if ($row['status_registrasi'] != 1) {
                            $status = "Ditolak";
                        } elseif ($row['status_registrasi'] != 0) {
                            $status = "Diterima";
                        };

                        $row['status_registrasi'] = $status;

                      echo "
                        <tbody class='table-border-bottom-0'>
                        <tr>
                          <td>".$no++."</td>
                          <td>".$row['id_mahasiswa']."</td>
                          <td><img src='../assets/img/fotoMHS/$row[pasfoto]' width='100' height='150'></img></td>
                          <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>".$row['nama_lengkap']."</strong></td>
                          <td>".$row['jenis_kelamin']."</td>
                          <td>
                           ".$row['tempat_lahir'].", ".$row['tanggal_lahir']."
                          </td>
                          <td>".$row['nik']."</td>
                          <td><span class='badge bg-label-primary me-1'>".$row['kewarganegaraan']."</span></td>
                          <td>".$row['email']."</td>
                          <td>".$row['no_hp']."</td>
                          <td>".$row['ket_disabilitas']."</td>
                          <td>
                          ".$row['alamat_mahasiswa'].", ".$row['kecamatan'].", ".$row['kabupaten_kota'].", ".$row['provinsi'].", ".$row['kode_pos'].",
                          </td>
                          <td>".$row['pilihan_prodi_1']."</td>
                          <td>".$row['tanggal_registrasi']."</td>
                          <td>".$row['tahun_lulus_sekolah']."</td>
                          <td>".$row['status_registrasi']."</td>
                          <td>
                            <div class='dropdown'>
                              <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                                <i class='bx bx-dots-vertical-rounded'></i>
                              </button>
                              <div class='dropdown-menu'>
                              <!-- Modal Backdrop -->
                                <a class='dropdown-item' type='button' data-bs-toggle='modal'
                                data-bs-target='#backDropModal' href='javascript:void(0);'
                                  ><i class='bx bx-edit-alt me-1'></i>Informasi Lengkap</a>
                                <!-- <a class='dropdown-item' href='javascript:void(0);'
                                  ><i class='bx bx-trash me-1'></i> Delete</a
                                > -->
                              </div>
                            </div>
                          </td>
                        </tr>
                        
                      </tbody>
                      ";
                     }
                     ?> 
                    
                    </thead>
                  </table>
                </div>
              </div>

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
  </body>
</html>
