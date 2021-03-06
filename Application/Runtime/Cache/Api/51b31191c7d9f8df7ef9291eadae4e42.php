<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/common2.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/idangerous.swiper.css">
    <link rel="stylesheet" href="/Public/css/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/homepage/index23b0e8.css"> -->
    <link rel="stylesheet" type="text/css" href="/Public/css/loading.css">
    <link href="/Public/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/css/personinfo/common.css">
    <style>
.slider{overflow:hidden;position:relative}
.swiper{height:180px;overflow:hidden;position:relative}
.swiper .item{float:left;position:relative}
.swiper .item a{display:block}
.swiper .item .img{display:block;width:100%;height:180px;background:center center no-repeat;background-size:cover}.swiper .item .desc{position:absolute;left:0;right:0;bottom:0;height:1.4em;font-size:16px;padding:20px 50px 12px 13px;background-image:-webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.7) 100%);background-image:linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.7) 100%);color:#fff;text-shadow:0 1px 0 rgba(0,0,0,.5);width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.indicator{position:absolute;right:15px;bottom:10px}.indicator a{float:left;margin-left:6px}.icon_dot{display:inline-block;vertical-align:middle;width:6px;height:6px;border-radius:3px;background-color:#d0cdd1}.icon_dot.active{background-color:#6a666f}</style><style type="text/css">.tab_hd{height:44px}.tab_hd_inner{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;font-size:0;background-color:#f2f2f2}.tab_hd_inner .item{height:44px;line-height:44px;width:100%;-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;box-flex:1;flex:1;font-size:15px;color:#000;text-align:center;text-decoration:none;-webkit-tap-highlight-color:transparent}.tab_hd_inner .item.active{color:#21b100}.tab_hd_inner .item:active{background-color:rgba(0,0,0,.1)}.article_list{background-color:#fff}.list_item{display:block;padding:15px 15px 10px 10px;overflow:hidden;position:relative;text-decoration:none;-webkit-tap-highlight-color:transparent}.list_item:active{background-color:rgba(0,0,0,.1)}.list_item:after{content:" ";position:absolute;bottom:0;width:100%;height:1px;border-bottom:1px solid #e2e2e2;-webkit-transform-origin:0 100%;-ms-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);-ms-transform:scaleY(.5);transform:scaleY(.5);left:10px}.list_item:last-child:after{border:0}.list_item .cover{float:left;margin-right:10px}.list_item .cover .img{display:block;width:80px;height:60px}
.list_item .cont{display: inline-block;width: 100px;}
.list_item .cont .title{font-weight:400;font-size:16px;color:#000;width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}
.list_item .cont .desc{font-size:13px;color:#999;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;line-height:1.3}.more{text-align:center}

         *{margin: 0px;padding: 0px;border: 0px}
        .h10 img{width: 100%;height: 100%;margin: 0px}
        #yyx1{background-image: url("/Public/image/index_1.png");background-size: 100% 100%;}
        #yyx2{background-image: url("/Public/image/index_3.png");background-size: 100% 100%;}
        #yyx3{background-image: url("/Public/image/index_2.png");background-size: 100% 100%;}
        #yyx4{background-image: url("/Public/image/index_4.png");background-size: 100% 100%;}
        #image{height: 220px}
        .list_index1{height: 90px;background: #fff}
        .img{height: 55px;width: 55px;}
        .img img{border-radius: 7px;width: 100%}
        .word{text-align: center;font-size: 13px}
        .h20{padding: 10px 10px 0px 10px;vertical-align:bottom;}
        .shop{margin: 0px 10px;border: 1px solid #bbb;border-radius: 2px;height: 100px;background: #fff;}
        .shop img{width: 80px;height: 80px;margin: 10px;border-radius: 8px}
        .content{margin: 15px 0px}
        .shopname{height: 25px;}
        .content_addr{width:180px;height: 36px;line-height: 16px}
        .scan{position: absolute;top:0px;right: 0px;z-index:9999}
         .h50{height:50px}
          .main_image{height:220px;overflow:hidden;position:relative;}
    .main_image ul{;position:absolute;top:0;left:0}
    .main_image li{float:left;}
    .main_image li img{ height: 200px;  width: 100%;}
    div.flicking_con{position:absolute; top:180px; left:50%;z-index:999;width:200px;height:21px;margin:0 0 0 -50px;}
    div.flicking_con a{ float:left;width:21px;height:21px;margin:0;padding:0;background:url('/Public/image/btn_main_img.png') 0 0 no-repeat;display:block;text-indent:-1000px}
    div.flicking_con a.on{background-position:0 -21px}
    .yyx_ad{text-indent: 1em; background: #000; opacity: 0.5; box-shadow: ; z-index: 9998;color: #fff; position: absolute;left: 0px;bottom:0px;width: 100%;height: 40px;line-height: 35px;}
    .yyx_li{position: relative;height: 200px}
    .yyx_li a{width: 100%;display: inline-block}
    .h55{height: 55px}
      .yyx_title{height: 45px;background: #32c500;}
    .plus{border:1px solid #8e8a8a;border-radius: 50%;height:20px;width:20px;
        display: inline-block;float: right;margin-top:30px;
    }
    .center{text-align: center;}
    .list_item .cont .text-overflow {
                    display:block;/*内联对象需加*/
                    width:10em;
                    word-break:keep-all;/* 不换行 */
                    white-space:nowrap;/* 不换行 */
                    overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
                    text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
    }
    .red{color: #FD4C5D;}
  /*  .num-c{float: right;margin-top: 30px;margin-right: 10px;margin-left:10px;
        color: #8e8a8a;display: none;width: 1em;
    }*/
    .minus{display: none;}
    .u-flyer {display: block;width: 50px;height: 50px;border-radius: 50px;position: fixed;z-index: 9999;}
    #index{color: #78aab5;}
    /*轮播*/
    #myCarousel img{width: 100%}
    /*.carousel-indicators{left: 0;width: 100%;text-align: right;margin-left:-30px;}*/
    .carousel-indicators li{background-color: #ffffff;width: 8px;height: 8px;}
    .carousel-indicators .active{background-color: #ff3333;width:10px;height: 10px;}
    /*end*/
    .cont h2{margin: 0;}
    .hboximg{width:90px;margin-top: 10px;margin-left: 8px;}
    .hboximg img{width: 100%;height: 89px;}
    .titlem{margin-top:8px; margin-left: 8px;margin-right: 8px;}
    .hprice{font-weight: 700;}
    .mtitle{font-size: 15px;}
    .ftitle{font-size: 13px;}
    .mtitle,.ftitle{color: #8e8e8e;}
    .num-c{width: 1em;margin-left:10px;margin-right: 10px;}
    .num-c span{float:right;text-align: center;}
    .qing{color: #78aab5;}
    .xx{width: 100%;height: 8px;background-color: #f5f4f9;margin-top: 10px;}
    .hymg{margin-top: 3px;}
    .text1 {
       word-break:break-all;
       display:-webkit-box;
       -webkit-line-clamp:1;
       -webkit-box-orient:vertical;
       overflow:hidden;
    }
    /*.hshop> :last-child{display: none;}*/
    </style>
</head>
<body>

<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
<!--         <ol class="carousel-indicators">
         <?php echo ($i); ?>
          <?php if(is_array($ad)): foreach($ad as $key=>$vo): ?><li data-target="#myCarousel" data-slide-to="<?php echo ++$i-1;?>"></li><?php endforeach; endif; ?>
        </ol> -->
    <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
     <?php if(is_array($ad)): foreach($ad as $key=>$vo): ?><div class="item">
         <img src="/Public/<?php echo ($vo["img"]); ?>" onclick="hurl('<?php echo ($vo["url"]); ?>')"></a>
      </div><?php endforeach; endif; ?>
   </div>
</div>

<div class="hshop">
  <?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><div class="box">
        <div class="hboximg" onclick="detai('<?php echo ($vo["id"]); ?>')">
            <img class="" src="/Public/<?php echo ($vo["img"]); ?>">
        </div>
        <div class="titlem hbox">
            <div class="mtitle text1" onclick="detai('<?php echo ($vo["id"]); ?>')"><?php echo ($vo["title"]); ?></div>
            <div class="ftitle text1 hymg" onclick="detai('<?php echo ($vo["id"]); ?>')"><?php echo ($vo["f_title"]); ?></div>
            <div class="hprice hymg">￥<?php echo ($vo["price"]); ?></div>
            <div class="box hymg">
                <div class="fa fa-minus-circle fa-lg qing" id="sp<?php echo ($vo["id"]); ?>" onclick="minus(this,<?php echo ($vo["id"]); ?>)"></div>
                <div class="num-c">
                    <span id="id_num<?php echo ($vo["id"]); ?>">0</span>
                </div>
            <div  class="fa fa-plus-circle fa-lg qing" id="as<?php echo ($vo["id"]); ?>" onclick="add_shop(this,'<?php echo ($vo["id"]); ?>','<?php echo ($vo["title"]); ?>','<?php echo ($vo["price"]); ?>','<?php echo ($vo["img"]); ?>')"></div>
            </div>
        </div>
    </div>
    <div class="xx"></div><?php endforeach; endif; ?>
</div>

<div id="loading" class="loading">
<div class="spinner">
  <div class="spinner-container container1">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container2">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container3">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
</div>

</div>

<style type="text/css">
    .final-bottom{
        position: fixed;
        bottom: 0px;
        background-color: #FFFFFF;
        width: 100%;
        height: 54px;
        border-top: 1px solid #e0e0e0;
    }
    .bottom-muen{
        display: inline-block;
        text-align: center;
        width: 24%;
        margin-top: 5px;
        color: #8e8e8e;
    }
    .bottom-muen div{
        margin: 0 auto;
    }
    .bottom-size{font-size: 10px;}
    .zuih{height:55px;width: 100%;}
    .bottom-num{
        width: 2em;
        position: absolute;
        top: -1px;
        left: 20px;
        color: red;
        font-size: 8px;
        color: #FFFFFF;
        border-radius: 50%;
      /*  border: 1px solid #2c96d2;*/
        padding: 2px;
        background-color:#78aab5;
    }
    .fa-shopping-cart{
        position: relative;
    }
    .gouwuche,.gouwuche0{
        width: 100%;
        height: 100%;
        z-index: 9998;
        position: fixed;
        top: 0;
        display: none;
    }
    .gouwuche0{
      z-index:0;
      opacity: 0.5;
      background-color: #000;
    }
    .neir{
        border-radius: 7px;
        /*width: 100%;*/
        position: fixed;
        z-index: 99999;
        background-color: #FFFFFF;
        left: 6px;
        right: 6px;
        bottom: 10px;
    }
    .neir-bottom,.neir-top{
      height: 39px;
      line-height: 39px;
    }
    .neir-bottom div,.neir-top-ac,.neir-card-ico{
      display: inline-block;
    }
    .neir-top-ac{
      float: right;
      margin-right: 16px;
    }
    .neir-card-ico{margin-left: 16px;}
    .neir-center{
      border-top: 1px solid #e0e0e0;
    }
    .neir-bottom{
      margin-left: 12px;
    }
    .huangse{color: #78aab5;}
    .shop-one{border-bottom: 1px solid #e0e0e0;line-height: 35px;}
    .h-clear{margin-right: 5px;}
    .tc-num{
        width:2em;
        position: absolute;
        top:3px;
        left: 28px;
        font-size: 6px;
        color: #FFFFFF;
        border-radius: 50%;
      /*  border: 1px solid #2c96d2;*/
        background-color:#78aab5;
        height:12px;
        line-height: 12px;
      }
      .box{   display:-moz-box;
              display:-webkit-box;
              display:box;}
     .hbox{ -moz-box-flex:1;
            -webkit-box-flex:1;
             box-flex:1;position: relative;}
     .hbox2{ -moz-box-flex:2;
             -webkit-box-flex:2;
             box-flex:2;position: relative;}
     .hbox3{ -moz-box-flex:3;
             -webkit-box-flex:3;
             box-flex:3;position: relative;}
     .hbox5{ -moz-box-flex:5;
             -webkit-box-flex:5;
             box-flex:5;position: relative;}
      .shop-jj{width:73px;}
      .shop-one-num{width:24px;display: inline-block;display: relative;}
      .center{text-align: center;}
      .shop-name{margin-left: 14px;}
      .jiesuan{float: right;margin-right: 16px;}
      .jiesuan span{background-color:#78aab5;padding-top: 3px;padding-bottom: 3px;padding-left: 14px;padding-right: 14px;color: #fff;border-radius:5px;}
      h1{display:none;}
</style>
<div class="zuih"></div>
<div class="final-bottom">
    <div class="bottom-muen" onclick="go2index()">
        <div id="index" class="fa fa-home fa-2x"></div>
        <div class="bottom-size">首页</div>
    </div>
    <div  class="bottom-muen" onclick="shopCart()">
        <div id="end" class="fa fa-shopping-cart fa-2x">
            <div id="id_cartN" class="bottom-num"></div>
        </div>
        <div class="bottom-size">购物</div>
    </div>
    <div class="bottom-muen" onclick="go2gift()">
        <div id="gift" class="fa fa-gift fa-2x"></div>
        <div  class="bottom-size">积分商城</div>
    </div>
    <div class="bottom-muen" onclick="go2person()">
        <div id="PersonInfo" class="fa fa-user fa-2x"></div>
        <div class="bottom-size">个人中心</div>
    </div>
</div>

<!-- 购物车 -->
<div class="gouwuche0"></div>
<div class="gouwuche"></div>
<script id="script-model" type="text/x-dot-template">
    <div class="neir">
      <div class="neir-top">
        <div class="neir-card-ico">
          <i class="fa fa-shopping-cart fa-lg huangse"></i>
          {{?it.TotalCount>0}}
          <div class="tc-num center">{{=it.TotalCount}}</div>
          {{?}}
        </div>
        <div class="neir-top-ac "><i class="fa fa-trash-o fa-lg huangse h-clear" onclick="clearCart()"></i>清空购物车</div>
      </div>
      <div></div>
      <div class="neir-center"></div>

      <div id="shop_one">
      {{for(var i=0; i<it.Items.length; i++){ }}
      <div class="shop-one  box">
          <div class="shop-name hbox">{{=it.Items[i].Name}}</div>
          <div class="shop-jj">
              <i class="fa fa-minus-square huangse" onclick="footerMinus(this,'{{=it.Items[i].Id}}')"></i>
              <div class="shop-one-num center">{{=it.Items[i].Count}}</div>
              <i class="fa fa-plus-square huangse" onclick="footer_add(this,'{{=it.Items[i].Id}}','{{=it.Items[i].Name}}','{{=it.Items[i].Price}}')"></i>
          </div>
      </div>
      {{ } }}
      </div>

      <div class="neir-bottom">
        {{?it.Total>0}}
        <div id="total">合计：￥{{=it.Total}}</div>
        {{??}}
        <div>合计：￥0.00</div>
        {{?}}
        <div onclick="jiesuan()" class="jiesuan"><span>结算</span></div>
      </div>
    </div>
</script>
<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/Public/js/cookie.js"></script>
<script type="text/javascript" src="/Public/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/js/doT.min.js"></script>
<script type="text/javascript" src="/Public/js/msgalert.js"></script>
<script type="text/javascript">
    $('.gouwuche').bind("click",function(e){
        var target  = $(e.target);
        if(target.closest(".neir").length == 0){
            /*.closest()沿 DOM 树向上遍历，直到找到已应用选择器的一个匹配为止，返回包含零个或一个元素的 jQuery 对象。*/
            $('.gouwuche0').hide();
            $('.gouwuche').hide();
        }
        e.stopPropagation();
      });

    var cart=new CartHelper();//实例化一个购物车助手
    if (cart.Read().Count==0) {
       $('#id_cartN').hide();
    }else{
       $('#id_cartN').show();
       $('#id_cartN').html(cart.Read().TotalCount);
    }

    function go2person(){
        window.location.href="<?php echo U('Api/PersonInfo/Index');?>"
    }

    function go2index(){
        window.location.href="<?php echo U('Api/Index/index');?>"
    }

    //减库存
    function minus(obj,id){
       if (cart.Read().Items[cart.Find(id)].Count>0){
             cart.Change(id,--(cart.Read().Items[cart.Find(id)].Count));
             $(obj).next().children().html(cart.Read().Items[cart.Find(id)].Count);
           if (cart.Read().Items[cart.Find(id)].Count==0) {
             cart.Del(id);
             // $(obj).hide();
             // $(obj).prev().hide();
             // $(obj).prev().prev().css({'border':'1px solid #8e8a8a','background-color':'#FFFFFF'}).children().css({'color':'#FD4C5D'});
           }
       }
       $('#id_cartN').show();
       $('#id_cartN').html(cart.Read().TotalCount);
       if (cart.Read().Items.length==0) $('#id_cartN').hide();
   }

   //弹窗减库存
   function footerMinus(obj,id){
      minus("#sp"+id,id);
      if (cart.Find(id)>-1) {
            if (cart.Read().Items[cart.Find(id)].Count>0){
                   $(obj).next().html(cart.Read().Items[cart.Find(id)].Count);
             }
          }else $(obj).parent().parent().hide();
      if (cart.Read().Items.length==0) $('.tc-num').hide();
      $('.tc-num').html(cart.Read().TotalCount);
      $('#total').html("合计：￥"+cart.Read().Total);
       if (cart.Read().Total==0) {
          $('#total').html("合计：￥0.00");
       }
   }

   //弹窗加库存
   function footer_add(obj,id,name,price){

    if (cart.Find(id)>-1){
        cart.Add(id,name,++(cart.Read().Items[cart.Find(id)].Count),price);
    }else{
        cart.Add(id,name,1,price);
    }
    $('#id_cartN').show();
    $('#id_cartN').html(cart.Read().TotalCount);
    $("#as"+id).prev().children().html(cart.Read().Items[cart.Find(id)].Count);
    // $("#as"+id).css({'color':'#FFFFFF'});
    // $("#as"+id).parent().css({'border':'0','background-color':'#FD4C5D'});
    // $("#as"+id).parent().next(".num-c").show();
    // $("#as"+id).parent().next().next(".minus").show();

    if (cart.Read().Items.length==0) $('.tc-num').hide();
      $('.tc-num').html(cart.Read().TotalCount);
      $('#total').html("合计：￥"+cart.Read().Total);
       if (cart.Read().Total==0) {
          $('#total').html("合计：￥0.00");
       }

     $(obj).prev().html(cart.Read().Items[cart.Find(id)].Count);


   }

   function add_shop(obj,id,name,price,img){
    if (cart.Find(id)>-1){
        cart.Add(id,name,++(cart.Read().Items[cart.Find(id)].Count),price);
    }else{
        cart.Add(id,name,1,price);
    }
    $('#id_cartN').show();
    $('#id_cartN').html(cart.Read().TotalCount);


    $(obj).prev().children().html(cart.Read().Items[cart.Find(id)].Count);


    var offset = $('#end').offset(),flyer = $("<img class='u-flyer' src='/Public/"+img+"' />");
       flyer.fly({
             start: {
                left:event.pageX,
                top: event.pageY-$("body").scrollTop()
           },
             end: {
                left: offset.left,
                top: offset.top-$("body").scrollTop(),
                width: 20,
                height: 20,
            },
            onEnd:function(){
                $('.u-flyer').eq(0).remove();
            }
        });
   }

   // alert(JSON.stringify(cart.Read()));
   // cart.Clear();
   // alert((cart.Read().TotalCount));
   function shopCart(){
    $('.gouwuche0,.gouwuche').show();
    var json=JSON.parse(JSON.stringify(cart.Read()));
    $('.gouwuche').html(doT.template($('#script-model').text())(json));
   }

   function clearCart(){
    $('.num-c').children().html('0');
    $('.minus,.tc-num,#shop_one').hide();
    $('.plus').css({'border':'1px solid #8e8a8a','background-color':'#FFFFFF'}).children().css({'color':'#FD4C5D'});
    $('#id_cartN').hide();
    $('#total').html('合计：￥0.00');
    cart.Clear();
   }

// var pay_json='';  //全局支付参数
// var pay_lock =1;
   function jiesuan() {
       window.location.href="/index.php/Api/Index/OrderInfo"
      // if(pay_lock==0)return false;
      // pay_lock=0
    // alert(JSON.stringify(cart.Read()));
    // return false;
     // var json=JSON.parse(JSON.stringify(cart.Read()));
    //  $.ajax({
    //     type:'POST',
    //     url: "<?php echo U('Api/Index/Order');?>",
    //     // contentType: "application/json",//必须有
    //     // dataType: "json", //表示返回值类型，不必须
    //     data:JSON.stringify(cart.Read()),
    //     success: function(ret){
    //         if(ret.code==100){
    //              clearCart();
    //              window.location.href="/index.php/Api/Index/OrderInfo?id="+ret.data;
    //         }else{
    //            pop_alert(ret.erro,2000);
    //         }
    //       // if(a.code==100){
    //       //   $('.gouwuche0').hide();
    //       //   $('.gouwuche').hide();
    //       //   pop_alert('购买成功')
    //       //   clearCart();
    //       // }
    //     }
    // })
  }

  function go2gift () {
    window.location.href="<?php echo U('Api/PersonInfo/Gift');?>"
  }

  //调用微信JS api 支付
function jsApiCall()
{
  WeixinJSBridge.invoke(
    'getBrandWCPayRequest',
    pay_json,
    function(res){
      pay_lock=1;
      if(res.err_msg == "get_brand_wcpay_request:ok" ) {
          $('.gouwuche0').hide();
          $('.gouwuche').hide();
          pop_alert('购买成功',2000)
          clearCart();
          setTimeout(function() {
              self.location="/index.php/Api/PersonInfo/Order";
          }, 2000);
      }else{
          $('.gouwuche0').hide();
          $('.gouwuche').hide();
          pop_alert('支付失败！',2000)
          clearCart();
          setTimeout(function() {
              self.location="/index.php/Api/PersonInfo/Order";
          }, 2000);
      }
    }
  );
}
function callpay()
{
  if (typeof WeixinJSBridge == "undefined"){
      if( document.addEventListener ){
          document.addEventListener('WeixinJSBridgeReady', jsApiCall(), false);
      }else if (document.attachEvent){
          document.attachEvent('WeixinJSBridgeReady', jsApiCall());
          document.attachEvent('onWeixinJSBridgeReady', jsApiCall());
      }
  }else{
      jsApiCall();
  }
}
</script>
</body>
<script type="text/javascript" src="/Public/api/doT.min.js"></script>
<script type="text/javascript" src="/Public/js/fly/jquery.fly.min.js"></script>
<script type="text/javascript" src="/Public/js/hyxcommon.js"></script>
<script src="/Public/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.cookie.js"></script>
<script src="/Public/js/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var cart=new CartHelper();//实例化一个购物车助手
    for (var i = 0; i <cart.Read().Items.length; i++) {
        $("#id_num"+cart.Read().Items[i].Id).html(cart.Read().Items[i].Count);
    }

    $('.carousel-indicators :first-child,.carousel-inner :first-child').addClass('active');

    $('#myCarousel').carousel({
         interval: 3000
    });

    // 轮播左
    $("#myCarousel").on("swipeleft",function(){
        $('#myCarousel').carousel('next');
    });

    // 轮播右
    $("#myCarousel").on("swiperight",function(){
        $('#myCarousel').carousel('prev');
    });
});

function yyx_shopopen(c){
    $('.article_list').hide();
    $("."+c).show();
}

function detai(id) {
     window.location.href="<?php echo U('Api/PersonInfo/Goods_detail/id/"+id+"');?>";
}

function hurl(url){
   window.location.href=url;
}

</script>
</html>