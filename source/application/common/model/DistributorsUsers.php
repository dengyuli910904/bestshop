<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 11:52
 */

namespace app\common\model;
use think\Request;


class DistributorsUsers extends BaseModel
{
    protected $name = 'distributors_users';
    const STATUS_APPLY = 0;
    const STATUS_PASS = 1;

    /**
     * 获取用户列表
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public function getList($status = null)
    {
        $request = Request::instance();
        $filter = [];
        $status > 0 && $filter['status'] = $status;
        return $this->order(['create_time' => 'desc'])
            ->where($filter)
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
