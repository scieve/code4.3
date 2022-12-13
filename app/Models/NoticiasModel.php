<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{

    //Atributos de Configuração
    protected $table = 'noticias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'autor', 'descricao'];

    //Método GET
    public function getNoticias($id = false)
    {
        if ($id === false) {

            return $this->findAll();
        } else {

            return $this->asArray()
                ->where(['id' => $id])
                ->first();
        }
    }
}
