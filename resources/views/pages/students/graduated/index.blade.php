@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main.list_graduate')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main.list_graduate')}} <i class="fas fa-user-graduate"></i>
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
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>{{trans('student.name')}}</th>
                                            <th>{{trans('student.email')}}</th>
                                            <th>{{trans('student.gender')}}</th>
                                            <th>{{trans('student.Grade')}}</th>
                                            <th>{{trans('student.classrooms')}}</th>
                                            <th>{{trans('student.section')}}</th>
                                            <th>{{trans('student.processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($students as $student)
                                            <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->gender->name}}</td>
                                            <td>{{$student->grade->name}}</td>
                                            <td>{{$student->classroom->name}}</td>
                                            <td>{{$student->section->name}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Return_Student{{ $student->id }}" title="{{ trans('grade.delete') }}">ارجاع الطالب</button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Student{{ $student->id }}" title="{{ trans('grade.delete') }}">حذف الطالب</button>

                                                </td>
                                            </tr>
                                        @include('pages.students.graduated.return')
                                        @include('pages.students.graduated.delete')
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
