@extends('layouts.app')

@section('content')
    <body class="pozadie">

    <div class="container-fluid mt-5">

        <div class="row" >
            @auth()
            <div>
                <a href="{{route('articles.create') }}" class="btn btn-lg btn-black2" role="button"  >+ ADD NEW ARTICLE</a>
            </div>
            @endauth

        </div>
        <div class="row " >
            @foreach($articles as $article)
            <div class="col-sm-4 p-3 column text-white" >
                <h1 class="team-h"> {{$article->title}}  </h1>
                <h5 style="color: white; float: left">Written by : {{$article->user->name}}</h5>
                <p style="float: right">{{$article->created_at}}</p>
                <div class="card " style="width:100%;position: relative">


                    <img class="card-img-top" src="css/images/articles/{{$article->image}}" alt="{{$article->title}}" style="width:100%;height:50%">

                    @can('delete',$article)
                        <h1 class="text text-right " title="delete" data-method="DELETE" >
                            <a style="color: white;position: absolute;top:-0.5vw;right:0.5vw" href="{{route('article.delete',[$article->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                </svg>
                            </a>
                        </h1>
                    @endauth
                    <div class="card-body">
                        <h4 class="card-title" style="color: black">{{$article->subtitle}}</h4>
                        <p class="card-text" style="color: black">{{ ($article->teaser) }} </p>
                        <a href="{{url('articles',$article->id)}}" class="btn btn-black2">READ MORE</a>
                        <h6 class="text" style="margin-top: 1vw;color: black;float: right">{{$article->comments->count()}} comments</h6>

                    </div>
                </div>

            </div>

            @endforeach

        </div>

    </div>
</body>

@endsection

