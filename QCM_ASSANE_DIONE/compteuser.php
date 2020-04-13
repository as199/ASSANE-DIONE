
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style >
      #containerform{
        margin-left: auto;
        margin-right: auto;
        width: 60%;
       height: 590px;
        background-image: url(images/icones/img-bg.jpg);
        background-repeat: no-repeat;


      }
      .div1{
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 70px;
        background-color: rgb(5, 36, 38);
      }
      #icone{
        width: 10%;
        float: left;
        height: 70px;
        /*background-color: violet;*/
        background-image: url(images/icones/image.jpeg);
        background-size: 100% auto;
        background-position: absolute;
      }
      #cadre2{
        width: 90%;
        height: 60px;
        float: right;
        background-color: yellow;
      }
      .formcompteuser{
        background-color: rgb(82, 86, 89);
       

      }
      .div2{
        margin-left: auto;
        margin-right: auto;
        width: 80%;
       
      }
      .div2a{
       width: 100%;
        height: 500px;
        margin-top: 5px;
         border-radius: 7px;
      }
      .div2b{
        width: 60%;
        height: 475px;
        background-color: white;
        float: left;
      }
      .div2c{
        width: 40%;
         height: 475px;
        background-color: white;
        float: right;
      }
      .div2b1{
        width: 100%;
        height: 50px;
      }
      .div2b2{
        width: 100%;
        height: 1px;
        border:1px solid rgb(228, 228, 228);
      }
      .prdiv2b3{
        margin-left: 20px;
    /* margin-right: auto; */
    height: 44px;
     width: 85%;
    border: 1px solid #0273dd;
    border: 1px solid rgba(0,0,0,0.4);
    background-color: rgb(247, 247, 247);
    border-radius: 8px;
      }
      .coldiv2b3{
        margin-top: 1px;
      }
      .validercoldiv2b3{
        background-color: rgb(80, 191, 208);
        margin-left: 92px;
         height: 35px;
        width: 40%;
        border-radius: 5px;
        color: aliceblue;
        font-weight: 800;
      }
      #moncerclediv2c1{
      /*background: #bfd70e;*/
      border-radius: 50%;
      width: 180px;
      height: 180px;
      border: 2px solid rgb(80, 191, 208);
      margin-left: 40px;
      margin-top: 40px; 
    }
    .btn6cadre2c{
   font-weight: bold;
    font-size: 30px;
    height: 70px;
    width: 50%;
    margin-left: 25%;
    color: white;
    margin-top: 10px;
}
#cadre2compteuser{
  padding-top: 10px;
}
.labeldiv2b1a{
    margin-left: 20px;
    font-size: 18px;
    font-weight: bolder;
    padding-top: 3px;
    font-family: sans-serif;
}
.labeldiv2b1b{
    margin-left: 20px;
    font-size: 13px;
    padding-top: 3px;
    font-family: sans-serif;
}
#preview img{
     border-radius: 50%;
      width: 180px;
      height: 180px;

   }
    </style>
</head>
<body >
  <form class="formcompteuser" method="post" action="" enctype="multipart/form-data">
    <div  id="containerform">
      <div class="div1">
          <div  id="icone">
            
          </div>
          <div id="cadre2compteuser">

                 <h2 class="btn6cadre2c" for="">
                    Le plaisir de jouer
                </h2>
          </div>
    </div>
    <div class="div2">
        <div class="div2a"><!-- contient les deux parties  -->
          
         <div class="div2b"><!-- contient la partie de gauche -->
              <div class="div2b1"><!-- debut div2b1 -->
                  <label class="labeldiv2b1a">S'INSCRIRE</label><br>
                  <label class="labeldiv2b1b">Pour tester votre niveau de culture générale</label>
              </div><!-- fin div2b1 -->
              <div class="div2b2"><!-- debut div2b2 -->
                
              </div><!-- fin div2b2 -->
              <div class="div2b3"><!-- debut div2b3 -->
                  <div class="coldiv2b3">
                    <label>Prenom</label><br/>
                    <input class="prdiv2b3" type="text" name="prenom" placeholder="Votre prenom " required>
                  </div>
                  <div class="coldiv2b3">
                    <label>Nom</label><br/>
                    <input class="prdiv2b3" type="text" name="nom" placeholder="Votre nom " required>
                  </div>
                  <div class="coldiv2b3">
                    <label>Login</label><br/>
                    <input class="prdiv2b3" type="text" name="login" placeholder="Votre login " required>
                  </div>
                  <div class="coldiv2b3">
                    <label>Password</label><br/>
                    <input class="prdiv2b3" type="Password" name="password" placeholder="Votre Password " required>
                  </div>
                  <div class="coldiv2b3">
                    <label>Confirmation Password</label><br/>
                    <input class="prdiv2b3" type="Password" name="cpassword" placeholder="Votre Password " required>
                  </div>
                  <div class="coldiv2b3">
                       <label>avatar</label><input type="file" onchange="handleFiles(files)" id="upload"  name="file" style="float: right;">
                  </div>
                  <br/>
                  <div class="coldiv2b3">
                      <input class="validercoldiv2b3"  type="submit" name="validerr" value="Créer compte" >
                  </div>
              </div><!-- fin div2b3 -->
              
         </div><!-- fin  partie de gauche -->
            <div class="div2c"><!-- contient la partie de droite -->
                <div class="div2c1">
                   <div id="moncerclediv2c1"><span id="preview"></span></div>
                </div>
            </div><!-- fin  partie de droite -->
        </div><!-- fin  des deux parties  -->
    </div>
    <div class="div3"></div>
    </div>
    
  </form>
     <?php 
             if(!empty($_POST)){
              /***************************************************/
                $target_dir = "images/";
                  $target_file = $target_dir . basename($_FILES["file"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  // Check if image file is a actual image or fake image
                  if(isset($_POST["submit"])) {
                      $check = getimagesize($_FILES["file"]["tmp_name"]);
                      if($check !== false) {
                          echo "File is an image - " . $check["mime"] . ".";
                          $uploadOk = 1;
                      } else {
                          echo "File is not an image.";
                          $uploadOk = 0;
                      }
                  }
                  // Check if file already exists
                  if (file_exists($target_file)) {
                      echo "Sorry, file already exists.";
                      $uploadOk = 0;
                  }
                  // Check file size
                  if ($_FILES["file"]["size"] > 500000) {
                      echo "Sorry, your file is too large.";
                      $uploadOk = 0;
                  }
                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif" ) {
                      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                      $uploadOk = 0;
                  }
                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                      echo "Sorry, your file was not uploaded.";
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                          // echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                          $photo=basename( $_FILES["file"]["name"]);
                          // echo $photo;
                      } else {
                          echo "Sorry, there was an error uploading your file.";
                      }
                  }

              /**************************************************/
                   $message[] = array();
                  $nom=$_POST['nom'];
                  $prenom=$_POST['prenom'];
                  $login=$_POST['login'];
                  $password=$_POST['password'];
                  $cpassword=$_POST['cpassword'];
                  // $photo=$_POST['file'];
                  $type='user';
                  if($password==$cpassword){
                         $message['prenom']=$prenom;
                         $message['nom']=$nom;
                         $message['login']=$login;
                         $message['password']=$password;
                         $message['photo']=$photo;
                         $message['type']=$type;
                         $message['id']= date("dmYHis");
                        $js = file_get_contents('base.json');
                         $js =json_decode($js,true);
                         $js[]=$message;
                         $js= json_encode($js);
                         file_put_contents('base.json', $js);
                        }
                  }
           ?>
</body>
</html>
 <div></div>
  <script>
 function handleFiles(files) {
   var imageType = /^image\//;
   for (var i = 0; i < files.length; i++) {
   var file = files[i];
   if (!imageType.test(file.type)) {
     alert("veuillez sélectionner une image");
   }else{
     if(i == 0){
       preview.innerHTML = '';
     }
     var img = document.createElement("img");
     img.classList.add("obj");
     img.file = file;
     preview.appendChild(img); 
     var reader = new FileReader();
     reader.onload = ( function(aImg) { 
     return function(e) { 
     aImg.src = e.target.result; 
   }; 
  })(img);

 reader.readAsDataURL(file);
 }
 
 }
}
 </script>