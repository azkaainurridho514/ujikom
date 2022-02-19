<?php

include_once "../functions/function.php";

if(isset($_POST['add'])){
	$token = $_POST['add'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	$lokasi = $_POST['lokasi'];
	$suhu = $_POST['suhu_tubuh'];
	$f = "$tanggal|$waktu|$lokasi|$suhu\n";
	if($token == token()){
      if($tanggal && $waktu && $lokasi && $suhu == true){
        $file = fopen("../db/data.txt","a");  
	     fwrite($file, $f);  
		fclose($file); 
         echo "<div class='col-lg-6 d-flex flex-column'>
		        <h4 class='text-center'>DATA BERHASIL DI TAMBAHKAN!!!</h4>
		        <a href='dashboard.php?url=catatan-perjalanan' class='btn btn-primary mb-2'>Lihat semua data</a>
		      </div>";
      }else{
      	?>
         <script>
          alert('ANDA HARUS MENGISI SEMUA FIELD YANG TERSEDIA!!!');
         </script>
         <?php
      }
	}
}

?>

<div class="col-lg-8">
    <div class="card">
    	<div class="card-header">
    		<p class="mb-0 float-left mt-2">Tambah Data Perjalanan</p>
    		<a href="dashboard.php?url=catatan-perjalanan" class="btn btn-secondary float-right"><i class="nav-icon bi bi-backspace mr-1"></i>Back</a>
    	</div>
    	<div class="card-body">
    		<form action="" method="post">
    			<input type="hidden" name="add" value="<?= token() ?>">
				<div class="mb-3">
				  <label class="form-label">Tanggal</label>
				  <input type="date" class="form-control" placeholder="Masukan Tanggal" name="tanggal">
				</div>
				<div class="mb-3">
				  <label class="form-label">Waktu</label>
				  <input type="time" class="form-control" placeholder="Masukan Waktu" name="waktu">
				</div>
				<div class="mb-3">
				  <label class="form-label">Lokasi</label>
				  <input type="text" class="form-control" placeholder="Masukan Lokasi" name="lokasi">
				</div>
				<div class="mb-3">
				  <label class="form-label">Suhu Tubuh</label>
				  <input type="number" class="form-control" placeholder="Masukan Suhu Tubuh" name="suhu_tubuh">
				</div>
				<button type="submit" class="btn btn-success float-right"><i class="nav-icon bi bi-save mr-1"></i>Simpan</button>
			</form>
    	</div>
    </div>
</div>