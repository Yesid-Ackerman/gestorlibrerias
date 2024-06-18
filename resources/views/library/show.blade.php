@extends('layouts.app')

@section('template_title')
    {{ $library->name ?? __('Show') . " " . __('Library') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Library</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('libraries.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $library->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Localization:</strong>
                                    {{ $library->localization }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Desc:</strong>
                                    {{ $library->desc }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
