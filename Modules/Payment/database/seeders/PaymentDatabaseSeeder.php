<?php

namespace Modules\Payment\Database\Seeders;

use Illuminate\Database\Seeder;


class PaymentDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $this->call(BankSeeder::class);
       $this->call(AccountsSeeder::class);
       $this->call(CreditCardsSeeder::class);
    }

}
