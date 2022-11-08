<?php
session_start();
$_SESSION['bname']=$_REQUEST['bname'];
$_SESSION['acity']= $_REQUEST['acity'];
$_SESSION['dcity']= $_REQUEST['dcity'];
$_SESSION['stype']= $_REQUEST['stype'];
$_SESSION['fare'] = $_REQUEST['fare'];
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
         <meta charset="UTF-8">
    <!--<title> Website with Customize Color Theme | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="Home.css" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Passenger Details</title>
    <link rel="stylesheet" href="pas/nicepage.css" media="screen">
<link rel="stylesheet" href="pas/Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="pas/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="pas/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
       <nav>
    <div class="navbar">
      <div class="logo"><a href="#">SkyTravels.</a></div>
    </div>
  </nav>
     <form action="pasdetails.php" method="POST" style="padding: 10px;">
    <section class="u-clearfix u-section-1" id="sec-f7e6">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h3 class="u-text u-text-default u-text-1"><b>Passenger Details</b></h3>
                <div class="u-form u-form-1">

                    <div class="u-form-group u-form-name">
                      <label for="name-419f" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your Name" id="name-419f" name="pasname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-email u-form-group">
                      <label for="email-419f" class="u-form-control-hidden u-label"></label>
                      <input type="email" placeholder="Enter a valid email address" id="email-419f" name="pasemail" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-phone u-form-group-3">
                      <label for="phone-fbb6" class="u-form-control-hidden u-label"></label>
                      <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-fbb6" name="pasphone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-group-4">
                      <label for="text-1c75" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter Gender" id="text-1c75" name="pasgender" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-form-group u-form-group-5">
                      <label for="text-1166" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter Age" id="text-1166" name="pasage" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="center">
                     <button type="submit" name="submit">Submit</button>
                     </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h3 class="u-text u-text-default u-text-2"><b>Ticket Details</b></h3>
                <div class="u-form u-form-2">
                    <div class="u-form-group u-form-name">
                      <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus Name:</b> <?php echo $_SESSION['bname'];?> </label>
                      <br>
                      <br>    
                      <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrival City:</b> <?php echo $_SESSION['acity'];?> </label>
                      <br>
                      <br>
                      <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Destination City:</b> <?php echo $_SESSION['dcity'];?> </label>
                      <br>
                      <br>
                      <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fare:</b> <?php echo $_SESSION['fare'];?> </label>
                      <br>
                      <br>
                      <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seat Type:</b> <?php echo $_SESSION['stype'];?> </label>
                      <br>
                      <br>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
                      </form>
  </body>
</html>