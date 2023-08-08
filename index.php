<?php 
include("connection.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sihina Roo Salon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>
	<nav>
			<img class="logoo" src="image\logo.png">
			<ul>
				<li><a href="index.php">Home</a>  </li>
				<li><a href="#about">About Us</a> </li>
				<li><a href="#contact">Contact Us</a> </li>	
			</ul>		
	</nav>

	<img class="add" src="image\add.png">
	<a href="#appointment" class="btn">Add your Appointment</a>
	<img class="search" src="image\search.png">
	<a href="#LearnMore" class="btn">Search your Service</a>
</header>

<div class="wrapper">
	<div class="sidebar">
  		<a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
  		<a href="#slider" class="w3-bar-item w3-button"><i class="fa fa-image"></i></a>
  		<a href="#services" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
  		<a href="#about" class="w3-bar-item w3-button"><i class="fa fa-question-circle"></i></a> 
  		<a href="#appointment" class="w3-bar-item w3-button"><i class="fa fa-plus"></i></a>
  		<a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-phone"></i></a> 	
	</div>
</div>

	<div class="content">
		<p>You should always keep Your Beauty...</p>
		<br>
		<h1>This is the platform to <br> be a beauty...</h1>
		<br>
		<p> Beauty is the uniquenes of your life...</p>
		<br>
		<br>
		<br>
		<a href="#services" class="btn">Learn More</a> 
	</div>

	<div class="h1" id="slider">
			<h1>Gallery</h1>
	</div>

	<div class="slider">
		<div class="images">
			<img src="image/png.png">
			<img src="image/png1.png">
			<img src="image/png2.png">	
			<img src="image/png3.png">
			<img src="image/png4.png">
			<img src="image/png5.png">	
			<img src="image/png6.png">
			<img src="image/png7.png">
			<img src="image/png8.png">	
			<img src="image/png9.png">
			<img src="image/png10.png">
			<img src="image/png11.png">		
			<img src="image/png12.png">
			<img src="image/png13.png">
		</div>
	</div>

	<div class="h1" id="services">
			<h1>Services</h1>
	</div>

	<div class="LearnMore" id="LearnMore">
			<div class="card" >
		 		<figure> <img src="image/cut.jpg"> </figure>
		 		<div class="content"> 
		 			<h3>Hair Cut</h3>
		 			
		 		</div>
      		</div>

      		<div class="card" >
		 		<figure> <img src="image/color.png"> </figure>
		 		<div class="content"> 
		 			<h3>Hair Coloring</h3>
		 			
		 		</div>
      		</div>

      		<div class="card" >
		 		<figure> <img src="image/treatment.jpg"> </figure>
		 		<div class="content" > 
		 			<h3>Hair Treatments</h3>
		 			
		 		</div>
      		</div>

      		<div class="card" >
		 		<figure> <img src="image/hairsraight.jpg"> </figure>
		 		<div class="content" > 
		 			<h3>Hair Straight</h3>
		 			
		 		</div>
      		</div>	

      		<div class="card" >
		 		<figure> <img src="image/hairstyle.jpg"> </figure>
		 		<div class="content" > 
		 			<h3>Hair Style</h3>
		 			
		 		</div>
      		</div>		
      		
	</div>

	<div class="LearnMore">
		<div class="card" >
		 		<figure> <img src="image/facial.jpeg"> </figure>
		 		<div class="content" > 
		 			<h3>Facials </h3>
		 			
		 		</div>
      		</div>	

      		<div class="card" >
		 		<figure> <img src="image/makeup.jpg"> </figure>
		 		<div class="content" > 
		 			<h3>Makeup</h3>
		 			
		 		</div>
      		</div>	

      		<div class="card" >
		 		<figure> <img src="image/manicure.png"> </figure>
		 		<div class="content" > 
		 			<h3>Manicure</h3>
		 			
		 		</div>
      		</div>	

      		<div class="card" >
		 		<figure> <img src="image/pedicure.jpg"> </figure>
		 		<div class="content" > 
		 			<h3>Pedicure</h3>
		 			
		 		</div>
      		</div>	

      		<div class="card" >
		 		<figure> <img src="image/nailart.jpeg"> </figure>
		 		<div class="content" > 
		 			<h3>Nail Art</h3>
		 			
		 		</div>
      		</div>			
	</div>

	<div class="h1" id="about">
			<h1>About Us</h1>
	</div>

	<div class="about1">
			<h1>We are the Sihina Roo Salon Team.</h1> <br>

			<figure> <img src="image/bgg.jpeg"> </figure>
	</div>

	<div class="about2" id="about2">

			<p>Sihina Roo Salon story begin from my home town Kottawa. Only Mrs.Rasangi work in this salon. she is the owner of the Sihina Roo Salon. Now We have more than 23 Experts in Hair & Beauty. We are professionals in hair care and beauty... We extended our services in order to provide a better service to our customers at Nugegoda since 2000..</p>
		

		<div class="spc">
			spc
		</div>

		<div>
			<figure> <img src="image/aboutbg.jpg"> </figure>
		</div>		
	</div>

	<br><br>

	<div class="h1" id="appointment"><br>
		<h1>Make an Appointment</h1>
	</div><br><br>

	<div class="appointment">
		<form method="POST" action="index.php" onsubmit="return false">
		<label for="name">Name:</label><br><br>
  		<input type="text" id="name" name="name" oninput="return validName()">
   		<div id="errorn" class="error"></div><br><br><br>

   		<label for="mobile">Mobile:</label><br><br>
  		<input type="text" id="mobile" name="mobile" oninput="return validMobile()">
   		<div id="errorm" class="error"></div><br><br><br>

   		<label for="service">Service:</label><br><br>
  		<input type="text" id="service" name="service" oninput="return validService()">
   		<div id="errors" class="error"></div><br><br>
	
		<button onclick="validate()" class="btn" name="sumbitbtn">Submit</button> 
		<div id="errorsubmit" class="error"></div>

		<div class="popup" id="popup">
				<i class="fa fa-check-circle fa-5x"></i>
				<h2>Thank You</h2>
				<p>Your Appointment Details has been Succesfully Submitted!.</p>
				<button onclick="popout()" class="btn" id="ok">OK</button> 
			</div>	

			<div class="poperror" id="poperror">
				<i class="fa fa-times-circle fa-5x"></i>
				<h2>Oops!</h2>
				<p>Please Fill the Missing Blanks.</p>
				<button onclick="popout()" class="btn" id="ok">OK</button>
			</div>
  		</form>
	</div>
	
	<br><br><br>
	<div class="h1" id="contact">
		<h1>Contact Us</h1>
	</div>

	<div class="contact">
		<div class="left">
			<figure><img src="image/pngegg1.png"></figure>
		</div>

		<div class="right">
			<figure><img src="image/gmail.png"></figure> 
			<label>sihinaroosalon@gmail.com</label><br><br>

			<figure><img src="image/instagram.png"></figure>
			<label>Sihina_Roo_Salon</label><br><br>

			<figure><img src="image/tiktok.png"></figure>
			<label>SihinaRooSalon</label><br><br>

			<figure><img src="image/fb.png"></figure>
			<label>Sihina Roo Salon</label><br><br>
		</div>		
	</div>
</div>	

	<footer>
		<div>
			<br>
			<h2>Sihina Roo Salon</h2>
			<br>
			<ul>
				<li><img src="image/gmail.png">
				<img src="image/instagram.png">
				<img src="image/tiktok.png">
				<img src="image/fb.png"></li>
			</ul>
			<br>
			<p>copyright@2023</p>
			<br>
		</div>
	</footer>
</body>
</html>

<?php  
			if(isset($_POST["sumbitbtn"]))
			{

				$appointment_ID = $_POST["appointment_ID"];
				$name = $_POST["name"];
				$mobile = $_POST["mobile"];
				$service = $_POST["service"];



			$query = "INSERT INTO APPONTMENTTABLE VALUES ('$appointment_ID','$name','$mobile','$service')";

			$data = mysqli_query($conn, $query);

				if($data)
				{
				echo "Data Inserted into Database";
				}
				else
				{
				echo "Failed";
				}

			}
		?>




