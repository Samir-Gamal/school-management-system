<button class="btn btn-success btn-sm btn-lg pull-right" wire:click="showformadd" type="button">{{ __('parent.add_parent') }}</button><br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
           style="text-align: center">
        <thead>
        <tr class="table-success">
            <th>#</th>
            <th>{{ __('parent.email') }}</th>
            <th>{{ __('parent.father_name') }}</th>
            <th>{{ __('parent.father_national_id') }}</th>
            <th>{{ __('parent.father_passport_id') }}</th>
            <th>{{ __('parent.father_phone') }}</th>
            <th>{{ __('parent.father_job') }}</th>
            <th>{{ __('parent.processes') }}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach ($guardians as $guardian)
            <tr>
                <?php $i++; ?>
                <td>{{ $i }}</td>
                <td>{{ $guardian->email }}</td>
                <td>{{ $guardian->name }}</td>
                <td>{{ $guardian->father_national_id }}</td>
                <td>{{ $guardian->father_passport_id }}</td>
                <td>{{ $guardian->father_phone }}</td>
                <td>{{ $guardian->father_job }}</td>
                <td>
                    <button wire:click="edit({{ $guardian->id }})" title="{{ __('grade.edit') }}"
                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $guardian->id }})" title="{{ __('grade.delete') }}"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
