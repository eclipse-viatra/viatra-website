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
	$pageTitle 		= "Getting Started with VIATRA";
	$pageKeywords	= "";
	$pageAuthor		= "Istvan Rath";
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = file_get_contents('pages/tutorial.html') . '<script>hljs.initHighlighting()</script>';

	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/viatra/asciidoctor.css"/>');
	$App->AddExtraHtmlHeader('<link rel="stylesheet" href="/viatra/highlight.js/styles/foundation.min.css">');
	$App->AddExtraHtmlHeader('<script src="/viatra/highlight.js/highlight.min.js"></script>');

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
