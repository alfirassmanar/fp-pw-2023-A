<?php
include '../../koneksi.php'; 
$status = mysqli_query($conn, "SELECT * FROM vHasilPendaftaran");
?>
<html>
<head>
  <title>Mahasiswa - Export</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Mahasiswa</h2>
			<h4>(Kampusku)</h4>
				<div class="data-tables datatable-dark">
					
        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
               <?php $no = 1; ?>
                        <th>No.</th>
                        <th>Nomor Mahasiswa</th>
                        <th>Nama</th>
                        <th>TGL-LAHIR</th>
                        <th>NIK</th>
                        <th>Kewarganegaraan</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Prodi Acc</th>
                        <th>TGL Registrasi</th>
                        <th>Tahun Lulus</th>
                        <th>Status</th>
                      
            </tr>
        </thead>

        <tbody>
        <?php foreach ($status as $row) {
        
        if ($row['status_registrasi'] != 1) {
          $status = "Ditolak";
        } elseif ($row['status_registrasi'] != 0) {
            $status = "Diterima";
        };

        $row['status_registrasi'] = $status;

            echo "
            <tr>
                <td>".$no++."</td>
                <td>".$row['id_mahasiswa']."</td>
                <td>".$row['nama_lengkap']."</td>
                <td>".$row['tempat_lahir'].", ".$row['tanggal_lahir']."</td>
                <td>".$row['nik']."</td>
                <td>".$row['kewarganegaraan']."</td>
                <td>".$row['email']."</td>
                <td>".$row['alamat_mahasiswa'].", ".$row['kecamatan'].", ".$row['kabupaten_kota'].", ".$row['provinsi'].", ".$row['kode_pos']."</td>
                <td>".$row['pilihan_prodi_1']."</td>
                <td>".$row['tanggal_registrasi']."</td>
                <td>".$row['tahun_lulus_sekolah']."</td>
                <td>".$row['status_registrasi']."</td>
            </tr>
            ";
        }?>
        </tbody>
        </thead>
        </table>
					
	</div>
</div>
	
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'excel','print',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ]
    } );
} );
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script> 

	

</body>

</html>