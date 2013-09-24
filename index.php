<?php
	class db extends SQLite3
	{
		function __construct() {
			
			$this -> open('database.db');
		}
	}

	$db = new db();
	if (!$db) {
		echo $db-> lastErrorMsg();

	}
	else
	{
	}
	
	$sql =<<<EOF
      SELECT distinct(Subject) from Data;
EOF;

$ret = $db->query($sql);
//$db = array();
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo $row['Subject'];
	//  $db[] = $row;
   }
  // echo json_encode($db);
  $db->close();
?>