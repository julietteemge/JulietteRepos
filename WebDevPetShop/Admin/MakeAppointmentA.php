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
<!--Body-->
<title>Create Request Form</title>
<script type="text/javascript">

	function validate(form){
		var firstName = form.FirstName.value;
		var lastName = form.LastName.value;
		var address = form.Address.value;
		var city = form.City.value;
		var state = form.State.value; 
		var zipCode = form.Zip.value;
		var phoneNumber = form.PhoneNumber.value;
		//var email = form.Email.value;
		var petType = form.PetType.value;
		var breed = form.Breed.value;
		var petName = form.PetName.value;
		//var neuteredOrSpayed = form.NeuteredOrSpayed.checked;
		//var petAge = form.PetAge.value;
		var errors = [];

		if (!checkLength(firstName)) {
			errors[errors.length] = "You must enter a first name.";
		}

		if (!checkLength(lastName)) {
			errors[errors.length] = "You must enter a last name.";
		}

		if (!checkLength(address)) {
			errors[errors.length] = "You must enter an address";
		}

		if (!checkLength(city)) {
			errors[errors.length] = "You must enter a city.";
		}

		if (!checkLength(state, 2, 2)) {
			errors[errors.length] = "You must select a state.";
		}

		if (!checkLength(zipCode, 5, 10)) {
			errors[errors.length] = "You must enter a valid zip code.";
		}

		if (!checkLength(phoneNumber, 10, 10)) {
			errors[errors.length] = "You must enter a valid phone number.";
		}

		//if (!checkEmail(email)) {
		//	errors[errors.length] = "You must enter a valid email address.";
		//}
		
		//if (petType=='undefined') {
		//	errors[errors.length] = "You must select a pet type.";
		//}
		if (!((petType=='Dog') || (!(petType.value=='Cat')))) {
			errors[errors.length] = "You must select a pet type.";
		}
		
		if ((petType=="Dog") && (!checkLength(breed))) {
			errors[errors.length] = "You must select a dog breed.";
		}
	
		if (!checkLength(petName)) {
			errors[errors.length] = "You must enter a pet name.";
		}
	
		//if ( neuteredOrSpayed  ) {
		//	errors[errors.length] = "Is your pet spayed/neutered?";
		//}
		
		if (errors.length > 0) {
			reportErrors(errors);
			return false;
		}
		
		return true;
	}	

	function checkLength(stringVar, min, max)
	{
		var strLength = stringVar.length;
		if(min && strLength < min) return false;
		if(max && strLength > max) return false;
		if (strLength > 0 ) return true;
		else return false;
	}

	function checkEmail(email){
		var re = /\S+@\S+\.\S+/;
    	return re.test(email);
	}

	function toggleBreed(pet)
	{
		var breed = document.getElementById("breed");
		if(pet.value == 'Dog')
		{
			breed.style.removeProperty("display");
		} else
		{
			breed.style.display = "none";
		}
	}
	
	function reportErrors(errors){
		var msg = "There were some problems...\n";
		var numError;
		for (var i = 0; i<errors.length; i++) {
			numError = i + 1;
			msg += "\n" + numError + ". " + errors[i];
		}
		alert(msg);
	}

</script>
</head>
<body>

<form method="post" action="ProcessAppointmentA.php" onsubmit="return validate(this);">
<table border="0" cellspacing="2" cellpadding="2">
<tr>  
		<input name="GroomingID" type="hidden">
</tr>
<tr>
	<td>First Name:</td>
	<td><input type="text" name="FirstName" size="20"></td>
</tr>
<tr>
	<td> Last Name:</td>
	<td><input type="text" name="LastName" size="20"></td>
</tr>
<tr>
	<td> Address:</td>
	<td><input type="text" name="Address" size="20"></td>
</tr>
<tr>
	<td>City: </td>
	<td><input type="text" name="City" size="20"></td>
</tr>
<tr>
	<td>State/Province: </td>
	<td>
		<select name="State">
			<option value="0">Please Choose...</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
			<option value="AB">Alberta</option>
			<option value="BC">British Columbia</option>
			<option value="MB">Manitoba</option>
			<option value="NB">New Brunswick</option>
			<option value="NF">Newfoundland</option>
			<option value="NS">Nova Scotia</option>
			<option value="ON">Ontario</option>
			<option value="PE">Prince Edward Island</option>
			<option value="QC">Quebec</option>
			<option value="SK">Saskatchewan</option>
		</select>
	</td>
</tr>
<tr>
	<td>Zip: </td>
	<td><input type="text" name="Zip" size="10"></td>
</tr>
<tr>
	<td>Phone Number: </td>
	<td><input type="text" name="PhoneNumber" size="10"></td>
</tr>
<tr>
	<td>Email: </td>
	<td><input type="text" name="Email" size="30"></td>
</tr>
<tr>
	<td>Pet Type: </td>
	<td>
<!--		<input type="radio" name="PetType" value="Cat">Cat </input>
	      	<input type="radio" name="PetType" value="Dog">Dog </input>
-->		<input type="radio" name="PetType" value="Cat" onchange="toggleBreed(this)" >Cat </input>
	      	<input type="radio" name="PetType" value="Dog" onchange="toggleBreed(this)">Dog </input>
	</td>
		
</tr>
<tr>
<tr id="breed" style="display:none">
	<td>Breed:</td>
	<td>
		<select name="Breed" value[0]>
			<option value="">Please Choose...</option>
			<option value="Afgan">Afgan</option>
			<option value="Akita">Akita</option>
			<option value="Alaskan Malamute">Alaskan Malamute</option>
			<option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
			<option value="Bichon Frise">Bichon Frise</option>
			<option value="Borzoi">Borzoi</option>
			<option value="Bulldog">Bulldog</option>
			<option value="Chow Chow">Chow Chow</option>
			<option value="Collie">Collie</option>
			<option value="German Shepherd">German Shepherd</option>
			<option value="Golden Retriever">Golden Retriever</option>
			<option value="Irish Setter">Irish Setter</option>
			<option value="Lhasa Apso">Lhasa Apso</option>
			<option value="Papillon">Papillon</option>
			<option value="Poodle">Poodle</option>
			<option value="Shiba Inu">Shiba Inu</option>
			<option value="Spaniel">Spaniel</option>
			<option value="Samoyed">Samoyed</option>
			<option value="Scottish Terrier">Scottish Terrier</option>
			<option value="Suluki">Suluki</option>
			<option value="Terrier">Terrier</option>
			<option value="Weimaraner">Weimaraner</option>
		</select>
	</td>
</tr>
<tr>
	<td>Pet's Name:</td>
	<td><input type="text" name="PetName" size="10"></td>
</tr>
<tr>
	<td> Check this box if pet is neutered/spayed:</td>
	<td colspan="2">
		<input type="checkbox" name="NeuteredOrSpayed" value="1">
	</td>
</tr>
<tr>
	<td>Pet's Age:</td>
	<td><input type="number" name="PetAge" size="2" min="1" max="25"></td>
</tr>

<tr>
	<td colspan="2" align="center">
		<input name="submit" type="submit" value="Submit">
		<input name="reset" type="reset" value="Reset Form">
	</td>
</tr>


</table>
</form>
