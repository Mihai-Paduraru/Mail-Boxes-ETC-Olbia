<x-layout>

    <header class="container-fluid  m-0  d-flex flex-column justify-content-center">
        <img src="/media/header.png" class="img-fluid" alt="img header">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                
            </div>
        </div>
    </header>

    @if(session('flash'))
        <div class="alert header-alert align-self-center bg-dcol text-white my-4">
            <div>{{session('flash')}}!</div>
        </div>
    @endif

    <div class="container p-5 ">
        <div class="row">
          <div data-aos="fade-up" class="col-12 info-contact">
            <p class="text-center fs-2 fw-bold">Spedizioni a Olbia e non solo.</p>
            <p class="text-center fs-3">Il Centro MBE 3275 di Olbia, Viale Aldo Moro 124, è altamente specializzato nei servizi di imballaggio professionale e spedizione: spedizioni nazionali, internazionali e su misura. I servizi sono offerti su tutta la provincia di Sassari e non solo.

                Inoltre sono disponibili servizi postali e di domiciliazione, stampa digitale, fotocopie e fax, vendita di materiale per imballaggio e prodotti per ufficio.
                
                MBE 3275 Olbia è anche in grado di prendere in carico la gestione di processi legati alla micrologistica della tua azienda.
                
                Contattaci per qualsiasi necessità o preventivi.</p>
                
          </div>
        </div> 
    </div>
    
    <div data-aos="fade-up" class="container p-3 d-flex justify-content-center">
        <button><a href="{{route('contact.store')}}">contataci per una spedizione</a></button>
    </div>
    
    <div class="container-fluid p-5">
        <div class="row">
          <div data-aos="fade-up" class="col-12 col-md-4 info-contact">
            <img src="/media/info/post.png" class="img-fluid " alt="infografica posta">
            <h2>Spedizioni nazionali MBE</h2>
            <p>Mail Boxes Etc. gestisce le tue spedizioni in tutta Italia, sia che tu debba spedire un singolo pacco sporadicamente, sia che le tue spedizioni siano continuative e strutturate. In base alle necessità di tempi e servizio ti viene messo a disposizione il miglior corriere espresso che risponde alla tue esigenze.

              Il servizio di spedizione nazionale può comprendere ritiro a domicilio o in azienda - quotidiano o a chiamata - monitoraggio costante del transito, avviso di consegna via e-mail o per telefono, riepilogo delle operazioni effettuate e fatturazione su base mensile.</p>
          </div>
          <div data-aos="fade-up" class="col-12 col-md-4 info-contact">
            <img src="/media/info/contact.png" class="img-fluid" alt="infografica contato">
            <h2>Contataci</h2>
            <p>contataci cosi possiamo metterci in contatto con lei ed organizzare la sua spedizione in modo facile e sicuro</p>
          </div>
          <div data-aos="fade-up" class="col-12 col-md-4 info-contact">
            <img src="/media/info/procesing.png" class="img-fluid" alt="infografica procedimento">
            <h2>MBE SafeValue</h2>
            <p>LE TUE SFIDE QUOTIDIANE NELLE NOSTRE MANI.
              MBE SafeValue è la soluzione completa per spedire i tuoi oggetti di valore grazie ad un servizio professionale di copertura, che tutela il tuo prodotto dal ritiro alla consegna. 
              Con MBE SafeValue puoi contare su una soluzione specifica per proteggere i tuoi oggetti di valore, mettendoti al sicuro da eventuali danni o smarrimenti.</p>
          </div>
        </div> 
    </div>
    
</x-layout>
