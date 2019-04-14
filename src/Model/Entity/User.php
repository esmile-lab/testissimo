<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $mail1
 * @property string $password
 * @property string $last_name
 * @property string $first_name
 * @property string $last_kana
 * @property string $first_kana
 * @property string $mail2
 * @property string $tel1
 * @property string $tel2
 * @property int $sex
 * @property \Cake\I18n\FrozenDate $birthday
 * @property int $school_id
 * @property int $graduation_year
 * @property int $graduation_month
 * @property string $zip
 * @property string $prefecture
 * @property string $city
 * @property string $building
 * @property int $auth
 * @property int $is_mailing
 * @property int $is_scouted
 * @property int $is_added
 * @property int $is_deleted
 * @property \Cake\I18n\FrozenTime $last_login_at
 * @property int $create_user
 * @property \Cake\I18n\FrozenTime $create_at
 * @property int $update_user
 * @property \Cake\I18n\FrozenTime $update_at
 *
 * @property \App\Model\Entity\School $school
 */
class User extends Entity
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
        'mail2' => true,
        'tel1' => true,
        'tel2' => true,
        'sex' => true,
        'birthday' => true,
        'school_id' => true,
        'graduation_year' => true,
        'graduation_month' => true,
        'zip' => true,
        'prefecture' => true,
        'city' => true,
        'building' => true,
        'auth' => true,
        'is_mailing' => true,
        'is_scouted' => true,
        'is_added' => true,
        'is_deleted' => true,
        'last_login_at' => true,
        'create_user' => true,
        'create_at' => true,
        'update_user' => true,
        'update_at' => true,
        'school' => true
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
