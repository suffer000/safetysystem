<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MUser Entity
 *
 * @property int $user_id
 * @property string $user_name
 * @property int $department_id
 * @property int $area_id
 * @property int $user_permission
 * @property string $user_address
 * @property string $user_login_name
 * @property string $user_password
 * @property string|null $user_memo
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property int|null $updated_by
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\MDepartment $m_department
 * @property \App\Model\Entity\MArea $m_area
 */
class MUser extends Entity
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
        'user_name' => true,
        'department_id' => true,
        'area_id' => true,
        'user_permission' => true,
        'user_address' => true,
        'user_login_name' => true,
        'user_password' => true,
        'user_memo' => true,
        'created_by' => true,
        'created' => true,
        'updated_by' => true,
        'modified' => true,
        'deleted' => true,
        'm_department' => true,
        'm_area' => true,
    ];
}
