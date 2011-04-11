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

<div id="midcolumn">

		<table width="100%">
			<tr  valign="top">
				<td width="80%">

					<h3>Reporting bugs, newsgroups, mailing list</h3>
				      <p align="JUSTIFY">
							
							<ul>
								<li>Bugzilla: You are welcome to report bugs to our bugzilla, reachable at the <a href="https://bugs.eclipse.org/bugs/describecomponents.cgi?product=GMT">GMT Bugzilla</a>. Don't forget to specify the <b>VIATRA2</b> keyword as the component.</li>							
								<li>Newsgroup: <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.viatra2">VIATRA2</a>, <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.modeling.gmt">GMT</a></li>
								<li>Developer mailing list: <a href="mailto:viatra-dev <AT> inf.mit.bme.hu">here</a></li>
							</ul>
				      </p>

					  <h3>VIATRA2 Developer Team</h3>
				      <p align="JUSTIFY">
							We are glad to provide support if you would like to use VIATRA2. We're working on adding content to the Wiki,
							as well as extending the documentation.
							<ul>
								<li>Project leader: <a href="http://mit.bme.hu/~varro">Dániel Varró</a></li>
								<li>Principal advisor: <a href="http://mit.bme.hu/~pataric">András Pataricza</a></li>
								<li>Chief Technological Architect: <a href="http://mit.bme.hu/~rath">István Ráth</a>
								<li>Transformation Engine: <a href="http://mit.bme.hu/~ahorvath">Ákos Horváth</a>, <a href="http://cs.bme.hu/~gervarro">Gergely Varró</a></li>
								<li>Incremental pattern matcher: <a href="http://mit.bme.hu/~bergmann/">Gábor Bergmann</a></li>
								<li>VTCL Parser: Daniel Varro, <a href="http://mit.bme.hu/~ujhelyiz/">Zoltán Ujhelyi</a></li>
								<li>Model space visualization: <a href="http://mit.bme.hu/~hegedusa/">Ábel Hegedüs</a>, Zoltán Ujhelyi</li>
								<li>Documentation: Dániel Varró, <a href="http://mit.bme.hu/~polgar">Balázs Polgar</a>, Gábor Bergmann, Ábel Hegedüs, Zoltán Ujhelyi, István Ráth, Ákos Horváth</li>
								<li>Other contributors from the past: <a href="http://mit.bme.hu/~abalogh">Andras Balogh</a> (technological architect), <a href="http://mit.bme.hu/~pasztor">Péter Pásztor</a> (transformation engine), <a href="http://mit.bme.hu/~dtoth">Dániel Tóth</a> (transformations, plugins); András Schmidt and Dávid Vágó (VIATRA2 R2). 
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
