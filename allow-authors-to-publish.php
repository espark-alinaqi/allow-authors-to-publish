<?php
/**
 * Plugin Name: Allow Authors to Publish
 * Plugin URI: https://yourwebsite.com/
 * Description: Allows authors to publish their own posts without requiring approval from an administrator or editor.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com/
 */

function allow_authors_to_publish() {
    $author = get_role('author');
    $author->add_cap('publish_posts');
}
add_action('init', 'allow_authors_to_publish');
