@extends('layouts.app')

@section('content')
    <body class="books2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-text_users_create">

                <div class="card-header">{{ __('Welcome ') }} </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{ __('You are successfully logged in!') }}
                        <br>
                        {{ __('We are so glad, that you are member of our team!') }}
                        <br>
                        {{ __('Hope, you like our events, advice, tips and inspiration.') }}
                        <br>
                        {{ __('Do not hesitate to contact us at any time!') }}
                        <br>
                        {{ __('We will be happy for any suggestions, ideas for improvement, as well as your support and recommendations.') }}

                </div>
            </div>
        </div>
    </div>
</div>
    </body>
@endsection
