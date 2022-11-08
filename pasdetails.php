<?php
 
session_start(); 
$_SESSION['email'] = $_POST['pasemail'];
$fare = $_SESSION['fare'];
$bname = $_SESSION['bname'] ;
$acity = $_SESSION['acity'] ;
$dcity = $_SESSION['dcity'] ;
$stype = $_SESSION['stype'] ;

 
if (isset($_POST['submit'])) {
 
        $conn = mysqli_connect("localhost", "id17903337_root", "_K!JPV>v5Jeye|v4", "id17903337_log");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $pasname=$_POST['pasname'];
        $pasemail = $_POST['pasemail'];
        $pasphone = $_POST['pasphone'];
        $pasgender = $_POST['pasgender'];
        $pasage=  $_POST['pasage'];



   
          
        
          $sql = "INSERT INTO passengerdetails VALUES ('$pasname','$pasemail', 
            '$pasphone','$pasgender','$pasage','".$_SESSION['bname']."','".$_SESSION['acity']."','".$_SESSION['dcity']."','".$_SESSION['stype']."','".$_SESSION['fare']."')";
            
         
          
        if(mysqli_query($conn, $sql)){
            //	echo 'Booking Success!Redirecting to payment page.'; 
            
            echo "<script>window.location.href='pay.php'</script>";
	}
	else
	{
	echo 'Booking failed!';
	}
          
        // Close connection
        mysqli_close($conn);
}
        ?>
    