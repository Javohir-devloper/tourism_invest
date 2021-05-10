<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo_gallery`.
 */
class m181016_201433_create_photo_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photo_gallery', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'image' => $this->string(255),
            'sort' => $this->integer(11)->null(),
            'description' => $this->text()->null(),
            'status' => $this->integer()->null(),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('photo_gallery');
    }
}