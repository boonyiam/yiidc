<?php

namespace frontend\controllers;


class Test2Controller extends \common\components\AppController
{
    public function actionIndex()
    {
        //$this->permitRole();
        return $this->render('index');
    }

}
