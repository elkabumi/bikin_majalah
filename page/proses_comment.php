<?php
	extract($_POST);
		$i_name = ($i_name);
		$i_email = ($i_email);
		$i_subject = ($i_subject);
		
		$data =		 "'', 
					'$i_name', 
					'$i_email', 
					'$i_subject',
					'0'
			";
		mysql_query("INSERT INTO comment VALUES(".$data.")");
		header('Location: index.php?page=contact&did=1');
?>