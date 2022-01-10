@extends('layouts.app')
@section('content')
<body class="BG-IMAGE_MAIN " id="imageID">

<div class="bg-text">
    <h1>BOOK & MOVIE Blog</h1>
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

</script>
@endsection
