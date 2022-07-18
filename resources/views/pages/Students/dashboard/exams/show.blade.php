@extends('layouts.master')
@section('css')
    @toastr_css
    @livewireStyles
    @section('title')
        إجراء اختبار
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        إجراء اختبار
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')

    @livewire('show-question', ['quizze_id' => $quizze_id, 'student_id' => $student_id])

@endsection
@section('js')
    @toastr_js
    @toastr_render
    @livewireScripts
@endsection

