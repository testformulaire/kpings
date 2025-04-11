@extends("FaceWeb")

<?php $titre = "MonSite - Contacte"; $titreservice = "Contacte" ?>
@section('titre', $titre )

@section("contenue")

        @include("PageWeb.PartieWeb.Navbar")
        <div class="titre"><h1><?= $titreservice ?></h1></div>
        <main class="info">
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
        </main>
        @include("PageWeb.PartieWeb.Footer")

@endsection