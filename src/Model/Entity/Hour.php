<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hour Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $users_id
 * @property int $projects_id
 * @property int $year
 * @property int $month
 * @property int $date
 * @property int $kind
 * @property int $officer
 * @property string $hour
 * @property int $work
 * @property int $application
 * @property int $print
 * @property string $remarks
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Project $project
 */
class Hour extends Entity
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
