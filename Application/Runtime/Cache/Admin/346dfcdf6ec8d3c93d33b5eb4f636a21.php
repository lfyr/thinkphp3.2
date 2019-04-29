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

<!--ue编辑器-->
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<!--ue编辑器-->
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加商品</strong></div>
  <div class="panel-head" id="add"><a href="##" id='bt1' class="button button-little bg-blue"><span class="icon-reorder"></span> 基本信息</a> &nbsp;&nbsp;<a href="##" id='bt2' class="button button-little bg-blue"><span class="icon-reorder"></span> 商品描述</a> &nbsp;&nbsp;<a href="##" id='bt3' class="button button-little bg-blue"><span class="icon-reorder"></span> 商品属性</a> &nbsp;&nbsp;<a href="##" id='bt4' class="button button-little bg-blue"><span class="icon-image"></span> 商品相册</a></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('add');?>" enctype="multipart/form-data"> 
   <div class='tab'> 
      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="goods_name" data-validate=":请输商品名称" />
          <div class="tips"></div>
        </div>
        
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品分类：</label>
        </div> 
        <div class="field">
            <select name="cat_id" class="input w50">
              <option value="">顶级分类</option>
              <?php foreach($catData as $v):?>
              <option value="<?php echo ($v["id"]); ?>"><?php echo str_repeat('-',8*$v['level']).$v['cat_name'];?></option>
              <?php endforeach;?>
            </select>

        <div class="tips"></div>
      </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>品牌：</label>
        </div> 
        <div class="field">
            <select name="brand_id" class="input w50">
              <option value="">请选择品牌</option>
              <?php foreach($BrandData as $v):?>
              <option value="<?php echo ($v["id"]); ?>"><?php echo ($v['brand_name']); ?></option>
              <?php endforeach;?>
            </select>

        <div class="tips"></div>
      </div>
      </div>
      
      <div class="form-group" style="line-height: 40px;">
        <div class="label">
          <label>商品价格：</label>
        </div>
        <div class="field">
           <input type="text" style="width:85px;" size="10" class="input w50" value="0.00" name="shop_price" data-validate=":请输商品价格" />&nbsp;元
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>logo原图：</label>
        </div>
        <div class="field">
        <span id='logoName' style="color: red; font-weight: bold;"></span>
          <div class="button bg-blue margin-left upload xin" >+ 浏览上传<input type="file" class="yc"  id="logo" name="logo" value="+ 浏览上传"  c></div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>是否热卖：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            是 <input  name="is_hot" value="1" type="radio" checked="checked">
            否 <input  name="is_hot" value="0" type="radio">
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>是否新品：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            是 <input  name="is_new" value="1" type="radio" checked="checked">
            否 <input  name="is_new" value="0" type="radio">
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>是否精品：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            是 <input  name="is_best" value="1" type="radio" checked="checked">
            否 <input  name="is_best" value="0" type="radio">
          </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>是否上架：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            是 <input  name="is_on_sale" value="1" type="radio" checked="checked">
            否 <input  name="is_on_sale" value="0" type="radio">
          </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>seo优化_关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="seo_keyword" data-validate=":请输优化_关键字关键字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>seo优化_描述：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="seo_description" data-validate=":请输优化_描述名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group" style="line-height: 40px;">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
           <input type="text" style="width:85px;" size="10" class="input w50" value="100" name="sort_num" data-validate=":请输排序" />
          <div class="tips"></div>
        </div>
      </div>
    </div>
    <!-- 商品描述 -->
    <div class='tab' style="display:none">
      <div class="form-group">
        <div class="label">
          <label>商品描述：</label>
        </div>
      
        <div class="field">
          <textarea name="goods_desc" id='sub_goods_name'  style="height:120px;"></textarea>
          <div class="tips" title=""></div>
        </div>
      </div>
    </div>

    <!-- 商品类型 -->
    <div class='tab' style="display:none">
      <div class="form-group">
        <div class="label">
          <label>商品类型：</label>
        </div> 
        <div class="field">
            <select name="type_id" class="input w50">
              <option value="">选择类型</option>
              <?php foreach($typeData as $v):?>
              <option value="<?php echo ($v["id"]); ?>"><?php echo $v['type_name'];?></option>
              <?php endforeach;?>
            </select>

          <div class="tips"></div>
        </div>
      </div>
      <div  id="attr_container"></div>
    </div>

    <!-- 商品图片 -->
    <div class='tab' style="display:none">
      <div class="form-group">
        <div class="field">
        <input type="button" onclick="$(this).parent().parent().parent().append('<div class=\'form-group\'><div class=\'field\'><input type=\'file\'  id=\'pics\' name=\'pics[]\' value=\'+ 浏览上传\' class=\'color\' /></div></div>');" class="button bg-blue margin-left" id="image" value="点击添加图片" />
        </div>
      </div>
    </div>
  
    <div class="form-group" style="display:block;">
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

</body></html>
<script type="text/javascript">

//UE编辑器
UE.getEditor('sub_goods_name', {
  "initialFrameWidth" : "100%",
  "initialFrameHeight" : 200,
  "maximumWords" : 150
});


//选项卡切换
$("div.panel-head a").click(function(){
 var i=$(this).index();
 //显示第i个tab
 $(".tab").eq(i).show();
 //隐藏其它的
 $(".tab").eq(i).siblings(".tab").hide();
});


//ajax获取类型属性
$("select[name=type_id]").change(function(){
  //获取type_id的值
  var type_id=$(this).val();
  
  if(type_id !== ''){
    $.ajax({
    type:"GET",
    url:"<?php echo U('ajaxGetAttr','',FALSE);?>/type_id/"+type_id,
    dataType:"json",
    success:function(data){
      var html = "";
      //循环服务器端返回的json数据
      $(data).each(function(k,v){
      html += "<div class='form-group'>";
        html +="<div class='label'><label>"+v.attr_name + " : ";
        //根据属性的类型生成不同的表单元素
        //1.如果属性是可选的那么就有一个+号
        //2.如果属性有可选值那么就输出下拉框
        //3.如果属性唯一的就生成一个文本框
        // $.ajax("<?php echo U('add','',FALSE);?>/xxx/"+v.attr_type);
        //判断是否可选
        if(v.attr_type == 1)
          html += "<a onclick='addnew(this);' href='javascript:void();'>[+]</a></label></div>";
        else
          html += "</label></div>";
        //判断是否有可选值
        if(v.attr_option_values == "")
          html += "<div class='field'><input type='text' name='ga["+v.id+"][]' class='input w50' /></div>";
        else{
          //先把可选值转化为数组
          var _attr = v.attr_option_values.split(',');
          html += "<div class='field'><select class='input w50'  name='ga["+v.id+"][]'>";
          html += "<option value=''>请选择</option>";
          for(var i=0; i<_attr.length; i++){
            html += "<option value='"+_attr[i]+"'>"+_attr[i]+"</option>";
          }
          html += "</select></div>";
        }
        if(v.attr_type == 1)

        html +="<div class='label' size='6'  style='padding-top: 30px;'><label>商品价格：</label></div><input style='width:5%; margin-top: 25px;' type='text' class='input w50'  name='attr_price["+v.id+"][]' />";

      html += "</div>";

      });
      
         $("#attr_container").html(html);
       
         
    }
    });
  }else
   $("#attr_container").html("");
});


//点击+号克隆一份
function addnew(a){
  //选中a标签所在的最行标签
  var p=$(a).parent().parent().parent();

  if($(a).html()=="[+]"){
      //把p克隆一份
      var newP=p.clone();
      //把新克隆出来的p里面的a标签变成-号
      newP.find('a').html('[-]');
      //放在后面
      p.after(newP);
    }else
    p.remove();
}

$("#logo").change(function(){
  var f = document.getElementById("logo").files;  
  var logoName=f[0].name;
  $("#logoName").html(logoName);  
})

</script>