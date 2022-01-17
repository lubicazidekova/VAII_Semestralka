<section>

        @foreach($article->comments as $comment)
            @include('comment.show')
        @endforeach


</section>
