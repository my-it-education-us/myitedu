<?php
namespace Dictionary;

class Dictionary{
    public $curl;
    public $parms;
    public $keyword;

    public function __construct()
    {
        $this->parms = $_GET;
        $this->curl =  curl_init();
        $this->keyword = $_GET['keyword']??'Awesome';
    }
    public function callCurl(){
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/".$this->keyword,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: wordsapiv1.p.rapidapi.com",
                "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
            ),
        ));
    }
    public function executeCurl(){
        $this->callCurl();
        return curl_exec($this->curl);
       //curl_error($this->curl);
    }
    public function __destruct()
    {
        curl_close($this->curl);
    }
}
$obj = new Dictionary();
$dictionary = $obj->executeCurl();
$dictionary = json_decode($dictionary);