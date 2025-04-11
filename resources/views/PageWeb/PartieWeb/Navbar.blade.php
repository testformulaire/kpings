<?php

       $titrePage = "";

?>

<nav>
       <div class="nav">
              <ul>
                     <li>
                            <a  href="{{ route("Acceuil") }}">Page d'accueil</a>  
                     </li>
                     <li>
                            <a  href="{{ route("Apropos") }}">À propos</a>
                     </li>
                     <li>
                            <a  href="{{ route("portfolio") }}">portfolio</a>
                     </li>
                     {{-- <li><a  href="#lien1">home</a></li> --}}
                     <li>
                            <a  href="{{ route("service") }}">service</a>
                     </li>
                     
                     <li>
                            <a  href="{{ route("blog") }}">blog</a>
                     </li>
                     <li>
                            <a  href="{{ route("contacte") }}">contacte</a>
                     </li>
              </ul>
              <div class="text">
                     <div class="image">
                            <img src="\image\font_image\premium_photo-1720287601300-cf423c3d6760.avif" alt="image"  srcset="">
                     </div>
                     <div class="phrase">
                            <h3>KPINGA Chafii - Développeur Web</h3>
                            <P>
                                   Passionné par le développement web, je crée des sites simples, efficaces et adaptés à vos besoins.
                                   En apprentissage constant,
                                   je mets tout en œuvre pour vous offrir des solutions web de qualité.
                            </P>
                            <div class="button">
                                   <a href="" class="btn btn-primary" type="button">Découvrez mes projets</a>
                                   <a href="" class="btn btn-primary" type="button">Contactez-moi</a>
                            </div>
                     </div>
              </div>
       </div>
</nav>