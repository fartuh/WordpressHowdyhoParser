<?php

namespace engine;

class Parser
{
    public static function parsePosts($html){

        \phpQuery::newDocument($html);

        $data = ['posts' => ['title' => [], 'body' => []], 'link' => []];

        foreach(pq('div.item a[title=Скачать]') as $post){
            $post = pq($post);
            $title = $post->text();
            $href = $post->attr('href');
            $data['posts']['title'][] = $title;
            $data['link'][] = $href;
        }

        foreach(pq('div.desc]') as $body){
            $body = pq($body);
            $body = $body->text();
            $data['posts']['body'][] = $body;
        }

        return $data;

        \phpQuery::unloadDocuments();

    }
}
