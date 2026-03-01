<?php
// 定义 WordPress 根目录
define('WP_USE_THEMES', true);

// 加载 WordPress
require_once dirname(__DIR__) . '/wp-load.php';

// 处理请求
wp();
require_once ABSPATH . WPINC . '/template-loader.php';