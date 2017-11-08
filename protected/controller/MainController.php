<?php
class MainController extends BaseController {
    function actionIndex(){
        // 实例化一个guestbook的模型类
        $guestbook = new Model("guestbook");
        // 用findAll()方法查询guestbook表的全部数据
        $this->records = $guestbook->findAll();
        // 输出看看
        //dump($this->records);
        // 为了清楚到输出，我们的先屏蔽页面输出
        $this->display("guestbook.html");
        /**
         * $this->records这样的变量是控制器的成员变量，而这个写法跟普遍变量（比如说$records）不一样的地方是，$this->records可以在模板内直接使用。
         *  也就是说，在控制器内，通过$this->赋值的变量，都可以在模板内使用；而普通的变量并没有这样的功能。
         *  这也是最基础的模板引擎的用法之一。
         */
    }
    function actionWrite(){
        // 这种dump()提交数据的方式建议大家多用用，这是非常有益的小习惯。
        // 很多时候我们会发现表单失效首先是因为提交数据不对引起的。
        // 一开始就验证提交数据会保证数据不会错。
        dump(arg());

        //构造新建留言的数据
        $newrow = array(
            "title"      => arg("title"),       // 字段一一对应
            "contents"   => arg("contents"),
            "username"   => arg("username"),
            "createtime" => time(),             // time()函数可以产生当前时间戳
        );
        // 实例化一个guestbook的模型类
        $guestbook = new Model("guestbook");
        // 使用Model的create方法把前面的数据插入到数据表中
        $result = $guestbook->create($newrow);
        // 输出一下结果，如果是1，那证明已经插入了1条新的数据
        // dump($result);
        $this->tips("留言成功！",url("main","index"));
        // $this->tips()方法是BaseController类自带的方法，只是弹出一个JS提示。
        // 如果需要更漂亮的提示，可以自行修改该方法的实现。
    }
}