
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>KOPERASI POLBAN</title>
  </head>

  <?php
    session_start();

    if(!isset($_SESSION["username"])){
      header("location:login_dengan_database.php");
    }

		if(!isset($_GET['content']))
		{
			$vcontent = 'home.php';
		}
		else
		{
			$vcontent = $_GET['content'];
		}
  ?>


  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="template.php">KOPERASI POLBAN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="template.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link" href="template.php?content=Admin.php">Daftar Nasabah <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Transaksi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="template.php?content=form_penarikan.php">Penarikan Tabungan</a>
                    <a class="dropdown-item" href="template.php?content=form_setor_tabungan.php">Setor Tabungan</a>
                    <a class="dropdown-item" href="template.php?content=form_pinjam.php">Pinjam Uang</a>
                    <a class="dropdown-item" href="template.php?content=form_setor_angsuran.php">Bayar Angsuran</a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
           
        </ul>
     </div>
    </nav>
    <div class="row mt-2 mx-auto">
      <?php 
      if(isset($_GET["daftar_error"]))
      {
          echo "<h5 class='mx-auto text-center' style='color:red';>Pendaftaran Gagal</h5>";
      }

      include $vcontent; ?>
		</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>