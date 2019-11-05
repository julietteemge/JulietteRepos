<!--CONTACTMESSAGE.PHP-->
<!--Header-->
<?php
include_once ("inc/Header.php")
?>
<!--Body-->
<body>
	<script type="text/javascript" src="FormValidation.js"></script>
	<script type="text/javascript"></script>	
<?php
	if (!array_key_exists('Submitted',$_POST))
	{
?>
	  <form method="post" action="ContactMessage.php">
		<input type="hidden" name="Submitted" value="true"></input>
		<title>MessageForm</title>
		<h3>Please provide us with your name : </h3>
		<table border="0" cellspacing="2" cellpadding="2">
			<tr>
			   <td>First Name:</td>
				<td><input type="text" name="FirstName" size="20"></td>
			</tr>
			<tr>
			   <td> Last Name:</td>
			   <td><input type="text" name="LastName" size="20"></td>
			</tr>
		</table>

		<h3>You may send us a message via email below or call us at (415)555-1212.</h3>		
		<h3>We will respond to your email by the next business day.</h3>
			

		Mail Server:<input type="hidden" name="Host" size="25" value="smtp.gmail.com"><br>

		<table border="0" cellspacing="2" cellpadding="2">
			<tr>
			   <td>To:</td>
			   <td>Sandy's Pet Shop<input type="hidden" name="To" size="25" value="julietteemge@gmail.com"><br></td>
			</tr>
			<tr>
			   <td>From:</td>
			   <td><input type="text" name="From" size="25"><br></td>
			</tr>
			<tr>
			   <td>Subject:</td>
			   <td><input type="text" name="Subject" size="25"><br></td>
			</tr>
		</table>

		<input type="hidden" name="Host" size="25" value="smtp.gmail.com"><br>
		<textarea name="Message" cols="50" rows="10"></textarea><br>
		<input type="submit" value="Send Email">
	  </form>
<?php
	}
	else
	{
		ini_set('SMTP',$_POST['Host']);
		$to = $_POST['To'];
		//$from = 'From: ' . $_POST['From'];
		$from = $_POST['From'];
		$subject = $_POST['Subject'];
		$message = $_POST['Message'];

		if(mail($to,$subject,$message,$from))
		{
			echo "Message Sent";
		}
		else
		{
			echo "Message Not Sent";
		}
	}	
?>
<!--Footer-->
<?php
include_once ("inc/Footer.php")
?>
