<?php
	include 'koneksi.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
?>

<!DOCTYPE html>
<html>
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	    <title>Triarti: Masuk</title>
	    <link rel="stylesheet" href="proseslogin.css" type="text/css">
	</head>

	<body>
		<div class="container">

		<?php
		if (!empty($username) && !empty($password)) {
			$sql = mysqli_query($connect, "SELECT*FROM user where username = '$username' AND password = '$password'");
			$result = mysqli_num_rows($sql);
			
			if ($result) {
				echo "<h1>Anda berhasil masuk!<h1>";
				echo "<a href='beranda.html'>Lanjutkan sebagai user</a><br>";
			}

			else{
				echo "Username dan password salah";
			}
		}
		
		else{
			echo "Silakan isi username dan password";
		}
		?>

	</div>

</body>
</html>