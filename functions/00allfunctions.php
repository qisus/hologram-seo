<?php


/*
	* @author Susi Krummenacher
 	* @name Hologram SEO 
 	* @copyright © 2017 susinspired.ch
	
	* ALL FUNCTIONS OF SEO TESTS -> OVERVIEW
*/


//  --------------------- GROUP 1 -> SEO MOBILE  --------------------- 
include 'functions/02mobile.php';

//  --------------------- GROUP 2 -> GOOGLE SNIPPET  --------------------- 
include 'functions/03urlfriendly.php'; 
include 'functions/04titletag.php';
include 'functions/05metadescription.php';
include 'functions/06richsnippets.php';
include 'functions/07https.php'; 

//  --------------------- GROUP 3 -> CONTENT --------------------- 

include 'functions/08heading.php'; 
include 'functions/09xmlsitemap.php';
include 'functions/10hreflang.php'; // duplicate content
include 'functions/11imgalt.php';

//  --------------------- GROUP 4 -> SPEED --------------------- 

include 'functions/12loadingtime.php';
include 'functions/13scriptmin.php';

//  --------------------- GROUP 5 -> SOCIAL MEDIA --------------------- 

include 'functions/14socialopengraph.php';

//  --------------------- EXPORT ZU PDF --------------------- 

include 'functions/16export2pdf.php';

//  --------------------- HTML STRUCTURE --------------------- 

include 'htmlinfo.php';


?>