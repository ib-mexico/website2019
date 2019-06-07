<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function show($slug) {

        $return = redirect('/');

        $post = Post::where('slug', $slug)->first();

        if($post != null) {
            $lstMostViewed = Post::where('status', 'PUBLISHED')
                                ->where('deleted', 0)
                                ->limit(3)
                                ->orderBy('views_numb', 'DESC')
                                ->get();

            $lstLatestPosts = Post::where('status', 'PUBLISHED')
                                    ->where('deleted', 0)
                                    ->limit(4)
                                    ->orderBy('created_at', 'DESC')
                                    ->get();

            $return = view('contents.posts.Index', ['post'              => $post,
                                                    'lstMostViewed'     => $lstMostViewed, 
                                                    'lstLatestPosts'    => $lstLatestPosts]);
        }

        return $return;
    }
}
