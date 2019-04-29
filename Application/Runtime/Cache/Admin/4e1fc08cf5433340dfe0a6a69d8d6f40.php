<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Public/Admin/css/admin.css">
<script src="/Public/Admin/js/jquery.js"></script>
<script src="/Public/Admin/js/pintuer.js"></script>  

</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改品牌</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('edit');?>" enctype="multipart/form-data" >  
    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
    <input type="hidden" name="old_logo" value="<?php echo ($data["logo"]); ?>">
      <div class="form-group">
        <div class="label">
          <label>品牌名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($data["brand_name"]); ?>" name="brand_name" data-validate="required:请输品牌名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>品牌LOGO：</label>
        </div>
        <div class="field">
        <span id='logoName' style="color: red; font-weight: bold;" ><?php echo showImage($data['logo'],50,50)?></span>
          <div class="button bg-blue margin-left upload xin" >+ 浏览上传<input type="file" class="yc"  id="logo" name="logo" value="+ 浏览上传"  c></div>
         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
$("#logo").change(function(){
  var f = document.getElementById("logo").files;  
  var logoName=f[0].name;
  $("#logoName").html(logoName);  
})
</script>