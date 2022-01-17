@extends('layouts.app')
@section('content')
    <body class="books2">
    <div class="container form-margin ">
        <div class="row justify-content-center">
            <div class="col-sm-8 form-custom">
                <div class="card  bg-text_contact_form">
                    <div class="card-header">{{ __('NEW ARTICLE') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('article.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
