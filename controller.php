<?php
switch ($action)
{
    case 'reponse':
    {
        $key=$_REQUEST["horoscope"];
        include 'reponse.php';
    break;
    }

    case'connexion':
        {
            $login=$_REQUEST['login'];
            $mdp=$_REQUEST['mdp '];
            $flag=false;

            foreach($login as $t){
                foreach($t as $k=>$v){
                    if($login==$k && $mdp==$v);
                    $flag=true;
                }
            }

            if($flag){
                include 'choix.php';
            } 
            else{
                include 'connexion.php';
            } 
            break;
        }

    default:
    { include 'choix.php'; }
}
?>