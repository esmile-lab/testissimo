<?php
namespace App\Controller;

use App\Controller\AppController;
use PhpParser\Node\Expr\Array_;
use App\Controller\Component\DefineComponent;

/**
 * Informations Controller
 *
 * @property \App\Model\Table\ TODO
 *
 * @method \App\Model\Entity\TODO | \Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InformationsController extends AppController
{
    /**
     * Initialize method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
    }
    
    /**
     * Privacy method
     *
     * @return \Cake\Http\Response|void
     */
    public function privacy()
    {
        $this->sessionCheck();

        $this->set('pageTitle', 'プライバシーポリシー');
    }

    /**
     * Guide method
     *
     * @return \Cake\Http\Response|void
     */
    public function guide()
    {
        $this->sessionCheck();
        $this->set('pageTitle', '使い方ガイド');
        $this->set('uploadStatus', $this->Define::STUDY_UPLOAD_STATUS);
    }
}
