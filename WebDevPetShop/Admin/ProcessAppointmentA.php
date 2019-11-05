<!--Header-->
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sandy's Pet Shop</title>
  	<img id="logo" src="/pet-shop/Images/Logo.jpg" alt="Logo">
	  <div class="clear"></div>
	  <div id="Admin">
		<h2>Administrator : Create New Request</h2>
	  </div>
</head>
<?php
	//For each entry coming through the form,
	//  create a simple global variable to hold...
	//	- either an error if the entry is not filled or filled incorrectly
	//	- or the value entered.
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pet_shop";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error)
	{
	     die("Connection failed: " . $conn->connect_error);
	} 

  	//  add a row begin
	if (array_key_exists('submit',$_POST))	
	{
	  
	  include_once($_SERVER['DOCUMENT_ROOT']. "/pet-shop/inc/Functions.php");
	  $post = sanitize($_POST);
	  
	  foreach($post as $field=>$value)
	  {
	    if($field == 'submit' || $field == 'GroomingID') continue;
		
	    $fieldArr[] = $field;
	    $valueArr[] = $value;
	    
	  }
	  $fieldString = 'GroomingID, '. implode(', ', $fieldArr);
	  $valueString = "NULL, '" . implode("', '", $valueArr);
		  
	  $sql = "INSERT INTO grooming ($fieldString) VALUES ($valueString');";
	  
	  $result = $conn-> query($sql);
	}
	// add a row end

?>
<div class="processappointmentA">

     <title>Customer Created</title>

	<?php
	//Output the variables as list items.
	//Part of the first one is done for you.
	echo "";
	echo "New Request has been created and added to the database.";
	echo ""
	?>
</div>
<div>
  <input type="button" value="Return to Main Page " onclick="window.location='/pet-shop/Admin/index.php?pg=admin'">	

</div>


