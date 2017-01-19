<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Auteurs Controller
 *
 * @property \App\Model\Table\AuteursTable $Auteurs
 */
class AuteursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        if($this->request->is('ajax')){
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->viewBuilder()->layout('ajax');

            $query = $this->Auteurs->find()->order(['name' => 'DESC']);
            if(count($this->request->data(['params']) != 0)){
                $params  = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Auteurs');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }else{
            $this->paginate = ['limit' => 10];
            $this->viewBuilder()->layout('adminLayout');
            $this->set('searchUrl', Router::url(['controller' => 'Auteurs', '?' => ['page' => 1],]));
            $auteurs = $this->paginate($this->Auteurs);
            $this->set(compact('auteurs'));
            $this->set('_serialize', ['auteurs']);
        }

    }

    /**
     * View method
     *
     * @param string|null $id Auteur id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $auteur = $this->Auteurs->get($id, [
            'contain' => ['Publications']
        ]);

        $this->set('auteur', $auteur);
        $this->set('_serialize', ['auteur']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $auteur = $this->Auteurs->newEntity();
        if ($this->request->is('post')) {
            $auteur = $this->Auteurs->patchEntity($auteur, $this->request->data);
            if ($this->Auteurs->save($auteur)) {
                $this->Flash->success(__('The auteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The auteur could not be saved. Please, try again.'));
            }
        }
//        $publications = $this->Auteurs->Publications->find('list');
        $this->set(compact('auteur'));
        $this->set('_serialize', ['auteur']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Auteur id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->session()->write('ajaxUrl', 'en');

        $auteur = $this->Auteurs->get($id, [
            'contain' => ['Publications']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auteur = $this->Auteurs->patchEntity($auteur, $this->request->data);
            if ($this->Auteurs->save($auteur)) {
                $this->Flash->success(__('The auteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The auteur could not be saved. Please, try again.'));
            }
        }
        $publications = $this->Auteurs->Publications->find('list', ['limit' => 200]);
        $this->set(compact('auteur', 'publications'));
        $this->set('_serialize', ['auteur']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Auteur id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $auteur = $this->Auteurs->get($id);
        if ($this->Auteurs->delete($auteur)) {
            $this->Flash->success(__('The auteur has been deleted.'));
        } else {
            $this->Flash->error(__('The auteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


//    public function search(){
//        if($this->request->is('ajax')){
//            $this->RequestHandler->renderAs($this, 'json');
//            $this->response->type('application/json');
//
//            $query = $this->Auteurs->find()->order(['name' => 'DESC']);
//            $params  = $this->request->data(['params']);
//            $conditions = $this->Search->searchConditions($params, 'Auteurs');
//            $datas = $this->paginate($query->where($conditions));
//
//            $this->viewBuilder()->layout('ajax');
//            $this->set(compact('datas'));
//            $this->set('_serialize', ['datas']);
//        }
//    }
}
