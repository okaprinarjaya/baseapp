<?php
namespace BaseApp\Controller;

use BaseApp\Controller\AppController;

/**
 * Menus Controller
 *
 * @property \BaseApp\Model\Table\MenusTable $Menus
 *
 * @method \BaseApp\Model\Entity\Menu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenusController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  /**
   * Index method
   *
   * @return \Cake\Http\Response|void
   */
  public function index()
  {
    $menus = $this->Menus->find('threaded', [
      'conditions' => ['Menus.parent_id IS NOT NULL'],
      'order' => ['Menus.rght' => 'ASC']
    ]);

    $this->set(compact('menus'));
  }

  /**
   * View method
   *
   * @param string|null $id Menu id.
   * @return \Cake\Http\Response|void
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function view($id = null)
  {
    $menu = $this->Menus->get($id, [
      'contain' => []
    ]);

    $this->set('menu', $menu);
  }

  /**
   * Add method
   *
   * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
   */
  public function add()
  {
    $rootId = $this->Menus->find('all', ['conditions' => ['Menus.parent_id IS NULL']])->first()->toArray()['id'];
    $menu = $this->Menus->newEntity();

    if ($this->request->is('post')) {
      $menu_data_update = $this->request->getData();

      if ($menu_data_update['parent_id'] === '') {
        $menu_data_update['parent_id'] = $rootId;
      }
      $menu = $this->Menus->patchEntity($menu, $menu_data_update);

      if ($this->Menus->save($menu)) {
        $this->Flash->success(__('The menu has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The menu could not be saved. Please, try again.'));
    }

    $the_menus = $this->Menus->find('treeList')
      ->where(['Menus.parent_id' => $rootId]);

    $this->set(compact('menu', 'the_menus'));
  }

  /**
   * Edit method
   *
   * @param string|null $id Menu id.
   * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null)
  {
    $menu = $this->Menus->get($id, [
        'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $menu = $this->Menus->patchEntity($menu, $this->request->getData());
      if ($this->Menus->save($menu)) {
        $this->Flash->success(__('The menu has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The menu could not be saved. Please, try again.'));
    }
    $this->set(compact('menu'));
  }

  /**
   * Delete method
   *
   * @param string|null $id Menu id.
   * @return \Cake\Http\Response|null Redirects to index.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $menu = $this->Menus->get($id);
    if ($this->Menus->delete($menu)) {
        $this->Flash->success(__('The menu has been deleted.'));
    } else {
        $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  public function menusDistribution()
  {
    $this->loadModel('BaseApp.RoleMenus');

    if ($this->request->is('post')) {
      $data = $this->request->getData();

      if (isset($data['menu_id']) && count($data['menu_id']) > 0 && $data['menu_id'] !== '') {
        $delete = $this->RoleMenus->query()
          ->update()
          ->set(['deleted' => 'Y'])
          ->where(['role' => $data['role']])
          ->execute();

        if ($delete) {
          $rows = array_map(function ($item) use ($data) {
            return ['role' => $data['role'], 'menu_id' => $item];
          }, $data['menu_id']);

          $entities = $this->RoleMenus->newEntities($rows);
          if ($this->RoleMenus->saveMany($entities)) {
            $this->Flash->success(__('Successfuly distributing menu to a user\'s role.'));
            return $this->redirect(['action' => 'menusDistribution']);
          }
        }
      }

      $this->Flash->error(__('The data could not be saved. Please, try again.'));
    }

    $menus = $this->Menus->find('threaded', ['conditions' => ['Menus.parent_id IS NOT NULL']]);
    $this->set(compact('menus'));
  }

  public function recover()
  {
    $this->Menus->recover();
    return $this->redirect(['action' => 'index']);
  }

  // public function testMove()
  // {
  //   $node = $this->Menus->get('89ee9fab-e393-4ff9-a9ea-8f07305a67cc');
  //   $this->Menus->moveUp($node);

  //   return $this->redirect(['action' => 'index']);
  // }
}
