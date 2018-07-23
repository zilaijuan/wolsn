<?php if (!defined('THINK_PATH')) exit(); if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if(($current) == $cate['id']): ?><a href="<?php echo U('Article/lists?category='.$cate['name']);?>">
				<i class="icon-chevron-right"></i><?php echo ($cate["title"]); ?>
			</a>
		
	<?php else: ?>
		
			<a href="<?php echo U('Article/lists?category='.$cate['name']);?>">
				<i class="icon-chevron-right"></i><?php echo ($cate["title"]); ?>
			</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>