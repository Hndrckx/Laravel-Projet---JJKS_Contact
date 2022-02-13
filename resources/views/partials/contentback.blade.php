@foreach ($teamBack as [$nom, $prenom, $fonction, $photo, $tel, $exp])
    <div class="d-flex justify-content-center mt-3">
        <section class=" col-4 d-flex">
            <div class="card w-50 mb-4 mx-auto bg-dark">
                <!-- Image d'illustration -->
                <img src="{{asset('img/'.$photo)}}" class="card-img-top" alt="Montagnes">
                <!-- En-tête de la carte -->
                <div class="card-header text-light text-center">
                    {{ $prenom }} {{ $nom }} => <span class="text-danger">{{$exp}}</span> 
                </div>

                <!-- Corps -->
                <div class="card-body d-flex flex-column justify-content-center align-items-start">
                        <a href="#" class="card-link text-light ms-3 ">{{$prenom}}.{{$nom}}@jjks.com</a>
                        <a href="#" class="card-link text-light">{{$tel}} </a>    
                </div>

                <!-- Pied -->
                <div class="card-footer p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="text-danger fw-bold">Back End</span> Develloper </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    @endforeach