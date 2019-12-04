<!DOCTYPE html>
<html>

   <head>
      <title>Pig Banking - Delete Card</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            
        
    $card_number = $_POST['card_number'];
			
	echo " <br> card table before delete <br>";
	show_card($conn);
   
    $sql = "DELETE FROM card WHERE card_number = $card_number";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	echo " <br> card table after delete <br>";
	show_card($conn);
			
    mysqli_close($conn);    

?>
   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>