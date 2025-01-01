<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $company_name
 * @property string $street_1
 * @property string $street_2
 * @property int $postcode
 * @property string $city
 * @property string $state
 * @property string $pic_name
 * @property string $pic_email
 * @property int $semester_id
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Semester $semester
 */
class Application extends Entity
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
        'user_id' => true,
        'company_name' => true,
        'street_1' => true,
        'street_2' => true,
        'postcode' => true,
        'city' => true,
        'state' => true,
        'pic_name' => true,
        'pic_email' => true,
        'semester_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'semester' => true,
    ];
}
