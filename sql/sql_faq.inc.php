<!-- CURRENTLY NOT USED!!!-->>
<?php
	require 'main-connect.inc.php';

	$query = "SELECT * FROM faq_list ORDER BY faq_order";

	$query_run = mysql_query($query);
	
	if ($query_run = mysql_query($query)) {
		while ($query_row = mysql_fetch_assoc($query_run)) {
			$faq_number = $query_row['faq_id'];
			$faq_question = $query_row['faq_question'];
			$faq_answer = $query_row['faq_answer'];

			echo $faq_number;
			echo $faq_question;
			echo $faq_answer;
		}
	} else {
		die('Error executing query!');
	}
?>