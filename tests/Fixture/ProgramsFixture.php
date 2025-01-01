<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramsFixture
 */
class ProgramsFixture extends TestFixture
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
                'created' => '2024-10-15 03:21:04',
                'modified' => '2024-10-15 03:21:04',
            ],
        ];
        parent::init();
    }
}
