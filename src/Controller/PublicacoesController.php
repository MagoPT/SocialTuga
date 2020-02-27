<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use App\Controller\AppController;

class PublicacoesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('requestHandler'); //para o controlador estar acessível na API
        //$this->set('_serialize', true);
        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
        $this->set('publicacoes', $this->Publicacoes->find('all'));
    }

    public function add()
    {
        $publicacoes = $this->Publicacoes->newEntity();
        if ($this->request->is('post')) {
            $publicacoes = $this->Publicacoes->patchEntity($publicacoes, $this->request->getData());
            if ($this->Publicacoes->save($publicacoes)) {
                $this->Flash->success(__('Seu artigo foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('publicacoes', $publicacoes);
    }
    public function edit($id = null)
	{
	    $publicacao = $this->Publicacoes->get($id);
	    if ($this->request->is(['post', 'put'])) {
	        $this->Publicacoes->patchEntity($publicacao, $this->request->getData());
	        if ($this->Publicacoes->save($publicacao)) {
	            $this->Flash->success(__('Seu artigo foi atualizado.'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
	    }
	    $this->set('publicacao', $publicacao);
	}
	public function delete($id)
	{
	    $this->request->allowMethod(['post', 'delete']);
	    $publicacoes = $this->Publicacoes->get($id);
	    if ($this->Publicacoes->delete($publicacoes)) {
	        $this->Flash->success(__('A publicação com id: {0} foi apagada.', h($id)));
	        return $this->redirect(['action' => 'index']);
	    }
    }
    
    public function publicacoes_perfil()
    {
        $publicacoes=$this->Publicacoes->find('all', array(
            'fields'=>array('id_publicacao','id_utilizador','titulo','files','descricao'),
            'recursive'=>0,
            'limit'=>$limit
        ))->order(['id_utilizador' => 'ASC'])
        ->where([$tipo => $user]);
    
        $this->response->body(json_encode($publicacoes));
        return $this->response;
    }
}
