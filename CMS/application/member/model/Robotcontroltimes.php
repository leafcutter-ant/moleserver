<?php
// +----------------------------------------------------------------------
// | Yzncms [ 御宅男工作室 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://yzncms.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 御宅男 <530765310@qq.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 游戏服务器模型
// +----------------------------------------------------------------------
namespace app\member\model;

use \think\Model;
use think\facade\Config;

/**
 * 模型
 */
class Robotcontroltimes extends Model
{
    //protected  $connection = Config::get('app.app_debug');

    public function __construct($data = []) {
        $this->connection = Config::get('app.dbconfig_moleweb');
        parent::__construct($data);
    }
}
