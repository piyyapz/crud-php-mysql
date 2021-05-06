<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">
    <title>Tambah</title>
</head>
<body>
    <div class="container col-md-6 mt-4">
		<h2 class="text-center fw-bold">Tambah Data</h2>
		<hr>
		<div class="card">
            <div class="card-header bg-dark text-white"> 
            Input Data Mahasiswa
        </div>
            <div class="card-body">
				<form action="aksi.php" method="post" role="form">
					<div class="form-group row mb-2">
						<label class="col-sm-2 col-form-label rounded">NIM</label>
                        <div class="col-sm-9">
						<input type="text" name="nim" required="" class="form-control">
					    </div>
                    </div>

					<div class="form-group row mb-2">
						<label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-9">
						<input type="text" name="nama" required="" class="form-control">
					</div>
                    </div>

					<div class="form-group row mb-3">
						<label class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
						<input type="text" name="jurusan" required="" class="form-control">
					</div>
                    </div>

                    <div class="form-group row mb-2">
						<label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-9">
						<input type="text" name="alamat" required="" class="form-control">
					</div>
                    </div>
                    <div class="col-sm-10">
					<input type="submit" class="btn btn-info" name="tambah" value="SIMPAN">
					<a href="index.php" class="btn btn-warning">KEMBALI</a>
                    </div>
				</form>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
    crossorigin="anonymous"></script> 
</body>
</html>