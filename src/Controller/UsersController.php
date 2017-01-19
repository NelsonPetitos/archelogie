<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public  function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub

        $this->Auth->allow(['logout']);
    }



    public function login(){
        if ($this->request->is("post")){
            $user = $this->Auth->identify();
            if ($user) {
                if ($user['role_id'] == 1) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }else {

                    return $this->Flash->error("Cet utilisateur n'a pas les privilèges requis pour administrer la base.", ['key' => 'auth']);
                }
            }else{
                return $this->Flash->error("Verifier vos identifiants.", ['key' => 'auth']);
            }
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

//    /**
//     * Index method
//     *
//     * @return \Cake\Network\Response|null
//     */
//    public function index()
//    {
//        $this->paginate = [
//            'contain' => ['Roles']
//        ];
//        $users = $this->paginate($this->Users);
//
//        $this->set(compact('users'));
//        $this->set('_serialize', ['users']);
//    }
//
//    /**
//     * Add method
//     *
//     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
//     */
//    public function add()
//    {
//        $user = $this->Users->newEntity();
//        if ($this->request->is('post')) {
//            $user = $this->Users->patchEntity($user, $this->request->data);
//            if ($this->Users->save($user)) {
//                $this->Flash->success(__('The user has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            } else {
//                $this->Flash->error(__('The user could not be saved. Please, try again.'));
//            }
//        }
//        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
//        $this->set(compact('user', 'roles'));
//        $this->set('_serialize', ['user']);
//    }
}
