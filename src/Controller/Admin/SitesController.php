<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\View\View;

/**
 * Sites Controller
 *
 * @property \App\Model\Table\SitesTable $Sites
 */
class SitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index(){
        $query = $this->Sites->find();
        if($this->request->is('ajax')){
            //set the pagination informations
            $this->paginate = [
                'page' => $this->request->query('page'),
                'limit' => $this->request->query('limit'),
                'order' => [
                    'Sites.modified' => 'DESC',
                    'Sites.name' => 'ASC'
                ]
            ];

            $params  = $this->request->data(['params']);
            if(count($params) != 0){
                $conditions = $this->Search->searchConditions($params, 'Sites');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            //Get pagination for the view.
            $view = new View($this->request, $this->response, null);
            $view->layout = 'emptyLayout';
            $view->viewPath = '../Template';
            $pagination = $view->render('pagination');

            //Definir l'en tete de la reponse
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->viewBuilder()->layout('ajax');

            $this->set(compact('datas'));
            $this->set(compact('pagination'));
            $this->set('_serialize', ['datas',  'pagination']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Sites', 'prefix' => 'admin', '?' => ['page' => 1]]));
            $this->paginate = [
                'limit' => 10,
                'page' => 1,
                'order' => [
                    'Sites.modified' => 'DESC',
                    'Sites.name' => 'ASC'
                ]
            ];
            $sites = $this->paginate($query);
            $this->viewBuilder()->layout('adminLayout');
            $this->set(compact('sites'));
            $this->set('_serialize', ['sites']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Site id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $site = $this->Sites->get($id, [
            'contain' => ['Sources', 'Datations']
        ]);

        $this->set('site', $site);
        $this->set('_serialize', ['site']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $site = $this->Sites->newEntity();
        if ($this->request->is('post')) {
            $site = $this->Sites->patchEntity($site, $this->request->data);
            if ($this->Sites->save($site)) {
                $this->Flash->success(__('The site has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The site could not be saved. Please, try again.'));
            }
        }
        $sources = $this->Sites->Sources->find('list', ['limit' => 200]);
        $this->set(compact('site', 'sources'));
        $this->set('_serialize', ['site']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Site id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $site = $this->Sites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $site = $this->Sites->patchEntity($site, $this->request->data);
            if ($this->Sites->save($site)) {
                $this->Flash->success(__('The site has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The site could not be saved. Please, try again.'));
            }
        }
        $sources = $this->Sites->Sources->find('list', ['limit' => 200]);
        $this->set(compact('site', 'sources'));
        $this->set('_serialize', ['site']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Site id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $site = $this->Sites->get($id);
        if ($this->Sites->delete($site)) {
            $this->Flash->success(__('The site has been deleted.'));
        } else {
            $this->Flash->error(__('The site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function search(){
        if($this->request->is('ajax')){
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');

            $query = $this->Sites->find()->order(['name' => 'DESC']);
            $params  = $this->request->data(['params']);
            $conditions = $this->Search->searchConditions($params, 'Sites');
            $datas = $this->paginate($query->where($conditions));

            $this->viewBuilder()->layout('ajax');
            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }
    }
}
