<?php
class MainController extends BaseController {
	function actionIndex(){
        $this->display("guestbook.html");
	}
}