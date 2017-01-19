<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Materiels Controller
 *
 * @property \App\Model\Table\MaterielsTable $Materiels
 */
class MaterielsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('adminLayout');

        $materiels = $this->paginate($this->Materiels);

        $this->set(compact('materiels'));
        $this->set('_serialize', ['materiels']);
    }

    /**
     * View method
     *
     * @param string|null $id Materiel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $materiel = $this->Materiels->get($id, [
            'contain' => ['Datations']
        ]);

        $this->set('materiel', $materiel);
        $this->set('_serialize', ['materiel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');

        $materiel = $this->Materiels->newEntity();
        if ($this->request->is('post')) {
            $materiel = $this->Materiels->patchEntity($materiel, $this->request->data);
            if ($this->Materiels->save($materiel)) {
                $this->Flash->success(__('The materiel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materiel could not be saved. Please, try again.'));
            }
        }
        $datations = $this->Materiels->Datations->find('list', ['limit' => 200]);
        $this->set(compact('materiel', 'datations'));
        $this->set('_serialize', ['materiel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materiel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $materiel = $this->Materiels->get($id, [
            'contain' => ['Datations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiel = $this->Materiels->patchEntity($materiel, $this->request->data);
            if ($this->Materiels->save($materiel)) {
                $this->Flash->success(__('The materiel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materiel could not be saved. Please, try again.'));
            }
        }
        $datations = $this->Materiels->Datations->find('list', ['limit' => 200]);
        $this->set(compact('materiel', 'datations'));
        $this->set('_serialize', ['materiel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materiel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');

        $this->request->allowMethod(['post', 'delete']);
        $materiel = $this->Materiels->get($id);
        if ($this->Materiels->delete($materiel)) {
            $this->Flash->success(__('The materiel has been deleted.'));
        } else {
            $this->Flash->error(__('The materiel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
