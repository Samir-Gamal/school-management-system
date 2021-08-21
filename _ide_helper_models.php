<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ParentAttachment
 *
 * @property int $id
 * @property string|null $file_name
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParentAttachment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Attachment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attendance
 *
 * @property int $id
 * @property int $student_id
 * @property int $grade_id
 * @property int $classroom_id
 * @property int $section_id
 * @property int $teacher_id
 * @property string $day
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereAttendenceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereAttendenceStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStatus($value)
 * @method static \Database\Factories\AttendanceFactory factory(...$parameters)
 */
	class Attendance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BloodType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\BloodTypeFactory factory(...$parameters)
 */
	class BloodType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Classroom
 *
 * @property int $id
 * @property array $name
 * @property int $grade_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \App\Models\Grade $grade
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom query()
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classroom whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\ClassroomFactory factory(...$parameters)
 */
	class Classroom extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Exam
 *
 * @property int $id
 * @property array $name
 * @property int $term
 * @property string $academic_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Exam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\ExamFactory factory(...$parameters)
 */
	class Exam extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fee
 *
 * @property int $id
 * @property array $title
 * @property string $amount
 * @property int $grade_id
 * @property int $classroom_id
 * @property string|null $description
 * @property string $year
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $classroom
 * @property-read array $translations
 * @property-read \App\Models\Gender $grades
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereYear($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Grade $grade
 * @property-read mixed $type_name
 * @method static \Database\Factories\FeeFactory factory(...$parameters)
 */
	class Fee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FundAccount
 *
 * @property int $id
 * @property string $date
 * @property int|null $receipt_id
 * @property int|null $payment_id
 * @property string|null $debit
 * @property string|null $credit
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereReceiptId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class FundAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gender
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\GenderFactory factory(...$parameters)
 */
	class Gender extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Grade
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property string|null $notes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Classroom[] $classrooms
 * @property-read int|null $classrooms_count
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\GradeFactory factory(...$parameters)
 */
	class Grade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Guardian
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property array $father_name
 * @property string $father_national_id
 * @property string $father_passport_id
 * @property string $father_phone
 * @property array $father_job
 * @property int $father_nationality_id
 * @property int $father_blood_type_id
 * @property int $father_religion_id
 * @property string $father_address
 * @property array $mother_name
 * @property string $mother_national_id
 * @property string $mother_passport_id
 * @property string $mother_phone
 * @property array $mother_job
 * @property int $mother_nationality_id
 * @property int $mother_blood_type_id
 * @property int $mother_religion_id
 * @property string $mother_address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian query()
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherBloodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherNationalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherPassportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereFatherReligionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherBloodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherNationalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherPassportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereMotherReligionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guardian whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\GuardianFactory factory(...$parameters)
 */
	class Guardian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $filename
 * @property int $imageable_id
 * @property string $imageable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $imageable
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Invoice
 *
 * @property int $id
 * @property string $invoice_at
 * @property int $student_id
 * @property int $grade_id
 * @property int $classroom_id
 * @property int $fee_id
 * @property string $amount
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $classroom
 * @property-read \App\Models\Fee $fees
 * @property-read \App\Models\Grade $grade
 * @property-read \App\Models\Section $section
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereFeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceAt($value)
 * @property-read \App\Models\Fee $fee
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Nationality
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\NationalityFactory factory(...$parameters)
 */
	class Nationality extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $amount
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProcessingFee
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $amount
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessingFee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ProcessingFee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Promotion
 *
 * @property int $id
 * @property int $student_id
 * @property int $from_grade
 * @property int $from_classroom
 * @property int $from_section
 * @property int $to_grade
 * @property int $to_classroom
 * @property int $to_section
 * @property string $academic_year
 * @property string $academic_year_new
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $f_classroom
 * @property-read \App\Models\Grade $f_grade
 * @property-read \App\Models\Section $f_section
 * @property-read \App\Models\Student $student
 * @property-read \App\Models\Classroom $t_classroom
 * @property-read \App\Models\Grade $t_grade
 * @property-read \App\Models\Section $t_section
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereAcademicYearNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromClassroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToClassroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Promotion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReceiptStudent
 *
 * @property int $id
 * @property string $date
 * @property int $student_id
 * @property string|null $debit
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReceiptStudent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Receipt extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Religion
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Religion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Religion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Religion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\ReligionFactory factory(...$parameters)
 */
	class Religion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property int $id
 * @property array $name
 * @property int $status
 * @property int $grade_id
 * @property int $classroom_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $classroom
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teacher[] $teachers
 * @property-read int|null $teachers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\SectionFactory factory(...$parameters)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Specialization
 *
 * @property string $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\SpecializationFactory factory(...$parameters)
 */
	class Specialization extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $id
 * @property array $name
 * @property string $email
 * @property string $password
 * @property int $gender_id
 * @property int $nationalitie_id
 * @property int $blood_id
 * @property string $birthday
 * @property int $grade_id
 * @property int $classroom_id
 * @property int $section_id
 * @property int $parent_id
 * @property string $academic_year
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Nationality $Nationality
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attendance[] $attendance
 * @property-read int|null $attendance_count
 * @property-read \App\Models\Classroom $classroom
 * @property-read \App\Models\Gender $gender
 * @property-read array $translations
 * @property-read \App\Models\Grade $grade
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \App\Models\Guardian $myparent
 * @property-read \App\Models\Section $section
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StudentAccount[] $student_account
 * @property-read int|null $student_account_count
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Query\Builder|Student onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBloodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereDateBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNationalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Student withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Student withoutTrashed()
 * @mixin \Eloquent
 * @property string $nationalise_id
 * @method static \Illuminate\Database\Eloquent\Builder|Student graduated()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNationaliseId($value)
 * @property string $nationality_id
 * @property string $guardian_id
 * @method static \Database\Factories\StudentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGuardianId($value)
 * @property-read \App\Models\Guardian $guardian
 * @property-read \App\Models\Nationality $nationality
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentAccount
 *
 * @property int $id
 * @property string $date
 * @property string $type
 * @property int|null $invoice_id
 * @property int|null $receipt_id
 * @property int|null $processing_id
 * @property int|null $payment_id
 * @property int $student_id
 * @property string|null $debit
 * @property string|null $credit
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereFeeInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereProcessingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereReceiptId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAccount whereInvoiceId($value)
 */
	class StudentAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property int $id
 * @property array $name
 * @property int $grade_id
 * @property int $classroom_id
 * @property int $teacher_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Classroom $classroom
 * @property-read array $translations
 * @property-read \App\Models\Grade $grade
 * @property-read \App\Models\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\SubjectFactory factory(...$parameters)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property array $name
 * @property int $specialization_id
 * @property int $gender_id
 * @property string $joining_at
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Gender $genders
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @property-read \App\Models\Specialization $specializations
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereJoiningDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereSpecializationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereJoiningAt($value)
 * @method static \Database\Factories\TeacherFactory factory(...$parameters)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 */
	class User extends \Eloquent {}
}

