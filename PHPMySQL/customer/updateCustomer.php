<!DOCTYPE html>
<html> 
<title>Pig Banking - Update Customer</title>
<body >
<div style="background-color: lightblue;" align="center">
<br><br><br><br>



<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            


    $i_ID = $_POST['i_ID'];
    $i_UN = $_POST['i_UN'];
    $i_PW = $_POST['i_PW'];
    $i_AH = $_POST['i_AH'];
    $i_BD = $_POST['i_BD'];
    $i_SSN = $_POST['i_SSN'];
    $i_PN = $_POST['i_PN'];
    $i_EM = $_POST['i_EM'];
    $i_AO = $_POST['i_AO'];
    $i_AT = $_POST['i_AT'];

    if($i_ID == ""){
        echo "You must provide an ID to update";
    }
    else{
			
	echo " <br> Customer table before update <br>";
    
    show_customer($conn);
    

    $sql_UN = "UPDATE `customer` SET `username`= '$i_UN' WHERE Customer_ID='$i_ID'";
    $sql_PW = "UPDATE `customer` SET `password`= '$i_PW' WHERE Customer_ID='$i_ID'";
    $sql_AH = "UPDATE `customer` SET `account_holder`= '$i_AH' WHERE Customer_ID='$i_ID'";
    $sql_BD = "UPDATE `customer` SET `Birthday`= '$i_BD' WHERE Customer_ID='$i_ID'";
    $sql_SSN = "UPDATE `customer` SET `SSN`= '$i_SSN' WHERE Customer_ID='$i_ID'";
    $sql_PN = "UPDATE `customer` SET `phone_number`= '$i_PN' WHERE Customer_ID='$i_ID'";
    $sql_EM = "UPDATE `customer` SET `email`= '$i_EM' WHERE Customer_ID='$i_ID'";
    $sql_AO = "UPDATE `customer` SET `address1`= '$i_AO' WHERE Customer_ID='$i_ID'";
    $sql_AT = "UPDATE `customer` SET `address2`= '$i_AT' WHERE Customer_ID='$i_ID'";
    
    
    //mysqli_select_db($conn,'university');


    $retval = false;

    if ($i_UN != ""){  //if they entered something in the box
        $retval = mysqli_query($conn, $sql_UN); //execution of query
    }
    if($i_UN != "" && !$retval ) { //if a query was supposed to run but failed
        die('Could not enter data: ' . mysqli_error($conn)); //give error
    }


    if ($i_PW != ""){ 
        $retval = mysqli_query($conn, $sql_PW); // procedural execution of query
    }
    if($i_PW != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_AH != ""){ 
        $retval = mysqli_query($conn, $sql_AH); // procedural execution of query
    }
    if($i_AH != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    if ($i_BD != ""){ 
        $retval = mysqli_query($conn, $sql_BD); // procedural execution of query
    }
    if($i_BD != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    if ($i_SSN != ""){ 
        $retval = mysqli_query($conn, $sql_SSN); // procedural execution of query
    }
    if($i_SSN != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    if ($i_PN != ""){ 
        $retval = mysqli_query($conn, $sql_PN); // procedural execution of query
    }
    if($i_PN != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    if ($i_EM != ""){ 
        $retval = mysqli_query($conn, $sql_EM); // procedural execution of query
    }
    if($i_EM != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    if ($i_AO != ""){ 
        $retval = mysqli_query($conn, $sql_AO); // procedural execution of query
    }
    if($i_AO != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    if ($i_AT != ""){ 
        $retval = mysqli_query($conn, $sql_AT); // procedural execution of query
    }
    if($i_AT != "" && !$retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    echo "<br><br><br><br>";
    echo "Entered data successfully\n";
			
	echo " <br> Account table after update <br>";
	show_customer($conn);
			
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
