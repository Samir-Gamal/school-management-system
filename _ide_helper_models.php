<?php

// @formatter:off

/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\ParentAttachment
     *
     * @property int $id
     * @property string|null $file_name
     * @property int $parent_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static Builder|ParentAttachment newModelQuery()
     * @method static Builder|ParentAttachment newQuery()
     * @method static Builder|ParentAttachment query()
     * @method static Builder|ParentAttachment whereCreatedAt($value)
     * @method static Builder|ParentAttachment whereFileName($value)
     * @method static Builder|ParentAttachment whereId($value)
     * @method static Builder|ParentAttachment whereParentId($value)
     * @method static Builder|ParentAttachment whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class Attachment extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\AttendanceFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static Builder|Attendance newModelQuery()
     * @method static Builder|Attendance newQuery()
     * @method static Builder|Attendance query()
     * @method static Builder|Attendance whereAttendenceDate($value)
     * @method static Builder|Attendance whereAttendenceStatus($value)
     * @method static Builder|Attendance whereClassroomId($value)
     * @method static Builder|Attendance whereCreatedAt($value)
     * @method static Builder|Attendance whereGradeId($value)
     * @method static Builder|Attendance whereId($value)
     * @method static Builder|Attendance whereSectionId($value)
     * @method static Builder|Attendance whereStudentId($value)
     * @method static Builder|Attendance whereTeacherId($value)
     * @method static Builder|Attendance whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static Builder|Attendance whereDay($value)
     * @method static Builder|Attendance whereStatus($value)
     * @method static AttendanceFactory factory(...$parameters)
     */
    class Attendance extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\BloodTypeFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\BloodType
     *
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static Builder|BloodType newModelQuery()
     * @method static Builder|BloodType newQuery()
     * @method static Builder|BloodType query()
     * @method static Builder|BloodType whereCreatedAt($value)
     * @method static Builder|BloodType whereId($value)
     * @method static Builder|BloodType whereName($value)
     * @method static Builder|BloodType whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static BloodTypeFactory factory(...$parameters)
     */
    class BloodType extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\ClassroomFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Classroom
     *
     * @property int $id
     * @property array $name
     * @property int $grade_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @property-read Grade $grade
     * @method static Builder|Classroom newModelQuery()
     * @method static Builder|Classroom newQuery()
     * @method static Builder|Classroom query()
     * @method static Builder|Classroom whereCreatedAt($value)
     * @method static Builder|Classroom whereGradeId($value)
     * @method static Builder|Classroom whereId($value)
     * @method static Builder|Classroom whereName($value)
     * @method static Builder|Classroom whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static ClassroomFactory factory(...$parameters)
     */
    class Classroom extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\ExamFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Exam
     *
     * @property int $id
     * @property array $name
     * @property int $term
     * @property string $academic_year
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @method static Builder|Exam newModelQuery()
     * @method static Builder|Exam newQuery()
     * @method static Builder|Exam query()
     * @method static Builder|Exam whereAcademicYear($value)
     * @method static Builder|Exam whereCreatedAt($value)
     * @method static Builder|Exam whereId($value)
     * @method static Builder|Exam whereName($value)
     * @method static Builder|Exam whereTerm($value)
     * @method static Builder|Exam whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static ExamFactory factory(...$parameters)
     */
    class Exam extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\FeeFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Classroom $classroom
     * @property-read array $translations
     * @property-read Gender $grades
     * @method static Builder|Fee newModelQuery()
     * @method static Builder|Fee newQuery()
     * @method static Builder|Fee query()
     * @method static Builder|Fee whereAmount($value)
     * @method static Builder|Fee whereClassroomId($value)
     * @method static Builder|Fee whereCreatedAt($value)
     * @method static Builder|Fee whereDescription($value)
     * @method static Builder|Fee whereGradeId($value)
     * @method static Builder|Fee whereId($value)
     * @method static Builder|Fee whereTitle($value)
     * @method static Builder|Fee whereType($value)
     * @method static Builder|Fee whereUpdatedAt($value)
     * @method static Builder|Fee whereYear($value)
     * @mixin Eloquent
     * @property-read Grade $grade
     * @property-read mixed $type_name
     * @method static FeeFactory factory(...$parameters)
     */
    class Fee extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static Builder|FundAccount newModelQuery()
     * @method static Builder|FundAccount newQuery()
     * @method static Builder|FundAccount query()
     * @method static Builder|FundAccount whereCreatedAt($value)
     * @method static Builder|FundAccount whereCredit($value)
     * @method static Builder|FundAccount whereDate($value)
     * @method static Builder|FundAccount whereDebit($value)
     * @method static Builder|FundAccount whereDescription($value)
     * @method static Builder|FundAccount whereId($value)
     * @method static Builder|FundAccount wherePaymentId($value)
     * @method static Builder|FundAccount whereReceiptId($value)
     * @method static Builder|FundAccount whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class FundAccount extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\GenderFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Gender
     *
     * @property int $id
     * @property array $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @method static Builder|Gender newModelQuery()
     * @method static Builder|Gender newQuery()
     * @method static Builder|Gender query()
     * @method static Builder|Gender whereCreatedAt($value)
     * @method static Builder|Gender whereId($value)
     * @method static Builder|Gender whereName($value)
     * @method static Builder|Gender whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static GenderFactory factory(...$parameters)
     */
    class Gender extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\GradeFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Grade
     *
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property array $name
     * @property string|null $notes
     * @property-read Collection|Classroom[] $classrooms
     * @property-read int|null $classrooms_count
     * @property-read array $translations
     * @property-read Collection|Section[] $sections
     * @property-read int|null $sections_count
     * @method static Builder|Grade newModelQuery()
     * @method static Builder|Grade newQuery()
     * @method static Builder|Grade query()
     * @method static Builder|Grade whereCreatedAt($value)
     * @method static Builder|Grade whereId($value)
     * @method static Builder|Grade whereName($value)
     * @method static Builder|Grade whereNotes($value)
     * @method static Builder|Grade whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static GradeFactory factory(...$parameters)
     */
    class Grade extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\GuardianFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @method static Builder|Guardian newModelQuery()
     * @method static Builder|Guardian newQuery()
     * @method static Builder|Guardian query()
     * @method static Builder|Guardian whereCreatedAt($value)
     * @method static Builder|Guardian whereEmail($value)
     * @method static Builder|Guardian whereFatherAddress($value)
     * @method static Builder|Guardian whereFatherBloodTypeId($value)
     * @method static Builder|Guardian whereFatherJob($value)
     * @method static Builder|Guardian whereFatherName($value)
     * @method static Builder|Guardian whereFatherNationalId($value)
     * @method static Builder|Guardian whereFatherNationalityId($value)
     * @method static Builder|Guardian whereFatherPassportId($value)
     * @method static Builder|Guardian whereFatherPhone($value)
     * @method static Builder|Guardian whereFatherReligionId($value)
     * @method static Builder|Guardian whereId($value)
     * @method static Builder|Guardian whereMotherAddress($value)
     * @method static Builder|Guardian whereMotherBloodTypeId($value)
     * @method static Builder|Guardian whereMotherJob($value)
     * @method static Builder|Guardian whereMotherName($value)
     * @method static Builder|Guardian whereMotherNationalId($value)
     * @method static Builder|Guardian whereMotherNationalityId($value)
     * @method static Builder|Guardian whereMotherPassportId($value)
     * @method static Builder|Guardian whereMotherPhone($value)
     * @method static Builder|Guardian whereMotherReligionId($value)
     * @method static Builder|Guardian wherePassword($value)
     * @method static Builder|Guardian whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static GuardianFactory factory(...$parameters)
     */
    class Guardian extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Image
     *
     * @property int $id
     * @property string $filename
     * @property int $imageable_id
     * @property string $imageable_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Model|Eloquent $imageable
     * @method static Builder|Image newModelQuery()
     * @method static Builder|Image newQuery()
     * @method static Builder|Image query()
     * @method static Builder|Image whereCreatedAt($value)
     * @method static Builder|Image whereFilename($value)
     * @method static Builder|Image whereId($value)
     * @method static Builder|Image whereImageableId($value)
     * @method static Builder|Image whereImageableType($value)
     * @method static Builder|Image whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class Image extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Classroom $classroom
     * @property-read Fee $fees
     * @property-read Grade $grade
     * @property-read Section $section
     * @property-read Student $student
     * @method static Builder|Invoice newModelQuery()
     * @method static Builder|Invoice newQuery()
     * @method static Builder|Invoice query()
     * @method static Builder|Invoice whereAmount($value)
     * @method static Builder|Invoice whereClassroomId($value)
     * @method static Builder|Invoice whereCreatedAt($value)
     * @method static Builder|Invoice whereDescription($value)
     * @method static Builder|Invoice whereFeeId($value)
     * @method static Builder|Invoice whereGradeId($value)
     * @method static Builder|Invoice whereId($value)
     * @method static Builder|Invoice whereInvoiceDate($value)
     * @method static Builder|Invoice whereStudentId($value)
     * @method static Builder|Invoice whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static Builder|Invoice whereInvoiceAt($value)
     * @property-read Fee $fee
     */
    class Invoice extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\NationalityFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Nationality
     *
     * @property int $id
     * @property array $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @method static Builder|Nationality newModelQuery()
     * @method static Builder|Nationality newQuery()
     * @method static Builder|Nationality query()
     * @method static Builder|Nationality whereCreatedAt($value)
     * @method static Builder|Nationality whereId($value)
     * @method static Builder|Nationality whereName($value)
     * @method static Builder|Nationality whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static NationalityFactory factory(...$parameters)
     */
    class Nationality extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Payment
     *
     * @property int $id
     * @property string $date
     * @property int $student_id
     * @property string|null $amount
     * @property string $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Student $student
     * @method static Builder|Payment newModelQuery()
     * @method static Builder|Payment newQuery()
     * @method static Builder|Payment query()
     * @method static Builder|Payment whereAmount($value)
     * @method static Builder|Payment whereCreatedAt($value)
     * @method static Builder|Payment whereDate($value)
     * @method static Builder|Payment whereDescription($value)
     * @method static Builder|Payment whereId($value)
     * @method static Builder|Payment whereStudentId($value)
     * @method static Builder|Payment whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class Payment extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\ProcessingFee
     *
     * @property int $id
     * @property string $date
     * @property int $student_id
     * @property string|null $amount
     * @property string $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Student $student
     * @method static Builder|ProcessingFee newModelQuery()
     * @method static Builder|ProcessingFee newQuery()
     * @method static Builder|ProcessingFee query()
     * @method static Builder|ProcessingFee whereAmount($value)
     * @method static Builder|ProcessingFee whereCreatedAt($value)
     * @method static Builder|ProcessingFee whereDate($value)
     * @method static Builder|ProcessingFee whereDescription($value)
     * @method static Builder|ProcessingFee whereId($value)
     * @method static Builder|ProcessingFee whereStudentId($value)
     * @method static Builder|ProcessingFee whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class ProcessingFee extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Classroom $f_classroom
     * @property-read Grade $f_grade
     * @property-read Section $f_section
     * @property-read Student $student
     * @property-read Classroom $t_classroom
     * @property-read Grade $t_grade
     * @property-read Section $t_section
     * @method static Builder|Promotion newModelQuery()
     * @method static Builder|Promotion newQuery()
     * @method static Builder|Promotion query()
     * @method static Builder|Promotion whereAcademicYear($value)
     * @method static Builder|Promotion whereAcademicYearNew($value)
     * @method static Builder|Promotion whereCreatedAt($value)
     * @method static Builder|Promotion whereFromClassroom($value)
     * @method static Builder|Promotion whereFromGrade($value)
     * @method static Builder|Promotion whereFromSection($value)
     * @method static Builder|Promotion whereId($value)
     * @method static Builder|Promotion whereStudentId($value)
     * @method static Builder|Promotion whereToClassroom($value)
     * @method static Builder|Promotion whereToGrade($value)
     * @method static Builder|Promotion whereToSection($value)
     * @method static Builder|Promotion whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class Promotion extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\ReceiptStudent
     *
     * @property int $id
     * @property string $date
     * @property int $student_id
     * @property string|null $debit
     * @property string $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Student $student
     * @method static Builder|ReceiptStudent newModelQuery()
     * @method static Builder|ReceiptStudent newQuery()
     * @method static Builder|ReceiptStudent query()
     * @method static Builder|ReceiptStudent whereCreatedAt($value)
     * @method static Builder|ReceiptStudent whereDate($value)
     * @method static Builder|ReceiptStudent whereDebit($value)
     * @method static Builder|ReceiptStudent whereDescription($value)
     * @method static Builder|ReceiptStudent whereId($value)
     * @method static Builder|ReceiptStudent whereStudentId($value)
     * @method static Builder|ReceiptStudent whereUpdatedAt($value)
     * @mixin Eloquent
     */
    class Receipt extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\ReligionFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Religion
     *
     * @property int $id
     * @property array $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @method static Builder|Religion newModelQuery()
     * @method static Builder|Religion newQuery()
     * @method static Builder|Religion query()
     * @method static Builder|Religion whereCreatedAt($value)
     * @method static Builder|Religion whereId($value)
     * @method static Builder|Religion whereName($value)
     * @method static Builder|Religion whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static ReligionFactory factory(...$parameters)
     */
    class Religion extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\SectionFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Section
     *
     * @property int $id
     * @property array $name
     * @property int $status
     * @property int $grade_id
     * @property int $classroom_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Classroom $classroom
     * @property-read array $translations
     * @property-read Collection|Teacher[] $teachers
     * @property-read int|null $teachers_count
     * @method static Builder|Section newModelQuery()
     * @method static Builder|Section newQuery()
     * @method static Builder|Section query()
     * @method static Builder|Section whereClassroomId($value)
     * @method static Builder|Section whereCreatedAt($value)
     * @method static Builder|Section whereGradeId($value)
     * @method static Builder|Section whereId($value)
     * @method static Builder|Section whereName($value)
     * @method static Builder|Section whereStatus($value)
     * @method static Builder|Section whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static SectionFactory factory(...$parameters)
     */
    class Section extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\SpecializationFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Specialization
     *
     * @property string $id
     * @property array $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read array $translations
     * @method static Builder|Specialization newModelQuery()
     * @method static Builder|Specialization newQuery()
     * @method static Builder|Specialization query()
     * @method static Builder|Specialization whereCreatedAt($value)
     * @method static Builder|Specialization whereId($value)
     * @method static Builder|Specialization whereName($value)
     * @method static Builder|Specialization whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static SpecializationFactory factory(...$parameters)
     */
    class Specialization extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\StudentFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Nationality $Nationality
     * @property-read Collection|Attendance[] $attendance
     * @property-read int|null $attendance_count
     * @property-read Classroom $classroom
     * @property-read Gender $gender
     * @property-read array $translations
     * @property-read Grade $grade
     * @property-read Collection|Image[] $images
     * @property-read int|null $images_count
     * @property-read Guardian $myparent
     * @property-read Section $section
     * @property-read Collection|StudentAccount[] $student_account
     * @property-read int|null $student_account_count
     * @method static Builder|Student newModelQuery()
     * @method static Builder|Student newQuery()
     * @method static \Illuminate\Database\Query\Builder|Student onlyTrashed()
     * @method static Builder|Student query()
     * @method static Builder|Student whereAcademicYear($value)
     * @method static Builder|Student whereBloodId($value)
     * @method static Builder|Student whereClassroomId($value)
     * @method static Builder|Student whereCreatedAt($value)
     * @method static Builder|Student whereDateBirth($value)
     * @method static Builder|Student whereDeletedAt($value)
     * @method static Builder|Student whereEmail($value)
     * @method static Builder|Student whereGenderId($value)
     * @method static Builder|Student whereGradeId($value)
     * @method static Builder|Student whereId($value)
     * @method static Builder|Student whereName($value)
     * @method static Builder|Student whereNationalityId($value)
     * @method static Builder|Student whereParentId($value)
     * @method static Builder|Student wherePassword($value)
     * @method static Builder|Student whereSectionId($value)
     * @method static Builder|Student whereUpdatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Student withTrashed()
     * @method static \Illuminate\Database\Query\Builder|Student withoutTrashed()
     * @mixin Eloquent
     * @property string $nationalise_id
     * @method static Builder|Student graduated()
     * @method static Builder|Student whereNationaliseId($value)
     * @property string $nationality_id
     * @property string $guardian_id
     * @method static StudentFactory factory(...$parameters)
     * @method static Builder|Student whereBirthday($value)
     * @method static Builder|Student whereGuardianId($value)
     * @property-read Guardian $guardian
     * @property-read Nationality $nationality
     */
    class Student extends Eloquent
    {
    }
}

namespace App\Models {

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static Builder|StudentAccount newModelQuery()
     * @method static Builder|StudentAccount newQuery()
     * @method static Builder|StudentAccount query()
     * @method static Builder|StudentAccount whereCreatedAt($value)
     * @method static Builder|StudentAccount whereCredit($value)
     * @method static Builder|StudentAccount whereDate($value)
     * @method static Builder|StudentAccount whereDebit($value)
     * @method static Builder|StudentAccount whereDescription($value)
     * @method static Builder|StudentAccount whereFeeInvoiceId($value)
     * @method static Builder|StudentAccount whereId($value)
     * @method static Builder|StudentAccount wherePaymentId($value)
     * @method static Builder|StudentAccount whereProcessingId($value)
     * @method static Builder|StudentAccount whereReceiptId($value)
     * @method static Builder|StudentAccount whereStudentId($value)
     * @method static Builder|StudentAccount whereType($value)
     * @method static Builder|StudentAccount whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static Builder|StudentAccount whereInvoiceId($value)
     */
    class StudentAccount extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\SubjectFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\Subject
     *
     * @property int $id
     * @property array $name
     * @property int $grade_id
     * @property int $classroom_id
     * @property int $teacher_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Classroom $classroom
     * @property-read array $translations
     * @property-read Grade $grade
     * @property-read Teacher $teacher
     * @method static Builder|Subject newModelQuery()
     * @method static Builder|Subject newQuery()
     * @method static Builder|Subject query()
     * @method static Builder|Subject whereClassroomId($value)
     * @method static Builder|Subject whereCreatedAt($value)
     * @method static Builder|Subject whereGradeId($value)
     * @method static Builder|Subject whereId($value)
     * @method static Builder|Subject whereName($value)
     * @method static Builder|Subject whereTeacherId($value)
     * @method static Builder|Subject whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static SubjectFactory factory(...$parameters)
     */
    class Subject extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\TeacherFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Support\Carbon;

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read Gender $genders
     * @property-read array $translations
     * @property-read Collection|Section[] $sections
     * @property-read int|null $sections_count
     * @property-read Specialization $specializations
     * @method static Builder|Teacher newModelQuery()
     * @method static Builder|Teacher newQuery()
     * @method static Builder|Teacher query()
     * @method static Builder|Teacher whereAddress($value)
     * @method static Builder|Teacher whereCreatedAt($value)
     * @method static Builder|Teacher whereEmail($value)
     * @method static Builder|Teacher whereGenderId($value)
     * @method static Builder|Teacher whereId($value)
     * @method static Builder|Teacher whereJoiningDate($value)
     * @method static Builder|Teacher whereName($value)
     * @method static Builder|Teacher wherePassword($value)
     * @method static Builder|Teacher whereSpecializationId($value)
     * @method static Builder|Teacher whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static Builder|Teacher whereJoiningAt($value)
     * @method static TeacherFactory factory(...$parameters)
     */
    class Teacher extends Eloquent
    {
    }
}

namespace App\Models {

    use Database\Factories\UserFactory;
    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;

    /**
     * App\Models\User
     *
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @method static Builder|User newModelQuery()
     * @method static Builder|User newQuery()
     * @method static Builder|User query()
     * @method static Builder|User whereCreatedAt($value)
     * @method static Builder|User whereEmail($value)
     * @method static Builder|User whereEmailVerifiedAt($value)
     * @method static Builder|User whereId($value)
     * @method static Builder|User whereName($value)
     * @method static Builder|User wherePassword($value)
     * @method static Builder|User whereRememberToken($value)
     * @method static Builder|User whereUpdatedAt($value)
     * @mixin Eloquent
     * @method static UserFactory factory(...$parameters)
     */
    class User extends Eloquent
    {
    }
}

