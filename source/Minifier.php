<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
// $minCss->add(dirname(__DIR__, 1) . "/public/assets/css/erro.css");
$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/styles.css");
$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/lightbox.css");
$minCss->minify(dirname(__DIR__, 1) . "/public/assets/css/style.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/lightbox.js");
$minJs->minify(dirname(__DIR__, 1) . "/public/assets/js/main.min.js");
