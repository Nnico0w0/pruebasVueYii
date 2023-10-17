<?php

use yii\db\Migration;

/**
 * Class m231017_084135_tablaCarrera
 */
class m231017_084135_tablaCarrera extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('carrera', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('carrera');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_084135_tablaCarrera cannot be reverted.\n";

        return false;
    }
    */
}
