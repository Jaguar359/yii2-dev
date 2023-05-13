<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        //Products::find()->where(['id' => 1])->one()->updateCounters(['price' => 1]);
        exit;
    }
}