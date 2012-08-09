<?php

	# set default theme
	$_theme = "";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("GMT Home", "/gmt/");
	$Nav->addCustomNav("Download", "/gmt/download/", "_self", 1);
	$Nav->addCustomNav("Documentation", "/gmt/doc/", "_self", 1);
	$Nav->addCustomNav("VIATRA2", "/gmt/VIATRA2/", "_self", 1);
	$Nav->addCustomNav("About this project", "http://www.eclipse.org/projects/project.php?id=modeling.gmt.viatra2", "_self", 2);
	$Nav->addCustomNav("Documentation", "/gmt/VIATRA2/doc/", "_self", 2);
	$Nav->addCustomNav("Download", "/gmt/VIATRA2/download/", "_self", 2);
	$Nav->addCustomNav("VIATRA2 Wiki", "http://wiki.eclipse.org/VIATRA2", "_blank", 2);
	$Nav->addCustomNav("Partners and supporters", "http://wiki.eclipse.org/VIATRA2#Partners_and_supporters", "_blank", 2);
	$Nav->addCustomNav("Contact", "http://www.eclipse.org/gmt/VIATRA2/contact.php", "_blank", 2);
?>
