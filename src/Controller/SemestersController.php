<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Semesters Controller
 *
 * @property \App\Model\Table\SemestersTable $Semesters
 */
class SemestersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Semesters->find();
        $semesters = $this->paginate($query);

        $this->set(compact('semesters'));
    }

    /**
     * View method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semester = $this->Semesters->get($id, contain: ['Applications']);
        $this->set(compact('semester'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semester = $this->Semesters->newEmptyEntity();
        if ($this->request->is('post')) {
            $semester = $this->Semesters->patchEntity($semester, $this->request->getData());
            if ($this->Semesters->save($semester)) {
                $this->Flash->success(__('The semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semester could not be saved. Please, try again.'));
        }
        $this->set(compact('semester'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semester = $this->Semesters->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semester = $this->Semesters->patchEntity($semester, $this->request->getData());
            if ($this->Semesters->save($semester)) {
                $this->Flash->success(__('The semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semester could not be saved. Please, try again.'));
        }
        $this->set(compact('semester'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semester = $this->Semesters->get($id);
        if ($this->Semesters->delete($semester)) {
            $this->Flash->success(__('The semester has been deleted.'));
        } else {
            $this->Flash->error(__('The semester could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
