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
    
        
        
    <script>
    $(document).ready(function() {
        if ($.fn.cssOriginal != undefined) $.fn.css = $.fn.cssOriginal;
        $('.wide-banner').revolution({
            delay: 7000,
            startheight: 500,
            startwidth: 1000,
            hideThumbs: 200,
            thumbWidth: 100,
            // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
            thumbHeight: 50,
            thumbAmount: 5,
            navigationType: "bullet",
            // bullet, thumb, none
            navigationArrows: "verticalcentered",
            // nexttobullets, solo (old name verticalcentered), none
            navigationStyle: "round",
            // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
            navigationHAlign: "center",
            // Vertical Align top,center,bottom
            navigationVAlign: "bottom",
            // Horizontal Align left,center,right
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            touchenabled: "on",
            // Enable Swipe Function : on/off
            onHoverStop: "on",
            // Stop Banner Timet at Hover on Slide on/off
            stopAtSlide: -1,
            // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
            stopAfterLoops: -1,
            // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
            hideCaptionAtLimit: 0,
            // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
            hideAllCaptionAtLilmit: 0,
            // Hide all The Captions if Width of Browser is less then this value
            hideSliderAtLimit: 0,
            // Hide the whole slider, and stop also functions if Width of Browser is less than this value
            shadow: 0,
            //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
            fullWidth: "on" // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
        })
        var bAnimateStop = 1;
        $(window).scroll(function() {

            if (clientShow('.h-service')) {
                $('.h-service .bd .service-list li').addClass('animation');
            }
            if (clientShow('.move-mod') && bAnimateStop === 1) {
                $('.case-slider').umxCaseSlider();
                bAnimateStop = 2;
            }
            if (clientShow('.h-mission')) {
                $('.h-mission .bd').addClass('scale-animate');
            }
        });
        $('#header').fixedNav();
        $('.h-client .bd').scrollSlider();
    });
    </script>
    <div class="banner">
        <div id="bannerQuery" class="bwrap">
            <ul class="bquery">
                <?php if(is_array($banner_list)): $i = 0; $__LIST__ = $banner_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="blist"><a href="#"><img src="/wolsn<?php echo (get_cover($vo['pic_id'],'path')); ?>" title="昆明网站建设" alt="昆明网站建设" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>
        <div class="bctrl">
            <div id="bannerCtrl" class="bctrli"></div>
        </div>
    </div>
    <!--服务顶目-->
    <div class="h-service">
        <div class="hd">
            <strong>产品类型</strong>
            <div class="bor-bton"></div>
        </div>
        <div class="container bd">
            <ul class="service-list">
                
                <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["pid"] == '0') and ($vo["keywords"] == 'product')): ?><li class="animation">
                            <div class="mod">
                                <i class="icon i<?php echo ($key); ?>"></i>
                                <strong><a href="<?php echo U('Article/index?category='.$vo['name']);?>" target="_blank"> <?php echo ($vo["title"]); ?></a></strong>
                                <p><?php echo ($vo["description"]); ?></p>
                            </div>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!--服务顶目 end / -->
    <!--案例展示-->
    <div class="h-case">
        <div class="hd">
            <strong>工程业绩展示</strong>
            <div class="bor-bton"></div>
        </div>
        <div class="container bd case-slider">
            <div class="move-mod clear">
                <ul class="case-list" style="position: relative; height: 295px;">
                    <?php if(is_array($project_lists)): $i = 0; $__LIST__ = $project_lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="position: absolute; left: 0px; top: 0px; opacity: 1;">
                            <a href="/anli/web/339.html" target="_blank"> 
                                <img src="images/1-1502011221220-L.jpg" title="<?php echo ($vo["title"]); ?>" alt="<?php echo ($vo["title"]); ?>" width="266" height="163" />
                                <strong><?php echo ($vo["title"]); ?></strong> <span><?php echo (msubstr($vo["description"],0,30,'utf-8',true)); ?></span> 
                            </a>
                            <div class="bg"></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                </ul>
            </div>
            <div class="mod b-mod">
                <a href="case.html" class="link-more" target="_blank">查看更多 + </a>
                <span class="next"> <em class="arrow arrowR"></em> <small class="arrow arrowR s-arrow"></small> </span>
                <span class="preve"> <em class="arrow arrowL"></em> <small class="arrow arrowL l-s-arrow"></small> </span>
            </div>
        </div>
    </div>
    <!--案例展示 end / -->
    <!--关于我门-->
    <div class="h-case1">
        <div class="hd">
            <strong>关于我们</strong>
            <div class="bor-bton"></div>
        </div>
        <div class="container bd case-slider">
            <div class="iaAndn">
                <div id="iabout" class="iabout">
                    <div class="iaHeader">
                        <a class="iaPrev" href="javascript:void(0);" title="上一个"></a>
                        <a class="iaNext" href="javascript:void(0);" title="下一个"></a>
                    </div>
                    <ul class="iaQuery">
                        <li class="iaList">
                            <div class="iaName">
                                <span class="iaNameEn">ABOUT US</span>
                                <span class="iaNameCn">公司简介</span>
                            </div>
                            <div class="iaBody">
                                <div class="iaPic">
                                    <a href="about.html"><img src="images/kmcyzs1.jpg" /></a>
                                    <span class="iaPicMask"></span>
                                    <span class="iaPicName">用心服务 塑造品质</span>
                                </div>
                                <div class="iaIntro">
                                    <h4 class="iaTitle"><?php echo ($companyInfo['title']); ?></h4>
                                    <div class="iaContent">
                                        <?php echo (msubstr($companyInfo['description'],0,50,'utf-8',true)); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="iaList">
                            <div class="iaName">
                                <span class="iaNameEn">ABOUT US</span>
                                <span class="iaNameCn">联系我们</span>
                            </div>
                            <div class="iaBody">
                                <div class="iaPic">
                                    <a href="about.html"><img src="images/kmcyzs2.jpg" /></a>
                                    <span class="iaPicMask"></span>
                                    <span class="iaPicName">客户至上 妥善无忧</span>
                                </div>
                                <div class="iaIntro">
                                    <h4 class="iaTitle"><?php echo ($contact['title']); ?></h4>
                                    <div class="iaContent">
                                        <?php echo (msubstr($contact['description'],0,50,'utf-8',true)); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="iaList">
                            <div class="iaName">
                                <span class="iaNameEn">ABOUT US</span>
                                <span class="iaNameCn">企业文化</span>
                            </div>
                            <div class="iaBody">
                                <div class="iaPic">
                                    <a href="about.html"><img src="images/kmcyzs3.jpg" /></a>
                                    <span class="iaPicMask"></span>
                                    <span class="iaPicName">始终如一 以诚为本</span>
                                </div>
                                <div class="iaIntro">
                                    <h4 class="iaTitle">昆明创意 —— 文化</h4>
                                    <div class="iaContent">
                                        我们主要致力于企业网站建设、品牌形象设计、交互设计、视觉设计于一体的专业用户体验的互联网服务。互联网是当今不可或缺的沟通方式，越来越多的人通过网络搜寻...
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                    <div class="iaCtrl"></div>
                </div>
                <div id="iNews" class="iNews">
                    <div class="inHeader">
                        <a class="inMore" href="news.html">更多</a>
                        <a class="inNext" href="javascript:void(0);" title="下一页"></a>
                        <a class="inPrev" href="javascript:void(0);" title="上一页"></a>
                        <span class="inNameEn">NEWS</span>
                        <span class="inNameCn">站内动态</span>
                    </div>
                    <div class="inQueryWrap">
                        <ul class="inQuery">
                            <?php if(is_array($project_lists)): $i = 0; $__LIST__ = $project_lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="inList">
                                    <div class="inLableDate">
                                        <span class="indDay"><?php echo (date("d",$vo["update_time"])); ?></span>
                                        <span class="indMonth"><?php echo (date("M",$vo["update_time"])); ?>.</span>
                                    </div> <span class="inDate"><?php echo (time_format($vo["update_time"],"Y-m-d")); ?></span> <a href="news_detail.html" target="_blank" class="inTitle" title="昆明天鲜配农业发展有限公司网站正式签约制作"><?php echo ($vo["title"]); ?></a>
                                    <div class="inIntro">
                                        <?php echo ($vo["description"]); ?>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--关于我们 end / -->
    <!--关于 动态-->
    
    <!--关于动态 end / -->

   
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