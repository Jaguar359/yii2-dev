<?php

namespace app\widgets;

use app\models\db\Products;
use yii\base\Widget;

/**
 * @package app\widgets
 */
class ProductsWidget extends Widget
{
    /**
     * @return string
     */
    public function run()
    {
        $products = Products::find()->asArray()->all();

        return $this->render('ProductsWidget', [
            'products' => $products,
        ]);
    }
}