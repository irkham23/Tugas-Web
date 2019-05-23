<html>

<head>
<title>
	Validasi Data Mahasiswa
</title>
</head>

<body> 
	
<center>
	<h1>VALIDASI DATA NAMA DAN NIM</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		Nama: <input type="text" name="nama"><br> 
		NIM: <input type="text" name="NIM"><br> 
		<input type="submit"> 
	</form>
</center>

<?php 
	$nama= $NIM= ""; 
	$eror = "Nama dan NIM Tidak Boleh Kosong";
	$erornama="Nama Tidak Boleh Kosong";
	$erornim="NIM Tidak Boleh Kosong";
	
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) { 
		$nama= $_POST["nama"]; 
		$nim= $_POST["NIM"]; 
		if (empty($nama)&&empty($nim)) {
			echo "<center>".$eror."</center>";
		}
		elseif (empty($nama)) {
			echo "<center>".$erornama."</center>";
		}
		elseif (empty($nim)) {
			echo "<center>".$erornim."</center>";
		}
		elseif (!is_numeric($_POST["NIM"])) {
			echo "<center>NIM Harus Angka</center>";
		}
		elseif (strlen($_POST["NIM"])!=10) {
			echo "<center>NIM Harus 10 Digit</center>";
		}
		elseif (!empty($nama) && !empty($nim)) {
			echo "<center><h2>Selamat Datang</h2></center>";
			echo "<center>" . $nama . "<br>" . $nim . "</center" ;
		}
	} 
	?>

</body>
</html>