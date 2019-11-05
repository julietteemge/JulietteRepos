<!--LOCATION.PHP-->
<!--Header-->
<?php
include_once ("inc/Header.php")
?>
<!--Body-->

<script
  src="http://maps.googleapis.com/maps/api/js">
</script>
    <table>
      <col width="500">
      <col width="10">
      <col width="450">
      <tr>
      <script>
	  var myCenter=new google.maps.LatLng(38.121782, -122.569432);
      
	  function initialize()
	  {
	  var mapProp = {
	    center:myCenter,
	    zoom:15,
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	    };
	  
	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	  
	  var marker=new google.maps.Marker({
	    position:myCenter,
	    });
	  
	  marker.setMap(map);
	  
	  google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map,marker);
	    });
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
      </script>	
        <td>
	  <div id="googleMap" style="width:500px;height:380px;">
	  </div>
	</td>
	<td></td>
	<td>
	  <p></p>Our state of the art facility is located right off the Highway 101 in the Fireman's Fund building.</p>
	  <p>Our Address<br>777 San Marin Drive<br>Novato, CA. 94945<br>(415)555-1212</p>
	  <p>Directions from Hwy101 North of Novato<br>Take the San Marin Exit<br>Turn Right at the light<br>The building is on the left</p>
	  <p>Directions from Hwy101 South of Novato<br>Take the San Marin Exit<br>Turn Left at the light to go over the overpass>br>The building is on the left</p>
	</td>
      </tr>
    </table>
 
<!--Footer-->
<?php
include_once ("inc/Footer.php")
?>