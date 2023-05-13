<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

class ShopController extends Controller
{
    public $layout = 'main';

    /**
     * @return string
     */
    public function actionIndex()
    {
        $products = Products::find()->asArray()->all();

        return $this->render('index', [
            'products' => $products,
        ]);
    }

    /**
     * @return string
     */
    public function actionView()
    {
        $id = htmlspecialchars($_GET['id']);

        $product = Products::find()->where(['id' => $id])->one();

        return $this->render('view', [
            'product' => $product,
        ]);
    }
}