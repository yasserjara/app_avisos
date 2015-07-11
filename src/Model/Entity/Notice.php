<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notice Entity.
 */
class Notice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'title' => true,
        'description' => true,
        'phone' => true,
        'region' => true,
        'city' => true,
        'user' => true,
    ];
}
