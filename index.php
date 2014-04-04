<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- index.php -->

<html>
<head>
<title>Council for the Medieval & Renaissance Fair at The Ohio State University</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/cmrf.css" rel="stylesheet" type="text/css">
<script src="js/common.js" ></script>
</head>

<body bgcolor="#000000" topmargin="0">
<table align="center" width="640" height="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">

<?php include("includes/header.php"); ?>
<?php include("includes/dates.php"); ?>


  <tr valign="top" id="body">
    <td valign="top">
	<?php if ($season == 'faire' ) { ?>
	  <?php include("includes/index-faire.php") ?>
	<?php } elseif ($season == 'postfaire' ) { ?>
	  <?php include("includes/index-postfaire.php") ?>
	<?php } elseif ($season == 'premadrigal' ) { ?>
	  <?php include("includes/index-premadrigal.php") ?>
	<?php } elseif ($season == 'ticketing' OR $season == 'ticketing-nofood' OR $season == 'ticketing-soldout' ) { ?>
	  <?php include("includes/index-ticketing.php") ?>
	<?php } else { ?>
		  <p>We really aren't sure what's happening. If you see this message, <a href="contact.php">send the webmaster an email</a>. Thanks.</p>
	<?php } ?>
	
	
	<hr>
	  <p class="center">If you're looking for the OSU students who form the cast of the Faire at OSU, try here:<br>
	  <a href="http://guild.org.ohio-state.edu">The Medieval and Renaissance Performers Guild</a>. </p>
	<hr>
	
	<p>The Council for the Medieval and Renaissance Faire is a student organization at The Ohio State University. We organize and run the Medieval and Renaissance Faire at Ohio State and the Madrigal Feast. The Council works hand in hand with the Medieval and Renaissance Performer's Guild. We welcome interested volunteers.</p>
	
	<p><!--<a href="performers.html">--><b><a href="performers.php">Performers:</a></b>
	The Council hires outside performers, including singers, musicians, sword fighters, comedy acts, stunt acts, and many more. Ohio State students perform at Faire as well, including the Medieval and Renaissance Performer's Guild and the Society for Creative Anachronism. <br/>
	If you're interested in performing at future Faires, <a href="performers.php">contact our Performer Coordinator</a>.</p>
	
	<p><!--<a href="vendors.html">--><b><a href="vendors.php">Vendors:</a></b>
	Faire vendors sell all sorts of period wares. Merchants sell everything from period clothing and swords, to candles and incense, to jewelry and masks, to stuffed creatures and fairy wands. Follow your nose to the smoked turkey stand!<br/>
	If you wish to vend at Faire next year, <a href="vendors.php">contact our Vendor Coordinator</a>.</p>
	
	<p><!--<a href="pradvert.html">--><b><a href="pradvertising.php">Advertising:</a></b> 
	The Faire Program, distributed at Faire, contains information about performers, vendors, shows, and ads from area businesses. Ad sales directly support Council's operating costs, and help ensure the success of Faire.<br/>
	For more information on advertising, please <a href="pradvertising.php">contact our advertising coordinator</a>.</p>
	
	<!--<a href="madrigal.html">--><b><a href="madrigal.php">Madrigal:</a></b>
	The Faire Council also puts on an annual Madrigal Feast with the help of the Medieval and Renaissance Performer's Guild. This tradition started in winter 2002, and has been going strong since. <a href="http://guild.org.ohio-state.edu/">Guild</a> provides the performers, while Council organizes the site, food, ticket sales and seating. The Madrigal Feast is dinner theatre that sets the plot for Faire in an evening of period songs, dances, and dinner. Its location and date are subject to change each year. <br>
	
      <hr/>
		<p class="center"><a href="faire-archives.php">Catalog of past Faires</a></p>
	  <hr/>
    </td>
  </tr>
  <?php include("includes/footer.php") ?>
</table>


</body>
</html>
