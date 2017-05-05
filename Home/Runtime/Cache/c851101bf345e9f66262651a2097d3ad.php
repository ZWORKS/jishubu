<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>在线订购-<?php echo (C("seo_title")); ?></title>
    <meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
    <meta name="description" content="<?php echo (C("seo_description")); ?>" />
    <meta name="applicable-device"content="pc,mobile">
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
<link href="../Public/css/bxslider.css" rel="stylesheet">
<link href="../Public/css/style.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="../Public/js/bxslider.min.js"></script>
<script src="../Public/js/common.js"></script>
<script src="__PUBLIC__/js/bootstrap.js"></script>
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <SCRIPT language=javaScript>
    function CheckJob()
    {
        if (document.myform.product.value.length==""){
            alert ("产品名称不能为空！");
            document.myform.product.focus();
            return false;
        }
        if (document.myform.name.value.length==""){
            alert ("联系人不能为空！");
            document.myform.name.focus();
            return false;
        }
        if (document.myform.tel.value.length==""){
            alert ("电话不能为空！");
            document.myform.tel.focus();
            return false;
        }
     }
    </SCRIPT>
  </head>
  <body>
  
<header>

<div class="container">
  <div class="row">

    <div class="top_menu">
        <a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>" title="中文版"><img src="../Public/images/Chinese.png" alt="中文版"></a>
        <img src="../Public/images/topline.gif" alt="line">
        <a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>" title="English"><img src="../Public/images/English.png" alt="英文版"></a>
    </div>

    <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="<?php echo (C("web_url")); ?>"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" class="logo" alt="<?php echo (C("web_name")); ?>"/></a>
    </div>

    <div id="topsearch" class="col-xs-12 col-sm-3 col-md-3">
        <form id="searchform" method="get" action="<?php echo U('Search/index',array('g'=>'c'));?>">
            <div class="input-group search_group">
                <input type="text" name="name" class="form-control input-sm" placeholder="产品搜索">
                   <span class="input-group-btn">
                      <a href="javascript:searchform.submit();" class="btn btn-sm mysearch_btn" type="button">搜 索</a>
                  </span>
            </div>
        </form>
    </div>

  </div>
</div>
  
<?php echo W('Nav',array('lang'=>'c'));?>

<?php echo W('Flash');?>
<script type="text/javascript">
    $('.bxslider').bxSlider({
      adaptiveHeight: true,
      infiniteLoop: true,
      hideControlOnEnd: true,
      auto:true
    });
</script>
</header>
   
    <!-- main -->
    <div class="container">    
        <div class="row">

            <!-- right -->
            <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
                <div class="list_box">
                  <h2 class="left_h1">在线订购</h2>

                    <div class="feedback">
                    <form id="myform" name="myform" class="form-horizontal" method="post" action="__ROOT__/?m=Inquiry&a=check&g=c" onSubmit="return CheckJob()">

                      <div class="form-group">
                        <label for="products"class="col-sm-3 control-label">产品名称：</label>
                        <div class="col-sm-6">
                          <input type="text" name="product" value="<?php echo ($ordername); ?>" class="form-control" id="products" placeholder="必填">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="number" class="col-sm-3 control-label">订购数量：</label>
                        <div class="col-sm-6">
                          <input type="number" name="num" class="form-control" id="number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">联系人：</label>
                        <div class="col-sm-6">
                          <input type="text" name="name" class="form-control" id="username" placeholder="必填">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="company" class="col-sm-3 control-label">公司名称：</label>
                        <div class="col-sm-6">
                          <input type="text" name="company" class="form-control" id="company">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="add" class="col-sm-3 control-label">联系地址：</label>
                        <div class="col-sm-6">
                          <input type="text" name="add" class="form-control" id="add">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label for="tel" class="col-sm-3 control-label">联系电话：</label>
                        <div class="col-sm-6">
                          <input type="text" name="tel" class="form-control" id="tel" placeholder="必填">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="fax" class="col-sm-3 control-label">传 真：</label>
                        <div class="col-sm-6">
                          <input type="text" name="fax" class="form-control" id="fax">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">电子邮箱：</label>
                        <div class="col-sm-6">
                          <input type="email" name="email" class="form-control" id="inputEmail">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label for="contents" class="col-sm-3 control-label">详细内容：</label>
                        <div class="col-sm-6">
                          <textarea name="contents" class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="code" class="col-xs-12 col-sm-3 control-label">验证码：</label>
                        <div class="col-xs-7 col-sm-2"><input type="text" name="code" class="form-control" id="code" placeholder="验证码"></div>
                        <div class="col-xs-2 col-sm-1"><img class="codeimg" src="<?php echo U('Common/verify');?>" onclick='this.src=this.src+"?"+Math.random()'/></div>
                      </div>

                      <div class="form-group" style="margin-top:30px;">
                        <div class="col-sm-offset-3 col-sm-10">
                          <button type="submit" name="button" value="Send" class="btn btn-danger">提交订单</button>&nbsp;
                          <button type="reset" name="reset" class="btn btn-default">重新填写</button>
                        </div>
                      </div>
                      
                    </form>
                    </div>
                         
                </div>
      </div>

            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="left_nav" id="categories">
                  <h1 class="left_h1">栏目导航</h1>
                  <?php echo W('Left',array('id'=>1,'type'=>'product','lang'=>'c'));?>
                </div>

                <div class="left_news">
                  <h1 class="left_h1">新闻中心</h1>
                  <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2,'lang'=>'c'));?>
                </div>
               <div class="index_contact">
<h1 class="about_h1">联系我们</h1><span class="about_span">CONTACT US</span>
    <p style="padding-top:20px;">联系人：<?php echo (C("web_contacts")); ?></p>
    <p>手机：<?php echo (C("web_phone")); ?></p>
    <p>电话：<?php echo (C("web_tel")); ?></p>
    <p>邮箱：<?php echo (C("web_email")); ?></p>
    <p>地址： <?php echo (C("web_add")); ?></p>
</div>
            </div>

    </div>
  </div> 

<nav class="navbar navbar-default navbar-fixed-bottom footer_nav">
    <div class="foot_nav btn-group dropup">
        <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>
            分享</a>  
            <div class="dropdown-menu webshare">
            <?php echo (C("web_share")); ?>
            </div>
    </div>
    <div class="foot_nav"><a href="tel:<?php echo (C("web_phone")); ?>"><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>手机</a></div>
    <div class="foot_nav"><a id="gotocate" href="#"><span class="glyphicon glyphicon-th-list btn-lg" aria-hidden="true"></span>分类</a></div>
    <div class="foot_nav"><a id="gototop" href="#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>顶部</a></div>
</nav>

<footer>
    <div class="copyright">
        <p><?php echo (C("web_copyright")); ?>&nbsp;<?php echo (C("web_icp")); ?> <a href="__ROOT__/c_sitemap.html" target="_blank">网站地图</a></p>
        <p class="copyright_p">地址：<?php echo (C("web_add")); ?> &nbsp;电话：<?php echo (C("web_tel")); ?> &nbsp;传真：<?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
    </div>
    <?php if(C("is_translate")!= 0): ?><div id="translate">
    <!-- Begin TranslateThis Button -->
    <div id="translate-this"><a style="width:180px;height:18px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/"></a></div>
    <script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>
    <script type="text/javascript">
    TranslateThis();
    </script>
    <!-- End TranslateThis Button -->
</div><?php endif; ?> 
</footer>

<?php echo W('Online',array('lang'=>'c'));?>

  </body>
</html>