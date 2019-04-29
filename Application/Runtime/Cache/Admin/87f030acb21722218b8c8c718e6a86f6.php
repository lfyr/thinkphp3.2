<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>公众号信息</title>  
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <script src="/Public/Admin/js/jquery.js"></script>
    <script src="/Public/Admin/js/ajaxfileupload.js"></script>
    <script src="/Public/Admin/js/pintuer.js"></script>  

</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 关注事件</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Attention/index');?>">
              
      <div class="form-group">
        <div class="label">
          <label>关注消息：</label>
        </div>
        <div class="field" style="display:none;">
          <input  type="text" class="input" id="type_id" name="id" value="<?php echo ($Attentionigdata["id"]); ?>" />
          <div class="tips"></div>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:120px;"><?php echo ($Attentionigdata["content"]); ?></textarea>
          <div class="tips"></div>
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