@extends('./FaceWeb')

{{-- POUR LE TITRE --}}
<?php $titre = "MonSite - Accueil"; $titreservice = "Service" ?>
@section('titre', $titre )


{{-- POUR LE CONTENUE --}}
@section("contenue")

       @include("PageWeb.PartieWeb.Navbar")

       <main>
              {{-- <section id="lien">
                     <h1>home</h1>
              </section> --}}
              <section id="lien">
                     <h1>service</h1>
                     <p>
                            Encours de Téléchargement ... 30%
                    </p>
              </section>
              <div id="font">image</div>
              <section id="lien">
                     <h1>portfolio</h1>
                     <p>
                            Encours de Téléchargement ... 30%
                    </p>
              </section>
              <section id="lien">
                     <h1>blog</h1>
                     <p>
                            Encours de Téléchargement ... 30%
                    </p>
              </section>
              <section id="lien">
                     <h1>contacte</h1>
                     <div class="container">
                            <div class="contacte">
                                    <div>
                                            <h2>Address</h2>
                                            <p>TOGO - LOME  <br> Bè-Klikamé</p>
            
                                    </div>
                                    <div>
                                            <h2>Phone</h2>
                                            <p>+228 71 65 06 99</p>
                                            <p></p>
                                    </div>
                                    <div>
                                            <h2>Email</h2>
                                            <p>kpingashafiou@gmail.com</p>
                                            <p></p>
                                    </div>
                            </div>
                            <div class="message">
                                    <form class="form-group" action="" method="post">
                                            @csrf
                                            <label for="nom">NOM</label>
                                            <input class="form-control inf"  type="text" name="nom" id="nom" >
                                            <label for="email">EMAIL</label>
                                            <input class="form-control inf" type="email" name="email" id="email" >
                                            <label for="sujet">SUJET</label>
                                            <input class="form-control inf" type="text" name="sujet" id="sujet" >
                                            <label for="message">Votre Message</label>
                                            <textarea class="form-control inf" name="message" id="" cols="30" rows="10" id="message"></textarea> 
                                            <button class="form-control btn btn-primary inf" type="submit">Envoyer</button>
                                    </form>
                            </div>
                    </div>
              </section>
       </main>

       @include("PageWeb.PartieWeb.Footer")
 
@endsection

