<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create(['payment_method' => 'Dana']);
        Payment::create(['payment_method' => 'Gopay']);
        Payment::create(['payment_method' => 'Bank Transfer']);
    }
}
