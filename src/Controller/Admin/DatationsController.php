<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\View\View;
//App::import('Controller', 'Auteurs');
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
        //Building the request
        $query = $this->Datations->find();
        //Request is coming from ajax call
        if($this->request->is('ajax')){
            //set the pagination informations
            $this->paginate = [
                'contain' => ['Laboratoires', 'Sites'],
                'page' => $this->request->query('page'),
                'limit' => $this->request->query('limit'),
                'order' => [
                    'Datations.modified' => 'desc',
//                    'Datations.date_bp' => 'desc'
                ]
            ];

            //Check if there is or not search parameters.
            if(count($this->request->data(['params']) != 0)){
                $params = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Datations');
                $datas = $this->paginate($query->where($conditions));
            }else{
                $datas = $this->paginate($query);
            }

            //Get pagination html for the view.
            $view = new View($this->request, $this->response, null);
            $view->layout = 'ajax';
            $view->viewPath = '../Template/All';
            $pagination = $view->render('pagination');


            //Change the render layout to render an ajax object
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->viewBuilder()->layout('ajax');

            $this->set(compact('datas'));
            $this->set(compact('pagination'));
            $this->set('_serialize', ['datas', 'pagination']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Datations', 'prefix' => 'admin', '?' => ['page' => 1],]));

            $this->paginate = [
                'contain' => ['Laboratoires', 'Sites'],
                'limit' => 10,
                'page' => 1,
                'order' => [
                    'Datations.modified' => 'desc',
//                    'Datations.date_bp' => 'desc'
                ]
            ];
            $datations = $this->paginate($query);
            $this->set(compact('datations'));
//            $this->set('activedatation', true);
            $this->set('_serialize', ['datations']);
            $this->viewBuilder()->layout('adminLayout');
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
        $laboratoires = $this->Datations->Laboratoires->find('list');
        $sites = $this->Datations->Sites->find('list');
        $sources = $this->Datations->Sources->find('list');
        $materiels = $this->Datations->Materiels->find('list');
        $objets = $this->Datations->Objets->find('list');
        $publications = $this->Datations->Publications->find('list');
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
        $laboratoires = $this->Datations->Laboratoires->find('list');
        $sites = $this->Datations->Sites->find('list');
        $sources = $this->Datations->Sources->find('list');
        $materiels = $this->Datations->Materiels->find('list');
        $objets = $this->Datations->Objets->find('list');
        $publications = $this->Datations->Publications->find('list');
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


    public function ajaxform(){

        $remote = $this->request->query('remote');

        if($this->request->is('ajax') && $this->request->is('get') && $remote){

            $this->autoRender = false;
            $this->response->charset('UTF-8');
            $this->response->type('html');

            switch ($remote){
                case 'objet':
                    $this->loadModel('Objets');
                    $objet = $this->Objets->newEntity();
                    $this->set(compact('objet'));
                    $this->set('_serialize', ['objet']);
                    break;

                case 'site':
                    $site = $this->Datations->Sites->newEntity();
                    $sources = $this->Datations->Sites->Sources->find('list');
                    $this->set(compact('site', 'sources'));
                    $this->set('_serialize', ['site']);
                    break;

                case 'publication':
                    $publication = $this->Datations->Publications->newEntity();
                    $sources = $this->Datations->Publications->Sources->find('list');
                    $auteurs = $this->Datations->Publications->Auteurs->find('list');
                    $this->set(compact('publication', 'sources', 'auteurs'));
                    $this->set('_serialize', ['publication']);
                    break;

                case 'laboratoire':
                    $laboratoire = $this->Datations->Laboratoires->newEntity();
                    $this->set('laboratoire', $laboratoire);
                    $this->set('_serialize', ['laboratoire']);
                    break;
                default:
                    break;
            }
            $this->set('remote', $remote);
            $this->render('/All/formulaire', 'ajax');

        }

        if($this->request->is('post') && $remote){
            switch ($remote){
                case 'objet':
                    $this->loadModel('Objets');
                    $this->loadModel('Materiels');
                    $objet = $this->Objets->newEntity();
                    $materiel = $this->Materiels->newEntity();

                    $objet = $this->Objets->patchEntity($objet, $this->request->data);
                    $materiel = $this->Materiels->patchEntity($materiel, $this->request->data);

                    if ($this->Objets->save($objet)) {
                        $materiel->id = $objet->id;
                        if($this->Materiels->save($materiel)){
                            $this->Flash->success(__('The objet has been saved.'));

                            //Change the render layout to render an ajax object
//                            $this->RequestHandler->renderAs($this, 'json');
//                            $this->response->type('application/json');
//                            $this->viewBuilder()->layout('ajax');
//                            $this->set(compact('objet'));

                            return $this->redirect(['action' => 'add']);
                        }
                    }
                    $this->Flash->error(__('The objet could not be saved. Please, try again.'));

                    break;

                case 'site':
                    $site = $this->Datations->Sites->newEntity();
                    $site = $this->Datations->Sites->patchEntity($site, $this->request->data);
                    if ($this->Datations->Sites->save($site)) {
                        $this->Flash->success(__('The site has been saved.'));
                        return $this->redirect(['action' => 'add']);
                    } else {
                        $this->Flash->error(__('The site could not be saved. Please, try again.'));
                    }
                    break;

                case 'publication':
                    $publication = $this->Datations->Publications->newEntity();
                    $publication = $this->Datations->Publications->patchEntity($publication, $this->request->data);
                    if ($this->Datations->Publications->save($publication)) {
                        $this->Flash->success(__('The publication has been saved.'));
                        return $this->redirect(['action' => 'add']);
                    } else {
                        $this->Flash->error(__('The publication could not be saved. Please, try again.'));
                    }
                    break;

                case 'laboratoire':
                    $laboratoire = $this->Datations->Laboratoires->newEntity();
                    $laboratoire = $this->Datations->Laboratoires->patchEntity($laboratoire, $this->request->data);
                    if ($this->Datations->Laboratoires->save($laboratoire)) {
                        $this->Flash->success(__('The laboratoire has been saved.'));
                        return $this->redirect(['action' => 'add']);
                    } else {
                        $this->Flash->error(__('The laboratoire could not be saved. Please, try again.'));
                    }
                    break;

                default:
                    break;
            }
        }
    }

}
