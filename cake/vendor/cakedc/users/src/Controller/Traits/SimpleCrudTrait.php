<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace CakeDC\Users\Controller\Traits;

use Cake\Network\Exception\NotFoundException;
use Cake\Network\Response;
use Cake\Utility\Inflector;

/**
 * Covers the baked CRUD actions, note we could use Crud Plugin too
 *
 * @property \Cake\Http\ServerRequest $request
 */
trait SimpleCrudTrait
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
    	$this->set('title', __d('CakeDC/Users', 'List Users'));
    	
        $table = $this->loadModel();
        $tableAlias = $table->alias();
        $this->set($tableAlias, $this->paginate($table,array('maxLimit' => 10)));
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws NotFoundException When record not found.
     */
    public function view($id = null)
    {
    	$this->set('title', __d('CakeDC/Users', 'View'));
    	
        $table = $this->loadModel();
        $tableAlias = $table->alias();
        $entity = $table->get($id, [
            'contain' => []
        ]);
        $this->set($tableAlias, $entity);
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
    }

    /**
     * Add method
     *
     * @return mixed Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	$this->set('title', __d('CakeDC/Users', 'Add User'));
    	
        $table = $this->loadModel();
        $tableAlias = $table->alias();
        $entity = $table->newEntity();
        $this->set($tableAlias, $entity);
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
        if (!$this->request->is('post')) {
            return;
        }
        $entity = $table->patchEntity($entity, $this->request->getData());
        $singular = Inflector::singularize(Inflector::humanize($tableAlias));
        if ($table->save($entity)) {
            $this->Flash->success(__d('CakeDC/Users', 'The {0} has been saved', $singular));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__d('CakeDC/Users', 'The {0} could not be saved', $singular));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return mixed Redirects on successful edit, renders view otherwise.
     * @throws NotFoundException When record not found.
     */
    public function edit($id = null)
    {
    	$this->set('title', __d('CakeDC/Users', 'Edit User'));
    	
        $table = $this->loadModel();
        $tableAlias = $table->alias();
        $entity = $table->get($id, [
            'contain' => []
        ]);
        $this->set($tableAlias, $entity);
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
        if (!$this->request->is(['patch', 'post', 'put'])) {
            return;
        }
        $entity = $table->patchEntity($entity, $this->request->getData());
        $singular = Inflector::singularize(Inflector::humanize($tableAlias));
                
        if ($table->save($entity)) {
            $this->Flash->success(__d('CakeDC/Users', 'The {0} has been saved', $singular));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__d('CakeDC/Users', 'The {0} could not be saved', $singular));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return Response Redirects to index.
     * @throws NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $table = $this->loadModel();
        $tableAlias = $table->alias();
        $entity = $table->get($id, [
            'contain' => []
        ]);
        $singular = Inflector::singularize(Inflector::humanize($tableAlias));
        if ($table->delete($entity)) {
            $this->Flash->success(__d('CakeDC/Users', 'The {0} has been deleted', $singular));
        } else {
            $this->Flash->error(__d('CakeDC/Users', 'The {0} could not be deleted', $singular));
        }

        return $this->redirect(['action' => 'index']);
    }
}
