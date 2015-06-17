<?php
return array(
	//数据库配置
    'DB_TYPE'               =>  'mysql',
    'DB_HOST'               =>  'localhost',    
    'DB_NAME'               =>  'db_ypa',
    'DB_USER'               =>  'ypa',
    'DB_PWD'                =>  'ypa',
    'DB_PORT'               =>  '3306',
    'DB_PREFIX'             =>  'tb_ypa_',    // 数据库表前缀      
    'DB_PARAMS'             =>  array(), // 数据库连接参数    
    'DB_DEBUG'              =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
    //数据库配置 结束

    //2015-05-24 start
    //在系统的Library目录之外，自定义其他的命名空间,
    //需要注册一个新的命名空间，在应用或者模块配置文件中添加下面的设置参数

    'AUTOLOAD_NAMESPACE' => array('Lib'=> APP_PATH.'Lib'),
    //----------- end
    //'配置项'=>'配置值'
    //'LOAD_EXT_FILE' => 'function.php', //DEPLETED after 3.1
    'DEFAULT_MODULE'    => 'Home',

    'MODULE_ALLOW_LIST' => array('Home','Admin','appc','App','tes'),
    //'MODULE_ALLOW_LIST' => array('Home','appc','App','test'),
    //'URL_MODULE_MAP' => array('test' => 'Admin'), //module map
    'URL_MODEL' => '2',
    //2015-06-07 start
    'URL_CASE_INSENSITIVE' => true,
    'URL_HTML_SUFFIX' => '.html', //设置伪静态后缀名
    'URL_PATHINFO_DEPR'=>'-',
    //2015-06-07 end
);
