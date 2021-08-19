@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="title">{{__('parent.mother_name')}}</label>
                        <input type="text" wire:model="mother_name_ar" class="form-control">
                        @error('mother_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="title">{{__('parent.mother_name_en')}}</label>
                        <input type="text" wire:model="mother_name_en" class="form-control">
                        @error('mother_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label for="title">{{__('parent.mother_job_ar')}}</label>
                        <input type="text" wire:model="mother_job_ar" class="form-control">
                        @error('mother_job_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="title">{{__('parent.mother_job_en')}}</label>
                        <input type="text" wire:model="mother_job_en" class="form-control">
                        @error('mother_job_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{__('parent.mother_national_id')}}</label>
                        <input type="text" wire:model="mother_national_id" class="form-control">
                        @error('mother_national_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="title">{{__('parent.mother_passport_id')}}</label>
                        <input type="text" wire:model="mother_passport_id" class="form-control">
                        @error('mother_passport_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">{{__('parent.mother_phone')}}</label>
                        <input type="text" wire:model="mother_phone" class="form-control">
                        @error('mother_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">{{__('parent.mother_nationality_id')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="mother_nationality_id">
                            <option selected>{{__('parent.choose')}}...</option>
                            @foreach($nationalises as $nationality)
                                <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                            @endforeach
                        </select>
                        @error('mother_nationality_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="inputState">{{__('parent.mother_blood_type_id')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="mother_blood_type_id">
                            <option selected>{{__('parent.choose')}}...</option>
                            @foreach($blood_types as $blood_type)
                                <option value="{{$blood_type->id}}">{{$blood_type->name}}</option>
                            @endforeach
                        </select>
                        @error('mother_blood_type_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="inputZip">{{__('parent.mother_religion_id')}}</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="mother_religion_id">
                            <option selected>{{__('parent.choose')}}...</option>
                            @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('mother_religion_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">{{__('parent.mother_address')}}</label>
                    <textarea class="form-control" wire:model="mother_address" id="exampleFormControlTextarea1"
                              rows="4"></textarea>
                    @error('mother_address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
                    {{__('parent.back')}}
                </button>

                @if($updateMode)
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="secondStepSubmit_edit"
                            type="button">{{__('parent.next')}}
                    </button>
                @else
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                            wire:click="secondStepSubmit">{{__('parent.next')}}</button>
                @endif

            </div>
        </div>
    </div>

