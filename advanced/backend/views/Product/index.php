<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <? $form = ActiveForm::begin();?>

        <?= $form->field($model, 'mpn')->textInput()->label('');?>

        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mpn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<? ActiveForm::end();?>

