<!DOCTYPE html>
<html> 
<body >
<div style="background-color: lightblue;" align="center">
<br><br><br><br>



<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            


    $i_ID = $_POST['i_ID'];
    $i_AN = $_POST['i_AN'];
    $i_AT = $_POST['i_AT'];
    $i_bal = $_POST['i_bal'];
    $i_PIN = $_POST['i_PIN'];

    if($i_ID = ""){
        echo "You must provide an ID to update";
    }
    else{
			
	echo " <br> Account table before update <br>";
    
    show_instructor($conn);
    

    $sql_AN = "UPDATE `account` SET `account_number`= '$i_AN' WHERE ID='$i_ID'";
    $sql_AT = "UPDATE `account` SET `account_type`= '$i_AT' WHERE ID='$i_ID'";
    $sql_bal = "UPDATE `account` SET `balance`= '$i_bal' WHERE ID='$i_ID'";
    $sql_PIN = "UPDATE `account` SET `PIN`= '$i_PIN' WHERE ID='$i_ID'";
    
    
    //mysqli_select_db($conn,'university');


    if ($i_AN != ""){ 
        $retval = mysqli_query($conn, $sql_AN); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_AT != ""){ 
        $retval = mysqli_query($conn, $sql_AT); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_bal != ""){ 
        $retval = mysqli_query($conn, $sql_bal); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_PIN != ""){ 
        $retval = mysqli_query($conn, $sql_PIN); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    echo "<br><br><br><br>";
    echo "Entered data successfully\n";
			
	echo " <br> Account table after update <br>";
	show_instructor($conn);
			
    mysqli_close($conn);    
    }
?>

<br><br><br><br>
<hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
<br>
</div>
</body> </html>
