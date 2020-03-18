<?php

use yii\db\Migration;

/**
 * Class m200317_124732_add_confirm_to_tasks_table
 */
class m200317_124732_add_confirm_to_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%tasks}}', 'confirm', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200317_124732_add_confirm_to_tasks_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200317_124732_add_confirm_to_tasks_table cannot be reverted.\n";

        return false;
    }
    */
}
