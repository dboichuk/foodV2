<?php
//validate.php

/* return a value indication if food parameter is valid
    valid foods are not empty and do not contain anything except letters.
    @param String food
    @return boolean
*/
function validFood($food)
{
    $food=str_replace(" ","",$food);
    return !empty($food) && ctype_alpha($food);
}
