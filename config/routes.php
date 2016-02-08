<?php

use NoahBuscher\Macaw\Macaw;

Macaw::haltOnMatch();

Macaw::get('/home/(:all)/(:num)','Controllers\HomeController@home');

/*Macaw::get('/home', function() {
    $con = new Controllers\HomeController();
    $con->home();
});*/

Macaw::get('/success', function() {
    echo "成功！";
});

Macaw::get('/asd', function() {
    echo '根目錄';
});

Macaw::get('/sss/(:num)', function($fu) {
    echo 'sss<br>'.$fu;
});

/*Macaw::get('/(:all)', function($fu) {
    echo '未匹配到路由<br>'.$fu;
});*/

Macaw::$error_callback = function() {

    throw new Exception("路由無匹配項 404 Not Found");

};

Macaw::dispatch();