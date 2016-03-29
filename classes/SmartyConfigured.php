<?php

    class SmartyConfigured extends Smarty {

        function SmartyConfigured() {

            parent::__construct(); 

            $config = require BASE_PATH.'/config/smarty.cfg.php';
            $this->template_dir=$config['template_dir'];
            $this->compile_dir=$config['compile_dir'];
            //$this->config_dir=$config['config_dir'];
            $this->cache_dir=$config['cache_dir'];
            $this->cache_lifetime =$config['cache_lifetime'];
            $this->caching =$config['caching'];
            $this->left_delimiter =$config['left_delimiter'];
            $this->right_delimiter =$config['right_delimiter'];
        }

    }
