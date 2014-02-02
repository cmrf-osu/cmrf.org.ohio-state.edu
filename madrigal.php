<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>CMRF - Madrigal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/cmrf.css" rel="stylesheet" type="text/css">
<script src="js/common.js" ></script>


<body bgcolor="#000000" topmargin="0">
<table align="center" width="630" height="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">

<?php include("includes/header.php") ?>
<?php include("includes/dates.php") ?>

  <tr valign="top" id="body">
  	<td>
  	<div>
		<h1 class="center"><?php echo $madrigal_nth; ?> Annual Midwinter Madrigal Feast</h1>
<!--
          <h3>November 16 and 17, 2012<br>
            At Summit on 16th<br/>
            Doors open: 7:00pm<br>
            Performance Starts: 7:30pm<br>
          </h3>
-->		 
<!--		  
		<p>The Council for the Medieval and Renaissance Faire and the Ohio State Medieval and Renaissance Performer's Guild would like to announce the 12<sup>th</sup> Annual Midwinter Madrigal. Madrigal will have a two night run. The event will take place November 16 and 17 at Summit on 16th (<a href="http://summitumc.org/">http://summitumc.org/</a>). Doors will open at 7PM on both nights.
		  <p>Madrigal is a dinner theatre experience which features a fun and entertaining night of medieval and renaissance dancing, songs, music, juggling, fighting as well as several other talents. Come in from the cold and join us for an evening of food and festivities!</p>

-->
		  <p>The Council for the Medieval and Renaissance Faire and the Medieval and Renaissance Performer's Guild join annually to put on a showcase of talents and performances every winter. Madrigal is a dinner theatre experience which features a fun and entertaining night of medieval and renaissance dancing, songs, music, juggling, fighting as well as several other talents. Come in from the cold and join us for an evening of food and festivities!</p>
<!-- See the Gdoc for more information -->
		  <h3>Ticket information</h3>

			<?php
				  /* Don't mess with this portion.
				   * The content of the Madrigal page is chosen by two factors.
						* A collection of files in `/includes/` that hold different content. Each file is for a different time of year. If you want to change what a file says, edit the appropriate file in `/includes/`.
						* A setting in `/includes/dates.php` that determines which of the files in `/includes/` to display. If you want to change which file is displayed on the Madrigal page, change the `$season` variable in `/includes/dates.php`.
				   */
			?>
			<?php if ($season == 'faire' ) { ?>
				  <?php include("includes/madrigal-faire.php") ?>
			<?php } elseif ($season == 'postfaire' ) { ?>
				  <?php include("includes/madrigal-postfaire.php") ?>
			<?php } elseif ($season == 'premadrigal' ) { ?>
				  <?php include("includes/madrigal-premadrigal.php") ?>
			<?php } elseif ($season == 'ticketing' ) { ?>
				  <?php include("includes/madrigal-ticketing.php") ?>
			<?php } elseif ($season == 'ticketing-nofood' ) { ?>
				  <?php include("includes/madrigal-ticketing-nofood.php") ?>
			<?php } elseif ($season == 'soldout' ) { ?>
				  <?php include("includes/madrigal-soldout.php") ?>
			<?php } else { ?>
				  <p>We really aren't sure what's happening. If you see this message, <a href="contact.php">send the webmaster an email</a>. Thanks.</p>
			<?php } ?>

  </div>
	  </div>
	<div align="center" style="clear: both;"><img src="images/Madrigal_Swan.gif" width="360" heigth="362" alt="The Madrigal Swan."/></div>
 	</td>
  </tr>
<?php include("includes/footer.php") ?>
</table>

</body>
</html>
