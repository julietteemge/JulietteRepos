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

	include_once ("inc/Header.php")
?>
if (array_key_exists('pg',$_GET) && $_GET['pg'] == 'admin')	
{
<div class="processappointment">

     <title>Customer Created</title>

	<h1>Create Customer</h1>
	<?php
	//Output the variables as list items.
	//Part of the first one is done for you.
	echo "Customer has been created and added to the database.";
	?>
</div>
}
else
{
<div class="processappointment2">
     <title>Appointment Requested</title>

	<h1>Appointment Requested</h1>
	<?php
	//Output the variables as list items.
	//Part of the first one is done for you.
	echo "We received your request for an appointment.  Our office will contact you within 24 hours.";
	?>
</div>	
}
<!--Footer-->
<?php
	include_once ("inc/Footer.php")

?>


