<?php

use yii\db\Migration;

/**
 * Class m231017_092822_tablaReservaAula
 */
class m231017_092822_tablaReservaAula extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

            $this->createTable('reserva_aula', [
            'id' => $this->primaryKey(),
            'id_aula' => $this->integer(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
            'observacion' => $this->text(256),
        ]);

        $this->addForeignKey('fk-reserva_aula-aula', 'reserva_aula', 'id_aula', 'aula', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-reserva_aula-aula', 'reserva_aula');

        $this->dropTable('reserva_aula');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_092822_tablaReservaAula cannot be reverted.\n";

        return false;
    }
    */
}
