@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل اختبار {{$quiz->name}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تعديل اختبار {{$quiz->name}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('quizzes.update','test')}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">اسم الاختبار باللغة العربية</label>
                                        <input type="text" name="name_ar" value="{{$quiz->getTranslation('name','ar')}}" class="form-control">
                                        <input type="hidden" name="id" value="{{$quiz->id}}">
                                    </div>

                                    <div class="col">
                                        <label for="title">اسم الاختبار باللغة الانجليزية</label>
                                        <input type="text" name="name_en" value="{{$quiz->getTranslation('name','en')}}" class="form-control">
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">المادة الدراسية : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="subject_id">
                                                @foreach($subjects as $subject)
                                                    <option value="{{ $subject->id }}" {{$subject->id == $quiz->subject_id ? "selected":""}}>{{ $subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">اسم المعلم : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="teacher_id">
                                                @foreach($teachers as $teacher)
                                                    <option  value="{{ $teacher->id }}" {{$teacher->id == $quiz->teacher_id ? "selected":""}}>{{ $teacher->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="grade_id">
                                                @foreach($grades as $grade)
                                                    <option  value="{{ $grade->id }}" {{$grade->id == $quiz->grade_id ? "selected":""}}>{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="classroom_id">
                                                <option value="{{$quiz->classroom_id}}">{{$quiz->classroom->name}}</option>                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                            <select class="custom-select mr-sm-2" name="section_id">
                                                <option value="{{$quiz->section_id}}">{{$quiz->section->name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تاكيد البيانات</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    <script>
        $(document).ready(function () {
            $('select[name="Grade_id"]').on('change', function () {
                var Grade_id = $(this).val();
                if (Grade_id) {
                    $.ajax({
                        url: "{{ URL::to('classes') }}/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Class_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Class_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection
