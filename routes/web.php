<?php



$router->get('/', function () use ($router) {
    return 'Api Home Page';
});


$router->get('/name','DataControllers@getName');


$router->get('/data','DataControllers@getData');
$router->post('/data','DataControllers@createData');
$router->put('/data','DataControllers@updateData');
$router->delete('/data','DataControllers@deleteData');