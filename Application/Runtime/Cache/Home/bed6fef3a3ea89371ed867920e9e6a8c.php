<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<script charset="utf-8" src="/Public/Home/js/jquery.min.js"></script>
<script charset="utf-8" src="/Public/Home/js/global.js"></script>
<script charset="utf-8" src="/Public/Home/js/bootstrap.min.js"></script>
<script charset="utf-8" src="/Public/Home/js/template.js"></script>

<link rel="stylesheet" href="/Public/Home/css/bootstrap.css">
<link rel="stylesheet" href="/Public/Home/css/style.css">
<link rel="stylesheet" href="/Public/Home/css/member.css">
<link rel="stylesheet" href="/Public/Home/css/order3.css"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta content="telephone=no" name="format-detection">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1;user-scalable=no;">
<title>会员注册</title>
<script charset="utf-8" src="/Public/Home/js/randomimage.js"></script>
<script charset="utf-8" src="/Public/Home/js/login.js"></script>
<script type="text/javascript">
		var error = '';
</script>
</head>
<body class="" style="background-color:#fff">
<header class="header">
    <div class="fix_nav">
        <div style="max-width:768px;margin:0 auto;background:#000000;position: relative;">
            <a class="nav-left back-icon" href="javascript:history.back();">返回</a>
            <div class="tit" style="font-size:18px;">会员注册</div>
        </div>
    </div>
</header>
<div class="maincontainer">
   <div class="container itemdetail mini-innner">
    <div class="row">
        <div class="col-md-12 tal mt20">
            <form  id="theForm"  name="theForm" class="form-signin"  action="/index.php/Home/Member/regist.html" method="POST" >
            
              Email：
              <input name="email"  type="text" style="margin-bottom: -2px;-webkit-appearance:none; " class="form-control" placeholder="请输入正确的Email地址" message="账号" required="true" >
              <br>
              密码： 
              <input  name="password" type="password" class="form-control" placeholder="请输入密码" message="密码" required="true" style="-webkit-appearance:none;" >
	            <br>
              确认密码：
              <input  name="cpassword" type="password" class="form-control" placeholder="请再次输入密码" message="确认密码" required="true" style="-webkit-appearance:none;" autocomplete="off" tabindex="2">
              <br>
              验证码：
              <input name="chkcode" type="text"  style="width:30%;  display:inline-block; text-align:center;" class="form-control"  placeholder="验证码" message="验证码"  required="true" style="-webkit-appearance:none;" autocomplete="off" tabindex="2"> <img src="<?php echo U('chkcode'); ?>" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'"> 
            <label class="checkbox">
	                    
	                
	          </label>
                <div class="clear"></div>

                <div class="col-xs-5 p0" style="margin-left:10px;"><button type="button"  class="btn btn-info btn-block" onclick="userLogin();"  tabindex="6" >注 册</button></div>
                <div class="col-xs-6 p0"><button type="button" style="margin-left:10px;" class="btn btn-info btn-block" onclick="window.location.href='<?php echo U('login');?>'"  tabindex="5" >已有账号立即登陆-></button></div>
                <!-- <div class="col-xs-5 p0" style="margin-left:10px;"><button type="button" style="text-align:center;"  class="btn btn-info btn-block" onclick="window.location.href='/register'"  tabindex="6" >已有账号去登陆-></button></div> -->

            </form>
        </div>
     </div>
	</div>
</div>
<script type="text/javascript">
var contextPath = '';
</script>
</body>
</html>