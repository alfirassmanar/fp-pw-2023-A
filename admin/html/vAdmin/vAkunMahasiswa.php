<?php include '../../koneksi.php'; 

  $status = mysqli_query($conn, "SELECT * FROM vHasilPendaftaran ORDER BY id_mahasiswa DESC");
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

    <title>Akun Mahasiswa - Admin</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="../admin/vAdmin.php">Home</a>  /</span> Akun Mahasiswa</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tabel Akun Mahasiswa</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <?php $no = 1; ?>
                        <th>No.</th>
                        <th>Nama Mahasiswa</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Agama</th>
                        <th>Tanggal Registrasi</th>
                        <th>Tahun Lulus</th>
                        <th>Pilihan Prodi 1</th>
                        <th>Pilihan Prodi 2</th>
                        <th>||</th>
                        <th>Ijazah</th>
                        <th>Kartu Keluarga</th>
                        <th>Akta Kelahiran</th>
                        <th>More</th>
                      </tr>

                     <?php foreach ($status as $row) {
                        echo "
                        <tbody class='table-border-bottom-0'>
                        <tr>
                          <td>".$no++."</td>
                          <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>".$row['nama_lengkap']."</strong></td>
                          <td><span class='badge bg-label-primary me-1'>".$row['alamat_mahasiswa']."</span></td>
                          <td><span>".$row['no_hp']."</span></td>
                          <td><span>".$row['agama']."</span></td>
                          <td><span>".$row['tanggal_registrasi']."</span></td>
                          <td><span>".$row['tahun_lulus_sekolah']."</span></td>
                          <td><span>".$row['pilihan_prodi_1']."</span></td>
                          <td><span>".$row['pilihan_prodi_2']."</span></td>
                          <td></td>
                          <td><a class='dropdown-item' type='button' data-bs-toggle='modal'
                          data-bs-target='#backDropModal' href='javascript:void(0);'><span>".$row['ijazah']."</span></a></td>
                          <td><span><a class='dropdown-item' type='button' data-bs-toggle='modal'
                          data-bs-target='#backDropModal2' href='javascript:void(0);'>".$row['kartu_keluarga']."</a></span></td>
                          <td><span><a class='dropdown-item' type='button' data-bs-toggle='modal'
                          data-bs-target='#backDropModal3' href='javascript:void(0);'>".$row['akta_kelahiran']."</a></span></td>
                          <td>
                            <div class='dropdown'>
                              <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                                <i class='bx bx-dots-vertical-rounded'></i>
                              </button>
                              <div class='dropdown-menu'>
                              <!-- Modal Backdrop -->
                                <a><i class='bx bx-edit-alt me-1'></i>Informasi Lengkap</a>
                                <!-- <a class='dropdown-item' href='javascript:void(0);'
                                  ><i class='bx bx-trash me-1'></i> Delete</a
                                > -->
                              </div>
                            </div>
                          </td>
                         
                        </tr>
                        
                      </tbody>
                        ";
                     } ?> 
                    </thead>
                  </table>
                </div>
              </div>
                        <!-- Modal -->
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                                <embed src="../html/FilePDF/<?= $row['ijazah'] ?>" type='application/pdf' width='100%' height='700px'/>               
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                  Close
                                </button>
                              </div>

                            </form>
                          </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="backDropModal2" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                                <embed src="../html/FilePDF/?id_mahasiswa=<?= $row['kartu_keluarga'] ?>" type='application/pdf' width='100%' height='700px'/>               
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                  Close
                                </button>
                              </div>

                            </form>
                          </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="backDropModal3" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                                <embed src="../html/FilePDF/?id_mahasiswa=<?= $row['akta_kelahiran'] ?>" type='application/pdf' width='100%' height='700px'/>               
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                  Close
                                </button>
                              </div>

                            </form>
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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
