@extends('layouts.app')
@section('content')
    <body class="pozadie">
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-sm-3"><h3 class="nadpis2">BOOKS</h3></div>
            <div class="col-sm-6"><h1 class="nadpis1"> Events</h1></div>
            <div class="col-sm-3"><h3 class="nadpis2">MOVIES</h3></div>
        </div>
        <div class="row ">
            <div class="col"></div>
            <div class="col-sm-9 bg-text-inspo ">
                <h6 > Do you like reading engaging books or watching exciting movies ?
                    <br>You will not be bored with us, we offer interesting events for everyone.
                    <br>Take a look at our offer and choose to experience interesting adventures with us
                </h6>
            </div>
            <div class="col"></div>
        </div>



        <!--1 Event-->

        <div class="row p-3">
            <div class="col-sm-5 event-obr" >
                <img class="event-obr " src={{asset('css/images/events/hogwarts.gif')}} alt="Hogwarts">
            </div>
            <div class="col-sm-6 p-3 team text-event" >
                <h1 class="questions-h">Harry Potter Night</h1>
                <h4>VENUE: Cupboard under the stairs</h4>
                <h4>DATE: 11/04/2021</h4>
                <h4>Come & Join us on this magical journey</h4>
                <p>The April 2021 Harry Potter Wizards Unite events will follow what has become the new expected pattern
                    and get things started with a short event followed up by the second half of last month’s brilliant event.
                    Beyond that, there are a lot of other events for witches and wizards...</p>

            </div>
        </div>

        <!--2 Event-->

        <div class="row p-3">
            <div class="col"></div>
            <div class="col-sm-6 p-3 questions text-event2">
                <h1 class="team-h ">Cinema under the STARS</h1>
                <h4>VENUE: Cupboard under the stairs</h4>
                <h4>DATE: 01/06/2021</h4>
                <h4>Unforgettable adventure for children</h4>
                <p>On midsummer nights, film stars come to life in the courtyard of Ljubljana Castle.
                    A programme of twelve avant premieres and this season’s best films has been put together by Kinodvor,
                    in collaboration with the City of Ljubljana and Ljubljana Castle.</p>
            </div>
            <div class="col-sm-5">
                <img class="event-obr " src={{asset('css/images/events/angryBirds.gif')}} alt="AngryBirds">
            </div>
        </div>
        <!--3 Event-->

        <div class="row p-3">

            <div class="col-sm-5 " >
                <img class="event-obr " src={{asset('css/images/events/prideandprejudice.gif')}} alt="Pride&Prejudice">
            </div>
            <div class="col-sm-6 p-3 team text-event">
                <h1 class="questions-h">Weekend with Jane Austen</h1>
                <h4>VENUE: Hertfordshire castle</h4>
                <h4>DATE: 17/07/2021</h4>
                <h4>Became a lady of 18-th century</h4>
                <p>Join us for a very special guided tour of Jane Austen’s House. In each room, discover objects, paintings
                    and stories that reveal the themes, characters and events of Jane Austen’s beloved novel,Pride & Prejudice.

                </p>
            </div>
        </div>
        <!--4 Event-->

        <div class="row p-3 ">
            <div class="col"></div>
            <div class="col-sm-6 p-3 questions text-event2">
                <h1 class="team-h">AGENT 007 is BACK!</h1>
                <h4>VENUE: CINEMAX OC MAX</h4>
                <h4>DATE: 25/10/2021</h4>
                <h4>Premiere of new Bond movie</h4>
                <p>With a guest list made up of Oscar winners and British royalty, James Bond film "No Time To Die" finally held
                    its delayed world premiere in London on Tuesday in the cinema's most high profile red carpet
                    since the start of the COVID-19 pandemic.</p>
            </div>
            <div class="col-sm-5 ">
                <img class="event-obr " src={{asset('css/images/events/bond.gif')}} alt="JamesBond">
            </div>
        </div>


    </div>
    </body>
    </html>
@endsection
