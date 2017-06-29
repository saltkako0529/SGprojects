<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity.
 */
class Client extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'shortname' => true,
        'users_id' => true,
        'postalcode' => true,
        'address' => true,
        'tel' => true,
        'remarks' => true,
        'user' => true,
    ];
}
