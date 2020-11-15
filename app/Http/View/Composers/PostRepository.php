<?php
/**
 * Created by PhpStorm.
 * User: Abrorbek
 * Date: 11/10/2020
 * Time: 1:48 PM
 */

namespace App\Http\View\Composers;


use App\Models\Post;
use Illuminate\View\View;

class PostRepository
{
    private $post;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $view->with('posts',Post::all());
    }
}