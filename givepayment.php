<?php
		session_start();
		if (isset($_SESSION['email']))
		{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Employes and Stock's Management</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

 <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="title-box-2">
                    <h5 class="title-left">
					<?php
						echo "Giving Payment to Employ<br><br>";
						
						if (isset($_GET['myid']))
						{
							$id= $_GET['myid'];
							echo "Current Working in House : ".$id;
						}
					 ?>
                    </h5>
                  </div>
                  <div>
                      <form action="givepayment.php" method="post" enctype="multipart/form-data">
                      <div class="row">
					  
                        <div class="col-md-12 mb-3">
							<div class="form-group">
								<input style="color:blue;" type="text" name="number" class="form-control" id="name" placeholder="Employ Number (Type Must)">
							</div>
						</div>
						
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<input style="color:blue;" type="text" name="housenumber" class="form-control" id="name" placeholder="House Number (Type Must)">
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<div class="form-group">
								<input style="color:blue;" type="text" name="recivepayment" class="form-control" id="name" placeholder="Give Payment Amount">
							</div>
						</div>
						
                        <div class="col-md-12">
						<button name="submit" type="submit" class="button button-a button-big button-rouded">Give Payment</button>
						
                        </div>
                      </div>
                    </form>
					
					<h4 align="right"><a style="color:white; padding:10px;" class="bg-info button-rouded" href="employ.php">Employes Menu</a></h4>
                  </div>
				  
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&reg; Registred <strong>Imran Khan</strong>. All Rights Reserved</p>
              <div class="credits">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

<?php

	}
	else
	{
		header("Location: login.php");
	}
	
	include "conn.php";
	
		$num=$_POST['number'];
		$housenumber=$_POST['housenumber'];
		$recivepayment=$_POST['recivepayment'];
		$new=$recivepayment;

		if ($num!="" && $housenumber!="" && $recivepayment!="")
		{
			$query = "SELECT * FROM employes WHERE number='$num' AND housenumber='$housenumber'";
			$query_exec=mysqli_query($conn,$query);
			
		while ($row=mysqli_fetch_array($query_exec))
			{
			$old=$row['recivepayment'];
			$paid=$row['totalpayment'];
			$rem=$row['remainingpayment'];
			}
			
			$total=$old+$new;
			
			if ($rem!=0)
			{
				$pay=$rem-$new;
			}
			else
			{
				$pay=$paid-$new;
			}
			$query1 = "UPDATE employes SET recivepayment='$total',remainingpayment='$pay' WHERE number='$num' AND housenumber='$housenumber'";
			$query_exec1=mysqli_query($conn,$query1);
			
			if ($query_exec1==1)
			{
				echo "<h1 align='center'>Payment Successfully Added!<br></h1>";
			}
		}
?>