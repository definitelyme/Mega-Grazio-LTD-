<?php
	/*
	* The code below was produced by Fitz.
	* Do not try to copy it is password protected
	* It colloects data from database and outputs 
	* to the screen. Goodluck!!
	*/
	
	require("database/table_create.php"); // Import sql files
	
	// list data in sql table
	$table = $conn->query("SELECT * FROM sign_up_users") or die("Error querying database: " . $conn->error());
	
	// start table
	echo "<div class=\"module-body\">
			<div class=\"row-fluid\">
				<div class='table-responsive'>";
	echo "<table class='datatable-1 table table-striped table-hover display'>"; // table tag starts
	
	// table head starts
	echo "<thead> 
				<tr>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Username</th>
				</tr>
		  </thead>"; // table head ends
	while($table_rows = $table->fetch_array()){
		echo "<tbody>
				<tr>
				  <td>" . $table_rows['firstname'] . "</td>
				  <td>" . $table_rows['lastname'] . "</td>
				  <td>" . $table_rows['username'] . "</td>
				</tr>
			  </tbody>"; // table body ends
	}
	echo "</table>"; // table tag ends
	echo "</div>
		</div>
		</div>";
?>