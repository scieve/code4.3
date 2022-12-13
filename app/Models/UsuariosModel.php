<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{

    //Atributos de Configuração
    protected $table = 'usuarios';


    //Método GET
    public function getUsuarios($user, $senha)
    {
        return $this->asArray()
            ->where(['user' => $user, 'senha' => md5($senha)])
            ->first();
    }
}
