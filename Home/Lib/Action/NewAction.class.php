﻿<?php
// +----------------------------------------------------------------------
// | 技术部PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2016 kelvinvt.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://www.kelvinvt.com )
// +----------------------------------------------------------------------
// | Design: kelvinvt <kelvinvt@qq.com>
// +----------------------------------------------------------------------

class NewAction extends CommonAction{
	public function index(){
		$id=(int)I('get.id');
		$this->getarticle($id,"id =%d",$this->lang,'New');
	}

	public function html(){
		$url=I('get.url');
		$this->getarticle($url,"url ='%s'",$this->lang,'New');
	}

	public function tags(){
		$this->doTags('New');
	}
	
}
?>