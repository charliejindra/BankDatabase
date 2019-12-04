<!DOCTYPE html>
<html>

   <head>
      <title>Pig Banking - Delete Customer</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            
        
    $customer_ID = $_POST['customer_ID'];
			
	echo " <br> customer table before delete <br>";
	show_customer($conn);
   
    $sql = "DELETE FROM customer WHERE customer_ID = $customer_ID";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	echo " <br> customer table after delete <br>";
	show_customer($conn);
			
    mysqli_close($conn);    

?>
   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>