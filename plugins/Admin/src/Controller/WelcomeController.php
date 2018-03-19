<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Welcome Controller
 *
 *
 * @method \Admin\Model\Entity\Welcome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WelcomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userData = $this->Auth->user();
        $menus = TableRegistry::get('Admin.Menus')->getMenuForManage($this->Auth->user('role_id'));
        
        $systemData = TableRegistry::get('Admin.Options')->getArrayData(array('Options.type' => 'system'));

        $this->set(compact('userData', 'menus', 'systemData'));
    }

    /*
     * 我的主页
     *
     * */
    public function main()
    {

    }

}
