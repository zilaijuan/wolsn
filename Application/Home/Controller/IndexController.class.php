<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){
        //banner
        $this->getBanner();
        
        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);
        // var_dump($category);
        //工程业绩
        $project = M('Category')->where(array('name'=>'project'))->find();
        $project_lists    = D('Document')->lists($project['id']);
        //公司新闻
        // $news_lists    = D('Document')->lists(41);
        //公告栏
        // $notices_lists    = D('Document')->lists(2);
        //站内动态
        $news_lists = D('Document')->lists("2,41");
        // var_dump(date("M",1532180077));
        //公司简介
        $infoId = M('Category')->where(array('name'=>'company'))->find();
        $companyInfo = D('Document')->where(array('category_id'=>$infoId['id']))->find();
        //联系我们
        $contactId = M('Category')->where(array('name'=>'contact'))->find();
        $contact = D('Document')->where(array('category_id'=>$contactId['id']))->find();
        $this->assign('highlight_url',U("Index/index"));
        $this->assign('menu',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页
        $this->assign('project_lists',$project_lists);//工程业绩
        $this->assign('news_lists',$news_lists);//公司新闻
        // $this->assign('notices_lists',$notices_lists);//公告栏
        $this->assign('companyInfo',$companyInfo);//公司简介
        $this->assign('contact',$contact);//联系我们

                 
        $this->display();
    }

    //banner
    public function getBanner(){
        $Banner = M('Banner');
        $map['status'] = 1;
        $banner_list = $Banner->where($map)->order("sort")->select();
        $this->assign('banner_list',$banner_list);
    }

}