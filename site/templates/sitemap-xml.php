<?php namespace ProcessWire;

/**
 * ProcessWire Template to power a sitemap.xml
 *
 * 1. Copy this file to /site/templates/sitemap-xml.php
 * 2. Add the new template from the admin.
 *    Under the "URLs" section, set it to NOT use trailing slashes.
 * 3. Create a new page at the root level, use your sitemap-xml template
 *    and name the page "sitemap.xml".
 *
 * Note: hidden pages (and their children) are excluded from the sitemap.
 * If you have hidden pages that you want to be included, you can do so
 * by specifying the ID or path to them in an array sent to the
 * renderSiteMapXML() method at the bottom of this file. For instance:
 *
 * echo renderSiteMapXML(array('/hidden/page/', '/another/hidden/page/'));
 *
 *
 */
//

function generateXmlElement($url, $date) {
	return 	"\n<url>" .
	"\n\t<loc>" . $url . "</loc>" .
	"\n\t<lastmod>" . $date . "</lastmod>" .
	"\n</url>";
	//return "\n".$url . "\n" ;
}

function renderSitemapSegment() {
	$out = '';
	$projectPath =  wire('pages')->get("name=proekty")->httpUrl;
	$projectSectionList = wire('pages')->find("has_parent=1213, template=project-category");

	foreach ($projectSectionList as $section) {
		$segmentPath = $section->name;
		$out .= generateXmlElement($projectPath . $segmentPath . '/', date("Y-m-d", $section->modified));
	}
	return $out;
}


function renderSitemapChildren(Page $page) {

	$out = '';
	$newParents = new PageArray();
	$children = $page->children;

	foreach($children as $child) {
		if ($child->viewable()) {
			//$out .= renderSitemapPage($child);
			$out .= generateXmlElement($child->httpUrl, date("Y-m-d", $child->modified));
			if($child->numChildren) $newParents->add($child);
			else wire('pages')->uncache($child);
		}

	}

	foreach($newParents as $newParent) {
		$out .= renderSitemapChildren($newParent);
		wire('pages')->uncache($newParent);
	}

	return $out;
}

function renderSitemapXML(array $paths = array()) {
	$out = '<?xml version="1.0" encoding="UTF-8"?>' . "\n" .
		'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	array_unshift($paths, '/'); // prepend homepage

	foreach($paths as $path) {
		$page = wire('pages')->get($path);
		if(!$page->id) continue;
		$out .=  generateXmlElement($page->httpUrl, date("Y-m-d", $page->modified));
		if($page->numChildren) $out .= renderSitemapChildren($page);
	}

	$out .= renderSitemapSegment();
	$out .= "\n</urlset>";
	return $out;
}

header("Content-Type: text/xml");
echo renderSitemapXML();
