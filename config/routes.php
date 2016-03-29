<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'HomeController@home');
Macaw::get('/test', 'TestController@test');
Macaw::get('/appstore', 'AppStoreController@home');
Macaw::get('/appdetail', 'AppStoreController@detail');

Macaw::error(function() {
  //throw new Exception("404 Not Found");
  echo '404 :: Not Found';
});

Macaw::dispatch();
