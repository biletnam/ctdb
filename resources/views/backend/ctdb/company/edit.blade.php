@extends ('backend.layouts.app')

@section ('title', __('labels.backend.ctdb.companies.management') . ' | ' . __('labels.backend.ctdb.companies.edit'))

@section('content')
    {{ html()->modelForm($company, 'PATCH', route('admin.ctdb.company.update', $company))->class('form-horizontal')->open() }}
    {{ html()->hidden("user_id",$logged_in_user->id)}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.ctdb.companies.management') }}
                        <small class="text-muted">{{ __('labels.backend.ctdb.companies.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr />


            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.name'))->class('col-md-2 form-control-label')->for('name') }}
                        <div class="col-md-10">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.name'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.address1'))->class('col-md-2 form-control-label')->for('address1') }}
                        <div class="col-md-10">
                            {{ html()->text('address1')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.address1'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.address2'))->class('col-md-2 form-control-label')->for('address2') }}
                        <div class="col-md-10">
                            {{ html()->text('address2')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.address2'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.city'))->class('col-md-2 form-control-label')->for('city') }}
                        <div class="col-lg-3 col-md-3">
                            {{ html()->text('city')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.city'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.state'))->class('col-md-2 form-control-label')->for('state') }}
                        <div class="col-lg-2 col-md-2">
                            {{ html()->select('state')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.state'))
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
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.zip'))->class('col-md-2 form-control-label')->for('zip') }}
                        <div class="col-lg-2 col-md-2">
                            {{ html()->text('zip')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.zip'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.contact'))->class('col-md-2 form-control-label')->for('contact') }}
                        <div class="col-md-10">
                            {{ html()->text('contact')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.contact'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.phone'))->class('col-md-2 form-control-label')->for('phone') }}
                        <div class="col-md-10">
                            {{ html()->input('phone')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.phone'))
                                ->attribute('name', 'phone')
                                ->attribute('id', 'phone')
                                ->attribute('value', $company->phone)
                                ->attribute('maxlength', 191)
                                ->attribute('type', 'tel') }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.email'))->class('col-md-2 form-control-label')->for('email') }}
                        <div class="col-md-10">
                            {{ html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.email'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.description'))->class('col-md-2 form-control-label')->for('description') }}
                        <div class="col-md-10">
                            {{ html()->textarea('description')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.description'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <!-- In order to use the HTML5 type=url attribute, must use the generic html()->input() which requires
                explicitly specifying all relevant attributes. Unlike html()->text() which auto generates the needed ones. -->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.weblink'))->class('col-md-2 form-control-label')->for('weblink') }}
                        <div class="col-md-10">
                            {{ html()->input('weblink')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.weblink'))
                                ->attribute('name', 'weblink')
                                ->attribute('id', 'weblink')
                                ->attribute('value', $company->weblink)
                                ->attribute('maxlength', 191)
                                ->attribute('type', 'url') }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.facebooklink'))->class('col-md-2 form-control-label')->for('facebooklink') }}
                        <div class="col-md-10">
                            {{ html()->input('facebooklink')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.facebooklink'))
                                ->attribute('name', 'facebooklink')
                                ->attribute('id', 'facebooklink')
                                ->attribute('value', $company->facebooklink)
                                ->attribute('maxlength', 191)
                                ->attribute('type', 'url') }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.twitterlink'))->class('col-md-2 form-control-label')->for('twitterlink') }}
                        <div class="col-md-10">
                            {{ html()->input('twitterlink')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.twitterlink'))
                                ->attribute('name', 'twitterlink')
                                ->attribute('id', 'twitterlink')
                                ->attribute('value', $company->twitterlink)
                                ->attribute('maxlength', 191)
                                ->attribute('type', 'url') }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.youtubelink'))->class('col-md-2 form-control-label')->for('youtubelink') }}
                        <div class="col-md-10">
                            {{ html()->input('youtubelink')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.youtubelink'))
                                ->attribute('name', 'youtubelink')
                                ->attribute('id', 'youtubelink')
                                ->attribute('value', $company->youtubelink)
                                ->attribute('maxlength', 191)
                                ->attribute('type', 'url') }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.ctdb.companies.fields.instagramlink'))->class('col-md-2 form-control-label')->for('instagramlink') }}
                        <div class="col-md-10">
                            {{ html()->input('instagramlink')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.ctdb.companies.instagramlink'))
                                ->attribute('name', 'instagramlink')
                                ->attribute('id', 'instagramlink')
                                ->attribute('value', $company->instagramlink)
                                ->attribute('maxlength', 191)
                                ->attribute('type', 'url') }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.ctdb.company.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection
