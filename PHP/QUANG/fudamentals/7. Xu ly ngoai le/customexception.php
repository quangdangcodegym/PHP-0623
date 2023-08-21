<?php

class CustomException extends Exception
{
    public function errorMessage()
    {
        return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
    }
}

$email = "someoneexample..com";

try {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception($email);
    }
} catch (CustomException $e) {
    echo "Xu ly loi voi CustomException " . $e->errorMessage();
}catch (Exception $ex){
    echo "Xu ly loi voi Exception " . $ex->getMessage();
}
