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
								<h4>The VIATRA2 Transformation Language Specification</h4>
								The document describes the VIATRA2 Transformation Command Language in detail. A VIATRA2 transformation
								consists of graph pattern definitions (Section 3) defined by precise formal semantics (Section 4), and 
								control structures (Section 5).<br/>
								The language specification is available in PDF format from <a href="ViatraSpecification.pdf">here.</a>
								</li>
								<li>
								<h4>Users' Guide</h4>
								The Users' Guide offers a description of the user interface (which is a bit outdated, for more 
								accurate descriptions, have a look at the <a href="http://wiki.eclipse.org/VIATRA2">Wiki</a>),
								howtos for writing model importers and native functions, and a by-example section to get you started 
								with writing VIATRA transformations.<br/>
								Get it in PDF from <a href="viatratut.pdf">here</a>.	
								</li>
								<li>
								<h4>Project plan & others</h4>
								The project plan is available <a href="Viatra2_ProjectPlan.pdf">here</a>.<br/>
								Old versions of the users guide:
									<ul>
									<li> <a href="viatratut_October2006.pdf">2006/10/01</a></li>
									<li> <a href="viatratut2.pdf">2006/05/19</a></li>
									<li> <a href="viatratut_old.pdf">2005/10/21</a></li>
									</ul> 
								</li>
							</ul>
				      </p>
				        		          	  	
		  		</td>
			</tr>

		</table>
		
		<hr/>
		
		<div class="homeitem">
			<h3>Quick Navigator</h3>
			<ul>
				<li>
					<table width="100%">
						<tr>

							<td width="80%" valign="bottom">
								<b><a href="../doc/">Documentation</a></b>
		  					</td>
							<td align="right">
								<a href="../doc/"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>

				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="../download/">Download</a></b>
		  					</td>
							<td align="right">

								<a href="../download/"><img align="right" src="../../resources/images/download.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">

								<b><a href="http://wiki.eclipse.org/VIATRA2">VIATRA2 Wiki</a></b>,
		  					</td>
							<td align="right">

							</td>
						</tr>
					</table>
				</li>

				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="http://viatra.inf.mit.bme.hu">VIATRA2 Project website</a></b></a>
								<b><a href="../contact.html">Contact developers</a></b>
		  					</td>

							<td align="right">

							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>

							<td width="80%" valign="bottom">
								<b><a href="https://trac.inf.mit.bme.hu/VIATRA/roadmap">Roadmap</a></b>, <b><a href="https://trac.inf.mit.bme.hu/VIATRA">Bug tracking system</a></b>
		  					</td>
							<td align="right">

							</td>
						</tr>
					</table>
				</li>
				
			</ul>
		</div>


				<hr class="clearer" />





	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
