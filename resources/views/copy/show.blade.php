@extends('layouts.app')

@section('template_title')
    {{ $copy->name ?? __('Show') . " " . __('Copy') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Copy</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('copies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Book Id:</strong>
                                    {{ $copy->book_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Number:</strong>
                                    {{ $copy->number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Shelving Id:</strong>
                                    {{ $copy->shelving_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
