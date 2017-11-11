<?php
namespace Admin\Model;
use Think\Model;
class GuestbookModel extends Model{
    protected $_validate = array(
        array('title','require','请填写留言标题！'), //默认情况下用正则进行验证
        array('contents','require','请填写留言内容！'), //默认情况下用正则进行验证
        array('username','require','请填写留言者！'), //默认情况下用正则进行验证
    );
    protected $_auto = array ( 
        array('createtime','time',1,'function'), // 对update_time字段在更新的时候写入当前时间戳
    );
}