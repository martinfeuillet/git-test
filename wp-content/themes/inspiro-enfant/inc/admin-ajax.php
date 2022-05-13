<?php



function process_contact_form(){
  $api_response = wp_remote_get('https://swapi.dev/api/films/1/');
  $api_response_body = wp_remote_retrieve_body($api_response);

  wp_send_json_success([$api_response_body, $_REQUEST]);
}
// function process_contact_form trigger quand on arrive sur localhost/wp-admin/admin-ajax.php?action=send_contact_form
add_action('wp_ajax_send_contact_form', 'process_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'process_contact_form');