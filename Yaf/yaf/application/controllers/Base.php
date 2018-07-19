<?php 
class BaseController extends Yaf_Controller_Abstract{
protected function success($url,$message,$time = 3){
		$this->jump($url,$message,$time,'success');
	}
	protected function error($url,$message,$time = 3){
		$this->jump($url,$message,$time,'error');
	}

	private function jump($url,$message='操作成功',$time = 3,$status = 'success'){
		echo <<<STR
    <!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="{$time};URL={$url}">
	<title>提示页面</title>
	<style type="text/css">
	img{text-align:center;margin-top:50px;margin-bottom:20px;}
	.info{text-align:center;font-size:24px;font-family:'微软雅黑';font-weight:bold;}
	success{color:#060;}
	error{color:#F00;}
	</style>
	</head> 
	<body>
	<div id="img"><img src="/public/{$status}.png" width="160" height="200" /></div>
	<div id='{$status}' class="info">{$message}</div>
	</body>
	</html>
STR;
exit;

	}
	
	public function indexAction(){
		$msgs = (new MsgModel())->get('select * from msg');
		$this->getView()->assign('msgs',$msgs);
		return $this->getView()->render('/msg/index.phtml');
	}
}