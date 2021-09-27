<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%candidate}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210923_064942_create_candidate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%candidate}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(45)->notNull(),
            'lastname' => $this->string(45)->notNull(),
            'cand_id' => $this->integer(2)->notNull(),
            'age' => $this->integer()->notNull(),
            'city' => $this->string(455)->notNull()
        ]);

        // creates index for column `cand_id`
        $this->createIndex(
            '{{%idx-candidate-cand_id}}',
            '{{%candidate}}',
            'cand_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-candidate-cand_id}}',
            '{{%candidate}}',
            'cand_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-candidate-cand_id}}',
            '{{%candidate}}'
        );

        // drops index for column `cand_id`
        $this->dropIndex(
            '{{%idx-candidate-cand_id}}',
            '{{%candidate}}'
        );

        $this->dropTable('{{%candidate}}');
    }
}
