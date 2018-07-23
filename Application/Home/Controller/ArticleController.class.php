<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;

/**
 * 文档模型控制器
 * 文档模型列表和详情
 */
class ArticleController extends HomeController {

    /* 文档模型频道页 */
	public function index(){
		
		/* 分类信息 */
		$category = $this->category();

		$this->getMenu($category['id']);//获取菜单


 		if($category['name'] == "project"){
 			$this->getProject($category);
 		}else if(in_array($category['name'],array("about",'company','contact'))){
 			
 			$this->about($category);

 			return;
 		}
		//频道页只显示模板，默认不读取任何内容
		//内容可以通过模板标签自行定制
		$template = $this->getTemplate($category);
		/* 模板赋值并渲染模板 */
		
		$this->assign('category', $category);
		$this->display($template);
	}

	/* 文档模型列表页 */
	public function lists($p = 1){
		/* 分类信息 */
		$category = $this->category();
		// var_dump($category);
		$this->getMenu($category['pid']);//获取菜单
		/* 获取当前分类列表 */
		$Document = D('Document');
		$list = $Document->page($p, $category['list_row'])->lists($category['id']);
		if(false === $list){
			$this->error('获取列表数据失败！');
		}
		$template = $this->getTemplate($category);
// var_dump($template);
		$categoryP = D('Category')->info($category['pid']);
		/* 模板赋值并渲染模板 */
		$this->assign('category', $category);
		$this->assign('list', $list);
		$this->display($template);
	}

	/* 文档模型详情页 */
	public function detail($id = 0, $p = 1){
		/* 标识正确性检测 */
		if(!($id && is_numeric($id))){
			$this->error('文档ID错误！');
		}

		/* 页码检测 */
		$p = intval($p);
		$p = empty($p) ? 1 : $p;

		

		/* 获取详细信息 */
		$Document = D('Document');
		$info = $Document->detail($id);
		if(!$info){
			$this->error($Document->getError());
		}
		//菜单
		$cate_id = $info['category_id'];
		$cate = D('Category')->info($cate_id);
		if($cate['pid'] == 0){
			$hl_id = $cate_id;
		}else{
			$hl_id = $cate['pid'];
		}
		$this->getMenu($hl_id);

		/* 分类信息 */
		$category = $this->category($info['category_id']);

		/* 获取模板 */
		if(!empty($info['template'])){//已定制模板
			$tmpl = $info['template'];
		} elseif (!empty($category['template_detail'])){ //分类已定制模板
			$tmpl = $category['template_detail'];
		} else { //使用默认模板
			$tmpl = 'Article/'. get_document_model($info['model_id'],'name') .'/detail';
		}

		/* 更新浏览数 */
		$map = array('id' => $id);
		$Document->where($map)->setInc('view');

		/* 模板赋值并渲染模板 */
		$this->assign('category', $category);
		$this->assign('info', $info);
		$this->assign('page', $p); //页码
		$this->display($tmpl);
	}

	/* 文档分类检测 */
	private function category($id = 0){
		/* 标识正确性检测 */
		$id = $id ? $id : I('get.category', 0);
		if(empty($id)){
			$this->error('没有指定文档分类！');
		}

		/* 获取分类信息 */
		$category = D('Category')->info($id);
		if($category && 1 == $category['status']){
			switch ($category['display']) {
				case 0:
					$this->error('该分类禁止显示！');
					break;
				//TODO: 更多分类显示状态判断
				default:
					return $category;
			}
		} else {
			$this->error('分类不存在或被禁用！');
		}
	}

	// 获取模板
	public function getTemplate($category){
		if($category['pid'] == 0){
			$category_name = $category['name'];
		}else{
			$category = D('Category')->info($category['pid']);
			$category_name = $category['name'];
		}
		switch ($category_name) {
			case 'news':
				$template = 'news';
				break;
			case 'about':
				$template = 'about';
				break;
			case 'project':
				$template = 'project';
				break;
			default:
				$template = 'index';
				break;
		}
		if($category['keywords'] == "product"){
			$template = "product";
		}
		return $template;
	}

	//获取菜单
	public function getMenu($category_id=-1){

		$menu = D('Category')->getTree(); //获取菜单
		$menu_second = D('Category')->where(array('pid' =>  $category_id))->select();
		$firstMenuName = D('Category')->where(array('id' =>  $category_id))->find();
		$this->assign('highlight_url',U('Article/index?category='.$firstMenuName['name']));
		// var_dump($category_id);
		$this->assign('menu',$menu);//菜单
		$this->assign('menu_second',$menu_second);//二级菜单
	}

	//工程业绩页面
	public function getProject($category,$p = 1){
		// var_dump($category);
		$Document = D('Document');
		$list = $Document->page($p, $category['list_row'])->lists($category['id']);
		// var_dump($Document->getLastSql());
		if(false === $list){
			$this->error('获取列表数据失败！');
		}

		/* 模板赋值并渲染模板 */
		$this->assign('list', $list);

	}

	public function about($category){
		$type = $category['name'];
		if($type == 'about'){
			$type = "company";
		}else{
			$this->getMenu($category['pid']);
		}
		$category_id = M('Category')->where(array('name'=>$type))->find();
		$doc = M('Document')->where(array('category_id'=>$category_id['id']))->find();
		$id = $doc['id'];
		/* 标识正确性检测 */
		if(!($id && is_numeric($id))){
			$this->error('文档ID错误！');
		}

		/* 获取详细信息 */
		$Document = D('Document');
		$info = $Document->detail($id);
		if(!$info){
			$this->error($Document->getError());
		}


		/* 更新浏览数 */
		$map = array('id' => $id);
		$Document->where($map)->setInc('view');

		/* 模板赋值并渲染模板 */
		$this->assign('category', $category);
		$this->assign('info', $info);

		$this->display($info['template']);
	}

}
