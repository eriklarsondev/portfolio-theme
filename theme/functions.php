<?php
namespace wpdev;

/**
 * include theme classes
 */
include_once dirname(get_template_directory()) . '/classes/index.php';

/**
 * append custom theme config below
 */
$devfolio = new Devfolio();
