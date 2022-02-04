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

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Employes and Stock's Management</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->
  
  <!--/ Intro Skew Star /-->
  
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Selling House</h1>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

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
                      Sold House
                    </h5>
                  </div>
                  <div>
                      <form action="del.php" method="post" enctype="multipart/form-data">
                      <div class="row">
					  
                        <div class="col-md-12 mb-3">
							<div class="form-group">
								<input style="color:blue;" type="text" name="number" class="form-control" id="name" placeholder="House Number">
							</div>
						</div>
						
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<input style="color:blue;" type="text" name="soldamount" class="form-control" id="name" placeholder="Sold Amount">
							</div>
						</div>
						
                        <div class="col-md-12">
                          <button name="submit" type="submit" class="button button-a button-big button-rouded">Sell House</button>
                        </div>
                      </div>
                    </form>
					<h4 align="right"><a style="color:blue; padding:10px;" class="bg-warning button-rouded" href="home.php">Back to Menu</a></h4>
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
	
	if (isset($_POST['submit']))
	{	
		$num=$_POST['number'];
		$soldamount=$_POST['soldamount'];
		
		$query="select * from houses WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);
	
		while ($row=mysqli_fetch_array($query_exec))
		{
			$number=$row['number'];
			$location=$row['location'];
			$date=$row['date'];
			$image=$row['image'];
			$total=0;
			$total1=0;
			
			$query0="select * from employes WHERE housenumber='$num'";
			$query_exec0=mysqli_query($conn,$query0);
			while ($row=mysqli_fetch_array($query_exec0))
			{
				$id="";
				$query111="UPDATE employes SET number='$id' WHERE housenumber='$num'";
				$query_exec111=mysqli_query($conn,$query111);
				
				$initial=$row['totalpayment'];
				$total=$total+$initial;
			}$emp=$total;
			
			$query01="select * from stocks WHERE housenumber='$num'";
			$query_exec01=mysqli_query($conn,$query01);
			while ($row=mysqli_fetch_array($query_exec01))
			{
				$id="";
				$query112="UPDATE stocks SET number='$id' WHERE housenumber='$num'";
				$query_exec112=mysqli_query($conn,$query112);
				
				$initial1=$row['totalpayment'];
				$total1=$total1+$initial1;
			}$sto=$total1;
			$final=$emp+$sto;
			
			$query1="INSERT INTO sellhouses (number,location,date,image,soldamount,total) VALUES('$number','$location','$date','$image','$soldamount','$final')";
			$query_exec1=mysqli_query($conn,$query1);
			
			
			$query5="select * from sellhouses WHERE number='$num'";
			$query_exec5=mysqli_query($conn,$query5);
			while ($row=mysqli_fetch_array($query_exec5))
			{
				$fina=$row['soldamount'];
				$init=$row['total'];
				
				$earning=$fina-$init;
			}
			
			$query2="UPDATE sellhouses SET earning='$earning' WHERE number='$num'";
			$query_exec2=mysqli_query($conn,$query2);
			
		}
		if ($num!="")
		{
			$query = "DELETE FROM houses WHERE number='$num'";
			$query_exec=mysqli_query($conn,$query);
		}
		
		if ($query_exec1==1)
		{
			echo "<h2>House Sold Successfully!</h2>";
		}
	}
?>