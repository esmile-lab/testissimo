<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class GameCourseCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'name' => true,
        'order_num' => true,
        'is_deleted' => true,
        'create_manager' => true,
        'create_at' => true,
        'update_manager' => true,
        'update_at' => true,
        'game_study_categories' => true
    ];
}
