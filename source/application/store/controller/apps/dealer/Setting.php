<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 17:55
 */

namespace app\store\controller\apps\dealer;
use app\store\controller\Controller;
use app\store\model\DistributorsSetting as SettingModel;
use think\Request;

class Setting extends Controller
{
	public function index(){
        $model = new SettingModel();
		$data = [];
        $request = Request::instance();
        if($request->method() === 'POST'){
            $requestData = $request->request()['setting'];
            $data['basic'] = json_encode($requestData['basic']);
            $data['condition'] = json_encode($requestData['condition']);
            $data['commission'] = json_encode($requestData['commission']);
            $data['settlement'] = json_encode($requestData['settlement']);
            $data['words'] = json_encode($requestData['words']);
            $data['license'] = json_encode($requestData['license']);
            $data['background'] = json_encode($requestData['background']);
            $data['template_msg'] = json_encode($requestData['template_msg']);
            $result = $model->saveSetting($data);
            return $this->renderSuccess('添加成功', url('apps.dealer.setting/index'));
        }
        $data = $model->getConfigs();
		return $this->fetch('index', compact('data'));
	}
    public function qrcode()
    {
        $model   = new SettingModel();
        $request = Request::instance();
        if ($request->method() === 'POST') {
            $data['qrcode'] = json_encode($request->request()['qrcode']);
            $result         = $model->saveSetting($data);
            return $this->renderSuccess('添加成功', url('apps.dealer.setting/qrcode'));
        }
        $data = $model->getConfig('qrcode');
        return $this->fetch('qrcode', compact('data'));
    }
}
