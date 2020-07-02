<?php

namespace app\models;
use Yii;
use yii\base\model;

class ValidarFormulario extends model{
    public $nombre;
    public $email;

    public function rules(){
        return [
            ["nombre","required", "message"=>"Campo Requerido"],
            ["nombre","match", "pattern" => "/^.{3,50}$/","message"=>"Minimo 3, maximo 50 caracteres"],
            ["nombre","match", "pattern" => "/^.[0-9a-z]+$/i","message"=>"Solo numeros o letras"],
            ["email","required", "message"=>"Campo Requerido"],
            ["email","match", "pattern" => "/^.{5,80}$/","message"=>"Minimo 3, maximo 50 caracteres"],
            ["email","email", "message"=>">Formato no valido"],
        ];
    }

    public function attributeLabels(){
        return [
            'nombre'=>'Nombre: ',
            'email' = 'Mail: ',
        ];
    }

}
?>