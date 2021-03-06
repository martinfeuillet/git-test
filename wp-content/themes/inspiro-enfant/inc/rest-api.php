
<?php



class WPC_REST extends WP_REST_Controller
{

  public function register_routes(){
    
    register_rest_route('wpc/v1', '/stores/(?P<store_id>\d+)', [
      'methods' => WP_REST_Server::READABLE, // GET
      'callback' => [$this, 'get_store_rest']
    ]);

  }

  public function get_store_rest( $request ){

    $store_id = $request['store_id'];

    $store = get_post( $store_id, ARRAY_A );

    $api_response = wp_remote_get('https://swapi.dev/api/films/1/');
    $api_response_body = wp_remote_retrieve_body($api_response);

    $response = new WP_REST_Response( [$store, $api_response_body] );

    $response->set_status( 200 );

    return $response;

  }

}

add_action('rest_api_init', function () {
  if (class_exists('WPC_REST')) {
    $controller = new WPC_REST();
    $controller->register_routes();
  }
});