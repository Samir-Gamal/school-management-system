@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    الفواتير الدراسية
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
   الفواتير الدراسية
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
                                <a href="{{route('invoices.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة رسوم جديدة</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>نوع الرسوم</th>
                                            <th>المبلغ</th>
                                            <th>المرحلة الدراسية</th>
                                            <th>الصف الدراسي</th>
                                            <th>البيان</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($invoices as $invoice)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$invoice->student->name}}</td>
                                            <td>{{$invoice->fee->title}}</td>
                                            <td>{{ number_format($invoice->amount, 2) }}</td>
                                            <td>{{$invoice->grade->name}}</td>
                                            <td>{{$invoice->classroom->name}}</td>
                                            <td>{{$invoice->description}}</td>
                                                <td>
                                                    <a href="{{route('invoices.edit',$invoice->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Fee_invoice{{$invoice->id}}" ><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @include('pages.invoices.delete')
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
