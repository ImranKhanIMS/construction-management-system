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
  
  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              All Houses
            </h3>
            <p class="subtitle-a">
              All Houses Which Were Building Under You.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
	  
      <div class="row">
	  
	  <!--/ *********************************PHP*********************************************** /-->
	  <!--/ *********************************Coading*********************************************** /-->
	  <!--/ *********************************Imran Khan*********************************************** /-->
	  
	<?php
		include "conn.php";
	
		$query="select * from houses";
		$query_exec=mysqli_query($conn,$query);
	
		while ($row=mysqli_fetch_array($query_exec))
		{
	  
			echo "<div class='col-md-4'>
			
			<h3 align='center'><a style='color:blue;' href='houseclick.php?yid=".$row['number']."'>For Adding Employes and Stock's CLICK HERE</a></h3>
			
			<div class='work-box'>
				<a href='images/".$row['image']."' data-lightbox='gallery-mf'>
				<div class='work-img'>
					<img src='images/".$row['image']."' alt='House Image Not Found' class='img-fluid'>
				</div>
				<div class='work-content'>
					<div class='row'>
					<div class='col-sm-8'>
						<h2 class='w-title'>".$row['location']."</h2>
						<div class='w-more'>
						<span class='w-ctegory'>House : ".$row['number']."</span> / Date : <span class='w-date'>".$row['date']."</span>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class='w-like'>
						<span class='ion-ios-plus-outline'></span>
						</div>
					</div>
					</div>
				</div>
				</a>
			</div>
			</div>";
		}
	?>
	
	
    </div>
  </section>
  <!--/ Section Portfolio End /-->

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
?>