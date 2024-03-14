<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PessoasModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\View;

class Pessoas extends BaseController
{
    private $pessoasModel;
    public function __construct()
    {
        $this->pessoasModel = new PessoasModel();
    }

    public function index()
    {
        return View('pessoas', [
            'dados' => $this->pessoasModel->orderBy('id', 'desc')->paginate(5),
            'pagina' => $this->pessoasModel->pager
        ]);
    }

    public function delete($id)
    {
        if ($this->pessoasModel->delete($id)) {
            return View('mensagens', ['mensagem' => 'Usuário Deletado!']);
        }
    }

    public function create()
    {
        return View('formulario');
    }

    public function store()
    {
        if ($this->pessoasModel->save($this->request->getPost())) {
            return View('mensagens', ['mensagem' => 'Usuário salvo!']);
        } else {
            return View('mensagens', ['mensagem' => 'Usuário não salvo!']);
        }
    }

    public function edit($id)
    {
        return View('formulario', ['usuario' => $this->pessoasModel->find($id)]);
    }
}
