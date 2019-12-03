<!DOCTYPE html>
<html> 
<body >
<div style="background-color: lightblue;" align="center">
<br><br><br><br>



<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            


    $i_AN = $_POST['i_AN'];
    $i_ID = $_POST['i_ID'];
    $i_AT = $_POST['i_AT'];
    $i_bal = $_POST['i_bal'];

    if($i_AN == ""){
        echo "You must provide an account number to update";
    }
    else{
			
	echo " <br> Account table before update <br>";
    
    show_account($conn);
    

    $sql_ID = "UPDATE `account` SET `customer_ID`= '$i_ID' WHERE account_number='$i_AN'";
    $sql_AT = "UPDATE `account` SET `account_type`= '$i_AT' WHERE account_number='$i_AN'";
    $sql_bal = "UPDATE `account` SET `balance`= '$i_bal' WHERE account_number='$i_AN'";
    
    
    //mysqli_select_db($conn,'university');


    $retval = false;

    if ($i_ID != ""){ 
        $retval = mysqli_query($conn, $sql_ID); // procedural execution of query
        if(! $retval ) {
            die('Could not enter data: ' . mysqli_error($conn));
        }
    }


    if ($i_AT != ""){ 
        $retval = mysqli_query($conn, $sql_AT); // procedural execution of query
        if(! $retval ) {
            die('Could not enter data: ' . mysqli_error($conn));
        }
    }


    if ($i_bal != ""){ 
        $retval = mysqli_query($conn, $sql_bal); // procedural execution of query
        if(! $retval ) {
            die('Could not enter data: ' . mysqli_error($conn));
        }
    }


    echo "<br><br><br><br>";
    echo "Entered data successfully\n";
			
	echo " <br> Account table after update <br>";
	show_account($conn);
			
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
