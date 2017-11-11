<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class GuestbookViewModel extends ViewModel {
   public $viewFields = array(
     'guestbook'=>array('id','title','contents','createtime','username','dig'),
   );
 }

?>