<?php
/**
 * Application configuration for unit tests
 */
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/web.php'),
    require(__DIR__ . '/config.php'),
    [

    ]
);
