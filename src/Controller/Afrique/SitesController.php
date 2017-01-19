<?php
namespace App\Controller\Afrique;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * Sites Controller
 *
 * @property \App\Model\Table\SitesTable $Sites
 */
class SitesController extends AppController
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

        if($this->request->is('ajax')){
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type('application/json');
            $this->viewBuilder()->layout('ajax');

            $query = $this->Sites->find()->order(['name' => 'DESC']);
            if(count($this->request->data(['params']) != 0)){
                $params  = $this->request->data(['params']);
                $conditions = $this->Search->searchConditions($params, 'Sites');
                $datas = $this->paginate($query->where($conditions)->andWhere(['source_id' => 1]));
            }else{
                $datas = $this->paginate($query->where(['source_id' => 1]));
            }

            $this->set(compact('datas'));
            $this->set('_serialize', ['datas']);
        }else{
            $this->set('searchUrl', Router::url(['controller' => 'Sites', 'prefix' => 'afrique', '?' => ['page' => 1],]));
            $this->paginate = ['limit' => 10];
            $this->viewBuilder()->layout('afriqueCentraleLayout');
            $sites = $this->paginate($this->Sites->find()->where(['source_id' => 1]));
            $this->set(compact('sites'));
            $this->set('_serialize', ['sites']);
            $this->set('activesite', true);
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
        $site = $this->Sites->get($id, [
            'contain' => ['Datations']
        ]);

        $this->set('site', $site);
        $this->set('_serialize', ['site']);
        $this->set('activesite', true);
        $this->viewBuilder()->layout('afriqueCentraleLayout');
    }

}
