<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Publications Controller
 *
 * @property \App\Model\Table\PublicationsTable $Publications
 */
class PublicationsController extends AppController
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

            $query = $this->Publications->find()->order(['title' => 'DESC']);
            if(count($this->request->data(['params']) != 0)){
                $params  = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Publications');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Publications', '?' => ['page' => 1],]));
            $this->paginate = ['limit' => 10];
            $this->viewBuilder()->layout('adminLayout');
            $publications = $this->paginate($this->Publications);
            $this->set(compact('publications'));
            $this->set('_serialize', ['publications']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $publication = $this->Publications->get($id, [
            'contain' => ['Sources', 'Auteurs', 'Datations']
        ]);

        $this->set('publication', $publication);
        $this->set('_serialize', ['publication']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $publication = $this->Publications->newEntity();
        if ($this->request->is('post')) {
            $publication = $this->Publications->patchEntity($publication, $this->request->data);
            if ($this->Publications->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The publication could not be saved. Please, try again.'));
            }
        }
        $sources = $this->Publications->Sources->find('list', ['limit' => 200]);
        $auteurs = $this->Publications->Auteurs->find('list', ['limit' => 200]);
        $datations = $this->Publications->Datations->find('list', ['limit' => 200]);
        $this->set(compact('publication', 'sources', 'auteurs', 'datations'));
        $this->set('_serialize', ['publication']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $publication = $this->Publications->get($id, [
            'contain' => ['Auteurs', 'Datations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publication = $this->Publications->patchEntity($publication, $this->request->data);
            if ($this->Publications->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The publication could not be saved. Please, try again.'));
            }
        }
        $sources = $this->Publications->Sources->find('list', ['limit' => 200]);
        $auteurs = $this->Publications->Auteurs->find('list', ['limit' => 200]);
        $datations = $this->Publications->Datations->find('list', ['limit' => 200]);
        $this->set(compact('publication', 'sources', 'auteurs', 'datations'));
        $this->set('_serialize', ['publication']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $publication = $this->Publications->get($id);
        if ($this->Publications->delete($publication)) {
            $this->Flash->success(__('The publication has been deleted.'));
        } else {
            $this->Flash->error(__('The publication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function search(){
        if($this->request->is('ajax')){
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');

            $query = $this->Publications->find()->order(['title' => 'DESC']);
            $params  = $this->request->data(['params']);
            $conditions = $this->Search->searchConditions($params, 'Publications');
            $datas = $this->paginate($query->where($conditions));

            $this->viewBuilder()->layout('ajax');
            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }
    }
}