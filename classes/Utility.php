<?php

    use Illuminate\Database\Capsule\Manager as Capsule;

    class Utility {

        static public function uuid()   
        {   
            $str = md5(uniqid(mt_rand(), true));   
            $uuid  = substr($str,0,8) . '-';   
            $uuid .= substr($str,8,4) . '-';   
            $uuid .= substr($str,12,4) . '-';   
            $uuid .= substr($str,16,4) . '-';   
            $uuid .= substr($str,20,12);   
            return $uuid;   
        }   

        static public function mv_up_file($key_name,$file_path)
	{
            // 每日一个目录
            $d=date("Ymd");
            $dir=$file_path.'/'.$d;
            if(is_dir($dir)!=true) {
                mkdir($dir,0777);
            }

            $file=$_FILES[$key_name];

            // 生成新的文件名
            $ext=pathinfo($file['name'],PATHINFO_EXTENSION);

            $new_name=md5(uniqid(mt_rand(),true).$file['name']).'.'.$ext;

            move_uploaded_file($file['tmp_name'],$dir.'/'.$new_name);

            return  $d.'/'.$new_name;
	}

        /*********** 使用下列两个函数时需要提前打开setAsGlobal();
        // 例如：
        // Eloquent ORM
        $capsule = new Capsule;
        $capsule->addConnection(require BASE_PATH.'/config/database.php');
        $capsule->setAsGlobal(); // 设置全局静态可访问后续方可使用Capsule::xxxxx
        $capsule->bootEloquent();
        ****/
 
        // Build SQL 之前使用 
        static public function enable_query_log()
        {
            Capsule::connection()->enableQueryLog();
        }

        // Build SQL 之后使用查看SQL语句
        static public function get_last_query()
        {
            return end(Capsule::getQueryLog());
        }

    }

