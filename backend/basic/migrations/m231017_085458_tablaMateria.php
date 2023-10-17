<?php

use yii\db\Migration;

/**
 * Class m231017_085458_tablaMateria
 */
class m231017_085458_tablaMateria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

            $this->createTable('materia', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'cant_alumnos' => $this->integer()->notNull()->defaultValue(5),
            'id_carrera' => $this->integer(),
            'id_profesor' => $this->integer(),
        ]);

        //todo claves foráneas ----------------------------------------
        $this->addForeignKey('fk-materia-carrera', 'materia', 'id_carrera', 'carrera', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-materia-profesor', 'materia', 'id_profesor', 'profesor', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $this->dropTable('materia');


        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_085458_tablaMateria cannot be reverted.\n";

        return false;
    }
    */
}
