@extends ('backend.layouts.app')

@section ('title', __('labels.backend.ctdb.companies.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.ctdb.companies.management') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.ctdb.company.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@sortablelink('name', __('labels.backend.ctdb.companies.table.name'))</th>
                            <th>{{ __('labels.backend.ctdb.companies.table.address1') }}</th>
                            <th>@sortablelink('city', __('labels.backend.ctdb.companies.table.city'))</th>
                            <th>@sortablelink('zip', __('labels.backend.ctdb.companies.table.zip'))</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address1 }}</td>
                                <td>{{ $company->city }}</td>
                                <td>{{ $company->zip }}</td>
                                <td>{!! $company->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $companies->total() !!} {{ trans_choice('labels.backend.ctdb.companies.table.total', $companies->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $companies->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
