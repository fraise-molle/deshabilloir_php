<?php require "header.php"; ?>

   <section>
       <div class="title-section">
              <h2>Me contacter</h2>
       </div>
       <div class="full-content">
                 <form class="formulaire">
                       <h4>Nom</h4>
                       <div class="nom"><textarea placeholder="Votre nom"></textarea>
                       </div>
                       <h4>Prénom</h4>
                       <div class="prenom"><textarea placeholder="Votre prenom"></textarea>
                       </div>
                       <h4>Mail</h4>
                       <div class="mail"><textarea placeholder="Votre mail"></textarea>
                       </div>
                       <h4>Objet</h4>
                       <div class="objet"><textarea placeholder="Votre objet"></textarea>
                       </div>
                       <h4>Message</h4>
                       <div class="message"><textarea placeholder="Votre message"></textarea>
                       </div>
                      <button class="buton2" name="Envoyer" type="submit" id="contact-submit">Envoyer</button>
                 </form>
                 <div class="coordonnees">
                    <div class="telephone">
                        <h3>Téléphone:</h3>
                        <p>06 75 57 56 60</p>   
                    </div>
                    <div class="email">
                        <h3>Mail:</h3>
                        <p>contact@le-deshabilloir.com</p>   
                    </div>
                    <div class="adresse">
                        <h3>Adresse:</h3>
                        <p>1 rue de l'atelier 33000 Bordeaux</p>   
                    </div>
                    <button class="button-contact">Télecharger le catalogue</button>   
                 </div>
                           
       </div>
       <img class="image-contact" src="images/mobilier-art-deshabilloir.jpg">
   </section>
<?php require "footer.php"; ?>