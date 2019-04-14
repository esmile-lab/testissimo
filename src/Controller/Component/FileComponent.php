<?php 
namespace App\Controller\Component;

use Cake\Controller\Component;


class FileComponent extends Component
{
    public $allowFileTypes = array('zip', 'pdf', 'doc', 'docx', 'xls', 'xlsx');
}