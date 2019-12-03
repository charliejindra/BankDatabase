<!DOCTYPE html>
<html> 
<body >
<div style="background-color: lightblue;" align="center">
<br><br><br><br>



<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            


    $i_CN = $_POST['i_CN'];
    $i_CT = $_POST['i_CT'];
    $i_AN = $_POST['i_AN'];

    if($i_CN == ""){
        echo "You must provide a Card Number to update";
    }
    else{
			
	echo " <br> Card table before update <br>";
    
    show_card($conn);
    

    $sql_CT = "UPDATE `card` SET `card_type`= '$i_CT' WHERE card_number='$i_CN'";
    $sql_AN = "UPDATE `card` SET `account_number`= '$i_AN' WHERE card_number='$i_CN'";
    
    
    //mysqli_select_db($conn,'university');


    $retval = false;
    

    if ($i_CT != ""){ 
        $retval = mysqli_query($conn, $sql_CT); // procedural execution of query
        if(! $retval ) {
            die('Could not enter data: ' . mysqli_error($conn));
        }
    }



    if ($i_AN != ""){ 
        $retval = mysqli_query($conn, $sql_AN); // procedural execution of query
        if(! $retval ) {
            die('Could not enter data: ' . mysqli_error($conn));
        }
    }


    echo "<br><br><br><br>";
    echo "Entered data successfully\n";
			
	echo " <br> Card table after update <br>";
	show_card($conn);
			
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
