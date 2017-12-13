@extends ('backend.layouts.app')

@section ('title', __('ctdb.backend.genre.headings.management') . ' | ' . __('ctdb.backend.genre.headings.create'))

@section('content')

    <form class="form-horizontal" method="POST" action="{{ route('admin.ctdb.type.update', $genre) }}">
        <input type="hidden" name="_method" id="_method" value="PATCH">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" id="user_id" value="{{ $logged_in_user->id }}">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            {{ __('ctdb.backend.genre.headings.management') }}
                            <small class="text-muted">{{ __('ctdb.backend.genre.headings.edit') }}</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->
                <!--row-->

                <hr/>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="name">{{ __('ctdb.backend.genre.fields.labels.name') }}</label>

                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       value="{{ old('name',$genre->name) }}"
                                       placeholder="{{ __('ctdb.backend.genre.fields.placeholders.name') }}"
                                       maxlength="191"
                                       required autofocus>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-danger btn-sm" href="{{ route('admin.ctdb.genre.index') }}">{{ __('buttons.general.cancel') }}</a>
                    </div><!--col-->

                    <div class="col text-right">
                        <button class="btn btn-success btn-sm float-right" type="submit">{{ __('buttons.general.crud.update') }}</button>
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>

@endsection
