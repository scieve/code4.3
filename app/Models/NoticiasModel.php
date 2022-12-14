<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{

    //Atributos de Configuração
    protected $table = 'noticias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'autor', 'descricao', 'img'];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat ='datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

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
