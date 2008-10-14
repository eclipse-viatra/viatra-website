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
	$pageTitle 		= "VIATRA2 Downloads";
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



					  <h3>VIATRA2 Downloads</h3>
				      <p align="JUSTIFY">
						<h4>VIATRA2 Release3</h4>
						Release3 is the latest and much improved version of VIATRA2. Using this is strongly recommended over any previous version you might have.
						<ul>
							<li><b>SVN:</b> you can pull the sources from SVN.</li>
							<li><b>Update site:</b> You can use the following update site URL to get the latest version: http://viatra.inf.mit.bme.hu/update/R3</li>
						</ul>
				      </p>
				      
				      <p align="JUSTIFY">
				      <h3>Sources</h3>
				      VIATRA2 is released under the <a href="http://www.eclipse.org/org/documents/epl-v10.php">Eclipse Public License v1.0</a>.
				      <h4>Eclipse.org Subversion repository</h4>
				      	<ul>
				      		<li>Release3: <a href="http://dev.eclipse.org/svnroot/modeling/org.eclipse.gmt.viatra2/tags/VIATRA2%20Release3/">http://dev.eclipse.org/svnroot/modeling/org.eclipse.gmt.viatra2/tags/VIATRA2 Release3/</a>
				      		<li>Development version: <a href="http://dev.eclipse.org/svnroot/modeling/org.eclipse.gmt.viatra2/">under this URL</a>.
				      	</ul>
				      </p>
				      

				      
			      
		
		
				        		          	  	
		  		</td>
			</tr>

		</table>
		
		<hr/>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
