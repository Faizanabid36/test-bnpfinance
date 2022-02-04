<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Seeder;

class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_with_loan = [1, 1, 3, 4, 4, 5, 7, 7, 8, 9, 11, 13, 14, 15, 15];
        $loan_types = ['type_1', 'type_2'];

        foreach ($users_with_loan as $user) {
            Loan::create([
                'user_id' => $user,
                'loan_type' => $loan_types[$user % 2],
            ]);
        }
    }
}
