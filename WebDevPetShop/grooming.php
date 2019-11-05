
<?php
include_once ("inc/Header.php")
?>
<div id="content">

	<div id="grooming">
		<div id="groom">
			<h2>Dog Grooming</h2>
			
			<img src="Images/dogbubbles.png" alt="Grooming">
		  	<button onclick="apptFunction()" span="right">Click to make an appointment</button>
			
			<script>
			function apptFunction() {
		  
			window.location = "MakeAppointment.php";
			//window.location = "MakeAppointment2.php";
			//window.location = "Register2.php";

			      }
			</script>
		  	<p>We offer professional grooming services for all breeds, large and small. Our talented groomers will beautifully and safely make your dog look their best.

			<p>To coiff your pooch, we use high quality hypo-allergenic natural oatmeal shampoo leaving the fur clean and silky.
			Using hand scissoring and clipper work, we do breed specific trims as well as personality styles to bring out the best in your pet. brushing the undercoat if necessary.  Services include nail trimming, and cleaning of teeth and ears.  On matted fur, we do not pull on the fur but gently brushing or trimming the matted fur out. We believe in the gentle approach and preventing anxiety to your precious pet.</p>
			<p></p>
	    
	    <table>
	    <col width="300">
	    <col width="250">
	    <col width="250">
	    <col width="250">
	  <tr>
	    	  <th align="left">Full Grooming Service $75.00</th>
		  <th align="left">Bath Only Service $50.00</th>
		  <th>Additional Services </th>
		  <th>Mobile Services (Call For Pricing)</th>
	  </tr>
	  <tr>
	    <td>
		 <ul list-style-position: inside;>
			<li>Ear Cleaning/Ear Hair Removal</li>
			<li>Teeth Cleaning</li>
			<li>Hair Trimming</li>
			<li>Nail clipping</li>
			<li>Sanitary trim</li>
			<li>Paw trim</li>
			<li>Bath (2x shampoo/rinse, using bio-degradable, hypo-allergenic shampoo)</li>
			<li>Anal glands (as required)</li>
			<li>Fluff dry</li>
			<li>Complete brush-out</li>
			<li>Standard breed clip and scissor finish</li>
			<li>Bow or bandana</li>
			</style>
	    	  </ul>
	    </td>
	    	    <td>
		 <ul list-style-position: inside valign="top";>
			<li>Ear cleaning</li>
			<li>Hair Trimming</li>
			<li>Nail clipping</li>
			<li>Sanitary trim</li>
			<li>Paw trim</li>
			<li>Bath (2x shampoo/rinse, using bio-degradable, hypo-allergenic shampoo)</li>
			<li>Anal glands (as required)</li>
			<li>Fluff dry</li>
			<li>Complete brush-out</li>
			<li>Standard breed clip and scissor finish</li>
			<li>Bow or bandana</li>
			</style>
	    	  </ul>
	    </td>
	    <td valign="top">
		  <ul list-style-position: inside;>
			<li>Teeth Brusing Only $10.00</li>
			<li>Nail Clipping Only $15.00</li>
			<li>Flea and Tick Bath (added to Full Grooming or Bath Only Service) $30.00</li>
			<li>DeSkunk Bath $100.00</li>	
			</style>
	    	  </ul>
	    </td>
	    <td valign="top">
		  <p>Our Mobile unit will perform all services offered at your residence.  Pricing depends on distance from our location.</p>
	    </td>	
	  </tr>

	  
	  
	    </table>
      
		</div>
	</div>
  </div>
</div>
<?php
include_once ("inc/Footer.php")
?>
