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
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/menu.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/lightbox.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/background-scroll.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/scroll.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/stick.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/jquery.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/sweetalert2.all.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/request.js");
$minJs->minify(dirname(__DIR__, 1) . "/public/assets/js/main.min.js");
