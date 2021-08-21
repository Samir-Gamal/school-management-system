<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Student;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Seeder;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::select('id', 'section_id')->get();
       //attendance period
        $from = Carbon::now()->subDays(30)->toString();
        $to = Carbon::now()->toString();
        $attendance_period = CarbonPeriod::create($from,$to);

        $attendances = [];
        foreach ($attendance_period as $day) {
            foreach ($students as $student) {
                $attendance = Attendance::factory()->make([
                    'student_id' => $student->id,
                    'section_id' => $student->section_id,
                    'day' => $day,
                ])->
                toArray();
                $attendances[] = $attendance;
                $attendance = null;
            }
        }

        Attendance::insert($attendances);
    }
}
