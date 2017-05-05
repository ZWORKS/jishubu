<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>查看留言</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该留言？');
		} );
	});
</script>
</head>
<body>
<div class="PageContent">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td class="LineRightBlue1">
				<table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
			  <tr>
				<td width="88%" height="24">留言管理 > 查看留言信息</td>
				<td width="12%" align="right" class="bt_list"><a href="<?php echo U('Feedback/index');?>" class="button_margin">列表</a></td>
			  </tr>
			</table>
			</td>
		  </tr>
		</table>

<form action="<?php echo U('del',array('id'=>$feed['id']));?>" method="post" name="myform">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="ListCategory" style="margin-top:10px;">
		<tr><td style="border:none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="Font">
		<tr class="firstalt">
			<td width="20%" height="25"><span style="padding-left:10px;">标题：</span></td>
			<td><?php echo ($feed["title"]); ?></td>
		</tr>
		<tr class="secondalt">
			<td height="25"><span style="padding-left:10px;">联系人：</span></td>
			<td><?php echo ($feed["name"]); ?></td>
		</tr>							
	
		<tr class="firstalt">
			<td width="20%" height="25"><span style="padding-left:10px;">电话：</span></td>
			<td><?php echo ($feed["tel"]); ?></td>
		</tr>
		
		<tr class="secondalt">
			<td width="20%" height="25"><span style="padding-left:10px;">邮箱：</span></td>
			<td><?php echo ($feed["email"]); ?></td>
		</tr>
		<tr class="firstalt">
			<td height="25"><span style="padding-left:10px;">地址：</span></td>
			<td><?php echo ($feed["add"]); ?></td>
		</tr>		
		<tr class="secondalt">
			<td height="25" width="20%"><span style="padding-left:10px;">留言内容：</span></td>
			<td><?php echo ($feed["contents"]); ?></td>
		</tr>
		<tr class="firstalt">
			<td height="25"><span style="padding-left:10px;">留言时间</span></td>
			<td><?php echo (date("Y-m-d H:i:s",$feed["time"])); ?></td>
		</tr>								
	</table>
	</td></tr>
	</table>
		
    <table width="100%" height="25" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
      <tr>
          <td align="center">
          <input type="hidden" value="15" name="id" />
          <input class="bginput" type="submit" name="delbutton" value=" 删除 " />  
          <input class="bginput" OnClick="javascript:history.go(-1);" type="button" name="delbutton" value=" 返回列表 " />			
          </td>
      </tr>
    </table>
</form>
</div>
</body>
</html>