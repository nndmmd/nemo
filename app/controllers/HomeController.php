<?php
/**
* \HomeController
*/
class HomeController extends BaseController {

  public function home()
  {
    // mail sample
/*
    Mail::to('13888938787@163.com')->from('13888938787@163.com')
                          ->title('Foo Bar')
                          ->content('<h1>Hello~~</h1>')
                          ->send();
*/
    /*
    // redis sample
    Redis::set('key','value',3000,'ms');
    echo Redis::get('key');
    */

    echo 'Hello Nemo!';
  }
}
