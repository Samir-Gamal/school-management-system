<button class="btn btn-success btn-sm btn-lg pull-right" wire:click="showformadd" type="button">{{ trans('parent.add_parent') }}</button><br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
           style="text-align: center">
        <thead>
        <tr class="table-success">
            <th>#</th>
            <th>{{ trans('parent.email') }}</th>
            <th>{{ trans('parent.father_name') }}</th>
            <th>{{ trans('parent.father_national_id') }}</th>
            <th>{{ trans('parent.father_passport_id') }}</th>
            <th>{{ trans('parent.father_phone') }}</th>
            <th>{{ trans('parent.father_job') }}</th>
            <th>{{ trans('parent.processes') }}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach ($my_parents as $my_parent)
            <tr>
                <?php $i++; ?>
                <td>{{ $i }}</td>
                <td>{{ $my_parent->Email }}</td>
                <td>{{ $my_parent->Name_Father }}</td>
                <td>{{ $my_parent->National_ID_Father }}</td>
                <td>{{ $my_parent->Passport_ID_Father }}</td>
                <td>{{ $my_parent->Phone_Father }}</td>
                <td>{{ $my_parent->Job_Father }}</td>
                <td>
                    <button wire:click="edit({{ $my_parent->id }})" title="{{ trans('grade.edit') }}"
                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $my_parent->id }})" title="{{ trans('grade.delete') }}"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
