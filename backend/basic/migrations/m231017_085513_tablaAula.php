<?php

use yii\db\Migration;

/**
 * Class m231017_085513_tablaAula
 */
class m231017_085513_tablaAula extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aula', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(128)->notNull(),
            'ubicacion' => $this->string(128)->notNull(),
            'cant_proyector' => $this->integer()->defaultValue(0),
            'aforo' => $this->integer()->defaultValue(0),
            'es_climatizada' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('aula');


        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_085513_tablaAula cannot be reverted.\n";

        return false;
    }
    */
}
