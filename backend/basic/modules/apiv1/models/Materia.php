<?php

namespace app\modules\apiv1\models;

class Materia extends \app\models\Materia
{
    public function fields(){
        return ['id','nombre','cant_alumnos','id_carrera','id_profesor'];
    }
}