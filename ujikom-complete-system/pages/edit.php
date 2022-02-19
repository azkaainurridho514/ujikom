<?php
 if(!isset($_SESSION['auth'])){
  header('location: ../');
 }


if(isset($_POST['add'])) {
$tgl = $_POST['tanggal'];
$jam = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu_tubuh'];
$old_tgl = $_POST['old_tanggal'];
$old_jam = $_POST['old_waktu'];
$old_lokasi = $_POST['old_lokasi'];
$old_suhu = $_POST['old_suhu_tubuh'];
$content = file_get_contents('../db/data.txt');

$f_new = "$tgl|$jam|$lokasi|$suhu";
$f_old = "$old_tgl|$old_jam|$old_lokasi|$old_suhu";

$content = str_replace($f_old, $f_new, $content);
file_put_contents('../db/data.txt', $content);

echo "<div class='col-lg-6 mx-auto d-flex flex-column mb-2'>
        <h4 class='text-center'>DATA BERHASIL DI UBAH!!!</h4>
        <a href='dashboard.php?url=catatan-perjalanan' class='btn btn-primary'>Lihat semua data</a>
      </div>";
     

}else{
  // header("location: dashboard.php?url=catatan-perjalanan");
}


$tgl = $_GET['tgl'];
$jam = $_GET['jam'];
$lokasi = $_GET['lokasi'];
$suhu = $_GET['suhu'];

if(isset($_GET['url'])) { ?>

	<div class="col-lg-10">
		<div class="card shadow">
			<div class="card-header">
				<p class="float-left m-0 mt-2">Edit data catatan perjalanan</p>
				<a href="dashboard.php?url=catatan-perjalanan" class="float-right m-0 btn btn-secondary">Back</a>
			</div>
			<div class="card-body">
				<form action="" method="post">
    			<input type="hidden" name="add" value="add">
				<div class="mb-3">
				  <label class="form-label">Tanggal</label>
				  <input type="date" class="form-control" placeholder="Masukan Tanggal" value="<?= $tgl ?>" name="tanggal">
				  <input type="hidden" class="form-control" placeholder="Masukan Tanggal" value="<?= $tgl ?>" name="old_tanggal">
				</div>
				<div class="mb-3">
				  <label class="form-label">Waktu</label>
				  <input type="time" class="form-control" placeholder="Masukan Waktu" value="<?= $jam ?>" name="waktu">
				  <input type="hidden" class="form-control" placeholder="Masukan Waktu" value="<?= $jam ?>" name="old_waktu">
				</div>
				<div class="mb-3">
				  <label class="form-label">Lokasi</label>
				  <input type="text" class="form-control" placeholder="Masukan Lokasi" value="<?= $lokasi ?>" name="lokasi">
				  <input type="hidden" class="form-control" placeholder="Masukan Lokasi" value="<?= $lokasi ?>" name="old_lokasi">
				</div>
				<div class="mb-3">
				  <label class="form-label">Suhu Tubuh</label>
				  <input type="number" class="form-control" placeholder="Masukan Suhu Tubuh" value="<?= $suhu ?>" name="suhu_tubuh">
				  <input type="hidden" class="form-control" placeholder="Masukan Suhu Tubuh" value="<?= $suhu ?>" name="old_suhu_tubuh">
				</div>
				<button type="submit" class="btn btn-success float-right"><i class="nav-icon bi bi-save mr-1"></i>Simpan</button>
			</form>
			</div>
		</div>
	</div>

<?php }else{
	header("location: dashboard.php?url=catatan-perjalanan");
} ?>