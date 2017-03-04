<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectOutsourcing Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property int $projects_id
 * @property int $outsourcings_id
 * @property string $cost
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Outsourcing $outsourcing
 */
class ProjectOutsourcing extends Entity
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
        '*' => true,
        'id' => false
    ];
}
