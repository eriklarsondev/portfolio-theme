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

/******************************************************************************
 ******************************************************************************
 *** menu location config
 ******************************************************************************
 *****************************************************************************/

$devfolio->add_menu('homepage hero');

/******************************************************************************
 ******************************************************************************
 *** custom post type config
 ******************************************************************************
 *****************************************************************************/

$devfolio->add_post_type(
    'content block',
    (object) [
        'icon' => 'align left'
    ]
);

$devfolio->add_post_type(
    'project',
    (object) [
        'icon' => 'desktop',
        'features' => ['thumbnail', 'title', 'editor', 'custom fields']
    ]
);

$devfolio->add_post_type(
    'tech',
    (object) [
        'collection' => 'Technologies',
        'icon' => 'editor code',
        'features' => ['title', 'custom fields']
    ]
);

$devfolio->add_post_type(
    'experience',
    (object) [
        'collection' => 'Work',
        'icon' => 'coffee',
        'features' => ['title', 'editor', 'custom fields']
    ]
);
