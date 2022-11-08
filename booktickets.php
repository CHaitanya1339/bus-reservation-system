

<?php 
include 'config.php';
error_reporting(0);

// $sql_dcity = "select distinct  from Buses"
$result="";
if(isset($_POST['submit'])){
	  $acity = $_POST['acity'];
	$dcity = $_POST['dcity'];
	$stype = $_POST['stype'];
    $sql = "SELECT * FROM Buses where arrivalcity='".$acity."' and destinationcity='".$dcity."' and type='".$stype."'";
	 $result = mysqli_query($conn, $sql);
	// print_r($result);

	
	// 
	
	
}
// select query 

?>
<!DOCType html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Book your Tickets</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


</head>
<body>
	<script>
		function myFunction() {
		  alert("Successfully Logged out!");
		}
	</script>		
<header class="text-gray-600 body-font">
	<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
	  <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
		<span class="ml-3 text-xl">SkyTravels</span>
	  </a>
	  <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
		<a class="mr-5 hover:text-gray-900" href="index.html">Home</a>
		<a class="mr-5 hover:text-gray-900" href="cancelticket.php">Cancel Ticket</a>
		<a class="mr-5 hover:text-gray-900" href="login.php">Logout</a>
	  </nav>
	</div>
  </header>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1><font color ="black">Make your reservation </font></h1>
							  <table class="table table-bordered">
				<thead>
					<tr>
						<th>Bus Name</th>
						<th>From </th>
						<th>To</th>
						<th>Fare</th>
                        <th>Book</th>
                      
	</tr>
	<tbody>
		<?php 

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		 echo "<tr>";
		 echo "<td>". $row['busname']. "</td>";
		 echo "<td>". $row['arrivalcity']. "</td>";
		 echo "<td>". $row['destinationcity']. "</td>";
		 echo "<td>". $row['fare']. "</td>";
        echo "<td><a href='book-ticket.php?acity=$row[arrivalcity]&dcity=$row[destinationcity]&bname=$row[busname]&stype=$row[type]&fare=$row[fare]'><button type='button'>Book Now</button></a></td>";   
		 echo "</tr>";

		 		 
}

?>

	</tbody>
	</table>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="" method="post"> 
								<div class="form-group">
									<span class="form-label">Arrival City</span>
									<select class="form-control" name="acity">
										<option value="Visakhapatnam">Visakhapatnam</option>
										<option value="Hyderabad">Hyderabad</option>
										<option value="Mumbai">Mumbai</option>
										<option value="Delhi">Delhi</option>
										<option value="Benguluru">Benguluru</option>
									</select>
									<span class="select-arrow"></span>
								</div>
								<div class="form-group">
									<span class="form-label">Destination City</span>
									<select class="form-control" name="dcity">
									<option value="Visakhapatnam">Visakhapatnam</option>
										<option value="Hyderabad">Hyderabad</option>
										<option value="Mumbai">Mumbai</option>
										<option value="Delhi">Delhi</option>
										<option value="Benguluru">Benguluru</option>
									</select>
									<span class="select-arrow"></span>
								</div>
								<div class="form-group">
									<span class="form-label" >Seat Type</span>
									<select name="stype" class="form-control">
										<option value="Seater">Seater</option>
										<option value="AC">AC</option>
										<option value="Non-AC">Non-AC</option>
										<option value="Semi-Sleeper">Semi-Sleeper</option>
									</select>
									<span class="select-arrow"></span>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date of Journey</span>
											<input type="date" class="form-control"  required>
										</div>
									</div>

								</div>

								<div class="form-btn">
									<button class="submit-btn" type="submit" name="submit" >Check Buses</button> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


</html>
    
        