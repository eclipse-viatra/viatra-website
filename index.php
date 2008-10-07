<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Istvan Rath
	# Date:			7-October-2008
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "VIATRA2 Home page";
	$pageKeywords	= "";
	$pageAuthor		= "Istvan Rath";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	# $atlnews = get_atlnews(5);
	# $atlreferences = rss_to_html("atlExternalReferences", "/gmt/atl/references/", "short", 4);
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<!-- VIATRA2 Description part -->

<!-- QUICK NAVIGATOR PART -->

<!-- VIATRA2 NEWS PART -->

<!-- VIATRA2 PRESENTATION PART -->


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
