<?php

namespace App\Contracts\Blog;

interface Repository
{
    /**
     * Get the latest posts.
     *
     * @param int $numberOfPosts
     * @return array
     */
    public function latest($numberOfPosts = 5);
}
