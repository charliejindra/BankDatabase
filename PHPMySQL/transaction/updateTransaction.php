<!DOCTYPE html>
<html> 
<body >
<div style="background-color: lightblue;" align="center">
<br><br><br><br>



<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            


    $i_TN = $_POST['i_TN'];
    $i_TO = $_POST['i_TO'];
    $i_FR = $_POST['i_FR'];
    $i_AM = $_POST['i_AM'];
    $i_DT = $_POST['i_DT'];
    $i_TI = $_POST['i_TI'];

    if($i_ID = ""){
        echo "You must provide a transaction number to update";
    }
    else{
			
	echo " <br> Transaction table before update <br>";
    
    show_instructor($conn);
    

    $sql_TO = "UPDATE `Transaction` SET `to_account`= '$i_TO' WHERE transaction_number='$i_TN'";
    $sql_FR = "UPDATE `Transaction` SET `from_account`= '$i_FR' WHERE transaction_number='$i_TN'";
    $sql_AM = "UPDATE `Transaction` SET `amount`= '$i_AM' WHERE transaction_number='$i_TN'";
    $sql_DT = "UPDATE `Transaction` SET `trans_date`= '$i_DT' WHERE transaction_number='$i_TN'";
    $sql_TI = "UPDATE `Transaction` SET `trans_time`= '$i_TI' WHERE transaction_number='$i_TN'";    
    
    
    //mysqli_select_db($conn,'university');


    if ($i_TO != ""){ 
        $retval = mysqli_query($conn, $sql_TO); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_FR != ""){ 
        $retval = mysqli_query($conn, $sql_FR); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_AM != ""){ 
        $retval = mysqli_query($conn, $sql_AM); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_DT != ""){ 
        $retval = mysqli_query($conn, $sql_DT); // procedural execution of query
    }
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    if ($i_TI != ""){ 
        $retval = mysqli_query($conn, $sql_TI); // procedural execution of query
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
