<?php

function create_transaction($conn, $to, $from, $amount) {

    //require("tableshow.php"); 
	require("dbconnect.php");            
        
	// if(! get_magic_quotes_gpc() ) { // if magic qoutes is not set, then add escapes manually and get Posted parameters in local variables
    //     $i_name = addslashes ($_POST['i_name']);
    //     $i_dept = addslashes ($_POST['i_dept']);
    // } else {
    //     $i_name = $_POST['i_name'];
    //     $i_dept = $_POST['i_dept'];
    // }

    $sql_for_row = "SELECT COUNT('transaction_number') from transaction_history";
    $result = $conn->query($sql_for_row);
    while ($row = $result->fetch_assoc()) {
        $i_transaction_number = $row['COUNT(\'transaction_number\')'];
    }

    //echo $i_transaction_number;

    $can_make_transaction = false;
    if ($to == $from){
        #if this is the case then we know it is a withdrawal or deposit
        $can_make_transaction = true;
        $update_sql = "UPDATE `account` SET `balance`= balance + $amount WHERE account_number = $to";
        $retval = mysqli_query($conn, $update_sql); // procedural execution of query
        if ($amount > 0) {
            echo "Transaction Type: DEPOSIT\n";
        } 
        else 
        {
            echo "Transaction Type: WITHDRAWAL\n";
        }
    }
    else
    {
        #otherwise we need to make sure the "from" has enough money to give
        $fromSql = "SELECT * FROM `account` WHERE account_number = '$from'";
        $result = $conn->query($fromSql);
        while ($row = $result->fetch_assoc()) {
            $from_balance = $row['balance'];
        }
        
        if ($from_balance < $amount) {
            $can_make_transaction = false;
            echo "Transaction Failed: Insufficient funds for Account #$from to make transaction.";
        }
        else { // otherwise if the from account has enough to give
            $can_make_transaction = true;
            $update_sql = "UPDATE `account` SET `balance`= balance - $amount WHERE account_number = $from";
            $retval = mysqli_query($conn, $update_sql); // procedural execution of query
            $update_sql = "UPDATE `account` SET `balance`= balance + $amount WHERE account_number = $to";
            $retval = mysqli_query($conn, $update_sql); // procedural execution of query
            echo "Transaction Successful!\n";
        }
    }

    if ($can_make_transaction) {
        $i_to_account = $to;
        $i_from_account = $from;
        $i_amount = $amount;
        $i_date = date('mdY');
        $i_time = date('His');
   
        $sql = "INSERT INTO transaction_history "."(transaction_number, to_account, from_account, amount, trans_date, trans_time)"." VALUES "."('$i_transaction_number', '$i_to_account', '$i_from_account', '$i_amount', '$i_date', '$i_time')";
            
			//mysqli_select_db($conn,'university');
        $retval = mysqli_query($conn, $sql); // procedural execution of query
         
        if(! $retval ) {
            die('Could not enter data: ' . mysqli_error($conn));
        }
         
        
			
	    //echo " <br> Transaction table after insertion <br>";
        //show_transactions($conn);
    }
			
    mysqli_close($conn);    

}

?>