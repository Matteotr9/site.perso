<?php
include 'Submit.php';
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>

    <script src="https://hcaptcha.com/1/api.js" async defer></script>


  </head>
  <style>
  h1 {
  text-align: center;
  margin: 35px 0 20px 0 !important;
}
</style>
<body>

      <?php include "index.php";?>
      <div id="centrer">
        <br><br><h1>Formulaire de Contact<h1></br></br>


           </div>
       <form  action="https://formsubmit.co/b7f4b0d16670afcedbed1d9035ee3090" method="POST"/>
         <input type="text" name="name" placeholder="Nom" required>
         <input type="email" name="email" placeholder="Email" required>
         <input type="text" name="text" placeholder="Numéro de téléphone" required max="10">

           <textarea type="text" name="subject" placeholder="Votre message" required=""></textarea>

             <div class="h-captcha" data-sitekey="5f54280e-2069-43ae-a4da-f3eac250e0e8">
             </div>

           <button type="submit" value="Envoyer">Envoyer</button>
          </div>

       </form>
      </body>
  </html>
