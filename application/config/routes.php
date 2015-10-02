<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['404_override'] = 'findcontent';

//only accept POST verb
$route['token/validate']['post'] = 'token/validate';
$route['token/validate']['get'] = '404_override';


//set language
$route['language/(:any)'] = 'language/set_language/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */