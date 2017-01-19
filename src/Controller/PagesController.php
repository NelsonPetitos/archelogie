<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;


class PagesController extends AppController
{
    public $helpers = array('GoogleMap');

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub
        $this->Auth->allow(['display', 'getUrl']);
    }

    public function display(){
        if (!empty($this->request->param('pass'))) {
            $param = $this->request->param('pass')[0];
            //$this->autoRender = false;
            $this->viewBuilder()
                ->template($param);
            //debug($param);
        }else{
            debug("rien a afficher");
        }
    }

    public function getUrl(){
        if($this->request->is('ajax')) {
            // Force le controller à rendre une réponse JSON.
            $this->RequestHandler->renderAs($this, 'json');
            // Définit le type de réponse de la requete AJAX
            $this->response->type('application/json');

            $datas = ['result'=> 'les resultat de lapel'];

            // Chargement du layout AJAX
            $this->viewBuilder()->layout('ajax');
            // Créer un contexte sites à renvoyer
            $this->set(compact('datas'));
            // Généreration des vues de données
            $this->set('_serialize', ['datas']);
        }
    }
}