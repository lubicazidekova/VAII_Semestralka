@extends('layouts.app')
@section('content')
    <body class="books2" >
    <div class="container-fluid " style="margin-top: 10vw">
        <div class="row">
            <div class="col-sm-6" style=" border: black">
        <h1>Your reviews</h1>
        <table class="table table-bordered table-responsive " id="data-table" style="background-color: black!important">
            <thead>
            <tr class="table-dark" style="color: black">
                <th scope="col">ID</th>
                <th scope="col">Full name</th>
                <th scope="col">Review</th>
                <th scope="col">Rating</th>

                <th scope="col">Action</th>

            </tr>
            </thead>

            <tbody>

            </tbody>

        </table>
                @auth()
                <a class="btn btn-black2" href="javascript:void(0)" id="createNewReview">Add new review</a>
                @endauth
                @guest()
                    <h3>Please log in, if you want to write your review for us </h3>
                @endguest
            </div>
        </div>
    </div>


    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading"></h4>
            </div>
            <div class="modal-body">
                <form action="{{route('reviews.store')}}" id="reviewForm" method="post" name="reviewForm" class="form">
                    <input type="hidden" name="review_id" id="review_id">
                    <div class="form-group">
                        REVIEW:<br>
                        <input type="text" class="form-control" id="text" name="text"
                        placeholder="Write your review here" value="" required >
                        <span class="text-danger error-text text_error"></span>
                    </div>
                        <div class="form-group">
                            Rating:<br>
                            <input type="number" class="form-control" id="rating" name="rating"
                                   placeholder="Give us count of stars rating (1-5)" value="" required >
                            <span class="text-danger error-text rating_error"></span>
                        </div>
                    <button type="submit" class="btn btn-black" id="saveButton" value="create">Save</button>
                </form>
            </div>
        </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script  src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>

    </body>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#data-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{route('reviews.index')}}",
                'pageLenght':5,
                'aLengthMenu':[[5,10,25,50,-1],[5,10,25,50,'All']],
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'user_id'},
                    {data: 'text', name: 'text'},
                    {data: 'rating', name: 'rating'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            }
            );
            $('#createNewReview').click(function (){
                $('#saveButton').val('create-review')
                $('#review_id').val('');
                $('#reviewForm').trigger('reset');
                $('#modalHeading').html('Add new review');
                $('#ajaxModel').modal('show');
            });

            $('#saveButton').click(function (e){
                e.preventDefault();
                $(this).html('Save');

                var formData = $("#reviewForm").serialize();
                $.ajax({
                    data: formData,
                    url: "{{route('reviews.store')}}",
                    type: 'POST',
                    dataType: 'json',

                    success:function (data){
                        $('#reviewForm').trigger('reset');
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    },
                    error:function(data){
                        console.log('Error:',data);
                        $('#saveButton').html('Save');
                    }

                });
            });

            $('body').on('click','.deleteReview',function(){
                var review_id = $(this).data('id');
                confirm('Are you sure ?');
                $.ajax({
                    type:'DELETE',
                    url:'{{route('reviews.store')}}'+'/'+review_id,
                    success:function (data){
                        table.draw();
                    },
                    error:function(data){
                        console.log('Error:',data);

                    }
                });
            });
            $('body').on('click','.editReview',function(){
                 var review_id = $(this).data('id');
                    $.get('{{route('reviews.index')}}'+'/'+ review_id +'/edit',function(data){
                        $('#modelHeading').html('Edit review');
                        $('#saveButton').val("edit-review");
                        $('#ajaxModel').modal('show');
                        $('#review_id').val(data.id);
                        $('#text').val(data.text);
                        $('#rating').val(data.rating);
                    });
            })

        });

    </script>
@endsection
