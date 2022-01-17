@if ($errors->any())

    <ul class="alert alert-danger" >
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
    </ul>

@endif
<form method="post" action="{{$action}}"  name="article">
    @csrf
    @method($method)
    <div class="mb-3 mt-3 " >
        <label for="title">Title:</label>
        <input type="text" class="form-control  " id="title" placeholder="Enter title" pattern="[A-Za-zŤŽŠĎĽČŇťžšďľčňÉÚÍÓÁÝéúíóáýô -_]{3-50}"  required name="title"  value="{{old('title',@$model->title)}}">
    </div>

    <div class="mb-3 mt-3 ">
        <label for="subtitle">Subtitle:</label>
        <input type="text" class="form-control" id="subtitle" placeholder="Enter subtitle" pattern="[A-Za-zŤŽŠĎĽČŇťžšďľčňÉÚÍÓÁÝéúíóáýô -_]{3-100}" name="subtitle"  required value="{{old('subtitle',@$model->subtitle)}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="image">Image:</label>
        <input type="text" class="form-control " id="image" name="image" placeholder="nazov.jpg/.gif/.png"  pattern="([^\\s]+(\\.(?i)(jpg|png|gif|bmp))$)" required value="{{old('image',@$model->image)}}">
        <small>nazov.jpg/.gif/.png/...</small>
    </div>

    <div class="mb-3 mt-3">
        <label for="text">Whole Text</label>
        <textarea class="form-control" rows="6" id="text" placeholder="Whole text..."  name="text" >{{ old('text',@$model->text) }}</textarea>
    </div>

    <button type="submit" class="btn btn-dark">Submit</button>
</form>



