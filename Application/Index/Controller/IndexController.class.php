<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
	public function get_POST(){
		$this->ajaxReturn(array('status'=> "800","data" => "100","ajax"=>"true"));
	}
}