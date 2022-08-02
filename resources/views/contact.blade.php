<x-layout>

    <header class="container-fluid m-0 d-flex flex-column justify-content-center p-3">
        <h1>Contattaci</h1>
        <img src="/media/contact.jpg" class="img-fluid" alt="img contact">
    </header>
    <title>contattaci</title>

    <div class="container-fluid p-5 ">
        <div class="row">
          <div data-aos="fade-up" class="col-12 info-contact">
            <h2 class="text-center fs-2 fw-bold">Noi sappiamo come</h2>
            <h3 class="text-center fs-3">Mail Boxes Etc. offre semplicemente le migliori soluzioni per spedizioni ed imballaggio. Decenni di esperienza, professionalità e competenza consentono di imballare e gestire praticamente qualsiasi trasporto di merce in Italia e all’estero con i migliori corrieri sul territorio.</h3>                
          </div>
        </div> 
    </div>


    <div class="container py-5">
        <div class="row justify-content-center align-items-center shadow info-contact">
            <div class="col-12 p-3">
                <form action="" method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-group p-2">
                        <label>Nome</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group p-2">
                        <label>Cognome</label>
                        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                            id="subject">
                        @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
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
                        <label>Telefono</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                        @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group p-2">
                        <label>Descrizione</label>
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
