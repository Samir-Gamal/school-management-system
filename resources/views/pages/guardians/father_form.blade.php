<div>
    @if($currentStep != 1)
        <div style="display: none" class="row setup-content" id="step-1">
            @endif
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{__('parent.email')}}</label>
                            <input type="email" wire:model="email" class="form-control">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="password">{{__('parent.password')}}</label>
                            <input type="password" wire:model="password" class="form-control">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{__('parent.father_name')}}</label>
                            <input type="text" wire:model="father_name_ar" class="form-control">
                            @error('father_name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{__('parent.father_name_en')}}</label>
                            <input type="text" wire:model="father_name_en" class="form-control">
                            @error('father_name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="title">{{__('parent.father_job')}}</label>
                            <input type="text" wire:model="father_job_ar" class="form-control">
                            @error('father_job_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="title">{{__('parent.father_job_en')}}</label>
                            <input type="text" wire:model="father_job_en" class="form-control">
                            @error('father_job_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">{{__('parent.father_national_id')}}</label>
                            <input type="number" name="father_national_id" wire:model="father_national_id"
                                   class="form-control">
                            @error('father_national_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{__('parent.father_passport_id')}}</label>
                            <input type="number" name="father_passport_id" wire:model="father_passport_id"
                                   class="form-control">
                            @error('father_passport_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">{{__('parent.father_phone')}}</label>
                            <input type="number" name="father_phone" wire:model="father_phone" class="form-control">
                            @error('father_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">{{__('parent.father_nationality_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" wire:model="father_nationality_id">
                                <option selected>{{__('main.choose')}}...</option>
                                @foreach($nationalises as $nationality)
                                    <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                @endforeach
                            </select>
                            @error('father_nationality_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{__('parent.type_blood_father_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" wire:model="father_blood_type_id">
                                <option selected>{{__('main.choose')}}...</option>
                                @foreach($blood_types as $blood_type)
                                    <option value="{{$blood_type->id}}">{{$blood_type->name}}</option>
                                @endforeach
                            </select>
                            @error('father_blood_type_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{__('parent.father_religion_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" wire:model="father_religion_id">
                                <option selected>{{__('main.choose')}}...</option>
                                @foreach($religions as $religion)
                                    <option value="{{$religion->id}}">{{$religion->name}}</option>
                                @endforeach
                            </select>
                            @error('father_religion_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{__('parent.father_address')}}</label>
                        <textarea class="form-control" wire:model="father_address" id="exampleFormControlTextarea1"
                                  rows="4"></textarea>
                        @error('father_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($updateMode)
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                                wire:click="firstStepSubmit_edit"
                                type="button">{{__('parent.next')}}
                        </button>
                    @else
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                                type="button">{{__('parent.next')}}
                        </button>
                    @endif

                </div>
            </div>
        </div>
</div>
