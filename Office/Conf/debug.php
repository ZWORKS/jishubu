<?php
// +----------------------------------------------------------------------
// | 技术部PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2016 kelvinvt.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://www.kelvinvt.com )
// +----------------------------------------------------------------------
// | Design: kelvinvt <kelvinvt@qq.com>
// +----------------------------------------------------------------------
/**
 * ThinkPHP 默认的调试模式配置文件
 *  如果项目有定义自己的调试模式配置文件，本文件无效
 * @category   Think
 * @package  Common
 * @author   kelvinvt <kelvinvt@qq.com>
 * @version  $Id: debug.php 3071 2012-07-15 07:59:23Z kelvinvt@qq.com $
 */
defined('THINK_PATH') or exit();
// 调试模式下面默认设置 可以在项目配置目录下重新定义 debug.php 覆盖
return  array(
    'LOG_RECORD'			=>	false,  // 进行日志记录
    'LOG_EXCEPTION_RECORD'  => 	true,    // 是否记录异常信息日志
    'LOG_LEVEL'       		=>  'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',  // 允许记录的日志级别
    'DB_FIELDS_CACHE'		=> 	false, // 字段缓存信息
    'DB_SQL_LOG'			=>	true, // 记录SQL信息
    'APP_FILE_CASE'  		=>  true, // 是否检查文件的大小写 对Windows平台有效
    'TMPL_CACHE_ON'    		=> 	false,        // 是否开启模板编译缓存,设为false则每次都会重新编译
    'TMPL_STRIP_SPACE'      => 	false,       // 是否去除模板文件里面的html空格与换行
    'SHOW_ERROR_MSG'        => 	true,    // 显示错误信息
);