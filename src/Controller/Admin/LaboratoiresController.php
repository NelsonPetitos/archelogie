<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Laboratoires Controller
 *
 * @property \App\Model\Table\LaboratoiresTable $Laboratoires
 */
class LaboratoiresController extends AppController
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

            $query = $this->Laboratoires->find()->order(['code_laboratoire' => 'DESC']);
            if(count($this->request->data(['params']) != 0)){
                $params  = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Laboratoires');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Laboratoires', '?' => ['page' => 1],]));
            $this->paginate = ['limit' => 10];
            $this->viewBuilder()->layout('adminLayout');
            $laboratoires = $this->paginate($this->Laboratoires);
            $this->set(compact('laboratoires'));
            $this->set('_serialize', ['laboratoires']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Laboratoire id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $laboratoire = $this->Laboratoires->get($id, [
            'contain' => ['Datations']
        ]);

        $this->set('laboratoire', $laboratoire);
        $this->set('_serialize', ['laboratoire']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $laboratoire = $this->Laboratoires->newEntity();
        if ($this->request->is('post')) {
            $laboratoire = $this->Laboratoires->patchEntity($laboratoire, $this->request->data);
            if ($this->Laboratoires->save($laboratoire)) {
                $this->Flash->success(__('The laboratoire has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The laboratoire could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('laboratoire'));
        $this->set('_serialize', ['laboratoire']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Laboratoire id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $laboratoire = $this->Laboratoires->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laboratoire = $this->Laboratoires->patchEntity($laboratoire, $this->request->data);
            if ($this->Laboratoires->save($laboratoire)) {
                $this->Flash->success(__('The laboratoire has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The laboratoire could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('laboratoire'));
        $this->set('_serialize', ['laboratoire']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Laboratoire id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $laboratoire = $this->Laboratoires->get($id);
        if ($this->Laboratoires->delete($laboratoire)) {
            $this->Flash->success(__('The laboratoire has been deleted.'));
        } else {
            $this->Flash->error(__('The laboratoire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function search(){
        if($this->request->is('ajax')){
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');

            $query = $this->Laboratoires->find()->order(['code_laboratoire' => 'DESC']);
            $params  = $this->request->data(['params']);
            $conditions = $this->Search->searchConditions($params, 'Laboratoires');
            $datas = $this->paginate($query->where($conditions));

            $this->viewBuilder()->layout('ajax');
            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }
    }
}
