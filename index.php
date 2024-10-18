<?php
 //code listing for ch3/index.php
 error_reporting( E_ALL );
 ini_set( "display_errors", 1 );
 include_once "classes/pageData.class.php";
 $pageData = new Page_Data();
 $pageData->title = "Building and processing HTML forms with PHP";
 $pageData->content = include_once "views/navigation.php";

 
 //changes begin here
 //$pageData->content .= "<div>...and a form here</div>";
 $navigationIsClicked = isset($_GET['page']);
 if ( $navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
 } else {
    $fileToLoad = "search";
 }
 $pageData->content .=include_once "views/$fileToLoad.php";
 
 //no changes below
 $page = include_once "templates/page.php";
 echo $page;