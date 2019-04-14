<?php
namespace App\View\Cell;

use Cake\View\Cell;

class CategoryCell extends Cell
{
    public function display($categoryType)
    {
        if ($categoryType === 'game') {
            $this->loadModel('GameCategories');
            $categories = $this->GameCategories->find()->where([
                'GameCategories.is_deleted'=> 0
            ]);
            
            $this->set('categories', $categories);
        } else if ($categoryType === 'system') {
            $this->loadModel('SystemCategories');
            $categories = $this->SystemCategories->find()->where([
                'SystemCategories.is_deleted'=> 0
            ]);

            $this->set('categories', $categories);
        }
    }
}