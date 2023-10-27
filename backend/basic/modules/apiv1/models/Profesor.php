<?php

namespace app\modules\apiv1\models;

class Profesor extends \app\models\Profesor
{
    public function fields(){
        return ['id','nombre','apellido','mostrar'];
    }
}