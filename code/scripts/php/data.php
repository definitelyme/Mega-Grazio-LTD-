<?php
	include("database/table_create.php"); // Import sql files
	
	$result = $conn->query("SELECT count(*) FROM sign_in_users") or die("Error querying database: " . $conn->error());
	$row = $result->fetch_array();
	
	$reg_users = $row[0];
	$growth = ($reg_users / 100) * 100;
	
	if(isset($_GET['search'])){
		$name = $_GET['search_name'];
		$search = $conn->query("SELECT * FROM sign_up_users WHERE firstname='$name' || lastname='$name'") or die("Error querying database for searched item");
		$selected = $search->fetch_array();
		if($name == $selected['firstname'] || $selected['lastname'] == $name){
			$profile = "<div class=\"module-body\">
							<div class=\"row-fluid\">
								<div class=\"span6\">
									<div class=\"media user\">
										<a class=\"media-avatar pull-left\" href=\"#\">
											<img src=\"images/user.png\">
										</a>
										<div class=\"media-body\">
											<h3 class=\"media-title\">"
												. $selected['firstname'] .
											"</h3>
											<p>
												<small class=\"muted\">" . $selected['lastname'] . "</small></p>
											<div class=\"media-option btn-group shaded-icon\">
												<button class=\"btn btn-small\" id=\"show_message\">
													<i class=\"icon-envelope\"></i>
												</button>
												<button class=\"btn btn-small\" id=\"show_forward\">
													<i class=\"icon-share-alt\"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>";
		}
		elseif($selected['firstname'] !== $name || $selected['lastname'] !== $name){
			$err = "No such user exits in our database!";
		}
		elseif($name == NULL){
			$err = "You must specify a name!";			
		}
		else{
			$err = "Undefined error please contact Fitz! The Boss!!";
		}
	}
	
	if(isset($_GET['all'])){
		$all_users = $conn->query("SELECT * FROM sign_up_users") or die("Error querying database: " . $conn->error());
	}
	
	$conn->close();
?>