<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();

        return view('home', [
            "title" => "Home",
            "posts" => $posts
        ]);
    }

    public function slugify($text, string $divider = '-') {
        $now = new DateTime();
        $timestamp = $now->format('YmdHis');
    
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
    
        // trim
        $text = trim($text, $divider);
    
        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);
    
        // lowercase
        $text = strtolower($text);
    
        if (empty($text)) {
          $text = 'n-a';
        }
    
        // trim slug to max 128 characters
        $slug = $timestamp . $divider . $text;
        $slug = substr($slug, 0, 128);
    
        return $slug;
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function newpost() {
        return view('newpost', [
            "title" => "New Post",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required|max:150',
        ]);

        $time_now = now();

        DB::table('posts')->insert([
            'user_id' => auth()->user()->id,
            'text' => $validatedData['text'],
            'slug' => $this->slugify($validatedData['text']),
            'created_at' => $time_now,
            'updated_at' => $time_now,
        ]);

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Post::destroy($request['post_id']);
        return redirect('/')->with('deletePostSuccess', "Post deleted");
    }
}
?>