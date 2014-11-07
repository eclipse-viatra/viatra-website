<?php

	# set default theme
	$theme = "solstice";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("VIATRA2", "/viatra2");
	$Nav->addCustomNav("Download", "/viatra2/downloads.php", "_self", 2);
	$Nav->addCustomNav("Documentation", "/viatra2/documentation.php", "_self", 2);
	$Nav->addCustomNav("VIATRA2 Wiki", "http://wiki.eclipse.org/VIATRA2", "_self", 2);
	$Nav->addCustomNav("Partners and supporters", "http://wiki.eclipse.org/VIATRA2#Partners_and_supporters", "_self", 2);
	$Nav->addCustomNav("Contact", "/viatra2/contact.php", "_self", 2);
	$Nav->addCustomNav("About this project", "http://www.eclipse.org/projects/project.php?id=modeling.gmt.viatra2", "_self", 2);
	$Nav->addNavSeparator("Eclipse Modeling Home", "/modeling");

	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/viatra2/style.css"/>');
	
	// Initialize $variables.
	$variables = array();
	$links = array();
	
	$links[] = array(
			'icon' => 'fa-download', // Required
			'url' => '/viatra2/downloads.php', // Required
			'title' => 'Download', // Required
			//'target' => '_blank', // Optional
			'text' => 'Update Sites, Additional Features' // Optional
	);
	
#	$links[] = array(
#			'icon' => 'fa-users', // Required
#			'url' => '/incquery/getting_involved.php', // Required
#			'title' => 'Getting Involved', // Required
#			//'target' => '_blank', // Optional
#			'text' => 'Git, Mailing List' // Optional
#	);
	
	$links[] = array(
			'icon' => 'fa-book', // Required
			'url' => '/viatra2/documentation.php', // Required
			'title' => 'Documentation', // Required
			//'target' => '_blank', // Optional
			'text' => 'Tutorials, Examples, Javadoc, Wiki' // Optional
	);
	
	$links[] = array(
			'icon' => 'fa-support', // Required
			'url' => '/viatra2/contact.php', // Required
			'title' => 'Support', // Required
			//'target' => '_blank', // Optional
			'text' => 'Bug Tracker, Forum' // Optional
	);
	
	$variables['header_nav'] = array(
			'links' =>  $links, // Required
			'logo' => array( // Required
					'src' => '/viatra2/images/viatra_logo.png', // Required
					'alt' => 'The VIATRA project', // Optional
					'url' => '/viatra2', // Optional
					//'target' => '_blank' // Optional
			),
	);
	
	// CFA Link - Big orange button in header
	$variables['btn_cfa'] = array(
			'hide' => TRUE
	);
	// Set Solstice theme variables (Array)
	$App->setThemeVariables($variables);
?>
