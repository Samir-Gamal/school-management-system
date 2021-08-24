@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{__('main.add_student')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{__('main.add_student')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @include('layouts.error_alert')

                    <form method="post" action="{{ route('students.store') }}" autocomplete="off"
                          enctype="multipart/form-data">
                        @csrf
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{__('student.personal_information')}}</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('student.name_ar')}} : <span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('student.name_en')}} : <span class="text-danger">*</span></label>
                                    <input class="form-control" name="name_en" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('student.email')}} : </label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('student.password')}} :</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">{{__('student.gender')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="gender_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($genders as $gender)
                                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nal_id">{{__('student.nationality')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="nationality_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($nationalities as $nationality)
                                            <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bg_id">{{__('student.blood_type')}} : </label>
                                    <select class="custom-select mr-sm-2" name="blood_type_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($blood_types as $blood_type)
                                            <option value="{{ $blood_type->id }}">{{ $blood_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{__('student.birthday')}} :</label>
                                    <input class="form-control" type="text" id="datepicker-action" name="birthday"
                                           data-date-format="yyyy-mm-dd">
                                </div>
                            </div>

                        </div>

                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{__('student.student_information')}}</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="grade_id">{{__('student.grade')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="grade_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($grades  as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="classroom_id">{{__('student.classrooms')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="classroom_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($classrooms  as $classroom)
                                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="section_id">{{__('student.section')}} : </label>
                                    <select class="custom-select mr-sm-2" name="section_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($sections  as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="parent_id">{{__('student.guardian')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="guardian_id">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @foreach($guardians as $guardian)
                                            <option value="{{ $guardian->id }}">{{ $guardian->father_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="academic_year">{{__('student.academic_year')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="academic_year">
                                        <option selected disabled>{{__('main.choose')}}...</option>
                                        @php
                                            $current_year = date("Y")
                                        @endphp
                                        @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                            <option value="{{ $year}}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="academic_year">{{__('student.attachments')}} : <span
                                        class="text-danger">*</span></label>
                                <input type="file" enctype="multipart/form-data" accept="image/*" name="attachments[]"
                                       multiple required>
                            </div>
                        </div>


                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                                type="submit">{{__('student.submit')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render

@endsection
