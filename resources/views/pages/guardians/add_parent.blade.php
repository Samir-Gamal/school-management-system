<div>
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif

    @if ($catchError)
        <div class="alert alert-danger" id="success-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $catchError }}
        </div>
    @endif


    @if($show_table)
        @include('pages.guardians.parent_table')
    @else
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button"
                       class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                    <p>{{ __('parent.step_one') }}</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button"
                       class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                    <p>{{ __('parent.step_tow') }}</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                       class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                       disabled="disabled">3</a>
                    <p>{{ __('parent.step_three') }}</p>
                </div>
            </div>
        </div>

        @include('pages.guardians.father_form')

        @include('pages.guardians.mother_form')


        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            @if ($currentStep != 3)
                <div style="display: none" class="row setup-content" id="step-3">
                    @endif

                    <div class="col-xs-12">
                        <div class="col-md-12"><br>
                            <label style="color: red">{{__('parent.attachments')}}</label>
                            <div class="form-group">
                                <input type="file" enctype="multipart/form-data" accept="image/*"
                                       wire:model="attachments" name="attachments[]" multiple required>
                            </div>
                            <br>

                            <input type="hidden" wire:model="guardian_id">

                            <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                    wire:click="back(2)">{{ __('parent.back') }}</button>

                            @if($updateMode)
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                                        wire:click="submitForm_edit"
                                        type="button">{{__('parent.finish')}}
                                </button>
                            @else
                                <button class="btn btn-success btn-sm btn-lg pull-right" wire:click="submitForm"
                                        type="button">{{ __('parent.finish') }}</button>
                            @endif

                        </div>
                    </div>
                </div>

            @endif

        </div>
