<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<!-- <link href="/wolsn/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/wolsn/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/wolsn/Public/static/bootstrap/css/docs.css" rel="stylesheet">
<link href="/wolsn/Public/static/bootstrap/css/onethink.css" rel="stylesheet"> -->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/wolsn/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/wolsn/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/wolsn/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/wolsn/Public/static/bootstrap/js/bootstrap.min.js"></script>
<!--<![endif]-->

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/wolsn/Public/static/wolsn/css/style.css" />
<link rel="stylesheet" href="/wolsn/Public/static/wolsn/css/css.css" />
<link rel="stylesheet" href="/wolsn/Public/static/wolsn/css/page.css" />
<script src="/wolsn/Public/static/wolsn/js/getStyle.js" type="text/javascript"></script>
<script src="/wolsn/Public/static/wolsn/js/umxTool.js" type="text/javascript"></script>
<script src="/wolsn/Public/static/wolsn/js/jquery.imgpreload.min.js" type="text/javascript"></script>
<script src="/wolsn/Public/static/wolsn/js/TweenMax.min.js" type="text/javascript"></script>
<script src="/wolsn/Public/static/wolsn/js/page.js" type="text/javascript"></script>
<script src="/wolsn/Public/static/wolsn/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="/wolsn/Public/static/wolsn/js/zzsc.js" type="text/javascript"></script>


<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<!--头部-->
    <div class="header">
        <div class="header_bar">
            <h1 class="logo"> <a href="<?php echo U('Index/index');?>"><img src="images/logo.png" title="上海沃莘新能源科技有限公司" alt="首页" /></a> </h1>
            <ul id="social" class="social">
                <li class="slist"> <a class="sfocus" style="background: none;" href="javascript:void(0);">电话：021-6053 0281</a> </li>
                <li class="slist"> <a class="sfocus" style="background: none;" href="javascript:void(0);">传真：021-6488 6727</a> </li>
                <li class="slist"> <a class="sfocus" href="/contents/">公众号</a>
                    <div class="sqrcode_wrap">
                        <a class="sqrcode" href="javascript:void(0);"><img src="images/2014751032863.png" title="昆明创意二维码" alt="昆明创意二维码" /></a>
                        <a class="slink" href="/contents/">查看联系方式</a>
                    </div>
                </li>
            </ul>
        </div>
        <div id="menu" class="menu">
            <ul class="mwrap">
                <li class="mli"> <a href="<?php echo U('Index/index');?>" class="mlink " id="topMenu1"> <span class="mico mico_home"><span class="micoi"></span></span> <span class="mname">首页</span> </a> </li>
                    <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mli"> 
                            <a href="<?php echo U('Article/index?category='.$vo['name']);?>" class="mlink" > 
                                <?php switch($vo["name"]): case "news": ?><span class="mico mico_news"><?php break;?>
                                    <?php case "about": ?><span class="mico mico_about"><?php break;?>
                                    <?php case "project": ?><span class="mico mico_service"><?php break;?>
                                    <?php default: ?><span class="mico mico_case"><?php endswitch;?>
                                <!-- <span class="mico mico_news"> -->
                                    <span class="micoi"></span>
                                </span> 
                                <span class="mname"><?php echo ($vo["title"]); ?></span> 
                            </a> 
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="mshadow"></div>
        </div>
    </div>
    <!--头部 end / -->
    <div class="header_bg"></div>

	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div id="main-container" > <!-- class="container" -->
    
        
        
    <div class="header_bg"></div>
    <!-- 新闻开始 -->
    <div class="about_cont_a">
        <div class="about_cont_aa"></div>
        <div class="about_cont_vc"></div>
        <div class="main">
            <div class="about_conta_top">
                <div class="about_conta_topl">
                    <img width="382" height="60" src="/wolsn/Public/static/wolsn/images/coll_a.jpg" />
                </div>
                <div class="about_conta_topr">
                    <div class="about_conta_toprt">
                        <span>当前位置：</span>
                        <a href="<?php echo U('Index/index');?>">主页</a> &gt;
                        <a href="<?php echo U('Article/index?category='.$category['name']);?>"><?php echo ($category['title']); ?></a> &gt;
                    </div>
                    <div class="about_conta_toprb a">
                        <!-- <?php if(is_array($menu_second)): $i = 0; $__LIST__ = $menu_second;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/index?category='.$vo['name']);?>"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?> -->
                        <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                    </div>
                </div>
            </div>
            <div class="coll">
                <div class="serBody"> 
                    <ul id="serlist" class="serlist"> 
                        <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li class="serli"> 
                                    <div class="serLeft"> 
                                     <div class="serlIco">
                                      <img src="images/2014731350821.png" alt="企业官网建设 营销网站建设 电子商务网站" title="企业官网建设 营销网站建设 电子商务网站" />
                                     </div> 
                                     <h2 class="serlTitle"><?php echo ($data["title"]); ?></h2> 
                                    </div> 
                                    <div class="serRight"> 
                                     <div class="serLabel">
                                      <span style="font-family:'Microsoft Yahei';font-size: 16px; color: #000000;"><?php echo ($data["title"]); ?></span>
                                     </div> 
                                     <div class="serSum">
                                      <?php echo ($data["description"]); ?>
                                     </div> 
                                     <a class="serDet" href="<?php echo U('Article/detail?id='.$data['id']);?>"> <span class="serdLink">查看详情</span> <span class="serdHover">查看详情</span> </a> 
                                    </div> 
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>   
                    <?php else: ?>
                        <?php $category=D('Category')->getChildrenId($category['id']);$__LIST__ = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1,10)->lists($category, '`level` DESC,`id` DESC', 1,true); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="serli"> 
                                    <div class="serLeft"> 
                                     <div class="serlIco">
                                      <img src="images/2014731350821.png" alt="企业官网建设 营销网站建设 电子商务网站" title="企业官网建设 营销网站建设 电子商务网站" />
                                     </div> 
                                     <h2 class="serlTitle"><?php echo ($list["title"]); ?></h2> 
                                    </div> 
                                    <div class="serRight"> 
                                     <div class="serLabel">
                                      <span style="font-family:'Microsoft Yahei';font-size: 16px; color: #000000;"><?php echo ($list["title"]); ?></span>
                                     </div> 
                                     <div class="serSum">
                                      <?php echo ($list["description"]); ?>
                                     </div> 
                                     <a class="serDet" href="<?php echo U('Article/detail?id='.$list['id']);?>"> <span class="serdLink">查看详情</span> <span class="serdHover">查看详情</span> </a> 
                                    </div> 
                                </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                <div class="nav">
                    <div class="sort-page">
                        <a>首页</a>
                        <a class="page_yes">1</a>
                        <a href="list_4_2.html">2</a>
                        <a href="list_4_3.html">3</a>
                        <a href="list_4_4.html">4</a>
                        <a href="list_4_5.html">5</a>
                        <a href="list_4_6.html">6</a>
                        <a href="list_4_7.html">7</a>
                        <a href="list_4_2.html">下一页</a>
                        <a href="list_4_16.html">末页</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 新闻结束 -->
        <!-- <div class="span9"> -->
        <!-- Contents
        ================================================== -->
        <!-- <section id="contents">
            <?php $category=D('Category')->getChildrenId($category['id']);$__LIST__ = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1,10)->lists($category, '`level` DESC,`id` DESC', 1,true); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="">
                    <h3><a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a></h3>
                </div>
                <div>
                    <p class="lead"><?php echo ($list["description"]); ?></p>
                </div>
                <div>
                    <span><a href="<?php echo U('Article/detail?id='.$list['id']);?>">查看全文</a></span>
                    <span class="pull-right">
                        <span class="author"><?php echo (get_username($list["uid"])); ?></span>
                        <span>于 <?php echo (date('Y-m-d H:i',$list["create_time"])); ?></span> 发表在 <span>
                        <a href="<?php echo U('Article/lists?category='.get_category_name($list['category_id']));?>"><?php echo (get_category_title($list["category_id"])); ?></a></span> 
                        <span>阅读( <?php echo ($list["view"]); ?> )</span>&nbsp;&nbsp;
                    </span>
                </div>
                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>

        </section> -->
        <!-- </div> -->

   
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
<!-- footer -->
    <div class="textLink">
        <div class="marquee1">
            <div class="tlHeader">
                
            </div>
        </div>
    </div>
    <!-- 网站底部 开始 -->
    <section id="site_footer">
        <div class="footer_glare"></div>
        <section class="container_12 widgetized_footer">
            <div class="grid_3">
                <aside class="widget widget_categories">
                    <h3 class="widget-title"> <span> 关于我们 </span> </h3>
                    <ul>
                        <li> <a href="about.html">公司简介</a></li>
                        <li> <a href="/about/youshi/">我们的优势</a></li>
                        <li> <a href="/about/jzlc/">建站流程</a></li>
                        <li> <a href="/about/pay/">支付方式</a></li>
                        <li> <a href="/contents/">联系方式</a></li>
                    </ul>
                </aside>
                <div class="clear">
                </div>
            </div>
            <div class="grid_3">
                <aside class="widget widget_categories">
                    <h3 class="widget-title"> <span> 服务项目 </span> </h3>
                    <ul>
                        <li> <a href="website_build.html">网站制作</a></li>
                        <li> <a href="website_revision.html">网站改版</a></li>
                        <li> <a href="website_webmastering.html">网站维护</a></li>
                        <li> <a href="website_400tel.html">400电话</a></li>
                        <li> <a href="website_domain.html">主机域名</a></li>
                    </ul>
                </aside>
                <div class="clear">
                </div>
            </div>
            <div class="grid_3">
                <aside class="widget wgt_popular_post">
                    <h3 class="widget-title"> <span> 建站报价 </span> </h3>
                    <ul>
                        <li> <a href="/jzbj/11.html">基础经济型</a></li>
                        <li> <a href="/jzbj/12.html">宣传展示型</a></li>
                        <li> <a href="/jzbj/13.html">营销推广型</a></li>
                        <li> <a href="/jzbj/14.html">定制开发型</a></li>
                        <li> <a href="/jzbj/15.html">电子商务型</a></li>
                    </ul>
                </aside>
                <div class="clear">
                </div>
            </div>
            <div class="grid_3">
                <aside class="widget wgt_popular_post">
                    <h3 class="widget-title"> <span> 成功案例 </span> </h3>
                    <ul>
                        <li> <a href="case.html">公司企业</a></li>
                        <li> <a href="/anli/400/">400电话</a></li>
                        <li> <a href="/anli/wap/">移动APP</a></li>
                    </ul>
                </aside>
                <div class="clear">
                </div>
            </div>
            <div class="grid_4">
                <aside class="widget">
                    <h3 class="widget-title"> <span> 联系我们 </span> </h3>
                    <p> 业务咨询：0871-68528850 </p>
                    <p> 业务洽谈：139-8764-4868 </p>
                    <p> 服务热线：400-0871-840 </p>
                    <p> </p>
                    <div class="f_qq">
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=26404638&amp;Menu=yes"><img src="images/QQ1.png" title="建站咨询" vspace="4" border="0" align="absmiddle" /></a>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=5130747&amp;Menu=yes"><img src="images/QQ2.png" title="400办理" vspace="4" border="0" align="absmiddle" /></a>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=9902582&amp;Menu=yes"><img src="images/QQ3.png" title="投诉建议" vspace="4" border="0" align="absmiddle" /></a>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=183648186&amp;Menu=yes"><img src="images/QQ1.png" title="技术支持" vspace="4" border="0" align="absmiddle" /></a>
                    </div>
                    <p></p>
                </aside>
            </div>
        </section>
    </section>
    <section id="site_footer_second">
        <section class="container_12 site_footer_inner">
            <div class="grid_6 site_copyright">
                <a href="index.html" title="网络服务 ">网络服务 </a> More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
            </div>
            <div class="grid_5 footer2_right ">
                Copyright 2014
                <a href="index.html" title="www.km-jz.cn">www.km-jz.cn</a> All rights reserved.
            </div>
            <div class="clear">
            </div>
        </section>
        <div class="clear">
        </div>
    </section>
    <div class="clear">
    </div>
    <!-- 网站底部 end -->
    <!-- 向上代码 开始 -->
    <div style="display: none;" id="rocket-to-top">
        <div style="opacity:0;display: block;" class="level-2"></div>
        <div class="level-3"></div>
    </div>
    <!--footer end / -->
    <script src="/wolsn/Public/static/wolsn/js/jquery.nicescroll.min.js" type="text/javascript"></script>
    <div id="ascrail2000" class="nicescroll-rails" style="width: 8px; z-index: 1000000; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;">
        <div style="position: relative; top: 0px; float: right; width: 8px; height: 182px; border: 0px; border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; background-color: rgb(34, 34, 34); background-clip: padding-box;"></div>
    </div>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/wolsn", //当前网站地址
		"APP"    : "/wolsn/index.php?s=", //当前项目地址
		"PUBLIC" : "/wolsn/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
<script type="text/javascript">
        $('.mwrap').find('a[href="<?php echo ($highlight_url); ?>"]').addClass('curr');
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>