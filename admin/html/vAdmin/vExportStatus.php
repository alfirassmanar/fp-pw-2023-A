<?php
include '../../koneksi.php'; 
$status = mysqli_query($conn, "SELECT * FROM vHasilPendaftaran");
?>
<html>
<head>
  <title>Status Mahasiswa - Export</title>
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
			<h2>Status Registrasi</h2>
			<h4>(Kampusku)</h4>
				<div class="data-tables datatable-dark">
					
        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <?php $no = 1; ?>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Registrasi</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($status as $row) {
            echo "
            <tr>
                <td>".$row['nama_lengkap']."</td>
                <td>".$row['tanggal_registrasi']."</td>
                <td>".$row['pilihan_prodi_1']."</td>
                <td>".$row['pilihan_prodi_2']."</td>
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
            'copy', 'csv', 'excel', 'pdf', 'print'
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