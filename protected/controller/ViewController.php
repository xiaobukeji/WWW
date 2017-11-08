<?php
class ViewController extends BaseController {
	function actionShow(){
		// 把提交的upid参数，作为值来构造一个查询条件数组，
		// 条件是：把id字段中等于提交upid参数值的记录查询出来
		$condition = array("id" => arg("upid"));
		$guestbook = new Model("guestbook");
		// 通过find()方法，按条件数据进行查询，
		// find返回结果是对应记录的一维数组
		$result = $guestbook->find($condition);
		// 加上时间就显示好看了
		$result["createtime"] = date("Y年m月d日 H:i:s", $result["createtime"]);
		// 输出看看
		//dump($result);
		header('Content-type: application/json');
		echo json_encode($result);
	}

	function actionDig(){
		// 同样的，首先是根据提交参数确定条件
		$condition = array("id" => arg("upid"));
		$guestbook = new Model("guestbook");
		// 先查出当前记录的点赞数是多少
		$result = $guestbook->find($condition);
		// 然后把点赞加一
		$dig = $result["dig"] + 1;
		// 建新的更新数据，跟create相似的
		// 是需要更新的字段名对应新的值
		$newrow = array("dig" => $dig);
		// 执行更新操作
		// 这里update的意思是把符合$condition条件的记录
		// 按$newrow设定的字段，把这些字段的值改成新值
		$guestbook->update($condition, $newrow);
		
		// 然后直接显示更新后的点赞数
		echo $dig;
	}
	function actionDel(){
		// 同样的，首先是根据提交参数确定条件
		$condition = array("id" => arg("upid"));
		$guestbook = new Model("guestbool");

		// 直接返回结果，实际上这个结果是被忽略的
		echo $guestbook->delete($condition);
	}
}