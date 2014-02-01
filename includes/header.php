<!-- START includes/header.php -->

<?php 
  //echo "<!-- ".$_SERVER['REQUEST_URI']."-->";

  if(stripos($_SERVER['REQUEST_URI'], "patrons") !== false){
    $titleImage = "images/patrons.gif";
  } elseif ( stripos($_SERVER['REQUEST_URI'], "performers") !== false ) {
    $titleImage = "images/performers.gif";
  } elseif ( stripos($_SERVER['REQUEST_URI'], "vendors") !== false ) {
    $titleImage = "images/vendors.gif";
  } else {
    $titleImage = "images/index.gif";
  }
  
?>


  <tr valign="top" id="photo">
    <td width="5" bgcolor="#000000" rowspan="6">&nbsp;</td>
    <td valign="top" width="630" height="50"><img src="<?php echo $titleImage ?>" width="630" height="50" border="0" id="titleImage"></td>
    <td width="5" bgcolor="#000000" rowspan="6">&nbsp;</td>
  </tr>
  <tr valign="top" id="logo">
    <td valign="top" width="630" height="48"><a href="index.php"><img src="images/title.gif" width="630" height="48" border="0"></a></td>
  </tr>
  <tr valign="top" id="buttons">
    <td valign="top" width="630" height="23">
      <table width="630" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="navTab patrons"><a href="patrons.php" alt="patrons" name="patrons">&nbsp;</a></td>
          <td class="navTab performers"><a href="performers.php" alt="performers" name="performers">&nbsp;</a></td>
          <td class="navTab vendors"><a href="vendors.php" alt="vendors" name="vendors">&nbsp;</a></td>
          <td class="navTab pradvertising"><a href="pradvertising.php" alt="pradvertising" name="pradvertising">&nbsp;</a></td>
          <td class="navTab site"><a href="site.php" alt="pradvertising" name="pradvertising">&nbsp;</a></td>
          <td class="navTab madrigal"><a href="madrigal.php" alt="madrigal" name="madrigal">&nbsp;</a></td>
          <td class="navTab contact"><a href="contact.php" alt="contact" name="contact">&nbsp;</a></td>
        </tr>
      </table>
    </td>
  </tr>



<!-- END includes/header.php -->