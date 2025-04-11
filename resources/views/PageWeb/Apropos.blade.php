@extends("FaceWeb") 

<?php $titre = "MonSite - À propos"; $titreservice = "À propos" ?>
@section('titre', $titre )

@section("contenue")

        @include("PageWeb.PartieWeb.Navbar")
        <div class="titre"><h1><?= $titreservice ?></h1></div>
        <main>
                <div class="container Apropos">
                        <div>
                                <h1>À propos de moi</h1>
                                <p>
                                        Je m'appelle KPINGA Safiou, j'ai 29 ans et je suis passionné par le développement web. Après avoir suivi des formations en ligne et réalisé plusieurs projets personnels,
                                        je me lance en freelance pour aider les petites entreprises et les particuliers à créer leur présence en ligne.
                                </p>
                                <ul>
                                        <li>
                                                <span>HTML5, CSS3, JavaScript (basique), C, PHP</span>
                                        </li>
                                        <li>
                                                <span>LARAVEL 10</span>
                                        </li>
                                        <li>
                                                <span>Création de sites vitrine</span>
                                        </li>
                                        <li>
                                                <span>
                                                        Outils : Visual Studio Code, Git.     
                                                </span>
                                        </li>
                                        <br>
                                        <P>
                                                Je suis motivé, curieux et toujours prêt à relever de nouveaux défis !
                                        </P>
                                </ul>
                        </div>
                        <div class="image">
                                <img src="\image\font_image\premium_photo-1720287601300-cf423c3d6760.avif" alt="image"  srcset="">
                        </div>
                </div>
        </main>
        @include("PageWeb.PartieWeb.Footer")

@endsection