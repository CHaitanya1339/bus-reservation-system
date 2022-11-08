
<style>
    h2 {
    text-align: center;
}
</style>










<?php
        session_start();
        $_SESSION['fare'] = $_REQUEST['fare'];
        $conn = mysqli_connect("localhost", "id17903337_root", "_K!JPV>v5Jeye|v4", "id17903337_log");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $amount= $_REQUEST['am'];
        $cardname=$_REQUEST['cardname'];
        $cardnum=  $_REQUEST['cardnumber'];
        $month = $_REQUEST['expmonth'];
	    $year = $_REQUEST['expyear'];
    	$cvv = $_REQUEST['cvv'];
          

        $sql = "INSERT INTO payment VALUES ('$amount','$cardname','$cardnum', 
            '$month','$year','$cvv')";
          
        if(mysqli_query($conn, $sql)){
            	echo "<br><h2> Note-Check Your Mail for Booking ID. ";
            	echo "<br><h2> Thanking You!" ;
            	echo "<br><h2>Happy Journey!<h2>";

	}
	else
	{
	echo 'Payment failed!';
	}
          
        // Close connection
        mysqli_close($conn);
        ?>