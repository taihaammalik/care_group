<?php     include "navbar/nav.php"    ?>
<?php   include "config/config.php"    ?>

<?php


$fetchRegisteredUser = "SELECT * FROM `user_registered`";

$fetchRegistrationUserPrepare = $connection->prepare($fetchRegisteredUser);
$fetchRegistrationUserPrepare->execute();

$fetchRegistertedData = $fetchRegistrationUserPrepare->fetchAll(PDO::FETCH_ASSOC);

// print_r($fetchRegistertedData);


if (isset($_POST['submit'])) 
{
	$userName = $_POST['userName'];
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];


	$isEmailNotExist = false;

if (empty($userName) || empty($userEmail) || empty($userPassword)) 
{
        echo "<script>alert('please fill all the input fields')</script>";
    } 
	else
	{
	foreach($fetchRegistertedData as $user)
		if ($userEmail === $user['user_email'])
		{
			echo "<script>alert('your email is already in use')</script>";
			return;
		}
		else
		{
			$isEmailNotExist = true;

		}
	}

if($isEmailNotExist)
{
   $hashpassword = password_hash($userPassword,PASSWORD_BCRYPT);

//    echo "<script>alert('hi mani ')</script>";

$userRegisteredInsertQuery = "INSERT INTO `user_registered`( `user_name`, `user_email`, `user_password`) VALUES (:userName, :userEmail,:userPassword)";

$registeredUserQueryPrepare = $connection->prepare($userRegisteredInsertQuery);
$registeredUserQueryPrepare->bindParam(':userEmail', $userEmail);
$registeredUserQueryPrepare->bindParam(':userName', $userName);
$registeredUserQueryPrepare->bindParam(':userPassword', $hashpassword);

$registeredUserQueryPrepare->execute();

header('location:index.php');

// print_r($registeredUserQueryPrepare);
}

{ 


  }

}

?>

<!DOCTYPE php>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<php lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Novena- Health Care &amp; Medical template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical php5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Novena php Template v1.0">

  <!-- theme meta -->
  <meta name="theme-name" content="novena" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

  <!--
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">
<!-- 
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890">
							<span>Call Now : </span>
							<span class="h4">823-4565-13456</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo.png" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="registered.php">Regitration</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="department.php" id="dropdown02" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown02">
							<li><a class="dropdown-item" href="department.php">Departments</a></li>
							<li><a class="dropdown-item" href="department-single.php">Department Single</a></li>

							<li class="dropdown dropdown-submenu dropright">
								<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

								<ul class="dropdown-menu" aria-labelledby="dropdown0301">
									<li><a class="dropdown-item" href="index.php">Submenu 01</a></li>
									<li><a class="dropdown-item" href="index.php">Submenu 02</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="doctor.php" id="dropdown03" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="doctor.php">Doctors</a></li>
							<li><a class="dropdown-item" href="doctor-single.php">Doctor Single</a></li>
							<li><a class="dropdown-item" href="appoinment.php">Appoinment</a></li>

							<li class="dropdown dropdown-submenu dropleft">
								<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

								<ul class="dropdown-menu" aria-labelledby="dropdown0501">
									<li><a class="dropdown-item" href="index.php">Submenu 01</a></li>
									<li><a class="dropdown-item" href="index.php">Submenu 02</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="blog-sidebar.php" id="dropdown05" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown05">
							<li><a class="dropdown-item" href="blog-sidebar.php">Blog with Sidebar</a></li>
							<li><a class="dropdown-item" href="blog-single.php">Blog Single</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header> -->


			<div class="col-lg-12 m-5 container">
				<div class="mt-5 mt-lg-0">
					<h2 class="text-center mb-2 title-color">User Registration Form</h2>

					     <form action="registered.php" class="appoinment-form " method="post" >
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                                <input name="userName" type="text" class="form-control" placeholder="Enter Your Full Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="form-group">
                                <input name="userEmail" type="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="userPassword" type="password" class="form-control" placeholder="Enter Your Password">
                            </div>
                        </div>
                        </div>
                    </div>


					<input class="btn btn-main btn-round-full" type="submit" name="submit"></input>
                </form>
            </div>
			</div>
		</div>
	</div>
<!-- </section> -->


<!-- <section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>We served over 5000+ Patients</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>

					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>

					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section> -->



<!-- <section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section> -->



<!-- footer Start -->
<!-- <footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#!">Surgery </a></li>
						<li><a href="#!">Wome's Health</a></li>
						<li><a href="#!">Radiology</a></li>
						<li><a href="#!">Cardioc</a></li>
						<li><a href="#!">Medicine</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#!">Terms & Conditions</a></li>
						<li><a href="#!">Privacy Policy</a></li>
						<li><a href="#!">Company Support </a></li>
						<li><a href="#!">FAQuestions</a></li>
						<li><a href="#!">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:support@email.com">Support@email.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address" required>
							<button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop scroll-top-to" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer> -->



    <!--
    Essential Scripts
    =====================================-->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>


	<?php     include "footer/footer.php"    ?>



  </body>
  </php>



