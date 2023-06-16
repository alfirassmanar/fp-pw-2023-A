<?php
include('../../koneksi.php');

$nMahasiswa = mysqli_query($conn,"SELECT * FROM vHasilPendaftaran WHERE status_registrasi = 1 limit 7");

while($row = mysqli_fetch_array($nMahasiswa)){
$outNamaMHS[] = $row['status_registrasi'];

$query = mysqli_query($conn,"SELECT tahun_lulus_sekolah FROM
vHasilPendaftaran WHERE id_mahasiswa='".$row['id_mahasiswa']."'");
$row = $query->fetch_array();
$outTotalStatus[] = $row['tahun_lulus_sekolah'];
}
?>
<!doctype html>
<html>
<head>
<title>Pie Chart</title>
<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
<div id="canvas-holder" style="width:50%">
<canvas id="chart-area"></canvas>
</div>
<script>
var config = {
type: 'bar',
data: {
datasets: [{
data:<?php echo json_encode($outNamaMHS);

?>,

backgroundColor: [
'red',
'orange',
'yellow',
'brown',
'salmon',
'pink',
'blue',
'gray',
'silver',
'green'
],
borderColor: [
'red',
'orange',
'yellow',
'brown',
'salmon',
'pink',
'blue',
'gray',
'silver',
'green'
],
label: 'Presentase Mahasiswa diterima pertahun'
}],
labels: <?php echo json_encode($outTotalStatus); ?>},
options: {
responsive: true
}
};
window.onload = function() {

var ctx = document.getElementById('chart-area').getContext('2d');

window.myPie = new Chart(ctx, config);
};
document.getElementById('randomizeData').addEventListener('click',
function() {

config.data.datasets.forEach(function(dataset) {
dataset.data = dataset.data.map(function() {
return randomScalingFactor();
});
});
window.myPie.update();
});
var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click',

function() {

var newDataset = {
backgroundColor: [],
data: [],
label: 'New dataset ' +

config.data.datasets.length,

};
for (var index = 0; index < config.data.labels.length;

++index) {

newDataset.data.push(randomScalingFactor());
var colorName = colorNames[index %

colorNames.length];

var newColor = window.chartColors[colorName];
newDataset.backgroundColor.push(newColor);
}
config.data.datasets.push(newDataset);
window.myPie.update();
});
document.getElementById('removeDataset').addEventListener('click',
function() {

config.data.datasets.splice(0, 1);
window.myPie.update();
});
</script>
<br>
</body>
</html>