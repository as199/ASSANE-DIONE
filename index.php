
<!DOCTYPE html>
<html>
<head>
    <?php
    $n="";
                 $p="";
                  $a="";
                   $t="";
                    $ct="";
                     $co="";
    ?>

    <title></title>
    <link rel="stylesheet" type="text/css" href="messages.css">
</head>
<body>
    <div class="principale">
        <div class="entete"><marquee><h2>Veuillez remplir les champs ci-dessous!</h2></marquee></div>
        <div class="container">
            <form method="post" action="index.php">
            <div class="gauche">
                <div class="container2">
                <div class="col">
                <label>Nom</label><br/>
                <input class="pr" type="text" name="nom" placeholder="Votre nom " value="<?php if(!empty($_POST['nom'])){echo $n;} ?>" required>
            </div>
            <div class="col">
                <label>Prenom</label><br/>
                <input class="pr" type="text" name="prenom" placeholder="Votre prenom "value="<?php if(!empty($_POST['prenom'])){echo $p;} ?>" required>
            </div>
            <div class="col">
                <label>Adresse</label><br/>
                <input class="pr" type="text" name="adresse" placeholder="Votre Adresse *"value="<?php if(!empty($_POST['adresse'])){echo $a;} ?>" required>
            </div>
            <div class="col">
                <label>Numéro</label><br/>
                <input class="pr" type="number" name="numero" placeholder="Votre Numéro *"value="<?php if(!empty($_POST['numero'])){echo $t;} ?>" required>
            </div>
            <div class="col">
                <label>Confirmation Numéro</label><br/>
                <input class="pr" type="number" name="cfnumero" placeholder="Votre Numéro *" value="<?php if(!empty($_POST['cfnumero'])){echo $cf;} ?>" required>
            </div>
            <div class="col">
                 <label>Genre</label><br/>
                 <select class="pr" name="genre"  required>
                        <option value="">--Please choose an option--</option>
                        <option value="homme">Homme</option>
                        <option value="femmme">Femme</option>
                </select>
                
            </div>
            
            </div>
            </div>
            <div class="droite">
                <div class="container2">
                <div class="col">
                <label>Satisfait</label><br/>
                <select class="pr" name="satisfait"  required>
                        <option value="">--Please choose an option--</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                </select>
                
            </div>
            <div class="coll">
                <label>Langue</label><br/>
                <div class="gauchel">
                    <label class="labell">Français</label><input class="checkl" type="checkbox" name="francais"><br/>
                <label class="labell">Anglais</label><input class="checkl" type="checkbox" name="anglais">
                </div>
                <div class="droitel">
                    <label class="labell">Espagnole</label><input class="checkl" type="checkbox" name="espagnole"><br/>
                <label class="labell">Portugais</label><input class="checkl" type="checkbox" name="Portuguais">
                </div>
                
                
                <!-- <select class="pr" name="langue"  required>
                        <option value="">--Please choose an option--</option>
                        <option value="francais">Français</option>
                        <option value="anglais">Anglais</option>
                        <option value="espagnole">Espagnole</option>
                        <option value="Portuguais">Portugais</option>
                        
                </select> -->
                <!-- <input class="pr" type="text" name="langue" placeholder="Votre Langue *"> -->
            </div>
            <div class="colzonec">
                <label>Zone de Commentaire</label><br/>
                <textarea class="pr2" type="text"cols="40" rows="10" name="commentaire" placeholder="Votre commentaire *"value="<?php if(!empty($_POST['commentaire'])){echo $co;} ?>" required></textarea>
            </div>
            
            
            </div>
            </div>
            <div class="bas">

                <div class="gb"><input class="button1" type="submit" name="valider" value="Valider"></div>
                <div class="db"><input class="button2" type="reset" name="annuler" value="Annuler"></div>
            </div>
            </form>
            <?php
           $message = array();
            include 'fonctionmessage.php';
            if(!empty($_POST['valider'])){
                $meslangue="";
                if(!empty($_POST['francais'])){
                    $f="F";
                }
                else
                {
                    $f="";
                }
                if(!empty($_POST['anglais'])){
                    $a="A";
                }
                else
                {
                    $a="";
                }
                if(!empty($_POST['espagnole'])){
                    $e="E";
                }
                else
                {
                    $e="";
                }
                if(!empty($_POST['Portuguais'])){
                    $p="P";
                }
                else
                {
                   $p=""; 
                }
                $meslangue=$f.','.$a.','.$e.','.$p;
                $nom=verifnomprenom($_POST['nom']);
                $prenom=verifnomprenom($_POST['prenom']);
                $adresse=verifadresse($_POST['adresse']);
                $numero=numeroValide($_POST['numero']);
                $cnumero=numeroValide($_POST['cfnumero']);
                $genre=$_POST['genre'];
                $satisfait=$_POST['satisfait'];
                $langue=$meslangue;
                
                $commentaire=CorrigePhrases($_POST['commentaire']);
                if(empty($nom)||empty($prenom)||empty($adresse)||empty($numero)||empty($cnumero)||empty($genre)||empty($genre)||empty($satisfait)||empty($langue)||empty($commentaire)){
                    echo "bakhulllllllll!!!!!!!!!!!!!!!!!!";
                    $n=$_POST['nom'];
                    $p=$_POST['prenom'];
                    $a=$_POST['adresse'];
                    $t=$_POST['numero'];
                    $ct=$_POST['cfnumero'];
                    $co=$_POST['commentaire'];
                }
                else
                {$n="";
                 $p="";
                  $a="";
                   $t="";
                    $ct="";
                     $co="";
                    if (verifNumeroIdentique($numero,$numero)) {

                       $message['prenom']=$prenom;
                       $message['nom']=$nom;
                       $message['adresse']=$adresse;
                       $message['numero']=$numero;
                       $message['genre']=$genre;
                       $message['satisfait']=$satisfait;
                       $message['langue']=$langue;
                       $message['commentaire']=$commentaire;
                       $message['id']= date("dmYHis");

                       $js = file_get_contents('messages.json');
                       $js =json_decode($js,true);
                       $js[]=$message;
                       $js= json_encode($js);
                       file_put_contents('messages.json', $js);


                      
                    }

                }
                $messages = file_get_contents('messages.json');
                $messages = json_decode($messages, true);
                 if( count($messages)>1){
                         include"messages.php";
                       }
            }
            ?>
        </div>
        
    </div>
</body>
</html>
