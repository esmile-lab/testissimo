<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class GameUploadContent extends Entity
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
        'user_id' => true,
        'game_study_category_id' => true,
        'name' => true,
        'comment' => true,
        'file_name' => true,
        'file_type' => true,
        'is_deleted' => true,
        'create_user' => true,
        'create_at' => true,
        'update_user' => true,
        'update_at' => true,
        'check_status_flg' => true,
        'check_score' => true,
        'check_comment' => true,
        'check_answer_flg' => true,
        'check_manager' => true,
        'check_at' => true,
        'user' => true
    ];
}
