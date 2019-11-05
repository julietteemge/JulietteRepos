<!-- THIS IS THE ADMIN INDEX PAGE -->
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sandy's Pet Shop</title>
  	<img id="logo" src="/pet-shop/Images/Logo.jpg" alt="Logo">
	  <div class="clear"></div>
	  <div id="Admin">
		<h2>Administrator Page</h2>
	  </div>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "pet_shop";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error)
	{
	     die("Connection failed: " . $conn->connect_error);
	}
  	//  Update a row begin
	if (array_key_exists('submit_button',$_POST))	
	{
	  
	  include_once($_SERVER['DOCUMENT_ROOT']. "/pet-shop/inc/Functions.php");
	  $post = sanitize($_POST);
	  foreach($post as $field=>$value)
	  {
	    if($field == 'submit_button' || $field == 'GroomingID') continue;
	    $setArr[] = "`$field` = '$value'";
	    
	  }
	  $setString = implode(', ', $setArr);
	  $sql = "UPDATE `grooming` SET $setString WHERE `grooming`.`GroomingID` = ". $post['GroomingID'];	  
	    $result = $conn-> query($sql);
	    
	}
	// Update a row end
	
	//  Delete a row begin
	if (array_key_exists('delete_button',$_POST))	
	{
	   $sql = "DELETE FROM grooming WHERE GroomingID =". $_POST['GroomingID'];
	    $result = $conn->query($sql);
	}
	// Delete a row end

	$sql = "SELECT GroomingID, FirstName, LastName FROM grooming";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{		
	
	// output data of each row
?>
	     	<div style="width:30%; float:left;" class="EditCustomer">
		<?php
			
			echo "<form method='POST' name='CustomerList' target='/pet-shop/Admin/index.php' ><table>";
			echo "<tr>";
				echo "<th>Grooming ID</th>";
				echo "<th>Customer</th>";
				echo "<th>&nbsp;</th>";
			echo "</tr>";   

		      while($row = $result->fetch_assoc()) {	
				echo '<form method="post" action="/pet-shop/Admin/index.php">';
				echo "<tr>";
					echo "<td>" . $row["GroomingID"]. "</td>";
					echo "<td>" . $row["FirstName"]. " " . $row["LastName"] . "</td>";
					echo "<td>";
					//echo '<button value="edit" >edit</button>';
					//echo '<button value="delete" class="delete_button" onclick="deleteCustomer('.$row["GroomingID"] . ');">delete</button>';
					echo "<input name='GroomingID' type='hidden' value='" .$row["GroomingID"]. "'/>";
					echo '<input type="submit"  value="edit" name="edit_button" >';
					echo '<input type="submit"  value="delete" name="delete_button" >';
					echo "</td>";
				echo "</tr></form>";	
			//echo "Grooming ID: ". $row["GroomingID"]. " - Customer: ". $row["FirstName"]. " " . $row["LastName"] ;	
			}
			
			echo "</table>
			
			</form>";
		
		?>
		  <input type="button" onclick="window.location='/pet-shop/Admin/MakeAppointmentA.php?pg=admin'" name="NewRequest" value="Create New Request">	
		</div>
		
<!-- Begin Edit Section -->
<?php
//  Edit a row begin
	if (array_key_exists('edit_button',$_POST))     
	{
	    $sql2 = "SELECT * FROM grooming WHERE GroomingID=". $_POST['GroomingID'];
	    $result2 = $conn->query($sql2);

	    if ($result2->num_rows > 0)
	    {
		    while($row = $result2->fetch_assoc())
		    {     
// Edit a row end
?>
            <div style="width: 40%; float:right;" class="EditCustomer">
<!-- Begin -->

		    <form method='POST' name='updateCustomer' ><table>
		
					 <!--<tr>-->
						 <!--<td>Grooming ID: </td>-->
						 <!--<td><input type="hidden" name="GroomingID" size="20" value="<?=$row["GroomingID"]?>" /></td>-->
						 <input type="hidden" name="GroomingID" value="<?=$row["GroomingID"]?>" />

					<!--</tr>-->

					 <tr>
						 <td>First Name: </td>
						 <td><input type="text" name="FirstName" size="20" value="<?=$row["FirstName"]?>" /></td>
					</tr>
		
					<tr>
						<td> Last Name:</td>
						<td><input type="text" name="LastName" size="20" value="<?=$row["LastName"]?>" /></td>
					</tr>
					
					<tr>
						<td> Address:</td>
						<td><input type="text" name="Address" size="20" value="<?=$row["Address"]?>" /></td>
					</tr>
					<tr>
						<td>City: </td>
						<td><input type="text" name="City" size="20" value="<?=$row["City"]?>" /></td>
					</tr>
					<tr>
						<td>State/Province: </td>
						<td><input type="text" name="State" size="20" value="<?=$row["State"]?>" /></td>
					</tr>
					<tr>
						<td>Zip: </td>
						<td><input type="text" name="Zip" size="10" value="<?=$row["Zip"]?>" /></td>
					</tr>
					<tr>
						<td>Phone Number: </td>
						<td><input type="text" name="PhoneNumber" size="10" value="<?=$row["PhoneNumber"]?>" /></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="Email" size="30" value="<?=$row["Email"]?>" /></td>
					</tr>
					<tr>
						<td>Pet Type: </td>
						<td><input type="text" name="PetType" value="<?=$row["PetType"]?>" /></input></td>
					</tr>
					<tr>
						<td>Dog Breed: </td>
						<td><input type="text" name="Breed" value="<?=$row["Breed"]?>" /></input></td>
					</tr>
					<tr>
						<td>Pet's Name:</td>
						<td><input type="text" name="Petname" size="10" value="<?=$row["PetName"]?>" /></td>
					</tr>
					<tr>
						<td>Neutered or Spayed:</td>
						<td><input type="text" name="NeuteredOrSpayed" size="10" value="<?=$row["NeuteredOrSpayed"]?>" /></td>
					</tr>
					<tr>
						<td>Pet's Age:</td>
						<td><input type="number" name="PetAge" size="2" min="1" max="25" value="<?=$row["PetAge"]?>" /></td>
					</tr>
<!--					<tr valign="top">
						<td>Comments: </td>
						<td>
							<textarea name="Comments" cols="30" rows="3" wrap="virtual"
							onblur="checkTextArea(this, 100);"></textarea>
						</td>
					</tr>
-->
					<tr>
						<td colspan="2" align="center">
							<input name="submit_button" type="submit" value="Submit">
							<input name="reset" type="reset" value="Reset Form">
						</td>
					</tr>
				</table>
				</form>
			</div>
	<?php
			}
		}
    }
	?>
</body>
</html>
     
     <!-- End Edit Section -->
<?php
} else {
	     echo "0 results";
	}
$conn->close();
?>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<!--<script type="text/javascript">-->
<!--</script>-->
</body>
</html>

