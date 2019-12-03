<!DOCTYPE html>
<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            
        
	// if(! get_magic_quotes_gpc() ) { // if magic qoutes is not set, then add escapes manually and get Posted parameters in local variables
    //     $i_name = addslashes ($_POST['i_name']);
    //     $i_dept = addslashes ($_POST['i_dept']);
    // } else {
    //     $i_name = $_POST['i_name'];
    //     $i_dept = $_POST['i_dept'];
    // }

    $i_customerID = $_POST['i_customerID'];
    $i_username = $_POST['i_username'];
    $i_password = $_POST['i_password'];
    $i_fullName = $_POST['i_fullName'];
    $i_birthday = $_POST['i_birthday'];
    $i_ssn = $_POST['i_ssn'];
    $i_phoneNumber = $_POST['i_phoneNumber'];
    $i_email = $_POST['i_email'];
    $i_address1 = $_POST['i_address1'];
    $i_address2 = $_POST['i_address2'];
			
	
   
    $sql = "INSERT INTO customer "."(customer_ID, username, password, account_holder, Birthday, SSN, phone_number, email, address1, address2)"." VALUES "."('$i_customerID', '$i_username', '$i_password', '$i_fullName', '$i_birthday', '$i_ssn', '$i_phoneNumber', '$i_email', '$i_address1', '$i_address2')";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	show_customer($conn);
			
    mysqli_close($conn);    

?>

   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>