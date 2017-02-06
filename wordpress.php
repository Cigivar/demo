<?php
add_filter('the_content', 'wpr_google_plusone');
function wpr_google_plusone($content) {
    $content = $content.'<div class="plusone"><g:plusone size="tall" href="'.get_permalink().'"></g:plusone></div>';
    return $content;
}
add_action ('wp_enqueue_scripts','wpr_google_plusone_script');
function wpr_google_plusone_script() {
    wp_enqueue_script('google-plusone', 'https://apis.google.com/js/plusone.js', array(), null);
}