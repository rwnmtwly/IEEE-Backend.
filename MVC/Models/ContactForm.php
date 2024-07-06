<?php
namespace app\models;

use app\core\Model;

class ContactForm extends Model{

    public string $subject = '';
    public string $email = '';
    public string $body = '';


    public function rules(): array{
        return [
            'subject' => [self::RULE_REQUIIRED],
            'email' => [self::RULE_REQUIIRED],
            'body' => [self::RULE_REQUIIRED],
        ];
    }

    public function labels(): array{
        return [
            'subject' => 'Enter your subject',
            'email' => 'Your email',
            'body' => 'body',
        ];
    }

    public function send(){
        return true;
    }
}
?>