@extends('app')

@section('content')

 <!-- MAIN -->
 <main id="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Logo.jpg" class="d-bloc w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Img1.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 offset-md-6 text-md-right text-center">
                                <h1>Digimon Masters Online</h1>
                                <p class="d-none d-md-block"> Digimon Masters Online es el proyecto en linea precursor
                                    a Digimon Battle Online, que desde el 2010 esta rondando y arrazando con el internet,
                                    en cuanto a juegos de la franquicia de Digimon se tratan es el mejor en linea de la saga
                                    convinando hasta el momento un poco de absolutamente todas las temporadas para darle vida
                                    a este increible proyecto.   ~Akagami~
                                </p>
                                <a href="https://dmo.gameking.com/Download/GameDownload.aspx" class="btn btn-tecnoeduca">Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <a class="carousel-control-prev" href="#carousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </main>
    <!-- END MAIN -->

    <!-- CUERPO -->
    <section id="clase-online">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0 pr-0">
                    <img src="images/Ordine.jpg" alt="">
                </div>
                
                <div class="col-lg-6 pt-4 pb-4">
                    <h2>Actualizacion del 12 Marzo 2021</h2>
                    <p>
                        BIENVENIDO ORDINEMON!
                        Ordinemon es un nuevo digimon que se acaba de integrar a la familia digital, esta vez fusionando
                        a los digimons Ophanimon Falldown Mode y Raguelmon De las lineas de Meicomon y Salamon, para 
                        traernos a este especimen todo extraño de Ordinemon, Tiene un poco de digi en sus alas... 
                        No lo creen?.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="clase-online">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pt-4 pb-4">
                    <h2>Nueva Temporada del Coliseo "Se viene la Season 13!!"</h2>
                    <p>
                        Para La nueva temporada del coliseo los GM nos tienen preparado un nuevo repertorio de digimons
                        que estaran disponibles para derrotar e intentar llegar a la tan anelada Ronda 40 del coliseo,
                        de esta manera sacar nuestros 1073 puntos de cada ronda, animemonos esta vez el coliseo estara
                        abundate de digimons con atributo Virus - Darkness, estaremos viendo de vuelta a los Alphamon
                        Oriouken X y a los Omegamon X que son los que controlan el coliseo en rondas altas, carrear
                        a la gente que y a los amigos que lleven, aprovechen los puntos son jugosos y esta es una buena 
                        oportunidad para sacar sus 30 puntos semanales y asi poder convertirte en el mejor healer con
                        estos items de soporte que se pueden comprar o tambien los tan codiciados BU. 
                        Como extra, Megidramon X sera el poseedor de la ronda 40 alguno mas opina que es interesante ver
                        algo nuevo aqui? ~Akagami~
                    </p>
                </div>
                <div class="col-lg-6 pl-0 pr-0">
                    <img src="images/Ronda40.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- FIN DE CUERPO -->
@endsection
