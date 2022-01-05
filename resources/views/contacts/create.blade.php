@extends('layouts.app')

@section('content')
    <body class="books2">
    <div class="container form-margin ">
        <div class="row justify-content-center">
            <div class="col-md-8 form-custom">
                <div class="card  bg-text_contact_form">
                    <div class="card-header">{{ __('NEW MESSAGE') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('contacts.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            if (document.contact.subject.value == null) {
                alert("Enter a subject of your message is required");
                document.contact.subject.focus();
                return false;
            }
            if (!/^[a-zA-Z]*$/g.test(document.contact.subject.value) && /^[0-9.,%><+*/ˇ´]*$/g.test(document.contact.subject.value)) {
                alert("Your input for Subject is wrong! " +
                    "Please use also some alphabetic, and write some meaningful words and sentences," +
                    " if it's possible. ");
                document.contact.subject.focus();
                return false;
            }
            if (document.contact.message.value == null) {
                alert("Enter your message is required");
                document.contact.message.focus();
                return false;
            }
            if (!/^[a-zA-Z]*$/g.test(document.contact.message.value) && /^[0-9.,%><+*/ˇ´]*$/g.test(document.contact.message.value)) {
                alert("Your input for Message is wrong!" +
                    "Please use also some alphabetic, and write some meaningful words and sentences, " +
                    "if it's possible. ");
                document.contact.message.focus();
                return false;
            }
        }
    </script>
    </body>
@endsection
