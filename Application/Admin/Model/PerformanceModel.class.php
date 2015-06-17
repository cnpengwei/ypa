<?php
namespace Admin\PerformanceModel;
use Think\Model;

class PerformanceModel extends Model{
    protected $tableName = 'performances';

    # 关联关系
    protected $_link = array(
        'Profile'=> self::HAS_ONE,
    );

    # 自动完成是ThinkPHP提供用来完成数据自动处理和过滤的方法，
    # 使用create方法创建数据对象的时候会自动完成数据处理.
    # 在ThinkPHP使用create方法来创建数据对象是更加安全的方式，
    # 而不是直接通过add或者save方法实现数据写入。
    protected $_auto = array(
        array('title','htmlspecialchars',3, function),
        array('keywords','htmlspecialchars',3, function),
        
    );
    #自动验证是ThinkPHP模型层提供的一种数据验证方法，可以在使用create创建数据对象的时候自动进行数据验证。
    protected $_validate = array(
        array('title','require','标题不能为空'),
        array('keywords','require', '内容不能为空'),
    );

}

