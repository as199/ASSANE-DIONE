<?php
/****** verificateur si le nom et le prenom sont valide******************************/
function verifnomprenom($chaine){
	if(preg_match("#^[A-Z]{1}[A-Za-z]{1,}#", $chaine)){
		$t=$chaine;
	}
	else
	{
		$t=" ";
	}

return $t;
}
 /************ corriger phrase complet******************/
  // fonction F3
function CorrigePhrases($texte)
{
//Nous allons tenter de recuperer l'ensemble des phrases.
if(preg_match_all("#[A-Za-z]{1}([^.!?]|([.][0-9]))*[.!?]#m", $texte,$phrases)){
//Recuperation des phrases et l'insertion dans un tableau...
  foreach ($phrases[0] as $value)
  {
    $value = preg_replace('#\s\s+#'," ", $value);// c'est une     espace
    $value = preg_replace('#\’\s+#',"’", $value);// C’  est
    $value = preg_replace('#\s+\’#',"’", $value);//C  ’est
    $value = preg_replace('#\'\s+#',"'", $value);//C'  est
    $value = preg_replace('#\s+\'#',"'", $value);//C  'est
    $value = preg_replace('#\(\s+#',"(", $value);//(   je suis belle)
    $value = preg_replace('#\s+\)#', ")",$value);//(je suis juste extraordinaire   )
    $value = preg_replace('#\s+,#', ",", $value);// une femme ambitieuse   ,que suis je
    $value = preg_replace('#,\s+#', ",", $value);//une femme battante,   que suis je
    $value = preg_replace('#\s+\.#', ".",$value);//il faut toujours etre patient  .
    $Tableau[]= $value;
  }
  foreach ($Tableau as $value)
  {
    if (preg_match("#^[a-z]#", $value))
    {
        $b=strtoupper($value[0]);
        $value = preg_replace("#^[a-z]#",$b, $value);
        $TabCorrige[] =$value; 
    }
        else
        {
            $TabCorrige[] =$value; 
        }
       
  }
  foreach ($TabCorrige as  $value) {
          // echo $value;
        } 
return  $value;
}

else{
  echo "<p>ERROR cette phrase n'as pas de fin!!!</p>";
}

}

/**********************************************************************/
 //GOOD CORRECTION NUMERO
    function correcteur_numero($numero){//ok
    
        $numero=preg_replace('#[ ]+#','',$numero);
        $numero=preg_replace('#[.]+#','',$numero);
        $numero=preg_replace('#(\\)+)#','',$numero);  
    
        return $numero;
    }
//numero validé sans les caracteres 
    function numeroValide($numero)//OK
    {   $numero=correcteur_numero($numero);
        if(preg_match('/^[7]{1}[5-80]{1}[0-9]{7}/',$numero) && strlen($numero)==9)
        {
            return $numero;
        }
    }
    // $p=778263676;
    //  echo numeroValide($p);
        
    //numero identique
    function verifNumeroIdentique($nu1,$nu2)
    {
    	$num="";
    	$t=numeroValide($nu1);
    	$p=numeroValide($nu2);
        if( $t==$p)
        {
            $num = $t;
        }
        else {
        	$num="";
        }
        return $num;
    }
    // $t=778163676;
    // $p=778163676;
    //  echo verifNumeroIdentique($t,$p);

/****** verificateur si l'adresse est valide******************************/
function verifadresse($chaine){
	if(preg_match("#^[A-Za-z0-9]{5,}#", $chaine)){
		$t=$chaine;
	}
	else
	{
		$t=" ";
	}

return $t;
}

/**********************************************************************/

/****** verificateur si un numéro est valide******************************/
// function verifnumero($numero){
// 		if (preg_match('#(0|\+77)[1-8]( *[0-9]{2}){4}#', $numero)) {
// 		$t=$numero;
// 	}
// 	else
// 	//ligne tigo #222*4#
// 	{
// 		$t="c*mauvais ";
// 	}

// return $t;
// }
// echo verifnumero("+77778563676");
/**********************************************************************/

?>