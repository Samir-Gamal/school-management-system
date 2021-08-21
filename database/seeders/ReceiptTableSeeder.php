<?php

namespace Database\Seeders;

use App\Models\Receipt;
use App\Models\Student;
use Illuminate\Database\Seeder;

class ReceiptTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {


        $students = Student::select('id')->get();
        $receipts = [];
        for ($i = 0; $i < $students->count(); $i++) {
            $receipt = Receipt::factory()->make([
                'student_id' => $students->random()->id,

            ])->
            toArray();

            $receipts[] = $receipt;
            $receipt = null;
        }
        Receipt::insert($receipts);
    }
}
