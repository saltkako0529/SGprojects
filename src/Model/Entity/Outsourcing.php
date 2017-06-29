<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Outsourcing Entity.
 */
class Outsourcing extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'is_deleted' => true,
        'deleted' => true,
        'name' => true,
        'postalcode' => true,
        'address' => true,
        'tel' => true,
        'remarks' => true,
    ];
}
