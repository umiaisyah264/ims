<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $faculty_id
 * @property int $program_id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property int $nric
 * @property string $address
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Faculty $faculty
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\Application[] $applications
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'faculty_id' => true,
        'program_id' => true,
        'fullname' => true,
        'email' => true,
        'password' => true,
        'gender' => true,
        'nric' => true,
        'address' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'faculty' => true,
        'program' => true,
        'applications' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
