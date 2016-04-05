<?php
 require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
 require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
 require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
 $App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();
 include($App->getProjectCommon());

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Istvan Rath
	# Date:			3-September-2009
	#
	# Description:
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
  $Theme->setPageAuthor("VIATRA Project");
  $Theme->setPageTitle("VIATRA Project");

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);



	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
  ob_start();
	include('pages/_index.html');
	$incubation = file_get_contents('pages/incubation.html');
  $html = ob_get_clean();
	$html = str_replace("~~INCUBATION~~", $incubation, $html);


	# Generate the web page
  $Theme->generatePage();
?>
