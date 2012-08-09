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
		
	
	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	# $atlnews = get_atlnews(5);
	# $atlreferences = rss_to_html("atlExternalReferences", "/gmt/atl/references/", "short", 4);
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


<!-- add incubation branding -->
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/what-is-incubation.php"><img 
        align="center" src="/images/egg-incubation.png" 
        border="0" alt="Incubation" /></a></div>
 </div>
</div>

<!-- VIATRA2 Description part -->

	<div id="midcolumn">

		<table width="100%">
			<tr  valign="top">
				<td width="80%">

					<!--  <img src="resources/logo-big.jpg" alt="oAW Logo" />  -->



					  <h3>VIATRA2 Downloads</h3>
						<p align="JUSTIFY"><b>Important note:</b> as VIATRA2 is in incubation, "Milestone" versions are NOT releases and just represent various stages of development.</p> 
				      <p align="JUSTIFY">
				        <h4>VIATRA2 Milestone 3.2</h4>
						Milestone 3.2 is the most current version of VIATRA2. Using this is strongly recommended over any previous version you might have. The milestone notes are found <a href="http://wiki.eclipse.org/VIATRA2/ReleaseNotes3.2">here</a>.
						<ul>
							<li><b>SVN:</b> you can pull the sources from SVN.</li>
							<li><b>Update site:</b> You can use the following official update site URL to get the latest version:<br/> <b>http://download.eclipse.org/modeling/gmt/viatra2/update/</b></li>
							<li><b>Alternative update site:</b> You can also use the following secondary update site URL to get the latest nightly version:<br/> <b>http://static.inf.mit.bme.hu/viatra/update/nightly/</b></li>
						</ul><br/>
				      
				        <h4>VIATRA2 milestone 3.1</h4>
						Milestone 3.1 is the previous version of VIATRA2. milestone notes are <a href="http://wiki.eclipse.org/VIATRA2/ReleaseNotes3.1">here</a>.
						<ul>
							<li><b>SVN:</b> you can pull the sources from SVN.</li>
							<li><b>Update site:</b> You can use the following official update site URL to get the latest version:<br/> <b>http://download.eclipse.org/modeling/gmt/viatra2/update/</b></li>
						</ul><br/>
						<h4>VIATRA2 Milestone 3</h4>
						Milestone 3 is an archived version of VIATRA2.
						<ul>
							<li><b>Update site:</b> You can use the following archived update site URL to get this old version:<br/> <b>http://download.eclipse.org/modeling/gmt/viatra2/update/R3/</b></li>
						</ul>
				      </p>
				      
				      <p align="JUSTIFY">
				      <h3>Sources</h3>
				      VIATRA2 is released under the <a href="http://www.eclipse.org/org/documents/epl-v10.php">Eclipse Public License v1.0</a>.
				      <!-- <h4>BME.hu Subversion repository</h4>
				      	<ul>
				      		<li>milestone 3.2 (development version): <a href="https://viatra.inf.mit.bme.hu/svn/core/trunk/">https://viatra.inf.mit.bme.hu/svn/core/trunk/</a>
				      	</ul> -->
				      <h4>Eclipse.org Subversion repository</h4>
				      	<ul>
				      		<li>Milestone 3.1: <a href="http://dev.eclipse.org/svnroot/modeling/org.eclipse.gmt.viatra2/tags/VIATRA2%20Release%203.1/">http://dev.eclipse.org/svnroot/modeling/org.eclipse.gmt.viatra2/tags/VIATRA2 Release 3.1/</a>
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
