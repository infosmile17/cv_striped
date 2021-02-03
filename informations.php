<?php include_once('header.php'); ?>


<article class="box post post-excerpt">
    <header>
        <h2>Informations personnelles</h2>
    </header>

    <div class="info">
        <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
        <ul class="stats">
            <li><a href="#" class="icon fa-comment">16</a></li>
            <li><a href="#" class="icon fa-heart">32</a></li>
            <li><a href="#" class="icon brands fa-twitter">64</a></li>
            <li><a href="#" class="icon brands fa-facebook-f">128</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="/action_page.php">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nomprenom">Nom et Prenom:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomprenom" placeholder="Nom et Prenom" name="nomprenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Telephone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tel" placeholder="Enter password" name="tel">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <section id="portfolio" class="four">


            <form>
                <div>
                    <label for="photo">Votre photo</label> <br><br><br>
                    <input type="file" id="photo" accept="image/png, image/jpeg" name="photo"><br><br><br>
                    <label for="fileinput">Votre Nom et Prénom</label> <br>
                    <input type="text" id="nom"><br>
                    <label for="fileinput">Votre métier</label> <br>
                    <input type="text" id="metier"><br>
                    <label for="fileinput">Adresse postale</label> <br>
                    <input type="text" id="adresse"><br>

                    <label for="fileinput">Téléphone</label> <br>
                    <input type="number" id="nom"><br>

                    <label for="fileinput">Date de naissance</label> <br>
                    <input type="date" id="date" width="100%"><br>
                </div>
            </form>

        </section>

        <div class="doc-submit-container" id="doc-submit-container">
            <input type="button" id="doc-previous-tab" class="doc-nav-tabs" value="Précédent" disabled="">
            <input type="button" id="doc-next-tab" class="doc-nav-tabs" value="Suivant" style="width: 144.359px;">
            <input type="submit" id="doc-save" class="doc-submit" value="Créer mon CV" style="display: none; width: 144.359px;"><br>
            <input type="submit" id="doc-continue-later" class="doc-submit" value="Enregistrer et continuer plus tard">
            <div style="clear:both;"></div>
        </div>
</article>

</div>
</div>
<?php
include_once('navbar.php');

?>

<!-- Search -->
<section class="box search">
    <form method="post" action="#">
        <input type="text" class="text" name="search" placeholder="Search" />
    </form>
</section>

<!-- Text -->
<?php
include_once('recent_cv.php');

?>
<!-- Calendar -->
<?php
include_once('calendar.php');
?>
</div>
<?php
include_once('footer.php');

?>