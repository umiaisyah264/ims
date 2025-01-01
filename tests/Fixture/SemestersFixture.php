<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestersFixture
 */
class SemestersFixture extends TestFixture
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
                'code' => 1,
                'session' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2024-11-12 02:23:14',
                'modified' => '2024-11-12 02:23:14',
            ],
        ];
        parent::init();
    }
}
