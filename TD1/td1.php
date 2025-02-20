<?php 
    require("tbs_class.php");
    $tbs = new clsTinyButStrong;

    class HelloWorld{
        private $n;

        function __construct($n){
            $this->n = $n;

        }

        public function retournerN(){
            return $this->n;
        }
    }
    $hw = new HelloWorld(2);
    $valeur = $hw->retournerN();

    class Tableau{
        private $t;

        function __construct($param_ta){
            $this->t = $param_ta;
        }

        public function retourne(){
            return $this->t;
        }
    }

    $tab = new Tableau(array("Valeriia" => 16, "Vadim" => 12));
    $chaine = $tab->retourne();

    $tbs->LoadTemplate("gab1.tpl.td1.html");
    $tbs->MergeBlock("chaine",$chaine);
    $tbs->Show(); 

?>

