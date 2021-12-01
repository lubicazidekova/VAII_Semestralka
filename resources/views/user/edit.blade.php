@extends('layouts.app')
@section('content')
    <body class="books2">
    <div class="container form-margin">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card bg-text_users_create">
                <div class="card-header">{{__('EDIT USER')}}</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    @include('user.form')
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
@endsection
