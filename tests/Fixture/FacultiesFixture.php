<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacultiesFixture
 */
class FacultiesFixture extends TestFixture
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
                'name' => 1,
                'status' => 1,
                'created' => '2024-10-15 03:20:28',
                'modified' => '2024-10-15 03:20:28',
            ],
        ];
        parent::init();
    }
}
