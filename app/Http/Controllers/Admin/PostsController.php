<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use App\Library\Encryption;
use App\Library\Messages;
use App\Library\Errors;
use App\Library\FormatValidation;
use App\Library\Returns\ActionReturn;
use App\Library\Returns\AjaxReturn;

use App\Category;
use App\Post;
use App\Tag;
use Auth;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('panel.auth');
    }

    public function index() {
        $posts = Post::where('deleted', 0)->orderBy('created_at', 'DESC')->get();
        return view('panel.contents.publicaciones.Index', ['posts' => $posts]);
    }

    public function crear() {
        $categories = Category::where('deleted', 0)->get();
        $tags = Tag::where('deleted', 0)->get();

        return view('panel.contents.publicaciones.Create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store(Request $request) {

        $objReturn = new ActionReturn('panel/publicaciones/publicacion-crear', 'panel/publicaciones');

        if($request->file('image')) {

            $objPost = new Post();
            $objPost->pk_user      = Auth::user()->pk_user;
            $objPost->title        = $request['txtTitle'];
            $objPost->slug         = $request['txtSlug'];
            $objPost->excerpt      = $request['txtExcerpt'];
            $objPost->body         = $request['txtBody'];
            $objPost->status       = $request['rdEstatus'];
            $objPost->pk_category  = $request['cmbCategory'];
            $objPost->highlight    = $request['rdHighlight'];

            //CARGA LA IMAGEN DEL POST
            $storage = Storage::disk('s3');
            $path = $storage->put('images', $request->file('image'), 'public');

            $objPost->file = $path;
            try {
                if($objPost->create()) {
                    $objPost->tags()->attach($request->get('cmbTags'));
                    $objReturn->setResult(true, Messages::POSTS_CREATE_TITLE, Messages::POSTS_CREATE_MESSAGE);
                } else {
                    $objReturn->setResult(false, Errors::POSTS_CREATE_02_TITLE, Errors::POSTS_CREATE_02_MESSAGE);
                }
            } catch(Exception $exception) {
                $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
            }            
        }
        else {
            $objReturn->setResult(false, Errors::POSTS_CREATE_01_TITLE, Errors::POSTS_CREATE_01_MESSAGE);
        }

        return $objReturn->getRedirectPath();
    }

    public function edit($pkPost) {
        $return = redirect('panel/publicaciones');
        $objPost = Post::where('pk_post', $pkPost)->first();

        if($objPost != null) {
            $return = view('panel.contents.publicaciones.Edit', ['objPost' => $objPost]);
        }

        return $return;
    }
}
