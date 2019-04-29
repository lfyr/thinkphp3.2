<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>

<script charset="utf-8" src="/Public/Home/js/global.js"></script>
<script charset="utf-8" src="/Public/Home/js/bootstrap.min.js"></script>
<script charset="utf-8" src="/Public/Home/js/template.js"></script>

<link rel="stylesheet" href="/Public/Home/css/bootstrap.css">
<link rel="stylesheet" href="/Public/Home/css/style.css">
<link rel="stylesheet" href="/Public/Home/css/member.css">
<link rel="stylesheet" href="/Public/Home/css/order3.css">
<link rel="stylesheet" href="/Public/Home/css/app.css">

<!-- fixes the bug Bootstrap 3 Modals and the iOS Virtual Keyboard -->
<script charset="utf-8">
$(document).ready(function(){
//iOS check...ugly but necessary
if( navigator.userAgent.match(/iPhone|iPad|iPod/i) ) {

    $('.modal').on('show.bs.modal', function() {

        // Position modal absolute and bump it down to the scrollPosition
        $(this)
            .css({
                position: 'absolute',
                marginTop: $(window).scrollTop() + 'px',
                bottom: 'auto'
            });

        // Position backdrop absolute and make it span the entire page
        //
        // Also dirty, but we need to tap into the backdrop after Boostrap 
        // positions it but before transitions finish.
        //
        setTimeout( function() {
            $('.modal-backdrop').css({
                position: 'absolute', 
                top: 0, 
                left: 0,
                width: '100%',
                height: Math.max(
                    document.body.scrollHeight, document.documentElement.scrollHeight,
                    document.body.offsetHeight, document.documentElement.offsetHeight,
                    document.body.clientHeight, document.documentElement.clientHeight
                ) + 'px'
            });
        }, 0);

    });

}
});
</script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta content="telephone=no" name="format-detection">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1;user-scalable=no;">
<title>收货地址</title>
<link rel="stylesheet" href="/Public/Home/css/addressEdit.css">
<script type="text/javascript" src="/Public/Home/js/addressEdit.js"></script>
</head>
<body style="background-color:#fff">
<div class="maincontainer">
<div class="container wx_wrap mini-innner">
    <div class="row">
        <header class="header" style="height:44px;">
            <div class="fix_nav">
                <div style="max-width:768px;margin:0 auto;background:#000000;position: relative;">
                    <a class="nav-left back-icon" href="javascript:backspace();">返回</a>
                    <div class="tit">新增收货地址</div>
                </div>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="col-md-12">
        <form id='address' action="<?php echo U('address/add');?>" method="post">
            <div class="address_new">
                <p><label for="name"><span class="tit">收货人</span><input type="text" value="" name="shr_name" id="receiver" placeholder="名字"></label></p>
                <p><label for="mobile"><span class="tit">手机号码</span><input type="text" value="" name="shr_tel" id="mobile" placeholder="手机号码"></label></p>
                <p>
                    <label for="provinceId">
                        <span class="tit">省份</span>
                        <select class="combox sele"  id="province" name="shr_province">
                            <option value="0">请选择省</option>
                            <?php foreach($province as $k=>$v):?>
                                <option provinceid="<?php echo ($v["provinceid"]); ?>" value="<?php echo ($v["province"]); ?>"><?php echo ($v["province"]); ?></option>
                            <?php endforeach;?>
                        </select>
                    </label>
                </p>
                <p>
                    <label for="cityId">
                        <span class="tit">城市</span>
                        <select class="combox sele" id="city" name="shr_city">
                            <option value="0">请选择市</option>
                        </select>
                    </label>
                </p>
                <p id="areaSelP">
                    <label for="areaId">
                        <span class="tit">地区</span>
                        <select class="combox sele"   id="area" name="shr_area">
                            <option value="0">请选择区</option>
                        </select>
                     </label>
                 </p>

                <p><label for="adinfo"><span class="tit">详细地址</span><input name="shr_address" id="subAdds" value="" type="text" placeholder="详细地址"></label></p>
            </div>
        </form>
        <p class="action"><button type="button" id="buyBtn1" class="btn btn-primary btn-block mt10" onclick="submit();">确认</button></p>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var contextPath = '';
    $("#province").change(function(){
        var provinceid=$("#province").find("option:selected").attr("provinceid");
        $.ajax({
            type:"GET",
            url:"<?php echo U('Address/city','',false); ?>/provinceid/"+provinceid,
            dataType:"json",
            success:function(data){
                html="<option value='0'>请选择市</option>";
                $(data).each(function(k,v){
                    html+="<option cityid="+v.cityid+" value="+v.city+">"+v.city+"</option>";
                });
                $('#city').html(html);
            }
        });
    });

    $("#city").change(function(){
        var cityid=$("#city").find("option:selected").attr("cityid");
        $.ajax({
            type:"GET",
            url:"<?php echo U('Address/area','',false); ?>/cityid/"+cityid,
            dataType:"json",
            success:function(data){
                html="<option value='0'>请选择区</option>";
                $(data).each(function(k,v){
                    html+="<option cityid="+v.areaid+" value="+v.area+">"+v.area+"</option>";
                });
                $('#area').html(html);
            }
        });
    });
</script>
</body>
</html>