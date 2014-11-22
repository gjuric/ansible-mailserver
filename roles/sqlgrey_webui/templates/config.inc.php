<?php

/***************************************************
SQLgrey Web Interface
Filename:	config.inc.php
Purpose: 	Configuration database and options
Version: 	1.1.6
****************************************************/

/* Database settings */
$db_db		= "{{ greylisting_db_name }}";
$db_hostname	= "{{ greylisting_db_host }}";
$db_user	= "{{ greylisting_db_username }}";
$db_pass	= "{{ greylisting_db_password}}";
$db_type	= "mysql";	// mysql or pg (pg=postgress)

/* Set close_btn to 'yes' to enable the close button in index.php (main menu)
   the button action = ../ which could be a security issue
   default = no
*/
$close_btn	= "no";

/* Set no_millisecs to 'no' if your server's dbase shows milliseconds
   and you do want these to be displayed - this will take two lines per entry.
   Also set this to 'no' if you encounter problems with displaying the timestamps
   ('no' used to be the default and leaves the date format untouched).
   When set to 'yes' timestamps will be formatted as 'yyyy-mm-dd hh:mm:ss'
   which doubles the amount of visible entries.
   default = yes
*/
$no_millisecs	= "yes";

/* Depending on your PHP version you may have to set default timezone to avoid warnings.
   Remove the comment (//) and change the default to your region.
   See http://www.php.net/manual/en/timezones.php to determine the syntax of your region.
   Examples are: 'America/Los_Angeles', 'Europe/Berlin' etc.
   default = 'UTC'
*/
//date_default_timezone_set('UTC');

?>