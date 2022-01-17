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

            <div class="col-2 bg-text-inspo">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" >
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
            </div>
            <div class="col-8 bg-text-inspo ">
                <div class="filterInputs">
                    <label><input type="radio" name="type" value="" checked><i></i>All types</label>
                    <label><input type="radio" name="type" value="movie"><i></i>Movies</label>
                    <label><input type="radio" name="type" value="book" ><i></i>Books</label>
                </div>
                <div class="filterInputs">
                    <label><input type="radio" name="genre" value="" checked><i></i>All genders</label>
                    <label><input type="radio" name="genre" value="romance"><i></i>Romance</label>
                    <label><input type="radio" name="genre" value="action"><i></i>Action</label>
                    <label><input type="radio" name="genre" value="historical"><i></i>Historical</label>
                    <label><input type="radio" name="genre" value="horror"><i></i>Horror</label>
                    <label><input type="radio" name="genre" value="comedy"><i></i>Comedy</label>
                    <label><input type="radio" name="genre" value="cartoon"><i></i>Cartoon</label>
                </div>
            </div>
            <div class="col-2 bg-text-inspo" style="text-align: center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                    <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
            </div>

        </div>
<br>

        <div class="row ">

            @foreach($inspirations as $inspiration)
                <div class="col-sm-2  p-3  text-white" data-filterable="{{$inspiration->type}} {{$inspiration->genre}}">
                    <h1 class="team-h"> {{$inspiration->title}} </h1>
                    <div class="card " style="width:100%;position: relative">
                        <img class="card-img-top" src="css/images/inspiration/{{$inspiration->image}}" alt="{{$inspiration->title}}" style="width:100%;height:auto">
                @can('delete',$inspiration)
                            <h1 class="text text-right " title="delete" data-method="DELETE" >
                                <a style="color: white;position: absolute;top:-0.5vw;right:0.5vw" href="{{route('inspiration.delete',[$inspiration->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                    </svg>
                                </a>
                            </h1>
                @endcan
                    </div>
                </div>
            @endforeach

        </div>
    </div>
<script>
   /* ZDROJ:
    https://stackoverflow.com/questions/52899389/combining-two-filters-when-clicking-two-different-sections-of-buttons
    */
   const el_filters = document.querySelectorAll('[name="type"], [name="genre"]'),
        el_filterable = document.querySelectorAll('[data-filterable]')

    const applyFilter = () => {

        // Filter checked inputs
        const el_checked = [...el_filters].filter(el => el.checked && el.value)

        // Collect checked inputs values to array
        const filters = [...el_checked].map(el => el.value)

        // Get elements to filter
        const el_filtered = [...el_filterable].filter(el => {
            const props = el.getAttribute('data-filterable').trim().split(/\s+/)
            return filters.every(fi => props.includes(fi))
        });

        // Hide all
        el_filterable.forEach(el => el.classList.add('is-hidden'))

        // Show filtered
        el_filtered.forEach(el => el.classList.remove('is-hidden'))
    }

    // Assign event listener
    el_filters.forEach(el => el.addEventListener('change', applyFilter))

    applyFilter()
</script>
    </body>


@endsection
