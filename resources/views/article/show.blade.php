@extends('layouts.app')

@section('content')
    <body style="background-color: dimgrey">

    <div class="container-fluid mt-5" id="Article">


        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 p-3 column  text-white">
                <h1 class="team-h" style="background-color: black;color:darkgrey"> {{$article->title}}  </h1>
                <h4 style=" float: left">Written by: {{$article->user->name}}</h4>
                <p style="float: right">{{$article->created_at}}</p>

                <div class="card " style="width:100%;background-color: black;border:white 5px">
                    <div class="card-body">
                        <img class=" article_image_show" src='{{ URL::asset('css/images/articles/'.$article->image) }}'
                             alt="{{$article->title}})}}">
                        <h4 class="card-title" style="color: white">{{$article->subtitle}}</h4>
                        <p class="card-text" style="color: white">{{ $article->text}} </p>
                        @can('update',$article)
                        <h5 class="text text-right " title="edit" ><a style="color: white" href="{{route('article.edit',[$article->id])}}">Edit</a></h5>
                        @endcan
                    </div>
                </div>

            </div>


        </div>


    </div>
@auth()
@include('comment.form')
@endauth
 @guest()
     <h1>If you want to participate in discussion, you need to be log in </h1>
 @endguest
    @include('comment.index')

@endsection


    </body>

