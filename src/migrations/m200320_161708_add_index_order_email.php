<?php

namespace craft\commerce\migrations;

use craft\db\Migration;
use craft\helpers\MigrationHelper;

/**
 * m200320_161708_add_index_order_email migration.
 */
class m200320_161708_add_index_order_email extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        if (!MigrationHelper::doesIndexExist('{{%commerce_orders}}', 'email', false, $this->getDb())) {
            $this->createIndex(null, '{{%commerce_orders}}', 'email', false);
        }
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m200320_161708_add_index_order_email cannot be reverted.\n";
        return false;
    }
}
