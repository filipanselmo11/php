<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Complaint Controller
 *
 * @property \App\Model\Table\ComplaintTable $Complaint
 *
 * @method \App\Model\Entity\Complaint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComplaintController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $complaint = $this->paginate($this->Complaint);

        $this->set(compact('complaint'));
    }

    /**
     * View method
     *
     * @param string|null $id Complaint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $complaint = $this->Complaint->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('complaint', $complaint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $complaint = $this->Complaint->newEntity();
        if ($this->request->is('post')) {
            $complaint = $this->Complaint->patchEntity($complaint, $this->request->getData());
            if ($this->Complaint->save($complaint)) {
                $this->Flash->success(__('The complaint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complaint could not be saved. Please, try again.'));
        }
        $users = $this->Complaint->Users->find('list', ['limit' => 200]);
        $this->set(compact('complaint', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Complaint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $complaint = $this->Complaint->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $complaint = $this->Complaint->patchEntity($complaint, $this->request->getData());
            if ($this->Complaint->save($complaint)) {
                $this->Flash->success(__('The complaint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complaint could not be saved. Please, try again.'));
        }
        $users = $this->Complaint->Users->find('list', ['limit' => 200]);
        $this->set(compact('complaint', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Complaint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complaint = $this->Complaint->get($id);
        if ($this->Complaint->delete($complaint)) {
            $this->Flash->success(__('The complaint has been deleted.'));
        } else {
            $this->Flash->error(__('The complaint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
