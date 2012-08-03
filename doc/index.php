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
	$pageTitle 		= "VIATRA2 Documentation";
	$pageKeywords	= "";
	$pageAuthor		= "Istvan Rath";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	$Nav->addCustomNav("VIATRA2 Wiki", "http://wiki.eclipse.org/VIATRA2", "_blank", 2);
	$Nav->addCustomNav("Contact", "http://www.eclipse.org/gmt/VIATRA2/contact.php", "_blank", 2);	
	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	# $atlnews = get_atlnews(5);
	# $atlreferences = rss_to_html("atlExternalReferences", "/gmt/atl/references/", "short", 4);
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<!-- VIATRA2 Description part -->


	<div id="midcolumn">

		<table width="100%">
			<tr  valign="top">
				<td width="80%">

					<!--  <img src="resources/logo-big.jpg" alt="oAW Logo" />  -->



					  <h3>VIATRA2 Documentation</h3>
				      <p align="JUSTIFY">
							Currently, the VIATRA2 Documentation consists of the following documents:
							<ul>
								<li>
								<h4>VIATRA2 Documentation</h4>
								For current Milestones (3.x), a completely new documentation has been established at the <a href="http://wiki.eclipse.org/VIATRA2">VIATRA2 Wiki</a>.<br/>
								It contains both the users guide and the most up-to-date documentation of the VIATRA2 transformation language.
								You should start here.
								</li>
								<li>
								<h4>The VIATRA2 Transformation Language Specification [obsolete]</h4>
								The document describes the VIATRA2 Transformation Command Language in detail. A VIATRA2 transformation
								consists of graph pattern definitions (Section 3) defined by precise formal semantics (Section 4), and 
								control structures (Section 5).<br/>
								The language specification is archived in PDF format from <a href="ViatraSpecification.pdf">here.</a>
								</li>
								<li>
								<h4>Users' Guide [obsolete]</h4>
								The Users' Guide offered a description of the user interface (which is completely superseded by the wiki),
								howtos for writing model importers and native functions, and a by-example section to get you started 
								with writing VIATRA transformations.<br/>
								Archived in PDF from <a href="viatratut.pdf">here</a>.	
								</li>
								
							</ul>
				      </p>
				        		          	  	
		  		</td>
			</tr>

		</table>
		
		<hr/>
		
		


				<hr class="clearer" />





	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
