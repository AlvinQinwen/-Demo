<?php 
class MsgController extends BaseController{
	
	public function addAction(){
		if ($this->getRequest()->isPost()) {
			$name = $this->getRequest()->getPost('name');
			$content = $this->getRequest()->getPost('content');
			$result = (new MsgModel())->add("insert into msg(name,content,create_at) values('{$name}','{$content}',".time().")");
			if ($result) {
				$this->success('/msg/index','添加成功');
			}else{
				$this->error('/msg/index','添加失败');
			}
		}
	}
}