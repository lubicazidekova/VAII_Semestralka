<form method="post" action="{{$action}}" id="'submit'">
    @csrf
    @method($method)
    <div class="form-group row  " >
        <label for="name" class="col-sm-2 col-form-label">Full name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="{{old('name',@$model->name)}}">
        </div>
    </div>
    <div class="form-group  row">
        <label for="email" class="col-sm-2 col-form-label">Email address</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email" value="{{old('email',@$model->email)}}">

        </div>
    </div>
    <div class="form-group  row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" placeholder="Password" >
        </div>
    </div>
    <div class="form-group  row">
        <label for="password-confirm" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
        </div>
    </div>
    <div class="form-group row" style="padding-left: 80%">
        <button type="submit" class="btn btn-black">Submit</button>
    </div>

</form>

