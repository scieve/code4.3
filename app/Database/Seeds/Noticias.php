<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Noticias extends Seeder
{
    public function run()
    {
        $data = [
            'titulo'        => 'Titulo da Noticia 1',
            'descricao'     => 'Lorem ipsum cdolor sit amet, ipsum dolor sit amet, lorem ipsum. 
                                Orem ipsum cdolor sit amet, ipsum dolor sit amet, lorem ipsum. 
                                Orem ipsum cdolor sit amet, ipsum dolor sit amet, lorem ipsum. 
                                orem ipsum cdolor sit amet, ipsum dolor sit amet, lorem ipsum.',
            'autor'         => 'Emerson Carvalho'
        ];

        $this->db->table('noticias')->insert($data);
    }
}
