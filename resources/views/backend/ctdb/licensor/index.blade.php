@extends ('backend.layouts.app')

@section ('title', __('labels.backend.ctdb.licensors.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.ctdb.licensors.management') }}
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
                            <th>@sortablelink('name', __('labels.backend.ctdb.licensors.table.name'))</th>
                            <th>{{ __('labels.backend.ctdb.licensors.table.weblink') }}</th>
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
                    {!! $licensors->total() !!} {{ trans_choice('labels.backend.ctdb.licensors.table.total', $licensors->total()) }}
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
