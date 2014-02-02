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
    <td valign="top">
	  <?php if ($season == 'faire' OR $season == 'ticketing' OR $season == 'ticketing-nofood' OR $season == 'ticketing-soldout' ) { ?>
		<?php include("includes/pr-faire.php") ?>
	  <?php } elseif ($season == 'postfaire' ) { ?>
		<?php include("includes/pr-postfaire.php") ?>
	  <?php } elseif ($season == 'premadrigal' ) { ?>
		<?php include("includes/pr-premadrigal.php") ?>
	  <?php } else { ?>
		<p>We really aren't sure what's happening. If you see this message, <a href="contact.php">send the webmaster an email</a>. Thanks.</p>
	  <?php } ?>
        
	  </td>
  </tr>
  <tr>
    <td>
      <div align="center">For information about purchasing ads please click <a href="pdf/renad.pdf">here</a>.<br>
      </div>
    </td>
  </tr>
<?php include("includes/footer.php") ?>
</table>


</body>
</html>
