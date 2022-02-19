<?php 
if(isset($_GET['tgl'])) {

$tgl = $_GET['tgl'];
$jam = $_GET['jam'];
$lokasi = $_GET['lokasi'];
$suhu = $_GET['suhu'];
$content = file_get_contents('../db/data.txt');

$old = "$tgl|$jam|$lokasi|$suhu\n";

$content = str_replace($old, '', $content);
file_put_contents('../db/data.txt', $content);

echo "<div class='col-lg-6 mx-auto d-flex flex-column mb-2'>
        <h4 class='text-center'>DATA BERHASIL DI HAPUS!!!</h4>
        <a href='dashboard.php?url=catatan-perjalanan' class='btn btn-primary'>Lihat semua data</a>
      </div>";

}


?>

<div class="col-lg-10">
	<div class="card">
	<div class="card-header py-2">
		<p class="float-left mb-0 mt-1">List Data</p>
		<a href="dashboard.php?url=add" class="btn btn-primary float-right">Tambah</a>
	</div>
	<div class="card-body mt-0">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Tanggal</th>
		      <th>Waktu</th>
		      <th>Lokasi</th>
		      <th>Suhu Tubuh</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
      <?php 
      $file = file('../db/data.txt');
       $i = 1;     
        foreach ($file as $key) {
         	$data = explode("|", $key); ?> 
	        <tr>
			      <th><?= $i++ ?></th>
			      <td><?= date('d-m-Y', strtotime($data[0])) ?></td>
			      <td><?= $data[1] ?></td>
			      <td><?= $data[2] ?></td>
			      <td><?= $data[3] ?></td>
			      <td>
			      	<a href="dashboard.php?url=edit&tgl=<?= $data[0] ?>&jam=<?= $data[1] ?>&lokasi=<?= $data[2] ?>&suhu=<?= $data[3] ?>" class="badge badge-success">edit</a>
			      	<a href="dashboard.php?url=catatan-perjalanan&tgl=<?= $data[0] ?>&jam=<?= $data[1] ?>&lokasi=<?= $data[2] ?>&suhu=<?= $data[3] ?>" class="badge badge-danger">hapus</a>
			      </td>
			    </tr>
        <?php } ?>
		  </tbody>
		</table>
	</div>
</div>
</div>

<?php 


 ?>