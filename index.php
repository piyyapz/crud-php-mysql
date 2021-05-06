
<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database="data_mahasiswa";
$koneksi = mysqli_connect($host, $username, $password, $database);
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
	<div class="container" style="margin-top:20px">
		<h2 class="text-center fw-bold">Data Mahasiswa</h2>
		<hr>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th class="text-center">NIM</th>
					<th class="text-center">NAMA</th>
					<th class="text-center">JURUSAN</th>
                    <th class="text-center">ALAMAT</th>
					<th class="text-center" colspan='2'>AKSI</th>
				</tr>
			</thead>
            <tbody>

			<?php
				$sql="SELECT * FROM `data_mahasiswa`";
				$result=$koneksi->query($sql);
				while ($row=mysqli_fetch_array($result)) {
					$_SESSION['nim']=$row['nim'];
					echo "<form action='aksi.php' method='post'>
					<tr class='text-center'>
					<td>".$row['nim']."</td>
					<td>".$row['nama']."</td>
					<td>".$row['jurusan']."</td>
					<td>".$row['alamat']."</td>
					<td><a class='btn btn-warning' href='update.php?nim=" . $row['nim'] . "&nama=" . $row['nama'] . "&jurusan=" . $row['jurusan'] . "&alamat=" . $row['alamat'] . "'>Update</a>&nbsp;<input class='btn btn-danger' type='submit' value='Delete' name='delete'/></td>
				  </tr>
				</form>";
				}
			?>
			</tbody>
		

		</table>
		 <a href="tambah.php" class="btn btn-success btn-primary float-right">Tambah</a>
	</div>       
	<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
    crossorigin="anonymous"></script> 
</body>
</html>