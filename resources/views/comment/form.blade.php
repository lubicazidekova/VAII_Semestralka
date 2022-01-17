
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">

@if ($errors->any())

    <ul class="alert alert-danger" >
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
    </ul>

@endif

<form method="post" action="{{route('comments.store')}}" >
    @csrf
        <div class="mb-3 mt-3">
            <textarea class="form-control" rows="3" id="comment" name="text" placeholder="How do you like it ? Write down your opinion, we are gonna find it below... " required></textarea>
        </div>
        <button type="submit" class="btn btn-black2">Add new comment</button>
    <input type="hidden" class="form-control" id="article_id" name="article_id"  value="{{$article->id}}" >

</form>
       </div>
       </div>

