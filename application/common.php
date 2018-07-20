<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function ReturnMsg($code, $data = null, $msg = '') {
	if ($msg) {
		return json(array('code' => $code, 'msg' => $msg, 'data' => $data));
	}
	return json(array('code' => $code, 'msg' => config("msg.{$code}"), 'data' => $data));
}