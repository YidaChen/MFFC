<?php

// 定義 PUBLIC_PATH

define('PUBLIC_PATH', __DIR__);

// 啟動器

require PUBLIC_PATH.'/../bootstrap.php';

// 路由配置、開始處理

require BASE_PATH.'/config/routes.php';