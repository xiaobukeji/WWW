<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class OtherViewModel extends ViewModel {
	public $viewFields = array(
		'statistics_everyday'=>array('agent_id','data_date','ip_number','uv_number','pv_number'),
		'agent'=>array('real_name'=>'stastis_name', '_on'=>'statistics_everyday.agent_id=agent.id'),
	);
}