@extends("FaceWeb")

<?php $titre = "MonSite - Portfolio"; $titreservice = "Portfolio" ?>
@section('titre', $titre )

@section("contenue")

        @include("PageWeb.PartieWeb.Navbar")
        <div class="titre"><h1><?= $titreservice ?></h1></div>
        <p>
                Encours de Téléchargement ... 30%
        </p>
        @include("PageWeb.PartieWeb.Footer")

@endsection