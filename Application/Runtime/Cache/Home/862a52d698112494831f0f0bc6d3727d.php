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
<link rel="stylesheet" href="/Public/Home/css/order3.css"><meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta content="telephone=no" name="format-detection">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1;user-scalable=no;">
<title><?php echo ($goodsData["goods_name"]); ?></title>
<link rel="stylesheet" href="/Public/Home/css/productDetail.css">
<script charset="utf-8" src="/Public/Home/js/TouchSlide.1.1.js"></script>
<script charset="utf-8" src="/Public/Home/js/prodDetail.js"></script>

<style type="text/css">
.details_con li .tb-out-of-stock{
border: 1px dashed #bbb;
color:#bbb;
cursor: not-allowed;
}
.no-selected{
background: #ffe8e8 none repeat scroll 0 0;
border: 2px solid #be0106;
margin: -1px;
}

	

/* 本例子css -------------------------------------- */
.focus{ width:100%;   margin:0 auto; position:relative; overflow:hidden;   }
.focus .hd{ width:100%; height:11px;  position:absolute; z-index:1; bottom:5px; text-align:center;  }
.focus .hd ul{ display:inline-block; height:13px; padding:4px 12px; background-color:rgba(255,255,255,0.7); 
	-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; font-size:0; vertical-align:top;
}
.focus .hd ul li{ display:inline-block; width:5px; height:5px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; background:#8C8C8C; margin:0 5px;  vertical-align:top; overflow:hidden;   }
.focus .hd ul .on{ background:#FE6C9C;  }

.focus .bd{ position:relative; z-index:0; }
.focus .bd li img{ width:100%;  background:url(/Public/Home/css/images/loading.gif) center center no-repeat;  }
.focus .bd li a{ -webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */  }
	
</style>
</head>

<body>

<div class="fanhui_cou">
	<div class="fanhui_1"></div>
	<div class="fanhui_ding">顶部</div>
</div>

<header class="header">
	<div class="fix_nav">
		<div style="max-width:768px;margin:0 auto;background:#000;position: relative;">
			<a class="nav-left back-icon" href="javascript:history.back();">返回</a>
			<div class="tit">商品详细</div>
		</div>
	</div>
</header>

<div class="container">
    <div id="content">
		
			<div id="focus" class="focus">
				<div class="hd">
					<ul></ul>
				</div>
				<div class="bd">
					<ul>
							<?php foreach($gpData as $k=>$v):?>
							<li><a href="#"><?php echo showImage($v['pic']);?></a></li>
						<?php endforeach;?>
							
					</ul>
				</div>
			</div>
			<script type="text/javascript">
				TouchSlide({ 
					slideCell:"#focus",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"left", 
					// autoPlay:true,//自动播放
					autoPage:true, //自动分页
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});
			</script>
			
	</div>
    <div class="row gary-bg">
         <form  id="cart" name="cart" method="post" action="<?php echo U('Cart/add');?>">
         <input type="hidden" name="goods_id" value="<?php echo ($goodsData["id"]); ?>"/>
	         <div class="white-bg p10 details_con">
	         <h1 class="item-name" id="prodName"><?php echo ($goodsData["goods_name"]); ?></h1>
	         <ul>
				<li>
					<label>商城价格：</label>
					<span class="price">¥<span class="price" id="prodCash"><?php echo ($goodsData["shop_price"]); ?></span></span>
				</li>
					<?php foreach($gaData1 as $k=>$v):?>
						<li id="choose_0" index="0"  class='product' >
							
							<label id="propName" propname="颜色"><?php echo ($k); ?>：</label>
							<dl>
								<?php foreach($v as $k1=>$v1):?>
									<dd <?php  if($k1==0) echo 'class="check"';?> >
										<input  style="display:none;" type="radio" <?php if($k1==0) echo 'checked="checked"';?> name="goods_attr_id[<?php echo ($v1["attr_id"]); ?>]" value="<?php echo ($v1["id"]); ?>"><?php echo ($v1["attr_value"]); ?><span></span>
									</dd>
								<?php endforeach;?>
							</dl>
						</li>

					<?php endforeach;?>
				  <li>
					<label>数量：</label>
					<div class="count_div" style="height: 30px; width: 130px;">
						<a href="javascript:void(0);" class="minus" ></a>
						  <input type="text" name="goods_number" class="count" value="1" id="prodCount" readonly="readonly"/>
						<a href="javascript:void(0);" class="add" ></a>
					</div>
				</li>
				</ul>
			</div>
		</form>
		
        <div id="goodsContent" class="goods-content white-bg">
			
            <div class="hd hd_fav">
                <ul>
                    <li class="on">图文详情</li>
                    <li class="">规格参数</li>
                    <li class="">评价(<?php echo ($commemtData); ?>)</li>
                </ul>
            </div>
			
            <div class="tempWrap" style="overflow:hidden; position:relative;">
            <div style="width: 2304px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 200ms; transform: translateX(0px);" class="bd">
                
                <ul style="display: table-cell; vertical-align: top; max-width: 768px;width: 100%;" class="property tab">
                    <div class="prop-area" style="min-height:300px;overflow: hidden;">
                    	<?php echo ($goodsData["goods_desc"]); ?></div>
                </ul>
                <ul class="txt-imgs tab" style="display: table-cell; vertical-align: top; max-width: 768px;width: 100%;">
                	<div class="desc-area" style="padding: 0px 10px 0 10px;">
	                	<div id="ajax_loading" style="margin: 30px 30px;"> 
	                		<?php foreach($gaData2 as $k=>$v):?>
		                	<li id="choose_0" index="0" style="line-height:30px;">
								<label id="propName" propname="<?php echo ($v["attr_name"]); ?>"><?php echo ($v["attr_name"]); ?>：</label>
								<span><?php echo ($v["attr_value"]); ?></span>
							</li>
							<?php endforeach;?>
						</div>
	                </li>
	                </div>
                </ul>
                <ul style="display: table-cell; vertical-align: top; max-width: 768px;width: 100%;" class="appraise tab" rel="1" status="1">
	              
	                
                     <div class="wap_page"><a id="aa" onclick="ajaxGetCommentByPageNum()" href="javascript:void(0);">加载更多...</a></div>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-foot">
	<div class="fixed_inner">
		<a class="btn-fav" href="javascript:void(0);" onclick="addInterest(this,'663');">
		<i class="i-fav"></i><span>收藏</span>
		</a>
		<a class="cart-wrap" href="<?php echo U('Cart/lst');?>">
			<i class="i-cart"></i>
			<span>购物车</span>
			<span class="add-num" id="totalNum"><?php echo ($cartCount); ?></span>
		</a>
		<div class="buy-btn-fix">
		    <a class="btn btn-info btn-cart"  onclick="addShopCart();" href="javascript:void(0);">加入购物车</a>
		    <a class="btn btn-danger btn-buy" onclick="buyNow();" href="javascript:void(0);">立即购买</a>
		</div>
	</div>
</div>

<div class="clear"></div>

<footer class="footer">
  <div class="foot-con">
	<div class="foot-con_2">
		<a href="index.html">
			<i class="navIcon home"></i>
			<span class="text">首页</span>
		</a>
		<a href="category.html">
			<i class="navIcon sort"></i>
			<span class="text">分类</span>
		</a>
		<a href="shopcart.html">
			<i class="navIcon shop"></i>
			<span class="text">购物车</span>		
		</a>
		<a href="userhome.html">
			<i class="navIcon member"></i>
			<span class="text">我的</span>
		</a>
	</div>
  </div>
</footer>



<script type="text/javascript">
	TouchSlide({
		slideCell:"#goodsContent",
	});



	var goodsId=<?php echo $goodsData['id'];?>;
	var pls=<?php echo $commemtData;?>;
	
	var current_comment_page=1; //应该加载第几页
	//ajax 获取某一页评论

	if(pls!=0){
		function ajaxGetCommentByPageNum(){

			$.ajax({
				type:"GET",
				url:"<?php echo U('Comment/ajaxGetComment','',FALSE);?>/p/"+current_comment_page+"/goods_id/"+goodsId,
				dataType:"json",
				success:function(data){
				var html='<div id="ajax_loading" class="comment" style="margin: 30px 30px;">';
				$(data).each(function(k,v){
					html+='<img src="'+v.face+'"  width=\'50\' height=\'50\'> <span>'+v.email+'</span><br/><p style="line-height: 25px;">'+v.content+'</p><span style="float:right;">'+v.addtime+'</span>';
				});
					html+='</div>';
					$('.wap_page').before(html);
					current_comment_page++;	
					if(data==null){
						$('.wap_page').remove();
						floatNotify.simple("亲，已经没有更多评论了！");
						//alert('亲，已经没有更多评论了！');
					}
				}
			});
		}
	ajaxGetCommentByPageNum();	
	}else{
		$('.wap_page').html('暂无评论！');
	}

	

	//加入购物车
	function addShopCart() {
		//var prodId = currProdId;//商品Id
		var goodsId = $("#goodsId").val();//商品id
		var goodsAttrId = $("#propid").attr('name');//商品id
		var goodsNumber = $("#prodCount").val();//购买数量
		$.ajax({
			url : "<?php echo U('Cart/ajaxAdd');?>",
			data: $('#cart').serializeArray(),
			type : 'post',
			success : function(data) {
				floatNotify.simple("成功加入购物车！");
			}
		});
	}
	
</script>
</body>
</html>