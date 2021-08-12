@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة امتحان جديد
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    اضافة امتحان جديد
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
                            <form action="{{route('Exams.store')}}" method="post" autocomplete="off">
                                @csrf

                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">اسم الامتحان باللغة العربية</label>
                                        <input type="text" name="Name_ar" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="title">اسم الامتحان باللغة الانجليزية</label>
                                        <input type="text" name="Name_en" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="title">الترم</label>
                                        <input type="number" name="term" class="form-control">
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="academic_year">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @php
                                                $current_year = date("Y");
                                            @endphp
                                            @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                                <option value="{{ $year}}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>

                                </div>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
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
