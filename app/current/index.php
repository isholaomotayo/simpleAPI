<?php
  try
  {
    //open the database
    $db = new PDO('sqlite:api.db');

  
   
    $result = $db->query('SELECT * FROM data');
	$u = $result->fetch(PDO::FETCH_ASSOC );
    $api=json_encode($u, JSON_FORCE_OBJECT);
	echo $api ;
	
	//print_r($u);
    // close the database connection
    $db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
?>