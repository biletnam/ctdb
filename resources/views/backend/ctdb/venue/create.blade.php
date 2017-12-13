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

                <hr />

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
                                       required autofocus>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.address1'))->class('col-md-2 form-control-label')->for('address1') }}
                            <div class="col-md-10">
                                {{ html()->text('address1')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.address1'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.address2'))->class('col-md-2 form-control-label')->for('address2') }}
                            <div class="col-md-10">
                                {{ html()->text('address2')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.address2'))
                                    ->attribute('maxlength', 191) }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.city'))->class('col-md-2 form-control-label')->for('city') }}
                            <div class="col-lg-3 col-md-3">
                                {{ html()->text('city')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.city'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.state'))->class('col-md-2 form-control-label')->for('state') }}
                            <div class="col-lg-2 col-md-2">
                                {{ html()->select('state')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.state'))
                                    ->options(
                                        [
                                            'AL'=>'Alabama',
                                            'AK'=>'Alaska',
                                            'AZ'=>'Arizona',
                                            'AR'=>'Arkansas',
                                            'CA'=>'California',
                                            'CO'=>'Colorado',
                                            'CT'=>'Connecticut',
                                            'DE'=>'Delaware',
                                            'DC'=>'District of Columbia',
                                            'FL'=>'Florida',
                                            'GA'=>'Georgia',
                                            'HI'=>'Hawaii',
                                            'ID'=>'Idaho',
                                            'IL'=>'Illinois',
                                            'IN'=>'Indiana',
                                            'IA'=>'Iowa',
                                            'KS'=>'Kansas',
                                            'KY'=>'Kentucky',
                                            'LA'=>'Louisiana',
                                            'ME'=>'Maine',
                                            'MD'=>'Maryland',
                                            'MA'=>'Massachusetts',
                                            'MI'=>'Michigan',
                                            'MN'=>'Minnesota',
                                            'MS'=>'Mississippi',
                                            'MO'=>'Missouri',
                                            'MT'=>'Montana',
                                            'NE'=>'Nebraska',
                                            'NV'=>'Nevada',
                                            'NH'=>'New Hampshire',
                                            'NJ'=>'New Jersey',
                                            'NM'=>'New Mexico',
                                            'NY'=>'New York',
                                            'NC'=>'North Carolina',
                                            'ND'=>'North Dakota',
                                            'OH'=>'Ohio',
                                            'OK'=>'Oklahoma',
                                            'OR'=>'Oregon',
                                            'PA'=>'Pennsylvania',
                                            'RI'=>'Rhode Island',
                                            'SC'=>'South Carolina',
                                            'SD'=>'South Dakota',
                                            'TN'=>'Tennessee',
                                            'TX'=>'Texas',
                                            'UT'=>'Utah',
                                            'VT'=>'Vermont',
                                            'VA'=>'Virginia',
                                            'WA'=>'Washington',
                                            'WV'=>'West Virginia',
                                            'WI'=>'Wisconsin',
                                            'WY'=>'Wyoming',
                                        ])
                                    ->required() }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.zip'))->class('col-md-2 form-control-label')->for('zip') }}
                            <div class="col-lg-2 col-md-2">
                                {{ html()->text('zip')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.zip'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.contact'))->class('col-md-2 form-control-label')->for('contact') }}
                            <div class="col-md-10">
                                {{ html()->text('contact')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.contact'))
                                    ->attribute('maxlength', 191) }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.phone'))->class('col-md-2 form-control-label')->for('phone') }}
                            <div class="col-md-10">
                                {{ html()->input('phone')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.phone'))
                                    ->attribute('name', 'phone')
                                    ->attribute('id', 'phone')
                                    ->attribute('maxlength', 191)
                                    ->attribute('type', 'tel') }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.email'))->class('col-md-2 form-control-label')->for('email') }}
                            <div class="col-md-10">
                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.email'))
                                    ->attribute('maxlength', 191) }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.description'))->class('col-md-2 form-control-label')->for('description') }}
                            <div class="col-md-10">
                                {{ html()->textarea('description')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.description'))
                                    ->attribute('maxlength', 191) }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.weblink'))->class('col-md-2 form-control-label')->for('weblink') }}
                            <div class="col-md-10">
                                {{ html()->input('weblink')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.weblink'))
                                    ->attribute('name', 'weblink')
                                    ->attribute('id', 'weblink')
                                    ->attribute('maxlength', 191)
                                    ->attribute('type', 'url') }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.facebooklink'))->class('col-md-2 form-control-label')->for('facebooklink') }}
                            <div class="col-md-10">
                                {{ html()->input('facebooklink')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.facebooklink'))
                                    ->attribute('name', 'facebooklink')
                                    ->attribute('id', 'facebooklink')
                                    ->attribute('maxlength', 191)
                                    ->attribute('type', 'url') }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.twitterlink'))->class('col-md-2 form-control-label')->for('twitterlink') }}
                            <div class="col-md-10">
                                {{ html()->input('twitterlink')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.twitterlink'))
                                    ->attribute('name', 'twitterlink')
                                    ->attribute('id', 'twitterlink')
                                    ->attribute('maxlength', 191)
                                    ->attribute('type', 'url') }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.youtubelink'))->class('col-md-2 form-control-label')->for('youtubelink') }}
                            <div class="col-md-10">
                                {{ html()->input('youtubelink')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.youtubelink'))
                                    ->attribute('name', 'youtubelink')
                                    ->attribute('id', 'youtubelink')
                                    ->attribute('maxlength', 191)
                                    ->attribute('type', 'url') }}
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.ctdb.venues.fields.instagramlink'))->class('col-md-2 form-control-label')->for('instagramlink') }}
                            <div class="col-md-10">
                                {{ html()->input('instagramlink')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.ctdb.venues.instagramlink'))
                                    ->attribute('name', 'instagramlink')
                                    ->attribute('id', 'instagramlink')
                                    ->attribute('maxlength', 191)
                                    ->attribute('type', 'url') }}
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
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection