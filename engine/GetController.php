<?php

namespace engine;

class GetController
{

    public static function getHTML($url){
        $curl = new HTTP($url);

        $curl->setopt(CURLOPT_RETURNTRANSFER, true);
        $curl->setopt(CURLOPT_FOLLOWLOCATION, true);
        $curl->setopt(CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36');

        $curl->setopt(CURLOPT_COOKIEJAR, 'cookie.txt');
        $curl->setopt(CURLOPT_COOKIEFILE, 'cookie.txt');

        $curl->setopt(CURLOPT_SSL_VERIFYHOST, false);
        $curl->setopt(CURLOPT_SSL_VERIFYPEER, false);

        $html = $curl->exec();
        return $html;
    }
}
