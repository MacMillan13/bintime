<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id
 * @property integer $price
 * @property integer $availability
 * @property integer $product_id
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'availability', 'product_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'availability' => 'Availability',
            'product_id' => 'Product ID',
        ];
    }

}
