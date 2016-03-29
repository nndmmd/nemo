<?php
/**
* \AppStoreController
*/
class AppStoreController extends BaseController {

  public $smarty=null;

  function AppStoreController() {
    parent::__construct();

    $this->smarty=new SmartyConfigured();
    $this->smarty->assign("app_store_home",parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
  }

  public function home() {
    $this->smarty->display("app-home.html");
  }

  public function detail() {
    $app_detail=AppDetail::first();

    $this->smarty->assign("app_detail",$app_detail);

    $this->smarty->display("app-detail.html");
  }

}
