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
				  <input type="date" class="form-control" placeholder="Masukan Tanggal" name="tanggal">
				  <input type="hidden" class="form-control" placeholder="Masukan Tanggal" name="old_tanggal">
				</div>
				<div class="mb-3">
				  <label class="form-label">Waktu</label>
				  <input type="time" class="form-control" placeholder="Masukan Waktu" name="waktu">
				  <input type="hidden" class="form-control" placeholder="Masukan Waktu" name="old_waktu">
				</div>
				<div class="mb-3">
				  <label class="form-label">Lokasi</label>
				  <input type="text" class="form-control" placeholder="Masukan Lokasi" name="lokasi">
				  <input type="hidden" class="form-control" placeholder="Masukan Lokasi" name="old_lokasi">
				</div>
				<div class="mb-3">
				  <label class="form-label">Suhu Tubuh</label>
				  <input type="number" class="form-control" placeholder="Masukan Suhu Tubuh" name="suhu_tubuh">
				  <input type="hidden" class="form-control" placeholder="Masukan Suhu Tubuh" name="old_suhu_tubuh">
				</div>
				<button type="submit" class="btn btn-success float-right"><i class="nav-icon bi bi-save mr-1"></i>Simpan</button>
			</form>
			</div>
		</div>
	</div>
