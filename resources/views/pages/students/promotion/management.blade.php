@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main.list_students')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete_all">
                                   تراجع الكل
                                </button>
                                <br><br>


                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th class="alert-info">#</th>
                                            <th class="alert-info">{{trans('student.name')}}</th>
                                            <th class="alert-danger">المرحلة الدراسية السابقة</th>
                                            <th class="alert-danger">السنة الدراسية</th>
                                            <th class="alert-danger">الصف الدراسي السابق</th>
                                            <th class="alert-danger">القسم الدراسي السابق</th>
                                            <th class="alert-success">المرحلة الدراسية الحالي</th>
                                            <th class="alert-success">السنة الدراسية الحالية</th>
                                            <th class="alert-success">الصف الدراسي الحالي</th>
                                            <th class="alert-success">القسم الدراسي الحالي</th>
                                            <th>{{trans('student.processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($promotions as $promotion)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$promotion->student->name}}</td>
                                                <td>{{$promotion->f_grade->name}}</td>
                                                <td>{{$promotion->academic_year}}</td>
                                                <td>{{$promotion->f_classroom->name}}</td>
                                                <td>{{$promotion->f_section->name}}</td>
                                                <td>{{$promotion->t_grade->name}}</td>
                                                <td>{{$promotion->academic_year_new}}</td>
                                                <td>{{$promotion->t_classroom->name}}</td>
                                                <td>{{$promotion->t_section->name}}</td>
                                                <td>

                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Delete_one{{$promotion->id}}">ارجاع الطالب</button>
                                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#">تخرج الطالب</button>
                                                </td>
                                            </tr>
                                        @include('pages.students.promotion.delete_all')
                                        @include('pages.students.promotion.delete_one')
                                        @endforeach
                                    </table>
                                </div>
                            </div>
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
@endsection
