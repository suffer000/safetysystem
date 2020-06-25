<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mareas Controller
 *
 * @property \App\Model\Table\MAreasTable $Mareas
 * @method \App\Model\Entity\MArea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MAreasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mAreas = $this->paginate($this->Mareas);

        $this->set(compact('mAreas'));
    }

    /**
     * View method
     *
     * @param string|null $id M Area id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mArea = $this->Mareas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mArea'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mArea = $this->Mareas->newEmptyEntity();
        if ($this->request->is('post')) {
            $mArea = $this->Mareas->patchEntity($mArea, $this->request->getData());
            if ($this->Mareas->save($mArea)) {
                $this->Flash->success(__('The m area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m area could not be saved. Please, try again.'));
        }
        $this->set(compact('mArea'));
    }

    /**
     * Edit method
     *
     * @param string|null $id M Area id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mArea = $this->Mareas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mArea = $this->Mareas->patchEntity($mArea, $this->request->getData());
            if ($this->Mareas->save($mArea)) {
                $this->Flash->success(__('The m area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m area could not be saved. Please, try again.'));
        }
        $this->set(compact('mArea'));
    }

    /**
     * Delete method
     *
     * @param string|null $id M Area id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mArea = $this->Mareas->get($id);
        if ($this->Mareas->delete($mArea)) {
            $this->Flash->success(__('The m area has been deleted.'));
        } else {
            $this->Flash->error(__('The m area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
