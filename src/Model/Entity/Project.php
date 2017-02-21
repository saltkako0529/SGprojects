<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $name
 * @property int $users_id
 * @property string $no
 * @property int $kind
 * @property int $clients_id
 * @property int $status
 * @property string $estimated
 * @property \Cake\I18n\Time $billingdate
 * @property int $year
 * @property string $remarks
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\ProjectOutsourcing[] $project_outsourcings
 */
class Project extends Entity
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
