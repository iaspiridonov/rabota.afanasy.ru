<?php namespace Processwire;

//include('helpers/functions.php');

// Shortcuts to link static asserts
$config->urls->static = $config->urls->templates . 'static/';
$config->urls->img = $config->urls->static . 'img/';
$config->urls->fonts = $config->urls->static . 'fonts/';


/*
 * Set paths to default layout and sub-layout files to render in _main.php.
 * They can be overriden in the template file if needed.
 * 
 */
$layoutFilePath	= "{$config->paths->templates}views/layouts/skeleton.layout.php";
$subLayoutFilePath = "views/layouts/default.layout.php";
$viewFilePath = "views/templates/{$page->template}/{$page->template}.view.php";


// SEO tags
region('title', page('seo_title|title'));
region('description', page('seo_description'));
region('keywords', page('seo_keywords'));


// CSS and JS include regions
region('css', '<link rel="stylesheet" href="' . $config->urls->static . 'css/main.css">');
// region('jstop', '<script src="' . $config->urls->static . 'js/top.js"></script>');
region('jsbottom', '<script src="' . $config->urls->static . 'js/main.js"></script>');


// Data Bags
$arParamsCommon = [
	'home' => pages('/'),
];
$arParams = $arParamsCommon;


/* 
 * Define main regions
 * 
 */
// region('breadcrumbs', 
// 	wireRenderFile(
// 		"partials/breadcrumbs.partial.php", 
// 		array(
// 			'viewFile' => $config->paths->templates . "views/partials/breadcrumbs.partial.view.php"
// 		)
// 	)
// );


