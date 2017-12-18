@extends ('backend.layouts.app')

@section ('title', __('ctdb.backend.venue.headings.management') . ' | ' . __('ctdb.backend.venue.headings.create'))

@section('content')

    <form class="form-horizontal" method="POST" action="{{ route('admin.ctdb.venue.store') }}">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" id="user_id" value="{{ $logged_in_user->id }}">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            {{ __('ctdb.backend.venue.headings.management') }}
                            <small class="text-muted">{{ __('ctdb.backend.venue.headings.create') }}</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr/>

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="name">{{ __('ctdb.backend.venue.fields.labels.name') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       value="{{ old('name') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.name') }}"
                                       maxlength="191"
                                       required autofocus/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="address1">{{ __('ctdb.backend.venue.fields.labels.address1') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="address1"
                                       id="address1"
                                       value="{{ old('address1') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.address1') }}"
                                       maxlength="191"
                                       required/>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="address2">{{ __('ctdb.backend.venue.fields.labels.address2') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="address2"
                                       id="address2"
                                       value="{{ old('address2') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.address2') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="city">{{ __('ctdb.backend.venue.fields.labels.city') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="city"
                                       id="city"
                                       value="{{ old('city') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.city') }}"
                                       maxlength="191"
                                       required/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="state">{{ __('ctdb.backend.venue.fields.labels.state') }}</label>
                            <div class="col-lg-2 col-md-2">
                                <select class="form-control" name="state" id="state" required>
                                    <option value>State</option>
                                    @foreach($states as $key => $val)
                                        <option value="{{ $key }}" @if (old('state') == $key) selected="selected" @endif>{{ $val }}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="zip">{{ __('ctdb.backend.venue.fields.labels.zip') }}</label>
                            <div class="col-lg-2 col-md-2">
                                <input class="form-control"
                                       type="text"
                                       name="zip"
                                       id="zip"
                                       value="{{ old('zip') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.zip') }}"
                                       maxlength="191"
                                       required/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="contact">{{ __('ctdb.backend.venue.fields.labels.contact') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="text"
                                       name="contact"
                                       id="contact"
                                       value="{{ old('contact') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.contact') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="phone">{{ __('ctdb.backend.venue.fields.labels.phone') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="tel"
                                       name="phone"
                                       id="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.phone') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="email">{{ __('ctdb.backend.venue.fields.labels.email') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="email"
                                       name="email"
                                       id="email"
                                       value="{{ old('email') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.email') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="description">{{ __('ctdb.backend.venue.fields.labels.description') }}</label>
                            <div class="col-md-10">
                                <textarea class="form-control"
                                          rows="3"
                                          cols="50"
                                          placeholder="{{ __('ctdb.backend.venue.fields.placeholders.description') }}"
                                          name="description"
                                          id="description">{{ old('description') }}</textarea>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="weblink">{{ __('ctdb.backend.venue.fields.labels.weblink') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="url"
                                       name="weblink"
                                       id="weblink"
                                       value="{{ old('weblink') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.weblink') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="facebooklink">{{ __('ctdb.backend.venue.fields.labels.facebooklink') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="url"
                                       name="facebooklink"
                                       id="facebooklink"
                                       value="{{ old('facebooklink') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.facebooklink') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="twitterlink">{{ __('ctdb.backend.venue.fields.labels.twitterlink') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="url"
                                       name="twitterlink"
                                       id="twitterlink"
                                       value="{{ old('twitterlink') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.twitterlink') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="youtubelink">{{ __('ctdb.backend.venue.fields.labels.youtubelink') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="url"
                                       name="youtubelink"
                                       id="youtubelink"
                                       value="{{ old('youtubelink') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.youtubelink') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label" for="instagramlink">{{ __('ctdb.backend.venue.fields.labels.instagramlink') }}</label>
                            <div class="col-md-10">
                                <input class="form-control"
                                       type="url"
                                       name="instagramlink"
                                       id="instagramlink"
                                       value="{{ old('instagramlink') }}"
                                       placeholder="{{ __('ctdb.backend.venue.fields.placeholders.instagramlink') }}"
                                       maxlength="191"/>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.ctdb.venue.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div>
    </form>
@endsection