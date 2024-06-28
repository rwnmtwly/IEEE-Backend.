<?php
class Response{
    public function setSattusCode(int $code){
        http_response_code($code);
    }
}
?>