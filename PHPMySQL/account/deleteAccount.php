<!DOCTYPE html>
<html>

   <head>
      <title>Pig Banking - Delete Account</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            
        
    $account_number = $_POST['account_number'];
			
	echo " <br> Account table before deletion <br>";
    show_account($conn);
   
    $sql = "UPDATE `account` SET `customer_ID`= -1 WHERE account_number='$account_number'";

            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	echo " <br> Account table after deletion <br>";
	show_account($conn);
			
    mysqli_close($conn);    

?>
   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>