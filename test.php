
<?php
	include("common.php");

	try {
		$query=$db->query("SELECT * FROM news_events");
		while($row=$query->fetch(PDO::FETCH_ASSOC)) { 
			
			echo $row['date'] ." : ";
			$date_parts = explode(".", $row['date']);
			$date2 = $date_parts[0] ."-". $date_parts[1] ."-20". $date_parts[2];
			echo $date2 ." : ";
			$fixed_date = date("Y.m.d", mktime(0, 0, 0, $date_parts[0], $date_parts[1], $date_parts[2]));
			echo $fixed_date ."<br />";
			try {
				$query2=$db->query("UPDATE news_events SET `date`='$fixed_date' WHERE id='$row[id]'");
			}
			catch(PDOException $e)
				{ $e->getMessage(); }
		}
	}
	catch(PDOException $e)
		{ $e->getMessage(); }
?>