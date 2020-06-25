<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Musers Controller
 *
 * @property \App\Model\Table\MUsersTable $Musers
 * @method \App\Model\Entity\MUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MDepartments', 'MAreas'],
        ];
        $mUsers = $this->paginate($this->Musers);

        $this->set(compact('mUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id M User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mUser = $this->Musers->get($id, [
            'contain' => ['MDepartments', 'MAreas'],
        ]);

        $this->set(compact('mUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->log('変数$mUserの値は：'. $mUser . 'です。');
        $mUser = $this->Musers->newEmptyEntity();
        if ($this->request->is('post')) {
            $mUser = $this->Musers->patchEntity($mUser, $this->request->getData());
            if ($this->Musers->save($mUser)) {
                $this->Flash->success(__('The m user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m user could not be saved. Please, try again.'));
        }
        $mDepartments = $this->Musers->MDepartments->find('list', ['limit' => 200]);
        $mAreas = $this->Musers->MAreas->find('list', ['limit' => 200]);
        $this->set(compact('mUser', 'mDepartments', 'mAreas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id M User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mUser = $this->Musers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mUser = $this->Musers->patchEntity($mUser, $this->request->getData());
            if ($this->Musers->save($mUser)) {
                $this->Flash->success(__('The m user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m user could not be saved. Please, try again.'));
        }
        $mDepartments = $this->Musers->MDepartments->find('list', ['limit' => 200]);
        $mAreas = $this->Musers->MAreas->find('list', ['limit' => 200]);
        $this->set(compact('mUser', 'mDepartments', 'mAreas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id M User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mUser = $this->Musers->get($id);
        if ($this->Musers->delete($mUser)) {
            $this->Flash->success(__('The m user has been deleted.'));
        } else {
            $this->Flash->error(__('The m user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
