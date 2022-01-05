@if ($errors->any())

    <ul class="alert alert-danger" >
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
    </ul>

@endif
<form method="post" action="{{$action}}"  name="contact" onsubmit="return validateForm()">
@csrf
@method($method)
        <div class="mb-3 mt-3 " >
            <label for="name">Full name:</label>
            <input type="text" class="form-control  " id="name" placeholder="Enter your name" pattern="[A-Za-zŤŽŠĎĽČŇťžšďľčňÉÚÍÓÁÝéúíóáýô]{3,15} [A-Za-zŤŽŠĎĽČŇťžšďľčňÉÚÍÓÁÝéúíóáýô]{3,15}" required name="name"  value="{{old('name',@$model->name)}}">
        </div>

        <div class="mb-3 mt-3 ">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"  required value="{{old('email',@$model->email)}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="phone">Phone number:</label>
            <input type="tel" class="form-control " id="phone" name="phone" placeholder="09-- --- ---" pattern="[0]{1}[9]{1}[0-9]{2} [0-9]{3} [0-9]{3}" required value="{{old('phone',@$model->phone)}}">
            <small>Format: 0911 111 111</small>
        </div>
        <div class="mb-3 mt-3">
            <label for="person">Send my request to:</label>
            <select id="person" name="person" class="form-control">
                <option value="anybody">Anybody</option>
                <option value="nikki">Nikki</option>
                <option value="daniel">Daniel</option>
                <option value="alex">Alex</option>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" placeholder="Subject of my message is..." name="subject"  value="{{old('subject',@$model->subject)}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="message">Message:</label>
            <textarea class="form-control" rows="6" id="message" placeholder="Here you can write your message, even without registration... We will try to response to you ASAP..."  name="message" >{{ old('message',@$model->message) }}</textarea>
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>


