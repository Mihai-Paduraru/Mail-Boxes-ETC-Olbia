<x-layout>

    <div class="container-fluid vh-100 m-0 header-contact d-flex flex-column justify-content-center p-3">
    </div>


    <div class="container py-5">
        <div class="row justify-content-center align-items-center shadow">
            <div class="col-12 p-3">
                <form action="" method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-group p-2">
                        <label>Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group p-2">
                        <label>Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                        @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group p-2">
                        <label>Phone</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                        @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group p-2">
                        <label>Subject</label>
                        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                            id="subject">
                        @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group p-2">
                        <label>Message</label>
                        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                            rows="4"></textarea>
                        @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>
                    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                </form>
            </div>
        </div>
    </div>
        




</x-layout>
