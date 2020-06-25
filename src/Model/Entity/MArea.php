<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MArea Entity
 *
 * @property int $area_id
 * @property string $area_name
 * @property \Cake\I18n\FrozenTime $create_time
 * @property \Cake\I18n\FrozenTime|null $update_time
 * @property bool $deleted
 */
class MArea extends Entity
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
        'area_name' => true,
        'create_time' => true,
        'update_time' => true,
        'deleted' => true,
    ];
}
