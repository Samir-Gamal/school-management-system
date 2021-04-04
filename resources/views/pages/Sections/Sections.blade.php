@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('Sections_trans.title_page') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Sections_trans.title_page') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a class="button x-small" href="#" data-toggle="modal" data-target="#exampleModal">
                        {{ trans('Sections_trans.add_section') }}</a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="accordion gray plus-icon round">

                            @foreach ($Grades as $Grade)

                                <div class="acd-group">
                                    <a href="#" class="acd-heading">{{ $Grade->Name }}</a>
                                    <div class="acd-des">

                                        <div class="row">
                                            <div class="col-xl-12 mb-30">
                                                <div class="card card-statistics h-100">
                                                    <div class="card-body">
                                                        <div class="d-block d-md-flex justify-content-between">
                                                            <div class="d-block">
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-15">
                                                            <table class="table center-aligned-table mb-0">
                                                                <thead>
                                                                <tr class="text-dark">
                                                                    <th>#</th>
                                                                    <th>{{ trans('Sections_trans.Name_Section') }}
                                                                    </th>
                                                                    <th>{{ trans('Sections_trans.Name_Class') }}</th>
                                                                    <th>{{ trans('Sections_trans.Status') }}</th>
                                                                    <th>{{ trans('Sections_trans.Processes') }}</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php $i = 0; ?>
                                                                @foreach ($Grade->Sections as $list_Sections)
                                                                    <tr>
                                                                        <?php $i++; ?>
                                                                        <td>{{ $i }}</td>
                                                                        <td>{{ $list_Sections->Name_Section }}</td>
                                                                        <td>{{ $list_Sections->My_classs->Name_Class }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($list_Sections->Status === 1)
                                                                                <label
                                                                                    class="badge badge-success">{{ trans('Sections_trans.Status_Section_AC') }}</label>
                                                                            @else
                                                                                <label
                                                                                    class="badge badge-danger">{{ trans('Sections_trans.Status_Section_No') }}</label>
                                                                            @endif

                                                                        </td>
                                                                        <td>

                                                                            <a href="#"
                                                                               class="btn btn-outline-info btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#edit{{ $list_Sections->id }}">{{ trans('Sections_trans.Edit') }}</a>
                                                                            <a href="#"
                                                                               class="btn btn-outline-danger btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#delete{{ $list_Sections->id }}">{{ trans('Sections_trans.Delete') }}</a>
                                                                        </td>
                                                                    </tr>


                                                                    <!--تعديل قسم جديد -->
                                                                    <div class="modal fade"
                                                                         id="edit{{ $list_Sections->id }}"
                                                                         tabindex="-1" role="dialog"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        style="font-family: 'Cairo', sans-serif;"
                                                                                        id="exampleModalLabel">
                                                                                        {{ trans('Sections_trans.edit_Section') }}
                                                                                    </h5>
                                                                                    <button type="button" class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <form
                                                                                        action="{{ route('Sections.update', 'test') }}"
                                                                                        method="POST">
                                                                                        {{ method_field('patch') }}
                                                                                        {{ csrf_field() }}
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <input type="text"
                                                                                                       name="Name_Section_Ar"
                                                                                                       class="form-control"
                                                                                                       value="{{ $list_Sections->getTranslation('Name_Section', 'ar') }}">
                                                                                            </div>

                                                                                            <div class="col">
                                                                                                <input type="text"
                                                                                                       name="Name_Section_En"
                                                                                                       class="form-control"
                                                                                                       value="{{ $list_Sections->getTranslation('Name_Section', 'en') }}">
                                                                                                <input id="id"
                                                                                                       type="hidden"
                                                                                                       name="id"
                                                                                                       class="form-control"
                                                                                                       value="{{ $list_Sections->id }}">
                                                                                            </div>

                                                                                        </div>
                                                                                        <br>


                                                                                        <div class="col">
                                                                                            <label for="inputName"
                                                                                                   class="control-label">{{ trans('Sections_trans.Name_Grade') }}</label>
                                                                                            <select name="Grade_id"
                                                                                                    class="custom-select"
                                                                                                    onclick="console.log($(this).val())">
                                                                                                <!--placeholder-->
                                                                                                <option
                                                                                                    value="{{ $Grade->id }}">
                                                                                                    {{ $Grade->Name }}
                                                                                                </option>
                                                                                                @foreach ($list_Grades as $list_Grade)
                                                                                                    <option
                                                                                                        value="{{ $list_Grade->id }}">
                                                                                                        {{ $list_Grade->Name }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="col">
                                                                                            <label for="inputName"
                                                                                                   class="control-label">{{ trans('Sections_trans.Name_Class') }}</label>
                                                                                            <select name="Class_id"
                                                                                                    class="custom-select">
                                                                                                <option
                                                                                                    value="{{ $list_Sections->My_classs->id }}">
                                                                                                    {{ $list_Sections->My_classs->Name_Class }}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="col">
                                                                                            <div class="form-check">

                                                                                                @if ($list_Sections->Status === 1)
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        checked
                                                                                                        class="form-check-input"
                                                                                                        name="Status"
                                                                                                        id="exampleCheck1">
                                                                                                @else
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input"
                                                                                                        name="Status"
                                                                                                        id="exampleCheck1">
                                                                                                @endif
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="exampleCheck1">{{ trans('Sections_trans.Status') }}</label><br>

                                                                                                    <div class="col">
                                                                                                        <label for="inputName" class="control-label">{{ trans('Sections_trans.Name_Teacher') }}</label>
                                                                                                        <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                                                                                                            @foreach($list_Sections->teachers as $teacher)
                                                                                                                <option selected value="{{$teacher['id']}}">{{$teacher['Name']}}</option>
                                                                                                            @endforeach

                                                                                                            @foreach($teachers as $teacher)
                                                                                                                <option value="{{$teacher->id}}">{{$teacher->Name}}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>


                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-dismiss="modal">{{ trans('Sections_trans.Close') }}</button>
                                                                                    <button type="submit"
                                                                                            class="btn btn-danger">{{ trans('Sections_trans.submit') }}</button>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <!-- delete_modal_Grade -->
                                                                    <div class="modal fade"
                                                                         id="delete{{ $list_Sections->id }}"
                                                                         tabindex="-1" role="dialog"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 style="font-family: 'Cairo', sans-serif;"
                                                                                        class="modal-title"
                                                                                        id="exampleModalLabel">
                                                                                        {{ trans('Sections_trans.delete_Section') }}
                                                                                    </h5>
                                                                                    <button type="button" class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="{{ route('Sections.destroy', 'test') }}"
                                                                                        method="post">
                                                                                        {{ method_field('Delete') }}
                                                                                        @csrf
                                                                                        {{ trans('Sections_trans.Warning_Section') }}
                                                                                        <input id="id" type="hidden"
                                                                                               name="id"
                                                                                               class="form-control"
                                                                                               value="{{ $list_Sections->id }}">
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-dismiss="modal">{{ trans('Sections_trans.Close') }}</button>
                                                                                            <button type="submit"
                                                                                                    class="btn btn-danger">{{ trans('Sections_trans.submit') }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>




                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>

                    <!--اضافة قسم جديد -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="font-family: 'Cairo', sans-serif;"
                                        id="exampleModalLabel">
                                        {{ trans('Sections_trans.add_section') }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="{{ route('Sections.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="Name_Section_Ar" class="form-control"
                                                       placeholder="{{ trans('Sections_trans.Section_name_ar') }}">
                                            </div>

                                            <div class="col">
                                                <input type="text" name="Name_Section_En" class="form-control"
                                                       placeholder="{{ trans('Sections_trans.Section_name_en') }}">
                                            </div>

                                        </div>
                                        <br>


                                        <div class="col">
                                            <label for="inputName"
                                                   class="control-label">{{ trans('Sections_trans.Name_Grade') }}</label>
                                            <select name="Grade_id" class="custom-select"
                                                    onchange="console.log($(this).val())">
                                                <!--placeholder-->
                                                <option value="" selected
                                                        disabled>{{ trans('Sections_trans.Select_Grade') }}
                                                </option>
                                                @foreach ($list_Grades as $list_Grade)
                                                    <option value="{{ $list_Grade->id }}"> {{ $list_Grade->Name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>

                                        <div class="col">
                                            <label for="inputName"
                                                   class="control-label">{{ trans('Sections_trans.Name_Class') }}</label>
                                            <select name="Class_id" class="custom-select">

                                            </select>
                                        </div><br>

                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ trans('Sections_trans.Name_Teacher') }}</label>
                                            <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                                                @foreach($teachers as $teacher)
                                                    <option value="{{$teacher->id}}">{{$teacher->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{ trans('Sections_trans.Close') }}</button>
                                    <button type="submit"
                                            class="btn btn-danger">{{ trans('Sections_trans.submit') }}</button>
                                </div>
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
