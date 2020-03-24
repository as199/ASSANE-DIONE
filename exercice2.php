<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<style>
     
      form {
    /* Uniquement centrer le formulaire sur la page */
    margin: 0 auto;
    width: 500px;
    /* Encadré pour voir les limites du formulaire */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
  }
  
  form div + div {
    margin-top: 1em;
  }
  
  label {
    /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
    clear: both;
    display: inline-block;
    width: 90px;
    text-align: right;
  }
  
  input, textarea {
    /* Pour s'assurer que tous les champs texte ont la même police.
       Par défaut, les textarea ont une police monospace */
    font: 1em sans-serif;
  
    /* Pour que tous les champs texte aient la même dimension */
    width: 300px;
    box-sizing: border-box;
  
    /* Pour harmoniser le look & feel des bordures des champs texte */
    border: 1px solid #999;
  }
  
  input:focus, textarea:focus {
    /* Pour souligner légèrement les éléments actifs */
    border-color: #000;
  }
  
.container {
    float: center;
   
    background-color: azure;
   
    margin-top: 50px;
}
.taille {
    clear: both;
    padding: 50px;
    margin-left: 50px;
    font: 1em sans-serif;
    width: 300px;
}
.button {
    /* Pour placer le bouton à la même position que les champs texte */
    padding-left: 40px 100px; /* même taille que les étiquettes */
  }
  
  button {
    /* Cette marge supplémentaire représente grosso modo le même espace que celui
       entre les étiquettes et les champs texte */
    margin-left: .8em;
  }
      .table{
          margin:20px 0px 0px  35%;
          width: 350px;
          height: 140px;
          background: black;
          padding: 0px;
      }
      .ligne:nth-child(even){
          background: #ccf;
          border: solid 5px black !important;
      }
      .ligne:nth-child(odd){
          background: #ccc;
          border: solid 5px black !important;
      }
      .mois{
          padding-left:15px;
          border-collapse: collapse;
          margin: -20px !important;
      }
      .numero{
          text-align: center;
          padding: 5px !important;
          margin: -20px !important;
          border-collapse: collapse;
      }
</style>

<body>
     
 <div class="container">
        <form  method="post">
            <fieldset>
                <legend>Calendrier</legend>
                <div>
                    <label for="name">Choisissez votre langue:</label>
                     <select name="choix" id="langue">
                    <option value="none">None</option>
                    <option value="francais">FRANCAIS</option>
                    <option value="anglais">ANGLAIS</option>
                </select><br>
                </div>
                
                <div class="button">
                    <button type="submit"> valider </button>
                </div>
            </fieldset>
        </form>
</div>

</body>
</html>
      <?php
      if (!empty($_POST)) {
            function Langue(array $tab){
                $n= 0;
                echo '<table class="table">';
                for($i=0 ; $i<4; $i++){
                    echo '<tr class="ligne">';
                    for($j =0; $j<3; $j++){
                        echo '<td class="numero">';
                        echo  $n+=1 ;
                        echo "</td>";
                        echo '<td class="mois">'.$tab[$i][$j].'</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
            }
       $calendar= array(
                    array("Janvier","Février","Mars"),
                    array("Avril","Mai","Juin"),
                    array("Juillet","Août","Septembre"),
                    array("Octobre","Novembre","Decembre"));

       $calendar1=array(
                    array("Janvary","February","Mars"),
                    array("April","May","Jun"),
                    array("July","August","September"),
                    array("October","November","December"));

       if($_POST['choix']=="francais"){
           Langue($calendar);
       }elseif($_POST['choix']=="anglais"){
           Langue($calendar1);
       }else{
           print "Ah vous ne parler ni l'anglais ni le françasi";
       }
}
       ?>
