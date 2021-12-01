@extends('layouts.app')
@section('content')
    <body class="pozadie">
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-sm-3"><h3 class="nadpis2">BOOKS</h3></div>
            <div class="col-sm-6"><h1 class="nadpis1">Inspiration</h1></div>
            <div class="col-sm-3"><h3 class="nadpis2">MOVIES</h3></div>
        </div>

        <div class="row ">
            <div class="col-2"></div>
            <div class="col-2 bg-text-inspo">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" >
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
            </div>
            <div class="col-4 bg-text-inspo ">
                <h6 > Are you bored during quarantine ?
                    <br> There are some tips what to read and watch.

                </h6>
            </div>
            <div class="col-2 bg-text-inspo" style="text-align: center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                    <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row ">
            <div class="col-sm-3  p-3  text-white">
                <h2 class="questions-h">ROMEO & JULIET</h2>
                <img class="obrazok " src={{asset('css/images/inspiration/romeo.jpg')}} alt="Romeo&Juliet">
                <h3 class="questions-h">Historical Novel</h3>
                <p>Young Romeo and a beautiful Juliet fall in love. But they come from families which hate each other.
                    So they will not be allowed to marry. They are so much in love they marry in secret instead.
                    However, before their wedding night Romeo kills Juliets cousin in a duel, and in the morning
                    he is forced to leave the city.
                    Juliet is then told she must marry the Count Paris, who has been chosen by her parents.
                    She refuses - then agrees because she has her own plan...</p>
            </div>

            <div class="col-sm-3 p-3 m-t-5 text-white " style="padding-bottom: 3vw">
                <h2 class="nadpis2">MYSTERY CLUB</h2>
                <img class="obrazok" src={{asset('css/images/inspiration/klubzahad.jpg')}} alt="klubZahad" >
                <h4 class="podnadpis2"> Mystery story for children</h4>
                <p>A large exhibition of Egyptian mummies will come to the city.
                    The day before it opens, members of the Mystery Club sneak into the museum and reveal a scary fact:
                    one of the mummies comes to life. Her touch has terrifying consequences. The first victim will be Vicky,
                    who will soon feel ...
                </p>
            </div>


            <div class="col-sm-3  p-3  text-white">
                <h2 class="questions-h">RED 2</h2>
                <img class="obrazok" src={{asset('css/images/inspiration/red2.jpg')}} alt="Red2">
                <h3 class="questions-h">Action comedy</h3>
                <p>Retired C.I.A. Agent Frank Moses is in love with Sarah Ross  and enjoying their normal life.
                    Out of the blue, Marvin Boggs meets Frank in the supermarket and tells that Wikileaks
                    has released the information that they had participated and know the whereabouts of the Nightshade,
                    a portable nuclear weapon that was smuggled in pieces and hidden in Russia.
                    Now the top agents in the world are under contract to seek them out to discover where Nightshade is...
                </p>
            </div>

            <div class="col-sm-3  p-3  text-white">
                <h2 class="nadpis2">GLADIATOR</h2>
                <img class="obrazok" src={{asset('css/images/inspiration/gladiator.jpg')}} alt="Gladiator">
                <h4 class="podnadpis2">Historical movie</h4>
                <p> Maximus is a powerful Roman general, loved by the people and the aging Emperor, Marcus Aurelius.
                    Before his death, the Emperor chooses Maximus to be his heir over his own son, Commodus,
                    and a power struggle leaves Maximus and his family condemned to death.
                    The powerful general is unable to save his family, and his loss of will allows him to get captured
                    and put into the Gladiator games until he dies...
                </p>
            </div>




        </div>
    </div>

    </body>
    </html>

@endsection
