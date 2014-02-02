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
	
	<p>The Council for the Medieval and Renaissance Faire is a student-run organization at The Ohio State University.  Its purpose is to organize and help put on the Medieval and Renaissance Faire at Ohio State and the Madrigal Feast.  The Council works hand in hand with the Medieval and Renaissance Performer's Guild for both of these events.   The Council consists of anywhere from five to fifteen members from year to year and meets weekly to discuss business concerning the Faire and the Madrigal.<br></p>
	
	<p>So what exactly does the Council do? There are five areas of interest: 
	Performers, Vendors, Site, Public Relations, and Advertising. These are 
	just broad areas, and there is much more that goes on between the lines.</p>
	
	<!--<a href="performers.html">--><b><font color=#8D0122>Performers:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Council hires outside performers to come to the Faire and perform for the patrons.  It has had singers, musicians, sword fighters, comedy acts, stunt acts, and many more.  Some of these performers are paid and some work for free.  There are many performers that come directly from the Ohio State University, as well, including, but not limited to, the Medieval and Renaissance Performer's Guild, the Society for Creative Anachronism, the Arts and Sciences Student Council and the Pagan Student Association.  There is a Performers' Coordinator whose job is to decide which performers to invite to our Faire and how much to pay them. <br><br>
	
	<!--<a href="vendors.html">--><b><font color=#8D0122>Vendors:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Council sells space at our Faire for outside vendors to come and peddle their wares associated in some way with the time period.  It has had vendors selling everything from period clothing and swords, to candles and incense, to jewelry and masks, to stuffed creatures and fairy wands.  Many vendors are local to Columbus, but some have come from as far away as Michigan.  There is a Vendor's Coordinator whose job is to decide which vendors to allow at the Faire and how much space and materials they require.<br><br>
	
	<!--<a href="site.html">--><b><font color=#8D0122>Site:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Medieval and Renaissance Faire takes place on the South Oval of the Ohio State University Columbus campus the first Saturday in April.  It has been going on in this area for over two decades and will hopefully continue for years to come.  The site is spotted with trees native to central Ohio and also harbors the serene Mirror Lake.  With multiple paths and 4-5 performance sites each year, this is the ideal location for the faire.  The Site Coordinator makes sure that the site and information booths and other amenities are ready for Faire.<br><br>
	
	<!--<a href="pradvert.html">--><b><font color=#8D0122>Public Relations/Advertising/Fundraising:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Faire Council normally has a poster contest each year centering on the theme for the year's Faire.  This poster is placed in area businesses to advertise for the event.  The design is made into a shirt sold at the Faire.  A program is published and distributed at the Faire containing information about performers, vendors, shows, and ads from area businesses.  We sell these ads to help defray the cost of producing the programs and the posters.  There are coordinators on Faire Council for all of these items as well.<br><br>
	
	<!--<a href="madrigal.html">--><b><font color=#8D0122>Madrigal:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Faire Council also puts on an annual Madrigal Feast with the help of the Medieval and Renaissance Performer's Guild.  This tradition started Winter of 2002 and will hopefully continue for many years to come.  Council organizes the site, advertising, and ticket sales while the Guild provides the performers.  A Madrigal Feast is a type of a Dinner Theatre in which the participants are visually and audibly taken back to the Medieval and Renaissance Periods for a night of period songs, dances, and a great dinner hosted by the lords and ladies of the castle.  Its location and date are subject to change each year. <br>
	
      <hr/>
		<p class="center"><a href="faire-archives.php">Catalog of past Faires</a></p>
	  <hr/>
    </td>
  </tr>
  <?php include("includes/footer.php") ?>
</table>


</body>
</html>
