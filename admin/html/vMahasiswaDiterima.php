<?php include '../../koneksi.php'; 

  $status = mysqli_query($conn, "SELECT * FROM vHasilPendaftaran");
?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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

    <title>Mahasiswa di Terima - Admin</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="./dba/vDba.php">Home</a>  /</span> Acc Mahasiswa</h4>
              <a href="./vExportDiterima.php"><div class="btn btn-sm btn-success" style="margin-bottom: 10px;">Export PDF</div></a>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tabel Acc Mahasiswa</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <?php $no = 1; ?>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Status Registrasi</th>
                        <th>More</th>
                      </tr>

                     <?php 
                        foreach ($status as $row) {
                          if ($row['status_registrasi'] != 0) {
                          echo "
                          <tbody class='table-border-bottom-0'>
                          <tr>
                            <td>".$no++."</td>
                            <td><img src='../assets/img/fotoMHS/$row[pasfoto]' width='100' height='150'></img></td>
                            <td>".$row['nama_lengkap']."</td>
                            <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>".$row['status_registrasi']."</strong></td>
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
                      }
                     ?> 
                    </thead>
                  </table>
                </div>
              </div>
                        <!-- Modal -->
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBackdrop" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      id="nameBackdrop"
                                      class="form-control"
                                      placeholder="Enter Name"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBackdrop" class="form-label">Email</label>
                                    <input
                                      type="text"
                                      id="emailBackdrop"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBackdrop" class="form-label">DOB</label>
                                    <input
                                      type="text"
                                      id="dobBackdrop"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save</button>
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
