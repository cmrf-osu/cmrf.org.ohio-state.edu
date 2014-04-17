<?php
    /* Change dates after Faire */

    /* Faire 
     * Note that the variable 'fair' is spelled without an 'e'. */
    $fair_day = 'Saturday'; // Saturday
    $fair_date = 'April 5'; // Month ##
    $fair_year = '2014'; // YYYY
    $fair_nth = '40<sup>th</sup>'; // ##<sup>ordinal</sup>

    $fair_day_old = 'Saturday'; // Saturday
    $fair_date_old = 'April 6'; // Month ##
    $fair_year_old = '2013'; // YYYY
    
    
    /* Madrigal */
    $madrigal_date = 'November 15 and 16'; // Month ## and ##
    $madrigal_year = '2013'; // YYYY
    $madrigal_nth = '13<sup>th</sup>'; // ##<sup>ordinal</sup>
    
    $madrigal_date_old = 'November 16 and 17'; // Last year's Madrigal date, Month ## and ##
    $madrigal_year_old = '2012'; // Last year; YYYY
    $madrigal_nth_old = '12<sup>th</sup>'; // was 12 in 2012. 
    
    /* The driving variable */
    $season = 'postfaire';
        // faire             - after madrigal up to faire
        // postfaire         - after faire until madrigal
        // premadrigal       - once madrigal operations start
        // ticketing         - when doing ticketing (edit includes/madrigal-ticketing.php with appropriate information for tickets)
        // ticketing-nofood  - when food orders are closed (edit includes/madrigal-ticketing.php with appropriate information for tickets)
        // ticketing-soldout - after ticket sales are closed
?>
