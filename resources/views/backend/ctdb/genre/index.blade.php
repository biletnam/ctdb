@extends ('backend.layouts.app')

@section ('title', __('labels.backend.ctdb.genres.management'))

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.ctdb.genres.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    @include('backend.ctdb.genre.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>@sortablelink('name', __('labels.backend.ctdb.genres.table.name'))</th>
                                <th>{{ __('labels.general.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <td>{{ $genre->name }}</td>
                                    <td>{!! $genre->action_buttons !!}</td>
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
                        {!! $genres->total() !!} {{ trans_choice('labels.backend.ctdb.genres.table.total', $genres->total()) }}
                    </div>
                </div><!--col-->

                <div class="col-5">
                    <div class="float-right">
                        {!! $genres->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
