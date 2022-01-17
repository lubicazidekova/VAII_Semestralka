@extends('layouts.app')
@section('content')
<body class="BG-IMAGE_MAIN " id="imageID">

<div class="bg-text">

    <h1 id="headLine"></h1>
    <h2 id="subHeadLine"></h2>
</div>


<script>
    let backgroundImagesArray = [
        'css/images/movies.jpg',
        'css/images/harley.jpg',
        'css/images/popcorn.jpg',
        'css/images/knihynapolici.jpg'
    ]

    let imageID = document.getElementById("imageID");

    let i = 0;
    setInterval(function() {
        imageID.style.backgroundImage = "url(" + backgroundImagesArray[i] + ")";
        i = i + 1;
        if (i === backgroundImagesArray.length) {
            i =  0;
        }
    }, 5000);


    function typewriterFunction (id_text, text, loop, speed) {

        id_text = document.getElementById(id_text);
        if (speed === undefined) { speed = 250; }
        if (loop === undefined) { loop = false; }


        let current = 0;
        let timer = setInterval(function(){
            current++;
            if (current <= text.length) {
                id_text.innerHTML = text.substring(0, current);
            } else {
                if (loop) { current = 0; }
                else { clearInterval(timer); }
            }
        }, speed);
    }
    window.addEventListener("load", function(){
        typewriterFunction("headLine", 'BOOKS & MOVIES Blog', true,250);
        typewriterFunction("subHeadLine", 'Hope you will like it');
    });
</script>
@endsection
