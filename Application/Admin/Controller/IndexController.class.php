<?php
namespace Admin\Controller;
use Admin\Controller;

class IndexController extends BaseController{

    public function index(){
    	$User 		= M("member");		// 实例化Manber对象
    	$userCount 	= $User->count();	// 获取用户数
    	$Post 		= M("post");		// 实例化Page对象
    	$postCount	= $Post->count();	// 获取文章数
    	$Links		= M("links");		// 实例化Links对象
    	$linksCount = $Links->count();	// 获取链接数

    	$data['usercount']	= $userCount;
    	$data['postcount']	= $postCount;
    	$data['linkscount'] = $linksCount;

    	$this->assign('data',$data);
        $this->display();
    }
}
