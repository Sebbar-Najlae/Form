<?php
   @$civilite=$_POST["civilite"];
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$email=$_POST["email"];
   @$pass=$_POST["pass"];
   @$repass=$_POST["repass"];
   @$valider=$_POST["valider"];
   
   if(isset($valider)){
      if(empty($nom))
         $message='<div class="erreur">Nom laissé vide.</div>';
      elseif(empty($prenom))
         $message='<div class="erreur">Prénom laissé vide.</div>';
      elseif(empty($email))
         $message='<div class="erreur">Email laissé vide.</div>';
      elseif(empty($pass))
         $message='<div class="erreur">Mot de passe laissé vide.</div>';
      elseif($pass!=$repass)
         $message='<div class="erreur">Les mots de passe ne sont pas identiques.</div>';
      else{
         $message='<div class="rappel"><b>Rappel:</b><br />';
         $message.=$civilite.' '.ucfirst(strtolower($prenom)).' '.strtoupper($nom).'<br />';
         $message.='Email: '.$email;
         $message.='</div>';
      }
   }
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css">
   <head>
      <meta charset="ISO-8859-1" />
     
   </head>
   <body>
   <?php echo $message ?>
      <form name="fo" method="post" action="">
         <fieldset>
            <legend>Nouvel utilisateur</legend>
            <div class="label">Civilité</div>
            <div class="champ">
               <select name="civilite">
                  <option <?php if($civilite=="Mme") echo "selected";?>>Mme</option>
                  <option <?php if($civilite=="Mlle") echo "selected";?>>Mlle</option>
                  <option <?php if($civilite=="M.") echo "selected";?>>M.</option>
               </select>
            </div>
            <div class="label">Nom</div>
            <div class="champ">
               <input type="text" name="nom" value="<?php echo $nom?>" />
            </div>
            <div class="label">Prénom</div>
            <div class="champ">
               <input type="text" name="prenom" value="<?php echo $prenom?>" />
            </div>
            <div class="label">Email</div>
            <div class="champ">
               <input type="text" name="email" value="<?php echo $email?>" />
            </div>
            <div class="label">Mot de passe</div>
            <div class="champ">
               <input type="password" name="pass" value="<?php echo $pass?>" />
            </div>
            <div class="label">Confirmer le mot de passe</div>
            <div class="champ">
               <input type="password" name="repass" value="<?php echo $repass?>" />
            </div>
            <div class="champ">
               <input type="submit" name="valider" value="Valider l'inscription" />
            </div>
         </fieldset>
      </form>
      
   </body>
</html>