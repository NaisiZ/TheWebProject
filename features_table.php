<?php
	// required for csv export
	ob_start();

	include("../common.php");
?>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p>&nbsp;</p>
					
					<?php
						
						include('lazy_mofo.php');
					
						// connect to database with pdo
						//    Added connection $dbh to common.php
						//$dbh = new PDO("mysql:host=localhost;dbname=dbname;", 'dbuser', 'dbpassword');
					
						// create LM object, pass in PDO connection
						$lm = new lazy_mofo($dbh);
					
						// table name for updates, inserts and deletes
						$lm->table = 'products';
					
						// identity / primary key column name
						$lm->identity_name = 'id';

						// Return to the grid page, or stay on the edit page on submit
						$lm->return_to_edit_after_insert = false;
						$lm->return_to_edit_after_update = false;

						// Number of characters to show in a field in the grid
						$lm->grid_ellipse_at = 0; // 0 = Show All

						// Repeat the header row after this many results
						//$lm->grid_repeat_header_at = 25;

						// Limit number of rows per page
						//$lm->grid_limit = 10;

						


					/* BUTTONS AND ICONS */
						
					// GRID --------------------------------------
						
						// Add button above grid
						$lm->grid_add_link    = "<a class='btn btn-primary' style='margin: 25px 0;' href='[script_name]action=edit&amp;[qs]'><i class='glyphicon glyphicon-plus'></i> Add a Record</a>";
						// Export button above grid
						$lm->grid_export_link = "<a class='btn btn-info' style='margin: 25px 0;' href='[script_name]_export=1&amp;[qs]' title='Download CSV'><i class='glyphicon glyphicon-save-file'></i> Export to CSV</a>";

						// Edit button far right in grid
						$lm->grid_edit_link   = "<a href='[script_name]action=edit&amp;[identity_name]=[identity_id]&amp;[qs]'><i class='glyphicon glyphicon-pencil'style='padding:0 5px;'></i></a>"; 
						// Delete button far right in grid
						$lm->grid_delete_link = "<a href='#' onclick='return _delete(\"[identity_id]\");'><i class='glyphicon glyphicon-remove' style='color: red; padding:0 5px;'></i></a>";
					// -------------------------------------------


					// ADD / EDIT PAGE --------------------------------------

						// Update Button
						$lm->form_update_button = "<input type='submit' value='Update &gt;&gt;' class='btn btn-success'>";

						// Back Button
						$lm->form_back_button   = "<input type='button' value='&lt;&lt; Back' class='btn btn-warning' onclick='_back();'>"; // use type=button for delete and cancel so form presses the right button with enter key

						// Delete Button
						$lm->form_delete_button = "<input type='button' value='Delete' class='btn btn-danger' onclick='_delete();'>";

						// Form Titles (displays above the add/edit form)
						$lm->form_text_title_add    = 'Add Record';    
						$lm->form_text_title_edit   = 'Edit Record';

					// ------------------------------------------------------	
						
						

						

						// use the lm controller
						$lm->run();
					?>
					
				</div>
			</div>
		</div>

	</body>
</html>