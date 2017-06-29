<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 */
class Project extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'users_id' => true,
        'no' => true,
        'kind' => true,
        'clients_id' => true,
        'status' => true,
        'estimated' => true,
        'billingdate' => true,
        'year' => true,
        'remarks' => true,
        'user' => true,
        'client' => true,
    ];
}
