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
        $destinationtime = $_POST['destinationtime'];
        $fare = $_POST['fare'];
        $seats=$_POST['seats'];


        $sql = "INSERT INTO Buses VALUES ('$type','$busname','$arrivalcity', 
            '$destinationcity','$arrivaltime','$destinationtime','$fare','$seats')";
          
        if(mysqli_query($conn, $sql)){
	echo 'Successfully the bus is added!'; 
	}
	else
	{
	echo 'Failed to Add!';
	}
        }
          
        // Close connection
        mysqli_close($conn);
        ?>