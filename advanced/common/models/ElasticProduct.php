<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $mpn
 */
class ElasticProduct extends \yii\elasticsearch\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mpn'], 'string', 'max' => 30],
            [['mpn'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mpn' => 'Mpn',
        ];
    }

    public function attributes(){

        return ['_id', 'mpn'];

    }

    public function getResult(){
        if (empty($this->mpn))
            return self::find();

        return self::find()->query(["match" => ["mpn" => $this->mpn]]);
    }
}
