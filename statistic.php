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

  <!--/ Section Employ /-->
  <section id='blog' class='blog-mf sect-pt4 route'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-12'>
          <div class='title-box text-center'>
            <h2>
              Statistic
            </h2>
            <div class='line-mf'></div>
          </div>
        </div>
      </div>
	  <div class='row'>
  <?php
		include "conn.php";
		
		/*All Sold Houses*/
		echo "<div class='col-md-12'>
          <div class='card card-blog'>
			<h3 align='center'>All Sold Houses</h3>
		  </div>
		  </div>";
		
		$query="select * from sellhouses";
		$query_exec=mysqli_query($conn,$query);
		
		echo "<br>";
		while ($row=mysqli_fetch_array($query_exec))
		{		
  echo "
        <div class='col-md-4'>
          <div class='card card-blog'>
            <div class='card-img'>
              <a href='#'><center><img src='images/".$row['image']."' alt='".$row['image']." not found' class='img-fluid'></center></a>
            </div>
            <div class='card-body'>
              <h3 align='center' class='card-title'><a href='#'>".$row['location']."<br></a></h3>
              <p class='card-description'>
			  The Below is Some Detail of the House in Which This Employ is Working...<br><br>
				Starting : ".$row['date']."<br>
				Earning in this House : ".$row['earning']."
              </p>
            </div>
            <div class='card-footer bg-danger text-white'>
              <div class='post-author'>
			   This House ID : ".$row['number']."
              </div>
			 </div>
			 </div>
			 </div><br><br>";
		}
		
		/*All Houses*/
		echo "<div class='col-md-12'>
          <div class='card card-blog'>
			<h3 align='center'>All House</h3>
		  </div>
		  </div>";
		
		$query="select * from houses";
		$query_exec=mysqli_query($conn,$query);
		echo "<br>";
		while ($row=mysqli_fetch_array($query_exec))
		{		
  echo "
        <div class='col-md-4'>
          <div class='card card-blog'>
            <div class='card-img'>
              <a href='#'><center><img src='images/".$row['image']."' alt='".$row['image']." not found' class='img-fluid'></center></a>
            </div>
            <div class='card-body'>
              <h3 align='center' class='card-title'><a href='#'>".$row['location']."<br></a></h3>
              <p class='card-description'>
			  The Below is Some Detail of the House in Which This Employ is Working...<br><br>
				Starting From : ".$row['date']."<br>
				Located at : ".$row['location']."
              </p>
            </div>
            <div class='card-footer'>
              <div class='post-author'>
			   This House ID : ".$row['number']."
              </div>
			 </div>
			 </div>
			 </div><br><br>";
		}
		
		/*All Employes*/
		echo "<div class='col-md-12'>
          <div class='card card-blog'>
			<h3 align='center'>All Employes</h3>
		  </div>
		  </div>";
		  
		$query1="select * from employes";
		$query_exec1=mysqli_query($conn,$query1);
		echo "<br>";
		while ($row=mysqli_fetch_array($query_exec1))
		{
	
  echo "
        <div class='col-md-4'>
          <div class='card card-blog'>
		   <div class='card-img'>
              <a href='#'><center><img src='images/employes/".$row['image']."' alt='".$row['name']."' class='img-fluid'></center></a>
            </div>
            <div class='card-body'>
              <div class='card-category-box'>
                <div class='card-category'>
                  <h6 class='category'>".$row['name']."</h6>
                </div>
              </div>
              <h3 align='center' class='card-title'><a href='#'>".$row['occupation']."<br></a></h3>
              <p class='card-description'>
				Work in House : ".$row['housenumber']."<br>
                Contact Number : ".$row['contact']."<br>
                ID CARD Number : ".$row['idcard']."<br>
                Total Payment : ".$row['totalpayment']."<br>
                Recived Payment : ".$row['recivepayment']."<br>
                Remaining Payment : ".$row['remainingpayment']."
              </p>
            </div>";
			
			if ($row["number"]=="")
			{
			echo"
            <div class='card-footer bg-danger text-white'>
              <div class='post-author'>
			  ".$row['name']." Worked at Sell House : ".$row['housenumber']."
              </div>
			 </div>
			 </div>
			 </div>";
			}
			
			else
			{
			echo"
            <div class='card-footer'>
              <div class='post-author'>
			  ".$row['name']." ID : ".$row['number']."
              </div>
			 </div>
			 </div>
			 </div>";
			}
		}
		
		/*All Stock's*/
		echo "<div class='col-md-12'>
          <div class='card card-blog'>
			<h3 align='center'>All Stock's</h3>
		  </div>
		  </div>";
		  
		$query2="select * from stocks";
		$query_exec2=mysqli_query($conn,$query2);
		echo "<br>";
		while ($row=mysqli_fetch_array($query_exec2))
		{
	
  echo "
        <div class='col-md-4'>
          <div class='card card-blog'>
            <div class='card-img'>
              <a href='#'><center><img src='images/stocks/".$row['image']."' alt='".$row['name']."' class='img-fluid'></center></a>
            </div>
            <div class='card-body'>
              <div class='card-category-box'>
                <div class='card-category'>
                  <h6 class='category'>".$row['name']."</h6>
                </div>
              </div>
              <h3 align='center' class='card-title'><a href='#'>Stock ID : ".$row['stocknumber']."<br></a></h3>
              <p class='card-description'>
				House ID: ".$row['housenumber']."<br>
                Contact Number : ".$row['contact']."<br>
                Address : ".$row['address']."<br>
                Total Payment : ".$row['totalpayment']."<br>
                Paid Payment : ".$row['paidpayment']."<br>
                Remaining Payment : ".$row['remainingpayment']."
              </p>
            </div>";
			
            if ($row["number"]=="")
			{
			echo"
            <div class='card-footer bg-danger text-white'>
              <div class='post-author'>
			  ".$row['name']." Provide Stock For Sell House : ".$row['housenumber']."
              </div>
			 </div>
			 </div>
			 </div>";
			}
			
			else
			{
			echo"
            <div class='card-footer'>
              <div class='post-author'>
			  ".$row['name']." ID : ".$row['number']."
              </div>
			 </div>
			 </div>
			 </div>";
			}
		}
		  
		
  ?>
  <h4 align="right"><a style="color:white; padding:10px;" class="bg-info button-rouded" href="home.php">Back</a></h4>
  </div>
  </section>
  
  
  

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
