<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop`.
 */
class m171121_111110_create_shop_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('shop', [
            'id' => $this->primaryKey(),
            'price' => $this->decimal(),
            'availability' => $this->integer()->defaultValue(0),
            'product_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('shop');
    }
}
