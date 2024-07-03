<?php
class Response{
    public function setSattusCode(int $code){
        http_response_code($code);
    }

    public function redirect(string $url){
        header('Locaion: /'.$url);
    }
}
?>