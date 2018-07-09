<?php
// change the following paths if necessary
$yii = dirname(__FILE__) . '/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';
//디버그 하나 더 추가 해야겠다.
// remove the following lines when in production mode
//defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);

echo '111';

<<<<<<< HEAD
echo '2222';



=======
function a(){
  return 'ssss';
}
>>>>>>> 90f0ea4833428d8de84264d084fc837e71640a25

Yii::createWebApplication($config)->run();

