<?php
namespace App\Controller\Afrique;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\View\View;

/**
 * Publications Controller
 *
 * @property \App\Model\Table\PublicationsTable $Publications
 */
class PublicationsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub
        $this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $query = $this->Publications->find()
            ->select(['Publications.id', 'Publications.annee', 'Publications.title'])
            ->contain([
                'Auteurs' => function ($q) {
                    return $q->select([
                        'Auteurs.id', 'Auteurs.name'
                    ]);
                }
            ])
            ->where(['Publications.source_id' => 1]);

        if ($this->request->is('ajax')) {
            //set the pagination informations
            $this->paginate = [
                'page' => $this->request->query('page'),
                'limit' => $this->request->query('limit'),
                'order' => [
                    'Publications.title' => 'asc'
                ]
            ];

            if (count($this->request->data(['params']) != 0)) {
                $params = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Publications');
                $datas = $this->paginate($query->andWhere($conditions));
            } else {
                $datas = $this->paginate($query);
            }

            //Get pagination for the view.
            $view = new View($this->request, $this->response, null);
            $view->layout = 'emptyLayout';
            $view->viewPath = '../Template/All';
            $pagination = $view->render('pagination');

            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->viewBuilder()->layout('ajax');

            $this->set(compact('datas'));
            $this->set(compact('pagination'));
            $this->set('_serialize', ['datas', 'pagination']);
        } else {
            $this->set('searchUrl', Router::url(['controller' => 'Publications', 'prefix' => 'afrique', '?' => ['page' => 1],]));
            $this->paginate = [
                'limit' => 10,
                'page' => 1,
                'order' => [
                    'Publications.title' => 'asc'
                ]
            ];
            $publications = $this->paginate($query);
            $this->viewBuilder()->layout('afriqueCentraleLayout');
            $this->set(compact('publications'));
            $this->set('_serialize', ['publications']);
            $this->set('activepublication', true);
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
        $publication = $this->Publications->get($id, [
            'contain' => ['Auteurs', 'Datations']
        ]);

        $this->set('publication', $publication);
        $this->set('_serialize', ['publication']);
        $this->set('activepublication', true);
        $this->viewBuilder()->layout('afriqueCentraleLayout');
    }

}
