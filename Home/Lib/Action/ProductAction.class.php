<?php
// +----------------------------------------------------------------------
// | 启点在线企业网站管理系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2016 kelvinvt.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://www.kelvinvt.com )
// +----------------------------------------------------------------------
// | Design: kelvinvt <kelvinvt@qq.com>
// +----------------------------------------------------------------------

class ProductAction extends CommonAction{
	public function index(){
		$id=(int)I('get.id');
		$this->getarticle($id,"id =%d",$this->lang,'Product');
	}

	public function html(){
		$url=I('get.url');
		$this->getarticle($url,"url ='%s'",$this->lang,'Product');
	}

	public function tags(){
		$this->doTags('Product');
	}


}
?>