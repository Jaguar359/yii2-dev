<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

class ShopController extends Controller
{
    public $layout = false;

    /**
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'products-all';
        $products     = Products::find()->asArray()->all();

        return $this->render('index', [
            'products' => $products,
        ]);
    }

    /**
     * @return string
     */
    public function actionView()
    {
        $this->layout = 'products-view';
        $id = htmlspecialchars($_GET['id']);
        Products::find()->where(['id' => $id])->one()->updateCounters(['views']);

        $product = Products::find()->where(['id' => $id])->one();

        return $this->render('view', [
            'product' => $product,
        ]);
    }
}