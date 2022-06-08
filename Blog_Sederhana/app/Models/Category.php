<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $guarded = ['id'];
    
    protected $fillable = ['name','user_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
