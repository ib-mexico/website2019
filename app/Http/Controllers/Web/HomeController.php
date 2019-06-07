<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Tag;
use App\Slider;

class HomeController extends Controller
{
    public function index() {

        $lstSliders = Slider::where('deleted', 0)->get();

        $lstFeatured = Post::where('status', 'PUBLISHED')
                                ->where('highlight', 1)
                                ->where('deleted', 0)
                                ->limit(3)
                                ->orderBy('created_at', 'DESC')
                                ->get();

        $lstPosts = Post::where('status', 'PUBLISHED')
                            ->where('highlight', 0)
                            ->where('deleted', 0)
                            ->limit(3)
                            ->orderBy('created_at', 'DESC')
                            ->get();

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

        $lstTags = Tag::where('deleted', 0)->get();

        return view('contents.Index', [ 'lstSliders'        => $lstSliders,
                                        'lstFeatured'       => $lstFeatured, 
                                        'lstPosts'          => $lstPosts, 
                                        'lstMostViewed'     => $lstMostViewed, 
                                        'lstLatestPosts'    => $lstLatestPosts,
                                        'lstTags'           => $lstTags]);
    }
}
