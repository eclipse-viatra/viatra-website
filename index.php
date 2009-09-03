<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$pageTitle 		= "VIATRA2 Home page";
	$pageKeywords	= "";
	$pageAuthor		= "Istvan Rath";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	$Nav->addCustomNav("VIATRA2 Wiki", "http://wiki.eclipse.org/VIATRA2", "_blank", 2);
	$Nav->addCustomNav("Partners and supporters", "http://wiki.eclipse.org/VIATRA2#Partners_and_supporters", "_blank", 2);
	$Nav->addCustomNav("Contact", "http://www.eclipse.org/gmt/VIATRA2/contact.php", "_blank", 2);	
		
	
	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	# $atlnews = get_atlnews(5);
	# $atlreferences = rss_to_html("atlExternalReferences", "/gmt/atl/references/", "short", 4);
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<!-- VIATRA2 Description part -->


	<!-- Middle part -->
	<div id="midcolumn">

	

		<table width="100%">
			<tr valign="top">
				<td width="80%">


<img src="resources/viatralogo_small.png" alt="VIATRA2"/><h3>Project Overview</h3>
<p align="JUSTIFY">The main objective of the VIATRA2 (VIsual Automated model TRAnsformations) framework is to provide a general-purpose support for the entire life-cycle of engineering model transformations including the specification, design, execution, validation and maintenance of transformations within and between various modeling languages and domains. 
</p>
<p align="JUSTIFY">VIATRA2 intends to complement existing model transformation frameworks in providing
</p>

<ul><li> a <a href="http://wiki.eclipse.org/VIATRA2_Model_Space" title="VIATRA2 Model Space"> model space</a> for uniform representation of models and metamodels
</li><li> a <a href="http://wiki.eclipse.org/VIATRA2_Transformation_Language" title="VIATRA2 Transformation Language"> transformation language</a> with 
<ul><li> both declarative and imperative features 
</li><li> based upon popular formal mathematical techniques of <i>graph transformation (GT)</i> and <i>abstract state machines (ASM)</i>

</li></ul>
</li><li> a high performance transformation engine 
<ul><li> supporting <b>incremental model transformations</b>
</li><li> trigger-driven <b>live transformations</b> where complex model changes may trigger execution of transformations
</li><li> handling well over 100,000 model elements (see our <a href="http://wiki.eclipse.org/ViatraBenchmarks" class="new" title="ViatraBenchmarks"> benchmarks</a>)

</li></ul>
</li><li> with main <a href="http://wiki.eclipse.org/TargetApplicationDomain" title="TargetApplicationDomain"> target application domains</a> in
<ul><li> model-based tool integration framework 
</li><li> model analysis transformations
</li></ul>
</li></ul>
<p>Further issues frequently asked by users:
</p>
<ul><li> <a href="http://wiki.eclipse.org/Standard_Conformance_of_VIATRA2" title="Standard Conformance of VIATRA2"> Conformance to standards</a>

</li><li> <a href="http://wiki.eclipse.org/VIATRA2_Known_Uses" title="VIATRA2 Known Uses"> Known uses of VIATRA2</a>
</li></ul>
</p>

		</table>
		
		<hr/>
		
<!-- QUICK NAVIGATOR PART -->

		<div class="homeitem">
			<h3>Quick Navigator</h3>
			<ul>
				<li>
					<table width="100%">
						<tr>

							<td width="80%" valign="bottom">
								<b><a href="doc/">Documentation</a></b>
		  					</td>
							<td align="right">
								<a href="doc/"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>

				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="download/">Download</a></b>
		  					</td>
							<td align="right">

								<a href="download/"><img align="right" src="../resources/images/download.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">

								<b><a href="http://wiki.eclipse.org/VIATRA2">VIATRA2 Wiki</a></b>
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
								<b><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=GMT">Report bugs</a></b>
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
								<b><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.viatra2">Newsgroup</a></b>
		  					</td>
							<td align="right">

							</td>
						</tr>
					</table>
				</li>



				
				
			</ul>
		</div>

<!-- VIATRA2 NEWS PART -->

		<div class="homeitem">
			<h3>VIATRA2 News</h3>
				<ul class="midlist">
				<li>
				 <b>October 15<sup>th</sup>&nbsp;2008</b><br/>
				 VIATRA project migration complete, we are now official part of the Modeling project (as the rest of GMT).<br/>
                  The homepage was updated with new sections, further additions to the wiki. The official Release3 source tree is available from Eclipse.org SVN as well as our new update site (check the downloads section).
              	</li>
				<li>
				 <b>June 2<sup>th</sup>&nbsp;2008</b><br/>
				 New VIATRA2 Release available: VIATRA2 Release3 (update site:<a href="http://viatra.inf.mit.bme.hu/update/R2">http://viatra.inf.mit.bme.hu/update/R3</a><br/>
                  New homepage, wiki content under extension.
              	</li>
				
				<li>
				 <b>October 17<sup>th</sup>&nbsp;2007</b><br/>
                  New VIATRA2 Release 2 update site available: <a href="http://viatra.inf.mit.bme.hu/update/R2">here</a><br/>
                  Expect a new homepage, new source archive and news soon.
              	</li>
              	<li>
                  <b>April 3<sup>th</sup>&nbsp;2007</b>
                  span class="normal">&nbsp;-&nbsp;</span></td>
                  <td><span class="normal">New VIATRA2 Release 2 CVS Snapshot available: <a href="download/viatra2r2_cvs20070401.zip">Download</a>
                  </span></td>
                  
                </li>
				<li>
                  <b>October 10<sup>th</sup>&nbsp;2006</b><br/>
                 VIATRA2 Release 2 docs updated: <a href="doc/viatratut_October2006.pdf">PDF</a><br/>
                  VIATRA2 Release 2 CVS Snapshot available: <a href="download/viatra2r2_cvs20061010.zip">Download</a>
                </li>
				<li>
                  <b>July 28<sup>th</sup>&nbsp;2006</b><br/>
					VIATRA2 Release 2 docs updated and are available for download from <a href="doc/viatratut2.pdf">here</a>
                </li>              
                 <li>
					<b>July 25<sup>th</sup>&nbsp;2006</b><br/>
                  VIATRA2 Release 2 is now available Through the  <a href="http://arwen.mit.bme.hu:8080/viatraupdate">official update site</a>. (recommended version for the current release: Eclipse 3.1)
                   The new (Release 2) sources are available under <a href="http://dev.eclipse.org/viewcvs/index.cgi/gmt-home/subprojects/VIATRA2/?cvsroot=Technology_Project">CVS</a>.
                </li>
             
                <li>
                  <b>Oct 21<sup>th</sup>&nbsp;2005</b><br/>
                  VIATRA2 is now available in the <a href="download/index.html">download section</a>. The sources are available under <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/VIATRA2/">CVS</a>.
                </li>
                <li>
                  <b>Sep 01<sup>th</sup>&nbsp;2005</b><br/>
                  Start of a new GMT component: VIATRA2. It will be available for download soon.
                </li>
				</ul>
		</div>
		<hr class="clearer" />


<!-- VIATRA2 PRESENTATION PART -->


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
