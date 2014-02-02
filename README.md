This file has a lot of things in it. 

1. resources for the webmaster and recommended tools
2. FTP credential template
3. Updating the site
	- dates
	- Madrigal descriptions
	- Madrigal sales
	- Index

# Resources
* [Our website](http://cmrf.org.ohio-state.edu/)
* [Our Ohio Union listing](http://ohiounion.osu.edu/get_involved/student_organizations/directory?org_id=200)
* [Webmaster transfer request instructions](https://osuitsm.service-now.com/selfservice/kb_view.do?sysparm_article=kb02242)

# Software prerequisites

* an FTP client such as [Filezilla](https://filezilla-project.org/download.php?type=client). OCIO recommends Filezilla. 
* an OSU name.# account
* a good text editor such as [Notepad++](http://notepad-plus-plus.org/), [Komodo Edit](http://www.activestate.com/komodo-edit), [Brackets](http://www.brackets.io/), [jEdit](http://www.jedit.org/), gEdit, Kate, emacs or vim. Ben used Komodo Edit and gEdit.

Recommended: a local install of Apache, for testing purposes. Or set up your own server.

## FTP settings:

- host: web.osu.edu
- port: blank/default
- protocol: SFTP
- logon type: Normal
- user: name.#@cmrf
- password: your name.# password
- server type: default/autodetect

# Website editing

Treat PHP files like HTML files. Use HTML syntax inside them, except for areas within `<?php ?>` where you use PHP. All of the 'pages' on the site will pull in files from `includes/` for the footer and header, for dates and for other purposes. 

`<?php include("includes/dates.php") ?>` is PHP code copying in the contents of `includes/dates.php`. 

`<?php echo $fair_day . ", " . $fair_date . ", " . $fair_year ; ?>` is PHP code outputting the contents of the `$fair_day`, `$fair_date`, and `$fair_year` variables. Those variables are set in `includes/dates.php`. 

## Updating the dates

Dates for most of the site are set in `includes/dates.php`. Changing the appropriate variable there will change the date on all pages. Update that file at the end of the year, after Faire. 

## Madrigal page and ticketing

### Madrigal page modes

The madrigal page has several modes. The active mode is set by changing the value of `$season` in `includes/dates.php`:

* premadrigal
	* Once we have a Madrigal date
	* contents in `includes/madrigal-premadrigal.php`
    * "Madrigal is `$madrigal_date`!"
* ticketing
	* when doing ticketing (edit madrigal.php with appropriate information for tickets)
	* contents in `includes/madrigal-ticketing.php`
    * "Madrigal is `$madrigal_date`!"
* ticketing-nofood
    * still selling tickets, but not selling food.
    * contents in `includes/madrigal-ticketing-nofood.php`
    * "Madrigal is `$madrigal_date`! Buy tickets before we close online ticket sales tomorrow!"
* soldout
	* after ticket sales are closed
	* contents in `includes/madrigal-soldout.php`
    * "Madrigal is `$madrigal_date`, but we've stopped selling tickets online! Come anyways, because there might be seats!"
* faire
	* after madrigal up to faire
	* contents in `includes/madrigal-faire.php`
    * "Faire is coming, be prepared!"
* postfaire
	* after faire
	* contents in `includes/madrigal-postfaire.php`
    * "Faire is over, you should join us and come to Madrigal in fall `$madrigal_year`!" using the updated `$madrigal_year`

Changing the value of `$season` will change what visitors see when they visit http://cmrf.org.ohio-state.edu/madrigal.php

### Generating PayPal buttons for Ticketing

To generate buttons for sales, you must log into PayPal's website. This is a scary and daunting process, since if someone forgets the password to the PayPal website, we don't have a way of resetting it. The Gmail account associated with the PayPal account has no password. :/ 

1. Log into PayPal using the gmail email address and the PayPal password given to you by the previous webmaster. 

2. Generate a button

3. Paste the button code into the table. The first cell of each row is the description; the second cell is the buy button. Rows are colored `#ccc` and `#eee` alternating by the rules regarding `table.striped` in `/css/cmrf.css`. 

4. Repeat until all items have buttons.

5. Generate a "View Cart" button and place it in the `div.center` at the bottom of the page.

## Updating index.php

There's nothing fancy like there is in `madrigal.php`. Yet.


