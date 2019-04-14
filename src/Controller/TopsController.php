<?php
namespace App\Controller;

use App\Controller\AppController;
use PhpParser\Node\Expr\Array_;

/**
 * Tops Controller
 *
 * @property \App\Model\Table\ TODO
 *
 * @method \App\Model\Entity\TODO | \Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TopsController extends AppController
{
    /**
     * Initialize method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('adminLTE');
    }
    
    /**
     * View method
     *
     * @return \Cake\Http\Response|void
     */
    public function view()
    {
        $this->sessionCheck();

        $this->set('pageTitle', 'トップ');
    }
}
