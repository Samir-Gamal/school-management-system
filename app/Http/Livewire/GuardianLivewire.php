<?php

namespace App\Http\Livewire;

use App\Models\BloodType;
use App\Models\Guardian;
use App\Models\Nationality;
use App\Models\Religion;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Log;

class GuardianLivewire extends Component
{
    use WithFileUploads;

    public $successMessage = '';
    public $attachments = [];
    public $catchError, $updateMode = false, $show_table = true, $guardian_id;

    public $currentStep = 1,

        // Father_INPUTS
        $email, $password,
        $father_name_ar, $father_name_en,
        $father_national_id, $father_passport_id,
        $father_phone, $father_job_ar, $father_job_en,
        $father_nationality_id, $father_blood_type_id,
        $father_address, $father_religion_id,

        // Mother_INPUTS
        $mother_name_ar, $mother_name_en,
        $mother_national_id, $mother_passport_id,
        $mother_phone, $mother_job_ar, $mother_job_en,
        $mother_nationality_id, $mother_blood_type_id,
        $mother_address, $mother_religion_id;


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'required|email',
            'father_national_id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'father_passport_id' => 'min:8|max:8',
            'father_phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'mother_national_id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'mother_passport_id' => 'min:8|max:8',
            'mother_phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:9'
        ]);
    }


    public function render()
    {
        return view('pages.guardians.add_parent', [
            'nationalises' => Nationality::all(),
            'blood_types' => BloodType::all(),
            'religions' => Religion::all(),
            'guardians' => Guardian::all(),
        ]);

    }

    public function showformadd()
    {
        $this->show_table = false;
    }


    //firstStepSubmit
    public function firstStepSubmit()
    {
        $this->validate([
            'email' => 'required|unique:guardians,email,' . $this->id,
            'password' => 'required',
            'father_name_ar' => 'required',
            'father_name_en' => 'required',
            'father_job_ar' => 'required',
            'father_job_en' => 'required',
            'father_national_id' => 'required|unique:guardians,father_national_id,' . $this->id,
            'father_passport_id' => 'required|unique:guardians,father_passport_id,' . $this->id,
            'father_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'father_nationality_id' => 'required',
            'father_blood_type_id' => 'required',
            'father_religion_id' => 'required',
            'father_address' => 'required',
        ]);

        $this->currentStep = 2;
    }

    //secondStepSubmit
    public function secondStepSubmit()
    {

        $this->validate([
            'mother_name_ar' => 'required',
            'mother_name_en' => 'required',
            'mother_national_id' => 'required|unique:guardians,mother_national_id,' . $this->id,
            'mother_passport_id' => 'required|unique:guardians,mother_passport_id,' . $this->id,
            'mother_phone' => 'required',
            'mother_job_ar' => 'required',
            'mother_job_en' => 'required',
            'mother_nationality_id' => 'required',
            'mother_blood_type_id' => 'required',
            'mother_religion_id' => 'required',
            'mother_address' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {
        $this->validate([
            'attachments.*' => 'required|image|max:1024',
        ]);


        $guardian = new Guardian();

        Log::alert(request()->serverMemo);
        // Father_INPUTS
        $guardian->email = $this->email;
        $guardian->password = Hash::make($this->password);
        $guardian->father_name = ['en' => $this->father_name_en, 'ar' => $this->father_name_ar];
        $guardian->father_national_id = $this->father_national_id;
        $guardian->father_passport_id = $this->father_passport_id;
        $guardian->father_phone = $this->father_phone;
        $guardian->father_job = ['en' => $this->father_job_en, 'ar' => $this->father_job_ar];
        $guardian->father_passport_id = $this->father_passport_id;
        $guardian->father_nationality_id = $this->father_nationality_id;
        $guardian->father_blood_type_id = $this->father_blood_type_id;
        $guardian->father_religion_id = $this->father_religion_id;
        $guardian->father_address = $this->father_address;

        // Mother_INPUTS

        $guardian->mother_name = ['en' => $this->mother_name_en, 'ar' => $this->mother_name_ar];
        $guardian->mother_national_id = $this->mother_national_id;
        $guardian->mother_passport_id = $this->mother_passport_id;
        $guardian->mother_phone = $this->mother_phone;
        $guardian->mother_job = ['en' => $this->mother_job_en, 'ar' => $this->mother_job_ar];
        $guardian->mother_passport_id = $this->mother_passport_id;
        $guardian->mother_nationality_id = $this->mother_nationality_id;
        $guardian->mother_blood_type_id = $this->mother_blood_type_id;
        $guardian->mother_religion_id = $this->mother_religion_id;
        $guardian->mother_address = $this->mother_address;
        $guardian->save();


        foreach ($this->attachments as $attachment) {
            $guardian->addMedia($attachment->getRealPath())->toMediaCollection('attachments');
        }

        $this->successMessage = __('messages.success');
        $this->clearForm();
        $this->currentStep = 1;
    }

    public function clearForm()
    {
        $this->email = '';
        $this->password = '';
        $this->father_name_ar = '';
        $this->father_job_ar = '';
        $this->father_job_en = '';
        $this->father_name_en = '';
        $this->father_national_id = '';
        $this->father_passport_id = '';
        $this->father_phone = '';
        $this->father_nationality_id = '';
        $this->father_blood_type_id = '';
        $this->father_address = '';
        $this->father_religion_id = '';

        $this->mother_name_ar = '';
        $this->mother_name_en = '';
        $this->mother_job_ar = '';
        $this->mother_job_en = '';
        $this->mother_national_id = '';
        $this->mother_passport_id = '';
        $this->mother_phone = '';
        $this->mother_nationality_id = '';
        $this->mother_blood_type_id = '';
        $this->mother_address = '';
        $this->mother_religion_id = '';

    }

    //firstStepSubmit

    public function edit($id)
    {
        $this->show_table = false;
        $this->updateMode = true;
        $guardian = Guardian::where('id', $id)->first();
        $this->guardian_id = $id;
        $this->email = $guardian->Email;
        $this->password = $guardian->password;
        $this->father_name_ar = $guardian->getTranslation('father_name', 'ar');
        $this->father_name_en = $guardian->getTranslation('father_name', 'en');
        $this->father_job_ar = $guardian->getTranslation('job_father', 'ar');
        $this->father_job_en = $guardian->getTranslation('job_father', 'en');
        $this->father_national_id = $guardian->father_national_id;
        $this->father_passport_id = $guardian->father_passport_id;
        $this->father_phone = $guardian->father_phone;
        $this->father_nationality_id = $guardian->father_nationality_id;
        $this->father_blood_type_id = $guardian->father_blood_type_id;
        $this->father_address = $guardian->father_address;
        $this->father_religion_id = $guardian->father_religion_id;

        $this->mother_name_ar = $guardian->getTranslation('mother_name', 'ar');
        $this->mother_name_en = $guardian->getTranslation('mother_name', 'en');
        $this->mother_job_ar = $guardian->getTranslation('mother_job', 'ar');
        $this->mother_job_en = $guardian->getTranslation('mother_job', 'en');
        $this->mother_national_id = $guardian->mother_national_id;
        $this->mother_passport_id = $guardian->mother_passport_id;
        $this->mother_phone = $guardian->mother_phone;
        $this->mother_nationality_id = $guardian->mother_nationality_id;
        $this->mother_blood_type_id = $guardian->mother_blood_type_id;
        $this->mother_address = $guardian->mother_address;
        $this->mother_religion_id = $guardian->mother_religion_id;
    }

    //secondStepSubmit_edit

    public function firstStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 2;

    }

    public function secondStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 3;

    }

    public function submitForm_edit()
    {

        if ($this->Parent_id) {
            $parent = Guardian::find($this->Parent_id);
            $parent->update([
                'father_passport_id' => $this->father_passport_id,
                'father_national_id' => $this->father_national_id,
            ]);

        }

        return redirect()->to('/guardians');
    }


    //clearForm

    public function delete($id)
    {
        Guardian::findOrFail($id)->delete();
        return redirect()->to('/guardians');
    }


    //back

    public function back($step)
    {
        $this->currentStep = $step;
    }

}
