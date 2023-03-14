<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingsFixture
 */
class BookingsFixture extends TestFixture
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
                'place' => 'Lorem ipsum dolor sit amet',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'primary_address_address' => 'Lorem ipsum dolor sit amet',
                'primary_address_city' => 'Lorem ipsum dolor sit amet',
                'primary_address_zip' => 'Lorem ipsum dolor sit amet',
                'booking_date' => '2023-03-13 21:54:26',
                'created' => '2023-03-13 21:54:26',
                'modified' => '2023-03-13 21:54:26',
            ],
        ];
        parent::init();
    }
}
