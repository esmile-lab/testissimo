<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Manager Entity
 *
 * @property int $id
 * @property string $mail1
 * @property string $password
 * @property string $last_name
 * @property string $first_name
 * @property string $last_kana
 * @property string $first_kana
 * @property string $department
 * @property int $auth
 * @property int $is_deleted
 * @property int $create_manager
 * @property \Cake\I18n\FrozenTime $create_at
 * @property int $update_manager
 * @property \Cake\I18n\FrozenTime $update_at
 */
class Manager extends Entity
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
        'mail1' => true,
        'password' => true,
        'last_name' => true,
        'first_name' => true,
        'last_kana' => true,
        'first_kana' => true,
        'department' => true,
        'auth' => true,
        'is_deleted' => true,
        'create_manager' => true,
        'create_at' => true,
        'update_manager' => true,
        'update_at' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
