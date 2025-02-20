<?php 
    require("tbs_class.php");
    require("td2modele.class.php");
    $tbs = new clsTinyButStrong;
    $data = new FormData($_POST);
    $tab_assiociatif =  $data->retournePost() ? $data->retournePost() :"";

    $tabChamps = array();
    $tabValeurs = array();
    foreach ($tab_assiociatif as $cle => $val) {
        $tabChamps[] = $cle;
        $tabValeurs[] = $val;
    }

    $tbs->LoadTemplate("td2vue.tpl.html");
    $tbs->MergeBlock("champs",$tabChamps);
    $tbs->MergeBlock("values",$tabValeurs);

    $tbs->Show(); 

?>

