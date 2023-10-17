<?php

use yii\db\Migration;

/**
 * Class m231017_092844_tablaHorarioMateria
 */
class m231017_092844_tablaHorarioMateria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('horario_materia', [
            'id' => $this->primaryKey(),
            'id_materia' => $this->integer(),
            'id_reserva' => $this->integer(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
        ]);

        $this->addForeignKey('fk-horario_materia-materia', 'horario_materia', 'id_materia', 'materia', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-horario_materia-reserva', 'horario_materia', 'id_reserva', 'reserva_aula', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-horario_materia-reserva', 'horario_materia');
        $this->dropForeignKey('fk-horario_materia-materia', 'horario_materia');

        $this->dropTable('horario_materia');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_092844_tablaHorarioMateria cannot be reverted.\n";

        return false;
    }
    */
}
