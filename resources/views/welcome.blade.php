<x-layout>

    <header class="container-fluid vh-100 m-0 header d-flex flex-column justify-content-center p-3">
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

    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-3 p-3">
                <div class="card"></div>
            </div>
            <div class="col-12 col-md-3 p-3">
                <div class="card"></div>
            </div>
            <div class="col-12 col-md-3 p-3">
                <div class="card"></div>
            </div>
        </div>
    </div>
    
</x-layout>
