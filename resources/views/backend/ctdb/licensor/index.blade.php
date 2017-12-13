@extends ('backend.layouts.app')

@section ('title', __('ctdb.backend.licensor.headings.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('ctdb.backend.licensor.headings.management') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.ctdb.licensor.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@sortablelink('name', __('ctdb.backend.licensor.table.columns.name'))</th>
                            <th>{{ __('ctdb.backend.licensor.table.columns.weblink') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($licensors as $licensor)
                            <tr>
                                <td>{{ $licensor->name }}</td>
                                <td>{{ $licensor->weblink }}</td>
                                <td>{!! $licensor->action_buttons !!}</td>
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
                    {!! $licensors->total() !!} {{ trans_choice('ctdb.backend.licensor.table.total', $licensors->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $licensors->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
