<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Datations Controller
 *
 * @property \App\Model\Table\DatationsTable $Datations
 */
class DatationsController extends AppController
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

            $query = $this->Datations->find()->order(['date_bp' => 'DESC']);
            if(count($this->request->data(['params']) != 0)){
                $params = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Datations');
                $this->paginate = [
                    'contain' => ['Laboratoires', 'Sites']
                ];
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Datations', '?' => ['page' => 1],]));
            $this->paginate = ['limit' => 10];
            $this->viewBuilder()->layout('adminLayout');
            $this->paginate = [
                'contain' => ['Laboratoires', 'Sites', 'Sources']
            ];
            $datations = $this->paginate($this->Datations);
            $this->set(compact('datations'));
            $this->set('_serialize', ['datations']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Datation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $datation = $this->Datations->get($id, [
            'contain' => ['Laboratoires', 'Sites', 'Sources', 'Materiels', 'Objets', 'Publications']
        ]);

        $this->set('datation', $datation);
        $this->set('_serialize', ['datation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $datation = $this->Datations->newEntity();
        if ($this->request->is('post')) {
            $datation = $this->Datations->patchEntity($datation, $this->request->data);
            if ($this->Datations->save($datation)) {
                $this->Flash->success(__('The datation has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The datation could not be saved. Please, try again.'));
            }
        }
        $laboratoires = $this->Datations->Laboratoires->find('list', ['limit' => 200]);
        $sites = $this->Datations->Sites->find('list', ['limit' => 200]);
        $sources = $this->Datations->Sources->find('list', ['limit' => 200]);
        $materiels = $this->Datations->Materiels->find('list', ['limit' => 200]);
        $objets = $this->Datations->Objets->find('list', ['limit' => 200]);
        $publications = $this->Datations->Publications->find('list', ['limit' => 200]);
        $this->set(compact('datation', 'laboratoires', 'sites', 'sources', 'materiels', 'objets', 'publications'));
        $this->set('_serialize', ['datation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Datation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $datation = $this->Datations->get($id, [
            'contain' => ['Materiels', 'Objets', 'Publications']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datation = $this->Datations->patchEntity($datation, $this->request->data);
            if ($this->Datations->save($datation)) {
                $this->Flash->success(__('The datation has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The datation could not be saved. Please, try again.'));
            }
        }
        $laboratoires = $this->Datations->Laboratoires->find('list', ['limit' => 200]);
        $sites = $this->Datations->Sites->find('list', ['limit' => 200]);
        $sources = $this->Datations->Sources->find('list', ['limit' => 200]);
        $materiels = $this->Datations->Materiels->find('list', ['limit' => 200]);
        $objets = $this->Datations->Objets->find('list', ['limit' => 200]);
        $publications = $this->Datations->Publications->find('list', ['limit' => 200]);
        $this->set(compact('datation', 'laboratoires', 'sites', 'sources', 'materiels', 'objets', 'publications'));
        $this->set('_serialize', ['datation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Datation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $datation = $this->Datations->get($id);
        if ($this->Datations->delete($datation)) {
            $this->Flash->success(__('The datation has been deleted.'));
        } else {
            $this->Flash->error(__('The datation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function search(){
        if($this->request->is('ajax')) {
            // Force le controller à rendre une réponse JSON.
            $this->RequestHandler->renderAs($this, 'json');
            // Définit le type de réponse de la requete AJAX
            $this->response->type('application/json');

            $query = $this->Datations->find()->order(['date_bp' => 'DESC']);
            $params = $this->request->data(['params']);
            $conditions = $this->Search->searchConditions($params, 'Datations');
            $this->paginate = [
                'contain' => ['Laboratoires', 'Sites']
            ];
//            $conditions = ['source_id'=> 1];
            // Find pour récupérer les sites avec le bon serveur
            $datas = $this->paginate($query->where($conditions));


            // Chargement du layout AJAX
            $this->viewBuilder()->layout('ajax');
            // Créer un contexte sites à renvoyer
            $this->set(compact('datas'));
//            $this->set('datas', $conditions);
            // Généreration des vues de données
            $this->set('_serialize', ['datas']);
        }
    }
}
