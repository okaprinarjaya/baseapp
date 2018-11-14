<?php
namespace BaseApp\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoleMenu Entity
 *
 * @property int $id
 * @property int $role
 * @property int $menu_id
 * @property int $created
 *
 * @property \BaseApp\Model\Entity\Menu $menu
 */
class RoleMenu extends Entity
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
        'role' => true,
        'menu_id' => true
    ];
}
