<?php
/**
 *
 */

elgg_register_event_handler('init', 'system', 'coretools_init');

function coretools_init() {
    elgg_register_page_handler('coretools', 'coretools_page_handler');
}

function coretools_page_handler() {
    echo elgg_view_resource('coretools');
}