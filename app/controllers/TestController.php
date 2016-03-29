<?php
/**
* \TestController
*/
class TestController extends BaseController {

  public function test()
  {

//    return View::json(array('f1'=>1,'f2'=>2));

    $smarty=new SmartyConfigured();
    $smarty->assign("f1","dog1");
    $smarty->assign("f2","dog2");
    $smarty->assign("f3","dog3");
    $smarty->assign("f4","dog4");
    $smarty->display("demo.html");

    // or you can return Nothing.
  }
}
