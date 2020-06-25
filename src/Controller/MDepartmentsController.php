<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mdepartments Controller
 *
 * @property \App\Model\Table\MDepartmentsTable $Mdepartments
 * @method \App\Model\Entity\MDepartment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MDepartmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mDepartments = $this->paginate($this->Mdepartments);

        $this->set(compact('mDepartments'));
    }

    /**
     * View method
     *
     * @param string|null $id M Department id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mDepartment = $this->Mdepartments->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mDepartment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mDepartment = $this->Mdepartments->newEmptyEntity();
        if ($this->request->is('post')) {
            $mDepartment = $this->Mdepartments->patchEntity($mDepartment, $this->request->getData());
            if ($this->Mdepartments->save($mDepartment)) {
                $this->Flash->success(__('The m department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m department could not be saved. Please, try again.'));
        }
        $this->set(compact('mDepartment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id M Department id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mDepartment = $this->Mdepartments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mDepartment = $this->Mdepartments->patchEntity($mDepartment, $this->request->getData());
            if ($this->Mdepartments->save($mDepartment)) {
                $this->Flash->success(__('The m department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m department could not be saved. Please, try again.'));
        }
        $this->set(compact('mDepartment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id M Department id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mDepartment = $this->Mdepartments->get($id);
        if ($this->Mdepartments->delete($mDepartment)) {
            $this->Flash->success(__('The m department has been deleted.'));
        } else {
            $this->Flash->error(__('The m department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
