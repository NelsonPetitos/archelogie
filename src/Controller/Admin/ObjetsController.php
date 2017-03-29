<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Objets Controller
 *
 * @property \App\Model\Table\ObjetsTable $Objets
 */
class ObjetsController extends AppController
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

            $query = $this->Objets->find()->order(['name' => 'DESC']);
            if(count($this->request->data(['params']) != 0)){
                $params  = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Objets');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Objets', '?' => ['page' => 1],]));
            $this->paginate = ['limit' => 10];
            $this->viewBuilder()->layout('adminLayout');
            $objets = $this->paginate($this->Objets);
            $this->set(compact('objets'));
            $this->set('_serialize', ['objets']);;
        }
    }

    /**
     * View method
     *
     * @param string|null $id Objet id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $objet = $this->Objets->get($id, [
            'contain' => ['Datations']
        ]);

        $this->set('objet', $objet);
        $this->set('_serialize', ['objet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $objet = $this->Objets->newEntity();
        if ($this->request->is('post')) {
            $objet = $this->Objets->patchEntity($objet, $this->request->data);
            if ($this->Objets->save($objet)) {
                $this->Flash->success(__('The objet has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The objet could not be saved. Please, try again.'));
            }
        }
        $datations = $this->Objets->Datations->find('list', ['limit' => 200]);
        $this->set(compact('objet', 'datations'));
        $this->set('_serialize', ['objet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Objet id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $objet = $this->Objets->get($id, [
            'contain' => ['Datations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objet = $this->Objets->patchEntity($objet, $this->request->data);
            if ($this->Objets->save($objet)) {
                $this->Flash->success(__('The objet has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The objet could not be saved. Please, try again.'));
            }
        }
        $datations = $this->Objets->Datations->find('list', ['limit' => 200]);
        $this->set(compact('objet', 'datations'));
        $this->set('_serialize', ['objet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Objet id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $objet = $this->Objets->get($id);
        if ($this->Objets->delete($objet)) {
            $this->Flash->success(__('The objet has been deleted.'));
        } else {
            $this->Flash->error(__('The objet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
