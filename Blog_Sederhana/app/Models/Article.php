<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    
    protected $guarded = ['id'];
    
    protected $fillable = ['title','content','image','user_id','category_id'];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
