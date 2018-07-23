<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;

/**
 * 后台分类管理控制器
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
class BannerController extends AdminController {

    /**
     * 分类管理列表
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function index(){
        $list = M('Banner')->select();

        $this->assign('_list', $list);
        
        $this->meta_title = '分类管理';
        $this->display();
    }



    

    /* 新增分类 */
    public function add($pid = 0){
        $Banner = M('Banner');

        if(IS_POST){ //提交表单
            $pic_id = I('pic_id',0);
            if($pic_id == 0){
                $this->error( 'no picture!' );
            }else{
                $data = array();
                $data['pic_id'] = $pic_id;
                $data['create_time'] = time();
                $data['status'] = 1;
                $data['sort'] = I('sort',0);
                if(M('Banner')->add($data)){
                    $this->success("新增成功！",U('index'));
                }else{
                    
                    $this->error( '新增失败！' );
                }
            }
        } else {
            $cate = array();
            if($pid){
                /* 获取上级分类信息 */
                $cate = $Category->info($pid, 'id,name,title,status');
                if(!($cate && 1 == $cate['status'])){
                    $this->error('指定的上级分类不存在或被禁用！');
                }
            }

            /* 获取分类信息 */
            
            $this->meta_title = '新增横幅';
            $this->display('add');
        }
    }

    //修改sort
    public function edit(){
        $id = I('id',0);
        if($id>0){
            $sort = I('sort',0);
            $data['sort'] = $sort;
            if(D("Banner")->where(array('id'=>$id))->save($data)){
                $this->success("修改成功！");
            }else{
                $this->error("修改失败！");
            }
        }
    }



    /**
     * 横幅状态修改
     * @author 
     */
    public function changeStatus($method=null){
        $id = array_unique((array)I('id',0));

        $id = is_array($id) ? implode(',',$id) : $id;
        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }
        $map['id'] =   array('in',$id);
        switch ( strtolower($method) ){
            case 'forbid':
                $this->forbid('Banner', $map );
                break;
            case 'resume':
                $this->resume('Banner', $map );
                break;
            case 'delete':
                $this->delete('Banner', $map );
                break;
            default:
                $this->error('参数非法');
        }
    }

}
