<?php

	# set default theme
	$theme = "solstice";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("VIATRA", "/viatra");
	$Nav->addCustomNav("Download", "/viatra/downloads.php", "_self", 2);
	$Nav->addCustomNav("Documentation", "/viatra/documentation", "_self", 2);
	$Nav->addCustomNav("Getting Started", "/viatra/documentation/tutorial.php", "_self", 3);
	$Nav->addCustomNav("Eclipse Wiki", "http://wiki.eclipse.org/VIATRA", "_self", 3);
	$Nav->addCustomNav("About this project", "http://www.eclipse.org/projects/project.php?id=modeling.viatra", "_self", 2);
	$Nav->addNavSeparator("Eclipse Modeling Home", "/modeling");

	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/viatra/style.css"/>');

	// Initialize $variables.
	$variables = array();
	$links = array();

	$links[] = array(
			'icon' => 'fa-download', // Required
			'url' => '/viatra/downloads.php', // Required
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
			'url' => '/viatra/documentation', // Required
			'title' => 'Documentation', // Required
			//'target' => '_blank', // Optional
			'text' => 'Tutorials, Examples, Wiki' // Optional
	);

#	$links[] = array(
#			'icon' => 'fa-support', // Required
#			'url' => '/viatra/contact.php', // Required
#			'title' => 'Support', // Required
#			//'target' => '_blank', // Optional
#			'text' => 'Bug Tracker, Forum' // Optional
#	);

	$links[] = array(
			'icon' => 'fa-support', // Required
			'url' => '/viatra/query.php', // Required
			'title' => 'EMF-IncQuery', // Required
			//'target' => '_blank', // Optional
			'text' => 'For users of EMF-IncQuery' // Optional
	);

	$links[] = array(
			'icon' => 'fa-barcode', // Required
			'url' => 'http://www.eclipse.org/projects/project.php?id=modeling.viatra', // Required
			'title' => 'About this project', // Required
			//'target' => '_blank', // Optional
			'text' => 'Eclipse Project Portal' // Optional
	);

	$variables['header_nav'] = array(
			'links' =>  $links, // Required
			'logo' => array( // Required
					'src' => '/viatra/images/logos/viatra_logo.png', // Required
					'alt' => 'The VIATRA project', // Optional
					'url' => '/viatra', // Optional
					//'target' => '_blank' // Optional
			),
	);

	// CFA Link - Big orange button in header
	//$variables['btn_cfa'] = array(
	//		'hide' => TRUE
	//);

	  $variables['btn_cfa'] = array(
    	'hide' => FALSE, // Optional - Hide the CFA button.
    	'class' => 'btn btn-huge btn-info', // Optional - Replace class on CFA link.
    	'href' => '/viatra/downloads.php', // Optional - Replace href on CFA link.
    	'text' => '<i class="fa fa-download"></i> Download VIATRA' // Optional - Replace text of CFA link.
  );
	// Set Solstice theme variables (Array)
	$App->setThemeVariables($variables);

   $Theme = $App->getThemeClass($App->getHTTPParameter('theme'));
   $Theme->setLayout("thin");
	//$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
