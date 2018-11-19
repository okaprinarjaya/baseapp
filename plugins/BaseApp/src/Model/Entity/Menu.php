<?php
namespace BaseApp\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property string $id
 * @property string $parent_id
 * @property int $lft
 * @property int $rght
 * @property string $title
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \BaseApp\Model\Entity\ParentMenu $parent_menu
 * @property \BaseApp\Model\Entity\ChildMenu[] $child_menus
 */
class Menu extends Entity
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
      'parent_id' => true,
      'lft' => true,
      'rght' => true,
      'title' => true,
      'plugin' => true,
      'controller' => true,
      'action' => true,
      'created' => true
    ];
}
