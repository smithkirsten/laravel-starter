<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Comment
{
    public $post;
    public $username;
    public $date;
    public $body;

    public function __construct($post, $username, $date, $body)
    {
        $this->post = $post;
        $this->username = $username;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all()
    {
        return cache()->rememberForever('comments.all', function() {
            return collect(File::files(resource_path("comments")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Comment(
                $document->post,
                $document->username,
                $document->date,
                $document->body()
                ) 
            )   
            ->sortByDesc('date');
        });
    }

    public static function findCommentsByPost($slug)
    {
        return static::all()->where('post', $slug);
    }

    public static function findCommentsByUser($username)
    {
        return static::all()->where('username', $username);
    }

}
