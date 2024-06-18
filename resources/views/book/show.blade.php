@extends('layouts.app')

@section('template_title')
    {{ $book->name ?? __('Show') . " " . __('Book') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Book</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('books.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $book->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Date:</strong>
                                    {{ $book->date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Author Id:</strong>
                                    {{ $book->author_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
