<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
<!--     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页标题</title>

    <!-- Bootstrap -->
    <!-- <link href="/ypa/Public/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/ypa/Public/Home/css/main.css" />
    <script type="text/javascript" src="/ypa/Public/Home/js/swfobject.js" ></script>
    <script type="text/javascript" src="/ypa/Public/Home/js/scrollpic.js"></script>
  </head>
  <body>
  <div id="shortcut">
    <div class="w">
      <ul class="lh fl">
         <li class="fore1 ld">
           <b></b>收藏本站<a href="" />
         </li>
      </ul>
      <ul class="lh fr">
          <li class="fore1 ld">
            你好，请<a href="<?php echo U('login/index');?>"> [登录] </a>  <a href="<?php echo U('register/index');?>">[注册]</a>
          </li>
          <li class="spacer"></li>   
          <li>
          我的订单
          </li>
      </ul>
    </div>
  </div>
  <!-- shortcut end -->

  <div id="header">
    <div id="header-top" class="w">
      <div id="logo" class="ld">
        <a href="/">
          <img src="/ypa/Public/Home/img/logo-270X60.png" width="270" height="60" alt="logo..." />
        </a>
      </div>
      <!-- logo end -->
      <div id="search-top">
        <div class="i-search">
          <div class="search-form">
            <input type="text" class="text"/>
            <input type="button" value="搜索" class="button" />
          </div>
        </div>
        <div id="hotwords">
          <a href="#" target="_blank" style="color:red;">校园之星</a> <a href="#" target="_blank" >其他产品</a><a href="#" target="_blank" >其他产品</a><a href="#" target="_blank" >其他产品</a>
        </div>
      </div>   
      <!-- search-top end --> 
      <div id="mystudyim">
        <dl>
          <dt class="ld"><s></s><a href="#">我的我的</a><b></b></dt>
        </dl> 
      </div>
      <!-- my ypa end -->
      <div id="shoppingcart">
        <dl>
          <dt class="ld"><s></s><span class="shopping"><span id="shoping-amount">0</span></span><a href="#">我的购物车</a><b></b></dt>
        </dl> 
      </div>
      <!-- shopcart end -->
    </div>
  </div>
  <!-- header end -->
  
  <div class="w">
      <div id="nav">
          <div id="category">
            <div class="mt ld">
              <h2>
                全部商品分类
              </h2>
            </div>
            <div class="mc">
              <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item" onmouseover="this.className='item hover fore1'" onmouseout="this.className='item'">
                    <span>
                        <h3><a href="/list/<?php echo ($vo["id"]); ?>"><?php echo ($vo["cat_name"]); ?></a></h3><s></s>
                    </span>
                    <div class="i-mc" style="top:5px;">
                     
                         <div class="subitem">
                            <?php if(is_array($vo['subitem'])): $i = 0; $__LIST__ = $vo['subitem'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><dl class="fore1">
                                <dt><a href="<?php echo ($sub["id"]); ?>"><?php echo ($sub["cat_name"]); ?></a></dt>
                                <dd><?php echo (getCatName($sub["id"])); ?></dd>
                              </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                         </div>

                         <div id="cat-right">
                            <!-- 图片广告 -->
                            <dl class="category-promotions">
                                <dd>
                                    <ul>
                                        <?php if(is_array($vo['ad'])): $i = 0; $__LIST__ = $vo['ad'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subad): $mod = ($i % 2 );++$i;?><li>
                                                <a href="<?php echo ($subad["ad_link"]); ?>" target="_blank">
                                                    <img src="/ypa/Public/Home/img/ad/<?php echo ($subad["ad_img"]); ?>" width="194" height="70" title="<?php echo ($subad["ad_name"]); ?>"/>
                                                </a>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>    
                                    </ul>
                                </dd>
                            </dl>
                            <!-- 文字 -->
                            <dl class="category-brands">
                                <dt>推荐品牌</dt>
                                <dd>
                                    <ul>
                                        <?php if(is_array($vo['brand'])): $i = 0; $__LIST__ = $vo['brand'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subbrand): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($subbrand["brand_url"]); ?>" target="_blank"><?php echo ($subbrand["brand_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                                      
                                    </ul>
                                </dd>
                            </dl>
                         </div>

                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </div>
          <ul id="navitems">
            <li class="current"><a href="#">首页</a></li>
           <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class=""><a href="/"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
          </ul>
      </div>
  </div>
  <!-- nav end-->

  <div class="w">
      <div id="o-slide">
          <div class="slide" id="swfContent">
            <script type="text/javascript">
                  var xmlData="<list><?php if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advo): $mod = ($i % 2 );++$i;?><item><img>/ypa/Public/Home/img/ad/<?php echo ($advo["ad_img"]); ?></img><url><?php echo ($advo["ad_link"]); ?></url></item><?php endforeach; endif; else: echo "" ;endif; ?></list>";
                  var flashvars = {xmlData:xmlData};
                  var params = {menu:false,wmode:"opaque"};
                  var attributes = {};
                  swfobject.embedSWF("/ypa/Public/Home/swf/lanren.swf", "swfContent", "670", "240", "9","expressInstall.swf", flashvars, params, attributes);
            </script>
          </div>
          <!-- slide end-->

          <div id="mscroll">
              <div class="ctrl" id="mscroll-ctrl-prev"><b></b></div>
              <div class="ctrl" id="mscroll-ctrl-next"><b></b></div>
              <div class="o-list">
                  <div class="list" id="rollphoto1">
                    <ul>
                      <?php if(is_array($adscroll)): $i = 0; $__LIST__ = $adscroll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voscroll): $mod = ($i % 2 );++$i;?><li class="item">
                              <a href="<?php echo ($voscroll["ad_link"]); ?>}" target="_blank">
                                  <img width="202" height="159" src="/ypa/Public/Home/img/upload/<?php echo ($voscroll["ad_img"]); ?>"/>
                              </a>
                          </li><?php endforeach; endif; else: echo "" ;endif; ?>   
                    </ul>
                  </div>
              </div>
          </div>
          <script language='javascript' type='text/javascript'>
                var scrollPic_01 = new ScrollPic();
                scrollPic_01.scrollContId   = "rollphoto1"; //内容容器ID
                scrollPic_01.arrLeftId      = "mscroll-ctrl-prev";//左箭头ID
                scrollPic_01.arrRightId     = "mscroll-ctrl-next"; //右箭头ID
                if (screen.width >= 1280){scrollPic_01.frameWidth     = 609;}else{scrollPic_01.frameWidth     = 488;}
                if (screen.width >= 1280){scrollPic_01.pageWidth      = 609;}else{scrollPic_01.pageWidth      = 488;}
                scrollPic_01.speed          = 10; //移动速度(单位毫秒，越小越快)
                scrollPic_01.space          = 10; //每次移动像素(单位px，越大越快)
                scrollPic_01.autoPlay       = true; //自动播放
                scrollPic_01.autoPlayTime   = 3; //自动播放间隔时间(秒)
                scrollPic_01.initialize(); //初始化
            </script>
          <!-- scroll end -->

      </div>
      <!-- middle part end-->
      <div id="rand">
          <a href="<?php echo ($adrand["ad_link"]); ?>" target="_blank"><img src="/ypa/Public/Home/img/upload/<?php echo ($adrand["ad_img"]); ?>"/></a>
      </div>
      <!-- randonm ad end-->
      <div class="m" id="ypa_news">
        <div class="mt">
            <h3>XX快报</h3>
            <div class="extra fr"><a href="#" target="_blank">更多快报 &nbsp; &gt; </a></div>
        </div>
        <div class="mc">
            <ul>
              <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voarticle): $mod = ($i % 2 );++$i;?><!-- <li <?php if(($mod) == "0"): ?>class="odd"<?php endif; ?> ><a href="<?php echo ($voarticle["article_link"]); ?>}"><?php echo ($voarticle["title"]); ?>}</a></li> -->
                  <li class="<?php echo ($mod?'':'odd'); ?>" ><a href="<?php echo ($voarticle["article_link"]); ?>}"><?php echo ($voarticle["title"]); ?>}</a></li><?php endforeach; endif; else: echo "" ;endif; ?>                
            </ul>
        </div>
      </div>
      <!-- kuai bao end-->
      <div id="ypa_first" class="m">
        <div class="mt">
          <h3>xx首发</h3>
        </div>
        <div class="mc">
            <div class="item">
                <div class="p-img"><a href="" target="_blank"><img width="100" height="100" alt="" src="/ypa/Public/Home/img/upload/firstpublish001.jpg"/></a></div>
                <div class="p-title"><a href="#" target="_blank">Title</a></div>
                <div class="p-detail">Content</div>
            </div>
        </div>
      </div>
      <!-- 首发 end-->
  </div>
  <div style="clear:both"></div>
  <div id='floor-list'>
      <div class="w w1" id="electronics">
          <div class="m m1 catalogue">
              <div class="mt ld">
                  <div class="floor">
                    <b class="b b1"></b>
                    <b class="b b2"></b>
                    <b class="b b3">1F</b>
                    <b class="b4"></b>
                  </div>
                  <h2>家电通讯</h2>
              </div>
              <div class="mc">
                  <div class="style1">
                      <ul>
                          <li><a href="#">手机</a></li>
                          <li><a href="#">空调</a></li>
                          <li><a href="#">手机配件</a></li>
                          <li><a href="#">平板电视</a></li>
                          <li><a href="#">话费补贴</a></li>
                          <li><a href="#">冰箱</a></li>
                          <li><a href="#">生活电器</a></li>
                          <li><a href="#">洗衣机</a></li>
                          <li><a href="#">厨房电器</a></li>
                          <li><a href="#">热水器</a></li>
                          <li><a href="#">个护健康</a></li>
                          <li><a href="#">烟机/灶具</a></li>
                          <li><a href="#">五金家装</a></li>
                          <li><a href="#">家庭影院具</a></li>
                          <li><a href="#">酒柜冷柜</a></li>
                          <li><a href="#">汽车用品</a></li>


                      </ul>
                  </div>
              </div>
          </div>
          <!-- 左边目录 end -->
      </div>
      <!-- 家电通讯 end -->
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/ypa/Public/Home/js/bootstrap.min.js"></script>


    <script type="text/javascript">
    // $(function(){
    //     alert('me');

    // });
    </script>
  </body>
</html>