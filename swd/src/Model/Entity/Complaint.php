<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Complaint Entity
 *
 * @property int $id
 * @property int $id_user
 * @property string $neighborhood
 * @property string $street
 * @property int $numb
 * @property string $description_complaint
 */
class Complaint extends Entity
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
        'id_user' => true,
        'neighborhood' => true,
        'street' => true,
        'numb' => true,
        'description_complaint' => true
    ];
}
