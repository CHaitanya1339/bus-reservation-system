<?php 
session_start();
if (isset($_POST['submit'])) { 
 
        $conn = mysqli_connect("localhost", "id17903337_root", "_K!JPV>v5Jeye|v4", "id17903337_log");
         $sql = "delete from passengerdetails where pasname='".$_POST['name']."' AND pasphone='".$_POST['phonenum']."'  ";
        if(mysqli_query($conn, $sql)){
      
           $msg =  "Ticket Cancelled Successfully!";
       }
       else 
       {
        echo   $msg =  "There is no such ticket!";
       }
        
        
}
?>
<!doctype html>
<html>
<head>
	  <!-- ... -->
	  <meta charset="UTF-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Cancellation Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
<header class="text-gray-600 body-font">
	<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
	  <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
		<span class="ml-3 text-xl">SkyTravels</span>
	  </a>
	  <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
		<a class="mr-5 hover:text-gray-900" href="index.html">Home</a>
		<a class="mr-5 hover:text-gray-900" href="login.php">Logout</a>
	  </nav>
  </header>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
						<?php 
							if($msg!='')
							{
								echo '<h4><font color ="black">'. $msg.'</font></h4>';
							}
						?>
							
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post" action="">
							 
								<div class="form-group">
									<span class="form-label">Customer Name</span>
									<input class="form-control" type="text" name="name" placeholder="Enter Customer name" required>
								</div>
								<div class="form-group">
									<span class="form-label">Phone Number</span>
									<input class="form-control" type="text" name="phonenum" placeholder="Enter phone number" required>
								</div>
								<div class="form-btn">
							   <button class="submit-btn" type="submit" name="submit">Cancel Ticket</button> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<footer class="text-gray-600 body-font">
	<div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
	  <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
		  <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
		</svg>
		<span class="ml-3 text-xl">SkyTravels</span>
	  </a>
	  <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 SkyTravels —
		<a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
	  </p>
	  <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
		<a class="text-gray-500">
		  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
			<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
		  </svg>
		</a>
		<a class="ml-3 text-gray-500">
		  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
			<path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
		  </svg>
		</a>
		<a class="ml-3 text-gray-500">
		  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
			<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
			<path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
		  </svg>
		</a>
		<a class="ml-3 text-gray-500">
		  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
			<path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
			<circle cx="4" cy="4" r="2" stroke="none"></circle>
		  </svg>
		</a>
	  </span>
	</div>
  </footer>

</html>
    
        