<?php
/**
 * CORE Tools
 */

// Make sure that only admins can see this page
elgg_admin_gatekeeper();

$page = elgg_extract('page', $vars);

$title = "Welcome to the best page ever.";

$content = elgg_view_title($title);

$content .= elgg_view_form('coretools/newuser');

$content .= <<<PHP
    echo "hello world";

PHP;


$params = array(
    'title' => 'CORE Tools - Dashboard',
    'content' => $content,
    'filter' => '',
);

// Compile the contents of the page
$body = elgg_view_layout('content', $params);

// Display the page
echo elgg_view_page('CORE Tools', $body);
