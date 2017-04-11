<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\View\View;

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
    public function index(){
        $query = $this->Objets->find();
        if($this->request->is('ajax')){
            //set the pagination informations
            $this->paginate = [
                'page' => $this->request->query('page'),
                'limit' => $this->request->query('limit'),
                'order' => [
                    'Objets.modified' => 'DESC',
                    'Objets.name' => 'ASC'
                ]
            ];

            $params  = $this->request->data(['params']);
            if(count($params) != 0){
                $conditions = $this->Search->searchConditions($params, 'Objets');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            //Get pagination for the view.
            $view = new View($this->request, $this->response, null);
            $view->layout = 'ajax';
            $view->viewPath = '../Template/All';
            $pagination = $view->render('pagination');

            //Definir l'en tete de la reponse
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->viewBuilder()->layout('ajax');

            $this->set(compact('datas'));
            $this->set(compact('pagination'));
            $this->set('_serialize', ['datas',  'pagination']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Objets', 'prefix' => 'admin', '?' => ['page' => 1]]));
            $this->paginate = [
                'limit' => 10,
                'page' => 1,
                'order' => [
                    'Objets.modified' => 'DESC',
                    'Objets.name' => 'ASC'
                ]
            ];
            $objets = $this->paginate($query);
            $this->viewBuilder()->layout('adminLayout');
            $this->set(compact('objets'));
            $this->set('_serialize', ['objets']);
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

        $this->loadModel('Materiels'); //Load relate materiel table.
        $objet = $this->Objets->newEntity();

        if ($this->request->is('post')) {
            $materiel = $this->Materiels->newEntity();
            $objet = $this->Objets->patchEntity($objet, $this->request->data);
            $materiel = $this->Materiels->patchEntity($materiel, $this->request->data);

            if ($this->Objets->save($objet)) {
                $materiel->id = $objet->id;
                if($this->Materiels->save($materiel)){
                    $this->Flash->success(__('The objet has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The objet could not be saved. Please, try again.'));
        }

        $this->set(compact('objet'));
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
        $this->loadModel('Materiels');

        $objet = $this->Objets->get($id);
        $materiel = $this->Materiels->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $objet = $this->Objets->patchEntity($objet, $this->request->data);
            $materiel = $this->Materiels->patchEntity($materiel, $this->request->data);

            if ($this->Objets->save($objet) && $this->Materiels->save($materiel)) {
                $this->Flash->success(__('The objet has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The objet could not be saved. Please, try again.'));
            }
        }
//        $datations = $this->Objets->Datations->find('list', ['limit' => 200]);
        $this->set(compact('objet'));
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

        $this->loadModel('Materiels'); //Load relate materiel table.

        $objet = $this->Objets->get($id);
        $materiel = $this->Materiels->get($id);
        if ($this->Objets->delete($objet) && $this->Materiels->delete($materiel)) {
            $this->Flash->success(__('The objet has been deleted.'));
        } else {
            $this->Flash->error(__('The objet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
