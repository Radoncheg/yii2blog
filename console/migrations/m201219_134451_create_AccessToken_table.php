<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%AccessToken}}`.
 */
class m201219_134451_create_AccessToken_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%AccessToken}}', [
            'id' => $this->primaryKey(),
            'user_id'=> $this->string(),
            'AccessToken'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%AccessToken}}');
    }
}
