<?php
namespace Admin\Controller;
use Admin\Controller;

class IndexController extends BaseController{

    public function index(){
    	$User 		        = M("member");		    // 实例化Manber对象
    	$userCount 	        = $User->count();	    // 获取用户数
    	$Post 		        = M("post");		    // 实例化Page对象
    	$postCount	        = $Post->count();	    // 获取文章数
    	$Links		        = M("links");		    // 实例化Links对象
    	$linksCount         = $Links->count();	    // 获取链接数
        $GuestBook          = M("guestbook");       // 实例化guestbook对象
        $guestBookCount     = $GuestBook->count();  // 获取留言数

    	$data['usercount']	    = $userCount;
    	$data['postcount']	    = $postCount;
    	$data['linkscount']     = $linksCount;
        $data['guestbookcount'] = $guestBookCount;

    	$this->assign('data',$data);
        $this->display();
    }

    /**
     * 清除缓存
     */
    public function cache(){
        $rtim=del_dir(APP_PATH.'/Runtime');
        if($rtim){
            $this->success('清除成功',false);
        }else{
            $this->error('清除失败');
        }
    }

}
