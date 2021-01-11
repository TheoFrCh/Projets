<?php
$metaDescription = "Voici le site servant de support à mon CV";
$metaTitle = "CV Théo";
require 'header.php';
?>
<main>
    <h1 id="CV">CV</h1>
    <p>Je m'appelle <span class="prenom">Théo Chiron</span> j'étudie actuellement le HTML au campus numérique de
        Valence</p>

    <section id="comphob">
        <div class="comp">
            <h3>Compétences</h3>
            <ul>
                <li>Utilisation d'internet</li>
                <li>Bonne compréhension de l'anglais</li>
                <li>Autonome</li>
                <li>Algorithmie</li>
            </ul>
        </div>

        <div class="hob">
            <h3>Hobbies</h3>
            <ol>
                <li>Musique</li>
                <li>Jeux-Vidéos</li>
                <li>Informatique</li>
            </ol>
        </div>
    </section>

    <div class="tableau">
        <table>

            <caption><span class="exp">Experiences</span></caption>

            <tr>
                <td>
                    <h3>Professionelles</h3>
                    <p>Agent de production Pâtisserie PASQUIER Étoile-sur-Rhône</p>
                    <p>Diverses missions d’intérim</p>
                    <p>Stage de 5 semaines dans l'aménagement paysager</p>
                </td>

                <td>
                    <h3>Études</h3>
                    <p>Licence anglais LLCER</p>
                    <p>Baccalauréat STAV</p>
                    <p>Brevet</p>
                </td>
            </tr>
        </table>
    </div>
</main>