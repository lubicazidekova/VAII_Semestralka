
@extends('layouts.app')

@section('content')
    <body>

    <div class="tab" style="margin-top: 5vw">
        <button class="tablinks" onclick="openText(event, 'Article')">Article</button>
        <button class="tablinks" onclick="openText(event, 'Comments')">Comments</button>
        <button class="tablinks" onclick="openText(event, 'New Comment')">Add new comment</button>
    </div>

    <div id="Article" class="tabcontent">
        <div class="container ">

            <div class="card-deck align-items-sm-center" >
                <div class="card paper" >
                    <div class="card-body paper text-center " style="color:black">
                        <h2 class="nadpisCinema"> {{$article->title}}</h2>
                        <p>
                            {{ $article->text}}
                        </p>
                    </div>

                    <footer class="post-footer ">

                        <br>

                        <h5 class="text text-right " title="edit" ><a style="color: black" href="{{route('article.edit',[$article->id])}}">Edit</a></h5>
                        <time>
                            <small style="float: right; color: black">{{$article->created_at->format('d/m/Y')}}</small>
                        </time>

                    </footer>

                </div>
            </div>
        </div>
    </div>

    <div id="Comments" class="tabcontent">
       <h1>tralala coments index here</h1>

    </div>
    <div id="New Comment" class="tabcontent">
        @guest()
            <h3 style="color: red">For adding comments, you need to be logged in</h3>
        @endguest


    </div>

    <script>
        function openText(evt, textName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(textName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    </body>
@endsection
