<?php require "header.php"; ?>

<section>
       <div class="title-section">
              <h1>HISTOIRE</h1>
       </div>
       <div class="full-content">
              
          <div>
                <div class='colonne-gauche'>
                  <h2>JULIETTE DE FERLUC</h2>
                  <p>Nichée en haut d’une grange, Juliette de Ferluc dessine, peint et fabrique ses créations à partir d’inspirations diverses.  Un premier objet, le berceau de sa fille en bois cintré, lui donne l’impulsion de cette aventure. Liant son travail de peintre, architecte d’intérieur et comédienne, cet atelier devient le lieu de rencontre où se déshabillent ses inspirations profondes. On retrouve comme matériau principal le cuivre d’où nait sa première ligne d’objets. En pleine création, un voyage dans les mines de cuivre dans le désert d’Atacama au Chili vient nourrir son travail. Inspiré par les couleurs du minerai, c’est le début d’un travail de chimie expérimental sur l’oxydation du cuivre. Après de longs mois de tests chimiques, Juliette de Ferluc s’empare d’une nouvelle technique pour peindre sur du cuivre en utilisant la réaction d’acides. </p>
                       <a class="btn" href="#">ENTRER EN CONTACT</a>
                  </div>
                
                 <div class="colonne-droite">
                    <img src="images/Juliette.png"> 
                 </div>
          </div>
        
          <div>
                   <img  src="images/video-deshabilloir.jpg">

          </div>


           <div class="carousel">
                <div class='colonne-gauche'>
                  <img src="images/juliette-de-ferluc.jpg"> 
                </div>
                
                 <div class="colonne-droite">

                   <h2>LE DÉSHABILLOIR</h2>
                    <p>Le  Déshabilloir est un atelier de création de mobiliers, lampes et objets d’art depuis 2014. C’est aussi un lieu de rencontre et de connexion où conversent les artistes, les artisans et les inspirés. Comme dans un théâtre, on aime y imaginer des scénographies pour raconter des histoires. La peinture, le théâtre et l’objet ; le Déshabilloir est un atelier de conversation. Des pièces uniques aux petites séries, l’objet d’art est une histoire qui se raconte dans le creux de l’oreille. </p>
                         <a class="btn" href="#">DÉCOUVRIR LES OEUVRES</a>
                 </div>
          </div>



            <div class="carousel">
 
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>

   
    <div id="carousel">
      <a href="#"><img src="images/Juliette.png" id="item-1" /></a>
      <a href="#"><img src="images/Juliette.png" id="item-2" /></a>
      <a href="#"><img src="images/Juliette.png" id="item-3" /></a>
      <a href="#"><img src="images/Juliette.png" id="item-4" /></a>
      <a href="#"><img src="images/Juliette.png" id="item-5" /></a>
      <a href="#"><img src="images/juliette.png" id="item-6" /></a>
      <a href="#"><img src="images/juliette.png" id="item-7" /></a>
      <a href="#"><img src="images/juliette.png" id="item-8" /></a>
      <a href="#"><img src="images/juliette.png" id="item-9" /></a>
    </div>

    <br/>
{
  flankingItems: 3,
  movingToCenter: function ($item) {
    $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
  },
  movedToCenter: function ($item) {
    $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
  },
  movingFromCenter: function ($item) {
    $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
  },
  movedFromCenter: function ($item) {
    $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
  },
  clickedCenter: function ($item) {
    $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
  }
}

    </div>
 



            </div>

 
      </div>
</section>
<?php require "footer.php"; ?>