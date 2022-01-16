
<div class="row" >
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

<div class="card-body comment " style="margin-top:1vw;border-radius: 25px; background-color: black;color: white;font-family: 'Times New Roman';border: white dotted"  >
    @can('delete',$comment)
        <h1 class="text text-right " title="delete" data-method="DELETE" >
            <a style="color: white"  href="{{route('comment.delete',[$comment->id])}}"  >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                </svg>
            </a>
        </h1>
    @endcan




    <h5>
        {{ $comment->text}}
    </h5>
        <br>


    <br>
    <h6 class="post-footer" >
        <p class="text" style="float: left">Post by : {{$comment->user->name}}</p>

        <p class="text" style="float: right">{{$comment->created_at->diffForHumans() }}</p>
    </h6>


</div>
    </div>
</div>


