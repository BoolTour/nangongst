<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'    =>'mysql',
    'DB_HOST'    =>'localhost',//localhost
    'DB_NAME'    =>'ngst',
    'DB_USER'    =>'root',//root
    'DB_PWD'     =>'root',//root
    'DB_PORT'    =>'3306',//3306
    'DB_PREFIX'  =>'ngst_',
    
    'URL_CASE_INSENSITIVE'  =>  true,      //开启不区分大小写
    'SHOW_PAGE_TRACE' =>true,  //页面调试

    /********* MD5时用来复杂化的 ****************/
    'MD5_KEY' => 'fdsa#l329$9lfds!129',
    /********** 图片相关的配置 ************/
    'IMG_maxSize' => '10M',
    'IMG_exts' => array('jpg', 'pjpeg', 'bmp', 'gif', 'png', 'jpeg','mp3','zip','gzip','octet-stream'),
    'IMG_rootPath' => './Application/Public/Uploads/',      //上传和删除图片的时候使用的路径
    'IMG_URL' => '/myself/Application/Public/Uploads/',    //显示图片的路径，必须使用绝对路径
    /********** 修改I函数底层过滤时使用的函数 ***********/
    'DEFAULT_FILTER' => 'trim,removeXSS',
);