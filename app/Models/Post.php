<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class Post extends Model
{
    // use HasFactory;

    protected $table = 'posts';

    protected $redis;

    // public function __construct(){
    //     $this->redis = Redis::connection();
    // }

    protected $fillable = [
        'title', 'description', 'is_published', 'image_path', 'excerpt'
    ];


    // public function getDataFromMySQL($id)
    // {
    //     return $this->find($id);
    // }

    // public function getValueFromRedis($key)
    // {
    //     return $this->redis->get($key);
    // }
}