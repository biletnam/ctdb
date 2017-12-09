@extends ('backend.layouts.app')

@section ('title', __('labels.backend.ctdb.licensors.management') . ' | ' . __('labels.backend.ctdb.licensors.edit'))

@section('content')
{{ html()->modelForm($licensor, 'PATCH', route('admin.ctdb.licensor.update', $licensor))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.ctdb.licensors.management') }}
                        <small class="text-muted">{{ __('labels.backend.ctdb.licensors.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr />

            {{ html()->hidden("user_id",$logged_in_user->id)}}

            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.ctdb.licensors.name'))
                            ->class('col-md-2 form-control-label')
                            ->for('name') }}

                        <div class="col-md-10">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.licensors.name'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.ctdb.licensors.weblink1'))
                            ->class('col-md-2 form-control-label')
                            ->for('weblink') }}

                        <div class="col-md-10">
                            {{ html()->text('weblink')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.licensors.weblink2'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.ctdb.licensor.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection
