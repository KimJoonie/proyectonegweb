$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@login');

$router->get('/register', 'AuthController@register');
$router->post('/register', 'AuthController@register');

$router->get('/logout', 'AuthController@logout');
$router->get('/catalog', 'ProductController@index');
$router->get('/product/show/:id', 'ProductController@show');