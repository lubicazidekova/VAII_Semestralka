@extends('layouts.app')
@section('content')
    <body class="books2 " style="color: white">
    <div class="container form-margin-users" >
        <div class="row justify-content-center" >
            <div class="col-lg-8"  >
                <div class="card form-margin bg-text_users ">
                    <div class="card-header ">{{ __('USERS') }} </div>

                    <div class="card-body " >
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="mb-1">
                            <a href="{{route('user.create') }}" class="btn btn-lg btn-black2" role="button" >+ ADD NEW USER</a>
                        </div>

                        {!! $grid->show() !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
