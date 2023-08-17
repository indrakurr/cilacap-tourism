<?php 
	session_start();
	include '../Admin/function.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="../Admin/css/style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1 style="font-family: Arial, Helvetica, sans-serif"><a href="dashboard.php">ADMIN</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Tempat</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3 style="font-family: Arial, Helvetica, sans-serif; margin-left: 15px">Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
											null,
											'".$nama."') ");
						if($insert){
							echo '<script>alert("Tambah Data Berhasil")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}else{
							echo 'Tambah Data Gagal '.mysqli_error($conn);
						}

					}
					
				?>
			</div>
		</div>
	</div>
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - Cilacap Tourism.</small>
		</div>
	</footer>
</body>
</html>