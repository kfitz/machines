<?php if (!defined('PmWiki')) exit();

/************************************************************************************
 * FUNCTION DEFAULTS
 ************************************************************************************/

global $barthelmod_bodyfontsize;
global $barthelmod_bodyfontfamily;
global $barthelmod_headerfontfamily;
global $barthelmod_postentryalignment;
global $barthelmod_wrapperwidth;
global $barthelmod_sidebartext;

global $barthelmod_sidebar_visible, $EnableMenuBar;

/*
if ($EnableMenuBar != 1) {
	$barthelmod_sidebar_visible = "style=\"display: none;\"";
}

$barthelmod_sidebartext_visible = FALSE;

*/

/************************************************************************************
 * FUNCTION CALLS
 ************************************************************************************/

function barthelmod_bodyfontsize() {
	if (isset($barthelmod_bodyfontsize)) {
		print 'body { font-size: ';
		print $barthelmod_bodyfontsize;
		print "; }\n";
	}
	else {
		print 'body { font-size: ';
		print '75%';
		print "; }\n";
	}
}

function barthelmod_bodyfontfamily() {
	if (isset($barthelmod_bodyfontfamily)) {
		print 'body { font-family: ';
		print $barthelmod_bodyfontfamily;
		print "; }\n";
	}
	else {
		print 'body { font-family: ';
		print 'arial, helvetica, sans-serif';
		print "; }\n";
	}
}	

function barthelmod_headerfontfamily() {
	if (isset($barthelmod_headerfontfamily)) {
		print 'div.post-header, h2.post-title, p.post-date-single, h2.post-title-single, div.post-entry h1, div.post-entry h2, div.post-entry h3, div.post-entry h4, div.post-entry h5, div.post-entry h6, div.post-entry blockquote, div.post-footer, h3#comment-count, h4#comment-header, div#comments ol li p.comment-metadata, h4#respond { font-family: ';
		print $barthelmod_headerfontfamily;
		print "; }\n";
	}
	else {
		print 'div#content h1, div#content h2 { font-family: ';
		print 'georgia, times, serif';
		print "; }\n";
	}	
}

function barthelmod_postentryalignment() {
	if (isset($barthelmod_postentryalignment)) {
		print 'div#content p { text-align: ';
		print $barthelmod_postentryalignment;
		print "; }\n";
	}
	else {
		print 'div#content p { text-align: ';
		print 'left';
		print "; }\n";
	}
	
}

function barthelmod_wrapperwidth() {
	if (isset($barthelmod_wrapperwidth)) {
		print 'div#wrapper { width: ';
		print $barthelmod_wrapperwidth;
		print "; }\n";
	}
	else {
		print 'div#wrapper { width: ';
		print '90%';
		print "; }\n";
	}
}

function barthelmod_sidebartext() {
	if (empty($barthelmod_sidebartext) && $barthelmod_sidebartext_visible) {
		print '<li><h2>About</h2><p>Lorem ipusm text here can be customized in the <em>Presentation > blog.txt Themes Options</em> menu. You can also select within the options to exclude this section completely. <em>Most</em> XHTML <strong>tags</strong> will <span style="text-decoration:underline;">work</span>.</p></li>';
	}
}

function barthelmod_copyrightyear() {
	print date("Y");
}
