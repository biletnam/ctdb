@extends ('backend.layouts.app')

@section ('title', __('ctdb.backend.licensor.headings.management') . ' | ' . __('ctdb.backend.licensor.headings.create'))

@section('content')

    <form class="form-horizontal" method="POST" action="{{ route('admin.ctdb.licensor.store') }}">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" id="user_id" value="{{ $logged_in_user->id }}">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            {{ __('ctdb.backend.licensor.headings.management') }}
                            <small class="text-muted">{{ __('ctdb.backend.licensor.headings.create') }}</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr/>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="name">{{ __('ctdb.backend.licensor.fields.labels.name') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       value="{{ old('name') }}"
                                       placeholder="{{ __('ctdb.backend.licensor.fields.placeholders.name') }}"
                                       maxlength="191"
                                       required autofocus>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="weblink">{{ __('ctdb.backend.licensor.fields.labels.weblink') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="url"
                                       name="weblink"
                                       id="weblink"
                                       value="{{ old('weblink') }}"
                                       placeholder="{{ __('ctdb.backend.licensor.fields.placeholders.weblink') }}"
                                       maxlength="191">
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-danger btn-sm" href="{{ route('admin.ctdb.licensor.index') }}">{{ __('buttons.general.cancel') }}</a>
                    </div><!--col-->

                    <div class="col text-right">
                        <button class="btn btn-success btn-sm float-right" type="submit">{{ __('buttons.general.crud.create') }}</button>
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>

@endsection