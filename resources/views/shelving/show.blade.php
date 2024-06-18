@extends('layouts.app')

@section('template_title')
    {{ $shelving->name ?? __('Show') . " " . __('Shelving') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Shelving</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('shelvings.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codshel:</strong>
                                    {{ $shelving->codshel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Topic Id:</strong>
                                    {{ $shelving->topic_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
