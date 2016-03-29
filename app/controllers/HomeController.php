<?php
/**
* \HomeController
*/
class HomeController extends BaseController {

  public function home()
  {
    // mail sample
/*
    Mail::to('admin@nndmmd.com')->from('admini@nndmmd.com')
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
