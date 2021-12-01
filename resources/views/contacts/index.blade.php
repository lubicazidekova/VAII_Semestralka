
@extends('layouts.app')
@section('content')
    <body class="books2">

    @foreach($contacts as $contact )

        <div class="container form-margin " style="margin-bottom:25%">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card  bg-text_contact_index">
                        <div class="card-header"><h4>{{ $contact->subject}}</h4></div>

                        <div class="card-body">
                            <h6>From: {{ $contact->name}} </h6>
                            <h6>E-mail: {{ $contact->email}} </h6>
                            <h6>Phone number: {{ $contact->phone}} </h6>
                            <h6>To:{{ $contact->recipient}} </h6>
                            <h5>{{ $contact->message}} </h5>

                            @auth
                                <h1 class="text text-right " title="delete" data-method="DELETE" ><a style="color: black" href="{{route('contact.delete',[$contact->id])}}">x</a></h1>
                                <h5 class="text text-right " title="edit" ><a style="color: black" href="{{route('contacts.edit',[$contact->id])}}">EDIT</a></h5>
                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endforeach

    <div class="mb-1">
        <a href="{{route('contacts.create') }}" class="btn btn-lg btn-black3" role="button"  >+ ADD NEW MESSAGE</a>
    </div>
    </body>




@endsection
