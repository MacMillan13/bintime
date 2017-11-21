<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\rest\ActiveController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Product;
use common\models\Shop;

/**
 * Site controller
 */
class ProductController extends ActiveController
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'common\models\Product';

     public function behaviors()
    {
        $behaviors = parent::behaviors();

         $behaviors['contentNegotiator'] = [
    'class' => \yii\filters\ContentNegotiator::className(),
    'formats' => [
        'application/json' => \yii\web\Response::FORMAT_JSON,
    ],
];
        // В это место мы будем добавлять поведения (читай ниже)
        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function actionIndex()
    {
    $products = Product::find()->all();
    // $shops = Shop::getProducts();
    $shops = Shop::find()->all();

    return $this->render('index', [
        'products' => $products,
        'shops' => $shops,
    ]);
    }
}