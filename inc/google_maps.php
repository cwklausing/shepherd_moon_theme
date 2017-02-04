<?php

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyCAtjl7h3ZqNy9JxPKzYQJfibR14FKymMQ');

}

add_action('acf/init', 'my_acf_init');
