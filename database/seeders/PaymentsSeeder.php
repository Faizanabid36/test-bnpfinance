<?php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\Payment;
use Carbon\Carbon;
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
        $loans = Loan::all();

        foreach ($loans as $loan) {
            Payment::create([
                'loan_id' => $loan->id,
                'payment_date' => $loan->user_id % 2 != 0 ? Carbon::today() : Carbon::today()->subDays($loan->id),
            ]);
        };
    }
}
