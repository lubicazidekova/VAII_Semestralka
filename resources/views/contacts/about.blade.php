@extends('layouts.app')
@section('content')
    <body style="background-color: black">


    <div class="container-fluid mt-5">


        <div  class="row" style="margin-top: 2%">

            <div class="col-sm-1  ">

            </div>
            <div class="col-sm-2 p-3 team  ">
                <h1 class="team-h"> ABOUT  </h1>
                <h2>NIKKI</h2>
                <p>Expert in historical & romantic novels and short stories</p>
                <div class="card " style="width:100%">
                    <img class="card-img-top" src="{{asset('css/images/team/nikki.jpg')}}" alt="Nikki" style="width:100%;height:100%">
                    <div class="card-body">
                        <h4 class="card-title">About NIKKI:</h4>
                        <p class="card-text">Nikki studied law at Cambridge University in London. She wanted to share her love of books,
                            which inspired her to start this blog.
                            Nikki is also actively involved in book translation and foreign language interpreting ...</p>
                        <a href="#" class="btn btn-dark">See Profile</a>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 p-3 team  ">
                <h1 class="team-h"> OUR </h1>
                <h2>DANIEL</h2>
                <p>Expert in children's & teenager's literature</p>
                <div class="card " style="width:100%">
                    <img class="card-img-top" src="{{asset('css/images/team/danko.jpg')}}" alt="Daniel" style="width:100%;height:100%">
                    <div class="card-body">
                        <h4 class="card-title">About DANIEL:</h4>
                        <p class="card-text">This is our Daniel, an IT specialist from Harvard who works for an international IT company.
                            He loves fast cars, motorcycles, sci-fi and everything related to technology ...</p>
                        <a href="#" class="btn btn-dark">See Profile</a>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 p-3 team  ">
                <h1 class="team-h"> TEAM  </h1>
                <h2>ALEX</h2>
                <p>Expert in children's & teenager's literature</p>
                <div class="card " style="width:100%">
                    <img class="card-img-top" src="{{asset('css/images/team/alex.jpg')}}" alt="Alex" style="width:100%;height:100%">
                    <div class="card-body">
                        <h4 class="card-title">About ALEX:</h4>
                        <p class="card-text">After studying pedagogy at Oxford University, Alex began working as a teacher and mentor.
                            It is Alex who organizes all children's events and meetings in our B&M Club.
                            In her free time she likes to draw, paint, swim...</p>
                        <a href="#" class="btn btn-dark">See Profile</a>
                    </div>
                </div>

            </div>

            <div class="col-sm-4 questions p-3">
                <h1 class="questions-h">CONTACT</h1>
                <div class="card " style="width:100%">
                    <img class="card-img-top" src="{{asset('css/images/team/bookstore.jpg')}}" alt="bookstore" style="width:100%;height:100%;float: left">
                    <div class="card-body">
                        <h4 class="card-title">Where to find us?</h4>
                        <p class="card-text">
                            BOOKS & MOVIES s.ro
                            <br>Národná 35,Žilina
                            <br>+401/800 55 22
                            <br>books.movies@gmail.com
                        </p>
                    </div>
                </div>

                <h4 class="questions-h" style="margin-top: 1vw">Need help?    SEND US A MESSAGE.</h4>
                <div class="container mt-3">
                    <div class="mb-1">
                        <a href="{{route('contacts.create') }}" class="btn btn-lg btn-black2" role="button" >+SEND NEW MESSAGE</a>
                    </div>
                </div>

            </div>



        </div>

    </div>

    </body>
@endsection
