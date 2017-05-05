<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>欢迎进入启点在线企业网站管理后台系统</title>
<style type="text/css">
<!--
.STYLE1 {font-family: Arial, Helvetica, sans-serif}
.STYLE3 {font-size: 10px}
.STYLE4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</head>
<body>

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="LineRightBlue1">
            <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
          <tr>
            <td width="88%" height="24"><strong style="color:#697e95;">快捷操作：</strong></td>
            <td width="12%" align="right" class="bt_add"></td>
          </tr>
        </table>
        </td>
      </tr>
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #BFC9D2 solid; border-top:none;">
      <tr>
        <td height="92">
          <div class="panel">
            <ul>
              <li><a href="<?php echo U('Config/index');?>"><span><img src="../Public/images/blue_2010/config.gif" alt="" hspace="20" border="0"></span><p>网站设置</p></a></li>
              <li><a href="<?php echo U('List/index');?>"><span><img src="../Public/images/blue_2010/company.gif" alt="" hspace="20" border="0" /></span><p>公司简介</p></a></li>
              <li><a href="<?php echo U('Product/index');?>"><span><img src="../Public/images/blue_2010/products.gif" alt="" hspace="20" border="0" /></span><p>产品管理</p></a></li>
              <li><a href="<?php echo U('New/index');?>"><span><img src="../Public/images/blue_2010/news.gif" alt="" hspace="20" border="0" /></span><p>新闻管理</p></a></li>
              <li><a href="<?php echo U('Photo/index');?>"><span><img src="../Public/images/blue_2010/photo.gif" alt="" hspace="20" border="0" /></span><p>图片管理</p></a></li>
              <li><a href="<?php echo U('Download/index');?>"><span><img src="../Public/images/blue_2010/download.gif" alt="" hspace="20" border="0" /></span><p>下载管理</p></a></li>
              <li><a href="<?php echo U('Flash/index');?>"><span><img src="../Public/images/blue_2010/banner.gif" alt="" hspace="20" border="0"></span><p>广告管理</p></a></li>
              <li><a href="<?php echo U('User/index');?>"><span><img src="../Public/images/blue_2010/user.gif" alt="" hspace="20" border="0" /></span><p>用户管理</p></a></li>
              <li><a href="<?php echo U('Link/index');?>"><span><img src="../Public/images/blue_2010/link.gif" alt="" hspace="20" border="0" /></span><p>友情链接</p></a></li> 
            </ul>
          </div>
        </td>
      </tr>
	</table>

  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_15">&nbsp;系统基本信息</li>
      <li class="li_40"></li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
        <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15">&nbsp;版本：</li>
            <li class="li_40">PHP版 V1</li>
        </ul>
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15">&nbsp;<?php echo ($key); ?>：</li>
            <li class="li_40"><?php echo ($v); ?></li>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15">&nbsp;技术支持：</li>
            <li class="li_40"><a target="blank" href="http://wpa.qq.com/msgrd?
v=3&uin=15038883&Site=与启点在线(Kelvinvt)交谈&menu=yes"><img border="0" 
SRC=http://wpa.qq.com/pa?p=1:15038883:5 alt="与启点在线(Kelvinvt)交谈" align="absmiddle"></a> <a title='点击直接进行会话'style="margin-left: 5px;" href="tencent://message/?uin=15038883&amp;Site=启点在线&amp;Menu=yes"><img src="../Public/images/help.gif"></a></li>
        </ul>
        <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15">&nbsp;官方网站：</li>
            <li class="li_40"><a href="http://www.kelvinvt.com" target="_blank">www.kelvinvt.com</a></li>
        </ul>
    </div>
  </div>
  
<table width="100%" border="0" cellpadding="3" cellspacing="1">
  <tr>
    <td height="30" bgcolor="#FFFFCC"><li class="li_15">&nbsp;&nbsp;&nbsp;官方网站 | 新闻动态</li></td>
  </tr>
  <tr>
    <td bgcolor="#EBF2F9">
<iframe src='http://www.kelvinvt.com/inc/TY.asp' width=100% height=118 frameborder='0' style='overflow:auto'></iframe>
	</td>
  </tr>
</table>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            
            </td>
            <td width="92%" align="center">
 
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>