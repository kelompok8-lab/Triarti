<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Triarti: Bank Sampah</title>
    <link rel="stylesheet" href="banksampah.css" type="text/css">
    <script src="assets/Chart.bundle.js"></script>
  </head>

  <body>
  	<header>
    	<div class="logoo">
    		<a href="#">TRIARTI</a>
    	</div>
			
			<nav><!-- Navbar -->
				<ul class="nav_links">
					<li><a href="beranda.html">Beranda</a></li>
					<li><a href="banksampah.php">Bank Sampah</a></li>
					<li><a href="daurulang.html">Daur Ulang</a></li>
					<li><a href="artikel.html">Artikel</a></li>
					<li><a href="profil.php">Profil</a></li>
				</ul>
			</nav>
	  </header>

    <div class="row">
      <div class="column">
        <h2>Bank Sampah</h2>
        <p>Masukkan jenis sampah dan beratnya, tuliskan alamat Anda, serta tambahkan lampiran (jika ada)</p>

        <div class="container">
          <form method="post" action="">
          <table>
              <tr>
                <td class="td-lable">Nama Pengirim</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
              </tr>
              <tr>
                <td>Jenis Sampah</td>
                <td>:</td>
                <td><input type="text" name="jenis"></td>
              </tr>
              <tr>
                <td>Berat/Banyak</td>
                <td>:</td>
                <td><input type="text" name="berat"></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
              </tr>
              <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td><input type="text" name="lampiran"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><input class="send" type="submit" name="Kirim" value="Kirim">
                </td>
              </tr>
          </table>
          </form>
        </div><br>

        <?php
        include 'koneksi.php';
        if(isset($_POST['Kirim'])){
          mysqli_query($connect,"INSERT INTO bank_sampah set 
            nama = '$_POST[nama]',
            jenis ='$_POST[jenis]',
            berat = '$_POST[berat]',
            alamat = '$_POST[alamat]',
            lampiran = '$_POST[lampiran]'");

          echo "Klik <a href='banksampah2.php'>disini</a> untuk lanjut!";
        }
        ?>   
      </div>
      
      <div class="column">
        <h2>Statistik Triarti</h2>
        <div class="container">
          <canvas id="myChart" width="20" height="15"></canvas>
        </div>
        <script>
          var ctx = document.getElementById("myChart");
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ["Oktober", "November", "Desember"],
              datasets: [{
                label: 'banyaknya',
                data: [10, 5, 7],
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>
      </div>    
    </div>

    <footer>
      <div class="footer-inner">
        <div class="footer-inner-content">
          <div class="footer-inner-info">
            <span class="footer-inner-icon">TRIARTI</span><br>
            <span class="footer-inner-copy">&copy;2020</span><br><br>
            <span class="footer-inner-address">Ketintang, Surabaya<br/>Jawa Timur, Indonesia</span>
          </div><br>
        </div>  

        <div class="w3-xlarge w3-padding-32">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
          <i class="fa fa-whatsapp w3-hover-opacity"></i>
        </div>

      <p>Design by <a href="https://www.TRIARTI.com/w3css/default.asp" target="_blank">TRIARTI.COM</a></p> 

      </div>
    </footer>


	  <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
          document.querySelector('.notif').addEventListener('click', function(event) {
            event.stopPropagation();
            Swal.fire('Sampah selesai diproses');
          });
        </script>

  </body>
</html>



