<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hour Entity.
 */
class Hour extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'users_id' => true,
        'projects_id' => true,
        'year' => true,
        'month' => true,
        'date' => true,
        'kind' => true,
        'officer' => true,
        'hour' => true,
        'work' => true,
        'application' => true,
        'print' => true,
        'remarks' => true,
        'user' => true,
        'project' => true,
    ];
}
