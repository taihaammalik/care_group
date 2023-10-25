<?php include "navbar/nav.php" ?>
<?php include "config/config.php" ?>



<?php   


if(isset($_POST['appoinment']))
{

$patientName = $_POST['patientName'];
$department = $_POST['department'];
$doctorName = $_POST['doctorName'];
$date = $_POST['date'];
$time = $_POST['time'];
$phoneNumber = $_POST['phoneNumber'];
$description = $_POST['description'];

if(empty($patientName) || empty($department) || empty($doctorName) || empty($date) || empty($time) || empty($phoneNumber) || empty($description))
{
echo "<script>alert('please fill All the Inputs!')</script>";
}
else
{
	$appoinmentIsertQuery = "INSERT INTO `appoinment`(`patient_name`, `department`, `doctor_name`, `date`, `time`, `phone_number`, `description`) VALUES (:patientName,:department,:doctorName,:date,:time,:phoneNumber,:description)";


$insertQueryPrepare = $connection->prepare($appoinmentIsertQuery);
$insertQueryPrepare->bindParam(':patientName',$patientName);
$insertQueryPrepare->bindParam(':department',$department);
$insertQueryPrepare->bindParam(':doctorName',$doctorName);
$insertQueryPrepare->bindParam(':date',$date);
$insertQueryPrepare->bindParam(':time',$time);
$insertQueryPrepare->bindParam(':phoneNumber',$phoneNumber);
$insertQueryPrepare->bindParam(':description',$description);


$insertQueryPrepare->execute();





}
}
?>



<!DOCTYPE html>
<html lang="en">
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

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>

                    <!-- appointmwnt formsection start -->

               <form  class="appoinment-form" method="post" action="appoinment.php">
                    <div class="row">

					<div class="col-lg-6">
                            <div class="form-group">
                                <input name="patientName" id="name" type="text" class="form-control" placeholder="patientName">
                            </div>

                        </div>


                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="department">

                                  <option>Choose Department</option>
                        
                                  <option>Orthopedics</option>
                                  <option>Pediatrics</option>
                                  <option>Obstetrics and Gynecology</option>
                                  <option>Surgery</option>
                                  <option>Cardiology</option>
                                  <option>Dermatology</option>
                                  <option>Neurology</option>
                                  <option>Radiology</option>
                                  <option>Pathology</option>
                                  <option>Urology</option>
                                  <option>Nephrology</option>
                                  <option>Anesthesiology</option>
            
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2" name="doctorName">
                                  <option>Select Doctors</option>
                                  <option>Dr. Ali Khan</option>
                                  <option>Dr. Ayesha Ahmed</option>
                                  <option>Dr. Muhammad Khan</option>
                                  <option>Dr. Saima Malik</option>
                                  <option>Dr. Imran Raza</option>
                                  <option>Dr. Farah Siddiqui</option>
                                  <option>Dr. Hassan Malik</option>
                                  <option>Dr. Samina Shah</option>
                                  <option>Dr. Usman Qureshi</option>
                                  <option>Dr. Zara Rehman</option>
                                  <option>Dr. Ahmed Butt</option>
                                  <option>Dr. Sadia Akhtar</option>
                                  
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="time" class="form-control" placeholder="time">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phoneNumber"  id="phone" type="number" class="form-control" placeholder="PhoneNumber">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="description" type="message" id="message" class="form-control" rows="6" placeholder="Descrip Your Ilness......!"></textarea>
                    </div>

					<input class="btn btn-main btn-round-full" type="submit" name="appoinment"></input>
                </form>

                    <!-- appointmwnt formsection end -->

            </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
</footer>
    -->

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
<script>


// let username = document.getElementById('username')
//   let email = document.getElementById('email')
//   let phone = document.getElementById('phone')
//   let password = document.getElementById('password')
//   let street_address = document.getElementById('street_address')
//   let state = document.getElementById('state')
//   let city = document.getElementById('city')
  
  
  
  
//   const regExp = {
//       username: /^[a-zA-z]+\s/,
//       street_address: /^[a-zA-z]+\s/,
//       state: /^[a-zA-z]+$/,
//       city: /^[a-zA-z]+$/,
//       email: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})$/,
//       phone: /^[0-9]+$/,
//       password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!#@%\?\+-])[\w+!#@%\?\+-]{8,16}$/
//   }
  
  
  
//   username.addEventListener('keyup',(e)=>{
//       if(regExp.username.test(username.value)){
//         document.getElementById('error').innerHTML =''
//           console.log(true)
//       }else{
//           console.log(false)
//    document.getElementById('error').innerHTML ='Enter Only Alphabets'
//       }
  
//   })

//   street_address.addEventListener('keyup',(e)=>{
//       if(regExp.street_address.test(street_address.value)){
//         document.getElementById('error5').innerHTML =''
//           console.log(true)
//       }else{
//           console.log(false)
//    document.getElementById('error5').innerHTML ='Enter Only Alphabets'
//       }
  
//   })

//   state.addEventListener('keyup',(e)=>{
//       if(regExp.state.test(state.value)){
//         document.getElementById('error6').innerHTML =''
//           console.log(true)
//       }else{
//           console.log(false)
//    document.getElementById('error6').innerHTML ='Enter Only Alphabets'
//       }
  
//   })

//   city.addEventListener('keyup',(e)=>{
//       if(regExp.city.test(city.value)){
//         document.getElementById('error7').innerHTML =''
//           console.log(true)
//       }else{
//           console.log(false)
//    document.getElementById('error7').innerHTML ='Enter Only Alphabets'
//       }
  
//   })

//   phone.addEventListener('keyup',(e)=>{
//       if(regExp.phone.test(phone.value)){
//         document.getElementById('error4').innerHTML =''
//           console.log(true)
//       }else{
//           console.log(false)
//    document.getElementById('error4').innerHTML ='Enter Only Numbers'
//       }
  
//   })
  
 
//   email.addEventListener('keyup',(e)=>{
//       if(regExp.email.test(email.value)){
//         document.getElementById('error2').innerHTML =''
//           console.log(true)
//       }else{
//         document.getElementById('error2').innerHTML ='Enter Valid Email format'
//           console.log(false)
         
//       }
  
//   })
  
//   password.addEventListener('keyup',(e)=>{
//       if(regExp.password.test(password.value)){
  
//           document.getElementById('error3').innerHTML =''
//       }else{
//           document.getElementById('error3').innerHTML ='Enter 8 - 12 characters'
//           console.log(false)
  
//       }
  
//   })



</script>


<?php     include "footer/footer.php"    ?>

  </body>
</html>