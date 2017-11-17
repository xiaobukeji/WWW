<?php
namespace Admin\Controller;
use Admin\Controller;
/**
 * Other
 */
class OtherController extends BaseController
{
	/**
	 * [statis 每日统计]
	 * @return [type] [description]
	 */
	public function statis(){
		
		// $where['statistics_everyday.agent_id'] = array('eq',"1013");
		// $where['statistics_everyday.agent_id'] = array('eq',"1014");
		// $where['statistics_everyday.agent_id'] = array('eq',"1015");
		// $where['statistics_everyday.agent_id'] = array('eq',"1016");
		// $where['statistics_everyday.agent_id'] = array('eq',"1017");
		// $where['statistics_everyday.agent_id'] = array('eq',"1018");
		// $where['statistics_everyday.agent_id'] = array('eq',"1022");
		// $where['_logic'] = 'or';
		
		//$where = "agent_id=1013 or agent_id=1014 or agent_id=1015";
		$where['statistics_everyday.agent_id'] = array('in',"1014,1016,1017,1018,1022");
		$model = D('OtherView')->where($where);

		$count = $model->where($where)->count();
		$Page = new \Extend\Page($count,20);
		$show = $Page->show();
		$statis = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('statistics_everyday.data_date DESC')->select();
		$this->assign('model',$statis);
		$this->assign('page',$show);
		$this->display();
	}
}
