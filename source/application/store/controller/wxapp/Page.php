<?php

namespace app\store\controller\wxapp;

use app\store\controller\Controller;
use app\store\model\WxappPage as WxappPageModel;

/**
 * 小程序页面管理
 * Class Page
 * @package app\store\controller\wxapp
 */
class Page extends Controller
{
    /**
     * 首页设计
     * @return array|mixed
     * @throws \think\exception\DbException
     */
    public function home()
    {
        $model = new WxappPageModel();
        $list = $model->getList();
        return $this->fetch('home', compact('list'));
    }

    public function create(){
        $model = WxappPageModel::detail();
        if (!$this->request->isAjax()) {
            $jsonData = $model['page_data']['json'];
            return $this->fetch('create', compact('jsonData'));
        }
//        return $this->fetch('create');
    }
    public function edit()
    {
        if ($this->request->has('pageId')) {
            $pageId = $this->request->request('pageId');
            $model  = WxappPageModel::detail($pageId);
            if (!$this->request->isAjax()) {
                $jsonData = $model['page_data']['json'];
                return $this->fetch('add', compact('jsonData'));
            }
            $data = $this->postData('data');
            if (!$model->edit($data)) {
                return $this->renderError('更新失败');
            }
            return $this->renderSuccess('更新成功');
        }
    }

    public function add(){
        if (!$this->request->isAjax()) {
            return $this->fetch('add');
        }
        $model = new WxappPageModel();
        $data = $this->postData('data');
        if (!$model->add($data)) {
            return $this->renderError('添加失败');
        }
        return $this->renderSuccess('添加成功');
    }

    /**
     * 页面链接
     * @return mixed
     */
    public function links()
    {
        return $this->fetch('links');
    }


}
