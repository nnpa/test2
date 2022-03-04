<?php

use yii\db\Migration;

/**
 * Class m220304_130754_book
 */
class m220304_130754_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Book', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220304_130754_book cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220304_130754_book cannot be reverted.\n";

        return false;
    }
    */
}
