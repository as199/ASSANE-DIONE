<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>exo4</title>
    <style>
    .form1{

        width:60%;
        height:320px;
        margin-left:auto;
        margin-right:auto;
    }
     .form2{
        border:solid 2px;
        width:60%;
        height:300px;
        margin-left:auto;
        margin-right:auto;
    }
    .container1{
        width: 50%;
         margin-left: auto;
        margin-right: auto;
    }
     .container1 .label1{
       
         margin-left: 20px;
       
    }
     .container1 .area{
         margin-top:25px;
     }
      .container1 .input1{
            margin-top: 25px;
            width: 150px;
            height: 50px;
            margin-left: 100px;
            background-color:green;
     }
     p{
      color: red;
      font-size: 15px;
     }
    </style>
</head>
<body>
<form class="form1" action="" method="post">
<div class="container1">
<label class="label1">Saisir votre texte</label><br>
<textarea class="area" type="texte" name="phrase" placeholder="Entrer un texte" required="required" cols="40" rows="10"></textarea>
<input class="input1" type="submit" value="valider">
</div>
</form>
    <?php
  include'fonctions.php';

    if (!empty($_POST)) {
      if (!empty($_POST['phrase'])) {
        echo '<div class="container1">';
        echo "Les phrases corrigées :";
        echo'</div>';
        ?>
        <div class="form2">
        <?php
           CorrigePhrases($_POST['phrase']) ;
        // echo ucfirst($chaine) ;
        echo'<br>';
        
        // echo ($txt);
        ?>
        </div>
       <?php         
        }
       
      }
        ?>
</body>
</html>