<?php

function setup_features() {
    /**
     * add a new content type. Pass in the singuar name
     * and optionally an array of attributes and labels.
     *
     * https://codex.wordpress.org/Function_Reference/register_post_type
     */
    RooftopCMS::addContentType('SDK Language');
    RooftopCMS::addContentType('Product Feature');
    RooftopCMS::addContentType('Product Plan');


    /**
    * add a new taxonomy. The send argument can be either:
     *
     * string: the content type you're adding this taxonomy to
     * array: an array of content types
     * string 'all' - to add the taxonomy to of your publicly accessible content types
     */
    RooftopCMS::addTaxonomy('Product Benefits', 'Product Plan');
}

add_action('init', 'setup_features', 20);
?>
