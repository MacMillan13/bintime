<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m171121_111101_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'mpn' => $this->string(30)->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
