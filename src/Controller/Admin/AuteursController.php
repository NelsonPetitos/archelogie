<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
//use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\View\View;

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
    public function index(){
        $query = $this->Auteurs->find();
        if($this->request->is('ajax')){
            //set the pagination informations
            $this->paginate = [
                'page' => $this->request->query('page'),
                'limit' => $this->request->query('limit'),
                'order' => [
                    'Auteurs.modified' => 'DESC',
                    'Auteurs.name' => 'ASC'
                ]
            ];

            $params  = $this->request->data(['params']);
            if(count($params) != 0){
                $conditions = $this->Search->searchConditions($params, 'Auteurs');
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
            $this->set('searchUrl', Router::url(['controller' => 'Auteurs', 'prefix' => 'admin', '?' => ['page' => 1]]));
            $this->paginate = [
                'limit' => 10,
                'page' => 1,
                'order' => [
                    'Auteurs.modified' => 'DESC',
                    'Auteurs.name' => 'ASC'
                ]
            ];
            $auteurs = $this->paginate($query);
            $this->viewBuilder()->layout('adminLayout');
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
        $publications = $this->Auteurs->Publications->find('list', ['limit' => 1]);
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

}
