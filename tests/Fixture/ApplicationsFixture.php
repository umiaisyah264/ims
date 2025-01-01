<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'company_name' => 'Lorem ipsum dolor sit amet',
                'street_1' => 'Lorem ipsum dolor sit amet',
                'street_2' => 'Lorem ipsum dolor sit amet',
                'postcode' => 1,
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'pic_name' => 'Lorem ipsum dolor sit amet',
                'pic_email' => 'Lorem ipsum dolor sit amet',
                'semester_id' => 1,
                'status' => 1,
                'created' => '2024-11-12 02:33:38',
                'modified' => '2024-11-12 02:33:38',
            ],
        ];
        parent::init();
    }
}
