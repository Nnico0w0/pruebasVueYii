<?php

namespace app\modules\apiv1\models;

class Carrera extends \app\models\Carrera
{
    public function fields(){
        return ['id','nombre'];
    }
}