<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\Category;
use App\Repositories\BaseRepository;
use DB;
use Auth;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version June 30, 2020, 9:53 am UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'category_id',
        'title',
        'content',
        'user_created'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }

    // Get category
    public function getCategory() {
        $listCategory = Category::all(['category_name', 'id'])->whereNull('deleted_at')->pluck('category_name', 'id');
        return $listCategory;
    }

    // Create post
    public function createPost($request) {
        $data = array (
            'category_id' => $request['category_id'],
            'title' => $request['title'],
            'content' => $request['content'],
            'user_created' => Auth::user()->id
        );
        Post::insert($data);
        return true;
    }

    // Get all post
    public function getAllPosts() {
        $posts = DB::table('posts')->select('posts.*', 'categories.category_name', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS full_name'))
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->leftjoin('users', 'users.id', '=', 'posts.user_created')
            ->whereNull('categories.deleted_at')
            ->whereNull('posts.deleted_at')
            ->orderby('posts.id')
            ->get();
        return $posts;
    }

    // Get post with id
    public function getPostById($post_id) {
        $post = DB::table('posts')->select('posts.*', 'categories.category_name', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS full_name'))
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->leftjoin('users', 'users.id', '=', 'posts.user_created')
            ->whereNull('categories.deleted_at')
            ->whereNull('posts.deleted_at')
            ->where('posts.id', '=', $post_id)
            ->get();
        return $post;
    }
}
