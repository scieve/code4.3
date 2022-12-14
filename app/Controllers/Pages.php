<?php

namespace App\Controllers;

use CodeIgniter\Controller;



class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function mostrar($page = 'home')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);
        $data['session'] = \Config\Services::session();
        $data['cache'] = \Config\Services::cache();

        echo view('templates/header', $data);
        echo view('pages/' . $page);
        echo view('templates/footer');
    }

    public function limparCache()
    {
        $data['cache'] = \Config\Services::cache();
        $data['cache']->clean();

        return redirect()->back()->withInput();
    }

    public function adicionarCache()
    {
        $data['cache'] = \Config\Services::cache();
        $data['cache']->increment('valorCache', 1);

        return redirect()->back()->withInput();
    }

    public function subtrairCache()
    {
        $data['cache'] = \Config\Services::cache();
        $data['cache']->decrement('valorCache', 1);

        return redirect()->back()->withInput();
    }

    //--------------------------------------------------------------------

}
