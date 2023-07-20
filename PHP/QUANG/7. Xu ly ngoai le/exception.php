<?php
function checkNum($number): bool
{
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
try{
    checkNum(2);
}catch(Exception $e){
    echo $e->getMessage();
}



?>