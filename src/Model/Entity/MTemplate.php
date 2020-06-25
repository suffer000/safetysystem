<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MTemplate Entity
 *
 * @property int $template_id
 * @property string $template_title
 * @property string $template_text
 * @property \Cake\I18n\FrozenTime $create_time
 * @property \Cake\I18n\FrozenTime|null $update_time
 * @property bool $deleted
 */
class MTemplate extends Entity
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
        'template_title' => true,
        'template_text' => true,
        'create_time' => true,
        'update_time' => true,
        'deleted' => true,
    ];
}
