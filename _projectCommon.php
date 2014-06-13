<?php

	# set default theme
	$theme = "solstice";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("VIATRA2", "/viatra2/", "_self", 1);
	$Nav->addCustomNav("Download", "/viatra2/downloads.php", "_self", 1);
	$Nav->addCustomNav("Documentation", "/viatra2/documentation.php", "_self", 1);
	$Nav->addCustomNav("VIATRA2 Wiki", "http://wiki.eclipse.org/VIATRA2", "_self", 1);
	$Nav->addCustomNav("Partners and supporters", "http://wiki.eclipse.org/VIATRA2#Partners_and_supporters", "_self", 1);
	$Nav->addCustomNav("Contact", "/viatra2/contact.php", "_self", 1);
	$Nav->addCustomNav("About this project", "http://www.eclipse.org/projects/project.php?id=modeling.gmt.viatra2", "_self", 2);
	$Nav->addNavSeparator("Eclipse Modeling Home", "/modeling/", "_self", 1);

	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/viatra2/style.css"/>');
?>
