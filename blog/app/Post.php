<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPaginate(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    public function index(Post $post)
    {
    return $post->get();
    }
}