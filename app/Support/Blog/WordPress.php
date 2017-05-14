<?php

namespace App\Support\Blog;

use App\Contracts\Blog\Repository as Blog;
use GuzzleHttp\Client;

class WordPress implements Blog
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * WordPress constructor.
     */
    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * Get the latest posts.
     *
     * @param int $numberOfPosts
     * @return array
     */
    public function latest($numberOfPosts = 5)
    {
        $response = $this->client->get(config('url.blog') . '/wp-json/wp/v2/posts', ['per_page' => $numberOfPosts]);
        $body     = (string)$response->getBody();

        return json_decode($body);
    }
}
