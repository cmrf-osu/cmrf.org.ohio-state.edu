<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Council for the Medieval & Renaissance Fair at The Ohio State University</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/cmrf.css" rel="stylesheet" type="text/css">
<script src="js/common.js" ></script>
</head>

<body bgcolor="#000000" topmargin="0">
<table align="center" width="640" height="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<?php include("includes/header.php") ?>
<?php include("includes/dates.php") ?>

<tr valign="top" id="body">
  <td>
  	<img width="100%" height="auto" src="images/map.gif">
  	<p>
	    The Medieval and Renaissance Faire takes place on the South Oval of the Ohio State University Columbus campus <?php echo $fair_date . ", " . $fair_year ; ?>. The site is spotted with trees native to central Ohio and also harbors the serene Mirror Lake. With multiple paths and many performance sites each year, this is the ideal location for the Faire.
	  </p>
	  <h3>Directions:</h3>
	  <p>
	    From I-71 (N or S) take Hudson Avenue exit, West on Hudson, Left (South) on Neil Avenue, Right (West) on Lane Avenue, Left (South) onto Fyffe Road, Left (East) on Woody Hayes, Right (South) on College Road. 
	  </p>
	  <p>
	    From 315 S to Lane Avenue, Left (East) on Lane, Right (South) on Fyffe, Left (East) on Woody Hayes, Right (South) on College Road.
	  </p>
	  <p>
	    From 315 N to Medical Center Drive. Turn right on 9th Ave. (a garage is available on 9th Ave. For parking nearer to the faire), Left on Neil Avenue, Right on 12th Avenue, Left on College Road.
	  </p>
	  <p><a href="https://www.google.com/maps?t=m&ll=39.99772,-83.010959&z=17&geocode=FRhRYgIdcVoN-ym3HCUNv444iDGyUXZbXmJTdw&daddr=South+Oval,+Columbus,+OH+43210&output=classic&dg=ntvo">Find your way on Google Maps</a>
	  
	  <style type="text/css" media="screen">.gm-style img{max-width: none; !important; background:none !important;}.gm-style-iw{height:auto !important; color:#000000; display:block; white-space:nowrap; width:auto !important; line-height:18px; overflow:hidden !important;}</style>
	  <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
	  <div style="height:500px;width:590px;overflow:hidden;">
	    <div id="gmap_canvas" style="height:500px; width:590px;"></div>
	  </div>
	  <script type="text/javascript">
	    function init_map(){
	      var myOptions = {
	        zoom:16,center:new google.maps.LatLng(39.9977201,-83.0109592),
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	      };
	      map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
	      marker = new google.maps.Marker({
	        map: map,
	        position: new google.maps.LatLng(39.9977201, -83.0109592)
	      }); 
	      infowindow = new google.maps.InfoWindow({
	        content:"<span style='height:auto !important; display:block; white-space:nowrap; overflow:hidden !important;'><strong style='font-weight:400;'>The Noble Wedding</strong><br>South Oval</span>"
	      }); 
	      google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
	      infowindow.open(map,marker);
	    }
	    google.maps.event.addDomListener (window, "load", init_map);
	  </script>
  </td>
  </tr>
  
<?php include("includes/footer.php") ?>
  
</table>
</body>
</html>
