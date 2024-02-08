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
            $mdp=$_REQUEST['mdp'];
            $flag=false;

            foreach($connexion as $t){
                if(isset($t[$login]) && $mdp==$t[$login])
                $flag=true; 
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
    { include 'connexion.php'; }
}
?>