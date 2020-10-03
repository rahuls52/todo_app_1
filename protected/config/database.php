	<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=yiicurd',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',

);
$db = mysql_select_db("yiicurd", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in UR

$name = $_POST['name'];
$divs = $_POST['Div'];
$class = $_POST['Class'];
if($name !=''||$divs !=''||$class !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(name, divs, class) values ('$name', '$divs', '$class')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
// Closing Connection with Server

mysql_close($connection); // Closing Connection with Server
?>