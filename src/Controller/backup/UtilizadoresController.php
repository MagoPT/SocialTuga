<?php
namespace App\Controller;

use App\Controller\AppController;

class UtilizadoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
       
        $utilizadores = $this->paginate($this->Utilizadores);

        $this->set(compact('utilizadores'));
    }

    public function search() {
        if ($this->request->is('post')) {
            $keyword = $this->request->data['Product']['keyword'];
            $this->paginate = array(
                'fields' => array('Product.name', 'Product.price', 'Product.created'),
                'order' => array('Product.created' => 'DESC', 'Product.price' => 'DESC'),
                'limit' => 30,
                'conditions' => array('Product.name LIKE' => '%' . $keyword . '%')
            );
            // store array $this->paginate into Session
            $this->Session->write('paginate', $this->paginate);
        }
        $this->paginate = $this->Session->read('paginate');
        $this->set('products', $this->paginate('Product'));
    }

    public function profile($id = null)
    {
        $utilizadore = $this->Utilizadores->get($id);

        $this->set('utilizadore', $utilizadore);
    }
    
    public function add()
    {
        $utilizadore = $this->Utilizadores->newEntity();
        if ($this->request->is('post')) {
            $utilizadore = $this->Utilizadores->patchEntity($utilizadore, $this->request->getData());
            if ($this->Utilizadores->save($utilizadore)) {
                $this->Flash->success(__('The utilizadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilizadore could not be saved. Please, try again.'));
        }
        $chat = $this->Utilizadores->Chat->find('list', ['limit' => 200]);
        $this->set(compact('utilizadore', 'chat'));
    }

    public function edit($id = null)
    {
        $utilizadore = $this->Utilizadores->get($id, [
            'contain' => ['Chat'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilizadore = $this->Utilizadores->patchEntity($utilizadore, $this->request->getData());
            if ($this->Utilizadores->save($utilizadore)) {
                $this->Flash->success(__('The utilizadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilizadore could not be saved. Please, try again.'));
        }
        $chat = $this->Utilizadores->Chat->find('list', ['limit' => 200]);
        $this->set(compact('utilizadore', 'chat'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilizadore = $this->Utilizadores->get($id);
        if ($this->Utilizadores->delete($utilizadore)) {
            $this->Flash->success(__('The utilizadore has been deleted.'));
        } else {
            $this->Flash->error(__('The utilizadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
        if ($this->request->is('post')) {
            $utilizador = $this->Auth->identify();
            if ($utilizador) {
                $this->Auth->setUser($utilizador);
                //$this->request->session()->write('UserLogin', true);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
        }
    }

    public function logout()
    {
        //$this->request->session()->write('UserLogin', false);
        return $this->redirect($this->Auth->logout());
    }
}
