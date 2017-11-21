<?php

namespace frontend\controllers;
 
use yii\rest\ActiveController;
 
class ShopController extends ActiveController
{
    public $modelClass = 'common\models\Shop';

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
}
