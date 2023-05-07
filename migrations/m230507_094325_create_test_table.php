<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test}}`.
 */
class m230507_094325_create_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test}}', [
            'id'          => $this->primaryKey(),
            'author_id'   => $this->integer()->notNull(),
            'category_id' => $this->integer()->defaultValue(1),
            'title'       => $this->string(),
            'body'        => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test}}');
    }
}
