<?php

class FormData{
    private $post_data;

    function __construct($post_param){
        $this->post_data = $post_param;
    }

    public function  retournePost(){
        return $this->post_data;
    }
}

?>