<?php
    $conn = mysqli_connect("localhost", "id17903337_root", "_K!JPV>v5Jeye|v4", "id17903337_log");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        if (isset($_POST['submit'])) {
        $type=$_POST['type'];
        $busname=$_POST['busname'];
        $arrivalcity=  $_POST['arrivalcity'];
        $destinationcity = $_POST['destinationcity'];
     	$arrivaltime = $_POST['arrivaltime'];
        $destinationtime = $_POST['destnationtime'];
        $fare = $_POST['fare'];
        $seats=$_POST['seats'];


         $sql = "INSERT INTO Buses(type,busname,arrivalcity,destinationcity,arrivaltime,destinationtime,fare,seats) VALUES ('$type','$busname','$arrivalcity', 
            '$destinationcity','$arrivaltime','$destinationtime','$fare','$seats')";
          
        if(mysqli_query($conn, $sql)){
				echo "<script>alert('Successfully Bus is Added.')</script>";
	}
	else
	{
				echo "<script>alert('Failed to add.')</script>";
	}
        }
          
        // Close connection
        mysqli_close($conn);
        ?>











<html>
<head>
  
  <title>add bus</title>
  <link rel="stylesheet" href="addcss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
      <link rel="stylesheet" href="adminnicepage/nicepage.css" media="screen">
<link rel="stylesheet" href="adminnicepage/View-Tickets.css" media="screen">
    <script class="u-script" type="text/javascript" src="adminnicepage/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="adminnicepage/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
        <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="View Tickets">
    <meta property="og:type" content="website">
  
</head>
  <body data-home-page="View-Tickets.html" data-home-page-title="View Tickets" class="u-body"><header class="u-clearfix u-header u-header" id="sec-fe07"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="adminpage.html" style="padding: 10px 20px;">Home</a>            
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="users.php" style="padding: 10px 20px;">Users</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="bookings.php" style="padding: 10px 20px;">Bookings</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="buslist.php" style="padding: 10px 20px;">Buses</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="seats.php" style="padding: 10px 20px;">Availability</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="alogin.php" style="padding: 10px 20px;">Logout</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="users.html" style="padding: 10px 20px;">Users</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="bookings.html" style="padding: 10px 20px;">Bookings</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="buslist.html" style="padding: 10px 20px;">Buses</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="seats.php" style="padding: 10px 20px;">Availability</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="alogin.php" style="padding: 10px 20px;">Logout</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h3 class="u-headline u-text u-text-1">
          <a href="/">Welcome Admin!</a>
        </h3>
      </div></header>
 <div class="form">
  <form action="" method="post">
   <div class="booking-form">
    <label>Seat Type</label>
    <input type="text" class="form-control" placeholder="Seat Type" name="type">
     <label>BusName</label>
     <input type="text" class="form-control" placeholder="Busname" name="busname">
     <label>Arrival</label>
     <input type="text" class="form-control" placeholder="City" name="arrivalcity">
     <label>Destination</label>
     <input type="text" class="form-control" placeholder="City" name="destinationcity">
       <label>Timings</label>
       <input type="text" class="form-control" placeholder="Arrival-Time" name="arrivaltime">
     
      
       <input type="text" class="form-control" placeholder="Departure-Time" name="destnationtime">
       
       <label>Fare</label>
       <input type="text" class="form-control" placeholder="Ticket-Cost" name="fare">
       
       <label>Number-Of-Seats</label>
       <input type="text" class="form-control" placeholder="" name="seats">
       <br>
                <div class="input-box">
                    <button type="submit" name="submit">Add Bus</button>
                </div>
   </div>
  </form>
 </div>
</body>
</html>