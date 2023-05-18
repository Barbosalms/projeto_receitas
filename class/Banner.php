<?php

class Banner{

    public static function mostrar():void
    {
       echo '<img class="img-fluid"
        src="img/'.rand(1,28).'.jpg">';
    }


}

?>