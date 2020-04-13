<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>mini</title>
</head>
<body id="body1">
    <div id="container2">
        <div class="input6">
          <!-- <img src="./images/icones/icone4.jpg"> -->
        </div>
        <div class="input7">
            <div class="input8">
                <label class="btn6" for="">
                Le plaisir de jouer
            </label>
            </div>
        </div>
    </div>
     <form method="post" action="" >
   <div class="container1">
        <div class="container">
    <div class="menu1">
       <div class="input5">
           <label class="btn5" > Login Form</label>
       </div>
    </div>
    <div class="menu2">
         <div class="input1">
             
          <input class="btn1" type="text" name="login" id="" placeholder="login" required><!-- <img src="./images/icones/ic-login.png" alt="password" >
             -->
        </div>
        
        <div class="input2">
            <input class="btn2" type="password" name="password" id="" placeholder="password" required>
        </div>
    </div>
    <div class="menu3">
        <div class="input3">
            <input class="btn3" type="submit" value="Connexion" name="submit" id="">
        </div>
        <div class="input4">
           <a class="btn4" href="compteuser.php"> S'inscrire pour jouer</a>
        </div>
    </div>
    </div>
   </div>
    </form>
    <?php
    if(!empty($_POST['submit'])){
      $_SESSION['photo']="";
      $_SESSION['prenom']="";
      $_SESSION['nom']="";
        $login=$_POST['login'];
         $password=$_POST['password'];

        $messages = file_get_contents('base.json');
        $messages = json_decode($messages, true);
        for ($i=0; $i <count($messages) ; $i++) {

          if($messages[$i]['login']==$login AND $messages[$i]['password']==$password ){
            if($messages[$i]['type']=="adminitrateur"){
              $_SESSION['photo']=$messages[$i]['photo'];
              $_SESSION['prenom']=$messages[$i]['prenom'];
              $_SESSION['nom']=$messages[$i]['nom'];
              
               header ("location:./creerquestion.php");
            }
            elseif ($messages[$i]['type']=='user') {
                     $_SESSION['photo']=$messages[$i]['photo'];
                    $_SESSION['prenom']=$messages[$i]['prenom'];
                    $_SESSION['nom']=$messages[$i]['nom'];
                  header ("location:./joueur.php");
              # code...
            }
            else{
              echo "l'utilisateur n'appartient à aucun type";
            }
     }
     else{
      echo "l'utilisateur n'appartient à aucun type";
     }
    }
  }
    ?>
</body>
</html>
