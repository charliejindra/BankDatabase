<?php

function show_account($conn) {

	//include "dbconnect.php";

	$sql = "SELECT * FROM account";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Account Table<h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."Account Number".'</th>'.'<th>'."Customer ID".'</th>'.'<th>'."Account Type".'</th>'.'<th>'."Balance".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["account_number"]. "</td>";
				echo "<td>" . $row["customer_ID"]. "</td>";
				echo "<td>" . $row["account_type"]. "</td>";
				echo "<td>" . $row["balance"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}

function show_customer($conn) {

	//include "dbconnect.php";

	$sql = "SELECT * FROM customer";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Customer Table<h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."Customer ID".'</th>'.'<th>'."Username".'</th>'.'<th>'."Password".'</th>'.'<th>'."Account Holder".'</th>'.'<th>'."Birthday".'</th>'.'<th>'."SSN".'</th>'.'<th>'."Phone Number".'</th>'.'<th>'."Email".'</th>'.'<th>'."Address 1".'</th>'.'<th>'."Address 2".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["customer_ID"]. "</td>";
				echo "<td>" . $row["username"]. "</td>";
				echo "<td>" . $row["password"]. "</td>";
				echo "<td>" . $row["account_holder"]. "</td>";
				echo "<td>" . $row["Birthday"]. "</td>";
				echo "<td>" . $row["SSN"]. "</td>";
				echo "<td>" . $row["phone_number"]. "</td>";
				echo "<td>" . $row["email"]. "</td>";
				echo "<td>" . $row["address1"]. "</td>";
				echo "<td>" . $row["address2"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}

function show_card($conn) {

	//include "dbconnect.php";

	$sql = "SELECT * FROM"." card";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Card Table<h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."Card Number".'</th>'.'<th>'."Card Type".'</th>'.'<th>'."Account Number".'</th>'.'<th>'."Credit".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["card_number"]. "</td>";
				echo "<td>" . $row["card_type"]. "</td>";
				echo "<td>" . $row["account_number"]. "</td>";
				echo "<td>" . $row["credit"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}

function show_transactions($conn) {

	//include "dbconnect.php";

	$sql = "SELECT * FROM"." transaction_history";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Transaction History<h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."Transaction Number".'</th>'.'<th>'."To Account".'</th>'.'<th>'."From Account".'</th>'.'<th>'."Amount".'</th><th>'."Transaction Date".'</th>'.'<th>'."Transaction Time".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["transaction_number"]. "</td>";
				echo "<td>" . $row["to_account"]. "</td>";
				echo "<td>" . $row["from_account"]. "</td>";
				echo "<td>" . $row["amount"]. "</td>";
				echo "<td>" . $row["trans_date"]. "</td>";
				echo "<td>" . $row["trans_time"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}

function getInstructorByID($conn, $id) {
    $sql = "SELECT * FROM instructor WHERE ID = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $id);
    $statement->execute();

    $result = $statement->get_result();

    $instructor = $result->fetch_assoc();
    return $instructor;
}

function updateInstructorByID($conn, $id) {
    $sql = "UPDATE instructor SET salary = salary * 1.10 WHERE ID = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $id);
    $statement->execute();
}

function deleteInstructorByID($conn, $id) {
	$sql = "DELETE FROM instructor WHERE ID = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $id);
    $statement->execute();
}

?>