<?php
$valeur="jdjdjhhh.f";
if (preg_match("/[1-9]/",$valeur)==1){
    echo"il ya de nembre dans votre str";
}else{ echo"il nya pas de nembre dans votre str";}
echo"<br>";
if (preg_match("/[@]/",$valeur)==1){
    echo"cest une adresse email";
}else{ echo"cest pas une adress email";}

echo "<br>";
$chaine="1235";
if(preg_match('/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/',$chaine)){
echo "numero de telephone";
}else if(preg_match('/^[a-z]{3}+[0-9]{2}+$/i',$chaine)){
echo "est Un matricule";

}else if(preg_match('/^[0-9]{5}$/',$chaine)){
echo "Un code postale";}

?>